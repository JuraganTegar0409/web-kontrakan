<!-- ini adalah konten dari halaman Kelola Laporan -->
@extends('layout/main')

<!-- ini adalah title dari halaman Kelola Laporan -->
@section('title', 'Kelola Laporan')

<!-- ini adalah isi konten dari halaman Kelola Laporan -->
@section('container')
 <!-- Header -->
 <div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">  
              <nav aria-label="breadcrumb" class="d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="/"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item"><a href="/">Dashboards</a></li>  
                  <li class="breadcrumb-item"><a href="/dashboard/transaksi">Kelola Transaksi</a></li>  
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
                          <div class="col-sm-5">
                            <h2>Laporan Transaksi <b>Details</b></h2>
                            <a href="/dashboard/transaksi/create" style="margin: 10px;" class="btn btn-success"  >
                              <i class="material-icons">&#xE147;</i> <span>Tambah Laporan Transaksi</span></a> 
                          </div>
                        
                        <div class="col-sm-6" style="margin-top: 70px;" >
                          <div class="search-box">
                            <i class="material-icons">&#xE8B6;</i>
                              <input type="text" class="form-control" placeholder="Search&hellip;">
                          </div>
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
                              <th>Actions</th>
                          </tr>
                      </thead>
                      <tbody>
                          <tr align="center">
                              <td>1</td>
                              <td>TR01</td>
                              <td>PH01</td> 
                              <td>Tegar</td>
                              <td><div class="btn btn-primary">Lunas</div></td> 
                              <td>
                                  <a href="show.html" class="view" title="View" data-toggle="tooltip"><i class="material-icons">&#xE417;</i></a> 
                                 
                          </tr>
                           
                      </tbody>
                  </table>
                  <div class="clearfix">
                      <div class="hint-text">Showing <b>5</b> out of <b>25</b> entries</div>
                      <ul class="pagination">
                          <li class="page-item disabled"><a href="#"><i class="fa fa-angle-double-left"></i></a></li>
                          <li class="page-item"><a href="#" class="page-link">1</a></li>
                          <li class="page-item"><a href="#" class="page-link">2</a></li>
                          <li class="page-item active"><a href="#" class="page-link">3</a></li>
                          <li class="page-item"><a href="#" class="page-link">4</a></li>
                          <li class="page-item"><a href="#" class="page-link">5</a></li>
                          <li class="page-item"><a href="#" class="page-link"><i class="fa fa-angle-double-right"></i></a></li>
                      </ul>
                  </div>
              </div>
          </div>  
      </div>    
         
    </div>
      <!-- ini adalah tutup endsection -->
      @endsection