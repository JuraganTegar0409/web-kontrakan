<!-- ini adalah konten dari halaman Kelola Kontrakan -->
@extends("layout.main")

<!-- ini adalah title dari halaman Kelola Kontrakan -->
@section('title', 'Kontrakan')
@section('header')
    @include("includes.header", [
    "icon" => "fas fa-hotel",
    "breadcrumbs" => [
    [
    "name" => "List Kontrakan",
    "is_active" => "active",
    "link" => `{{ route('dashboard.kontrakan.index') }}`
    ]
    ],
    "button" => ["link" => "/dashboard/kontrakan/create", "name" => "Tambah Kontrakan"]
    ])
@endsection
<!-- ini adalah isi konten dari halaman Kelola Kontrakan -->
@section('container')
    <div class="container-fluid mt--5">
        <div class="row justify-content-center">
            <div class="col">
                <div class="card">
                    <div class="card-header bg-transparent">
                        <h3 class="mb-0">List Kontrakan</h3>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <div class="table-wrapper">
                                <div class="wrapper">
                                    @include("sweetalert::alert")
                                </div>

                                {{-- <div class=" row">
                                    <div class="col-sm-5">
                                        @if (session('status'))
                                            <div class="alert alert-success" style="text-align: center; font-size:20px;">
                                                {{ session("status") }}
                                            </div>
                                        @endif
                                    </div>
                                </div> --}}
                                <div class="table-responsive">
                                    <table class="table table-striped table-hover table-bordered mydatatable w-100">
                                        <thead>
                                            <tr align="center">
                                                <th scope="col">No.</th>
                                                <th scope="col">Nama</th>
                                                <th scope="col">Tipe Kontrakan</th>
                                                <th scope="col">Kapasitas</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Alamat</th>
                                                <th scope="col">Actions</th>
                                            </tr>
                                        </thead>
                                        @if (count($rents) > 0)
                                            @foreach ($rents as $rent)
                                                <tr align="center">
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $rent->nama_kontrakan }}</td>
                                                    <td>{{ $rent->tipe_kontrakan }}</td>
                                                    <td>{{ $rent->kapasitas_kontrakan }}</td>
                                                    <td>{{ $rent->status_kontrakan }} </td>
                                                    <td>{{ $rent->alamat_kontrakan }}</td>
                                                    <td class="d-flex">
                                                        <form action="{{ route('dashboard.kontrakan.show', $rent->id) }}">
                                                            <button class="btn btn-primary btn-sm" title="Detail"
                                                                data-toggle="tooltip">
                                                                <i class="fas fa-eye"></i></button>
                                                        </form>
                                                        <form action="{{ route('dashboard.kontrakan.edit', $rent->id) }}">
                                                            <button class="btn btn-warning btn-sm mx-2" title="Edit"
                                                                data-toggle="tooltip">
                                                                <i class="fas fa-edit"></i>
                                                            </button>
                                                        </form>
                                                        <form
                                                            action="{{ route('dashboard.kontrakan.destroy', $rent->id) }}"
                                                            method="POST" onsubmit="return confirm(" Yakin Hapus Data
                                                            {{ $rent->nama_kontrakan }} ?")">
                                                            @method("delete")
                                                            @csrf
                                                            <button class="btn btn-danger btn-sm" title="Hapus Data"
                                                                data-toggle="tooltip">
                                                                <i class="fas fa-trash"></i>
                                                            </button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @else
                                            <tr align="center">
                                                <td colspan="7">Data kosong</td>
                                            </tr>
                                        @endif
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include("includes.footer")
    </div>
@endsection
