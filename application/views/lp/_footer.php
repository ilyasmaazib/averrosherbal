    <!-- Footer Start -->
    <div
      class="container-fluid bg-secondary text-white mt-0 py-5 px-sm-3 px-md-5">
      <div class="row pt-5">
        <div class="col-lg-3 col-md-6 mb-5">
        <a href="<?=site_url('landingpage')?>" class="navbar-brand font-weight-bold text-secondary" style="font-size: 30px"><img src="<?=base_url()?>public/img/logo.png" style="width: 50px; padding-bottom: 10px;  "></img>
          <span class="text-primary"><strong>Averros</strong>Herbal</span>
          </a>
          <p>
            Menjadi Pelopor Perusahaan obat herbal terkemuka yang mampu memberikan solusi dan 
            alternatif dalam peningkatan kualitas kesehatan seksual 
            pasangan suami istri.
          </p>
          <div class="d-flex justify-content-start mt-4">
            <a class="btn btn-outline-primary rounded-circle text-center mr-2 px-0" style="width: 38px; height: 38px" href="#"><i class="fab fa-twitter"></i></a>
            <a class="btn btn-outline-primary rounded-circle text-center mr-2 px-0" style="width: 38px; height: 38px" href="#"><i class="fab fa-facebook-f"></i></a>
            <a class="btn btn-outline-primary rounded-circle text-center mr-2 px-0" style="width: 38px; height: 38px" href="#"><i class="fab fa-linkedin-in"></i></a>
            <a class="btn btn-outline-primary rounded-circle text-center mr-2 px-0" style="width: 38px; height: 38px" href="#"><i class="fab fa-instagram"></i></a>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-5">
          <h3 class="text-primary mb-4">Direct</h3>
          <div class="d-flex">
            <h4 class="fa fa-map-marker-alt text-primary"></h4>
            <div class="pl-3">
              <h5 class="text-white">Alamat</h5>
              <p>Karanganyar, Kab. Demak, Jawa Tengah (59582)</p>
            </div>
          </div>
          <div class="d-flex">
            <h4 class="fa fa-envelope text-primary"></h4>
            <div class="pl-3">
              <h5 class="text-white">Email</h5>
              <p>cv.averrosherbal@gmail.com</p>
            </div>
          </div>
          <div class="d-flex">
            <h4 class="fa fa-phone-alt text-primary"></h4>
            <div class="pl-3">
              <h5 class="text-white">Phone</h5>
              <p>+6281232348857</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-5">
          <h3 class="text-primary mb-4">Quick Links</h3>
          <div class="d-flex flex-column justify-content-start">
            <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Home</a>
            <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>About Us</a>
            <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Our Product</a>
            <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Our Consultant</a>
            <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Our Blog</a>
            <a class="text-white" href="#"><i class="fa fa-angle-right mr-2"></i>Contact Us</a>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-5">
          <h3 class="text-primary mb-4">Newsletter</h3>
          <form action="">
            <div class="form-group">
              <input type="text" class="form-control border-0 py-4" placeholder="Your Name" required="required"/>
            </div>
            <div class="form-group">
              <input type="email" class="form-control border-0 py-4" placeholder="Your Email" required="required"/>
            </div>
            <div>
              <button class="btn btn-primary btn-block border-0 py-3" type="submit">
                Submit Now
              </button>
            </div>
          </form>
        </div>
      </div>
      <div class="container-fluid pt-5" style="border-top: 1px solid rgba(23, 162, 184, 0.2) ;">
        <p class="m-0 text-center text-white">
          &copy;
          <a class="text-primary font-weight-bold" href="#">Averros Herbal</a>.
          All Rights Reserved.

          <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
          Designed by<a class="text-primary font-weight-bold" href="https://htmlcodex.com"> Ilyas Maazib</a>
          <br />Distributed By:
          <a href="https://themewagon.com" target="_blank">Averros Creator</a>
        </p>
      </div>
    </div>
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-primary p-3 back-to-top"><i class="fa fa-angle-double-up"></i></a>
    

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="<?=base_url()?>public/lib/easing/easing.min.js"></script>
    <script src="<?=base_url()?>public/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="<?=base_url()?>public/lib/isotope/isotope.pkgd.min.js"></script>
    <script src="<?=base_url()?>public/lib/lightbox/js/lightbox.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="<?=base_url()?>public/mail/jqBootstrapValidation.min.js"></script>
    <script src="<?=base_url()?>public/mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="<?=base_url()?>public/js/main.js"></script>

    <script>
        jQuery(function($) {
    
    var path = window.location.href; 
     
       $('li a').each(function() {
       
     if (this.href === path) {
        
      $(this).addClass('active');
        
      }
      
    });
  });
        </script>
  </body>
</html>
