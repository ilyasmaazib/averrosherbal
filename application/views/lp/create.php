<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tambah Data</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="#">Landingpage</a></li>
              <li class="breadcrumb-item active">Tambah Data</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                <div class="card-header">
                    <h2 class="card-title">Tambah Data</h2>
                </div>
          <!-- left column -->
          <div class="col-sm-10 mx-auto" style="padding-top: 30px;">
            <!-- general form elements -->
            <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">Input Data</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="<?=site_url('lp/add_process')?>" method ="POST" enctype="multipart/form-data">
              <input class="form-control" type="hidden" name="id_product" value="<?= @$_GET['id_product']?>">
                <div class="card-body">
                  <div class="form-group">
                    <label for="whatsapp">Nomor Whatsapp</label>
                    <input type="text" class="form-control" name="whatsapp" id="whatsapp" placeholder="*Contoh : https://wa.me/6281xxxcccvvv" required>
                        <small style="color: #808080;">Silahkan cek data kembali</small>
                  </div>
                  <div class="form-group">
                    <label for="market1">Marketplace 1</label>
                    <input type="text" class="form-control" value="" name="market1" id="market1" placeholder="Masukkan Nama Platform Marketplace" required>
                    <small style="color: #808080;">Silahkan cek data kembali</small>
                  </div>
                  <div class="form-group">
                    <label for="link1">Link Product di Marketplace</label>
                    <input type="text" class="form-control" name="link1" id="link1" placeholder="Masukkan Link Product di Marketplace" required>
                    <small style="color: #808080;">Silahkan cek data kembali</small>
                  </div>
                  <div class="form-group">
                    <label for="market2">Marketplace 2</label>
                    <input type="text" class="form-control" name="market2" id="market2" placeholder="Masukkan Nama Platform Marketplace" required>
                    <small style="color: #808080;">Silahkan cek data kembali</small>
                  </div>
                  <div class="form-group">
                    <label for="link2">Link Product di Marketplace</label>
                    <input type="text" class="form-control" value="" name="link2" id="link2" placeholder="Masukkan Link Product di Marketplace" required>
                    <small style="color: #808080;">Silahkan cek data kembali</small>
                  </div>
                  <div class="form-group">
                      <div>
                        <label for="background">Upload Background</label>
                        <input type="file" id="background" name="background" class="dropify">
                        </div>
                  </div>
                </div>
                
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="simpan" class="btn btn-primary"><span>Simpan</span></button>
                </div>
              </form>
            </div>
          </div>
                </div>
            </div>
        </div>
      </div>
    </section>
</div>