@extends('layouts.app')
@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2>Daftar Jurusan</h2>
        <a href="{{ route('majors.create') }}" class="btn btn-primary">Tambah Jurusan</a>
    </div>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>
                        Nama
                        <a href="{{ route('majors.index', ['sort' => 'name', 'order' => $sort === 'name' && $order === 'asc' ? 'desc' : 'asc']) }}"
                            class="btn btn-link btn-sm p-0">
                            <span>&#8597;</span>
                        </a>
                    </th>
                    <th>
                        Jumlah Mahasiswa
                        <a href="{{ route('majors.index', ['sort' => 'students_count', 'order' => $sort === 'students_count' && $order === 'asc' ? 'desc' : 'asc']) }}"
                            class="btn btn-link btn-sm p-0">
                            <span>&#8597;</span>
                        </a>
                    </th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($majors as $major)
                    <tr>
                        <td>{{ $major->name }}</td>
                        <td>{{ $major->students_count }}</td>
                        <td>
                            <a href="{{ route('majors.show', $major->id) }}" class="btn btn-info btn-sm">Detail</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
