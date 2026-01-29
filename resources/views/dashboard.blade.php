@extends('layouts.app')

@section('content')
<h2>Dashboard Perpustakaan</h2>

<div class="grid">
    <div class="card">
        <i class="fas fa-book"></i>
        <h3>1.240</h3>
        <p>Total Buku</p>
    </div>

    <div class="card">
        <i class="fas fa-layer-group"></i>
        <h3>12</h3>
        <p>Rak Buku</p>
    </div>

    <div class="card">
        <i class="fas fa-repeat"></i>
        <h3>320</h3>
        <p>Buku Dipinjam</p>
    </div>

    <div class="card">
        <i class="fas fa-users"></i>
        <h3>210</h3>
        <p>Anggota</p>
    </div>
</div>
@endsection
