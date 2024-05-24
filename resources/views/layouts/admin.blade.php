<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elegant Dashboard | Dashboard</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('admin/img/svg/logo.svg') }}" type="image/x-icon">
    <!-- Custom styles -->
    <link rel="stylesheet" href="{{ asset('admin/css/style.min.css') }}">

    @include('form.styles')

</head>

<body>

    <div class="page-flex">
        @include('partials.sidebar')
        <div class="main-wrapper">
            @include('partials.navadmin')
            @yield('main')
        </div>
    </div>

    <!-- Chart library -->
    <script src="{{ asset('admin/plugins/chart.min.js') }}"></script>
    <!-- Icons library -->
    <script src="{{ asset('admin/plugins/feather.min.js') }}"></script>
    <!-- Custom scripts -->
    <script src="{{ asset('admin/js/script.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/564f87158a.js" crossorigin="anonymous"></script>

    @include('form.scripts')
</body>

</html>
