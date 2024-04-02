@extends('template')
@section('sidebar')
    @if (Auth::user()->role == 'admin')
        <a class="nav-link" href="{{ url('kategori') }}">
            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
            Kategori
        </a>
        <a class="nav-link" href="{{ url('post') }}">
            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
            Post
        </a>
        <a class="nav-link" href="{{ url('produk') }}">
            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
            Produk
        </a>

        <a class="nav-link" href="{{ url('user') }}">
            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
            User
        </a>
    @endif
    @if (Auth::user()->role == 'editor')
        <a class="nav-link" href="{{ url('kategori') }}">
            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
            Kategori
        </a>
        <a class="nav-link" href="{{ url('post') }}">
            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
            Post
        </a>
        <a class="nav-link" href="{{ url('produk') }}">
            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
            Produk
        </a>
    @endif
    @if (Auth::user()->role == 'user')
        <a class="nav-link" href="{{ url('user') }}">
            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
            User
        </a>
    @endif
@endsection
