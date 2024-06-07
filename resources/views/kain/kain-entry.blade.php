@extends('layout.app')

@section('title')
Kain | Gudang Kain
@endsection

@section('content')
<h3>Entry Data Kain</h3>
<form action="{{ url('/kain/store') }} " method="post">
    @csrf
    <label for="nama">Nama Barang (Kain) :</label>
    <input type="text" id="nama" name="nama" required>

    <label for="harga">Harga /buah :</label>
    <input type="number" id="harga" name="harga" required>

    <label for="stok">Stok :</label>
    <input type="number" id="stok" name="stok" required>

    <button type="submit" name="simpan">Simpan</button>
</form>
@endsection
