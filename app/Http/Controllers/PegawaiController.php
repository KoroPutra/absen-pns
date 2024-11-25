<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    public function index()
    {
        $pegawai = Pegawai::get();
        // dd($pegawai);
        return view('pegawai.index', compact('pegawai'));
    }

    public function tambah()
    {
        return view('pegawai.tambah');
    }
    public function edit($id)
    {
        $pegawai = Pegawai::find($id);
        return view('pegawai.edit', compact('pegawai'));
    }

    public function submit(Request $request)
    {
        $pegawai = new Pegawai();
        $pegawai->nip = $request->nip;
        $pegawai->nama = $request->nama;
        $pegawai->absen = $request->absen;
        $pegawai->jam_masuk = $request->jam_masuk;
        $pegawai->jam_keluar = $request->jam_keluar;
        $pegawai->save();

        return redirect()->route('pegawai.index');
    }

    public function update(Request $request, $id)
    {
        $pegawai = Pegawai::find($id);
        $pegawai->nip = $request->nip;
        $pegawai->nama = $request->nama;
        $pegawai->absen = $request->absen;
        $pegawai->jam_masuk = $request->jam_masuk;
        $pegawai->jam_keluar = $request->jam_keluar;
        $pegawai->save();
        return redirect()->route('pegawai.index');
    }

    public function delete($id)
    {
        $pegawai = Pegawai::find($id);
        $pegawai->delete();
        return redirect()->route('pegawai.index');
    }
}
