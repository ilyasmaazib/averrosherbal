<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Tambah /</span> Data</h4>

    <div class="row">
      <div class="col-md-12">
        <div class="card mb-4">
          <!-- Account -->
          <form action="<?=site_url('laporan_cs/ads_data_add_process')?>" method ="POST" enctype="multipart/form-data">
          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">

              <!-- Basic Layout & Basic with Icons -->
              <div class="row">
                <!-- Basic Layout --><div class="col-xxl">
                  <div class="card mb-3">
                    <div class="card-header d-flex align-items-center justify-content-between">
                    </div>
                    <div class="card-body">
                        <div class="row mb-4">
                            <label class="col-sm-3 col-form-label" for="basic-icon-default-fullname">Name</label>
                            <div class="col-sm-9">
                            <div class="input-group input-group-merge">
                                <span id="basic-icon-default-fullname2" class="input-group-text">
                                    <i class="bx bx-user"></i>
                                </span>
                                    <select class="form-select" name="id_ads" id="inputGroupSelect01">
                                    <option selected>Pilih Ads </option>
                                    <?php
                                        foreach ($ads as $key => $row)
                                        {
                                        ?>
                                        <option value="<?php echo ucwords($row['id_ads']); ?>">
                                            <span>
                                            <?php echo ucwords($row['nama_ads']); ?>
                                            </span>
                                        </option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                            </div>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label class="col-sm-3 col-form-label" for="basic-icon-default-company">Tanggal</label>
                            <div class="col-sm-9">
                                <div class="input-group input-group-merge">
                                    <span id="basic-icon-default-company2" class="input-group-text">
                                        <i class="bx bx-calendar"></i>
                                    </span>
                                    <input type="date" name="tanggal" class="form-control" placeholder="ACME Inc." aria-label="ACME Inc." aria-describedby="basic-icon-default-company2" />
                                </div>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label class="col-sm-3 col-form-label" for="basic-icon-default-fullname">Product</label>
                            <div class="col-sm-9">
                                <div class="input-group input-group-merge">
                                    <span id="basic-icon-default-fullname2" class="input-group-text">
                                        <i class="bx bx-shopping-bag"></i>
                                    </span>
                                        <select class="form-select" name="id_product" id="inputGroupSelect01">
                                        <option selected>Pilih Product</option>
                                        <?php
                                            foreach ($product as $key => $row)
                                            {
                                            ?>
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
                            </div>
                        </div>
                    </div>
                  </div>
                </div>
                <!-- Basic with Icons -->
                <div class="col-xxl">
                  <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                    </div>
                    <div class="card-body">
                    <div class="row mb-4">
                            <label class="col-sm-3 col-form-label" for="basic-icon-default-company">Poin</label>
                            <div class="col-sm-9">
                                <div class="input-group input-group-merge tf">
                                    <span id="basic-icon-default-company2" class="input-group-text">
                                        <i class='bx bx-coin-stack' ></i>
                                    </span>
                                    <input type="text" name="poin_product" id="tfValue" class="form-control" placeholder="Masukkan poin dengan angka 1 atau 0.2" />
                                </div>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label class="col-sm-3 col-form-label" for="basic-icon-default-company">Jumlah</label>
                            <div class="col-sm-9">
                                <div class="input-group input-group-merge tf">
                                    <span id="basic-icon-default-company2" class="input-group-text">
                                        <i class='bx bx-cart-add'></i>
                                    </span>
                                    <input type="text" name="jumlah_product" id="tfValue" class="form-control" placeholder="Jumlah Product" />
                                </div>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label class="col-sm-3 col-form-label" for="basic-icon-default-company">Poin Jadi</label>
                            <div class="col-sm-5">
                                <div class="input-group input-group-merge">
                                    <span id="basic-icon-default-company2" class="input-group-text"><i class='bx bx-trophy' ></i></span>
                                    <input type="hasil" name="poin" id="total_poin" class="form-control" placeholder="Poin Jadi" ></input>
                                </div>
                            </div>
                            <div class="col-sm-4">
                              <button type="button" id="setBtnID" class="jumlah_poin btn btn-primary">Cari Hasil</button>
                            </div>
                        </div>
                    </div>
                  </div>
                </div>
              </div>
                <div class="col-sm-9">
                  <button type="submit" class="btn btn-primary">Simpan Data</button>
                </div>
            </div>
          </div>
          </form>
        </div>
      </div>
    </div>
</div>
