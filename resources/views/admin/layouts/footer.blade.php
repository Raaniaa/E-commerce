<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ url('/design/adminlte')}}/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->

  
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ url('/design/adminlte')}}/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
	<body>
	<script src="{{ url('/design/adminlte')}}/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="{{ url('/design/adminlte')}}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<script src="{{ url('/design/adminlte')}}/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="{{ url('/design/adminlte')}}/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="{{ url('/design/adminlte')}}/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="{{ url('/design/adminlte')}}/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
		<script src="{{ url('/design/adminlte')}}/plugins/datatables-responsive/js/dataTables.buttons.min.js"></script>
		<script src="{{ url('')}}/vendor\datatables\buttons.server-side.js"></script>
<!-- AdminLTE App -->
<script src="{{ url('/design/adminlte')}}/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ url('/design/adminlte')}}/dist/js/demo.js"></script>
	<script src="{{url('/design/adminlte/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
		<script src="{{url('/design/adminlte/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{url('/design/adminlte/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
		<script src="{{url('/design/adminlte/dist/js/adminlte.js')}}"></script>
	
<!-- AdminLTE for demo purposes -->
<script src="{{url('/design/adminlte/dist/js/demo.js')}}"></script>
		
		
		<!-- jQuery -->

<!-- overlayScrollbars -->
<!-- Bootstrap -->
<!-- overlayScrollbars -->
<script src="{{url('design/adminlte')}}/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="{{url('design/adminlte')}}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="{{url('design/adminlte')}}/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>

<!-- overlayScrollbars -->
<script src="{{url('design/adminlte')}}/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="{{url('design/adminlte')}}/dist/js/adminlte.js"></script>

<!-- OPTIONAL SCRIPTS -->

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="{{url('design/adminlte')}}/plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="{{url('design/adminlte')}}/plugins/raphael/raphael.min.js"></script>
<script src="{{url('design/adminlte')}}/plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="{{url('design/adminlte')}}/plugins/jquery-mapael/maps/usa_states.min.js"></script>
<!-- ChartJS -->
<script src="{{url('design/adminlte')}}/plugins/chart.js/Chart.min.js"></script>

<script src="{{ url('design/adminlte/jstree/jstree.js') }}"></script>
<script src="{{ url('design/adminlte/jstree/jstree.wholerow.js') }}"></script>
<script src="{{ url('design/adminlte/jstree/jstree.checkbox.js') }}"></script>
		
<!-- OPTIONAL SCRIPTS -->

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<!-- ChartJS -->

@stack('js')
	@stack('css')
	</body></html>