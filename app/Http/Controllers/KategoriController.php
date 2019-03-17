<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kategori;
use App\Http\Requests;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        
        $kategoris = Kategori::all();
        return view('dashboard.datatables', compact('kategoris'));
        
    }

    public function search(Request $request)
    {
        $query = $request->get('q');
        $kategoris = Kategori::where('nama_kategori', 'LIKE', '%' . $query . '%')->paginate(10);

        return view('dashboard.datatables', compact('kategoris', 'query'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=new Kategori();
        $data->id_kategori=$request->get('id_kategori');
        $data->nama_kategori=$request->get('nama_kategori');
        $data->deskripsi_kategori=$request->get('deskripsi_kategori');
        $data->save();
        return redirect('datatb');
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
    public function edit($id_kategori)
    {
        $kategoris=Kategori::find($id_kategori);
        return view('dashboard.edit_kategori', compact('kategoris'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_kategori)
    {
        $kategoris=Kategori::find($id_kategori);
        $kategoris->nama_kategori=$request->get('nama_kategori');
        $kategoris->deskripsi_kategori=$request->get('deskripsi_kategori');
        $kategoris->save();
        return redirect ('datatb');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_kategori)
    {
        $data=Kategori::find($id_kategori);
        $data->delete();
        return redirect('datatb');
    }
}
