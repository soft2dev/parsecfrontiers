<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title') </title>

    <!-- Bootstrap -->

    <link rel="stylesheet" href="{!! asset('members/css/owl.carousel.css') !!}" />
    <link rel="stylesheet" href="{!! asset('members/css/owl.theme.css') !!}" />
    <link rel="stylesheet" href="{!! asset('members/css/animate.css') !!}" />
    <link rel="stylesheet" href="{!! asset('members/css/font/flaticon.css') !!}" />
    <link rel="stylesheet" href="{!! asset('members/css/bootstrap.min.css') !!}" />
    <link rel="stylesheet" href="{!! asset('members/css/main-style.css') !!}" />
    <link rel="stylesheet" href="{!! asset('members/css/responsive.css') !!}" />
</head>
<body>

  <!-- Wrapper-->
    <div id="wrapper">
        <!-- Page wraper -->
        <div id="page-wrappez">

            <!-- Page header -->
            @include('campaigners_layouts.header')

            <!-- Main view  -->
            @yield('content')

        </div>
        <!-- End page wrapper-->

    </div>
    <!-- End wrapper-->

    <script src="{!! asset('js/app.js') !!}" type="text/javascript"></script>
    <script src="{!! asset('members/js/bootstrap.min.js') !!}"></script>
    <script src="{!! asset('members/js/owl.carousel.js') !!}"></script>
    <script src="{!! asset('members/js/wow.min.js') !!}"></script>
    <script src="{!! asset('js/plugins/dataTables/datatables.min.js') !!}"></script>
    <script src="{!! asset('members/js/func/members.js') !!}"></script>
    <script src="{!! asset('members/js/func/users.js') !!}"></script>
@section('scripts')
@show

