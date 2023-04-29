<!-- Content wrapper -->
<div class="content-wrapper">
  <!-- Content -->

  <div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Tables /</span> <?= $page_title?></h4>
  <!-- Hoverable Table rows -->
  <div class="card">
      <div class="row">
        <div class="col-10">
          <h5 class="card-header mb-3">Laporan Penjualan Marketing</h5>
        </div>
        <div class="col-2 py-3 flex-end">
          <a type="button" href="<?=base_url('laporan_cs/m_laporan_add')?>" class="btn btn-primary"><span><i class='bx bx-bookmark-plus'></i></span> Tambah Data</a>
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
            <th>Pembeli</th>
            <th>Alamat</th>
            <th>Telpon</th>
            <th>Product</th>
            <th>Marketplace</th>
            <th>Transfer</th>
            <th>Ongkir</th>
            <th>Hasil</th>
            <th>Opsi</th>
          </tr>
        </thead>
        <tbody class="table-border-bottom-0">
          <?php
          foreach ($lap_cs_m as $key => $row)
          {
            ?>
          <tr>
            <td><?php echo ucwords($row['nama_sales']); ?></td>
            <td><?php echo ucwords( longdate_indo($row['tanggal'])); ?></td>
            <td><?php echo ucwords($row['nama_pembeli']); ?></td>
            <td><?php echo ucwords($row['alamat_pembeli']); ?></td>
            <td><?php echo ucwords($row['hp']); ?></td>
            <td>
              <span type="button" 
                    class="badge bg-label-success me-1"
                    data-bs-toggle="popover" 
                      data-bs-offset="0,14" 
                      data-bs-placement="top" 
                      data-bs-html="true" 
                      data-bs-content="<p><?php if ($row['p1'] != ''){
                                                      echo '1. ' .$row['p1'].'</br>';
                                                    }
                                                    if ($row['p2'] != ''){
                                                      echo '2. ' .$row['p2'].'</br>';
                                                    }
                                                    if ($row['p3'] != ''){
                                                      echo '3. ' .$row['p3'].'</br>';
                                                    }
                                                    if ($row['p4'] != ''){
                                                      echo '4. ' .$row['p4'].'</br>';
                                                    }
                                                    if ($row['p5'] != ''){
                                                      echo '5. ' .$row['p5'].'</br>';
                                                    }
                                                    if ($row['p6'] != ''){
                                                      echo '6. ' .$row['p6'].'</br>';
                                                    }
                                                    if ($row['p7'] != ''){
                                                      echo '7. ' .$row['p7'].'</br>';
                                                    }
                                                    if ($row['p8'] != ''){
                                                      echo '8. ' .$row['p8'].'</br>';
                                                    }
                                                    if ($row['p9'] != ''){
                                                      echo '9. ' .$row['p9'].'</br>';
                                                    }
                                                    if ($row['p10'] != ''){
                                                      echo '10. ' .$row['p10'].'</br>';
                                                    }
                                            
                                          ?></p>" 
                      title="<?php if ($row['p1'].$row['p2'].$row['p3'].$row['p4'].$row['p5'].$row['p6'].$row['p7'].$row['p8'].$row['p9'].$row['p10'] == ''){
                        echo 'Belum ada Produk';  
                      }else{
                        echo 'Produk dibeli';
                      }
                        ?>" >Klik Produk
              </span>
            </td>
            <td><?php echo ucwords($row['market']); ?></td>
            <td>Rp. <?php echo ucwords($row['total_tf']); ?></td>
            <td>Rp. <?php echo ucwords($row['ongkos_kirim']); ?></td>
            <td>Rp. <?php echo ucwords($row['hasil_bersih']); ?></td>
            <td>
              <div class="dropdown">
                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                  <i class="bx bx-dots-vertical-rounded"></i>
                </button>
                <!-- Extra Large Modal -->
                <div class="dropdown-menu">
                  <a class="dropdown-item" class="btn btn-primary" type="button" href="<?php echo site_url('laporan_cs/m_laporan_edit/'.$row['id_laporan']); ?>">
                    <i class="bx bx-edit-alt me-1"></i> Edit</a>
                  <a class="dropdown-item" class="btn btn-primary" type="button" data-bs-toggle="modal" style="cursor: pointer;" data-bs-target="#del<?php echo $row['id_laporan']; ?>">
                    <i class="bx bx-trash me-1"></i> Delete</a>
                </div>
                <!-- Delete -->
                <div class="modal fade" id="del<?php echo $row['id_laporan']; ?>" tabindex="-1" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="modalCenterTitle">Hapus Laporan</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body text-center">
                        <h5>Apakah anda yakin ingin menghapus</h5>
                        <p>Laporan <strong><?php echo $row['nama_sales']?></strong> ?</p>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                          Close
                        </button>
                        <a type="button" href="<?php echo site_url('laporan_cs/m_laporan_del/'.$row['id_laporan']); ?>" class="btn btn-primary">Hapus</a>
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
                <th>Pembeli</th>
                <th>Alamat</th>
                <th>Telpon</th>
                <th>Product</th>
                <th>Marketplace</th>
                <th>Transfer</th>
                <th>Ongkir</th>
                <th>Hasil</th>
                <th>Opsi</th>
            </tr>
        </tfoot>
        </table>
    </div>
  </div>
  </div>
</div>




