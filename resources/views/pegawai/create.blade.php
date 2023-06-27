@extends('layouts.master')

@section('content')

<div class="container">
    <h1>Create Pegawai</h1>

    <form action="/pegawai/store" method="POST">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nama</label>
            <input type="text" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">ID Pegawai</label>
            <input type="text" name="id_pegawai" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
        
        @csrf
        <select class="form-select" name="jenis_kelamin">
            <option value="">Pilih Jenis Kelamin</option>
            <option value="L">Laki-Laki</option>
            <option value="P">Perempuan</option>
        </select><br>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Alamat</label>
        <textarea class="form-control" name="alamat" rows="10"></textarea><br>
        </div>
        <input type="submit" name="submit" class="btn btn-info" value="save">
        <a href="http://127.0.0.1:8000/pegawai" class="btn btn-secondary">Back</a>
    </form>
</div>

@endsection