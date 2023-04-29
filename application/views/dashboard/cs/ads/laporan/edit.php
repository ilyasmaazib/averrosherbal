<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Tambah /</span> Data</h4>

    <div class="row">
      <div class="col-md-12">
        <div class="card mb-4">
          <!-- Account -->
          <form action="<?=site_url('laporan_cs/ads_laporan_edit_process')?>" method ="POST" enctype="multipart/form-data">
          <input class="form-control" name="id_laporan" type="hidden" value="<?php echo $row['id_laporan']?>" required>
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
                                    <?php
                                        foreach ($ads as $key => $a)
                                        {
                                            ?>
                                            <option <?php if($row['id_ads'] == $a['id_ads']){echo 'selected';}?> value="<?php echo ucwords($a['id_ads']); ?>">
                                                <span>
                                                    <?php echo ucwords($a['nama_ads']); ?>
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
                            <label class="col-sm-3 col-form-label" for="basic-icon-default-company">Pembeli</label>
                            <div class="col-sm-9">
                                <div class="input-group input-group-merge">
                                    <span id="basic-icon-default-company2" class="input-group-text">
                                        <i class="bx bx-group"></i>
                                    </span>
                                    <input type="text" name="nama_pembeli" class="form-control" value="<?php echo $row['nama_pembeli']?>" placeholder="Tulis Nama Pembeli" aria-label="Tulis Nama Pembeli" aria-describedby="basic-icon-default-company2" />
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
                                    <input type="text" name="alamat_pembeli" class="form-control" value="<?php echo $row['alamat_pembeli']?>" placeholder="Tulis Alamat Pembeli" aria-label="Tulis Alamat Pembeli" aria-describedby="basic-icon-default-company2" />
                                </div>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label class="col-sm-3 col-form-label" for="basic-icon-default-fullname">Nama</label>
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
                        <div class="row mb-4">
                            <label class="col-sm-3 col-form-label" for="basic-icon-default-phone">No Handphone</label>
                            <div class="col-sm-9">
                                <div class="input-group input-group-merge">
                                    <span id="basic-icon-default-phone2" class="input-group-text">
                                        <i class="bx bx-phone"></i>
                                    </span>
                                    <input type="text" name="hp" id="basic-icon-default-phone" class="form-control phone-mask" value="<?php echo $row['hp']?>" placeholder="+658 799 8941" aria-label="658 799 8941" aria-describedby="basic-icon-default-phone2" />
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
                            <label class="col-sm-3 col-form-label" for="basic-icon-default-company">Marketplace</label>
                            <div class="col-sm-9">
                                <div class="input-group input-group-merge">
                                    <span id="basic-icon-default-company2" class="input-group-text">
                                        <i class="bx bx-store"></i>
                                    </span>
                                    <input type="text" name="market" id="result" class="form-control" value="<?php echo $row['market']?>" placeholder="Pilih market di bawah ini . . ." />
                                </div>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label class="col-sm-3 col-form-label" for="basic-icon-default-company">Pilih Market</label>
                            <div class="col-sm-4">
                                <div class="form-check">
                                    <input <?php if($row['market']=='Lazada') echo 'checked'?> name="default-radio-1 market_" class="form-check-input" type="radio" value="Lazada" id="defaultRadio2" onclick="myFunction(this.value)"/>
                                    <label class="form-check-label" for="defaultRadio2"> Lazada </label>
                                </div>
                                <div class="form-check">
                                    <input <?php if($row['market']=='Shopee') echo 'checked'?> name="default-radio-1 market_" class="form-check-input" type="radio" value="Shopee" id="defaultRadio2" onclick="myFunction(this.value)"/>
                                    <label class="form-check-label" for="defaultRadio2"> Shopee </label>
                                </div>
                                <div class="form-check">
                                    <input <?php if($row['market']=='Tokopedia') echo 'checked'?> name="default-radio-1 market_" class="form-check-input" type="radio" value="Tokopedia" id="defaultRadio2" onclick="myFunction(this.value)"/>
                                    <label class="form-check-label" for="defaultRadio2"> Tokopedia </label>
                                </div>
                                <div class="form-check">
                                    <input <?php if($row['market']=='Akulaku') echo 'checked'?> name="default-radio-1 market_" class="form-check-input" type="radio" value="Akulaku" id="defaultRadio2" onclick="myFunction(this.value)"/>
                                    <label class="form-check-label" for="defaultRadio2"> Akulaku </label>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-check">
                                    <input <?php if($row['market']=='Bukalapak') echo 'checked'?> name="default-radio-1 market_" class="form-check-input" type="radio" value="Bukalapak" id="defaultRadio2" onclick="myFunction(this.value)"/>
                                    <label class="form-check-label" for="defaultRadio2"> Bukalapak </label>
                                </div>
                                <div class="form-check">
                                    <input <?php if($row['market']=='Blibli') echo 'checked'?> name="default-radio-1 market_" class="form-check-input" type="radio" value="Blibli" id="defaultRadio2" onclick="myFunction(this.value)"/>
                                    <label class="form-check-label" for="defaultRadio2"> Blibli </label>
                                </div>
                                <div class="form-check">
                                    <input <?php if($row['market']=='Tiktokshop') echo 'checked'?> name="default-radio-1 market_" class="form-check-input" type="radio" value="Tiktokshop" id="defaultRadio2" onclick="myFunction(this.value)"/>
                                    <label class="form-check-label" for="defaultRadio2"> Tiktok Shop </label>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label class="col-sm-3 col-form-label" for="basic-icon-default-company">Transfer</label>
                            <div class="col-sm-9">
                                <div class="input-group input-group-merge tf">
                                    <span id="basic-icon-default-company2" class="input-group-text">Rp.</span>
                                    <input type="text" name="total_tf" id="tfValue" value="<?php echo $row['total_tf']?>" class="form-control" placeholder="Total transfer" />
                                </div>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label class="col-sm-3 col-form-label" for="basic-icon-default-company">Ongkos Kirim</label>
                            <div class="col-sm-9">
                                <div class="input-group input-group-merge okr">
                                    <span id="basic-icon-default-company2" class="input-group-text">Rp.</span>
                                    <input type="text" name="ongkos_kirim" id="okrValue" value="<?php echo $row['ongkos_kirim']?>" class="form-control" placeholder="Ongkos Kirim" />
                                </div>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label class="col-sm-3 col-form-label" for="basic-icon-default-company">Hasil Bersih</label>
                            <div class="col-sm-5">
                                <div class="input-group input-group-merge">
                                    <span id="basic-icon-default-company2" class="input-group-text">Rp.</span>
                                    <input type="hasil" name="hasil_bersih" id="hasil_bersih" value="<?php echo $row['hasil_bersih']?>" class="form-control" placeholder="Hasil Bersih" ></input>
                                </div>
                            </div>
                            <div class="col-sm-4">
                              <button type="button" id="setBtnID" class="calculate btn btn-primary">Cari Hasil</button>
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
