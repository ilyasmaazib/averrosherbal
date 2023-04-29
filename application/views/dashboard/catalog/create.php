    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">
          <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Tambah /</span> Product</h4>

          <form action="<?=site_url('catalog/add_process')?>" method ="POST" enctype="multipart/form-data">
          <div class="row">

          <div class="col-xl-6">
            <div class="card mb-4">
              <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Form input data</h5>
                <small class="text-muted float-end">Rekam data product</small>
              </div>
              <div class="card-body">
                  <div class="mb-3">
                    <label class="form-label" for="basic-icon-default-fullname">Nama Product</label>
                    <div class="input-group input-group-merge">
                      <span id="basic-icon-default-fullname2" class="input-group-text">
                        <i class="bx bx-store-alt"></i>
                      </span>
                      <input type="text" name="nama" class="form-control" id="basic-icon-default-fullname" placeholder="Masukkan Nama Product" aria-label="John Doe" aria-describedby="basic-icon-default-fullname2" required />
                    </div>
                  </div>
                  <div class="mb-3">
                    <label class="form-label" for="basic-icon-default-company">Kode Product</label>
                    <div class="input-group input-group-merge">
                      <span id="basic-icon-default-company2" class="input-group-text">
                        <i class="bx bx-code-alt"></i>
                      </span>
                      <input type="text" name="kode" id="basic-icon-default-company" class="form-control" placeholder="Masukkan Kode" aria-label="ACME Inc." aria-describedby="basic-icon-default-company2" required />
                    </div>
                  </div>
                  <div class="mb-3">
                    <label class="form-label" for="basic-icon-default-email">Harga</label>
                    <div class="input-group input-group-merge">
                      <span class="input-group-text">
                        <i class='bx bxl-shopify'></i>
                      </span>
                      <input type="text" name="harga" value="Rp. " id="basic-icon-default-email" class="form-control" placeholder="Masukkan Harga" aria-label="john.doe" aria-describedby="basic-icon-default-email2" required />
                    </div>
                  </div>
                  <div class="mb-3">
                    <label class="form-label" for="basic-icon-default-phone">Category</label>
                      <div class="form-check mt-3">
                        <input name="category" class="form-check-input" type="radio" value="Trending Topic" id="defaultRadio1" />
                        <label class="form-check-label" for="defaultRadio1"> Trending Topic </label>
                      </div>
                      <div class="form-check mt-3">
                        <input name="category" class="form-check-input" type="radio" value="Seputar Pria" id="defaultRadio1" checked />
                        <label class="form-check-label" for="defaultRadio1"> Pria </label>
                      </div>
                      <div class="form-check mt-3">
                        <input name="category" class="form-check-input" type="radio" value="Seputar Wanita" id="defaultRadio1" />
                        <label class="form-check-label" for="defaultRadio1"> Wanita </label>
                      </div>
                      <div class="form-check mt-3">
                        <input name="category" class="form-check-input" type="radio" value="Seputar Keluarga" id="defaultRadio1" />
                        <label class="form-check-label" for="defaultRadio1"> Keluarga </label>
                      </div>
                  </div>
                  <div class="mb-3">
                    <label class="form-label" for="basic-icon-default-email">Link Shopee</label>
                    <div class="input-group input-group-merge">
                      <span class="input-group-text">
                        <i class='bx bx-link'></i>
                      </span>
                      <input type="text" name="shopee" id="basic-icon-default-email" class="form-control" placeholder="Masukkan Link Shopee" aria-label="john.doe" aria-describedby="basic-icon-default-email2" required />
                    </div>
                  </div>
                  <div class="mb-3">
                    <label class="form-label" for="basic-icon-default-email">Link Lazada</label>
                    <div class="input-group input-group-merge">
                      <span class="input-group-text">
                        <i class='bx bx-link'></i>
                      </span>
                      <input type="text" name="lazada" id="basic-icon-default-email" class="form-control" placeholder="Masukkan Link Lazada" aria-label="john.doe" aria-describedby="basic-icon-default-email2" required />
                    </div>
                  </div>
                  <div class="mb-3">
                    <label class="form-label" for="basic-icon-default-email">Link Tokopedia</label>
                    <div class="input-group input-group-merge">
                      <span class="input-group-text">
                        <i class='bx bx-link'></i>
                      </span>
                      <input type="text" name="tokopedia" id="basic-icon-default-email" class="form-control" placeholder="Masukkan Link Tokopedia" aria-label="john.doe" aria-describedby="basic-icon-default-email2" required />
                    </div>
                  </div>
                </div>
            </div>
          </div>

          <div class="col-xl-6">
            <div class="card mb-4">
              <div class="card-body">
                  <div class="mb-3">
                    <label class="form-label" for="basic-icon-default-phone">Foto Product</label>
                    <div class="input-group input-group-merge">
                    <input type="file" id="foto" name="foto" class="dropify" required>
                  </div>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="basic-icon-default-phone">Deskripsi</label>
                    <div class="input-group input-group-merge">
                      <textarea class="deskripsi" type="text" name="deskripsi" id="richtext" ></textarea>
                    </div>
                  </div>
                  
                  <button type="submit" class="btn btn-primary">Send</button>
                </div>
              </div>
          </div>
          </div>
          </form>
        </div>
    </div>
    
      
                

   