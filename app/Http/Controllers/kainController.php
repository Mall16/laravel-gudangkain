<?php

namespace App\Http\Controllers;

use App\Models\kain;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class kainController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kain = kain::all();
        return view('kain.index', compact('kain'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('kain.kain-entry');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'harga' => 'required',
            'stok' => 'required',
        ]);

        kain::create([
            'nama_kain' => $request->nama,
            'harga' => $request->harga,
            'stok' => $request->stok,
        ]);

        return redirect('/kain');
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
    public function edit(string $id_kain)
    {
        $kain = kain::find($id_kain);
        return view('kain.kain-edit', compact('kain'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id_kain)
    {
        $request->validate([
            'nama' => 'required',
            'harga' => 'required',
            'stok' => 'required',
        ]);

        $kain = kain::find($id_kain);
        $kain->update([
            'nama_kain' => $request->nama,
            'harga' => $request->harga,
            'stok' => $request->stok,
        ]);

        return redirect('/kain');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete($id_kain)
    {
        $kain = kain::find($id_kain);
        return view('kain.kain-hapus', compact('kain'));
    }

    public function destroy(string $id_kain)
    {
        $kain = kain::find($id_kain);
        $kain->delete();
        return redirect('/kain');

    }
    public function cetak()
    {
        $kain = kain::all();
        $pdf = Pdf::loadview('kain.kain-cetak', compact('kain'));
        return $pdf->download('laporan-kain.pdf');
    }
}
