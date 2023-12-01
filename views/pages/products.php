<?php
require_once('./client/includes/header.php');
require_once('./client/includes/nave.php');






global $pageData;
//var_dump($pageData);


?>


<div class="ecommerce-homepage pt-5 mb-9">


  <section class="py-0 px-xl-3">

    <div class="container px-xl-0 px-xxl-3">
      <div class="row g-3 mb-9">


        <div class="col-12">

          <img class="img-fluid" src="images/best-electric-car.jpg" alt="" />

        </div>




        <div class="mb-6">
          <div class="d-flex flex-between-center mb-3">
            <h3>Nos voitures</h3><a class="fw-bold d-none d-md-block" href="#!">Explore more<span class="fas fa-chevron-right fs--1 ms-1"></span></a>
          </div>
          <div class="swiper-theme-container products-slider">
            <div class="swiper swiper-container theme-slider" data-swiper='{"slidesPerView":1,"spaceBetween":16,"breakpoints":{"450":{"slidesPerView":2,"spaceBetween":16},"576":{"slidesPerView":3,"spaceBetween":20},"768":{"slidesPerView":4,"spaceBetween":20},"992":{"slidesPerView":5,"spaceBetween":20},"1200":{"slidesPerView":6,"spaceBetween":16}}}'>
              <div class="swiper-wrapper">


                <?php foreach ($pageData['products'] as $product) { ?>

                  <div class="swiper-slide">
                    <div class="position-relative text-decoration-none product-card h-100">
                      <div class="d-flex flex-column justify-content-between h-100">
                        <div>
                          <a href="product/<?php echo $product['id']; ?>">


                            <div class="border border-1 rounded-3 position-relative mb-3">
                              <img class="img-fluid" src="images/<?php echo $product['url_img']; ?>" alt="image introuvable" />
                            </div>


                          </a>
                          <p class="fs--1">
                            <span class="text-500 fw-semi-bold ms-1"><?php echo $product['qtty']; ?> en stock</span>
                          </p>
                        </div>

                        <!-- afficher prix -->
                        <div>
                          <h6 class="text-1100"><?php echo $product['name']; ?></h6>
                          <h3 class="text-1100"><?php echo $product['price']; ?>CAD</h3>

                        </div>
                      </div>
                    </div>
                  </div>
                <?php } ?>
              </div>
            </div>
            <div class="swiper-nav">
              <div class="swiper-button-next"><span class="fas fa-chevron-right nav-icon"></span></div>
              <div class="swiper-button-prev"><span class="fas fa-chevron-left nav-icon"></span></div>
            </div>
          </div><a class="fw-bold d-md-none" href="#!">Explore more<span class="fas fa-chevron-right fs--1 ms-1"></span></a>
        </div>


      </div>
      <!-- end of .container-->

  </section>

</div>

<?php if (isset($errorMessage)) : ?>
  <div class="alert alert-danger" role="alert">
    <?php echo $errorMessage; ?>
  </div>
<?php endif; ?>



<?php
require_once('./client/includes/footer.php');
?>