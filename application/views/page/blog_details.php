
    <main>
        <div class="container">
            <div class="main-content bg-light">
                <div class="row">
                    <div class="col-12 col-lg-9">
                        <div class="blog border-bottom border-3">
                          <div class="tittle">
                            <h1><?php echo $row['judul']?></h1>
                            <medium class="text-muted">Created and Post in - <i><?php echo $row['tanggal']?></i> - by</medium>
                          </div>
                          <div class="row">
                              <div class="col-lg-1">
                                  <div class="writer">
                                      <img src="<?=base_url("/public/img/user/" . $row['foto_penulis'])?>" class="rounded-circle" alt="">
                                  </div>
                              </div>
                              <div class="col-lg-3">
                                  <div class="name">
                                      <span><?php echo $row['nama_penulis']?></span><br/>
                                      <span class="badge rounded-pill text-bg-primary">Web Developer</span>
                                  </div>
                              </div>
                              <div class="body pt-3">
                                  <img src="<?=base_url("/public/img/blog/" . $row['background'])?>" class="img-fluid rounded-top" alt="">
                                  <?php echo $row['isi']?>
                                  <iframe src="<?php echo $row['link_yt']?>" width="600px" height="400px" frameborder="0"></iframe>
                                  <p><?php echo $row['etc']?></p>
                              </div>
                          </div>
                        </div>
                        <div class="social justify-content-center">
                          <h3>Share this article  :</h3>
                            <!-- Facebook -->
                            <a class="btn btn-primary" style="background-color: #3b5998;" href="#!" role="button"><i class="fab fa-facebook-f"></i></a>

                            <!-- Twitter -->
                            <a class="btn btn-primary" style="background-color: #55acee;" href="#!" role="button"><i class="fab fa-twitter"></i></a>

                            <!-- Google -->
                            <a class="btn btn-primary" style="background-color: #dd4b39;" href="#!" role="button"><i class="fab fa-google"></i></a>

                            <!-- Instagram -->
                            <a class="btn btn-primary" style="background-color: #ac2bac;" href="#!" role="button"><i class="fab fa-instagram"></i></a>

                            <!-- Pinterest -->
                            <a class="btn btn-primary" style="background-color: #c61118;" href="#!" role="button"><i class="fab fa-pinterest"></i></a>

                            <!-- Github -->
                            <a class="btn btn-primary" style="background-color: #333333;" href="#!" role="button"><i class="fab fa-github"></i></a>

                            <!-- Whatsapp -->
                            <a class="btn btn-primary" style="background-color: #25d366;" href="#!" role="button"><i class="fab fa-whatsapp"></i></a>
                        </div>
                    </div>

                    <!-- side content -->
                    <div class="col-12 col-lg-3">
                        <div class="side-content">
                          <!-- ?categor?y -->
                          <div class="category">
                            <div class="head border-bottom border-3 success py-3">
                              <img src="<?=base_url('/public/assets/img/close.png')?>" alt="">
                              <button class="btn btn-success float-end position-relative" >
                                Category 
                                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-warning">
                                  5+
                                  <span class="visually-hidden">unread messages</span>
                                </span>
                              </button>
                            </div>
                          <div class="list-group custom-group" id="customCategory">
                          <?php
                          foreach ($category as $key => $a)
                          {
                            ?>
                            <a href="" class="list-group-item"><?php echo $a['nama_category']?></a>
                            <?php
                          }
                          ?>
                          </div>
                          </div>
                          <!-- product terkaita -->
                        <div class="product col-12 col-lg-12 py-5">
                          <div class="head border-bottom border-3 success py-3">
                            <img src="<?=base_url('/public/assets/img/close.png')?>" alt="">
                            <button class="btn btn-success float-end position-relative" >
                              Product terkait 
                              <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-warning">
                                5+
                                <span class="visually-hidden">unread messages</span>
                              </span>
                            </button>
                          </div>
                          <div class="product-item">
                              <div class="row" style="margin-bottom: 20px;">
                                <div class="item col-lg-12 center">
                                  <img src="<?=base_url("/public/img/upload/" . $row['foto'])?>" class="img-fluid" alt="">
                                </div>
                                <div class="name col-lg-12 text-center py-3">
                                    <span><?php echo($row['nama'])?></span><br/>
                                    <span class="badge rounded-pill text-bg-primary"><?php echo($row['harga'])?></span>
                                    <div class="beli py-3 mx-auto">
                                        <a href="<?= site_url('')?>"><i class="fa-solid fa-cart-shopping"></i> Beli di Sini</a>
                                    </div>
                                </div>
                              </div>
                          </div>
                        </div>
                        <!-- artikel terkait -->
                        <div class="recent col-12 col-lg-12" style="position: relative;">
                          <div class="head border-bottom border-3 success py-3">
                            <img src="<?=base_url('/public/assets/img/close.png')?>" alt="">
                            <button class="btn btn-success float-end position-relative" >
                              Artikel terkait 
                              <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-warning">
                                15+
                                <span class="visually-hidden">unread messages</span>
                              </span>
                            </button>
                          </div>
                          <!-- Hover added -->
                          <ul class="list-unstyled">
                          <?php
                            foreach ($last_blog as $key => $baris)
                            {
                            ?>
                              <li class="d-flex">
                                  <div class="flex-shrink-0">
                                      <img src="#" alt="" width="300">
                                  </div>
                                  <div class="flex-grow-1 ms-3 text-ellipsis-4">
                                      <h5 class="mt-3"><?php echo $baris['judul']?></h5>
                                      <p class="font-size: 20px; font-weight: 100;"><?php echo $baris['isi'] ?></p>
                                  </div>
                              </li>
                              <?php
                                    }
                                ?>
                          </ul>
                          
                          
                          
                          
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
  </main>