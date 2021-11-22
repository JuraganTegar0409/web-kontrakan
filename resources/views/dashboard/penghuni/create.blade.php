<!-- ini adalah konten dari halaman Tambah Kontrakan -->
@extends('layout/main')

<!-- ini adalah title dari halaman Tambah Kontrakan -->
@section('title', 'Tambah Data Penghuni')
@section('header')
    @include("includes.header", [
    "icon" => "fas fa-users",
    "breadcrumbs" => [
    [
    "name" => "List Penghuni",
    "is_active" => "",
    "link" => "/dashboard/penghuni"
    ],
    [
    "name" => "Tambah Penghuni",
    "is_active" => "active",
    "link" => ""
    ]
    ]
    ])
@endsection
<!-- ini adalah isi konten dari halaman Tambah Kontrakan -->
@section('container')
    <div class="container-fluid mt--6">
        <div class="row">
            <div class="wrapper">
                @include('sweetalert::alert')
            </div>

            <div class="col-lg-7 mx-auto">
                <div class="card mx-auto">
                    <div class="card-body bg-white">
                        <h1 class="text-center mb-4">
                            <i class="fas fa-users d-block"></i>
                            Tambah Data penghuni
                        </h1>
                        <form id="contact-form" role="form" method="POST" action="{{ route('dashboard.penghuni.store') }}"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group"> <label for="form_name">Nama Penghuni
                                            <span class="text-red">*</span>
                                            :</label> <input type="text" name="nama_penghuni"
                                            class="form-control @error('nama_penghuni') is-invalid @enderror"
                                            placeholder="Masukkan nama penghuni" value="{{ old('nama_penghuni') }}">
                                        @error('nama_penghuni')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_need">
                                            Agama penghuni <span class="text-red">*</span>:
                                        </label>
                                        <select id="form_need" name="agama_penghuni"
                                            class="form-control @error('agama_penghuni') is-invalid @enderror">
                                            <option value="">Pilih Agama Penghuni</option>
                                            <option value="Islam">Islam</option>
                                            <option value="Protestan">Protestan</option>
                                            <option value="Katolik">Katolik</option>
                                            <option value="Buddha">Buddha</option>
                                            <option value="Khonghucu">Khonghucu</option>
                                        </select>
                                        @error('agama_penghuni')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_email">
                                            Umur Penghuni <span class="text-red">*</span>:
                                        </label>
                                        <input type="number" name="umur_penghuni"
                                            class="form-control @error('umur_penghuni') is-invalid @enderror"
                                            placeholder="Masukkan umur" value="{{ old('umur_penghuni') }}">
                                        @error('umur_penghuni')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="gender">
                                            Jenis Kelamin <span class="text-red">*</span>:
                                        </label>
                                        <div class="form-check form-check-inline">
                                            <input
                                                class="form-check-input @error('jenis_kelamin_penghuni') is-invalid @enderror"
                                                type="radio" name="jenis_kelamin_penghuni" id="man" value="Laki-Laki">
                                            <label class="form-check-label" for="man">Laki-laki</label>
                                        </div>

                                        <div class="form-check form-check-inline">
                                            <input
                                                class="form-check-input @error('jenis_kelamin_penghuni') is-invalid @enderror"
                                                type="radio" name="jenis_kelamin_penghuni" id="woman" value="Perempuan">
                                            <label class="form-check-label" for="woman">Perempuan</label>

                                            @error('jenis_kelamin_penghuni')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="form_need">Status Penghuni <span
                                                class="text-red">*</span>:</label>
                                        <select name="status_penghuni"
                                            class="form-control @error('status_penghuni') is-invalid @enderror">
                                            <option value="">Pilih Status Penghuni</option>
                                            <option value="Kawin">Kawin</option>
                                            <option value="Belum Kawin">Belum Kawin</option>
                                        </select>
                                        @error('status_penghuni')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group row">
                                        <label for="fotoKtp">Foto KTP
                                            <span class="text-red">*</span>
                                            :</label>
                                        <div class="col-sm-10">
                                            <img src="" class="img-thumbnail img-preview2">
                                            <label class="custom-file" for="fotoKtp">
                                            </label>
                                        </div>

                                        <div class="col-sm-12">
                                            <div class="custom-file">
                                                <input type="file"
                                                    class="custom-file-input @error('foto_ktp') is-invalid @enderror"
                                                    id="fotoKtp" name="foto_ktp" value="">
                                                @error('foto_ktp')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="fotoSuratNikah">
                                            Foto Surat Nikah
                                            <span class="text-red">
                                                *(Wajib diisi bila sudah menikah)
                                            </span>:
                                        </label>
                                        <div class="col-sm-10">
                                            <img src="" class="img-thumbnail img-preview3">
                                            <label class="custom-file" for="fotoSuratNikah">
                                                <h3></h3>
                                            </label>
                                        </div>

                                        <div class="col-sm-12">
                                            <div class="custom-file">
                                                <input type="file"
                                                    class="custom-file-input @error('foto_surat_nikah') is-invalid @enderror"
                                                    id="foto_surat_nikah" name="foto_surat_nikah" value="">
                                                @error('foto_surat_nikah')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="fotoKK">
                                            Foto KK
                                            <span class="text-red">*</span>:
                                        </label>
                                        <div class="col-sm-10">
                                            <img src="" class="img-thumbnail img-preview4">
                                            <label class="custom-file" for="fotoKK">
                                                <h3></h3>
                                            </label>
                                        </div>

                                        <div class="col-sm-12">
                                            <div class="custom-file">
                                                <input type="file"
                                                    class="custom-file-input @error('foto_kk') is-invalid @enderror"
                                                    id="fotoKK" name="foto_kk" value="">
                                                @error('foto_kk')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <input type="submit" class="btn btn-success btn-send pt-2 btn-block " value="Tambah Data">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
