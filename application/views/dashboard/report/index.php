<!-- Content wrapper -->
<div class="content-wrapper">
  <!-- Content -->

  <div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Tables /</span> <?= $page_title?></h4>
    <div class="text-center pb-5">
        <h2>Selamat datang di menu pooling <span class="text-success">Marketing Sales</span></h2>
        <h1>POIN dan OMSET</h1>
    </div>
  <!-- Hoverable Table rows -->
  <div class="card">
      <div class="row">
        <div class="col-10">
          <h5 class="card-header mb-3">Omset Marketing Sales</h5>
        </div>
        <div class="row pb-5">
            
            <div class="col-3 offset-2">
                <div class="input-group input-group-merge">
                    <span id="basic-icon-default-fullname2" class="input-group-text">
                        <i class="bx bx-shopping-bag"></i>
                    </span>
                        <select class="form-select" name="p10" id="inputGroupSelect01">
                            <option value="" selected>Semua Bulan</option>
                            <option value="01">Januari</option>
                            <option value="02">Februari</option>
                            <option value="03">Maret</option>
                            <option value="04">April</option>
                            <option value="05">Mei</option>
                            <option value="06">Juni</option>
                            <option value="07">Juli</option>
                            <option value="08">Agustus</option>
                            <option value="09">September</option>
                            <option value="10">Oktober</option>
                            <option value="11">November</option>
                            <option value="12">Desember</option>
                        </select>
                </div>
            </div>
            <div class="col-3">
                <div class="input-group input-group-merge">
                    <span id="basic-icon-default-fullname2" class="input-group-text">
                        <i class="bx bx-shopping-bag"></i>
                    </span>
                        <select class="form-select" name="p10" id="inputGroupSelect01">
                            <option value="" selected>Tahun</option>
                            <option value="2022">2022</option>
                            <option value="2024">2023</option>
                        </select>
                </div>
            </div>
            <div class="col-2">
                <button type="submit" class="btn btn-primary">
                    <span><i class='bx bx-search-alt' ></i> Cari</span>
                </button>
            </div>
        </div>
        <div class="row mx-auto pb-5 justify-content-center">
        <?php
          foreach ($rank as $key => $rank)
          {
            ?>
          <div class="col-3">
            <div class="card bg-primary text-white mb-3">
              <div class="card-header"><?php echo ucwords( $rank['nama_sales']);?></div>
              <div class="card-body">
                <h5 class="card-title text-white"><?php echo (number_format($rank['total_tf'],0,'.',','));?></h5>
                <p class="card-text">Some quick example text to build on the card title and make up.</p>
              </div>
            </div>
          </div>
          <?php
          }
        ?>
          
          
        
        
      
    </div>
      </div>
    <div class="mb-4 ms-4 me-2">
    <table class="table table-hover display responsive nowrap unstackable" id="tabel_omset" style="width:100%">
    <style scoped>
        @import url("https://cdnjs.cloudflare.com/ajax/libs/fomantic-ui/2.8.8/semantic.min.css");
        @import url("https://cdn.datatables.net/1.13.1/css/dataTables.semanticui.min.css");
        @import url("https://cdn.datatables.net/buttons/2.3.2/css/buttons.semanticui.min.css");
        @import url("https://cdn.datatables.net/responsive/2.4.0/css/responsive.semanticui.min.css");
        
    </style>
    <thead>
          <tr>
            <th>Nama</th>
            <th>Tanggal</th>
            <th>Omset Kotor</th>
            <th>Mata Uang</th>
          </tr>
        </thead>
        <tbody class="table-border-bottom-0">
          <?php
          foreach ($top as $key => $top)
          {
            ?>
          <tr>
            <td><?php echo ucwords($top['nama_sales']); ?></td>
            <td><?php echo ucwords( longdate_indo ($top['tanggal'])); ?></td>
            <td><?php echo (number_format($top['total_tf'],0,'.',',')); ?></td>
            <td>IDR</td>
            
          </tr>
          <?php
          }
        ?>
        </tbody>
        <tfoot>
            <tr>
                <th>Nama</th>
                <th>Tanggal</th>
                <th>Omset Kotor</th>
                <th>Mata Uang</th>
            </tr>
        </tfoot>
        </table>
    </div>
  </div>
  </div>
</div>




