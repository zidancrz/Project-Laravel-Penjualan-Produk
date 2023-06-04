@extends('Layout.layout')

@section('content')

@include('Component.navbar')
<div class="container">

    <h1>Tambah Data Produk</h1>

    <form action="dashboard-tambah-produk" method="POST">
        @csrf
        <div class="form-group">
            <label>Id Produk</label>
            <input type="text" class="form-control" placeholder="ID Produk" name="id_produk">
        </div>
        <div class="form-group">
            <label>Nama Produk</label>
            <input type="text" class="form-control" placeholder="Nama Produk" name="nama">
        </div>
        <div class="form-group">
            <label>Kategori Produk</label>
            <select class="form-select" name="id_kategori" id="id_kategori" required>
                @foreach ($kategori as $ktg)
                <option value="{{ $ktg->id_kategori }}">{{ $ktg->id_kategori }} {{ $ktg->deskripsi }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

@endsection
