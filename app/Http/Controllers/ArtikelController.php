<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Artikel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class ArtikelController extends Controller
{
    // Menampilkan halaman admin
    public function admin()
    {
        
        $data = Artikel::all();

        return view('admin', ['data' => $data]);
    }

    // Menampilkan halaman tambah artikel
    public function tambahArtikel()
    {
        $data = null; 
        return view('add', compact('data'));
    }

    // Untuk menyimpan artikel
    public function simpanArtikel(Request $request)
    {
    $request->validate([
        'judul' => 'required',
        'penulis' => 'required',
        'tgl_artikel' => 'required|date',
        'isi_artikel' => 'required',
        'gambar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        'status' => 'required|in:publish,draf',
    ]);

    $gambar = $request->file('gambar')->store('images', 'public');

    $user = User::where('email', 'adminjwp@gmail.com')->first();

    $artikel = Artikel::create([
    'user_id' => $user->id_users,
    'judul' => $request->judul,
    'penulis' => $request->penulis,
    'tgl_artikel' => $request->tgl_artikel,
    'isi_artikel' => $request->isi_artikel,
    'gambar' => $gambar,
    'status' => $request->status,   
    ]);

    return redirect()->route('admin', $artikel->id_artikel);

    }

    // Untuk menghapus artikel
    public function delete($id_artikel)
    {
        $data = Artikel::find($id_artikel);
        $data->delete();
        return redirect()->route('admin')->with('success', 'Artikel berhasil dihapus');
    }

    // Menampilkan halaman detail artikel berdasarkan id
    public function detail($id_artikel)
    {
        $data = Artikel::find($id_artikel);
        return view('detail', compact('data'));
    }

    // Menampilkan halaman artikel dengan mengurutkan berdasarkan tanggal
    public function artikel()
    {
        $data = Artikel::orderBy('tgl_artikel', 'desc')->paginate(4);
        return view('artikel', compact('data'));
    }

    // Menampilkan halaman edit artikel
    public function tampilkanartikel($id_artikel)
    {
        $data = Artikel::find($id_artikel);
        return view('edit', compact('data'));
    }

    // Untuk update artikel
    public function updateArtikel(Request $request, $id_artikel)
    {
    $data = Artikel::find($id_artikel);

    $request->validate([
        'judul' => 'required',
        'penulis' => 'required',
        'tgl_artikel' => 'required|date',
        'isi_artikel' => 'required',
        'gambar' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        'status' => 'required|in:publish,draf',
    ]);

    if ($request->hasFile('gambar')) {
        Storage::delete('public/' . $data->gambar);
        $gambar = $request->file('gambar')->store('images', 'public');
        $data->gambar = $gambar;
    }

    $user = User::where('email', 'adminjwp@gmail.com')->first();
    $data->user_id = $user->id_users;
    $data->judul = $request->judul;
    $data->penulis = $request->penulis;
    $data->tgl_artikel = $request->tgl_artikel;
    $data->isi_artikel = $request->isi_artikel;
    $data->status = $request->status;

    $data->save();

    return redirect()->route('admin')->with('success', 'Artikel berhasil diupdate');
    }

}