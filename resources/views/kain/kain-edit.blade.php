@extends('layout.app')

@section('title')
Kain | Gudang Kain
@endsection

@section('content')
<h3>Entry Data Kain</h3>
<form action="{{ url('/kain/update/'.$kain->id_kain) }} " method="post">
    @csrf
    @method('put')
    <label for="nama">Nama Barang (Kain) :</label>
    <input type="text" id="nama" name="nama" value="{{ old('nama', $kain->nama_kain) }}"  required>

    <label for="harga">Harga /buah :</label>
    <input type="number" id="harga" name="harga" value="{{ old('harga', $kain->harga) }}" required>

    <label for="stok">Stok :</label>
    <input type="number" id="stok" name="stok" value="{{ old('stok', $kain->stok) }}" required>

    <button type="submit" name="simpan">Simpan</button>
</form>
@endsection
