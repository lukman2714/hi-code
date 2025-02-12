<?php

namespace App\Http\Controllers;

use App\Models\Gudang\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $supplier = Supplier::all();
        return view('supplier/index', compact('supplier'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('supplier/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'addmore.*.nama_supplier' => 'required',
            'addmore.*.no_hp' => 'required',
            'addmore.*.alamat' => 'required'
        ]);

        foreach ($request->addmore as $key => $value) {
            Supplier::create($value);
        }
        // dd($request->addmore);
        return back()->with('success', 'Record Created Successfully.');
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
        $request->validate([
            'nama_supplier' => 'required|string|max:255',
        ], [
            'nama_supplier.required' => 'Nama supplier tidak boleh kosong.',
            'nama_supplier.string' => 'Nama supplier harus berupa teks.',
            'nama_supplier.max' => 'Nama supplier tidak boleh lebih dari 255 karakter.',
        ]);

        // Cari data supplier berdasarkan ID
        $supplier = Supplier::find($id);

        // Jika data tidak ditemukan, kembalikan dengan pesan error
        if (!$supplier) {
            return redirect()->route('supplier.index')->with('pesan', 'Data supplier tidak ditemukan.');
        }

        try {
            // Update data supplier
            $supplier->update([
                'nama_supplier' => $request->nama_supplier,
                'no_hp' => $request->no_hp,
                'alamat' => $request->alamat,
            ]);

            // Redirect dengan pesan sukses
            return redirect()->route('supplier.index')->with('pesan', 'Berhasil di edit.');
        } catch (\Exception $e) {
            // Jika terjadi kesalahan saat update, kembalikan dengan pesan error
            return redirect()->route('supplier.index')->with('pesan', 'Gagal di edit: ' . $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Supplier::find($id)->delete();
        return back()->with('pesan', 'berhasil di hapus');
    }
}
