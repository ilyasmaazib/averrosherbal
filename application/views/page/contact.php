<div class="contact" id="contact" data-aos="fade-up" data-aos-duration="800">
  <div class="container">
    <div class="company-head justify-content-center d-flex flex-column align-items-center" data-aos="fade-left" data-aos-duration="1200">
      <h3 class="display-3 font-weight-bold text-white">Konsultasi Gratis</h3>
      <div class="d-inline-flex text-white">
        <p class="m-0"><a class="text-white" href="">Home</a></p>
        <p class="m-0 px-2">/</p>
        <p class="m-0">Contact</p>
      </div>
    </div>
  </div>
</div>
    <!-- Header End -->

    <!-- main-contact -->
    <div class="container-fluid">
      <div class="container">
        <div class="main-contact py-5">
          <div class="row py-5 align-items-center">
            <div class="col-lg-5">
              <img class="img-fluid rounded mb-5 mb-lg-0" src="<?=base_url('/public/assets/img/konsultasi.png')?>" data-aos="fade-right" data-aos-duration="800" alt="">
            </div>
            <div class="col-lg-7">
              <h1 class="mb-4" data-aos="fade-left" data-aos-duration="1000"><span>Konsultasi</span> Gratis oleh Professional <span>Konsultan</span></h1>
              <p data-aos="fade-up" data-aos-duration="1200">
                Untuk mempermudah client dalam menyelesaikan masalah <span>Dewasa</span>, Kami juga menyediakan layanan <span>Konsultasi</span> Gratis yang akan dibimbing langsung oleh <span>Professional Konsultan</span> untuk membantu menyelasaikan keluhan anda dan merekomendasikan <span>Produk</span> yang tepat untuk permasalahan anda <span>FULL ONLINE 24 JAM</span>
              </p>
              <a type="button"  id="btn_contact" data-aos="fade-up" data-aos-duration="1000">Chat Sekaranag</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    

        <!-- Registration Start -->
    <div class="container-fluid py-5">
      <div class="container">
        <div class="contact-body">
          <div class="row align-items-center">
            <div class="col-lg-7 mb-5 mb-lg-0">
              <div class="header-contact" data-aos="fade-right" data-aos-duration="800">
                <h1 class="mb-4">Silahkan Isi <span>Data Diri</span> anda</h1>
                <p>Untuk mempermudah komunikasi dengan <span>Konsultan</span> kami silahkan lengkapi data diri anda, Kami berjanji tidak akan memberikan email spam ataupun chat yang <span>Mengganggu</span>, Kami jamin keamanan data diri anda semata hanya untuk mempermudah komunikasi dan kami jamin <span>Keamanannya.</span></p>
              </div>
            </div>
            
            <div class="col-lg-5">
              <div class="card contact-card" data-aos="fade-left" data-aos-duration="800">
                <div class="card-header text-center p-4">
                  <h1 class="text-white m-0">Layanan Konsultasi</h1>
                </div>
                <div class="card-body px-5 py-5">
                  <form action="<?=site_url('subscriber/add_process')?>" method ="POST" enctype="multipart/form-data">
                    <div class="form-group">
                      <input type="text" name="nama" id="nama" class="form-control" placeholder="Nama Lengkap" required/>
                    </div>
                    <div class="form-group">
                      <input type="email" name="email" id="email" class="form-control" placeholder="Contoh: dimas@example.com" required/>
                    </div>
                    <div class="form-group">
                      <select type="text" name="id_cs" id="id_cs" class="form-control " style="height: 47px">
                        <option>Pilih Konsultan</option>
                        <?php
                          foreach ($cs as $key => $row)
                          {
                        ?>
                        <option value="<?php echo $row['id_cs'];?>"><?php echo ucwords($row['nama_cs']);?></option>
                        <?php
                          }
                        ?>
                      </select>
                    </div>
                    <div>
                      <button class="btn btn-secondary btn-block py-3" type="submit">
                        Simpan Data
                      </button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Registration End -->

    
    <!-- Team Start -->
    <div class="container-fluid pt-5">
      <div class="container">
        <div class="konsultan">
          <div class="text-center pb-2">
            <div class="section-title px-5" data-aos="fade-down" data-aos-duration="800">
              <h3 class="px-2">Konsultan Kami</h3>
              <h1 class="mb-4">Bebaskan Masalahmu</h1>
            </div>
          </div>
          <div class="row" data-aos="fade-up" data-aos-duration="800">
          <?php
            foreach ($cs as $key => $row)
            { 
          ?>
            <div class="col-md-6 col-lg-3 text-center team mb-5">
              <div class="position-relative overflow-hidden mb-4" style="border-radius: 100%">
                <img class="img-fluid w-100" src=<?php echo base_url('././public/assets/img/cs/' . $row['foto'])?> alt="" />
                <div class="team-social d-flex align-items-center justify-content-center w-100 h-100 position-absolute">
                  <a class="btn btn-outline-light text-center mr-2 px-0" style="width: 38px; height: 38px" href="#"><i class="fab fa-twitter"></i></a>
                  <a class="btn btn-outline-light text-center mr-2 px-0" style="width: 38px; height: 38px" href="#"><i class="fab fa-facebook-f"></i></a>
                  <a class="btn btn-outline-light text-center px-0"style="width: 38px; height: 38px"href="#"><i class="fab fa-linkedin-in"></i></a>
                </div>
              </div>
              <div class="profil">
                <h4><?php echo $row['nama_cs']; ?></h4>
                <i><i class="fa-brands fa-whatsapp fa-xl"></i> <?php echo $row['wa'];?></i>
              </div>
            </div>
            <?php
            }
            ?>
          </div>
        </div>
      </div>
    </div>
    
    
    <!-- Testimonial End -->