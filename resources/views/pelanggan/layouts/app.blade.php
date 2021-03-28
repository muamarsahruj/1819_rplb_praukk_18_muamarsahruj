<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="{{asset('img/icon.png')}}">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Font Awesome -->
    <link href="{{ asset('font/css/all.min.css') }}" rel="stylesheet">

    <!-- Datatables -->
    <link rel="stylesheet" href="{{asset('plugin/dataTables.bootstrap4.min.css')}}">

    <!-- My css -->
    <!-- <link rel="stylesheet" href="/assets/css/style.css"> -->

    <title>@yield('title')</title>
</head>

<body>

   

    <!-- Body -->
    <div class="page-content p-0" id="content">

        <!-- Navbar -->
        @include('pelanggan.layouts.navbar')
        <!-- Akhir Navbar -->

        <!-- Konten -->
        <div class="py-4">
            @yield('content')
        </div>
        <!-- Akhir Konten -->

        <!-- Footer -->
        <!-- <div class="bg-white p-3 m-0 text-center" id="footer">
            <span class="font-weight-bold text-secondary">Copyright &copy; 2021</span>
            <span class="text-secondary">- E-Electricity</span>
        </div> -->
        <!-- Akhir Footer -->

    </div>
    <!-- Akhir Body-->


    <!-- JQUERY -->
    <script src="{{ asset('plugin/jquery.min.js') }}"></script>
    <script src="{{ asset('plugin/dataTables.bootstrap4.min.js') }}" defer></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('font/js/all.min.js') }}"></script>
    <script src="{{ asset('plugin/jquery.dataTables.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#dataTables').DataTable();
        });
    </script>
    <!-- End Datatables -->

    
    <!-- My Script -->
    <script>
        const navbar = $('#navbar').innerHeight();
        const footer = $('#footer').innerHeight();
        const sidebar = $('#sidebar').innerHeight();

        $('.container-fluid').css('min-height', sidebar - (navbar + footer))
    </script>
    <!-- End Script -->


</body>
</html>