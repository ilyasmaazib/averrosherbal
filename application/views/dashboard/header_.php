<?php
if(!$this->session->has_userdata('id_user')){
  redirect('auth/login');
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
  <meta Http-Equiv="Cache-Control" Content="no-cache">
  <meta Http-Equiv="Pragma" Content="no-cache">
  <meta Http-Equiv="Expires" Content="0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title><?php echo $page_title ?></title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="<?=base_url('public/assets/img/title.png')?>" />

    <!-- Fonts -->
    <link rel="preconnect" href="<?=base_url('https://fonts.googleapis.com')?>" />
    <link rel="preconnect" href="<?=base_url('https://fonts.gstatic.com')?>" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet" />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="<?=base_url('/public/dashboard/assets/vendor/fonts/boxicons.css')?>" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="<?=base_url()?>public/dashboard/assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="<?=base_url('public/dashboard/assets/vendor/css/theme-default.css')?>" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="<?=base_url('public/dashboard/assets/css/demo.css')?>" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="<?=base_url()?>./public/dashboard/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <link rel="stylesheet" href="<?=base_url()?>public/dashboard/assets/vendor/libs/apex-charts/apex-charts.css" />

    <!-- select -->
    <link href="<?=base_url()?>public/select/css/multi-select.css" media="screen" rel="stylesheet" type="text/css">

    <!-- summernote -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    
    <!-- dropify -->
    <link rel="stylesheet" href="<?=base_url()?>public/dropify/dist/fonts/.">
    <link rel="stylesheet" href="<?=base_url()?>public/dropify/dist/css/dropify.css">
    <link rel="stylesheet" href="<?=base_url()?>public/dropify/dist/css/dropify.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    
    <!-- select -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" /> -->
    
    <!-- tabel -->
    

    <!-- Helpers -->
    <script src="<?=base_url('public/dashboard/assets/vendor/js/helpers.js')?>"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="<?=base_url('public/dashboard/assets/js/config.js')?>"></script>

  </head>
  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->

        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
            <div class="app-brand demo">
              <a href="<?=site_url('dashboard')?>" class="app-brand-link">
                  <img src="<?=base_url('/public/assets/img/logo.png')?>"  class="img-fluid" alt="logo">
              </a>

              <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
                <i class="bx bx-chevron-left bx-sm align-middle"></i>
              </a>
            </div>

            <div class="menu-inner-shadow"></div>

            <ul class="menu-inner py-1">
              <!-- Dashboard -->
              <li class="menu-item <?php if($this->uri->segment(1)=='dashboard'){echo 'active';}?>">
                <a href="<?=site_url('dashboard')?>" class="menu-link">
                  <i class="menu-icon tf-icons bx bx-home-circle"></i>
                  <div data-i18n="Analytics">Dashboard</div>
                </a>
              </li>


              <!-- product -->
              <li class="menu-header small text-uppercase">
                <span class="menu-header-text">Product</span>
              </li>
              <li class="menu-item <?php if($this->uri->segment(1)=='catalog'){echo 'active open';}?>">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                  <i class="menu-icon tf-icons bx bx-store-alt"></i>
                  <div data-i18n="Account Settings">Katalog Product</div>
                </a>
                <ul class="menu-sub">
                  <li class="menu-item <?php if($page_title=='Admin | Product'){echo 'active';}?>">
                    <a href="<?=site_url('catalog')?>" class="menu-link ">
                      <div data-i18n="Account">Lihat Product</div>
                    </a>
                  </li>
                  <li class="menu-item <?php if($page_title=='Admin | Product - Tambah'){echo 'active';}?>">
                    <a href="<?=site_url('catalog/add')?>" class="menu-link">
                      <div data-i18n="Notifications">Tambah Product</div>
                    </a>
                  </li>
                </ul>
              </li>
              

              <!-- user -->
              <li class="menu-header small text-uppercase">
                <span class="menu-header-text">Users</span>
              </li>
              <li class="menu-item <?php if($page_title == 'User | Profile' || $page_title == 'User | Profile - Edit'){echo 'active open';}?>">
                <a href="<?=site_url()?>javascript:void(0);" class="menu-link menu-toggle">
                  <i class="menu-icon tf-icons bx bx-user"></i>
                  <div data-i18n="Account Settings">User Profile</div>
                </a>
                <ul class="menu-sub">
                  <li class="menu-item <?php if($page_title=='User | Profile'){echo 'active';}?>">
                    <a href="<?=site_url('user')?>" class="menu-link">
                      <div data-i18n="Account">Lihat Profil</div>
                    </a>
                  </li>
                  <li class="menu-item <?php if($page_title=='User | Profile - Edit'){echo 'active';}?>">
                    <a href="<?=site_url('user/update')?>" class="menu-link">
                      <div data-i18n="Notifications">Edit Profil</div>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="menu-item <?php if($page_title == 'User | Admin' || $page_title == 'User | Tambah | User' || $page_title == 'User | Edit Access'){echo 'active open';}?>">
                <a href="<?=site_url()?>javascript:void(0);" class="menu-link menu-toggle">
                  <i class="menu-icon tf-icons bx bx-key"></i>
                  <div data-i18n="Account Settings">User Access</div>
                </a>
                <ul class="menu-sub">
                  <li class="menu-item <?php if($page_title=='User | Admin'){echo 'active';}?>">
                    <a href="<?=site_url('user_access')?>" class="menu-link">
                      <div data-i18n="Account">Lihat User</div>
                    </a>
                  </li>
                  <li class="menu-item <?php if($page_title=='User | Tambah | User'){echo 'active';}?>">
                    <a href="<?=site_url('user_access/add')?>" class="menu-link">
                      <div data-i18n="Connections">Tambah User</div>
                    </a>
                  </li>
                  <li class="menu-item <?php if($page_title=='User | Edit Access'){echo 'active';}?>">
                    <a href="" class="menu-link">
                      <div data-i18n="Connections">Edit User</div>
                    </a>
                  </li>
                </ul>
              </li>




              <!-- Blog -->
              <li class="menu-header small text-uppercase">
                <span class="menu-header-text">Blog`</span>
              </li>
              <li class="menu-item <?php if($this->uri->segment(1)=='blog'){echo 'active open';}?>">
                <a href="<?=site_url()?>javascript:void(0);" class="menu-link menu-toggle">
                  <i class="menu-icon tf-icons bx bx-book"></i>
                  <div data-i18n="Account Settings">Blog</div>
                </a>
                <ul class="menu-sub">
                  <li class="menu-item <?php if($page_title=='Blog | Tabel' || $page_title=='Blog | Edit'){echo 'active';}?>">
                    <a href="<?=site_url('blog')?>" class="menu-link">
                      <div data-i18n="Account">Lihat Data Blog</div>
                    </a>
                  </li>
                  <li class="menu-item <?php if($page_title=='Blog | Tambah'){echo 'active';}?>">
                    <a href="<?=site_url('blog/add')?>" class="menu-link">
                      <div data-i18n="Connections">Tambah Blog</div>
                    </a>
                  </li>
                  <li class="menu-item <?php if($page_title=='Sitemap | Tambah' || $page_title=='Sitemap | Home' || $page_title=='Sitemap | Edit'){echo 'active';}?>">
                    <a href="<?=site_url('blog/sitemap_index')?>" class="menu-link">
                      <div data-i18n="Connections">Upload Sitemap</div>
                    </a>
                  </li>
                </ul>
              </li>
              <!--  -->
              <li class="menu-header small text-uppercase">
                <span class="menu-header-text">Customer Service</span>
              </li>
              <li class="menu-item <?php if($page_title=='Customer Service | Home'){echo 'active open';}?>">
                <a href="<?=site_url('laporan_cs')?>" class="menu-link">
                  <i class="menu-icon tf-icons bx bx-user-voice"></i>
                  <div data-i18n="Account Settings">Customer Service</div>
                </a>
              </li>
              <li class="menu-item <?php if($page_title=='Marketing | Home' || $page_title=='Laporan | Marketing' || $page_title== 'Laporan Penjualan Marketing | Tambah' || $page_title=='Laporan Penjualan Marketing | Edit' || $page_title=='Data | Marketing' || $page_title== 'Data Penjualan Marketing | Edit' || $page_title=='Marketing | Edit' || $page_title== 'Data Penjualan Marketing | Tambah' ){echo 'active open';}?>">
                <a href="<?=site_url()?>javascript:void(0);" class="menu-link menu-toggle">
                  <i class='menu-icon bx bxs-store'></i>
                  <div data-i18n="Account Settings">Marketing</div>
                </a>
                <ul class="menu-sub">
                  <li class="menu-item <?php if($page_title=='Marketing | Home' || $page_title=='Marketing | Edit'){echo 'active';}?>">
                    <a href="<?=site_url('laporan_cs/m_index')?>" class="menu-link">
                      <div data-i18n="Account">Lihat Data Marketing</div>
                    </a>
                  </li>
                  <li class="menu-item <?php if($page_title=='Laporan | Marketing' || $page_title=='Laporan Penjualan Marketing | Edit' || $page_title== 'Laporan Penjualan Marketing | Tambah'){echo 'active';}?>">
                    <a href="<?=site_url('laporan_cs/m_laporan_index')?>" class="menu-link">
                      <div data-i18n="Connections">Laporan Penjualan</div>
                    </a>
                  </li>
                  <li class="menu-item <?php if($page_title=='Data | Marketing' || $page_title== 'Data Penjualan Marketing | Edit' || $page_title== 'Data Penjualan Marketing | Tambah'){echo 'active';}?>">
                    <a href="<?=site_url('laporan_cs/m_data_index')?>" class="menu-link">
                      <div data-i18n="Connections">Data Penjualan</div>
                    </a>
                  </li>
                </ul>
              </li>

              <!-- reseller -->
              <li class="menu-item <?php if($page_title=='Reseller | Home' || $page_title=='Laporan | Reseller' || $page_title=='Laporan Penjualan Reseller | Edit' || $page_title=='Laporan Penjualan Reseller | Tambah' || $page_title=='Data | Reseller' || $page_title== 'Data Penjualan Reseller | Edit' || $page_title=='Reseller | Edit' || $page_title== 'Data Penjualan Reseller | Tambah'){echo 'active open';}?>">
                <a href="<?=site_url()?>javascript:void(0);" class="menu-link menu-toggle">
                  <i class='menu-icon bx bx-recycle'></i>
                  <div data-i18n="Account Settings">Reseller</div>
                </a>
                <ul class="menu-sub">
                  <li class="menu-item <?php if($page_title=='Reseller | Home' || $page_title=='Reseller | Edit'){echo 'active';}?>">
                    <a href="<?=site_url('laporan_cs/r_index')?>" class="menu-link">
                      <div data-i18n="Account">Lihat Data Reseller</div>
                    </a>
                  </li>
                  <li class="menu-item <?php if($page_title=='Laporan | Reseller' || $page_title=='Laporan Penjualan Reseller | Edit' || $page_title=='Laporan Penjualan Reseller | Tambah'){echo 'active';}?>">
                    <a href="<?=site_url('laporan_cs/r_laporan_index')?>" class="menu-link">
                      <div data-i18n="Connections">Laporan Penjualan</div>
                    </a>
                  </li>
                  <li class="menu-item <?php if($page_title=='Data | Reseller' || $page_title== 'Data Penjualan Reseller | Edit' || $page_title== 'Data Penjualan Reseller | Tambah'){echo 'active';}?>">
                    <a href="<?=site_url('error')?>" class="menu-link">
                      <div data-i18n="Connections">Data Penjualan</div>
                    </a>
                  </li>
                </ul>
              </li>


              <!-- ads -->
              <li class="menu-item <?php if($page_title=='Ads | Home' || $page_title=='Laporan | Ads' || $page_title=='Laporan Penjualan Ads | Edit' || $page_title=='Laporan Penjualan Ads | Tambah' || $page_title=='Data | Ads' || $page_title== 'Data Penjualan Ads | Edit' || $page_title=='Ads | Edit' || $page_title== 'Data Penjualan Ads | Tambah' ){echo 'active open';}?>">
                <a href="<?=site_url()?>javascript:void(0);" class="menu-link menu-toggle">
                  <i class='menu-icon bx bxl-google-plus-circle'></i>
                  <div data-i18n="Account Settings">Ads</div>
                </a>
                <ul class="menu-sub">
                  <li class="menu-item <?php if($page_title=='Ads | Home' || $page_title=='Ads | Edit'){echo 'active';}?>">
                    <a href="<?=site_url('laporan_cs/ads_index')?>" class="menu-link">
                      <div data-i18n="Account">Lihat Data Ads</div>
                    </a>
                  </li>
                  <li class="menu-item <?php if($page_title=='Laporan | Ads' || $page_title=='Laporan Penjualan Ads | Edit' || $page_title=='Laporan Penjualan Ads | Tambah'){echo 'active';}?>">
                    <a href="<?=site_url('laporan_cs/ads_laporan_index')?>" class="menu-link">
                      <div data-i18n="Connections">Laporan Penjualan</div>
                    </a>
                  </li>
                  <li class="menu-item <?php if($page_title=='Data | Ads' || $page_title== 'Data Penjualan Ads | Edit' || $page_title== 'Data Penjualan Ads | Tambah'){echo 'active';}?>">
                    <a href="<?=site_url('laporan_cs/ads_data_index')?>" class="menu-link">
                      <div data-i18n="Connections">Data Penjualan</div>
                    </a>
                  </li>
                </ul>
              </li>

              <!-- report -->
              <li class="menu-header small text-uppercase">
                <span class="menu-header-text">Report</span>
              </li>
              <li class="menu-item <?php if($page_title == 'Omset | Poin'){echo 'active open';}?>">
                <a href="<?=site_url('report')?>" class="menu-link">
                  <i class="menu-icon tf-icons bx bx-notepad"></i>
                  <div data-i18n="Account Settings">Poin dan Omset</div>
                </a>
              </li>

              <!-- Lowongan -->
              <li class="menu-header small text-uppercase">
                <span class="menu-header-text">Karir</span>
              </li>
              <li class="menu-item <?php if($page_title == 'Karir' || $page_title=='Loker' || $page_title=='Magang'){echo 'active open';}?>">
                <a href="<?=site_url()?>javascript:void(0);" class="menu-link menu-toggle">
                  <i class="menu-icon tf-icons bx bxs-briefcase"></i>
                  <div data-i18n="Account Settings">Karir</div>
                </a>
                <ul class="menu-sub">
                  <li class="menu-item <?php if($page_title=='Loker'){echo 'active';}?>">
                    <a href="<?=site_url('user_access')?>" class="menu-link">
                      <div data-i18n="Account">Lowongan Pekerjaan</div>
                    </a>
                  </li>
                  <li class="menu-item <?php if($page_title=='Magang'){echo 'active';}?>">
                    <a href="<?=site_url('user_access/add')?>" class="menu-link">
                      <div data-i18n="Connections">Magang</div>
                    </a>
                  </li>
                </ul>
              </li>
              

              <li class="menu-header small text-uppercase">
                <span class="menu-header-text">Logout</span>
              </li>
              <li class="menu-item ">
                <a href="<?=site_url('auth/logout')?>" class="menu-link">
                  <i class="menu-icon bx bx-power-off"></i>
                  <div data-i18n="Analytics">Log Out</div>
                </a>
              </li>
        </aside>
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page" style="background-color: #f5f5f9;">
          <!-- Navbar -->

          <nav
            class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
            id="layout-navbar"
          >
            <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
              <a class="nav-item nav-link px-0 me-xl-4" href="<?=site_url()?>javascript:void(0)">
                <i class="bx bx-menu bx-sm"></i>
              </a>
            </div>

            <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
              <!-- Search -->
              <div class="navbar-nav align-items-center">
                <div class="nav-item d-flex align-items-center">
                  <i class="bx bx-search fs-4 lh-0"></i>
                  <input
                    type="text"
                    class="form-control border-0 shadow-none"
                    placeholder="Search..."
                    aria-label="Search..."
                    id="search"
                  />
                </div>
              </div>
              <!-- /Search -->

              <ul class="navbar-nav flex-row align-items-center ms-auto">
                <!-- Place this tag where you want the button to render. -->
                <li class="nav-item lh-1 me-3">
                  <a
                  class="github-button"
                  href="<?=site_url()?>https://github.com/themeselection/sneat-html-admin-template-free"
                  data-icon="octicon-star"
                  data-size="large"
                  data-show-count="true"
                  aria-label="Star themeselection/sneat-html-admin-template-free on GitHub" disabled><?= user_role()->jabatan ?></a>
                </li>

                <!-- User -->
                <li class="nav-item navbar-dropdown dropdown-user dropdown">
                  <a class="nav-link dropdown-toggle hide-arrow" href="<?=site_url()?>javascript:void(0);" data-bs-toggle="dropdown">
                    <div class="avatar avatar-online">
                      <img src="<?=base_url("/public/img/user/" . user_login()->foto)?>" height="100%" alt class="img-fluid rounded-circle" />
                    </div>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                      <a class="dropdown-item" href="<?=site_url()?>#">
                        <div class="d-flex">
                          <div class="flex-shrink-0 me-3">
                            <div class="avatar avatar-online">
                              <img src="<?=base_url("/public/img/user/" . user_login()->foto)?>" alt class="w-px-40 rounded-circle" />
                            </div>
                          </div>
                          <div class="flex-grow-1">
                            <span class="fw-semibold d-block"><?= user_login()->nama_user ?></span>
                            <small class="text-muted">USER ID : <?= user_login()->id_user ?></small>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="<?=site_url('user')?>">
                        <i class="bx bx-user me-2"></i>
                        <span class="align-middle">My Profile</span>
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="<?=site_url('user/update')?>">
                        <i class="bx bx-cog me-2"></i>
                        <span class="align-middle">Settings</span>
                      </a>
                    </li>
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="<?=site_url('auth/logout')?>">
                        <i class="bx bx-power-off me-2"></i>
                        <span class="align-middle">Log Out</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <!--/ User -->
              </ul>
            </div>
          </nav>