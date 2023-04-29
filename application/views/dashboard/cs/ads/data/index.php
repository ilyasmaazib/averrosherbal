<!-- Content wrapper -->
<div class="content-wrapper">
  <!-- Content -->

  <div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Tables /</span> <?= $page_title?></h4>
  <!-- Hoverable Table rows -->
  <div class="card">
      <div class="row">
        <div class="col-10">
          <h5 class="card-header mb-3">Data Penjualan Ads</h5>
        </div>
        <div class="col-2 py-3 flex-end">
          <a type="button" href="<?=base_url('laporan_cs/ads_data_add')?>" class="btn btn-primary"><span><i class='bx bx-bookmark-plus'></i></span> Tambah Data</a>
        </div>
      
    </div>
    <div class="mb-4 ms-4 me-2">
    <table class="table table-hover display responsive nowrap unstackable" id="cs_tabel" style="width:100%">
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
            <th>Product</th>
            <th>Total Item</th>
            <th>Poin</th>
            <th>Opsi</th>
          </tr>
        </thead>
        <tbody class="table-border-bottom-0">
          <?php
          foreach ($data_cs_ads as $key => $row)
          {
            ?>
          <tr>
            <td><?php echo ucwords($row['nama_ads']); ?></td>
            <td><?php echo ucwords($row['tanggal']); ?></td>
            <td><?php echo ucwords($row['nama']); ?></td>
            <td><?php echo ucwords($row['jumlah_product']); ?></td>
            <td><span class="badge bg-label-<?php if ($row['poin'] >= 10 ){echo 'success' ;} else {echo 'danger';}?> me-1">"<?php echo ucwords($row['poin']); ?>" Poin Horee</span></td>
            <td>
              <div class="dropdown">
                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                  <i class="bx bx-dots-vertical-rounded"></i>
                </button>
                <!-- Extra Large Modal -->
                <div class="dropdown-menu">
                  <a class="dropdown-item" class="btn btn-primary" type="button" href="<?php echo site_url('laporan_cs/ads_data_edit/'.$row['id_data']); ?>">
                    <i class="bx bx-edit-alt me-1"></i> Edit</a>
                  <a class="dropdown-item" class="btn btn-primary" type="button" data-bs-toggle="modal" style="cursor: pointer;" data-bs-target="#del<?php echo $row['id_data']; ?>">
                    <i class="bx bx-trash me-1"></i> Delete</a>
                </div>
                <!-- Delete -->
                <div class="modal fade" id="del<?php echo $row['id_data']; ?>" tabindex="-1" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="modalCenterTitle">Hapus Data</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body text-center">
                        <h5>Apakah anda yakin ingin menghapus</h5>
                        <p>Data Penjualan <strong><?php echo $row['nama_ads']?></strong> ?</p>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                          Close
                        </button>
                        <a type="button" href="<?php echo site_url('laporan_cs/ads_data_del/'.$row['id_data']); ?>" class="btn btn-primary">Hapus</a>
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
        <tfoot>
            <tr>
                <th>Nama</th>
                <th>Tanggal</th>
                <th>Product</th>
                <th>Total Item</th>
                <th>Poin</th>
                <th>Opsi</th>
            </tr>
        </tfoot>
        </table>
    </div>
  </div>
  </div>
</div>








