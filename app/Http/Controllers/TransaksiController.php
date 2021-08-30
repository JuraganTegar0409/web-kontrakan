<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Paket;
// use Illuminate\Support\Facades\DB;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        // $paket = Paket::paginate(10);

        return view('dashboard.transaksi.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.transaksi.create');
    }

     
     
}
