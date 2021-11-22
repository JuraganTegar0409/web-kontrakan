<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Tegar Dwi Septiadi">
    <title>@yield('title')</title>

    @stack("prepend-style")
    @include('includes.style')
    @stack("addon-style")
</head>

<body>
    @include('includes.sidenav')
    <!-- Main content -->
    <div class="main-content" id="panel">
        @include("includes.topnav")
        @yield('header')
        @yield('container')
    </div>

    @include('includes.scripts')
    @stack("addon-script")
    <script>
        $("#logoutBtn").on("click", (e) => {
            e.preventDefault();
            $("#logout-form").submit();
        });

        $('.mydatatable').DataTable({
            lengthMenu: [
                [5, 10, 20, -1],
                [5, 10, 20, "All"]
            ],
            scrollY: 400,
            scrollX: true,
            scrollCollapse: true,
            pagingType: "simple_numbers",
            language: {
                paginate: {
                    previous: "<i class='fas fa-angle-left'></i>",
                    next: "<i class='fas fa-angle-right'></i>",
                }
            }
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

    <!-- bagian penghuni -->
    <script>
        function previewImg2() {
            const foto_ktp = document.querySelector('#foto_ktp');
            const foto_ktpLabel = document.querySelector('.custom-file');
            const imgPreview2 = document.querySelector('.img-preview2');

            // buat mengganti URL nya
            foto_ktpLabel.textContent = foto_ktp.files[0].name;

            // ini buat mengganti preview 
            const fileFotoktp = new FileReader();
            fileFotoktp.readAsDataURL(foto_ktp.files[0]);

            fileFotoktp.onload = function(e) {
                imgPreview2.src = e.target.result;
            }
        }
    </script>
    <script>
        function previewImg3() {
            const foto_surat_nikah = document.querySelector('#foto_surat_nikah');
            const foto_surat_nikahLabel = document.querySelector('.custom-file');
            const imgPreview3 = document.querySelector('.img-preview3');

            // buat mengganti URL nya
            foto_surat_nikahLabel.textContent = foto_surat_nikah.files[0].name;

            // ini buat mengganti preview 
            const fileFotosurat_nikah = new FileReader();
            fileFotosurat_nikah.readAsDataURL(foto_surat_nikah.files[0]);

            fileFotosurat_nikah.onload = function(e) {
                imgPreview3.src = e.target.result;
            }
        }
    </script>

    <script>
        function previewImg4() {
            const foto_kk = document.querySelector('#foto_kk');
            const foto_kkLabel = document.querySelector('.custom-file');
            const imgPreview4 = document.querySelector('.img-preview4');

            // buat mengganti URL nya
            foto_kkLabel.textContent = foto_kk.files[0].name;

            // ini buat mengganti preview 
            const fileFotokk = new FileReader();
            fileFotokk.readAsDataURL(foto_kk.files[0]);

            fileFotokk.onload = function(e) {
                imgPreview4.src = e.target.result;
            }
        }
    </script>


</body>

</html>
