@extends('layouts.app')

@section('content')
<div class="card">
    <h3>📚 Daftar Buku</h3>
    <table width="100%" cellpadding="10">
        <tr style="background:#e0e7ff">
            <th>Judul</th>
            <th>Kategori</th>
            <th>Status</th>
        </tr>
        <tr>
            <td>Laravel Dasar</td>
            <td>Teknologi</td>
            <td>Tersedia</td>
        </tr>
        <tr>
            <td>Pemrograman Web</td>
            <td>IT</td>
            <td>Dipinjam</td>
        </tr>
    </table>
</div>
@endsection
