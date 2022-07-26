
<!--
=========================================================
* Material Dashboard 2 - v3.0.0
=========================================================

* Product Page: https://www.creative-tim.com/product/material-dashboard
* Copyright 2021 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="{{asset ('img/apple-icon.png')}}">
  <link rel="icon" type="image/png" href="{{asset ('img/brand/pd.png')}}">
  <title>
    Dashboard
  </title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="{{asset ('css/nucleo-icons.css')}}" rel="stylesheet" />
  <link href="{{asset ('css/nucleo-svg.css')}}" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="{{asset ('css/material-dashboard.css?v=3.0.0')}}" rel="stylesheet" />
</head>

<body class="g-sidenav-show  bg-gray-200">
  <aside class="sidenav navbar collapse navbar-collapse navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-primary" id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0 text-center" href=" {{url('/dashboard')}} " target="_blank">
        <img src="{{asset ('img/brand/pd.png')}}" class="navbar-brand-img h-100" alt="main_logo">
      </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto  max-height-vh-100" id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link text-white active bg-success opacity-9" href="../pages/tables.html">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">table_view</i>
            </div>
            <span class="nav-link-text ms-1">Tables</span>
          </a>
        </li>
        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Akses akun</h6>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="{{ route('logout') }}" onclick="event.preventDefault();
              document.getElementById('logout-form').submit();">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">logout</i>
            </div>
            <span class="nav-link-text ms-1">Logout</span>
          </a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
              </form>
        </li>
      </ul>
    </div>
  </aside>
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <h6 class="font-weight-bolder mb-0"></h6>
        </nav>
          <ul class="navbar-nav  justify-content-end">
            <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
              <a type="button" class="navbar-toggler btn"  data-toggle="modal" data-target="#sidenav-main" id="iconNavbarSidenav" style="margin-bottom : -20px ;">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </a>
            </li>
                  </a>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-primary shadow-dark border-radius-lg pt-4 pb-3">
                <h3 class="text-white text-capitalize text-center">Data References</h3>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-10">Nama</th>
                      <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-10 ps-2">Judul</th>
                      <th class="text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-10">Tahun</th>
                      <th class="text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-10">Jenis</th>
                      <th class="text-secondary opacity-10"></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                    @foreach ($data as $item)
                      <td>
                        <div class="d-flex px-3 py-1">
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">{{$item['author']}}</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">{{$item['title']}}</p>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <p class="text-xs font-weight-bold mb-0">{{$item['years']}}</p>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">{{$item['type']}}</span>
                      </td>
                      <td class="align-middle">
                          <form action="{{ route('dashboard.destroy', $item->id) }}" method="post">
                            <!-- <a class="btn btn-md btn-icon-only text-primary mt-3" href="#" role="button"type="submit">
                              <span class="btn-inner--icon"><i class="fas fa-trash-alt"></i></span>
                            </a> -->
                            <button class="btn btn-danger" type="submit">Hapus</button>
                            @csrf
                            @method('DELETE')
                        </td>
                      </form>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <nav aria-label="Page navigation example">
  <ul class="pagination px-4">
    <li class="page-item">
      <a class="page-link" href="javascript:;" aria-label="Previous">
        <span class="material-icons">
          keyboard_arrow_left
        </span>
        <span class="sr-only">Previous</span>
      </a>
    </li>
    <li class="page-item"><a class="page-link" href="javascript:;">1</a></li>
    <li class="page-item"><a class="page-link" href="javascript:;">2</a></li>
    <li class="page-item"><a class="page-link" href="javascript:;">3</a></li>
    <li class="page-item">
      <a class="page-link" href="javascript:;" aria-label="Next">
        <span class="material-icons">
          keyboard_arrow_right
        </span>
        <span class="sr-only">Next</span>
      </a>
    </li>
  </ul>
</nav>
      </div>
    </div>
  </main>
  <div class="fixed-plugin">
    <a class="fixed-plugin-button text-dark position-fixed px-3 py-2" data-bs-toggle="modal" data-bs-target="#exampleModal">
      <i class="material-icons py-2">file_upload</i>
    </a>
  </div>
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title font-weight-normal" id="exampleModalLabel">Unggah Data</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"></span>
        </button>
      </div>
      <form action="{{ route('dashboard.store') }}" method="post" enctype="multipart/form-data">
      <div class="modal-body">
      <div class="input-group input-group-outline my-3 mx-1">
      <label class="form-label" for="nama">Nama</label>
      <input type="text" class="form-control" id="author" name="author">
    </div>
    <div class="input-group input-group-outline my-3 mx-1">
      <label class="form-label" for="judul">Judul</label>
      <input type="text" class="form-control" id="title" name="title">
    </div>
    <div class="input-group input-group-outline my-3">
    <label for="upload_1"></label>
      <input class="form-control form-control-lg" id="upload_1" type="file" name="upload_1">
  </div>
    <div class="input-group input-group-outline my-3 mx-2">
      <label class="form-label" for="tahun">Tahun</label>
      <input type="number" min="2000" max="2099" step="1" class="form-control" id="years" name="years">
    </div>
  </div>
  <div class="modal-footer">
    <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Keluar</button>
    <button type="submit" name="simpan" id="simpan" class="btn bg-primary"><span style="color:white;">Simpan</span></button>
    {{ csrf_field() }}
  </div>
</div>
</form>
</div>
</div>
  <!--   Core JS Files   -->
  <script src="{{asset ('js/core/popper.min.js')}}"></script>
  <script src="{{asset ('js/core/bootstrap.min.js')}}"></script>
  <script src="{{asset ('js/plugins/perfect-scrollbar.min.js')}}"></script>
  <script src="{{asset ('js/plugins/smooth-scrollbar.min.js')}}"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="{{asset('js/material-dashboard.min.js?v=3.0.0')}}"></script>
</body>

</html>