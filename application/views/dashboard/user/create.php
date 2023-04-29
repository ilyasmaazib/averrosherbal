<!-- Content wrapper -->
<div class="content-wrapper">
  <!-- Content -->

  <div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Account Settings /</span> <?php echo $page_title ?></h4>

    <div class="row">
      <div class="col-md-12">
        <ul class="nav nav-pills flex-column flex-md-row mb-3">
        <li class="nav-item">
            <a class="nav-link" href="<?= site_url('user')?>"><i class="bx bx-user me-1"></i> Profile</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= site_url('user/update')?>" ><i class="bx bxs-edit me-1"></i> Edit Profil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="error"
              ><i class="bx bx-user-plus me-1"></i> Tambah User</a
            >
          </li>
        </ul>
        <div class="card mb-4">
          <h5 class="card-header">Profile Details</h5>
          <!-- Account -->
          <form action="<?=site_url('user/add_proses')?>" method ="POST" enctype="multipart/form-data">
          <div class="card-body">
            <div class="d-flex align-items-start align-items-sm-center gap-4">
              <img src="<?= base_url('/public/img/user/default.png')?>" alt="user-avatar" class="d-block rounded img-fluid" height="100" width="100" id="uploadedAvatar" />
              <div class="button-wrapper">
                <label for="upload" class="btn btn-primary me-2 mb-4" tabindex="0">
                  <span class="d-none d-sm-block">Upload new photo</span>
                  <i class="bx bx-upload d-block d-sm-none"></i>
                  <input type="file" name="foto" id="upload" class="account-file-input" hidden accept="image/png, image/jpeg" />
                </label>
                <button type="button" class="btn btn-outline-secondary account-image-reset mb-4">
                  <i class="bx bx-reset d-block d-sm-none"></i>
                  <span class="d-none d-sm-block">Reset</span>
                </button>

                <p class="text-muted mb-0">Allowed JPG, GIF or PNG. Max size of 800K</p>
              </div>
            </div>
          </div>
          <hr class="my-0" />
          <div class="card-body">
              <div class="row">
                <div class="mb-3 col-md-6">
                  <label for="firstName" class="form-label">Nama User</label>
                  <input class="form-control" name="nama_user" type="text" id="firstName" required autofocus />
                </div>
                <div class="mb-3 col-md-6">
                  <label for="lastName" class="form-label">ID USER</label>
                  <input class="form-control" type="text" id="lastName" disabled/>
                </div>
                <div class="mb-3 col-md-6">
                  <label for="email" class="form-label">Username</label>
                  <input class="form-control" name="username" type="text" id="email" required />
                </div>
                <div class="mb-3 col-md-6">
                <label for="email" class="form-label">Jabatan</label>
                  <div class="input-group">
                    <label class="input-group-text" for="inputGroupSelect01">Jabatan</label>
                      <select class="form-select" name="role_id" id="inputGroupSelect01">
                        <?php
                          foreach ($role as $key => $row)
                          {
                            ?>
                            <option value="<?php echo ucwords($row['role_id']); ?>">
                              <span>
                                <?php echo ucwords($row['jabatan']); ?>
                              </span>
                            </option>
                            <?php
                          }
                          ?>
                      </select>
                    </div>
                </div>
                <div class="mb-3 col-md-6">
                  <label class="form-label" for="phoneNumber">Password</label>
                  <div class="input-group input-group-merge">
                    <input type="password" id="password" name="password" class="form-control" placeholder="masukkan password"  />
                  </div>
                </div>
                <div class="mb-3 col-md-6">
                  <label for="address" class="form-label">Whatsapp</label>
                  <input type="text" class="form-control" id="address"  />
                </div>
                <div class="mb-3 col-md-6">
                  <label for="address" class="form-label">Facebook Account</label>
                  <input type="text" class="form-control" id="address"  />
                </div>
                <div class="mb-3 col-md-6">
                  <label for="address" class="form-label">Useername - Instagram</label>
                  <input type="text" class="form-control" id="address"  />
                </div>
                <div class="mb-3 col-md-6">
                  <label for="address" class="form-label">Username - Twitter</label>
                  <input type="text" class="form-control" id="address"  />
                </div>
                <div class="mb-3 col-md-6">
                  <label for="address" class="form-label">Path Foto</label>
                  <input type="text" name="foto" value="default.png" class="form-control" id="address" />
                </div>
              <div class="mt-2">
                <button type="submit" class="btn btn-primary me-2">Tambah Profil</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

  <!-- / Content -->