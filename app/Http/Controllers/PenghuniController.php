<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Penghuni;
use Illuminate\Support\Facades\Storage;
// use Illuminate\Support\Facades\DB;

class PenghuniController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $penghuni = Penghuni::paginate(); 
        return view('dashboard.penghuni.index', ['penghuni'=>$penghuni]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.penghuni.create');
    }

    
    public function store(Request $request, Penghuni $penghuni)
    {

       
        $messages = [
            'required' => ':Attribute Wajib Diisi / Tidak Boleh Kosong!!!',
            'min' => ':Attribute Harus Diisi Minimal :min Karakter!!!',
            'max' => ':Attribute Harus Diisi Maksimal :max Karakter!!!',  
            'unique' => ':Attribute Sudah Ada, Mohon Isi Dengan Nama Lain!!!',  
        ];

        $validasi = $request->validate([
            'nama_penghuni' => 'required|min:5|max:100',
            'agama_penghuni' => 'required',   
            'umur_penghuni' => 'required',   
            'jenis_kelamin_penghuni' => 'required',   
            'status_penghuni' => 'required',    
            'foto_ktp' => 'required',  
            'foto_surat_nikah' => 'required',  
            'foto_kk' => 'required'  
        ], $messages);
   
        
       // Upload File
        $filename = $request->file("foto_ktp", "foto_surat_nikah", "foto_kk")->getClientOriginalName();
        $path = $request->file("foto_ktp")->storeAs("assets/upload/penghuni/foto_ktp/",
                $filename,
                "public"
        );
        $path = $request->file("foto_surat_nikah")->storeAs("assets/upload/penghuni/foto_surat_nikah/",
                $filename,
                "public"
        );
        $path = $request->file("foto_kk")->storeAs("assets/upload/penghuni/foto_kk/",
                $filename,
                "public"
        );
             Penghuni::create($request->except("foto_ktp") + ["foto_ktp" => $filename]); 
             Penghuni::create($request->except("foto_surat_nikah") + ["foto_surat_nikah" => $filename]); 
             Penghuni::create($request->except("foto_kk") + ["foto_kk" => $filename]); 
 
        return redirect()->route("penghuni.index")->with('status', 'Data Penghuni Berhasil di Tambahkan!!!');
       }
     
    


     
}
