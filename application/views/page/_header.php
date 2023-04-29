<!doctype html>
<html lang="en">

<head>
  <title>Averros Herbal | <?php echo $title ?></title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="keywords" content="<?php echo $kw ?>">
  <meta name="description" content="<?php echo $desc ?>">
  <!-- Bootstrap CSS v5.2.1 -->
  <link href="<?=base_url('/node_modules/bootstrap/dist/css/bootstrap.css')?>" rel="stylesheet">
  <link href="<?=base_url('/node_modules/bootstrap/dist/css/bootstrap.min.css')?>" rel="stylesheet">
  <link href="<?=base_url('/node_modules/bootstrap/dist/css/bootstrap-reboot.css')?>" rel="stylesheet">
  <link rel="stylesheet" href="<?=base_url('/public/css/mystyle.css')?>">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="icon" href="<?=base_url('/public/assets/img/title.png')?>" class="img-fluid" type="image/x-icon"/>
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Jua&family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
  <!-- Font Awesome -->
  

</head>

<body>
  
    <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container">
          <a class="navbar-brand" href="<?=site_url('page/about')?>">
            <img src="<?=base_url('/public/assets/img/logo.png')?>" width="267" alt="logo">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item p-2">
                <a class="nav-link <?php if ($this->uri->segment('2') == 'about' || $this->uri->segment('2') == '') {echo 'active';} ?>" href="<?=site_url('Page/about')?>">About Us</a>
              </li>
              <li class="nav-item p-2">
                <a class="nav-link <?php if ($this->uri->segment('2') == 'product') {echo 'active';} ?>" href="<?=site_url('Page/product')?>">Product</a>
              </li>
              <li class="nav-item p-2">
                <a class="nav-link <?php if ($this->uri->segment('2') == 'contact') {echo 'active';} ?>" href="<?=site_url('Page/contact')?>">Contact</a>
              </li>
              <li class="nav-item p-2 dropdown">
                <a class="nav-link dropdown-toggle <?php if ($this->uri->segment('2') == 'karir') {echo 'active';} ?>" data-bs-toggle="dropdown"  role="button" aria-haspopup="true" aria-expanded="false">Career</a>
                
                <div class="dropdown-menu dropdown-menu-end pt-3 pb-5 px-5">
                  <div class="header_dropdown pb-2">
                    <h2 class="text-center">Career Menu</h2>
                  </div>
                  <a class="dropdown-item" <?php if ($this->uri->segment('2') == 'karir') {echo 'active';} ?> href="<?=site_url('Page/karir')?>">
                    <div class="row">
                      <div class="icon col-2">
                        <i class="fa-solid fa-briefcase fa-xl cust_icon"></i>
                      </div>
                      <div class="col-8">
                        <span class="text-start">Lowongan Pekerjaan</span>
                        <div class="text">
                          <small class="text-secondary">Menu lowongan pekerjaan</small>
                        </div>
                      </div>
                    </div>
                  </a>

                  <a class="dropdown-item pt-3" href="<?=site_url('Page/karir')?>">
                    <div class="row">
                      <div class="icon col-2">
                        <i class="fa-solid fa-graduation-cap fa-xl cust_icon"></i>
                      </div>
                      <div class="col-8">
                        <span class="text-start">Magang</span>
                        <div class="text">
                          <small class="text-secondary">Menu lowongan magang</small>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
              </li>
              <li class="nav-item p-2">
                <a class="nav-link <?php if ($this->uri->segment('2') == 'blog') {echo 'active';} ?>" href="<?=site_url('Page/blog')?>">Blog</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      
  </header>
  

  
 