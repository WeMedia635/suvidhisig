<?php include 'header.php' ?>
<?php include 'navbar.php' ?>


<style>
    #banner {
        margin-top: 90px;
    }

    .logo-text {
        width: 20%;
        position: absolute;
        top: 10vw;
        right: 10%;
        /* transform: translate(-50%, -50%); */
        z-index: 1;
    }

    .logo-text h3 {
        color: #9b9b9b;
        font-size: 2.5rem;
        font-weight: 400;
        letter-spacing: -1px;
    }

    .logo-text h3 span {
        color: #338560;
        font-size: 1.9rem;
        font-weight: 700;
        letter-spacing: normal;
        margin-top: 50px;
    }

    .logo-below {
        padding-top: 15px;
    }

    .logo-below h3 {
        color: #9b9b9b;
        font-size: 1.4rem;
        font-weight: 400;
        letter-spacing: -1px;
    }

    .logo-below h3 span {
        color: #338560;
        font-size: 1.4rem;
        font-weight: 700;
        letter-spacing: normal;
        margin-top: 50px;
    }

    @media screen and (max-width: 768px) {
        #plotting {
            min-height: 70vh !important;
        }
    }

    #plotting {
        width: 100%;
        min-height: 80vh;
        position: relative;
        padding: 80px 0;
        display: flex;
        justify-content: center;
        background: url(./assets/img/Elite/KRK\ Elite\ 99\ -\ plotting-bg.png) no-repeat center center;
        background-size: cover;
        color: #338560;
    }

    #plotting h2 {}
</style>
<section id="banner" class="p-0">
    <div class="container-fluid p-0">
        <div class="row g-0 align-items-center">
            <div class="col-lg-12 col-md-12 position-relative d-lg-block d-none">
                <img src="assets/img/Elite/KRK Elite 99 - banner.jpg" alt="" class="img-fluid" data-aos="fade-right">
                <div class="position-absolute logo-text">
                    <img src="./assets/img/Elite/el-1.svg" alt="" class="img-fluid" data-aos="fade-left">
                    <h3 data-aos="fade-up">
                        <span>PREMIUM NA-44 PLOTS</span>
                    </h3>
                </div>
            </div>
        </div>
        <div class="row g-0 align-items-center d-lg-none d-block">
            <div class="col-lg-10 col-md-9">
                <img src="assets/img/Elite/KRK Elite 99 - banner.jpg" alt="Your Image" class="img-fluid">
            </div>
            <div class="col-lg-2 col-md-3 text-center logo-below">
                <img src="./assets/img/Elite/el-1.svg" alt="" class="img-fluid w-25" data-aos="fade-left">
                <h3 data-aos="fade-up">
                    <span>PREMIUM NA-44 PLOTS</span>
                </h3>
                <!-- <p>Your text goes here.</p> -->
            </div>
        </div>
    </div>
</section>
<section id="plotting" class="section dark-background">

    <div class="container text-center">
        <div class="row justify-content-center aos-init aos-animate">
            <div class="col-lg-8">
                <h2 data-aos="fade-up">OWN A PLOT
                    YOU ALWAYS WANTED</h2>
                <p data-aos="fade-up">KRK ELlTE 99 surrounded by beutifying greenery, lives the countless dreams of an organized life!
                     Laden with all the comfort and convenience you need in your life with a touch of modern amenities...</p>
                <h2 data-aos="fade-up">Isn't this a dream in itself?</h2>
            </div>
        </div>
    </div>

</section>
<style>
    /* From Uiverse.io by neerajbaniwal */
    /* From Uiverse.io by mrhyddenn */
    .button {
        -moz-appearance: none;
        -webkit-appearance: none;
        appearance: none;
        border: none;
        background: none;
        color: #0f1923;
        cursor: pointer;
        position: relative;
        padding: 8px;
        margin-bottom: 20px;
        text-transform: uppercase;
        font-weight: bold;
        font-size: 14px;
        transition: all .15s ease;
    }

    .button::before,
    .button::after {
        content: '';
        display: block;
        position: absolute;
        right: 0;
        left: 0;
        height: calc(50% - 5px);
        border: 1px solid #7D8082;
        transition: all .15s ease;
    }

    .button::before {
        top: 0;
        border-bottom-width: 0;
    }

    .button::after {
        bottom: 0;
        border-top-width: 0;
    }

    .button:active,
    .button:focus {
        outline: none;
    }

    .button:active::before,
    .button:active::after {
        right: 3px;
        left: 3px;
    }

    .button:active::before {
        top: 3px;
    }

    .button:active::after {
        bottom: 3px;
    }

    .button_lg {
        position: relative;
        display: block;
        padding: 10px 20px;
        color: #fff;
        background-color: #0f1923;
        overflow: hidden;
        box-shadow: inset 0px 0px 0px 1px transparent;
    }

    .button_lg::before {
        content: '';
        display: block;
        position: absolute;
        top: 0;
        left: 0;
        width: 2px;
        height: 2px;
        background-color: #0f1923;
    }

    .button_lg::after {
        content: '';
        display: block;
        position: absolute;
        right: 0;
        bottom: 0;
        width: 4px;
        height: 4px;
        background-color: #0f1923;
        transition: all .2s ease;
    }

    .button_sl {
        display: block;
        position: absolute;
        top: 0;
        bottom: -1px;
        left: -8px;
        width: 0;
        background-color: #30835f;
        transform: skew(-15deg);
        transition: all .2s ease;
    }

    .button_text {
        position: relative;
    }

    .button:hover {
        color: #0f1923;
    }

    .button:hover .button_sl {
        width: calc(100% + 15px);
    }

    .button:hover .button_lg::after {
        background-color: #fff;
    }
