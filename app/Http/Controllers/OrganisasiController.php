<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Organisasi;
class OrganisasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //menampilkan semua data post melalui model 'post'
        $organisasis = Organisasi::all();
        return view('organisasi.index',compact('organisasis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('organisasi.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $this->validate($request,[
            'nama_organisasi' => 'required|unique:organisasis|max:255',
            'tempat_latihan' => 'required|min:9',
            'waktu_latihan' => 'required|max:6',
            'hari_latihan' => 'required'
        ]);

        $organisasis = new Organisasi;
        $organisasis->nama_organisasi = $request->nama_organisasi;
        $organisasis->tempat_latihan = $request->tempat_latihan;
        $organisasis->waktu_latihan = $request->waktu_latihan;
        $organisasis->hari_latihan = $request->hari_latihan;
        $organisasis->save();
        return redirect()->route('organisasis.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $organisasis = Organisasi::findOrFail($id);
        return view('organisasi.show',compact('organisasis'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // memanggil data pos berdasrkan id di halaman pos edit
        $organisasis = Organisasi::findOrFail($id);
        return view('organisasi.edit',compact('organisasis'));
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
         // unique dihapus karena ketika update data title tidak diubah juga tidak apa-apa
        $this->validate($request,[
            'nama_organisasi' => 'required|max:255',
            'tempat_latihan' => 'required|min:9',
            'waktu_latihan' => 'required|max:6',
            'hari_latihan' => 'required'
        ]);

        // update data berdasarkan id
        $organisasis = Organisasi::findOrFail($id);
        $organisasis->nama_organisasi = $request->nama_organisasi;
        $organisasis->tempat_latihan = $request->tempat_latihan;
        $organisasis->waktu_latihan = $request->waktu_latihan;
        $organisasis->hari_latihan = $request->hari_latihan;
        $organisasis->save();
        return redirect()->route('organisasis.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // delete data beradasarkan id
        $organisasis = Organisasi::findOrFail($id);
        $organisasis->delete();
        return redirect()->route('organisasis.index');  
    }
}
