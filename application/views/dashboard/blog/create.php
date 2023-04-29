    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">
          <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Tambah /</span> Blog</h4>

          <form action="<?=site_url('blog/add_process')?>" method ="POST" enctype="multipart/form-data" novalidate>
          <div class="row">

          <div class="col-xl-6">
            <div class="card mb-4">
              <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Form input data</h5>
                <small class="text-muted float-end">Rekam data blog</small>
              </div>
              <div class="card-body">
                  <div class="mb-3">
                    <label class="form-label" for="basic-icon-default-fullname">Judul</label>
                    <div class="input-group input-group-merge">
                      <span id="basic-icon-default-fullname2" class="input-group-text">
                        <i class='bx bx-bookmarks' ></i>
                      </span>
                      <input type="text" name="judul" class="form-control" id="basic-icon-default-fullname" placeholder="Masukkan Judul" aria-label="John Doe" aria-describedby="basic-icon-default-fullname2" required />
                    </div>
                  </div>
                  <div class="mb-3">
                    <label class="form-label" for="basic-icon-default-company">Tanggal</label>
                      <input class="form-control" name="tanggal" type="date" id="html5-date-input" required/>
                  </div>
                  <div class="mb-3">
                    <label class="form-label" for="basic-icon-default-phone">Background Blog</label>
                    <div class="input-group input-group-merge">
                      <input type="file" id="foto" name="background" class="dropify" required>
                    </div>
                  </div>
                </div>
            </div>
          </div>

          <div class="col-xl-6">
            <div class="card mb-4">
              <div class="card-body">
                <div class="mb-3">
                  <label class="form-label" for="basic-icon-default-email">Link Youtube</label>
                  <div class="input-group input-group-merge">
                    <span class="input-group-text">
                      <i class='bx bx-link'></i>
                    </span>
                    <input type="text" name="link_yt" id="basic-icon-default-email" class="form-control" placeholder="Masukkan Link Youtube" aria-label="john.doe" aria-describedby="basic-icon-default-email2" />
                  </div>
                </div>
                <div class="mb-3">
                  <label class="form-label" for="basic-icon-default-fullname">Keterangan Video</label>
                  <div class="input-group input-group-merge">
                    <span id="basic-icon-default-fullname2" class="input-group-text">
                      <i class='bx bx-message-rounded-dots' ></i>
                    </span>
                    <input type="text" name="etc" class="form-control" id="basic-icon-default-fullname" placeholder="Masukkan keterangan tambahan . . ." aria-label="John Doe" aria-describedby="basic-icon-default-fullname2" required/>
                  </div>
                </div>
                <div class="mb-3">
                  <?php
                    if(file_exists("/public/img/user/" . user_login()->foto)){
                      $fotoUrl = base_url("/public/img/user/" . user_login()->foto);
                    }else{
                      $fotoUrl = base_url("/public/img/user/" . user_login()->foto);
                    }
                  ?>
                    <label class="form-label" for="basic-icon-default-email">Detail Penulis</label>
                  <div class="row">
                    <div class="col-3">
                      <img src="<?=$fotoUrl?>" alt="user-avatar" class="d-block rounded img-fluid"  />
                    </div>
                    <div class="col-9">
                      <div class="input-group input-group-merge">
                        <span class="input-group-text">
                          <i class='bx bx-user'></i>
                        </span>
                        <input type="text" name="nama_penulis" value="<?= user_login()->nama_user ?>" class="form-control" />
                      </div></br>
                      <div class="input-group input-group-merge">
                        <span class="input-group-text">
                          <i class='bx bx-folder'></i>
                        </span>
                        <input type="text" name="foto_penulis" value="<?= user_login()->foto ?>" class="form-control" />
                      </div>
                    </div>
                  </div>
                </div>
                <label class="form-label" for="basic-icon-default-email">Pilih Product Terkait</label>
                  <div class="input-group">
                    <label class="input-group-text" for="inputGroupSelect01">Product</label>
                    <select class="form-select" name="id_product" id="inputGroupSelect01">
                      <?php
                        foreach ($product as $key => $row)
                        {
                          ?>
                          <option value="">Pilih Product</option>
                          <option value="<?php echo ucwords($row['id_product']); ?>">
                            <span>
                              <?php echo ucwords($row['nama']); ?>
                            </span>
                          </option>
                          <?php
                        }
                        ?>
                    </select>
                  </div>
                  <label class="mt-5" for="footer"><small>Lanjutkan Pengisian form di bawah ini...</small></label>
                </div>
              </div>
          </div>
          </div>
            <div class="card mb-4">
              <div class="card-header d-flex justify-content-between align-items-center" >
                <div class="mb-3" id="toolbar-container">
                  <label class="form-label" for="basic-icon-default-phone">Deskripsi</label>
                  <div class="col-12 input-group input-group-merge">
                    <textarea class="isi" type="text" name="isi" id="richtext" required ></textarea>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <div class="card mb-4">
                  <div class="card-header d-flex justify-content-between align-items-center">
                    <div class="mb-3">
                      <label class="form-label" for="basic-icon-default-phone">Keyword</label>
                      <div class="input-group input-group-merge">
                        <textarea class="meta_keyword" type="text" name="meta_keyword" id="richtext" required ></textarea>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card mb-4">
                  <div class="card-header d-flex justify-content-between align-items-center">
                    <div class="mb-3">
                      <label class="form-label" for="basic-icon-default-phone">Meta Deskripsi</label>
                      <div class="input-group input-group-merge">
                        <textarea class="meta_deskripsi" type="text" name="meta_deskripsi" id="richtext" required ></textarea>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <button type="submit" class="btn btn-primary">Send</button>
          </form>
        </div>
    </div>