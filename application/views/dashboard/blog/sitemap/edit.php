

<!-- Content wrapper -->
<div class="content-wrapper">
  <!-- Content -->

  <div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Edit /</span> Sitemap</h4>

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
                  <input class="dropify" name="sitemap" data-default-file="<?php echo base_url('/public/sitemap/'.$row['sitemap'].'.xml')?>" type="file" id="firstName" required autofocus />
                </div>
                <div class="mb-3 col-md-6">
                  <label for="lastName" class="form-label">Tanggal</label>
                  <input name="tanggal" class="form-control" value="<?php echo $row['tanggal']?>" type="date" id="lastName" required/>
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


  