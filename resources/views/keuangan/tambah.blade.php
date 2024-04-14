@extends('template')

@section('main')
    <h1>Tambah Data</h1>
    <form action="{{ route('keuangan.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label>Tanggal Nota</label>
            <input name="tanggalDibuat" id="tanggalDibuat" type="date"
                class="form-control @error('tanggalDibuat') is-invalid @enderror" value="{{ old('tanggalDibuat') }}" />
        </div>
        <div class="form-group">
            <label>Nama Produk</label>
            <input type="string" class="form-control @error('namaProduk') is-invalid @enderror" name="namaProduk"
                value="{{ old('namaProduk') }}">
        </div>
        <div class="form-group">
            <label>Foto</label>
            <div class="custom-file">
                <input type="file" class="custom-file-input" name="foto">
                <label class="custom-file-label" for="customFile">Choose file</label>
            </div>
        </div>
        <div class="form-group">
            <label>Harga</label>
            <input type="number" class="form-control @error('harga') is-invalid @enderror" name="harga"
                value="{{ old('harga') }}">
        </div>
        <div class="form-group mb-4">
            <label>Deskripsi</label>
            <input type="text" class="form-control @error('keterangan') is-invalid @enderror" name="keterangan"
                value="{{ old('keterangan') }}">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
