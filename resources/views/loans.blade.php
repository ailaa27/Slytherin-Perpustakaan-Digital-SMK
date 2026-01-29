@extends('layouts.app')

@section('content')
<div class="card">
    <h3>🔄 Peminjaman Buku</h3>
    <form>
        <p>Nama Peminjam</p>
        <input type="text" style="width:100%;padding:10px">

        <p>Judul Buku</p>
        <input type="text" style="width:100%;padding:10px">

        <br><br>
        <button style="padding:10px 20px;background:#2563eb;color:white;border:none;border-radius:8px">
            Simpan
        </button>
    </form>
</div>
@endsection
