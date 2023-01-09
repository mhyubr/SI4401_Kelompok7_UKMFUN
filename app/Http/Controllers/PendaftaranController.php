<?php

namespace App\Http\Controllers;

use App\Models\Pendaftaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PendaftaranController extends Controller
{
    public function index()
    {
        // $pendaftaran = Pendaftaran::all();
        $id_ukm = Auth::user()->id_user;
        $pendaftaran = Pendaftaran::where('id_ukm',  $id_ukm)->get();
        $title = 'Pendaftaran';

        // dd($pendaftaran->all());

        return view('ukm.daftar-ukm', compact('pendaftaran', 'title'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_ukm' => 'required|integer',
            'nama_ukm' => 'required|string',
            'nama' => 'required|string',
            'nim' => 'required|integer',
            'jurusan' => 'required|string',
            'jk' => 'required|string',
            'alamat' => 'required|string',
            'email' => 'required|email',
            'no_hp' => 'required|integer',
            'ksm' => 'required|mimes:pdf|max:10000',
            'khs' => 'required|mimes:pdf|max:10000',
            'cv' => 'required|mimes:pdf|max:10000'
        ]);

        $id_mahasiswa = Auth::user()->id_user;


        // FILE PDF
        $ksm = $request->file('ksm');
        $nama_ksm = 'FT'.date('Ymdhis').'.'.$request->file('ksm')->getClientOriginalExtension();
        $ksm->move('dokumen/', $nama_ksm);
        $khs = $request->file('khs');
        $nama_khs = 'FT'.date('Ymdhis').'.'.$request->file('khs')->getClientOriginalExtension();
        $khs->move('dokumen/', $nama_khs);
        $cv = $request->file('cv');
        $nama_cv = 'FT'.date('Ymdhis').'.'.$request->file('cv')->getClientOriginalExtension();
        $cv->move('dokumen/', $nama_cv);

        Pendaftaran::create([
                'id_mahasiswa' => $id_mahasiswa,
                'id_ukm' => $request->id_ukm,
                'nama_ukm' => $request->nama_ukm,
                'nama' => $request->nama,
                'nim' => $request->nim,
                'jurusan' => $request->jurusan,
                'jk' => $request->jk,
                'alamat' => $request->alamat,
                'email' => $request->email,
                'no_hp' => $request->no_hp,
                'ksm' => $nama_ksm,
                'khs' => $nama_khs,
                'cv' => $nama_cv,
        ]);
        
        return redirect()->route('home')->with('success', 'Pendaftaran Berhasil');

    }

    public function terima($id_pendaftaran)
    {
        $pendaftaran = Pendaftaran::find($id_pendaftaran);
        $pendaftaran->status = 'Terima';
        $pendaftaran->save();

        return redirect()->route('index-pendaftaran')->with('success', 'Mahasiswa berhasil diterima!');
    }
    
    public function tolak($id_pendaftaran)
    {
        $pendaftaran = Pendaftaran::find($id_pendaftaran);
        $pendaftaran->status = 'Tolak';
        $pendaftaran->save();
        
        return redirect()->route('index-pendaftaran')->with('failed', 'Mahasiswa berhasil ditolak!');
    }
    
    public function notifikasi()
    {
        // $pendaftaran = Pendaftaran::find(Auth::user()->id_user);
        $pendaftaran = Pendaftaran::where('id_mahasiswa', Auth::user()->id_user)->get();
        
        // if ($pendaftaran == null) {
        //     $pendaftaran = [];
        // }

        return view('layouts.navbar', compact('pendaftaran'));
    }

}