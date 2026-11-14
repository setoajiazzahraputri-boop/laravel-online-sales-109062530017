@extends('layouts.app')

@section('title', 'Masuk · Ruang Belanja')

@section('content')
<div class="card">
    <div class="eyebrow">SELAMAT DATANG KEMBALI</div>
    <h1>Masuk ke akunmu</h1>
    <p class="subtitle">Lanjutkan belanja dan pantau pesanan dengan mudah.</p>

    <form method="POST" action="{{ url('/login') }}">
        @csrf
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" value="{{ old('email') }}" required>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>
        </div>
        <button type="submit" class="btn">Masuk</button>
    </form>

    <p class="switch">Belum punya akun? <a href="{{ url('/register') }}">Daftar di sini</a></p>
</div>
@endsection