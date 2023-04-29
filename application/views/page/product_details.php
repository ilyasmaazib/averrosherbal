
  <main>
    <div class="container-fluid mt-5">
      <div class="container">
        <div class="detail-product mb-5">
            <div class="row">
                <div class="col-lg-6">
                    <img src="<?php echo base_url('/public/assets/img/upload/' .$row['foto']) ?>" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6">
                    <div class="keterangan bg-light" style="height: 100%;">
                        <h2 class="head"> Details Product</h2>
                        <p class="text-right">Nama Product : <?php echo $row['nama']?></p>
                        <p>Kode : <?php echo $row['kode']?></p>
                        <span class="badge xl bg-warning"><h2>Harga :<?php echo $row['harga']?></h2></span>
                        <h2 class="border-bottom border-3 p-3">Manfaat Product</h2>
                        <ul class="list-unstyled text-ellipsis-5">
                            <li><?php echo $row['deskripsi']?></li>
                        </ul>
                        <div class="buy">
                            <div class="keyword">
                                <span class="badge bg-primary">Category!</span>
                                <span class="badge bg-secondary"><?php echo $row['category']?>!</span>
                                <span class="badge bg-danger">New!</span>
                                <span class="badge bg-warning">Diskon!</span>
                                <span class="badge bg-success">30%!</span>
                                <span class="badge bg-dark">supersale!</span>
                            </div>
                            <div class="beli py-3 mx-auto">
                                <a href="<?php echo $row['shopee']?>" style="background-color:#EE4D2D;"><i class="fa-solid fa-cart-shopping"></i> <strong>Shopee</strong></a>
                                <a href="<?php echo $row['lazada']?>" style="background-color:#000083"><i class="fa-solid fa-cart-shopping"></i> <strong>Lazada</strong></a>
                                <a href="<?php echo $row['tokopedia']?>" style="background-color:#42b549"><i class="fa-solid fa-cart-shopping"></i> <strong>Tokopedia</strong></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
        </div>
        <div class="container custom-cont">
          <div class="grid">
          <?php
            foreach ($product as $key => $row)
            {
            ?>
            <div class="item" data-aos="fade-up" data-aos-duration="800">
              <div class="card">
                <img src="<?=base_url("/public/img/upload/" . $row['foto'])?>" class="img-fluid" alt="">
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
  </main>
  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>