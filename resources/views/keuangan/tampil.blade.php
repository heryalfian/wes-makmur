@extends('template')
@section('main')
    <h1>Keuangan</h1>
    <a href="{{ route('keuangan.create') }}" class="btn btn-primary">Tambah Data</a>
    <table class="table mt-3">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Tanggal</th>
                <th scope="col">Nama Produk</th>
                <th scope="col">Foto Nota</th>
                <th scope="col">Harga</th>
                <th scope="col">Keterangan</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $item->tanggalDibuat }}</td>
                    <td>{{ $item->namaProduk }}</td>
                    <td><img src="{{ asset('storage/' . $item->foto) }}" alt="" width="100px"></td>
                    <td>{{ $item->harga }}</td>
                    <td>{{ $item->keterangan }}</td>
                    <td>
                        <a href="{{ route('keuangan.edit', $item->id) }}" class="btn btn-warning"><i
                                class="fa-regular fa-pen-to-square"></i></a>
                        <form action="{{ route('keuangan.destroy', $item->id) }}" method="post" class="d-inline"
                            onsubmit="return confirm('Yakin hapus data?')">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger"><i class="fa-regular fa-trash-can"></i></button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
