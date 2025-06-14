{{-- filepath: d:\WebDev\Laravel\student-view\resources\views\subjects\show.blade.php --}}
@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3>Informasi Umum Mata Kuliah</h3>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <tr>
                    <th>Nama Mata Kuliah</th>
                    <td>{{ $subject->name }}</td>
                </tr>
                <tr>
                    <th>SKS</th>
                    <td>{{ $subject->sks }}</td>
                </tr>
            </table>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <h3>Siswa Yang Mengambil</h3>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <td>
                            Jurusan
                        </td>
                        <td>
                            NIM
                        </td>
                        <td>
                            Nama Siswa
                        </td>
                        <td>
                            Alamat
                        </td>
                        <td>
                            Aksi
                        </td>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($subject->students as $student)
                        <tr>
                            <td>{{ $student->major ? $student->major->name : '-' }}</td>
                            <td>{{ $student->nim }}</td>
                            <td>{{ $student->name }}</td>
                            <td>{{ $student->address }}</td>
                            <td>
                                <a href="{{ route('students.show', $student->id) }}" class="btn btn-info btn-sm">Detail</a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-center">Tidak ada mahasiswa yang mengambil mata kuliah ini.</td>
                        </tr>
                    @endforelse

                </tbody>
            </table>
        </div>
    </div>
@endsection
