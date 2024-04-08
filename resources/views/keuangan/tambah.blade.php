@extends('template')

@section('main')
    <h1>Tambah Data</h1>
    <form action="{{ route('keuangan.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label>Tanggal</label>
            <input min="2000-01-01" max="2019-12-31" name="date_of_birth" id="dob" type="date" class="form-control"
                placeholder="Date of birth" />
        </div>
        <div class="form-group">
            <label>Nama Produk</label>
            <input type="string" class="form-control @error('namaProduk') is-invalid @enderror" name="namaProduk">
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
            <input type="number" class="form-control @error('harga') is-invalid @enderror" name="harga">
        </div>
        <div class="form-group mb-4">
            <label>Deskripsi</label>
            <input type="text" class="form-control @error('keterangan') is-invalid @enderror" name="keterangan">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
