            <!-- Footer -->
            <footer class="content-footer footer bg-footer-theme">
              <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
                <div class="mb-2 mb-md-0">
                  ©
                  <script>
                    document.write(new Date().getFullYear());
                  </script>
                  , DESIGN and Create ❤️ by
                  <a href="https://www.instagram.com/piyambaan_/?hl=id" target="_blank" class="footer-link fw-bolder">Ily_Dev</a>
                </div>
                <div>
                  <a href="<?=site_url()?>https://themeselection.com/license/" class="footer-link me-4" target="_blank">License</a>
                  <a href="<?=site_url()?>https://themeselection.com/" target="_blank" class="footer-link me-4">More Themes</a>

                  <a href="<?=site_url()?>https://themeselection.com/demo/sneat-bootstrap-html-admin-template/documentation/" target="_blank" class="footer-link me-4" >Documentation</a>

                  <a href="<?=site_url()?>https://github.com/themeselection/sneat-html-admin-template-free/issues" target="_blank" class="footer-link me-4" >Support</a>
                </div>
              </div>
            </footer>
            <!-- / Footer -->

            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->
    <!-- JQUERY -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script> -->
    <script src="https://code.jquery.com/jquery-3.5.1.js" crossorigin="anonymous"></script>
    

    

<!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="<?=base_url()?>public/dashboard/assets/vendor/libs/jquery/jquery.js"></script>
    <script src="<?=base_url()?>public/dashboard/assets/vendor/libs/popper/popper.js"></script>
    <script src="<?=base_url()?>public/dashboard/assets/vendor/js/bootstrap.js"></script>
    <script src="<?=base_url()?>public/dashboard/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="<?=base_url()?>public/dashboard/assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="<?=base_url()?>public/dashboard/assets/vendor/libs/apex-charts/apexcharts.js"></script>

    <!-- Main JS -->
    <script src="<?=base_url()?>public/dashboard/assets/js/main.js"></script>

    <!-- Page JS -->
    <script src="<?=base_url()?>public/dashboard/assets/js/dashboards-analytics.js"></script>

    <!-- toast -->
    <script src="<?=base_url()?>public/dashboard/assets/js/ui-toasts.js"></script>

    <!-- popover -->
    <script src="<?=base_url()?>public/dashboard/assets/js/ui-popover.js"></script>

    <!-- modal -->
    <script src="<?=base_url()?>public/dashboard/assets/js/ui-modals.js"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>

    
    
    <!-- alert -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
    <!-- user -->
    <script type="text/javascript" charset="utf8" src="<?=base_url()?>public/dashboard/assets/js/pages-account-settings-account.js"></script>

    <!-- Include the Quill library -->
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>

    <!-- select2 -->
    <script src="<?=base_url()?>public/select/js/jquery.multi-select.js" type="text/javascript"></script>
    <!-- dropify -->
    <script type="text/javascript" charset="utf8" src="<?=base_url()?>public/dropify/dist/js/dropify.min.js"></script>
    <script type="text/javascript" charset="utf8" src="<?=base_url()?>public/dropify/dist/js/dropify.js"></script>
    
    <!-- tabel -->
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/dataTables.semanticui.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.semanticui.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fomantic-ui/2.8.8/semantic.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.4.0/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.4.0/js/responsive.semanticui.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.colVis.min.js"></script>


    <script>
     

// $(document).ready(function () {
//   bsCustomFileInput.init();
// });

