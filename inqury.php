<?php include 'header1.php' ?>

<!-- ======= Hero Section ======= -->
<section id="heroinqury">
    <div class="container">
      <div class="row  justify-content-center">
        <div class="col-lg-8">
        <section id="contact" class="contact p-0">
          <div class="container">
            <div class="section-title">
            
            </div>
          </div>

          <div class="row">

            <div class="col-lg-12 mt-5 mt-lg-0" style="background: #fff;">
              <h2 class="text-center mt-5" style="color: #fff; background:#d2ae6d; font-family: 'Catamaran', sans-serif;">Download Brochure</h2>
              <form action="sendmail.php" method="POST"  class="php-email-form" data-aos="fade-left">
                <div class="row">
                <input type="hidden" name="brochure" value="">
                  <div class="col-md-12 mb-3 form-group">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                  </div>
                  <div class="col-md-12 mb-3 form-group ">
                  <input type="tel" class="form-control" name="mobile_number" id="mobile" placeholder="Mobile Number" required>
                </div>
                  <div class="col-md-12 mb-3 form-group mt-3 mt-md-0">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                  </div>
                </div>
                
                <select name="inqure" class="form-select mb-3 col-md-12" aria-label="Default select example">
                  <option selected>For Inquire</option>
                  <option value="Commercial">Commercial</option>
                  <option value="Residential">Residential</option>
                </select>

                <div class="modal-footer text-center justify-content-center">
                  <div class="text-center"><button type="submit">Submit</button></div>
                </div>
              </form>

            </div>

          </div>
          </section>
        </div>
      </div>
    </div>
  </section>
<!-- End Hero -->






<?php include 'footer1.php' ?>

<script>
  var swiper = new Swiper('.swiper-container', {
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
  });
</script>

</html>