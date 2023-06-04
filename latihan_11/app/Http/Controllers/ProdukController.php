<?php

namespace App\Http\Controllers;

use App\Models\produk;
use App\Models\kategori;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class ProdukController extends Controller
{
    public function index()
    {
        $data['produk'] = produk::join('kategori','produk.id_kategori','=','kategori.id_kategori')
            ->select('produk.*','kategori.deskripsi')
            ->get();
        return view('content.dashboard-produk',$data);
    }

    public function create(){
        $data['kategori'] = kategori::all();
        return view('content.dashboard-tambah-produk', $data);
    }
    public function store(Request $request)
    {
        $input = $request->all();
        produk::create($input);
        return redirect('dashboard-produk');
    }

    public function print()
    {
        $data['produk'] = produk::join('kategori',
        'produk.id_kategori', '=', 'kategori.id_kategori')
        ->select('produk.*', 'kategori.deskripsi')
        ->get();

        $pdf = PDF::loadView('content.print-produk', $data);
        return $pdf->stream();
    }
}
