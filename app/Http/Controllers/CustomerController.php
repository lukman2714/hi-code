<?php

namespace App\Http\Controllers;

use App\Models\Retail\Customer;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Log;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $customer = Customer::all();
        return view('customer/index', compact('customer'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $client = new Client();

        try {
            // Ambil data Kabupaten dari API
            $kabupatenResponse = $client->get('https://www.emsifa.com/api-wilayah-indonesia/api/regencies/35.json');
            $kabupaten = json_decode($kabupatenResponse->getBody(), true);

            // Ambil data Kecamatan dari API
            $kecamatanResponse = $client->get('https://www.emsifa.com/api-wilayah-indonesia/api/districts/3573.json');
            $kecamatan = json_decode($kecamatanResponse->getBody(), true);

            // Ambil data Kelurahan dari API
            $kelurahanResponse = $client->get('https://www.emsifa.com/api-wilayah-indonesia/api/villages/357302.json');
            $kelurahan = json_decode($kelurahanResponse->getBody(), true);

            return view('customer.create', compact('kabupaten', 'kecamatan', 'kelurahan'));
        } catch (\Exception $e) {
            // Log error untuk debugging
            Log::error("Error saat mengambil data wilayah: " . $e->getMessage());
            return response()->json(['error' => 'Gagal mengambil data wilayah', 'message' => $e->getMessage()], 500);
        }
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
