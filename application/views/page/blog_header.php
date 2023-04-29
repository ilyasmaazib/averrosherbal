<!doctype html>
<html lang="en">

<head>
  <title>Averros | Blog</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- logo -->
  <link rel="shortcut icon" href="<?=base_url('/public/assets/img/logo.png')?>" type="image/x-icon">

  <!-- Bootstrap CSS v5.2.1 -->
  <link rel="shortcut icon" href="<?=base_url('/public/img/logo.png')?>" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/fontawesome.min.css" integrity="sha512-RvQxwf+3zJuNwl4e0sZjQeX7kUa3o82bDETpgVCH2RiwYSZVDdFJ7N/woNigN/ldyOOoKw8584jM4plQdt8bhA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.css" integrity="sha512-HHsOC+h3najWR7OKiGZtfhFIEzg5VRIPde0kB0bG2QRidTQqf+sbfcxCTB16AcFB93xMjnBIKE29/MjdzXE+qw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/svg-with-js.min.css" integrity="sha512-T+W8aCLi/CrpBhX5eX42Kw0/oGb/cxhQHYsQDIXx7UgK8c0A4CWw+TOQIqNJms1AZHI+6eKE4U1GubeLrguNww==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- mystyle -->
    <link rel="stylesheet" href="<?=base_url('/public/css/details_blog.css')?>">

</head>

<body>

  <header>
    <!-- place navbar here -->
    <div class="container my-3">
        <nav class="navbar navbar-expand-lg index-nav">
          <div class="container-fluid">
            <a class="navbar-brand" href="#">
              <img src="<?=base_url('/public/assets/img/logo.png')?>" alt="logo">
              <span>AverrosBlog</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-bottom custom-canvas" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
              <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasNavbarLabel">
                  <img src="/assets/img/close.png" alt="">
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
              </div>
              <div class="offcanvas-body justify-content-end">
              <ul class="navbar-nav" id="offcanvasNavbar">
                <li class="nav-item">
                  <a class="nav-link" aria-current="page" href="<?=site_url('Page') ?>">HOME</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">ABOUT</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">PRODUCT</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">CONTACT</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" href="#">BLOG</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
    </header>