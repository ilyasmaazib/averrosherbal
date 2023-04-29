<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    
    <!-- Main content -->
    <section class="content mt-5">
      <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card p-5">
                <h3 class="card-title">Konten | <?php echo $row['judul']?></h3>
              <!-- form start -->
                <input class="form-control" name="id_blog" type="hidden" value="<?php echo $row['id_blog']?>" required>
                        <texarea class="konten" type="text" name="isi" id="richtext"  required ><?php echo $row['isi']; ?></texarea>
                  <div class="card-footer">
                    <a href="<?=site_url('blog')?>" class="btn btn-primary"><span>kembali</span></a>
                  </div>
                </div>
            </div>
        </div>
      </div>
    </section>
</div>

