<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SIRAJIN DPR RI Admin</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('assets/dist/css/adminlte.min.css') }}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition lockscreen">
  <!-- Automatic element centering -->
  <div class="lockscreen-wrapper">
    <div class="lockscreen-logo">
      <a href="#"><b>SIRAJIN DPR RI</b> </br> Admin</a>
    </div>

    <!-- START LOCK SCREEN ITEM -->
    <div class="lockscreen-item text-center">
      <h2>Selamat Datang di Website</h2>
    </div>
    <!-- /.lockscreen-item -->
    <div class="help-block text-center">
      Klik <a href="{{ url('login') }}">disini</a> untuk login admin
    </div>
    <!--<div class="text-center">-->
    <!--  <a href="{{ url('login') }}">Masuk</a>-->
    <!--</div>-->
    <div class="lockscreen-footer text-center">
      Copyright &copy; 2022 <b><a href="http://adminlte.io" class="text-black">AdminLTE.io</a></b><br>
      All rights reserved
    </div>
  </div>
  <!-- /.center -->

  <!-- jQuery -->
  <script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>
  <!-- Bootstrap 4 -->
  <script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>