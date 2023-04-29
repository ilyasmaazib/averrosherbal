<div class="hero_product py-5">
    <div class="container-fluid" style="overflow: hidden;">
      <div class="container">
        <!-- home -->
        <div class="row text-lg-end">
          <div class="opener col-10 col-lg-6 mx-auto">
              <h1 class="text-center text-lg-end">Puluhan product untuk memecahkan <span>masalah</span> anda</h1>
              <p class="text-center text-lg-end">Semua solusi untuk masalah anda, Kami disini</p>
              <div class="learn text-center text-lg-end">
                <a href="#about" class="button text-center">Lebih Lanjut</a>
              </div>
            </div>
            <div class="kanan col-lg-6 col-sm-12 mx-auto">
              <img src="<?=base_url('/public/assets/img/produk.png')?>"  class="img-fluid" alt="image">
            </div>
          </div>
        </div>
    </div>
  </div>
    <!-- Header End -->


    <div class="container-fluid">
      <div class="container text-center py-5">
        <div class="row">
          <div class="col-12">
            <div class="header py-5" data-aos="fade-left" data-aos-duration="800">
              <h1>Katalog Produk</h1>
              <p class="text-muted" data-aos="fade-right" data-aos-duration="1000">Produk herbal dari kami</p>
            </div>
          </div>
        </div>
        <!-- queri -->
        
        <div class="container custom-cont">
          <div class="grid">
          <?php
            foreach ($product as $key => $row)
            {
            ?>
            <div class="item" data-aos="fade-up" data-aos-duration="800">
              <div class="card">
                <img src="<?=base_url("/public/assets/img/upload/" . $row['foto'])?>" class="img-fluid" alt="">
                <div class="img-tittle">
                  <a href="<?php echo site_url('Page/detail_product/'.$row['id_product']); ?>">Lihat</a>
                  <div class="body">
                    <div class="badge bg-light"><span class="text-truncate"><?php echo ucwords($row['nama']); ?></span></div>
                    <div class="badge bg-light"><span class="text-truncate"><?php echo ucwords($row['harga']); ?></span></div>
                  </div>
                </div>
              </div>
            </div>
          <?php
            }
          ?>
          </div>
        </div>
      </div>
    </div>
    
  
  
                       
    
