        <!-- Registration Start -->
    <div class="container-fluid mb-3 py-5">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-7 mb-5 mb-lg-0">
            <p>
            <?php
                foreach ($subscriber as $key => $row)
                {
            ?>
              <h1 class="pr-2">Hai <?php echo $row['nama'] ?> . . .</h1>
            <?php
                break;
                }
            ?>
            <h1 class="mb-4">Selanjutnya kamu akan di layani sama  <?php echo $row['nama_cs']?> .</h1>
            </p>
            
            <p>
              Layanan konsultasi akan dibimbing oleh Profesional dibidangnya serta Psikiater Keluarga yang sudah berpengalaman dan bersertifikasi Pakar Kesehatan Keluarga
            </p>
            <ul class="list-inline m-0">
              <li class="py-2">
                <i class="fa fa-check text-success mr-3"></i>Gratis tidak dipungut biaya.
              </li>
              <li class="py-2">
                <i class="fa fa-check text-success mr-3"></i>Admin Ramah dan Humble.
              </li>
              <li class="py-2">
                <i class="fa fa-check text-success mr-3"></i>Bersertifikasi Internasional.
              </li>
            </ul>
            <a href="https://api.whatsapp.com/send?phone=<?php echo $row['wa']?>&text=Hallo <?php echo $row['nama_cs']?> . . . Saya <?php echo $row['nama']?>, Saya SUBSCRIBER baru AVERROS HERBAL . . ." class="btn btn-primary btn-blok px-5 mt-4 py-3">Chat <?php echo $row['nama_cs']?></a>
          </div>
          
          <div class="col-lg-5">
            <div class="card border-0">
              <div class="card-header bg-secondary text-center p-4">
                <h1 class="text-white m-0"><?php echo $row['nama_cs']?></h1>
              </div>
              <div class="card-body rounded-bottom bg-primary p-5">
                <form action="<?=site_url('subscriber/add_process')?>" method ="POST" enctype="multipart/form-data">
                  <div class="row">
                    <div class="col-md-12 col-lg-12 text-center team">
                      <div class="position-relative overflow-hidden mb-4" style="border-radius: 100%">
                        <img class="img-fluid w-100" src=<?php echo base_url('././public/assets/img/cs/' . $row['foto'])?> alt="" />
                        <div class="team-social d-flex align-items-center justify-content-center w-100 h-100 position-absolute">
                          <a class="btn btn-outline-light text-center mr-2 px-0" style="width: 38px; height: 38px" href="#"><i class="fab fa-twitter"></i></a>
                          <a class="btn btn-outline-light text-center mr-2 px-0" style="width: 38px; height: 38px" href="#"><i class="fab fa-facebook-f"></i></a>
                          <a class="btn btn-outline-light text-center px-0"style="width: 38px; height: 38px"href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Registration End -->
    <div class="container-fluid pt-5 mb-5">
      <div class="container">
        <div class="text-center pb-2">
          <p class="section-title px-5">
            <h1 class="px-2">Terimakasih</h1>
          </p>
        </div>
      </div>
    </div>