
<!-- Content wrapper -->
<div class="content-wrapper">
  <!-- Content -->

  <div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Tables /</span> <?= $page_title?></h4>
  <!-- Hoverable Table rows -->
    <div class="card px-5">
      <div class="row">
        <div class="col-12">
          <h5 class="card-header mb-3">Daftar |  Reseller</h5>
        </div>
      
    </div>
    <div class="mb-5">
    <table class="table table-hover display responsive nowrap unstackable" id="cs_tabel" style="width:100%">
    <style scoped>
        @import url("https://cdnjs.cloudflare.com/ajax/libs/fomantic-ui/2.8.8/semantic.min.css");
        @import url("https://cdn.datatables.net/1.13.1/css/dataTables.semanticui.min.css");
        @import url("https://cdn.datatables.net/buttons/2.3.2/css/buttons.semanticui.min.css");
        @import url("https://cdn.datatables.net/responsive/2.4.0/css/responsive.semanticui.min.css");
    </style>
    <thead>
          <tr>
            <th>ID Reseller</th>
            <th>Nama</th>
            <th>Kode</th>
            <th>Option</th>
          </tr>
        </thead>
        <tbody class="table-border-bottom-0">
          <?php
          foreach ($reseller as $key => $row)
          {
            ?>
          <tr>
            <td><?php echo ucwords($row['id_reseller']); ?></td>
            <td><?php echo ucwords($row['nama_reseller']); ?></td>
            <td><?php echo ucwords($row['kode_resi']); ?></td>
            <td>
              <div class="dropdown">
                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                  <i class="bx bx-dots-vertical-rounded"></i>
                </button>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="<?php echo site_url('laporan_cs/r_edit/'.$row['id_reseller']); ?>">
                    <i class="bx bx-edit-alt me-1"></i> Edit</a>
                  <a class="dropdown-item" class="btn btn-primary" data-bs-toggle="modal" style="cursor: pointer;" data-bs-target="#del<?php echo $row['id_reseller']; ?>">
                    <i class="bx bx-trash me-1"></i> Delete</a>
                </div>
                <!-- Delete -->
                <div class="modal fade" id="del<?php echo $row['id_reseller']; ?>" tabindex="-1" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="modalCenterTitle">Hapus Reseller</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body text-center">
                        <h5>Apakah anda yakin ingin menghapus</h5>
                        <p>Reseller <strong><?php echo $row['nama_reseller']?></strong> ?</p>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                          Close
                        </button>
                        <a type="button" href="<?php echo site_url('laporan_cs/r_del/'.$row['id_reseller']); ?>" class="btn btn-primary">Hapus</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.modal -->
            </td>
          </tr>
          <?php
          }
        ?>
        </tbody>
        <tfoot>
            <tr>
                <th>ID Reseller</th>
                <th>Nama</th>
                <th>Kode</th>
                <th>Option</th>
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
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Tambah /</span> Markeeting Reseller</h4>

    <div class="row">
      <div class="col-md-12">
        <div class="card mb-4">
          <h5 class="card-header">Profile Reseller</h5>
          <!-- Account -->
          <form action="<?=site_url('laporan_cs/r_add_process')?>" method ="POST" enctype="multipart/form-data">
          <hr class="my-0" />
          <div class="card-body">
              <div class="row">
                <div class="mb-3 col-md-6">
                  <label for="firstName" class="form-label">Nama Reseller</label>
                  <small class="text-primary"> * Tulis dengan huruf besar</small>
                  <input class="form-control" name="nama_reseller" type="text" id="firstName" required autofocus />
                </div>
                <div class="mb-3 col-md-6">
                  <label for="lastName" class="form-label">Kode Resi</label>
                  <input name="kode_resi" class="form-control" type="text" id="lastName"/>
                </div>
              <div class="mt-2">
                <button type="submit" class="btn btn-primary me-2">Tambah Reseller</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

  <!-- / Content -->


