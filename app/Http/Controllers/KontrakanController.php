<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kontrakan; 
use Illuminate\Support\Facades\Storage;
// use Illuminate\Support\Facades\DB;

class KontrakanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {  
        $kontrakan = Kontrakan::paginate(); 
        return view('dashboard.kontrakan.index', ['kontrakan'=>$kontrakan]);
    } 
    
    public function search(Request $request)
    {
        // 'like' berfungsi jika ada user yang mencari mendekati kata yang dicari maka akan langsung di tampilkan
         
        $search = Kontrakan::where('nama_kontrakan','like',"%".$request->search."%")->paginate(5); 
        return view('dashboard.kontrakan.index',['kontrakan'=>$search]); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.kontrakan.create');
    }


    public function store(Request $request)
    {  
        $messages = [
            'required' => ':Attribute Wajib Diisi / Tidak Boleh Kosong!!!',
            'min' => ':Attribute Harus Diisi Minimal :min Karakter!!!',
            'max' => ':Attribute Harus Diisi Maksimal :max Karakter!!!',  
            'unique' => ':Attribute Sudah Ada, Mohon Isi Dengan Nama Lain!!!',  
        ];

        $validasi = $request->validate([
            'nama_kontrakan' => 'required|unique:rents|min:5|max:100',
            'tipe_kontrakan' => 'required', 
            'kapasitas_kontrakan' => 'required', 
            'harga_kontrakan' => 'required', 
            'foto_kontrakan' => 'required', 
            'status_kontrakan' => 'required',
            'alamat_kontrakan' => 'required'
        ], $messages);

       // Upload File
        $filename = $request->file("foto_kontrakan")->getClientOriginalName();
        $path = $request->file("foto_kontrakan")->storeAs("assets/upload/kontrakan",
                $filename,
                "public"
        );
             Kontrakan::create($request->except("foto_kontrakan") + ["foto_kontrakan" => $filename]);
       
        return redirect()->route("dashboard.kontrakan.index")->with('status', 'Data Kontrakan Berhasil di Tambahkan!!!');
       }
     
    public function show(Kontrakan $kontrakan)
    { 
        return view('dashboard.kontrakan.show', compact('kontrakan'));
    }
    
    public function edit(Kontrakan $kontrakan)
    { 
        return view('dashboard.kontrakan.edit', compact('kontrakan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
  
    public function update(Request $request, Kontrakan $kontrakan)
    {
        
        $messages = [
            'required' => ':attribute wajib diisi / tidak boleh kosong!!!',
            'min' => ':attribute data harus diisi minimal :min karakter!!!',
            'max' => ':attribute data harus diisi maksimal :max karakter!!!',
        ];

        $request->validate([
            'nama_kontrakan' => 'required|min:5|max:20',
            'tipe_kontrakan' => 'required|min:1', 
            'kapasitas_kontrakan' => 'required', 
            'harga_kontrakan' => 'required', 
            'foto_kontrakan' => 'required', 
            'status_kontrakan' => 'required',
            'alamat_kontrakan' => 'required|max:200'
        ], $messages);

        //cek apakah ada file foto kontrakan, kalau ada maka upload dan update fotonya di db
        if ($request->hasFile("foto_kontrakan")) {
            $file = $request->file("foto_kontrakan");
            $file->storeAs("assets/upload", 
                $file->getClientOriginalName(), 
                "public"
            );
            $kontrakan->update(["foto_kontrakan" => $file->getClientOriginalName()]);
        }

        //jika tidak ada file foto, ya sudah update saja semua
        $kontrakan->update($request->except("foto_kontrakan"));

        // lebih bagus pakai redirect()->route("nama route"), alasannya supaya kalau ada perubahan url route di file web.php
        // kita ga perlu capek-capek ngubah di semua file, tinggal panggil nama routenya aja
        return redirect()->route("dashboard.kontrakan.index")->with('status', 'Data Kontrakan Berhasil Di Edit!');
    }

    public function destroy(Kontrakan $kontrakan) {
        $kontrakan->delete();
        return redirect()->route("dashboard.kontrakan.index")->with('status', 'Data Kontrakan Berhasil Di Hapus!');
    }
}
