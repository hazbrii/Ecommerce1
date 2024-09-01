<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Khatoun || @yield('title')</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/logo/logo-light.png') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/font-awesome.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/flaticon/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/slick-theme.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/jquery-ui.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/sal.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/base.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/plugins.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/kaiadmin.min.css') }}" />

    <style>
      .list-group {
    padding: 0; /* Remove default padding */
}

    .list-group-item {
        margin: 0; /* Remove margin */
        padding: 0; /* Remove padding */
    }
      .card-stepper {
        z-index: 0
        }
        
        #progressbar-2 {
        color: #455A64;
        }
        
        #progressbar-2 li {
        list-style-type: none;
        font-size: 13px;
        width: 33.33%;
        float: left;
        position: relative;
        }
        
        #progressbar-2 #step1:before {
        content: '\f058';
        font-family: "Font Awesome 5 Free";
        color: #fff;
        width: 37px;
        margin-left: 0px;
        padding-left: 0px;
        }
        
        #progressbar-2 #step2:before {
        content: '\f058';
        font-family: "Font Awesome 5 Free";
        color: #fff;
        width: 37px;
        }
        
        #progressbar-2 #step3:before {
        content: '\f058';
        font-family: "Font Awesome 5 Free";
        color: #fff;
        width: 37px;
        margin-right: 0;
        text-align: center;
        }
        
        #progressbar-2 #step4:before {
        content: '\f111';
        font-family: "Font Awesome 5 Free";
        color: #fff;
        width: 37px;
        margin-right: 0;
        text-align: center;
        }
        
        #progressbar-2 li:before {
        line-height: 37px;
        display: block;
        font-size: 12px;
        background: #c5cae9;
        border-radius: 50%;
        }
        
        #progressbar-2 li:after {
        content: '';
        width: 100%;
        height: 10px;
        background: #c5cae9;
        position: absolute;
        left: 0%;
        right: 0%;
        top: 15px;
        z-index: -1;
        }
        
        #progressbar-2 li:nth-child(1):after {
        left: 1%;
        width: 100%
        }
        
        #progressbar-2 li:nth-child(2):after {
        left: 1%;
        width: 100%;
        }
        
        #progressbar-2 li:nth-child(3):after {
        left: 1%;
        width: 100%;
        background: #c5cae9 !important;
        }
        
        #progressbar-2 li:nth-child(4) {
        left: 0;
        width: 37px;
        }
        
        #progressbar-2 li:nth-child(4):after {
        left: 0;
        width: 0;
        }
        
        #progressbar-2 li.active:before,
        #progressbar-2 li.active:after {
        background: #6520ff;
        }
        .sidebar {
            width: 250px;
            position: fixed;
            left: 0;
            top: 0;
            bottom: 0;
            background-color: #333;
            z-index: 1000;
        }

        .header {
            top: 0;
            position: fixed;
            left: 250px; /* Match this to the sidebar width */
            right: 0;
            z-index: 1001;
        }

        .content {
            margin-left: 250px; /* Match this to the sidebar width */
            padding-top: 60px; /* Match this to the header height */
        }

    </style>

