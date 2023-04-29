<!-- Content wrapper -->
<div class="content-wrapper">
  <!-- Content -->

  <div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Blog /</span> <?= $page_title ?></h4>
  <!-- Hoverable Table rows -->
  <div class="card">
    <div class="row">
      <div class="col">
        <h5 class="card-header">Data Blog</h5>
        
      </div>
      <div class="col">
        <div class="input-group input-group-merge pe-4 my-3" style="width: 200px; float:right;">
          <span class="input-group-text" id="basic-addon-search31"><i class="bx bx-search"></i></span>
          <input type="text" class="form-control" id="search" placeholder="Search..." aria-label="Search..." aria-describedby="basic-addon-search31" />
        </div>

      </div>
    </div>
    <div class="me-0">
    <table class="table table-hover display" id="example" style="width:100%">
        <thead>
          <tr>
            <th>ID Sitemap</th>
            <th>Tanggal</th>
            <th>File</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody class="table-border-bottom-0">
                <?php
                  foreach ($sitemap as $key => $row)
                  {
                    ?>
                <tr>
                    <td><?php echo ucwords($row['id_sitemap']); ?></td>
                    <td><?php echo ucwords($row['tanggal']); ?></td>
                    <td><?php echo ucwords($row['sitemap']); ?></td>
                    
                    <td>
                      <div class="dropdown">
                      <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                        <i class="bx bx-dots-vertical-rounded"></i>
                      </button>
                      <div class="dropdown-menu">
                        <a class="dropdown-item" href="<?php echo site_url('blog/sitemap_edit/'.$row['id_sitemap']); ?>">
                          <i class="bx bx-edit-alt me-1"></i> Edit</a>
                        <a class="dropdown-item" class="btn btn-primary" data-bs-toggle="modal" style="cursor: pointer;" data-bs-target="#del<?php echo $row['id_sitemap']; ?>">
                          <i class="bx bx-trash me-1"></i> Delete</a>
                      </div>
                      <!-- Delete -->
                      <di class="modal fade" id="del<?php echo $row['id_sitemap']; ?>" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="modalCenterTitle">Hapus blog</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body text-center">
                              <h5>Apakah anda yakin ingin menghapus</h5>
                              <p>blog <strong><?php echo $row['sitemap']?></strong> ?</p>
                              <img src="<?=base_url("/public/img/upload/" . $row['foto'])?>" width="300px" alt="">
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                Close
                              </button>
                              <a type="button" href="<?php echo site_url('blog/del/'.$row['id_sitemap']); ?>" class="btn btn-primary">Hapus</a>
                            </div>
                          </div>
                        </div>
                      </di>
                    </div>
                  </td>
                </tr>
                <?php
                  }
                ?>
            </tbody>
            <tfoot>
                <tr>
                    <th>ID Sitemap</th>
                    <th>Tanggal</th>
                    <th>File</th>
                    <th>Action</th>
                </tr>
            </tfoot>
        </table>
    </div>
  </div>
  </div>
</div>




<!-- Content wrapper -->
<div class="content-wrapper">
  <!-- Content -->

  <div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Tambah /</span> Sitemap</h4>

    <div class="row">
      <div class="col-md-12">
        <div class="card mb-4">
          <h5 class="card-header">Upload Sitemap</h5>
          <!-- Account -->
          <form action="<?=site_url('blog/sitemap_add_process')?>" method ="POST" enctype="multipart/form-data">
          <hr class="my-0" />
          <div class="card-body">
              <div class="row">
                <div class="mb-3 col-md-6">
                  <label for="firstName" class="form-label">Sitemap</label>
                  <input class="dropify" name="sitemap" type="file" id="firstName" required autofocus />
                </div>
                <div class="mb-3 col-md-6">
                  <label for="lastName" class="form-label">Tanggal</label>
                  <input name="tanggal" class="form-control" type="date" id="lastName" required/>
                </div>
              <div class="mt-2">
                <button type="submit" class="btn btn-primary me-2">Tambah Sales</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


  