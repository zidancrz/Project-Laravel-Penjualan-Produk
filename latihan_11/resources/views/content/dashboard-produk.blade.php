@extends('layout.layout')

@section('content')

@include('component.navbar')
<div class="container">

    <h1>Data Produk</h1>

    <a href="dashboard-tambah-produk" class="btn btn-primary">Tambah Data</a>

    <table class="table">   
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Kode Produk</th>
                <th scope="col">Nama Produk</th>
                <th scope="col">Kategori Produk</th>
                <th scope="col">Deskripsi</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($produk as $pro)
            <tr>
                <td>{{ $pro->id }}</td>
                <td>{{ $pro->id_produk }}</td>
                <td>{{ $pro->nama }}</td>
                <td>{{ $pro->id_kategori }}</td>
                <td>{{ $pro->deskripsi }}</td>
                <td>
                    <form action="{{ url('dashboard-delete-produk', $pro->id) }}" method="post">
                        @csrf
                        @method('delete')
                        <a href="{{ 'dashboard-edit-produk/'.$pro->id }}" class="btn btn-warning">Edit</a>
                        <button class="btn btn-danger" type="submit" onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                </td>
                <td> <a href="{{'print-produk'}}" class="btn btn-warning">Print</a </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
