<!--
=========================================================
* Argon Dashboard - v1.2.0
=========================================================
* Product Page: https://www.creative-tim.com/product/argon-dashboard


* Copyright  Creative Tim (http://www.creative-tim.com)
* Coded by www.creative-tim.com



=========================================================
* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>Session login</title>
  <!-- Favicon -->
  <link rel="icon" href="../session-login-assets/img/brand/favicon.png" type="image/png">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="../session-login-assets/vendor/nucleo/css/nucleo.css" type="text/css">
  <link rel="stylesheet" href="../session-login-assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
  <!-- Argon CSS -->
  <link rel="stylesheet" href="../session-login-assets/css/argon.css?v=1.2.0" type="text/css">
</head>

<body>

    @include('session-login.navbar')
    <div class="main-content" id="panel">
        @yield('main-content')
    </div>
  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="../session-login-assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="../session-login-assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../session-login-assets/vendor/js-cookie/js.cookie.js"></script>
  <script src="../session-login-assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
  <script src="../session-login-assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
  <!-- Argon JS -->
  <script src="../session-login-assets/js/argon.js?v=1.2.0"></script>
</body>

</html>