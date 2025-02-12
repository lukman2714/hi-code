<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gudang\Bahanbaku;
use App\Models\Bisnis\CabangBisnis;
use App\Models\Bisnis\Gudang;
use App\Models\Retail\Satuan;

class BahanBakuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $bahanbaku = BahanBaku::join('satuans', 'bahanbaku.satuan_id', 'satuans.id')
            ->select('bahanbaku.id', 'bahanbaku.nama_bahanbaku', 'bahanbaku.harga_modal', 'bahanbaku.harga_jual', 'bahanbaku.berat', 'satuans.nama_satuan')
            ->get();
        // dd($bahanbaku);
        return view('bahanbaku.index', compact('bahanbaku'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $satuan = Satuan::all();
        $cabang = CabangBisnis::all();
        return view('bahanbaku.create', compact('cabang', 'satuan'));
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
            'addmore.*.nama_bahanbaku' => 'required',
            'addmore.*.harga_modal' => 'required',
            'addmore.*.harga_jual' => 'required',
            'addmore.*.berat' => 'required',
            'addmore.*.satuan_id' => 'required'
        ]);

        foreach ($request->addmore as $key => $value) {
            BahanBaku::create($value);
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
        $satuan = Satuan::all();
        $bahanbaku = BahanBaku::find($id);
        return view('bahanbaku.edit', compact('bahanbaku', 'satuan'));
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
        $bahanbaku = BahanBaku::find($id);
        $id = $bahanbaku->id;
        $harga_modal = $request->harga_modal;
        $harga_jual = $request->harga_jual;
        $bahanbaku->update($request->all());
        // dd($harga_jual);
        // $stok = GudangModel::where('id_bahanbaku',$id)->select('stok')->get();
        $gudang = Gudang::where('bahanbaku_id', $id)->update(['harga_modal' => $harga_modal, 'margin' => ($harga_modal * $harga_jual / 100), 'subtotal_modal' => DB::raw("margin * stok")]);
        // dd($gudang);
        return redirect(route('bahanbaku.index'))->with('pesan', 'berhasil di Ubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        BahanBaku::find($id)->delete();
        return back()->with('pesan', 'berhasil di hapus');
    }
}
