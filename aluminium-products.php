<!DOCTYPE html>
<html lang="zxx">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="description" content="Eden Travel Template">

  <meta name="author" content="Themefisher.com">

  <title>Eden | Hotel template</title>

  <!-- Mobile Specific Meta-->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php include 'include/common-styles.html' ?>

</head>

<body>

  <!-- Header Start -->
  <?php include 'include/header.php' ?>
  <!-- Header Close -->

  <div class="main-wrapper ">
    <section class="overly bg-2">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h1 class="text-white py-100">Aluminium Products</h1>
          </div>
        </div>
      </div>

      <div class="container-fluid page-border-top">
        <div class="row ">
          <div class="col-lg-12 text-center">
            <div class="page-breadcumb py-2">
              <a href="index.php" class="text-blue h6">Home</a>
              <span><i class="ion-arrow-right-b text-white mx-1 h6" aria-hidden="true"></i></span>
              <a href="products.php" class="text-blue h6">Products</a>
              <span><i class="ion-arrow-right-b text-white mx-1 h6" aria-hidden="true"></i></span>
              <a href="#" class="text-white h6">Aluminium Products</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="section room-details ">
      <div class="container">
        <div class="row">
          <!-- Include product catefories- start-->
          <?php include 'include/product-categories.html' ?>
          <!-- Include product catefories- end-->
          <div class="col-lg-8 mb-4 mb-lg-0">
            <div class="container">
              <div class="row featured">
                <div class="col-sm-12 col-12 col-lg-4 col-md-6">
                  <figure class="ed-room position-relative mb-4 mt-0-highlight featured-room overflow-hidden">
                    <img src="images/products/aluminium-products/cling-film.jpg" alt="image" class="img-fluid w-100">
                    <figcaption class=" ">
                    <h6 class="headline"><a href="aluminium-foil-cling-film.php" data-toggle="tooltip" data-placement="top" title="Plastic Cups| Pet Cups">
                        <p>ALUMINIUM FOIL | CLING FILM </p>
                        </a>
                      </h6>
                      <div class="ed-member"><a class="btn btn-outline-primary btn-sm" href="aluminium-foil-cling-film.php"
                          role="button">Explore</a></div>
                    </figcaption>
                  </figure>
                </div>
                <div class="col-sm-12 col-12 col-lg-4 col-md-6">
                  <figure class="ed-room position-relative mb-4 mt-0-highlight featured-room overflow-hidden">
                    <img src="images/products/aluminium-products/alu-container.jpg" alt="image" class="img-fluid w-100">
                    <figcaption class=" ">
                    <h6 class="headline"><a href="aluminium-containers.php" data-toggle="tooltip" data-placement="top" title="Plastic Tubs | Plates">
                        <p>ALUMINIUM CONTAINER - SQUARE | ROUND</p>
                        </a>
                      </h6>
                      <div class="ed-member"><a class="btn btn-outline-primary btn-sm" href="aluminium-containers.php"
                          role="button">Explore</a></div>
                    </figcaption>
                  </figure>
                </div>

                <div class="col-sm-12 col-12 col-lg-4 col-md-6">
                  <figure class="ed-room position-relative mb-4 mt-0-highlight featured-room overflow-hidden">
                    <img src="images/products/aluminium-products/alu-platter.jpg" alt="image" class="img-fluid w-100">
                    <figcaption class=" ">
                    <h6 class="headline"><a href="aluminium-wrap-platter-pot.php" data-toggle="tooltip" data-placement="top" title="Spoon | Cutlery">
                        <p>BURGER FOIL WRAP | ALUMINIUM PLATTER | ALUMINIUM POT</p>
                        </a>
                      </h6>
                      <div class="ed-member"><a class="btn btn-outline-primary btn-sm" href="aluminium-wrap-platter-pot.php"
                          role="button">Explore</a></div>
                    </figcaption>
                  </figure>
                </div>                
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>
  </div>
  </div>
  </section>

  <!-- footer Start -->
  <?php include 'include/footer.html' ?>
  <!-- footer End -->

  </div>

  <?php include 'include/common-scripts.html' ?>
  <script>
        $(document).ready(function () {
            addRemoveActiveClass("products","alu");
        });
    </script>
</body>

</html>