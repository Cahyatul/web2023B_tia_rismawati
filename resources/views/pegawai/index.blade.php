@extends('layouts.master')

@section('content')
    <div class="container">
        <a class="btn btn-primary" href="/pegawai/create">Add Pegawai</a>
        <table class="table table-striped">
            <tr>
                <th>NO</th>
                <th>Nama</th>
                <th>ID Pegawai</th>
                <th>Jenis Kelamin</th>
                <th>Alamat</th>
                <th>Aksi</th>
            </tr>
            @foreach ($pegawai as $p)
            <tr>
                <td>{{$p->id}}</td>
                <td>{{$p->nama}}</td>
                <td>{{$p->id_pegawai}}</td>
                <td>{{$p->jenis_kelamin}}</td>
                <td>{{$p->alamat}}</td>
                <td>
                    <div class="btn-group" role="group" aria-label="Basic example">
                    <a class="btn btn-warning" href="/pegawai/{{$p->id}}/edit">Edit</a>
                    <form action="/pegawai/{{$p->id}}" method="POST">
                        @csrf
                        @method('delete')
                        <input class="btn btn-danger" type="submit" value="Delete">
                    </form>
                    </div>
                </td>
            </tr>
            @endforeach
        </table>
        <a href="http://127.0.0.1:8000/home" class="btn btn-secondary">Back</a>
    </div>
@endsection
