<!DOCTYPE html>

<!-- =========================================================
* Sneat - Bootstrap 5 HTML Admin Template - Pro | v1.0.0
==============================================================

* Product Page: https://themeselection.com/products/sneat-bootstrap-html-admin-template/
* Created by: ThemeSelection
* License: You must have a valid license purchased in order to legally use the theme for your project.
* Copyright ThemeSelection (https://themeselection.com)

=========================================================
 -->
<!-- beautify ignore:start -->
<html
  lang="en"
  class="light-style customizer-hide"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../assets/"
  data-template="vertical-menu-template-free"
>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>Login Admin | Averros Herbal</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="<?=base_url('/public/img/logo.png')?>" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet" />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="<?=base_url('/public/dashboard/assets/vendor/fonts/boxicons.css')?>" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="<?=base_url()?>/public/dashboard/assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="<?=base_url()?>/public/dashboard/assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="<?=base_url()?>/public/dashboard/assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="<?=base_url()?>/public/dashboard/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <!-- Page CSS -->
    <!-- Page -->
    <link rel="stylesheet" href="<?=base_url()?>/public/dashboard/assets/vendor/css/pages/page-auth.css" />
    <!-- Helpers -->
    <script src="<?=base_url()?>/public/dashboard/assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="<?=base_url()?>/public/dashboard/assets/js/config.js"></script>
  </head>

  <body>
    <!-- Content -->

    <div class="container-xxl">
      <div class="authentication-wrapper authentication-basic container-p-y">
        <div class="authentication-inner">
          <!-- Register -->
          <div class="card">
            <div class="card-body">
              <!-- Logo -->
              <div class="app-brand justify-content-center" style="font-size: 30px;">
                <a href="<?=site_url('auth')?>" class="app-brand-link gap-0"><b>Login</b>
                  <span class="app-brand-text demo text-body fw-bolder"><a href="<?=site_url('auth')?>">Admin</a></span>
                </a>
              </div>
              <!-- /Logo -->
              <h4 class="mb-2">Welcome to Dashboard 👋</h4>
              <p class="mb-4">Silahkan masukkan data diri lalu mulai akses penuh sebgai admin.</p>

              <form id="formAuthentication" class="mb-3" action="<?=base_url('auth/proses')?>" method="POST">
                <div class="mb-3">
                  <label for="email" class="form-label">Username</label>
                  <input type="text" class="form-control" name="username" id="username" placeholder="Enter your email or username" autofocus required/>
                </div>
                <div class="mb-3 form-password-toggle">
                  <div class="d-flex justify-content-between">
                    <label class="form-label" for="password">Password</label>
                    <a href="https://api.whatsapp.com/send?phone=085972597122&text=Reset Password Mas Ilyas . . .">
                      <small>Forgot Password?</small>
                    </a>
                  </div>
                  <div class="input-group input-group-merge">
                    <input type="password" id="password" class="form-control" name="password" required placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="password"/>
                    <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                  </div>
                </div>
                <div class="mb-3">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="remember-me" />
                    <label class="form-check-label" for="remember-me"> Remember Me </label>
                  </div>
                </div>
                <div class="mb-3">
                  <button class="btn btn-primary d-grid w-100" type="submit">Sign in</button>
                </div>
              </form>

              <p class="text-center">
                <span>New on our platform?</span>
                <a href="https://api.whatsapp.com/send?phone=085972597122&text=Buat akun baru Mas Ilyas . . .">
                  <span>Create an account</span>
                </a>
              </p>
            </div>
          </div>
          <!-- /Register -->
        </div>
      </div>
    </div>

    <!-- / Content -->

    <div class="buy-now">
      <a href="https://averrosherbal.com" target="_blank" class="btn btn-danger btn-buy-now" ><i class='bx bxs-home-heart bx-tada bx-flip-horizontal' ></i> Home</a>
    </div>

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="<?=base_url()?>/public/dashboard/assets/vendor/libs/jquery/jquery.js"></script>
    <script src="<?=base_url()?>/public/dashboard/assets/vendor/libs/popper/popper.js"></script>
    <script src="<?=base_url()?>/public/dashboard/assets/vendor/js/bootstrap.js"></script>
    <script src="<?=base_url()?>/public/dashboard/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="<?=base_url()?>/public/dashboard/assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->

    <!-- Main JS -->
    <script src="<?=base_url()?>/public/dashboard/assets/js/main.js"></script>

    <!-- Page JS -->

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>

    <!-- alert -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
      $(document).ready(function() {

        var success = "<?php echo $this->session->flashdata('success') ?>";
        // var s_success = "<?php echo $this->session->flashdata('s_success') ?>";
        var error = "<?php echo $this->session->flashdata('error') ?>";
        console.log(success);
        if (success) {
          Swal.fire({
            icon: 'success',
            title: 'Berhasil',
            text: success,
          })
        } else if (error) {
          Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Username atau Password Salah',
            footer: '<a href="">Contact Developer</a>'
              })
        }


        });
    </script>
  </body>
</html>

