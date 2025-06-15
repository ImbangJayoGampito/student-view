@extends('layouts.app')



@section('content')
    <div class="card">
        <div class="card-header">
            <h3>Detail Mahasiswa</h3>
        </div>
        <div class="card-body">
            <table class="table table-bordered  table-hover">
                <tr>
                    <th>NIM</th>
                    <td>{{ $student->nim }}</td>
                </tr>
                <tr>
                    <th>Nama</th>
                    <td>{{ $student->name }}</td>
                </tr>
                <tr>
                    <th>Alamat</th>
                    <td>{{ $student->address }}</td>
                </tr>
                <tr>
                    <th>Jurusan</th>
                    <td>{{ $student->major ? $student->major->name : '-' }}</td>
                </tr>

                <tr>
                    <th>Mata Kuliah</th>
                    <td>
                        @if ($student->subjects && $student->subjects->count())
                            <ul class="mb-0">
                                @foreach ($student->subjects as $subject)
                                    <a href="{{ route('subjects.show', $subject->id) }}"
                                        class="btn btn-outline-dark btn-sm w-100 mb-1">
                                        {{ $subject->name }} ({{ $subject->sks }} SKS)
                                    </a>
                                @endforeach
                            </ul>
                        @else
                            <span>-</span>
                        @endif
                    </td>
                </tr>
                <tr>
                    <th>Jumlah SKS</th>
                    <td>
                        {{ $student->subjects->sum('sks') }}
                    </td>
                </tr>
            </table>
            <a href="{{ route('students.index') }}" class="btn btn-secondary">Kembali ke Daftar</a>
        </div>

    </div>
@endsection
