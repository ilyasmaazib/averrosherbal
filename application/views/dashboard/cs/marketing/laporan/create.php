<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Tambah /</span> Data</h4>

    <div class="row">
      <div class="col-md-12">
        <div class="card mb-4">
          <!-- Account -->
          <form action="<?=site_url('laporan_cs/m_laporan_add_process')?>" method ="POST" enctype="multipart/form-data">
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
                                    <option value="" selected>Pilih Marketing Sales</option>
                                    <?php
                                        foreach ($sales as $key => $row)
                                        {
                                        ?>
                                        <option value="<?php echo ucwords($row['id_sales']); ?>">
                                            <span>
                                            <?php echo ucwords($row['nama_sales']); ?>
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
                            <label class="col-sm-3 col-form-label" for="basic-icon-default-company">Pembeli</label>
                            <div class="col-sm-9">
                                <div class="input-group input-group-merge">
                                    <span id="basic-icon-default-company2" class="input-group-text">
                                        <i class="bx bx-group"></i>
                                    </span>
                                    <input type="text" name="nama_pembeli" class="form-control" placeholder="Tulis Nama Pembeli" aria-label="Tulis Nama Pembeli" aria-describedby="basic-icon-default-company2" />
                                </div>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label class="col-sm-3 col-form-label" for="basic-icon-default-company">Alamat</label>
                            <div class="col-sm-9">
                                <div class="input-group input-group-merge">
                                    <span id="basic-icon-default-company2" class="input-group-text">
                                        <i class="bx bx-map"></i>
                                    </span>
                                    <input type="text" name="alamat_pembeli" class="form-control" placeholder="Tulis Alamat Pembeli" aria-label="Tulis Alamat Pembeli" aria-describedby="basic-icon-default-company2" />
                                </div>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label class="col-sm-3 col-form-label" for="basic-icon-default-phone">No Handphone</label>
                            <div class="col-sm-9">
                                <div class="input-group input-group-merge">
                                    <span id="basic-icon-default-phone2" class="input-group-text">
                                        <i class="bx bx-phone"></i>
                                    </span>
                                    <input type="text" name="hp" id="basic-icon-default-phone" class="form-control phone-mask" placeholder="+658 799 8941" aria-label="658 799 8941" aria-describedby="basic-icon-default-phone2" />
                                </div>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label class="col-sm-3 col-form-label" for="basic-icon-default-company">Marketplace</label>
                            <div class="col-sm-9">
                                <div class="input-group input-group-merge">
                                    <span id="basic-icon-default-company2" class="input-group-text">
                                        <i class="bx bx-store"></i>
                                    </span>
                                    <input type="text" name="market" id="result" class="form-control" placeholder="Pilih market di bawah ini . . ." />
                                </div>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label class="col-sm-3 col-form-label" for="basic-icon-default-company">Pilih Market</label>
                            <div class="col-sm-4">
                                <div class="form-check">
                                    <input name="default-radio-1 market_" class="form-check-input" type="radio" value="Lazada" id="defaultRadio2" onclick="myFunction(this.value)"/>
                                    <label class="form-check-label" for="defaultRadio2"> Lazada </label>
                                </div>
                                <div class="form-check">
                                    <input name="default-radio-1 market_" class="form-check-input" type="radio" value="Shopee" id="defaultRadio2" onclick="myFunction(this.value)"/>
                                    <label class="form-check-label" for="defaultRadio2"> Shopee </label>
                                </div>
                                <div class="form-check">
                                    <input name="default-radio-1 market_" class="form-check-input" type="radio" value="Tokopedia" id="defaultRadio2" onclick="myFunction(this.value)"/>
                                    <label class="form-check-label" for="defaultRadio2"> Tokopedia </label>
                                </div>
                                <div class="form-check">
                                    <input name="default-radio-1 market_" class="form-check-input" type="radio" value="Akulaku" id="defaultRadio2" onclick="myFunction(this.value)"/>
                                    <label class="form-check-label" for="defaultRadio2"> Akulaku </label>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-check">
                                    <input name="default-radio-1 market_" class="form-check-input" type="radio" value="Bukalapak" id="defaultRadio2" onclick="myFunction(this.value)"/>
                                    <label class="form-check-label" for="defaultRadio2"> Bukalapak </label>
                                </div>
                                <div class="form-check">
                                    <input name="default-radio-1 market_" class="form-check-input" type="radio" value="Blibli" id="defaultRadio2" onclick="myFunction(this.value)"/>
                                    <label class="form-check-label" for="defaultRadio2"> Blibli </label>
                                </div>
                                <div class="form-check">
                                    <input name="default-radio-1 market_" class="form-check-input" type="radio" value="Tiktokshop" id="defaultRadio2" onclick="myFunction(this.value)"/>
                                    <label class="form-check-label" for="defaultRadio2"> Tiktok Shop </label>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label class="col-sm-3 col-form-label" for="basic-icon-default-company">Transfer</label>
                            <div class="col-sm-9">
                                <div class="input-group input-group-merge tf">
                                    <span id="basic-icon-default-company2" class="input-group-text">Rp.</span>
                                    <input type="text" name="total_tf" id="tfValue" class="form-control" placeholder="Total transfer" />
                                </div>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label class="col-sm-3 col-form-label" for="basic-icon-default-company">Ongkos Kirim</label>
                            <div class="col-sm-9">
                                <div class="input-group input-group-merge okr">
                                    <span id="basic-icon-default-company2" class="input-group-text">Rp.</span>
                                    <input type="text" name="ongkos_kirim" id="okrValue" class="form-control" placeholder="Ongkos Kirim" />
                                </div>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label class="col-sm-3 col-form-label" for="basic-icon-default-company">Hasil Bersih</label>
                            <div class="col-sm-5">
                                <div class="input-group input-group-merge">
                                    <span id="basic-icon-default-company2" class="input-group-text">Rp.</span>
                                    <input type="hasil" name="hasil_bersih" id="hasil_bersih" class="form-control" placeholder="Hasil Bersih" ></input>
                                </div>
                            </div>
                            <div class="col-sm-4">
                              <button type="button" id="setBtnID" class="calculate btn btn-primary">Cari Hasil</button>
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
                        
                            <label class="col-sm-3 col-form-label" for="basic-icon-default-fullname">Product</label>
                            <div class="col-sm-9">
                                <div class="input-group input-group-merge">
                                    <span id="basic-icon-default-fullname2" class="input-group-text">
                                        <i class="bx bx-shopping-bag"></i>
                                    </span>
                                        <select class="form-select" name="p1" id="inputGroupSelect01">
                                        <option value="" selected>Pilih Product</option>
                                        <?php
                                            foreach ($product as $key => $row)
                                            {
                                            ?>
                                            <option value="<?php echo ucwords($row['nama']); ?>">
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
                        <div class="row mb-4">
                            <label class="col-sm-3 col-form-label" for="basic-icon-default-fullname">Product 2</label>
                            <div class="col-sm-9">
                                <div class="input-group input-group-merge">
                                    <span id="basic-icon-default-fullname2" class="input-group-text">
                                        <i class="bx bx-shopping-bag"></i>
                                    </span>
                                        <select class="form-select" name="p2" id="inputGroupSelect01">
                                        <option value="" selected>Pilih Product</option>
                                        <?php
                                            foreach ($product as $key => $row)
                                            {
                                            ?>
                                            <option value="<?php echo ucwords($row['nama']); ?>">
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
                        <div class="row mb-4">
                            <label class="col-sm-3 col-form-label" for="basic-icon-default-fullname">Product 3</label>
                            <div class="col-sm-9">
                                <div class="input-group input-group-merge">
                                    <span id="basic-icon-default-fullname2" class="input-group-text">
                                        <i class="bx bx-shopping-bag"></i>
                                    </span>
                                        <select class="form-select" name="p3" id="inputGroupSelect01">
                                        <option value="" selected>Pilih Product</option>
                                        <?php
                                            foreach ($product as $key => $row)
                                            {
                                            ?>
                                            <option value="<?php echo ucwords($row['nama']); ?>">
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
                        <div class="row mb-4">
                            <label class="col-sm-3 col-form-label" for="basic-icon-default-fullname">Product 4</label>
                            <div class="col-sm-9">
                                <div class="input-group input-group-merge">
                                    <span id="basic-icon-default-fullname2" class="input-group-text">
                                        <i class="bx bx-shopping-bag"></i>
                                    </span>
                                        <select class="form-select" name="p4" id="inputGroupSelect01">
                                        <option value="" selected>Pilih Product</option>
                                        <?php
                                            foreach ($product as $key => $row)
                                            {
                                            ?>
                                            <option value="<?php echo ucwords($row['nama']); ?>">
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
                        <div class="row mb-4">
                            <label class="col-sm-3 col-form-label" for="basic-icon-default-fullname">Product 5</label>
                            <div class="col-sm-9">
                                <div class="input-group input-group-merge">
                                    <span id="basic-icon-default-fullname2" class="input-group-text">
                                        <i class="bx bx-shopping-bag"></i>
                                    </span>
                                        <select class="form-select" name="p5" id="inputGroupSelect01">
                                        <option value="" selected>Pilih Product</option>
                                        <?php
                                            foreach ($product as $key => $row)
                                            {
                                            ?>
                                            <option value="<?php echo ucwords($row['nama']); ?>">
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
                        <div class="row mb-4">
                            <label class="col-sm-3 col-form-label" for="basic-icon-default-fullname">Product 6</label>
                            <div class="col-sm-9">
                                <div class="input-group input-group-merge">
                                    <span id="basic-icon-default-fullname2" class="input-group-text">
                                        <i class="bx bx-shopping-bag"></i>
                                    </span>
                                        <select class="form-select" name="p6" id="inputGroupSelect01">
                                        <option value="" selected>Pilih Product</option>
                                        <?php
                                            foreach ($product as $key => $row)
                                            {
                                            ?>
                                            <option value="<?php echo ucwords($row['nama']); ?>">
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
                        <div class="row mb-4">
                            <label class="col-sm-3 col-form-label" for="basic-icon-default-fullname">Product 7</label>
                            <div class="col-sm-9">
                                <div class="input-group input-group-merge">
                                    <span id="basic-icon-default-fullname2" class="input-group-text">
                                        <i class="bx bx-shopping-bag"></i>
                                    </span>
                                        <select class="form-select" name="p7" id="inputGroupSelect01">
                                        <option value="" selected>Pilih Product</option>
                                        <?php
                                            foreach ($product as $key => $row)
                                            {
                                            ?>
                                            <option value="<?php echo ucwords($row['nama']); ?>">
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
                        <div class="row mb-4">
                            <label class="col-sm-3 col-form-label" for="basic-icon-default-fullname">Product 8</label>
                            <div class="col-sm-9">
                                <div class="input-group input-group-merge">
                                    <span id="basic-icon-default-fullname2" class="input-group-text">
                                        <i class="bx bx-shopping-bag"></i>
                                    </span>
                                        <select class="form-select" name="p8" id="inputGroupSelect01">
                                        <option value="" selected>Pilih Product</option>
                                        <?php
                                            foreach ($product as $key => $row)
                                            {
                                            ?>
                                            <option value="<?php echo ucwords($row['nama']); ?>">
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
                        <div class="row mb-4">
                            <label class="col-sm-3 col-form-label" for="basic-icon-default-fullname">Product 9</label>
                            <div class="col-sm-9">
                                <div class="input-group input-group-merge">
                                    <span id="basic-icon-default-fullname2" class="input-group-text">
                                        <i class="bx bx-shopping-bag"></i>
                                    </span>
                                        <select class="form-select" name="p9" id="inputGroupSelect01">
                                        <option value="" selected>Pilih Product</option>
                                        <?php
                                            foreach ($product as $key => $row)
                                            {
                                            ?>
                                            <option value="<?php echo ucwords($row['nama']); ?>">
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
                        <div class="row mb-4">
                            <label class="col-sm-3 col-form-label" for="basic-icon-default-fullname">Product 10</label>
                            <div class="col-sm-9">
                                <div class="input-group input-group-merge">
                                    <span id="basic-icon-default-fullname2" class="input-group-text">
                                        <i class="bx bx-shopping-bag"></i>
                                    </span>
                                        <select class="form-select" name="p10" id="inputGroupSelect01">
                                        <option value="" selected>Pilih Product</option>
                                        <?php
                                            foreach ($product as $key => $row)
                                            {
                                            ?>
                                            <option value="<?php echo ucwords($row['nama']); ?>">
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
<script>
        function radioget(getValue)
        {
            document.getElementById('market').innerHTML=getValue;
        }
        function myFunction(market_) {
            document.getElementById("result").value = market_;
        };

        
    </script>
