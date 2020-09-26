@extends('layout/main')
@section('title', 'Data Mahasiswa')
@section('container')
<div class="container">
    <div class="row">
        <div class="col-6">
        <h1 class="mt-3">Detail Student </h1>
        <a href="{{ url('/students/create') }}" class="btn">Create</a>
        <div class="card" >
            <div class="card-body">
              <h5 class="card-title">{{$student->nama}}</h5>
              <h6 class="card-subtitle mb-2 text-muted">{{ $student->nim }}</h6>
              <p class="card-text">{{ $student->email }}</p>
              <p class="card-text">{{ $student->jurusan }}</p>
              <button class="btn-success btn">Edit</button>
              <button class="btn-danger btn">Delete</button>
              <a href="{{ url('/students') }}" class="card-link float-right">Kembali</a>
            </div>
          </div>
        </div>
    </div>
</div>
@endsection
