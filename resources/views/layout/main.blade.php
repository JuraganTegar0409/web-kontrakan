<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
    <meta name="author" content="Creative Tim">
    <title>@yield('title')</title>



    <!-- dataTables bootstrap -->
    <link rel="stylesheet" href=" {{ asset('assets/dataTables/bootstrap.min.css') }}" type="text/css">
    <link rel="stylesheet" href=" {{ asset('assets/dataTables/dataTables.bootstrap4.min.css') }}" type="text/css">
    <link rel="stylesheet" href=" {{ asset('assets/dataTables/tables.css') }}" type="text/css">

    <!-- Favicon -->
    <link rel="icon" href=" {{ asset('assets/img/brand/favicon.png') }}" type="image/png">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
    <!-- Icons -->
    <link rel="stylesheet" href=" {{ asset('assets/vendor/nucleo/css/nucleo.css') }}" type="text/css">
    <link rel="stylesheet" href=" {{ asset('assets/vendor/@fortawesome/fontawesome-free/css/all.min.css') }}"
        type="text/css">
    <!-- Page plugins -->
    <!-- Argon CSS -->
    <link rel="stylesheet" href=" {{ asset('assets/css/argon.css?v=1.2.0') }}" type="text/css">

    <!-- Link Bootstrap Table CRUD -->
    <link rel="stylesheet" href="{{ asset('assets/fonts/nucleo/fonts-googleapis.css') }}">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>  -->
</head>

