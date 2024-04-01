<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Post;
use App\Models\Produk;
use Illuminate\Http\Request;

class BerandaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Post::all();
        return view('dashboard/beranda', compact('data'));
    }

    public function detail(string $id)
    {
        $data = Post::find($id);
        $produk = Produk::where('kategori_id', $data->kategori_id)->paginate(3);
        // dd($produk);
        return view('dashboard/detail', compact('data', 'produk'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        //
    }
}
