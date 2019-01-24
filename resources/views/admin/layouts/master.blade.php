<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Quản lý Mobile**Store</title>
        <base href="{{asset('')}}">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <link rel="stylesheet" href="admin_asset/bower_components/bootstrap/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="admin_asset/bower_components/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="admin_asset/bower_components/Ionicons/css/ionicons.min.css">
        <link rel="stylesheet" href="admin_asset/bower_components/jvectormap/jquery-jvectormap.css">
        <link rel="stylesheet" href="admin_asset/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
        <link rel="stylesheet" href="admin_asset/dist/css/AdminLTE.min.css">
        <link rel="stylesheet" href="admin_asset/dist/css/skins/_all-skins.min.css">
    </head>
    <body class=" skin-blue sidebar-mini">
        <div class="wrapper">
            @include('admin.layouts.header')
            @include('admin.layouts.menu')
            @yield('content')
            @include('admin.layouts.footer')
        </div>
        @section('script')
        <script src="admin_asset/bower_components/jquery/dist/jquery.min.js"></script>
        <script src="admin_asset/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="admin_asset/bower_components/fastclick/lib/fastclick.js"></script>
        <script src="admin_asset/dist/js/adminlte.min.js"></script>
        <script src="admin_asset/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
        <script src="admin_asset/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
        <script src="admin_asset/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
        <script src="admin_asset/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
        <script src="admin_asset/bower_components/chart.js/Chart.js"></script>
        <script src="admin_asset/dist/js/pages/dashboard2.js"></script>
        <script src="admin_asset/dist/js/demo.js"></script>
        @show
    </body>
</html> 
