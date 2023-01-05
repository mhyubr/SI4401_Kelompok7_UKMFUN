<?php

namespace App\Http\Controllers;

use App\Models\Pendaftaran;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class PendaftaranController extends Controller
{
    public function index()
    {
        $data = Pendaftaran::all();
        return view('ukm.pendaftaran.index',compact('data'));
    }

    public function create()
    {
        return view('ukm.pendaftaran.create');
    }

    public function store(Request $request)
    {
        // Validasi
        $request->validate([
            'nama' =>  'required',
            'nim' => 'required',
            'deskripsi' => 'required'
        ]);

        $data = new Pendaftaran();
        $data->nama = $request->nama;
        $data->nim = $request->nim;
        $data->deskripsi = $request->deskripsi;
        $data->save();

        return redirect()->route('adm.pendaftaran.index')
                        ->with('success','Pendaftaran Berhasil Dibuat');

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
        $data = Pendaftaran::find($id);
        return view('ukm.pendaftaran.edit',compact('data'));
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
        // Validasi
        $request->validate([
            'nama' =>  'required',
            'nim' => 'required',
            'deskripsi' => 'required'
        ]);
        $data = Pendaftaran::find($id);
        $data->nama = $request->nama;
        $data->nim = $request->nim;
        $data->deskripsi = $request->deskripsi;
        $data->update();
        return redirect()->route('adm.pendaftaran.index')
                        ->with('success','Pendaftaran Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Pendaftaran::find($id);
        $data->delete();
        return redirect()->route('adm.pendaftaran.index')
        ->with('success','Pendaftaran Berhasil Dihapus');
    }
}
