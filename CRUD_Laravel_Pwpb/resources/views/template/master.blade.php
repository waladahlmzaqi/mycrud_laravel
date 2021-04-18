<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <!-- General CSS Files -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{!!asset('summernote/summernote-bs4.css')!!}">

    <!-- Template CSS -->
    <link rel="stylesheet" href="{!!asset('css/style.css')!!}">
    <link rel="stylesheet" href="{!!asset('css/components.css')!!}">
    @stack('link')
    <title>@yield('title')</title>
</head>
<body>
    <div id="app">
        <div class="main-wrapper">
            <div class="navbar-bg"></div>
            <nav class="navbar navbar-expand-lg main-navbar">
                <form class="form-inline">
                  <ul class="navbar-nav me-3">
                    <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
                  </ul>
                </form>
                <div class="dropdown dropend">
                  <a style="text-decoration: none; font-size: 14px;" class=" fw-bold dropdown-toggle text-white" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
                    Hi, Walada Hulama.Z
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="dropdownMenu2" style="margin-left: 10px;">
                    <li><a class="dropdown-item" href="#"><i class="fas fa-user-circle me-3"></i>Profile</a></li>
                    <li><a class="dropdown-item" href="#"><i class="fas fa-cog me-3"></i>Setting</a></li>
                    <li><a class="dropdown-item" href="admin/logout.php"><i class="fas fa-sign-out-alt me-3"></i>Logout</a></li>
                  </ul>
                </div>
            </nav>
            <div class="main-sidebar">
                <aside id="sidebar-wrapper">
                  <div class="sidebar-brand">
                    <a href="index.html">Stisla <sup>Copy</sup></a>
                  </div>
                  <div class="sidebar-brand sidebar-brand-sm">
                    <a href="index.html">St</a>
                  </div>
                  <ul class="sidebar-menu">
                      <li class="menu-header">Dashboard</li>
                      <li class="nav-item dropdown @yield('dashboard')">
                        <a href="#" class="nav-link has-dropdown"><i class="fas fa-tachometer-alt"></i><span>Dashboard</span></a>
                        <ul class="dropdown-menu">
                          <li class="active"><a class="nav-link" href="dashboard.php">Dashboard</a></li>
                        </ul>
                      </li>
                  </ul>
                </aside>
            </div>

            <!-- Main Content -->
            <div class="main-content">
                <section class="section">
                  <div class="section-header">
                    <h1>@yield('judul')</h1>
                  </div>
                  <!--  -->
                  <div class="container">
                    @yield('content')
                  </div>
                  <!--  -->
                </section>
            </div>

            <footer class="main-footer">
                <div class="footer-left">
                Copyright &copy; 2021 <div class="bullet"></div> Design By <a href="https://github.com/waladahlmzaqi">Walada Hulama.Z</a>
                </div>
            </footer>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <!-- General JS Scripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="{!!asset('js/stisla.js')!!}"></script>

    <!-- Template JS File -->
    <script src="{!!asset('js/scripts.js')!!}"></script>
</body>
</html>
