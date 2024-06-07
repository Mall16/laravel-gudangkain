@extends('layout.app')

@section('title')
Kain | Gudang Kain
@endsection

@section('content')
<h3>Hapus Data Kain</h3>
<div>
  <h4>Ingin Menghapus Data ?</h4>
    <button type="submit" class="btn-yes" name="hapus">
        <a href={{ url('/kain/destroy/' . $kain->id_kain)}}>Yes</a>
    </button>
    <button type="submit" class="btn-no" name="tidak">
        <a href="/kain">No</a>
    </button>
</div>
@endsection
