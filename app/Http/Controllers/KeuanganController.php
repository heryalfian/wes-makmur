<?php

namespace App\Http\Controllers;

use App\Models\Keuangan;
use Illuminate\Http\Request;

class KeuanganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Keuangan::all();
        return view('keuangan/tampil', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = Keuangan::all();
        return view('keuangan/tambah', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $validator = $request->validate([
            'tanggalDibuat' => 'required | date',
            'namaProduk' => 'required | string',
            'foto' => 'required | mimes:png,jpg,jpeg | max:2000',
            'harga' => 'required | integer',
            'keterangan' => 'required | string',
        ]);
        // dd($validator);
        $validator['foto'] = $request->file('foto')->store('img');
        Keuangan::create($validator);
        return redirect('keuangan')->with('data berhasil ditambah');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Keuangan::find($id);
        $data->delete();
        return redirect('keuangan')->with('success', 'Data berhasil dihapus');
    }
}
