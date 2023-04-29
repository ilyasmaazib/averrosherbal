<footer class="custom_footer py-4">
    <!-- Section: Social media -->
    <section class="head_foot d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
      <!-- Left -->
      <div class="me-5 d-none d-lg-block">
        <span>Get connected with us on social networks:</span>
      </div>
      <!-- Left -->

      <!-- Right -->
      <div>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-facebook-f"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-twitter"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-google"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-instagram"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-linkedin"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-github"></i>
        </a>
      </div>
      <!-- Right -->
    </section>
    <!-- Section: Social media -->

    <!-- Section: Links  -->
    <section class="content_foot">
      <div class="container text-center text-md-start mt-5">
        <!-- Grid row -->
        <div class="row mt-3">
          <!-- Grid column -->
          <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
            <!-- Content -->
            <h6 class="text-uppercase fw-bold mb-4">
              <img src="<?=base_url('/public/assets/img/logo.png')?>" class="image-fluid" alt="logo" style="width: 250px;">
            </h6>
            <p>
              Perusahaan terpercaya bergerak di bidang obat herbal khusus untuk pasangan suami istri.
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">
              Products
            </h6>
            <p>
              <a href="#!" class="text-reset" style="text-decoration: none;">Turtel Oil</a>
            </p>
            <p>
              <a href="#!" class="text-reset" style="text-decoration: none;">Vcare</a>
            </p>
            <p>
              <a href="#!" class="text-reset" style="text-decoration: none;">Design Agency</a>
            </p>
            <p>
              <a href="#!" class="text-reset" style="text-decoration: none;">Store Management</a>
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">
              Useful links
            </h6>
            <p>
              <a href="<?=site_url('page/product')?>" class="text-reset" style="text-decoration: none;">Product</a>
            </p>
            <p>
              <a href="<?=site_url('page/contact')?>" class="text-reset" style="text-decoration: none;">Contact</a>
            </p>
            <p>
              <a href="<?=site_url('page/Career')?>" class="text-reset" style="text-decoration: none;">Career</a>
            </p>
            <p>
              <a href="<?=site_url('page/Blog')?>" class="text-reset" style="text-decoration: none;">Blog</a>
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
            <p><i class="fas fa-home me-3"></i> Karanganyar, DEMAK, INDONESIA</p>
            <p>
              <i class="fas fa-envelope me-3"></i>
              cv.averrosherbal@gmail.com
            </p>
            <p><i class="fas fa-phone me-3"></i> +62 812-3234-8857</p>
            <p><i class="fas fa-print me-3"></i> +62 812-3234-8857</p>
          </div>
          <!-- Grid column -->
        </div>
        <!-- Grid row -->
      </div>
    </section>
    <!-- Section: Links  -->

    <!-- Copyright -->
    <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
      © 2023 Copyright:
      <a class="text-reset fw-bold" href="https://mdbootstrap.com/" style="text-decoration: none;">Averros Web Team</a>
    </div>
    <!-- Copyright -->
  
    <!-- btn whatsapp -->
      <div id="whatsapp-sticky-btn">
        <div class="bubble">
          <p class="bubble-text">Hello, silahkan tekan tombol Whatsapp dibawah ini.</p>
          <a class="btn_bubble text-center" href="<?=site_url('page/contact')?>">Contact us</a>
          <button type="button" class="bubble-close btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <a href="https://api.whatsapp.com/send?phone=085972597122&text=Hello" class="whatsapp-icon">
          <img src="<?=base_url('/public/assets/img/whatsapp-icon/wa.png')?>" class="img-fluid" alt="WhatsApp">
        </a>
      </div>
  </footer>

  <!-- aos -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="http://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
  <script>
    /* Code for changing active 
            link on clicking */
            var btns = 
                $("#offcanvasNavbar .navbar-nav .nav-link");
  
            for (var i = 0; i < btns.length; i++) {
                btns[i].addEventListener("click",
                                      function () {
                    var current = document
                        .getElementsByClassName("active");
  
                    current[0].className = current[0]
                        .className.replace(" active", "");
  
                    this.className += " active";
                });
            }

            // hidden element
  $(window).on('resize', function() {
    if ($(window).width() < 992) {
      $('.misi_1').addClass('hidden');
    } else {
      $('.misi_1').removeClass('hidden');
    }
  });

  </script>
  <!-- YT -->
  <script src="https://apis.google.com/js/platform.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/js/all.min.js" integrity="sha512-naukR7I+Nk6gp7p5TMA4ycgfxaZBJ7MO5iC3Fp6ySQyKFHOGfpkSZkYVWV5R7u7cfAicxanwYQ5D1e17EfJcMA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>

  <!-- aos -->
  <script src="https://cdn.jsdelivr.net/npm/aos@3.0.0-beta.6/dist/aos.js"></script>
  <!-- MDB -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.js" ></script>
  <script src="https://unpkg.com/scrollreveal"></script>
    <script>

    $(document).ready(function() {
    $('.content-link').click(function(e) {
      e.preventDefault();

      $('html, body').animate({
        scrollTop: $('#profile-body').offset().top
      }, 500);
    });
  });

  // product
  $("#btn_contact").click(function() {
    $('html, body').animate({
        scrollTop: $("#nama").offset().top
    }, 100);
  });

  // about
  $("#btn_about").click(function() {
    $('html, body').animate({
        scrollTop: $("#about").offset().top
    }, 100);
  });

  // whatsapp
  var whatsappIcon = document.querySelector(".whatsapp-icon");
  var bubble = document.querySelector(".bubble");
  var closeButton = document.querySelector(".bubble-close");


  closeButton.addEventListener("click", function() {
    bubble.style.display = "none";
  });


  // people says
  $(document).ready(function(){
    $('.reviews-container').owlCarousel({
      items: 1,
      loop: true,
      autoplay: true,
      autoplayTimeout: 3000,
      autoplayHoverPause: true
    });
  });

  $(document).ready(function(){
    $('.owl-carousel').owlCarousel({
      loop:true,
      margin:10,
      responsiveClass:true,
      responsive:{
          0:{
              items:1,
              nav:true
          },
          600:{
              items:3,
              nav:false
          },
          1000:{
              items:5,
              nav:true,
              loop:false
          }
      }
    })
  });
  // ekspand
  function toggleParagraph() {
    var paragraph = document.getElementById("hidden-paragraph");
    var button = document.getElementById("toggle-button");
    if (paragraph.classList.contains("hidden")) {
      paragraph.classList.remove("hidden");
      paragraph.classList.add("show");
      button.innerHTML = "Hide";
    } else {
      paragraph.classList.remove("show");
      paragraph.classList.add("hidden");
      button.innerHTML = "See More";
    }
  }

  

  
// AOS
if (window.matchMedia("(min-width: 992px)").matches) {
  AOS.init();
} else {
  AOS.init({ disable: true });
}


// scrollreveal
ScrollReveal().reveal('.item');
</script>




  

</body>

</html>