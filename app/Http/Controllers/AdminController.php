<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use Validator;

class AdminController extends Controller
{
    public function index()
    {
        $me = Auth::user()->id;
        $user = User::whereNot('id', $me)->get();
        $data = User::findOrFail($me);
        return view('pengguna.index', compact('user', 'data'));
    }
    public function getpengguna()
    {
        $me = Auth::user()->id;
        $users = User::where('id', '!=', $me)->get();

        // Mengembalikan data pengguna dalam format JSON
        return response()->json($users);
    }


    public function create()
    {
        $me = Auth::user()->id;
        $user = User::whereNot('id', $me)->get();
        return view('pengguna.create', compact('user'));
    }

    public function store(Request $request)
    {
        try {
            // Validasi input
            $validated = $request->validate([
                'email' => 'required|email|unique:users,email',
                'name' => 'required|string|max:255',
                'role' => 'required|string',
                'password' => 'required|confirmed|min:8',
            ]);

            // Proses penyimpanan pengguna baru
            $user = User::create([
                'email' => $request->email,
                'name' => $request->name,
                'role' => $request->role,
                'password' => bcrypt($request->password),
            ]);

            if ($request->ajax()) {
                // Mengembalikan response sukses dalam format JSON untuk AJAX request
                return response()->json([
                    'success' => 'User added successfully!',
                    'user' => $user // Mengembalikan data pengguna yang baru ditambahkan
                ]);
            }

            // Redirect ke halaman pengguna.index jika bukan AJAX request
            return redirect()->route('pengguna.index')->with('success', 'User added successfully!');
        } catch (\Exception $e) {
            if ($request->ajax()) {
                // Tangani error dan kirim pesan dalam format JSON untuk AJAX request
                return response()->json(['error' => 'Failed to add user: ' . $e->getMessage()], 500);
            }

            // Redirect kembali dengan pesan error jika bukan AJAX request
            return redirect()->back()->with('error', 'Failed to add user: ' . $e->getMessage());
        }
    }




    public function edit($id)
    {
        $data = User::find($id); // Ambil data pengguna berdasarkan ID
        return view('pengguna.edit', compact('data')); // Kirim data ke view
    }

    public function update(Request $request, $id)
    {
        try {
            // Validasi data yang diterima
            $validated = $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email|max:255',
                'role' => 'required|string|max:255',
            ]);

            // Temukan pengguna berdasarkan ID
            $user = User::findOrFail($id);

            // Perbarui data pengguna
            $user->update($validated);

            // Jika request AJAX, kirim respon JSON
            if ($request->ajax()) {
                return response()->json(['success' => 'User updated successfully!', 'user' => $user]);
            }

            return redirect()->route('pengguna.index')->with('success', 'User updated successfully!');
        } catch (\Exception $e) {
            // Tangani error dan kirim pesan
            if ($request->ajax()) {
                return response()->json(['error' => 'Failed to update user: ' . $e->getMessage()], 500);
            }

            return redirect()->back()->with('error', 'Failed to update user: ' . $e->getMessage());
        }
    }




    public function getPenggunaById($id)
    {
        $user = User::findOrFail($id);
        return response()->json($user);
    }

    public function deletePengguna($id)
    {
        // Mencari pengguna berdasarkan ID
        $user = User::findOrFail($id);

        // Menghapus pengguna
        $user->delete();

        // Mengembalikan respons sukses
        return response()->json(['success' => 'Data pengguna berhasil dihapus.']);
    }


    public function updatePengguna(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $user->update($request->only('name', 'role'));
        return response()->json(['message' => 'User updated successfully']);
    }
}
