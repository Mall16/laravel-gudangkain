@extends('layout.app')

@section('title')
Kain | Gudang Kain
@endsection

@section('content')
<h3>Data Kain</h3>
<a class="tambah" href="/kain/tambah">Tambah</a>
<a class="tambah" href="/kain/cetak" style="margin-left: 10px;">Cetak Report</a>
<table class="table-data">
  <thead>
    <tr>
        <th>Nama Kain</th>
        <th>Harga</th>
        <th>Stok</th>
        <th>Aksi</th>
    </tr>
  </thead>
  <tbody>
    @forelse ($kain as $kain)
    <tr>
      <td>{{ $kain->nama_kain }}</td>
      <td>Rp. {{ number_format($kain->harga) }}</td>
      <td>{{ $kain->stok }}</td>
      <td>
        <a class='btn-edit' href="/kain/edit/{{ $kain->id_kain }}">Edit</a>
        |
        <a class='btn-hapus' href="/kain/hapus/{{ $kain->id_kain }}">Hapus</a>
      </td>
    </tr>
    @empty
    <tr>
      <td colspan="5" align="center">Tidak ada data</td>
    </tr>
    @endforelse
  </tbody>
</table>
@endsection
