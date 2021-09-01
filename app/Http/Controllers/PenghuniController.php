<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Penghuni;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;
use Alert;

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
    
    public function store(Request $request)
    {
        $messages = [
            "required" => ":attribute wajib diisi!", 
            "min" => ":attribute harus diisi minimal :min karakter!",
            "max" => ":attribute harus diisi maksimal :max karakter!",
        ];

        $alertError = [
            Alert::error('Proses Tambah Data Gagal', 'Data Penghuni Gagal Ditambahkan, Mohon Cek Kembali Data Yang Wajib Diisi !!!')
        ];
        $validasi = $request->validate([
            "nama_penghuni" => "required|min:5|max:100",
            "agama_penghuni" => [
                "required",
                Rule::in(["Islam", "Protestan", "Katolik", "Buddha", "Khonghucu"])
            ],   
            "umur_penghuni" => "required|numeric",   
            "jenis_kelamin_penghuni" => [
                "required", 
                Rule::in(["Laki-Laki", "Perempuan"])
            ],   
            "status_penghuni" => [
                "required",
                Rule::in(["Kawin", "Belum Kawin"])
            ],    
            "foto_ktp" => "nullable",  
            "foto_surat_nikah" => "required_if:status_penghuni,Kawin",  
            "foto_kk" => "required"  
        ], $messages, $alertError);
   
        DB::transaction(function() use ($request) {
            $penghuni = Penghuni::create($request->except(["foto_ktp", "foto_surat_nikah", "foto_kk"]));

             
            // Upload File
            if($request->hasFile("foto_ktp")) {
                $fotoKtp = $request->file("foto_ktp")->getClientOriginalName();

                $request->file("foto_ktp")->storeAs("assets/upload/penghuni/foto_ktp/",
                        $fotoKtp,
                        "public"
                );

                $penghuni->images()->create(["image_name" => $fotoKtp, "type" => "ktp"]);
            } 
            
            if($request->hasFile("foto_surat_nikah")) {
                $fotoSuratNikah = $request->file("foto_surat_nikah")->getClientOriginalName();
                $request->file("foto_surat_nikah")->storeAs("assets/upload/penghuni/foto_surat_nikah/",
                        $fotoSuratNikah,
                        "public"
                );

                $penghuni->images()->create(["image_name" => $fotoSuratNikah, "type" => "surat_nikah"]);
            } 
            
            if($request->hasFile("foto_kk")) {
                $fotoKK = $request->file("foto_kk")->getClientOriginalName();
                $request->file("foto_kk")->storeAs("assets/upload/penghuni/foto_kk/",
                        $fotoKK,
                        "public"
                );
                $penghuni->images()->create(["image_name" => $fotoKK, "type" => "kk"]);
            }

        });

        Alert::success('Proses Tambah Data Berhasil', 'Data Penghuni Berhasil Ditambahkan');
        return redirect()->route("penghuni.index")->with('status', 'Tambah Data Penghuni Berhasil');
    }
    

    public function edit(Request $request, Penghuni $penghuni)
    {
        return view("dashboard.penghuni.edit", compact("penghuni"));
    }
    
    public function update(Request $request, Penghuni $penghuni)
    {
        $messages = [
            "required" => ":attribute wajib diisi!", 
            "min" => ":attribute harus diisi minimal :min karakter!",
            "max" => ":attribute harus diisi maksimal :max karakter!",
        ];

        $alertError = [
            Alert::error('Proses Tambah Data Gagal', 'Data Penghuni Gagal Ditambahkan, Mohon Cek Kembali Data Yang Wajib Diisi !!!')
        ];
        $validasi = $request->validate([
            "nama_penghuni" => "required|min:5|max:100",
            "agama_penghuni" => [
                "required",
                Rule::in(["Islam", "Protestan", "Katolik", "Buddha", "Khonghucu"])
            ],   
            "umur_penghuni" => "required|numeric",   
            "jenis_kelamin_penghuni" => [
                "required", 
                Rule::in(["Laki-Laki", "Perempuan"])
            ],   
            "status_penghuni" => [
                "required",
                Rule::in(["Kawin", "Belum Kawin"])
            ],    
            "foto_ktp" => "nullable",  
            "foto_surat_nikah" => "required_if:status_penghuni,Kawin",   
            "foto_kk" => "required_if:status_penghuni,Kawin"  
        ], $messages, $alertError); 
         
        DB::transaction(function() use ($request) {
            $penghuni = Penghuni::create($request->except(["foto_ktp", "foto_surat_nikah", "foto_kk"]));

            // Upload File
            if($request->hasFile("foto_ktp")) {
                $fotoKtp = $request->file("foto_ktp")->getClientOriginalName();

                $request->file("foto_ktp")->storeAs("assets/upload/penghuni/foto_ktp/",
                        $fotoKtp,
                        "public"
                );

                $penghuni->images()->create(["image_name" => $fotoKtp, "type" => "ktp"]);
            } 
            
            if($request->hasFile("foto_surat_nikah")) {
                $fotoSuratNikah = $request->file("foto_surat_nikah")->getClientOriginalName();
                $request->file("foto_surat_nikah")->storeAs("assets/upload/penghuni/foto_surat_nikah/",
                        $fotoSuratNikah,
                        "public"
                );

                $penghuni->images()->create(["image_name" => $fotoSuratNikah, "type" => "surat_nikah"]);
            } 
            
            if($request->hasFile("foto_kk")) {
                $fotoKK = $request->file("foto_kk")->getClientOriginalName();
                $request->file("foto_kk")->storeAs("assets/upload/penghuni/foto_kk/",
                        $fotoKK,
                        "public"
                );
                $penghuni->images()->create(["image_name" => $fotoKK, "type" => "kk"]);
            }

        });
        
        return redirect()->route("dashboard.penghuni.index")->with("status", "Data Penghuni Berhasil di Tambahkan!");
    }
     
    
    public function show(Request $request, Penghuni $penghuni)
    {
        return view("dashboard.penghuni.show", compact("penghuni"));
    }
    
    public function destroy(Penghuni $penghuni)
    {
        if($penghuni->images()->count() > 0) {
            $penghuni->images()->delete();
        }
        
        $penghuni->delete();
        
        Alert::success('Proses Hapus Data Berhasil', 'Data Penghuni Berhasil DiHapus'); 
        return redirect()->route('/penghuni.index')->with('status', 'Data Penghuni Berhasil Di Hapus!');
    }
}
