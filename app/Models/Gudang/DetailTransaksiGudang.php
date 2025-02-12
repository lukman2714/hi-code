<?php

namespace App\Models\Gudang;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailTransaksiGudang extends Model
{
    protected $table = "detail_transaksi_gudang";
    protected $fillable = [
        'id',
        'no_invoice',
        'barang_id',
        'harga_modal',
        'harga_jual',
        'quantity',
        'discount',
        'potongan_harga',
        'subtotal_modal',
        'subtotal_jual',
        'tanggal_transaksi'
    ];

    public function cabang()
    {
        return $this->belongsTo('App\CabangModel');
    }
    public function bahanbaku()
    {
        return $this->belongsTo('App\BahanbakuModel');
    }


    public function order()
    {
        return $this->belongsTo('App\OrdertModel', 'order');
    }

    public function paket()
    {
        return $this->belongsTo('App\PaketModel', 'paket');
    }
    public function item()
    {
        return $this->belongsTo('App\ItemModel', 'item');
    }
}
