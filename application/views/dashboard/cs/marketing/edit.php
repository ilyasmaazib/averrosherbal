<!-- Content wrapper -->
<div class="content-wrapper">
  <!-- Content -->

  <div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Edit /</span> Markeeting Sales</h4>
    
    <div class="row">
      <div class="col-md-12">
        <div class="card mb-4">
          <h5 class="card-header">Edit Marketing Sales</h5>
          <!-- Account -->
          <form action="<?=site_url('laporan_cs/m_edit_process')?>" method ="POST" enctype="multipart/form-data">
          <input class="form-control" name="id_sales" type="hidden" value="<?php echo $row['id_sales']?>" required>
          <hr class="my-0" />
          <div class="card-body">
              <div class="row">
                <div class="mb-3 col-md-6">
                  <label for="firstName" class="form-label">Nama Sales</label>
                  <small class="text-primary"> * Tulis dengan huruf besar</small>
                  <input class="form-control" name="nama_sales" value="<?php echo ($row['nama_sales'])?>" type="text" id="firstName" required autofocus />
                </div>
                <div class="mb-3 col-md-6">
                  <label for="lastName" class="form-label">Kode Resi</label>
                  <input name="kode_resi" class="form-control" value="<?php echo ($row['kode_resi'])?>" type="text" id="lastName"/>
                </div>
              <div class="mt-2">
                <button type="submit" class="btn btn-primary me-2">Simpan Data</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>