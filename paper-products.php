<!DOCTYPE html>
<html lang="zxx">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="description" content="Eden Travel Template">

  <meta name="author" content="Themefisher.com">

  <title>Kingpack Group</title>

  <!-- Mobile Specific Meta-->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php include 'include/common-styles.html' ?>

</head>

<body>

  <!-- Header Start -->
  <?php include 'include/header.php' ?>
  <!-- Header Close -->

  <div class="main-wrapper ">
    <section class="overly" style="background: url(images/products/paper-products/bg-1.jpg)no-repeat fixed center;background-size: cover;">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h1 class="text-white py-100">Paper Products</h1>
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
              <a href="#" class="text-white h6">Paper Products</a>

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
              <div class="row">
                <div class="col-sm-12 col-12 col-lg-4 col-md-6">
                  <figure class="ed-room position-relative mb-4 mt-0-highlight featured-room overflow-hidden">
                    <img src="images/products/paper-products/paper-cups.jpg" alt="image" class="img-fluid w-100">
                    <figcaption class=" ">
                      <h6 class="headline"><a href="paper-cups.php" data-toggle="tooltip" data-placement="top"
                          title="Paper cups">
                          <p>Paper cups</p>
                        </a>
                      </h6>
                      <div class="ed-member"><a class="btn btn-outline-primary btn-sm" href="paper-cups.php"
                          role="button">Explore</a></div>
                    </figcaption>
                  </figure>
                </div>
                <div class="col-sm-12 col-12 col-lg-4 col-md-6">
                  <figure class="ed-room position-relative mb-4 mt-0-highlight featured-room overflow-hidden">
                    <img src="images/products/paper-products/ice-cream-cups.jpg" alt="image" class="img-fluid w-100">
                    <figcaption class=" ">
                      <h6 class="headline"><a href="ice-cream-cups.php" title="Ice cream Cups">
                          <p>Ice cream Cups</p>
                        </a>
                      </h6>
                      <div class="ed-member"><a class="btn btn-outline-primary btn-sm" href="ice-cream-cups.php"
                          role="button">Explore</a></div>
                    </figcaption>
                  </figure>
                </div>
                <div class="col-sm-12 col-12 col-lg-4 col-md-6">
                  <figure class="ed-room position-relative mb-4 mt-0-highlight featured-room overflow-hidden">
                    <img src="images/products/paper-products/bamboo-wooden.jpg" alt="image" class="img-fluid w-100">
                    <figcaption class=" ">
                      <h6 class="headline"><a href="bamboo-wooden.php" title="Bamboo|Wooden Products">
                          <p>Bamboo | Wooden Products</p>
                        </a>
                      </h6>
                      <div class="ed-member"><a class="btn btn-outline-primary btn-sm" href="bamboo-wooden.php"
                          role="button">Explore</a></div>
                    </figcaption>
                  </figure>
                </div>
                <div class="col-sm-12 col-12 col-lg-4 col-md-6">
                  <figure class="ed-room position-relative mb-4 mt-0-highlight featured-room overflow-hidden">
                    <img src="images/products/paper-products/popcorn-cups.jpg" alt="image" class="img-fluid w-100">
                    <figcaption class=" ">
                      <h6 class="headline">
                        <a href="pop-corn-cake-cups.php" title="Popcorn | Cake Cups">
                          <p>Popcorn | Cake Cups</p>
                        </a>
                      </h6>
                      <div class="ed-member"><a class="btn btn-outline-primary btn-sm" href="pop-corn-cake-cups.php"
                          role="button">Explore</a></div>
                    </figcaption>
                  </figure>
                </div>
                <div class="col-sm-12 col-12 col-lg-4 col-md-6">
                  <figure class="ed-room position-relative mb-4 mt-0-highlight featured-room overflow-hidden">
                    <img src="images/products/paper-products/other-products.jpg" alt="image" class="img-fluid w-100">
                    <figcaption class=" ">
                      <h6 class="headline">
                        <a href="other-paper-products.php" data-toggle="tooltip" data-placement="top" title="Other Products
                          ">
                          <p>Other Products</p>
                        </a>
                      </h6>
                      <div class="ed-member"><a class="btn btn-outline-primary btn-sm" href="other-paper-products.php"
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
      addRemoveActiveClass("products", "paper");
    });
  </script>
</body>

</html>