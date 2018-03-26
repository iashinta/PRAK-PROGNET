<?php

namespace App\Http\Controllers;

use App\barang;
use App\satuan;
use App\kategori;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index()
    {
        $barang = barang::all();
        return view('databarang', compact('barang'));
    }

    public function create()
    {
        $satuan = satuan::all();
        return view('tambahbarang', compact('satuan'));
    }

    public function createSatuan()
    {
        $satuan = satuan::all();
        return view('satuan', compact('satuan'));
    }

    public function storeSatuan(Request $req)
    {
        $satuan = new satuan;
        $satuan->nama = $req->nama;
        $satuan->save();
        return redirect('barang'); 
    }
    
    public function store(Request $request)
    {
        $barang = new barang;
        $this->validate($request,[
            'kode' => 'required',
            'nama' => 'required|regex:/(^[A-Za-z ]+$)+/',
            'harga' => 'required|numeric',
            'id_satuan' => 'required'
        ]);
        $barang->kode = $request->kode; 
        $barang->nama = $request->nama;
        $barang->harga = $request->harga;
        $barang->id_satuan = $request->id_satuan;
        $barang->save();
        return redirect('barang'); 
    }

    public function show(barang $barang)
    {
        $barang = barang::with('satuan')->get();
        return view('index', compact('barang'));
    }

    public function edit($id)
    {
        $barangbaru = barang::find($id);
        $satuan = satuan::all();
        return view('edit', compact('barangbaru', 'id', 'satuan'));
    }

    public function update(Request $request, $id)
    {
        $barang = barang::find($id);
        $this->validate($request,[
            'kode' => 'required|numeric',
            'nama' => 'required|regex:/(^[A-Za-z ]+$)+/',
            'harga' => 'required|numeric',
            'id_satuan' => 'required'
        ]);
        $barang->kode = $request->kode; 
        $barang->nama = $request->nama;
        $barang->harga = $request->harga;
        $barang->id_satuan = $request->id_satuan;
        $barang->save();
        return redirect('barang'); 
    }

    public function destroy($id)
    {
        $barangbaru = barang::find($id);
        $barangbaru->delete();
        return redirect('/barang');
    }
}
