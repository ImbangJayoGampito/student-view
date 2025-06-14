{{-- filepath: d:\WebDev\Laravel\student-view\resources\views\majors\show.blade.php --}}
@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3>Detail Jurusan</h3>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <tr>
                    <th>Nama Jurusan</th>
                    <td>{{ $major->name }}</td>
                </tr>
                <tr>
                    <th>Daftar Mahasiswa</th>
                    <td>
                        @if ($major->students && $major->students->count())
                            <table class="table table-sm table-bordered mb-0">
                                <thead>
                                    <tr>
                                        <th>NIM</th>
                                        <th>Nama</th>
                                        <th>Alamat</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($major->students as $student)
                                        <tr>
                                            <td>{{ $student->nim }}</td>
                                            <td>{{ $student->name }}</td>
                                            <td>{{ $student->address }}</td>
                                            <td> <a href="{{ route('students.show', $student->id) }}"
                                                    class="btn btn-info
btn-sm">Detail</a></td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        @else
                            <span>-</span>
                        @endif
                    </td>
                </tr>
            </table>
        </div>
    </div>
@endsection
