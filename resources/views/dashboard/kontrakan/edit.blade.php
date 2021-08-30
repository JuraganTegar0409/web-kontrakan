    <!-- ini adalah konten dari halaman Tambah Kontrakan -->
    @extends('layout/main')

    <!-- ini adalah title dari halaman Tambah Kontrakan -->
    @section('title', 'Edit Data Kontrakan')

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
                                    <li class="breadcrumb-item"><a href="{{route("dashboard.admin")}}"><i class="fas fa-home"></i></a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="{{route("dashboard.admin")}}">Dashboard</a></li>
                                    <li class="breadcrumb-item"><a href="{{route("dashboard.kontrakan.index")}}">Kelola Kontrakan</a></li>
                                    <li class="breadcrumb-item " aria-current="page">Edit Kontrakan</li>
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
                                                Edit Data Kontrakan</h1>

                                            <br />
                                            <form id="contact-form" role="form" method="post"
                                                action="{{ route('dashboard.kontrakan.update', $kontrakan->id) }}"
                                                enctype="multipart/form-data">
                                                @method('patch')
                                                @csrf
                                                <div class="controls">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group"> <label for="form_name">Nama
                                                                    Kontrakan
                                                                    :</label> <input type="text" name="nama_kontrakan"
                                                                    class="form-control @error('nama_kontrakan') is-invalid @enderror "
                                                                    value="{{ $kontrakan->nama_kontrakan }}">
                                                                @error('nama_kontrakan')
                                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">

                                                        <div class="col-md-6">
                                                            <div class="form-group"> <label for="form_need">Tipe
                                                                    Kontrakan
                                                                    :</label> <select id="form_need" name="tipe_kontrakan"
                                                                    class="form-control @error('tipe_kontrakan') is-invalid @enderror">
                                                                    <option value="{{ $kontrakan->tipe_kontrakan }}">
                                                                        {{ $kontrakan->tipe_kontrakan }}</option>
                                                                    <option value="Keluarga">Keluarga</option>
                                                                    <option value="Cowo">Cowo</option>
                                                                    <option value="Cewe">Cewe</option>
                                                                </select>
                                                                @error('tipe_kontrakan')
                                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="form-group"> <label for="form_email">Kapasitas
                                                                    :</label>
                                                                <input type="number" name="kapasitas_kontrakan"
                                                                    class="form-control @error('kapasitas_kontrakan') is-invalid @enderror"
                                                                    placeholder="Please enter capacity *"
                                                                    value="{{ $kontrakan->kapasitas_kontrakan }}">
                                                                @error('kapasitas_kontrakan')
                                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group"> <label for="form_name">Harga
                                                                    Kontrakan
                                                                    (Perbulan) : *Termasuk air & listrik</label> <input
                                                                    type="number" name="harga_kontrakan"
                                                                    class="form-control @error('harga_kontrakan') is-invalid @enderror"
                                                                    placeholder="Please enter price*"
                                                                    value="{{ $kontrakan->harga_kontrakan }}">
                                                                @error('harga_kontrakan')
                                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label for="form_name">Foto Kontrakan :</label>
                                                                <div class="col-sm-10">
                                                                    <img src="{{ Storage::url('assets/upload/' . $kontrakan->foto_kontrakan) }}"
                                                                        class="img-thumbnail img-preview">
                                                                    <label class="custom-file" for="Fotokontrakan">
                                                                        <h3>{{ $kontrakan->foto_kontrakan }}</h3>
                                                                    </label>
                                                                </div>

                                                                <div class="col-sm-12">
                                                                    <div class="custom-file">
                                                                        <input type="file" class="custom-file-input"
                                                                            id="foto_kontrakan" name="foto_kontrakan"
                                                                            onchange="previewImg()" value="">
                                                                    </div>
                                                                </div>

                                                                <div class="col-sm-12">
                                                                    <div class="custom-file">
                                                                        <input type="hidden" class="custom-file-input"
                                                                            id="foto_kontrakan" name="foto_kontrakan"
                                                                            value="{{ $kontrakan->foto_kontrakan }}">
                                                                    </div>
                                                                </div>

                                                                @error('foto_kontrakan')
                                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group"> <label for="form_need">Status
                                                                    Kontrakan
                                                                    :</label> <select name="status_kontrakan"
                                                                    class="form-control @error('status_kontrakan') is-invalid @enderror">
                                                                    <option value="{{ $kontrakan->status_kontrakan }}">
                                                                        {{ $kontrakan->status_kontrakan }}</option>
                                                                    <option value="Kosong">Kosong</option>
                                                                    <option value="Penuh">Penuh</option>
                                                                    <option value="Booked">Booked</option>
                                                                    <option value="Terjual">Terjual</option>
                                                                </select>
                                                                @error('status_kontrakan')
                                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group"> <label for="form_email">Alamat
                                                                    Kontrakan :</label>
                                                                <input type="textarea" name="alamat_kontrakan"
                                                                    class="form-control @error('alamat_kontrakan') is-invalid @enderror"
                                                                    placeholder="Please enter kontrakan address *"
                                                                    value="{{ $kontrakan->alamat_kontrakan }}">
                                                                @error('alamat_kontrakan')
                                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-12">
                                                        <input type="submit"
                                                            class="btn btn-warning btn-send pt-2 btn-block "
                                                            value="Edit Data">
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
