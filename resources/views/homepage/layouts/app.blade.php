<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="img/icon.png">
    <!-- Bootstrap -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="{{ asset('font/css/all.min.css') }}" rel="stylesheet">

    <!-- Datatables -->
    <!-- <link rel="stylesheet" href="/assets/datatables/datatables.min.css"> -->

    <!-- My css -->
    <link href="{{ asset('css/landing.css') }}" rel="stylesheet">

    <!--AOS-->
    <link href="{{ asset('css/aos.css') }}" rel="stylesheet">


    <title>@yield('title')</title>
</head>

<body>

    <!-- Konten -->
    @yield('content')
    <!-- Akhir Konten -->
    <!-- Footer -->
    {{-- <div class="bg-white p-3 m-0 text-center" id="footer">
        <span class="font-weight-bold text-secondary">Copyright &copy; 2021</span>
        <span class="text-secondary">- E-Electricity</span>
    </div> --}}
    <!-- Akhir Footer -->

    <!-- JQUERY -->
    <script src="/assets/jquery/jquery-3.5.1.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <!-- End Jquery -->


    <!-- Bootstrap & Popper -->
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script> -->
    <!-- End Bootstrap & Popper -->

    <!--AOS-->
    <script src="/js/aos.js"></script>
    <script>
        AOS.init();
      </script>
</body>
</html>