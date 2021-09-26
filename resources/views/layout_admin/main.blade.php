<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Madani Indonesia</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/highcharts/6.0.6/highcharts.js" charset="utf-8"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js" charset="utf-8"></script>
  <link rel="stylesheet" href="{{ asset('assets/bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/jquery.dataTables.min.css') }}">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
  <link href="{{ asset('iziToast-master/dist/css/iziToast.css') }}" rel="stylesheet"><link href="{{ asset('iziToast-master/dist/css/iziToast.min.css') }}" rel="stylesheet">
    <script src="{{ asset('iziToast-master/dist/js/iziToast.js') }}"></script>
    <script src="{{ asset('iziToast-master/dist/js/iziToast.min.js') }}"></script>
  <link rel="stylesheet" href="{{ asset('assets/bower_components/font-awesome-4.7.0/css/font-awesome.min.css')}}">
  <link rel="stylesheet" href="{{ asset('sweetalert/sweetalert.css') }}" />
  <link rel="stylesheet" href="{{ asset('assets/bower_components/Ionicons/css/ionicons.min.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/dist/css/AdminLTE.min.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/dist/css/skins/skin-blue.min.css')}}">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  @yield('chart')
</head>

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
@include('layout_admin.header')

<div class="content-wrapper">
@yield('content')
</div>
@include('layout_admin.sidebar')




















<script src="{{ asset('assets/bower_components/jquery/dist/jquery.min.js')}}"></script>
<script src="{{ asset('assets/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap.min.js"></script>
<script src="{{ asset('assets/dist/js/adminlte.min.js')}}"></script>
<script src="{{ asset('js/sweetalert.min.js') }}"></script>
@yield('link')
<script src="{{ asset('js/modules-sweetalert.js') }}"></script>
<script type="text/javascript">
  $(document).ready(function() {
    $('#example').DataTable( {
        "pagingType": "full_numbers"
    } );
} );
</script>

<script type="text/javascript">
  $(document).ready(function() {
    $('#list').DataTable( {
        "pagingType": "full_numbers"
    } );
} );
</script>
</body>
</html>