<body>
    <!-- Sidenav -->
    <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
        <div class="scrollbar-inner">
            <!-- Brand -->
            <div class="sidenav-header  align-items-center">
                <a class="navbar-brand" href="javascript:void(0)">
                    <img src="{{ asset('assets/img/brand/blue.png') }}" class="navbar-brand-img" alt="...">
                </a>
            </div>
            <div class="navbar-inner">
                <!-- Collapse -->
                <div class="collapse navbar-collapse" id="sidenav-collapse-main">
                    <!-- Nav items -->
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" href="/homepage_admin">
                                <i class="ni ni-tv-2 text-primary"></i>
                                <span class="nav-link-text">Dashboard</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('dashboard.kontrakan.index') }}">
                                <i class="ni ni-single-02 text-blue"></i>
                                <span class="nav-link-text">Kontrakan</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('dashboard.penghuni.index') }}">
                                <i class="ni ni-single-02 text-blue"></i>
                                <span class="nav-link-text">Penghuni</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('dashboard.transaksi.index') }}">
                                <i class=" ni ni-money-coins text-green"></i>
                                <span class="nav-link-text">Transaksi</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('dashboard.laporan.index') }}">
                                <i class=" ni ni-money-coins text-green"></i>
                                <span class="nav-link-text">Laporan Transaksi</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('dashboard.log.index') }}">
                                <i class="fa fa-table text-black "></i>
                                <span class="nav-link-text">Log Activity</span>
                            </a>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!-- Main content -->
    <div class="main-content" id="panel">
        <!-- Topnav -->
        <nav class="navbar navbar-top navbar-expand navbar-dark bg-primary border-bottom">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">


                    <!-- Search form -->
                    <!-- <form action="/search" method="GET" class="navbar-search navbar-search-light form-inline mr-sm-3" id="navbar-search-main">
                      <div class="form-group mb-0">
                        <div class="input-group input-group-alternative input-group-merge">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-search"></i></span>
                          </div>
                          <input type="search" name="search" class="form-control" placeholder="Search&hellip;">
                        </div>
                      </div>
                      <button type="button" class="close" data-action="search-close" data-target="#navbar-search-main" aria-label="Close">
                        <span aria-hidden="true">×</span>
                      </button>
                    </form> -->


                    <!-- Navbar links -->
                    <ul class="navbar-nav align-items-center  ml-md-auto ">
                        <li class="nav-item d-xl-none">
                            <!-- Sidenav toggler -->
                            <div class="pr-3 sidenav-toggler sidenav-toggler-dark" data-action="sidenav-pin"
                                data-target="#sidenav-main">
                                <div class="sidenav-toggler-inner">
                                    <i class="sidenav-toggler-line"></i>
                                    <i class="sidenav-toggler-line"></i>
                                    <i class="sidenav-toggler-line"></i>
                                </div>
                            </div>
                        </li>
                        <!-- <li class="nav-item d-sm-none">
                          <a class="nav-link" href="#" data-action="search-show" data-target="#navbar-search-main">
                            <i class="ni ni-zoom-split-in"></i>
                          </a>
                        </li> -->
                    </ul>
                    <ul class="navbar-nav align-items-center  ml-auto ml-md-0 ">
                        <li class="nav-item dropdown">
                            <a class="nav-link pr-0" href="/" role="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <div class="media align-items-center">
                                    <span class="avatar avatar-sm rounded-circle">
                                        <img alt="Image placeholder"
                                            src="{{ asset('assets/img/theme/team-4.jpg') }}">
                                    </span>
                                    <div class="media-body  ml-2  d-none d-lg-block">
                                        <span class="mb-0 text-sm  font-weight-bold">Halo,
                                            {{ auth::user()->name }}</span>
                                    </div>
                                </div>
                            </a>
                            <div class="dropdown-menu  dropdown-menu-right ">
                                <div class="dropdown-header noti-title">
                                    <h6 style="text-align: center;">Selamat Datang !!!</h6>
                                </div>
                                <div class="dropdown-divider"></div>

                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                                    <i class="ni ni-user-run"></i>
                                    {{ __('Logout') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Header -->
        <!-- Tutup Nav Side -->

        @yield('container')

        <!-- Footer -->
        <footer class="___class_+?66___">
            <div class="row align-items-center justify-content-lg-between">
                <div class="col-lg-12">
                    <div class="copyright text-center  text-lg-center">
                        <a href="" style="color: white; font-size: 30px;">&copy; 2020 BY KONTRAKAN SUPADI</a>
                    </div>
                </div>

            </div>
        </footer>
    </div>
    </div> <!-- Tutup background biru-->


    <!-- Argon Scripts -->
    <!-- Core -->
    <script src="{{ asset('assets/vendor/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/js-cookie/js.cookie.js') }}"></script>
    <script src="{{ asset('assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js') }}"></script>
    <!-- Optional JS -->
    <script src="{{ asset('assets/vendor/chart.js/dist/Chart.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/chart.js/dist/Chart.extension.js') }}"></script>
    <!-- Argon JS -->
    <script src="{{ asset('assets/js/argon.js?v=1.2.0') }}"></script>

    <!-- Script dataTables -->
    <script src="{{ asset('assets/dataTables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/dataTables/dataTables.bootstrap4.min.js') }}"></script>
    <script>
        $('.mydatatable').DataTable({
            lengthMenu: [
                [5, 10, 20, -1],
                [5, 10, 20, "All"]
            ],
            scrollY: 400,
            scrollX: true,
            scrollCollapse: true,
            // paging: false,
        });
        $('.dataTables_filter input').attr("placeholder", "Search...");

        //script type text di thead pada datatable dengan langsung menampilkan isi dari tiap thead
        // initComplete: function (){
        //     this.api().columns().every( function () {
        //           var column = this;
        //           var select = $('<select><option value=""></option></select>')
        //           .appendTo( $(column.header()).empty() )
        //           .on( 'change', function () {
        //               var val = $.fn.dataTable.util.escapeRegex(
        //                   $(this).val()
        //               );
        //                 column
        //                 .search( val ? '^'+val+'$' : '', true, false)
        //                 .draw();
        //           });

        //         column.data().unique().sort().each( function ( d, j ) {
        //           select.append( '<option value="'+d+'">'+d+'</option>')
        //         });
        //     });
        //   } 


        //  script type text dengan placeholder di thead pada datatable
        // var table = $('.mydatatable').DataTable(); 
        // $('.mydatatable thead th').each( function () {  
        //   var title = $(this).text();
        //     $(this).html( '<input type="text" placeholder="Search '+title+'" />' );  
        // }); 

        // table.columns().every( function (){
        //     var that = this;
        //     $('input', this.header() ).on( 'keyup change', function () {
        //           if ( that.search() !== this.value ) {
        //             that.search( this.value ).draw();
        //           } 
        //     });
        // });
    </script>

    <script>
        function previewImg() {
            const foto_kontrakan = document.querySelector('#foto_kontrakan');
            const foto_kontrakanLabel = document.querySelector('.custom-file');
            const imgPreview = document.querySelector('.img-preview');

            // buat mengganti URL nya
            foto_kontrakanLabel.textContent = foto_kontrakan.files[0].name;

            // ini buat mengganti preview 
            const fileFotokontrakan = new FileReader();
            fileFotokontrakan.readAsDataURL(foto_kontrakan.files[0]);

            fileFotokontrakan.onload = function(e) {
                imgPreview.src = e.target.result;
            }
        }
    </script>
</body>

</html>
