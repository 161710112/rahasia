<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cita;
class CitaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //menampilkan semua data post melalui model 'post'
        $citas = Cita::all();
        return view('cita.index',compact('citas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cita.create');
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
            'nama' => 'required|unique:citas|max:255',
            'kelas' => 'required|min:6',
            'alamat' => 'required|min:10',
            'cita_cita' => 'required|min:6'
        ]);

        $citas = new Cita;
        $citas->nama = $request->nama;
        $citas->kelas = $request->kelas;
        $citas->alamat = $request->alamat;
        $citas->cita_cita = $request->cita_cita;
        $citas->save();
        return redirect()->route('citas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $citas = Cita::findOrFail($id);
        return view('cita.show',compact('citas'));
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
        $citas = Cita::findOrFail($id);
        return view('cita.edit',compact('citas'));
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
            'nama' => 'required|max:255',
            'kelas' => 'required|min:6',
            'alamat' => 'required|min:10',
            'cita_cita' => 'required|min:6'
        ]);

        // update data berdasarkan id
        $citas = Cita::findOrFail($id);
        $citas->nama = $request->nama;
        $citas->kelas = $request->kelas;
        $citas->alamat = $request->alamat;
        $citas->cita_cita = $request->cita_cita;
        $citas->save();
        return redirect()->route('citas.index');
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
        $citas = Cita::findOrFail($id);
        $citas->delete();
        return redirect()->route('citas.index');  
    }
}
