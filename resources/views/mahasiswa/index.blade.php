@extends('layout/main')
@section('title', 'Data Mahasiswa')
@section('container')
<div class="container">
    <div class="row">
        <div class="col-10">
        <h1 class="mt-3">Daftar Mahasiswa</h1>
        <table class="table">
            <thead class="table-dark">
               <tr>
                    <th scope="col">#</th>
                    <th scope="col">NIM</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Email</th>
                    <th scope="col">Jurusan</th>
                    <th scope="col">Aksi</th>
               </tr>
            </thead>
            <tbody>
            @foreach ($mahasiswa as $m)
            <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $m->nim }}</td>
                <td>{{ $m->nama }}</td>
                <td>{{ $m->email }}</td>
                <td>{{ $m->jurusan }}</td>
                <td>
                    <a href=""><span class="bg-success badge">Edit</span></a>
                    <a href=""><span class="bg-danger badge">Delete</span></a>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
        </div>
    </div>
</div>
@endsection
