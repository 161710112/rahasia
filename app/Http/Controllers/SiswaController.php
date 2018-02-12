<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Siswa;
class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //menampilkan semua data post melalui model 'post'
        $siswas = Siswa::all();
        return view('siswa.index',compact('siswas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('siswa.create');
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
            'absen' => 'required|min:2',
            'nama' => 'required|unique:siswas|max:255',
            'kelas' => 'required|max:25',
            'jurusan' => 'required|max:255'
        ]);

        $siswas = new Siswa;
        $siswas->absen = $request->absen;
        $siswas->nama = $request->nama;
        $siswas->kelas = $request->kelas;
        $siswas->jurusan = $request->jurusan;
        $siswas->save();
        return redirect()->route('siswas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $siswas = Siswa::findOrFail($id);
        return view('siswa.show',compact('siswas'));
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
        $siswas = Siswa::findOrFail($id);
        return view('siswa.edit',compact('siswas'));
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
            'absen' => 'required|min:2',
            'nama' => 'required|max:255',
            'kelas' => 'required|max:25',
            'jurusan' => 'required|max:255'
        ]);

        // update data berdasarkan id
        $siswas = Siswa::findOrFail($id);
        $siswas->absen = $request->absen;
        $siswas->nama = $request->nama;
        $siswas->kelas = $request->kelas;
        $siswas->jurusan = $request->jurusan;
        $siswas->save();
        return redirect()->route('siswas.index');
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
        $siswas = Siswa::findOrFail($id);
        $siswas->delete();
        return redirect()->route('siswas.index');  
    }
}
