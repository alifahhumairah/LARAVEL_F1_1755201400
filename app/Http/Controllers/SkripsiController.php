<?php

namespace App\Http\Controllers;

use App\Skripsi;
use DataTables;
use Illuminate\Http\Request;

class SkripsiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('skripsi.index');
    }
    public function skripsi_list()

   {
     $skripsi = skripsi::all();
     return Datatables::of($skripsi)
             ->addIndexColumn()
             ->addColumn('action', function ($skripsi) {
                 $action = '<a class="text-primary"href="/skripsi/edit/'.$skripsi->id.'">Edit</a>';
                 $action .= ' | <a class="text-danger"href="/skripsi/delete/'.$skripsi->id.'">Hapus</a>';
                 return $action;
            })
             ->make();

   }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('skripsi.create');
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
            'id' => 'required|digits:10',
            'nim' => 'required',
            'nama_mahasiswa' => 'required',
            'judul' => 'required',
            'tempat_penelitian' => 'required',
            'alamat' => 'required',
       ]);
       Skripsi::create($request->all());
       return redirect()->route('skripsi.index')
                       ->with('success','Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Skripsi  $skripsi
     * @return \Illuminate\Http\Response
     */
    public function show(Skripsi $skripsi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Skripsi  $skripsi
     * @return \Illuminate\Http\Response
     */
    public function edit(Skripsi $skripsi, $id)
    {
       $skripsi = Skripsi::find($id);
       return view('Skripsi.edit', compact('Skripsi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Skripsi  $Skripsi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Skripsi $Skripsi)
    {
        $request->validate([
            'nim' => 'required',
            'nama_mahasiswa' => 'required',
            'judul' => 'required',
            'tempat_penelitian' => 'required',
            'alamat' => 'required',
       ]);
        $Skripsi->update($request->all());
        return redirect()->route('Skripsi.index')
                        ->with('success','Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Skripsi  $Skripsi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Skripsi $Skripsi)
    {
        $Skripsi->delete();
 
        return redirect()->route('Skripsi.index')
        ->with
 ('success'
 ,'Data Berhasil Dihapus');
    }
}
