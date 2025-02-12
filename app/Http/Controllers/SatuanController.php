<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Retail\Satuan;

class SatuanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $satuan = Satuan::all();
        return view('satuan/index', compact('satuan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('satuan/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'addmore.*.nama_satuan' => 'required'
        ]);

        foreach ($request->addmore as $key => $value) {
            Satuan::create($value);
        }
        // dd($request->addmore);
        return back()->with('success', 'Record Created Successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $satuan = Satuan::find($id);
        return view('satuan.edit', compact('satuan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'nama_satuan' => 'required|string|max:255',
        ], [
            'nama_satuan.required' => 'Nama satuan tidak boleh kosong.',
            'nama_satuan.string' => 'Nama satuan harus berupa teks.',
            'nama_satuan.max' => 'Nama satuan tidak boleh lebih dari 255 karakter.',
        ]);

        // Cari data satuan berdasarkan ID
        $satuan = Satuan::find($id);

        // Jika data tidak ditemukan, kembalikan dengan pesan error
        if (!$satuan) {
            return redirect()->route('satuan.index')->with('pesan', 'Data satuan tidak ditemukan.');
        }

        try {
            // Update data satuan
            $satuan->update([
                'nama_satuan' => $request->nama_satuan,
            ]);

            // Redirect dengan pesan sukses
            return redirect()->route('satuan.index')->with('pesan', 'Berhasil di edit.');
        } catch (\Exception $e) {
            // Jika terjadi kesalahan saat update, kembalikan dengan pesan error
            return redirect()->route('satuan.index')->with('pesan', 'Gagal di edit: ' . $e->getMessage());
        }
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Satuan::find($id)->delete();
        return back()->with('pesan', 'berhasil di hapus');
    }
}
