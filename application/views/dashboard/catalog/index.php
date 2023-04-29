<!-- Content wrapper -->
<div class="content-wrapper">
  <!-- Content -->

  <div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Tables /</span> Basic Tables</h4>
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
    <div class="table-responsive text-nowrap" id="example">
      <table class="table table-hover">
        <thead>
          <tr>
            <th>Nama</th>
            <th>Kode</th>
            <th>Harga</th>
            <th>Foto</th>
            <th>Deskripsi</th>
            <th>Category</th>
          </tr>
        </thead>
        <tbody class="table-border-bottom-0">
          <?php
          foreach ($product as $key => $row)
          {
            ?>
          <tr>
            <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong><?php echo ucwords($row['nama']); ?></strong></td>
            <td><?php echo ucwords($row['kode']); ?></td>
            <td><?php echo ucwords($row['harga']); ?></td>
            <td>
              <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="Lilian Fuller" >
                  <img class="rounded-circle"  src=<?=base_url("/public/img/upload/" . $row['foto'])?> alt="avatar"/>
                </li>
              </ul>
            </td>
            <td>
              <span type="button" 
                    class="badge bg-label-success me-1"
                    data-bs-toggle="popover" 
                      data-bs-offset="0,14" 
                      data-bs-placement="top" 
                      data-bs-html="true" 
                      data-bs-content="<p><?php echo ($row['deskripsi']); ?></p>" 
                      title="Manfaat <?php echo ($row['nama']); ?>" >Manfaat
              </span>
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
                  <a class="dropdown-item" href="<?php echo site_url('catalog/edit/'.$row['id_product']); ?>">
                    <i class="bx bx-edit-alt me-1"></i> Edit</a>
                  <a class="dropdown-item" class="btn btn-primary" data-bs-toggle="modal" style="cursor: pointer;" data-bs-target="#del<?php echo $row['id_product']; ?>">
                    <i class="bx bx-trash me-1"></i> Delete</a>
                </div>
                <!-- Delete -->
                <div class="modal fade" id="del<?php echo $row['id_product']; ?>" tabindex="-1" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="modalCenterTitle">Hapus Product</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body text-center">
                        <h5>Apakah anda yakin ingin menghapus</h5>
                        <p>Product <strong><?php echo $row['nama']?></strong> ?</p>
                        <img src="<?=base_url("/public/img/upload/" . $row['foto'])?>" width="300px" alt="">
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                          Close
                        </button>
                        <a type="button" href="<?php echo site_url('catalog/del/'.$row['id_product']); ?>" class="btn btn-primary">Hapus</a>
                      </div>
                    </div>
                  </div>
                </div>
              <!-- /.modal -->
              </div>
            </td>
          </tr>
          <?php
          }
        ?>
        </tbody>
      </table>
    </div>
  </div>
  <!--/ Hoverable Table rows -->

            </div>
</div>
