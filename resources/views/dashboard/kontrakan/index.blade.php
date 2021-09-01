<!-- ini adalah konten dari halaman Kelola Kontrakan -->
@extends('layout/main')

<!-- ini adalah title dari halaman Kelola Kontrakan -->
@section('title', '1 September 2021')

<!-- ini adalah isi konten dari halaman Kelola Kontrakan -->
@section('container')
 <!-- Header -->
 <div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">  
              <nav aria-label="breadcrumb" class="d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="/homepage_admin"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item"><a href="/homepage_admin">Dashboards</a></li>
                  <li class="breadcrumb-item " aria-current="page"><a href="/dashboard/kontrakan">Kelola Kontrakan</a></li>
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
                            <div class="col-sm-6">
                              <h2>Kontrakan <b>Details</b>
                              <a href="/dashboard/kontrakan/create" style="margin: 10px;" class="btn btn-success"  ><i class="material-icons">&#xE147;</i> <span>Tambah Kontrakan</span></a>
                              </h2>
                            </div> 
                        </div> 
                    </div>
 
                    <div class="wrapper">
                                @include('sweetalert::alert')
                     </div>
  
                            <div class=" row">
                                <div class="col-sm-5">
                                    @if (session('status'))
                                        <div class="alert alert-success" style="text-align: center; font-size:20px;">
                                            {{ session('status') }}
                                        </div>
                                    @endif
                                </div>
                            </div>
                    <div class="table-responsive">  
                    <table class="table table-striped table-hover table-bordered mydatatable"> 
                        <thead>
                            <tr align="center">
                                <th style="vertical-align: middle;">No      </th>
                                <th style="vertical-align: middle;">Nama    </th>
                                <th style="vertical-align: middle;">Tipe Kontrakan    </th>
                                <th style="vertical-align: middle;">Kapasitas </th> 
                                <th style="vertical-align: middle;">Status</th>
                                <th style="vertical-align: middle;">Alamat</th>
                                <th style="vertical-align: middle;">Actions </th>
                            </tr>
                        </thead>  
                          @foreach( $kontrakan as $k =>$hasil )
                            <tr align="center">
                                <td style="vertical-align: middle;" >{{ $k + $kontrakan->firstitem() }}</td>
                                <td style="vertical-align: middle;" >{{ $hasil->nama_kontrakan }}</td>
                                <td style="vertical-align: middle;" >{{ $hasil->tipe_kontrakan }}</td>
                                <td style="vertical-align: middle;" >{{ $hasil->kapasitas_kontrakan }}</td> 
                                <td style="vertical-align: middle;" >{{ $hasil->status_kontrakan }}  </td>
                                <td style="vertical-align: middle;" >{{ $hasil->alamat_kontrakan }}</td> 
                                <td>
                                     
                                    <form action="{{ route('kontrakan.show', $hasil->id)}}">
                                      <button class="btn-primary" title="Detail Data {{ $hasil->nama_kontrakan}}" data-toggle="tooltip"> 
                                      <i class="material-icons">&#xE417;</i></button>
                                    </form>
                                    <br>
                                    <br>
                                    <form action="{{ route('kontrakan.edit', $hasil->id)}}"> 
                                      <button class="btn-warning" title="Edit Data {{ $hasil->nama_kontrakan}}" data-toggle="tooltip"> 
                                        <i class="material-icons">&#xE254;</i></button>
                                    </form>
                                    <br>
                                    <br>
                                    <form action="{{ route('kontrakan.destroy', $hasil->id)}}" method="post" onsubmit="return confirm('Yakin Hapus Data {{ $hasil->nama_kontrakan}} ??')">
                                      @method('delete')  
                                      @csrf 
                                      <button class="btn-danger" title="Hapus Data {{ $hasil->nama_kontrakan}}" data-toggle="tooltip"> 
                                        <i class="material-icons">&#xE872;</i></button>
                                    </form>  
                                </td>
                            </tr> 
                          @endforeach
                        </tbody>
                    </table>
                    </div>
 
                </div>
            </div>  
         </div>    
      </div>
      <!-- ini adalah tutup endsection -->
      @endsection