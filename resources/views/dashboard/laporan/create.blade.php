<!-- ini adalah konten dari halaman Tambah Data Laporan -->
@extends('layout/main')

<!-- ini adalah title dari halaman Tambah Data Laporan -->
@section('title', 'Tambah Data Laporan')

<!-- ini adalah isi konten dari halaman Tambah Data Laporan -->
@section('container')
 <!-- Header -->
 <div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-12 col-7">  
              <nav aria-label="breadcrumb" class="d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                  <li class="breadcrumb-item"><a href="#">Kelola Laporan Transaksi</a></li>
                  <li class="breadcrumb-item " aria-current="page">Tambah Laporan Transaksi</li>
                </ol>
              </nav>
            </div> 
          </div>
          <!-- Card stats -->
          <div class="row">
             
             
             
             
          </div>
        </div>
      </div>
    <!-- Page content -->
    <div class="container-fluid mt--4">
       
      <div class="row">
         <!-- disini isi konten -->
         <div class="container-xl"> 
              
           <!-- Form CRUD -->
            <div class="row ">
              <div class="col-lg-7 mx-auto">
                <div class="card mt-2 mx-auto p-4 bg-light">
                  <div class="card-body bg-light">
                    <div class="container">
                          <h5 class="text-center mb-4"><i class="ni ni-single-02 text-blue"></i> <br>
                             Tambah Data Laporan Transaksi</h5>
                          <form id="contact-form" role="form">
                              <div class="controls">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group"> <label for="form_name">ID Transaksi :</label> <input id="form_name" type="text" name="name" class="form-control" placeholder="Please enter your firstname *" > </div>
                                        </div>    
                                    
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group"> <label for="form_name">Nama :</label> <input id="form_name" type="text" name="name" class="form-control" placeholder="Please enter your firstname *" > </div>
                                        </div>    
                                    </div>

                                    <div class="row">
                                      <div class="col-md-6">
                                        <div class="form-group"> <label for="form_email">Tanggal Bayar :</label> <input id="form_email" type="date" name="email" class="form-control" placeholder="Please enter your age *"> </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group"> <label for="form_need">Status :</label> <select id="form_need" name="need" class="form-control">
                                                    <option value="" selected disabled>Belum Lunas</option>
                                                    <option>Lunas</option> 
                                                </select> </div>
                                        </div>
                                      </div>

                                      <div class="row">
                                          <div class="col-md-12">
                                              <div class="form-group"> <label for="form_name">Nominal Bayar :</label> <input id="form_name" type="number" name="name" class="form-control" placeholder="Please enter your Nominal Bayar *" > </div>
                                          </div>  
                                      </div>
                                      
                                      <!-- <div class="row">
                                          <div class="col-md-12">
                                              <div class="form-group"> <label for="form_name">Foto Transaksi :</label> <input id="form_name" type="file" name="name" class="form-control"> </div>
                                          </div>  
                                      </div> -->

                                    <div class="row">
                                        <!-- <div class="col-md-12">
                                            <div class="form-group"> <label for="form_message">Message *</label> <textarea id="form_message" name="message" class="form-control" placeholder="Write your message here." rows="4" required="required" data-error="Please, leave us a message."></textarea> </div>
                                        </div>
                                         -->
                                        <div class="col-md-12"> <input type="submit" class="btn btn-success btn-send pt-2 btn-block " value="Tambah Data"> </div>
                                    </div>
                                </div>

                          </form>
                     </div>
                  </div>
                <div>
              </div> <!-- /.8 -->
            </div> <!-- Tutup Row -->

      </div>    <!-- Tutup Row Isi Konten -->
         
    </div>
    <!-- ini adalah tutup endsection -->
    @endsection