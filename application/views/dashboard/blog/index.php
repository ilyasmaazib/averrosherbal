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
            <th>Judul</th>
            <th>Tanggal</th>
            <th>Konten</th>
            <th>Product Terkait</th>
            <th>Properti</th>
            <th>Category</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody class="table-border-bottom-0">
                <?php
                  foreach ($blog as $key => $row)
                  {
                    ?>
                <tr>
                    <td><?php echo ucwords($row['judul']); ?></td>
                    <td><?php echo ucwords($row['tanggal']); ?></td>
                    <td><a href="<?php echo site_url('blog/konten/'.$row['id_blog']); ?>" class="badge bg-label-success me-1"><i class="fa fa-arrow-right"></i> Lihat Berkas</a></td>
                    <td><?php echo ucwords($row['nama']); ?></td>
                    <td>
                      <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                        <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="<?php echo ucwords($row['nama']); ?>" >
                          <img class="rounded-circle"  src=<?=base_url("/public/img/upload/" . $row['foto'])?> alt="avatar"/>
                        </li>
                        <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="ditulis oleh <?php echo ucwords($row['nama_penulis']); ?>" >
                          <img class="rounded-circle"  src=<?=base_url("/public/img/user/" . $row['foto_penulis'])?> alt="avatar"/>
                        </li>
                        <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="Background Blog" >
                          <img class="rounded-circle"  src=<?=base_url("/public/img/blog/" . $row['background'])?> alt="avatar"/>
                        </li>
                      </ul>
                    </td>
                    <td>
                      <?php if($row['category']=='Trending Topic') echo '<i class="bx bx-trending-up"></i>' .$row['category']?>
                      <?php if($row['category']=='Seputar Pria') echo '<i class="bx bx-male-sign"></i>' .$row['category']?>
                      <?php if($row['category']=='Seputar Wanita') echo '<i class="bx bx-female-sign" ></i>' .$row['category']?>
                      <?php if($row['category']=='Seputar Keluarga') echo '<i class="bx bx-male-female" ></i>' .$row['category']?>
                    </td>
                    <td>
                      <div class="dropdown">
                      <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                        <i class="bx bx-dots-vertical-rounded"></i>
                      </button>
                      <div class="dropdown-menu">
                        <a class="dropdown-item" href="<?php echo site_url('blog/edit/'.$row['id_blog']); ?>">
                          <i class="bx bx-edit-alt me-1"></i> Edit</a>
                        <a class="dropdown-item" class="btn btn-primary" data-bs-toggle="modal" style="cursor: pointer;" data-bs-target="#del<?php echo $row['id_blog']; ?>">
                          <i class="bx bx-trash me-1"></i> Delete</a>
                      </div>
                      <!-- Delete -->
                      <di class="modal fade" id="del<?php echo $row['id_blog']; ?>" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="modalCenterTitle">Hapus blog</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body text-center">
                              <h5>Apakah anda yakin ingin menghapus</h5>
                              <p>blog <strong><?php echo $row['nama']?></strong> ?</p>
                              <img src="<?=base_url("/public/img/upload/" . $row['foto'])?>" width="300px" alt="">
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                Close
                              </button>
                              <a type="button" href="<?php echo site_url('blog/del/'.$row['id_blog']); ?>" class="btn btn-primary">Hapus</a>
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
                  <th>Judul</th>
                  <th>Tanggal</th>
                  <th>Konten</th>
                  <th>Product Terkait</th>
                  <th>Properti</th>
                  <th>Category</th>
                  <th>Action</th>
                </tr>
            </tfoot>
        </table>
    </div>
  </div>
  </div>
</div>


  