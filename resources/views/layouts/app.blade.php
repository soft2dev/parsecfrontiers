<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title') </title>
    <link rel="stylesheet" href="{!! asset('members/css/bootstrap.min.css') !!}" />
    <link rel="stylesheet" href="{!! asset('css/vendor.css') !!}" />
    <link rel="stylesheet" href="{!! asset('css/app.css') !!}" />
    <link href="{!! asset('css/plugins/dataTables/datatables.min.css') !!}" rel="stylesheet">
</head>
<body>

  <!-- Wrapper-->
    <div id="wrapper">

        <!-- Navigation -->
        @include('layouts.navigation')
        <!-- Page wraper -->
        <div id="page-wrapper" class="gray-bg"> 

            <!-- Page wrapper -->
            @include('layouts.topnavbar')

            <!-- Main view  -->
            @yield('content')

            <!-- Footer -->
            @include('layouts.footer')

        </div>
        <!-- End page wrapper-->

    </div>
    <!-- End wrapper-->
<script src="{!! asset('js/app.js') !!}" type="text/javascript"></script>
<script src="{!! asset('js/plugins/dataTables/datatables.min.js') !!}"></script>
<script src="{!! asset('members/js/func/members.js') !!}"></script>
<script src="{!! asset('members/js/func/users.js') !!}"></script>

@section('scripts')
@show

</body>
</html>
