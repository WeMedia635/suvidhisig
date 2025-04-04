  <!-- ======= Footer ======= -->
  <footer id="footer" style="background: #fff;">

    <div class="footer-top p-0" style="background: #fff;">

      <div class="container">

        <div class="row justify-content-center">
          <div class="col-lg-6">
            <p style="font-size:12px">Project by</p>
            <a href="index.php" class="scrollto footer-logo"><img src="assets/img/SuvidhiLogo.svg" alt="" width="30%"></a>
            <!-- <h3>Suvidhi Ventures</h3> -->
            <p style="font-size:12px">Discover a world of unparalleled COMFORT</p>
          </div>
        </div>

      </div>
    </div>

   
  </footer><!-- End Footer -->


  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>


        <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <!--<script src="assets/vendor/php-email-form/validate.js"></script>-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

  <script>
     function toggleNavbarHide() {
    var elementToHide = document.querySelector('.navbar-hide');
    elementToHide.classList.add('hidden');
    // elementToHide.style.display = "inline-block"; 
    if (window.location.pathname == '/suvidhi/' || window.location.pathname == '/suvidhi/index.php') {
    
      elementToHide.classList.remove('hidden');
    } else {
      elementToHide.classList.add('hidden');
    
    }
  }

  window.onload = toggleNavbarHide;
  </script>
  </body>