</head>


    <body>
        <div class="sidebar" >
             @include('admin.layouts.sidebar')
        </div>

        <div class="header" >
             @include('admin.layouts.header')
        </div>

        <div class="content" >
            @yield('content')
        </div>
        <script src="{{ asset('assets/js/vendor/modernizr.min.js') }}"></script>
        <script src="{{ asset('assets/js/vendor/jquery.js') }}"></script>
        <script src="{{ asset('assets/js/vendor/popper.min.js') }}"></script>
        <script src="{{ asset('assets/js/vendor/bootstrap.min.js') }}"></script>
        <script src="{{ asset('assets/js/vendor/slick.min.js') }}"></script>
        <script src="{{ asset('assets/js/vendor/js.cookie.js') }}"></script>
        <script src="{{ asset('assets/js/vendor/jquery-ui.min.js') }}"></script>
        <script src="{{ asset('assets/js/vendor/jquery.ui.touch-punch.min.js') }}"></script>
        <script src="{{ asset('assets/js/vendor/jquery.countdown.min.js') }}"></script>
        <script src="{{ asset('assets/js/vendor/sal.js') }}"></script>
        <script src="{{ asset('assets/js/vendor/jquery.magnific-popup.min.js') }}"></script>
        <script src="{{ asset('assets/js/vendor/imagesloaded.pkgd.min.js') }}"></script>
        <script src="{{ asset('assets/js/vendor/isotope.pkgd.min.js') }}"></script>
        <script src="{{ asset('assets/js/vendor/counterup.js') }}"></script>
        <script src="{{ asset('assets/js/vendor/waypoints.min.js') }}"></script>
        <script src="{{ asset('assets/js/main.js') }}"></script>
        <script src="{{ asset('assets/js/core/jquery-3.7.1.min.js') }}"></script>
        <script src="{{ asset('assets/js/core/popper.min.js') }}"></script>
        <script src="{{ asset('assets/js/core/bootstrap.min.js') }}"></script>
         <!-- jQuery Scrollbar -->
        <script src="{{ asset('assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js') }}"></script>
        <!-- Chart JS -->
        <script src="{{ asset('assets/js/plugin/chart.js/chart.min.js') }}"></script>
        <!-- jQuery Sparkline -->
        <script src="{{ asset('assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js') }}"></script>
        <!-- Chart Circle -->
        <script src="{{ asset('assets/js/plugin/chart-circle/circles.min.js') }}"></script>
        <!-- Datatables -->
        <script src="{{ asset('assets/js/plugin/datatables/datatables.min.js') }}"></script>
        <!-- Bootstrap Notify -->
        <script src="{{ asset('assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js') }}"></script>
        <!-- jQuery Vector Maps -->
        <script src="{{ asset('assets/js/plugin/jsvectormap/jsvectormap.min.js') }}"></script>
        <script src="{{ asset('assets/js/plugin/jsvectormap/world.js') }}"></script>
        <!-- Sweet Alert -->
        <script src="{{ asset('assets/js/plugin/sweetalert/sweetalert.min.js') }}"></script>
        <!-- Kaiadmin JS -->
        <script src="{{ asset('assets/js/kaiadmin.min.js') }}"></script>
        <!-- Kaiadmin DEMO methods, don't include it in your project! -->
        <script src="{{ asset('assets/js/setting-demo.js') }}"></script>
        <script src="{{ asset('assets/js/demo.js') }}"></script>
        <script>
      $(document).ready(function () {
        $("#basic-datatables").DataTable({});

        $("#verified-clients-filter").DataTable({
          pageLength: 5,
          initComplete: function () {
            this.api()
              .columns()
              .every(function () {
                var column = this;
                var select = $(
                  '<select class="form-select"><option value=""></option></select>'
                )
                  .appendTo($(column.footer()).empty())
                  .on("change", function () {
                    var val = $.fn.dataTable.util.escapeRegex($(this).val());

                    column
                      .search(val ? "^" + val + "$" : "", true, false)
                      .draw();
                  });

                column
                  .data()
                  .unique()
                  .sort()
                  .each(function (d, j) {
                    select.append(
                      '<option value="' + d + '">' + d + "</option>"
                    );
                  });
              });
          },
        });
        $("#unverified-clients-filter").DataTable({
          pageLength: 5,
          initComplete: function () {
            this.api()
              .columns()
              .every(function () {
                var column = this;
                var select = $(
                  '<select class="form-select"><option value=""></option></select>'
                )
                  .appendTo($(column.footer()).empty())
                  .on("change", function () {
                    var val = $.fn.dataTable.util.escapeRegex($(this).val());

                    column
                      .search(val ? "^" + val + "$" : "", true, false)
                      .draw();
                  });

                column
                  .data()
                  .unique()
                  .sort()
                  .each(function (d, j) {
                    select.append(
                      '<option value="' + d + '">' + d + "</option>"
                    );
                  });
              });
          },
        });

        // Add Row
        $("#add-row").DataTable({
          pageLength: 5,
        });

        var action =
          '<td> <div class="form-button-action"> <button type="button" data-bs-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task"> <i class="fa fa-edit"></i> </button> <button type="button" data-bs-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove"> <i class="fa fa-times"></i> </button> </div> </td>';

        $("#addRowButton").click(function () {
          $("#add-row")
            .dataTable()
            .fnAddData([
              $("#addName").val(),
              $("#addPosition").val(),
              $("#addOffice").val(),
              action,
            ]);
          $("#addRowModal").modal("hide");
        });
      });
    </script>
    </body>

</html>