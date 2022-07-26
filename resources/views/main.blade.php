<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title')</title>
    
    <link rel="icon" href="{{asset ('img/brand/pd.png')}}" type="image/png">
    
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://unpkg.com/bootstrap-table@1.18.3/dist/bootstrap-table.min.css">
  <link href="https://unpkg.com/bootstrap-table@1.18.3/dist/bootstrap-table.min.css" rel="stylesheet">
  
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  <!-- Nucleo Icons -->
  <link href="{{asset ('css/nucleo-icons.css')}}" rel="stylesheet" />
  <link href="{{asset ('css/nucleo-svg.css')}}" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <link href="{{asset ('css/font-awesome.css')}}" rel="stylesheet" />
  <link href="{{asset ('css/nucleo-svg.css')}}" rel="stylesheet" />
  <!-- CSS Files -->
  <link href="{{asset ('css/argon-design-system.css?v=1.2.2')}}" rel="stylesheet" />
  <link href="{{asset ('css/style.css')}}" rel="stylesheet" />
  @yield('style')
</head>
<body>
@yield('nav')
<!-- Header -->
<nav class="navbar navbar-main navbar-expand-lg bg-primary navbar-dark top-0 shadow py-3">
    <div class="container">
    <a class="navbar-brand mr-lg-3" href="{{url('/home')}}">
        <img src="{{asset ('img/brand/pd.png')}}"><span class="ml-3" style="opacity:85%;">Plagiat Detektor</span>
      </a>
    </div>
</nav>

<!-- Content -->
@yield('content')
<!--   Core JS Files   -->
<script src="{{asset ('js/core/jquery.min.js')}}" type="text/javascript"></script>
<script src="{{asset ('js/script.js')}}" type="text/javascript"></script>
<script src="https://unpkg.com/vue@2.5.17/dist/vue.min.js"></script>
<script src="{{asset ('js/core/popper.min.js')}}" type="text/javascript"></script>
<script src="{{asset ('js/core/bootstrap.min.js')}}" type="text/javascript"></script>
<script src="{{asset ('js/plugins/perfect-scrollbar.jquery.min.js')}}"></script>
<script src="sweetalert2.all.min.js"></script>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://unpkg.com/bootstrap-table@1.18.3/dist/bootstrap-table.min.js"></script>
<script src="https://unpkg.com/bootstrap-table@1.18.3/dist/bootstrap-table.min.js"></script>
<script src="https://unpkg.com/bootstrap-table@1.18.3/dist/extensions/auto-refresh/bootstrap-table-auto-refresh.min.js"></script>
  <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
  <script src="{{asset ('js/plugins/bootstrap-switch.js')}}"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="{{asset ('js/plugins/nouislider.min.js')}}" type="text/javascript"></script>
  <script src="{{asset ('js/plugins/moment.min.js')}}"></script>
  <script src="{{asset ('js/plugins/datetimepicker.js')}}" type="text/javascript"></script>
  <script src="{{asset ('js/plugins/bootstrap-datepicker.min.js')}}"></script>
  <!-- Control Center for Argon UI Kit: parallax effects, scripts for the example pages etc -->
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <script src="{{asset ('js/argon-design-system.min.js')}}?v=1.2.2" type="text/javascript"></script>
  <script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>
  <script>
    window.TrackJS &&
      TrackJS.install({
        token: "ee6fab19c5a04ac1a32a645abde4613a",
        application: "argon-design-system-pro"
      });
      
      $('textarea').maxlength({
  alwaysShow: true,
});
       
  </script>
</body>
</html>