</style>
<!-- ======= About Us Section ======= -->
<section id="about" class="about">
    <div class="container">

        <div class="section-title" data-aos="fade-up">
            <h2>Amenities</h2>
            <!-- <p>Magnam dolores commodi suscipit eius consequatur</p> -->
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-10" data-aos="fade-up">
                <div class="image">
                    <img src="assets/img/Elite/ammenities.png" class="img-fluid" alt="">
                </div>
            </div>

        </div>

    </div>
</section>
<!-- End About Us Section -->



<section id="contact" class="contact position-relative" style="background: #30835f;">
    <div class="container">

        <div class="section-title">
            <h2 class="text-white">Location</h2>
            <!-- <p>Magnam dolores commodi suscipit eius consequatur ex aliquid fuga eum quidem</p> -->
        </div>

        <div class="row justify-content-center">

            <div class="col-lg-8" data-aos="fade-up">
                <a href="./assets/img/Elite/KRK Elitemap.png" title="Site Location" data-gallery="portfolio-lightbox" class="portfolio-lightbox">
                    <img src="./assets/img/Elite/KRK Elitemap.png" alt="" href="https://maps.app.goo.gl/rngNZEBSyB4G1jDeA" class="img-fluid">
                </a>

                <a href="https://maps.app.goo.gl/rngNZEBSyB4G1jDeA" target="_blank">
                    <p class="text-center text-white text-bold pt-3">Site Address : Gut No. 43, 44 and 45, Gandheli, Chhatrapati Sambhaji Nagar</p>
                </a>
            </div>
            <div class="col-lg-5 mt-3">
                <img src="./assets/img/Elite/KRK Elite 99 - Projected-by.svg" alt="" class="img-fluid" data-aos="fade-up">
            </div>

            <div class="col-lg-8 mt-5 mt-lg-0">



            </div>

        </div>

        <div class="download my-5 text-center">
            <button class="button" data-bs-toggle="modal" data-bs-target="#exampleModal">
                <span class="button_lg">
                    <span class="button_sl"></span>
                    <span class="button_text">Download Brochure</span>
                </span>
            </button>
        </div>

    </div>
</section>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel"></h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <section id="contact" class="contact p-0">
                    <div class="container">
                        <div class="section-title">
                            <h2>Download Brochure</h2>
                        </div>
                    </div>

                    <div class="row">

                        <div class="col-lg-12 mt-5 mt-lg-0">

                            <form action="forms/handler.php" method="POST" role="form" class=" aos-init aos-animate" data-aos="fade-left">
                                <div class="row">
                                    <input type="hidden" name="brochure" value="">
                                    <div class="col-md-12 mb-3 form-group">
                                        <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required="">
                                    </div>
                                    <div class="col-md-12 mb-3 form-group ">
                                        <input type="tel" class="form-control" name="mobile_number" id="mobile" placeholder="Mobile Number" required="">
                                    </div>
                                    <div class="col-md-12 mb-3 form-group mt-3 mt-md-0">
                                        <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required="">
                                    </div>
                                </div>

                                <select name="inqure" class="form-select mb-3 col-md-12" aria-label="Default select example">
                                    <option selected="" value="Elite 99">Elite 99 Plots</option>
                                    <!-- <option value="Commercial">Commercial</option>
                                    <option value="Residential">Residential</option> -->
                                </select>

                                <div class="modal-footer text-center justify-content-center">
                                    <div class="text-center"><button type="submit" style="    background: #1d73a2;
    border: 0;
    padding: 10px 24px;
    color: #fff;
    transition: 0.4s;
    border-radius: 4px;">Download Brochure</button></a></div>
                                </div>
                            </form>

                        </div>

                    </div>
                </section>
            </div>

        </div>
    </div>
</div>


<?php include 'footer.php' ?>