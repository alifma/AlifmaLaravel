@extends('layout/main')
@section('title', 'Ubah Data')
@section('container')
<div class="container">
    <div class="row">
        <div class="col-8">
            <h1 class="mt-3">Form Ubah data student </h1>
            <form  method="post" action="/students/{{$student->id}}">
                @method('patch')
                    @csrf
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" placeholder="Masukkan nama" value={{$student->nama}}>
                        @error('nama')
                        <div class="invalid-feedback">{{$message}}
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="nim" class="form-label">NIM</label>
                        <input type="text" maxlength="10" class="form-control  @error('nim') is-invalid @enderror" id="nim" name="nim" placeholder="Masukkan nim" value={{$student->nim}}>
                        @error('nim')
                        <div class="invalid-feedback">{{$message}}
                        </div>
                        @enderror </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control  @error('email') is-invalid @enderror" id="email" name="email" placeholder="Masukkan email" value={{$student->email}}>
                        @error('email')
                        <div class="invalid-feedback">{{$message}}
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="jurusan" class="form-label">Jurusan</label>
                        <input type="text" class="form-control  @error('jurusan') is-invalid @enderror" id="jurusan" name="jurusan" placeholder="Masukkan jurusan" value={{$student->jurusan}}>
                        @error('jurusan')
                        <div class="invalid-feedback">{{$message}}
                        </div>
                        @enderror
                    </div>
                    <button class="btn btn-primary" type="submit">Ubah data</button>
            </form>
        </div>
    </div>
</div>
@endsection