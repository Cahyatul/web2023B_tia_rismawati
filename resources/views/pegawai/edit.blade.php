@extends('layouts.master')

@section('content')
<div class="container">
    <h1>Edit Data</h1>

    <form action="/pegawai/{{$pegawai->id}}" method="POST">
        @method('put')
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nama</label>
            <input type="text" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$pegawai->nama}}">
          </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">ID Pegawai</label>
            <input type="text" name="id_pegawai" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$pegawai->id_pegawai}}">
          </div>
        
        @csrf
        <select class="form-select" name="jenis_kelamin">
            <option value="">Pilih Jenis Kelamin</option>
            <option value="L" @if ($pegawai->jenis_kelamin == 'L') selected @endif>Laki-Laki</option>
            <option value="P" @if ($pegawai->jenis_kelamin == 'P') selected @endif>Perempuan</option>
        </select><br>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Alamat</label>
        <textarea class="form-control" name="alamat" rows="10">{{$pegawai->alamat}}</textarea><br>
        </div>
        <input type="submit" name="submit" class="btn btn-info" value="Update">
        <a href="http://127.0.0.1:8000/pegawai" class="btn btn-secondary">Back</a>
    </form>
</div>
@endsection