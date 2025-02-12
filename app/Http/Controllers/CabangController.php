<?php

namespace App\Http\Controllers;

use App\Models\Bisnis\CabangBisnis;
use Illuminate\Http\Request;

class CabangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $cabang = CabangBisnis::all();
        // dd($cabang);
        return view('cabang.index', compact('cabang'));
    }
    public function getCabang()
    {
        $cabang = CabangBisnis::all();

        return response()->json([
            'success' => true,
            'message' => 'Data cabang berhasil diambil.',
            'data' => $cabang
        ], 200); // Status HTTP 200 untuk menunjukkan permintaan berhasil
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cabang.create');
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
            'addmore.*.nama_cabang' => 'required',
            'addmore.*.alamat' => 'required',
            'addmore.*.no_hp' => 'required',
            'addmore.*.fungsi' => 'required'
        ]);

        foreach ($request->addmore as $key => $value) {
            CabangBisnis::create($value);
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
        $cabang = CabangBisnis::find($id);
        return view('cabang.edit', compact('cabang'));
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
        $cabang = CabangBisnis::find($id);
        $cabang->update($request->all());
        return redirect(route('cabang.index'))->with('pesan', 'berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        CabangBisnis::find($id)->delete();
        return back()->with('pesan', 'berhasil di hapus');
    }
}
