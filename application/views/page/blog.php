<div class="blog" id="blog" data-aos="fade-up" data-aos-duration="800">
  <div class="container">
    <div class="company-head justify-content-center d-flex flex-column align-items-center" data-aos="fade-left" data-aos-duration="1200">
      <h3 class="display-3 font-weight-bold text-white">Blog Berisi Tips Menarik</h3>
      <div class="d-inline-flex text-white">
        <p class="m-0"><a class="text-white" href="">Home</a></p>
        <p class="m-0 px-2">/</p>
        <p class="m-0">Blog</p>
      </div>
    </div>
  </div>
</div>

<div class="container-fluid">
  <div class="container py-5">
    <div class="main-blog py-5">
      <div class="row align-items-center">
        <div class="col-lg-7">
          <h1 class="mb-4" data-aos="fade-left" data-aos-duration="1000">Tips menarik seputar Permasalahan <span>Seksualitas</span></h1>
          <p data-aos="fade-up" data-aos-duration="1200">
            Untuk anda yang sedang cari informasi mendalam tentang hubungan <span>Seksual</span>, Kami juga menyediakan ribuan <span>Informasi</span> dalam bentuk <span>Artikel</span> atau <span>Video Interaktif</span> yang menarik dan informatif karna di kutip langsung dari <span>Para Ahli Kedokteran</span>.
          </p>
          <a href="#product" data-aos="fade-up" data-aos-duration="1000">Kunjungi Blog</a>
        </div>
        <div class="col-lg-5">
          <img class="img-fluid rounded mb-5 mb-lg-0" src="<?=base_url('/public/assets/img/blog.png')?>" data-aos="fade-right" data-aos-duration="800" alt="">
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container custom-cont">
  <div class="grid" style="background-color: #000000;">
  <?php
    foreach ($blog as $key => $row)
    {
    ?>
    <div class="item">
      <div class="card">
        <img src="<?=base_url("/public/assets/img/blog/" . $row['background'])?>" class="img-fluid" alt="">
        <div class="img-tittle">
          <a href="<?php echo site_url('Page/details/'.$row['id_blog']); ?>">Lihat</a>
          <div class="body">
            <div class="badge bg-light"><span class="text-truncate"><?php echo ucwords($row['judul']); ?></span></div>
            <div class="badge bg-light"><span class="text-truncate"><?php echo ucwords($row['nama_penulis']); ?></span></div>
          </div>
        </div>
      </div>
    </div>
  <?php
    }
  ?>
  </div>
</div>

