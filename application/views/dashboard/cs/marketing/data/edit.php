<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Tambah /</span> Data</h4>

    <div class="row">
      <div class="col-md-12">
        <div class="card mb-4">
          <!-- Account -->
          <form action="<?=site_url('laporan_cs/m_data_edit_process')?>" method ="POST" enctype="multipart/form-data">
          <input class="form-control" name="id_data" type="hidden" value="<?php echo $row['id_data']?>" required>
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
                                    <select class="form-select" name="id_sales" id="inputGroupSelect01">
                                    <?php
                                        foreach ($sales as $key => $a)
                                        {
                                        ?>
                                        <option <?php if($row['id_sales'] == $a['id_sales']){echo 'selected';}?> value="<?php echo ucwords($a['id_sales']); ?>">
                                            <span>
                                            <?php echo ucwords($a['nama_sales']); ?>
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
                                    <input type="date" name="tanggal" class="form-control" placeholder="ACME Inc." value="<?php echo $row['tanggal']?>" aria-label="ACME Inc."  />
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
                                        <?php
                                            foreach ($product as $key => $b)
                                            {
                                            ?>
                                            <option <?php if($row['id_product'] == $b['id_product']){echo 'selected';}?> value="<?php echo ucwords($b['id_product']); ?>">
                                                <span>
                                                    <?php echo ucwords($b['nama']); ?>
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
                                    <input type="text" name="poin_product" id="tfValue" value="<?php echo $row['poin_product']?>" class="form-control" placeholder="Masukkan poin dengan angka 1 atau 0.2" />
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
                                    <input type="text" name="jumlah_product" id="tfValue" value="<?php echo $row['jumlah_product']?>" class="form-control" placeholder="Jumlah Product" />
                                </div>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label class="col-sm-3 col-form-label" for="basic-icon-default-company">Poin Jadi</label>
                            <div class="col-sm-5">
                                <div class="input-group input-group-merge">
                                    <span id="basic-icon-default-company2" class="input-group-text"><i class='bx bx-trophy' ></i></span>
                                    <input type="hasil" name="poin" id="total_poin" value="<?php echo $row['poin']?>" class="form-control" placeholder="Poin Jadi" ></input>
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
