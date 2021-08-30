<!-- ini adalah konten dari halaman Tambah Kontrakan -->
@extends('layout/main')

<!-- ini adalah title dari halaman Tambah Kontrakan -->
@section('title', 'Tambah Data Penghuni')

<!-- ini adalah isi konten dari halaman Tambah Kontrakan -->
@section('container')
    <!-- Header -->
    <div class="header bg-primary pb-6">
        <div class="container-fluid">
            <div class="header-body">
                <div class="row align-items-center py-4">
                    <div class="col-lg-6 col-7">
                        <nav aria-label="breadcrumb" class="d-md-inline-block ml-md-4">
                            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                <li class="breadcrumb-item"><a href="{{ route('dashboard.admin') }}"><i
                                            class="fas fa-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="{{ route('dashboard.admin') }}">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="{{ route('dashboard.penghuni.index') }}">Kelola
                                        Penghuni</a></li>
                                <li class="breadcrumb-item " aria-current="page">Tambah Penghuni</li>
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

                    <!-- Form CRUD -->
                    <div class="row ">
                        <div class="col-lg-7 mx-auto">
                            <div class="card mt-2 mx-auto p-4 bg-light">
                                <div class="card-body bg-white">
                                    <div class="container">
                                        <h1 class="text-center mb-4"><i class="ni ni-single-02 text-blue"></i> <br>
                                            Tambah Data penghuni</h1>
                                        <br />
                                        <form id="contact-form" role="form" method="post"
                                            action="{{ route('dashboard.penghuni.store') }}"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <div class="controls">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group"> <label for="form_name">Nama Penghuni
                                                                <span class="text-red">*</span>
                                                                :</label> <input type="text" name="nama_penghuni"
                                                                class="form-control @error('nama_penghuni') is-invalid @enderror"
                                                                placeholder="Masukkan nama penghuni"
                                                                value="{{ old('nama_penghuni') }}">
                                                            @error('nama_penghuni')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group"> <label for="form_need">Agama penghuni
                                                                <span class="text-red">*</span>
                                                                :</label> <select id="form_need" name="agama_penghuni"
                                                                class="form-control @error('agama_penghuni') is-invalid @enderror">
                                                                <option disabled>Pilih Agama Penghuni</option>
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
                                                        <div class="form-group"> <label for="form_email">Umur Penghuni
                                                                <span class="text-red">*</span>
                                                                :</label> <input type="number" name="umur_penghuni"
                                                                class="form-control @error('umur_penghuni') is-invalid @enderror"
                                                                placeholder="Masukkan umur"
                                                                value="{{ old('umur_penghuni') }}">
                                                            @error('umur_penghuni')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group"> <label for="form_name">Jenis Kelamin
                                                                <span class="text-red">*</span>:
                                                                <br>
                                                                <div class="form-check form-check-inline">
                                                                    <input
                                                                        class="form-check-input @error('jenis_kelamin_penghuni') is-invalid @enderror"
                                                                        type="radio" name="jenis_kelamin_penghuni"
                                                                        id="inlineRadio1" value="Laki-Laki">
                                                                    <label class="form-check-label"
                                                                        for="inlineRadio1">Laki-laki</label>
                                                                </div>
                                                                <div class="form-check form-check-inline">
                                                                    <input
                                                                        class="form-check-input @error('jenis_kelamin_penghuni') is-invalid @enderror"
                                                                        type="radio" name="jenis_kelamin_penghuni"
                                                                        id="inlineRadio2" value="Perempuan">
                                                                    <label class="form-check-label"
                                                                        for="inlineRadio2">Perempuan</label>
                                                                    @error('jenis_kelamin_penghuni')
                                                                        <span id="validationServer03Feedback"
                                                                            class="invalid-feedback">{{ $message }}
                                                                    </div>
                                                                @enderror
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
                                                            <div class="form-group">
                                                                <label for="form_name">Foto KTP :</label>
                                                                <div class="col-sm-10">
                                                                    <img src="{{ asset('assets/img/foto_kosong/img_kosong.jpg') }}"
                                                                        class="img-thumbnail img-preview">
                                                                    <label class="custom-file" for="Fotokontrakan">
                                                                        <h3> </h3>
                                                                    </label>
                                                                </div>

                                                                <div class="col-sm-12">
                                                                    <div class="custom-file">
                                                                        <input type="file"
                                                                            class="custom-file-input @error('foto_ktp') is-invalid @enderror"
                                                                            id="foto_ktp" name="foto_ktp"
                                                                            onchange="previewImg()"
                                                                            value="{{ asset('assets/img/foto_kosong/img_kosong.jpg') }} ">
                                                                    </div>
                                                                    @error('foto_ktp')
                                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label for="form_name">Foto Surat Nikah :</label>
                                                                <div class="col-sm-10">
                                                                    <img src="{{ asset('assets/img/foto_kosong/img_kosong.jpg') }}"
                                                                        class="img-thumbnail img-preview">
                                                                    <label class="custom-file" for="Fotokontrakan">
                                                                        <h3> </h3>
                                                                    </label>
                                                                </div>

                                                                <div class="col-sm-12">
                                                                    <div class="custom-file">
                                                                        <input type="file"
                                                                            class="custom-file-input @error('foto_surat_nikah') is-invalid @enderror"
                                                                            id="foto_surat_nikah" name="foto_surat_nikah"
                                                                            onchange="previewImg()"
                                                                            value="{{ asset('assets/img/foto_kosong/img_kosong.jpg') }}">
                                                                    </div>
                                                                    @error('foto_surat_nikah')
                                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label for="form_name">Foto KK :</label>
                                                                <div class="col-sm-10">
                                                                    <img src="{{ asset('assets/img/foto_kosong/img_kosong.jpg') }}"
                                                                        class="img-thumbnail img-preview">
                                                                    <label class="custom-file" for="Fotokontrakan">
                                                                        <h3> </h3>
                                                                    </label>
                                                                </div>

                                                                <div class="col-sm-12">
                                                                    <div class="custom-file">
                                                                        <input type="file"
                                                                            class="custom-file-input @error('foto_kk') is-invalid @enderror"
                                                                            id="foto_kk" name="foto_kk"
                                                                            onchange="previewImg()"
                                                                            value="{{ asset('assets/img/foto_kosong/img_kosong.jpg') }}">
                                                                    </div>
                                                                    @error('foto_kk')
                                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="col-md-12">
                                                        <input type="submit"
                                                            class="btn btn-success btn-send pt-2 btn-block "
                                                            value="Tambah Data">
                                                    </div>
                                                </div>
                                            </div>

                                        </form>
                                        <div class="clearBoth"></div>
                                    </div>
                                </div>
                                <div>
                                </div> <!-- /.8 -->
                            </div> <!-- Tutup Row -->

                        </div> <!-- Tutup Row Isi Konten -->

                    </div>
                </div>
                <!-- ini adalah tutup endsection -->
            @endsection
