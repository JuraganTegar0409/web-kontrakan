<!-- ini adalah konten dari halaman Detail Data Laporan -->
@extends('layout/main')

<!-- ini adalah title dari halaman Detail Data Laporan -->
@section('title', 'Detail Data Laporan')

<!-- ini adalah isi konten dari halaman Detail Data Laporan -->
@section('container')
<!-- Header -->
<div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">  
              <nav aria-label="breadcrumb" class="d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                  <li class="breadcrumb-item " aria-current="page">Kelola Transaksi</li>
                </ol>
              </nav>
            </div> 
          </div> 
        </div>
      </div>
    <!-- Page content -->
    <div class="container-fluid mt--4">
       
        <div class="row">
         <!-- disini isi konten -->
            <div class="container-xl">
                <div class="table-responsive">
                    <div class="table-wrapper">
 
                        <div class="table-title"> 
                            <div class="row">
                                <div class="col-lg-4">
                                    <h2>Laporan Transaksi <b>Details</b></h2> 
                                </div>  
                            </div>

                            <div class="row" style="margin: 11px;">
                                <div class="col-lg-4">
                                    <a href="create.html" class="btn btn-success"  >
                                        <span>Tambah Laporan Transaksi</span></a>  
                                </div>
                                <div class="col-lg-4">
                                    <a href="create.html" class="btn btn-danger"><span>Print</span></a>  
                                </div>  
                            </div> 
                        </div>

                        <table class="table table-striped table-hover table-bordered">
                            <thead>
                                <tr align="center">
                                    <th>No</th>
                                    <th>ID Transaksi </th>
                                    <th>ID Penghuni</th>
                                    <th>Nama </th>
                                    <th>Status</th>  
                                </tr>
                            </thead>
                            <tbody>
                                <tr align="center">
                                    <td>1</td>
                                    <td>TR01</td>
                                    <td>PH01</td> 
                                    <td>Tegar</td>
                                    <td><div class="btn btn-primary">Lunas</div></td>  
                                </tr> 
                            </tbody>
                        </table> 

                        <div class="row" style="margin: 10px;">
                            <div class="col-lg-4">
                                <a href="../laporan_transaksi/index.html" class="btn btn-success"  >
                                    <span>Kembali</span></a>  
                            </div> 
                        </div> 

                    </div>
                </div>   
            </div>     
        </div>
    <!-- ini adalah tutup endsection -->
     @endsection