// dropify
$(document).ready(function() {

  var success = "<?php echo $this->session->flashdata('success') ?>";
  var s_success = "<?php echo $this->session->flashdata('s_success') ?>";
  var error = "<?php echo $this->session->flashdata('error') ?>";
  console.log(success);
  if (success) {
    Swal.fire({
      icon: 'success',
      title: 'Berhasil',
      text: success,
    })
  } else if (error) {
    Swal.fire({
  icon: 'error',
  title: 'Oops...',
  text: error,
    })
  }else if (s_success) {
    Swal.fire({
    position: 'top-end',
    icon: 'success',
    title: 'disimpan',
    showConfirmButton: false,
    timer: 1500
  })
  }

  var remove = "<?php echo $this->session->unset_userdata('success') ?>";
  });

  // SEARCH
  $(document).ready(function(){
    $("#search").on("keyup", function() {
      var value = $(this).val().toLowerCase();
      $("#example tr").filter(function() {
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
      });
    });
  });

  

   // quil
   $('#richtext').summernote({
        placeholder: 'Input Sometext',
        tabsize: 2,
        height: 120,
        toolbar: [
          ['style', ['style']],
          ['font', ['bold', 'underline', 'clear']],
          ['color', ['color']],
          ['para', ['ul', 'ol', 'paragraph']],
          ['table', ['table']],
          ['insert', ['link', 'picture', 'video']],
          ['view', ['fullscreen', 'codeview', 'help']]
        ]
      });


      // select2
      $('#my-select').multiSelect();



      // Basic
      $(document).ready(function(){
      $('.dropify').dropify({
                    messages: {
                        'default': 'Drop or Select',
                        'replace': 'Drag and drop or click to replace',
                        'remove':  'Remove',
                        'error':   'Ooops, something wrong happended.'
                    }
                });
                $('.dropify').dropify({
                    tpl: {
                        wrap:            '<div class="dropify-wrapper"></div>',
                        loader:          '<div class="dropify-loader"></div>',
                        message:         '<div class="dropify-message"><span class="file-icon"/> <p>{{ default }}</p></div>',
                        preview:         '<div class="dropify-preview"><span class="dropify-render"></span><div class="dropify-infos"><div class="dropify-infos-inner"><p class="dropify-infos-message">{{ replace }}</p></div></div></div>',
                        filename:        '<p class="dropify-filename"><span class="file-icon"></span> <span class="dropify-filename-inner"></span></p>',
                        clearButton:     '<button type="button" class="dropify-clear">{{ remove }}</button>',
                        errorLine:       '<p class="dropify-error">{{ error }}</p>',
                        errorsContainer: '<div class="dropify-errors-container"><ul></ul></div>'
                    }
                });

                // Used events
                var drEvent = $('#input-file-events').dropify();

                drEvent.on('dropify.beforeClear', function(event, element){
                    return confirm("Do you really want to delete \"" + element.file.name + "\" ?");
                });

                drEvent.on('dropify.afterClear', function(event, element){
                    alert('File deleted');
                });

                drEvent.on('dropify.errors', function(event, element){
                    console.log('Has Errors');
                });

                var drDestroy = $('#input-file-to-destroy').dropify();
                drDestroy = drDestroy.data('dropify')
                $('#toggleDropify').on('click', function(e){
                    e.preventDefault();
                    if (drDestroy.isDropified()) {
                        drDestroy.destroy();
                    } else {
                        drDestroy.init();
                    }
                })
            });

            // tabel
            // cs
            $(document).ready(function() {
                var table = $('#cs_tabel').DataTable( 
                  {
                    lengthChange: false,
                    buttons: [
                        {
                            extend: 'csv',
                            split: [ 'pdf', 'excel'],
                        }
                        
                    ],
                    order: [[ 2, 'desc' ], [ 0, 'asc' ]]
                    
                });
            
                table.buttons().container()
                    .appendTo( $('div.eight.column:eq(0)', table.table().container()) );
            } );

            // omset
            $(document).ready(function() {
                var table = $('#tabel_omset').DataTable( 
                  {
                    lengthChange: false,
                    buttons: [
                        {
                            extend: 'csv',
                            split: [ 'pdf', 'excel'],
                        }
                        
                    ],
                    order: [[ 2, 'desc' ], [ 0, 'asc' ]]
                    
                });
            
                table.buttons().container()
                    .appendTo( $('div.eight.column:eq(0)', table.table().container()) );
            } );

            // hasil
            $(document).ready(function() {
                $(".calculate").click(function() {      
                    
                    var tf = $('input[name="total_tf"]').val();
                    var okr = $('input[name="ongkos_kirim"]').val();
                    var total = tf - okr;
                    $("#hasil_bersih").val(total);
                });
            });

            // hasil
            $(document).ready(function() {
                $(".calculate2").click(function() {      
                    
                    var tf = $('input[name="total_tf"]').val();
                    var okr = $('input[name="ongkos_kirim"]').val();
                    var total = tf - okr;
                    $("#hasil_bersih").val(total);
                });
            });




            // hasil
            $(document).ready(function() {
                $(".calculate3").click(function() {      
                    
                    var hp = $('input[name="harga_product"]').val();
                    var jml = $('input[name="jumlah_product"]').val();
                    var total = hp * jml;
                    $("#hasil_bersih").val(total);
                });
            });


            // poin
            $(document).ready(function() {
            $(".jumlah_poin").click(function() {      
                
                var jmlh = $('input[name="jumlah_product"]').val();
                var poin = $('input[name="poin_product"]').val();
                var total_poin = jmlh * poin;
                $("#total_poin").val(total_poin);
            });
        });
    </script>
    