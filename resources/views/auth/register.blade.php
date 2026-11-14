@extends('layouts.app')

@section('title', 'Daftar · Ruang Belanja')

@section('content')
<div class="card">
    <div class="icon-badge">@</div>
    <div class="eyebrow">MULAI DARI SINI</div>
    <h1>Buat akun belanja</h1>
    <p class="subtitle">Daftar gratis dan mulai belanja.</p>

    <form method="POST" action="{{ url('/register') }}">
        @csrf
        <div class="form-group">
            <label for="name">Nama lengkap</label>
            <input type="text" id="name" name="name" value="{{ old('name') }}" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" value="{{ old('email') }}" required>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>
            <div class="hint">Minimal 8 karakter.</div>
        </div>
        <div class="form-group">
            <label for="password_confirmation">Ulangi password</label>
            <input type="password" id="password_confirmation" name="password_confirmation" required>
        </div>
        <button type="submit" class="btn">Buat Akun</button>
    </form>

    <p class="switch">Sudah punya akun? <a href="{{ url('/login') }}">Masuk</a></p>
</div>
@endsection