<!-- Content wrapper -->
<div class="content-wrapper">
  <!-- Content -->

  <div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Account Settings /</span> <?php echo $page_title ?></h4>

    
        <div class="card mb-4">
          <h5 class="card-header">Profile Details</h5>
          <!-- Account -->
          <form action="<?=site_url('user_access/edit')?>" method ="POST" enctype="multipart/form-data">
          <input class="form-control" name="id_user" type="hidden" value="<?php echo $row['id_user']?>" required>
          <div class="card-body">
            <div class="d-flex align-items-start align-items-sm-center gap-4">
              <img src="<?=base_url("/public/img/user/" . $row['foto'])?>" alt="user-avatar" class="d-block rounded" height="100" width="100" id="uploadedAvatar" />
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
          <input type="hidden" name="oldImg" value="<?php echo base_url('/public/img/user/'.$row['foto'])  ?>">
              <div class="row">
                <div class="mb-3 col-md-6">
                  <label for="firstName" class="form-label">Nama User</label>
                  <input class="form-control" name="nama_user" value="<?php echo $row['nama_user'] ?>" type="text" id="firstName"/>
                </div>
                <div class="mb-3 col-md-6">
                  <label for="lastName" class="form-label">ID USER</label>
                  <input class="form-control" type="text" value="<?php echo $row['id_user'] ?>" id="lastName" disabled />
                </div>
                <div class="mb-3 col-md-6">
                  <label for="email" class="form-label">Username</label>
                  <input class="form-control" name="username" type="text" id="email" value="<?php echo $row['username'] ?>"  />
                </div>
                <div class="mb-3 col-md-6">
                  <label class="form-label" for="phoneNumber">Password</label>
                  <small class="text-primary"> * Biarkan kosong jika tidak diubah</small>
                  <div class="input-group input-group-merge">
                    <input name="password" type="password" value="" class="form-control" />
                  </div>
                </div>
                <div class="mb-3 col-md-6">
                  <label for="address" class="form-label">Whatsapp</label>
                  <input type="text" name="wa" class="form-control" id="address"  value="<?php echo $row['wa'] ?>"  />
                </div>
                <div class="mb-3 col-md-6">
                  <label for="address" class="form-label">Facebook Account</label>
                  <input type="text" name="fb" class="form-control" id="address"  value="<?php echo $row['fb'] ?>"  />
                </div>
                <div class="mb-3 col-md-6">
                  <label for="address" class="form-label">Username Instagram</label>
                  <input type="text" name="ig" class="form-control" id="address"  value="<?php echo $row['ig'] ?>"  />
                </div>
                <div class="mb-3 col-md-6">
                  <label for="address" class="form-label">Username Twitter</label>
                  <input type="text" name="twitter" class="form-control" id="address"  value="<?php echo $row['twitter'] ?>"  />
                </div>
                <div class="mb-3 col-md-6">
                <label for="email" class="form-label">Jabatan</label>
                  <div class="input-group">
                    <label class="input-group-text" for="inputGroupSelect01">Jabatan</label>
                      <select class="form-select" name="role_id" id="inputGroupSelect01">
                        <option value="">Pilih Role</option>
                        <?php
                          foreach ($role as $key => $a)
                          {
                            ?>
                            <option <?php if($row['role_id'] == $a['role_id']){echo 'selected';}?> value="<?php echo ucwords($a['role_id']); ?>">
                              <span>
                                <?php echo ucwords($a['jabatan']); ?>
                              </span>
                            </option>
                            <?php
                          }
                          ?>
                      </select>
                    </div>
                </div>
                  
              <div class="mt-2">
                <button type="submit" name="simpan" class="btn btn-primary me-2">Save changes</button>
                <a href="<?=site_url('user_access')?>" class="button btn btn-outline-secondary">Cancel</a>
              </div>
            </form>
        </div>
  </div>
</div>


  <!-- / Content -->