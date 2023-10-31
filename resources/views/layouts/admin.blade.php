<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"> --}}

    <!-- CSS Files -->
    <link href="{{asset('admin/css/material-dashboard.css?v=2.1.2')}}" rel="stylesheet" />
    <script src="{{ URL::asset('admin/js/ckeditor1.js') }}"></script>
    <style type="text/css">
        .ck-editor__editable_inline
        {
            height: 450px;
            weight: 120px;
        }
    </style>

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div class="wrapper ">
        <!-- Sidebar -->
        @livewire('admin.sidebar')
        <!-- Sidebar -->

        <div class="main-panel">
            <!-- Navbar -->
            @livewire('admin.navbar')
            <!-- Navbar -->

            <div class="content">
                @yield('content')
            </div>

            <!-- Navbar -->
            @livewire('admin.footer')
            <!-- Navbar -->
        </div>
    </div>

    <!--   Core JS Files   -->
    <script src="{{asset('admin/js/jquery.min.js')}}"></script>
    <script src="{{asset('admin/js/popper.min.js')}}"></script>
    <script src="{{asset('admin/js/bootstrap-material-design.min.js')}}"></script>
    <script src="{{asset('admin/js/perfect-scrollbar.jquery.min.js')}}"></script>
    <script src="https://kit.fontawesome.com/44158fe681.js" crossorigin="anonymous"></script>

    @yield('script')
</body>
</html>
