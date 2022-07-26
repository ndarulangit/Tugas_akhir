<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Halaman Landing</title>
  <link rel="icon" href="{{asset ('img/brand/pd.png')}}" type="image/png">

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
</head>
<body>
<section class="section section-lg section-shaped" style="min-height:100vh">
    <div class="shape shape-style-3 shape-default">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
    </div>
    <div class="container">
      <div class="row justify-content-between align-items-center">
        <div class="col-lg-6 my-lg-auto">
          <div class="rounded overflow-hidden transform-perspective-left">
            <div id="carousel_example" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carousel_example" data-slide-to="0" class="active"></li>
                <li data-target="#carousel_example" data-slide-to="1"></li>
                <li data-target="#carousel_example" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner blur--hover">
                <div class="carousel-item blur-item active">
                  <img class="img-fluid " src="{{asset ('img/theme/1.jpg')}}" alt="First slide">
                </div>
                <div class="carousel-item blur-item">
                  <img class="img-fluid" src="{{asset ('img/theme/2.jpg')}}" alt="Second slide">
                </div>
                <div class="carousel-item blur-item">
                  <img class="img-fluid" src="{{asset ('img/theme/3.jpg')}}" alt="Third slide">
                </div>
                <span class="blur-hidden h3 text-center text-secondary">Mulailah lakukan pengujian terhadap dokumenmu.</span>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 mb-4 mb-lg-2">
          <h2 class="display-3 text-white">Plagiat Detektor</h2>
          <p class="lead mt-1 text-secondary text-justify">Plagiat Detektor merupakan aplikasi yang dapat membantu anda dalam melakukan pengecekan plagiarisme terhadap dokumen anda. Dengan tingkat akurasi yang cukup tinggi.</p>
          <a href="{{url('/home')}}" class="btn btn-secondary mt-2">Mulai</a>
        </div>
      </div>
    </div>
  </div>
  </section>

  <!--   Core JS Files   -->
  <script src="{{asset ('js/core/jquery.min.js')}}" type="text/javascript"></script>
  <script src="{{asset ('js/core/popper.min.js')}}" type="text/javascript"></script>
  <script src="{{asset ('js/core/bootstrap.min.js')}}" type="text/javascript"></script>
  <script src="{{asset ('js/plugins/perfect-scrollbar.jquery.min.js')}}"></script>
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
  </script>
</body>
</html>