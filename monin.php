<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="description"
        content="Explore food products from our catalogue. We've products like Appy Fiz, Kara Coco Coconut Water, Frooti, Olymbic Dry Cake etc.">

    <title>Monin - Kingpack Group | Think food</title>

    <!-- Mobile Specific Meta-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- bootstrap.min css -->
    <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css">
    <!-- Ionic Icon Css -->
    <link rel="stylesheet" href="plugins/Ionicons/css/ionicons.min.css">
    <!-- Flaticon Css -->
    <link rel="stylesheet" href="plugins/flaticon/font/flaticon.css">
    <!-- animate.css -->
    <link rel="stylesheet" href="plugins/animate-css/animate.css">
    <link rel="stylesheet" href="plugins/nice-select/nice-select.css">
    <!-- Magnify Popup -->
    <link rel="stylesheet" href="plugins/magnific-popup/dist/magnific-popup.css">
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="plugins/slick-carousel/slick/slick.css">
    <link rel="stylesheet" href="plugins/slick-carousel/slick/slick-theme.css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">

    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="images/logo-food-cropped.png" sizes="32x32">

</head>

<body>

    <!-- Header Start -->
    <header class="navigation">
        <!-- <div class="top-header py-2">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-8">
            <div class="top-header-left text-muted">
              Head Office, No.839, Road No.2617, No. 626, Al Akar Al Gharab, Kingdom of Bahrin
            </div>
          </div>
          <div class="col-lg-4">
            <div class="top-header-right float-right">
              <ul class="list-unstyled mb-0">
                <li class="top-contact">
                  <a href="tel:+97335631488"> <i class="ion-android-call mr-2"></i><span class="text-color">+973 35 63
                      14 88</span>
                  </a>
                </li>
                <li class="language ml-3">
                                <select class="country" name="country">
                                  <option>EN</option>
                                  <option>FR</option>
                                  <option>JA</option>
                                  <option>CA</option>
                                  <option>FR</option>
                                </select>
                            </li> 
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div> -->

        <nav class="navbar navbar-expand-lg bg-white w-100 p-0" id="navbar">
            <div class="container">
                <a class="navbar-brand" href="index.html"><img src="images/logo-food.png" alt="Eden"
                        class="img-fluid"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample09"
                    aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="fa fa-bars"></span>
                </button>
                <!--Include menu -start -->
                <?php include 'include/menu.html' ?>
                <!--Include menu -stop -->
            </div>
        </nav>
    </header>
    <!-- Header Close -->

    <div class="main-wrapper ">
        <section class="overly"
            style="background: url(images/food/monin/bg-1.jpg)no-repeat center;background-size: contain;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h1 class="text-white py-100">Monin</h1>
                    </div>
                </div>
            </div>

            <div class="container-fluid page-border-top">
                <div class="row ">
                    <div class="col-lg-12 text-center">
                        <div class="page-breadcumb py-2">
                            <a href="index.php" class="text-blue h6">Home</a>
                            <span><i class="ion-arrow-right-b text-white mx-1" aria-hidden="true"></i></span>
                            <a href="food.php" class="text-blue h6">Food</a>
                            <span><i class="ion-arrow-right-b text-white mx-1 h6" aria-hidden="true"></i></span>
                            <a href="#" class="text-white h6">Monin</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Wrapper Start -->
        <section class="room section">
            <div class="container">

                <div class="row">
                    <!-- Include product catefories- start-->
                    <?php include 'include/food-categories.html' ?>
                    <!-- Include product catefories- end-->
                    <div class="col-md-6 col-sm-6 col-lg-8">
                        <div class="comment-form pl-4">
                            <div class="row product-desc">
                                <div class="col-md-4 col-lg-4 gallery-item">

                                    <h6>Syrup</h6>
                                    <div class="gallery-item ">
                                        <div class="food-item-slider">
                                            <img class="hero-slider-item" src="images/food/monin/syrup.jpg" />                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8 col-lg-8">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th scope="col">Flavour</th>
                                                <th scope="col" colspan="2">Qty</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">syrup</th>
                                                <td>700 ml</td>
                                                <td>1 ltr</td>
                                            </tr>                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <br />
                            <div class="row product-desc">
                                <div class="col-md-4 col-lg-4 gallery-item">

                                    <h6>Pure</h6>
                                    <div class="gallery-item ">
                                        <div class="food-item-slider">
                                            <img class="hero-slider-item" src="images/food/monin/puree-1.jpg" />
                                            <img class="hero-slider-item" src="images/food/monin/puree-2.jpg" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8 col-lg-8">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th scope="col">Flavour</th>
                                                <th scope="col" colspan="2">Qty</th>
                                            </tr>
                                        </thead>
                                        <tbody>                                            
                                            <tr>
                                                <th scope="row">puree</th>
                                                <td>700 ml</td>
                                                <td>1 ltr</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <br />
                            <div class="row product-desc">
                                <div class="col-md-4 col-lg-4 gallery-item">

                                    <h6>Monin Souse</h6>
                                    <div class="gallery-item ">
                                        <div class="food-item-slider">
                                            <img class="hero-slider-item" src="images/food/monin/souce-black-chocolate.jpg" />
                                            <img class="hero-slider-item" src="images/food/monin/souce-carmel.jpg" />
                                            <img class="hero-slider-item" src="images/food/monin/souce-white-chocolate.jpg" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8 col-lg-8">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th scope="col">Flavour</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">dark chocolate</th>
                                            </tr>
                                            <tr>
                                                <th scope="row">white chocolate</th>
                                            </tr>
                                            <tr>
                                                <th scope="row">caramel</th>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <br />
                            <div class="row product-desc">
                                <div class="col-md-4 col-lg-4 gallery-item">

                                    <h6>Monin - Frappe</h6>
                                    <div class="gallery-item ">
                                        <div class="food-item-slider">
                                            <img class="hero-slider-item" src="images/food/monin/chocolate-frappe.jpg" />
                                            <img class="hero-slider-item" src="images/food/monin/cofee-frappe.jpg" />
                                            <img class="hero-slider-item" src="images/food/monin/nondiary-frappe.jpg" />
                                            <img class="hero-slider-item" src="images/food/monin/vanilla-frappe.jpg" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8 col-lg-8">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th scope="col">Flavour</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">vannila</th>
                                            </tr>
                                            <tr>
                                                <th scope="row">chocolate</th>
                                            </tr>
                                            <tr>
                                                <th scope="row">coffee</th>
                                            </tr>
                                            <tr>
                                                <th scope="row">non dairy</th>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- footer Start -->
        <?php include 'include/food-footer.html' ?>
        <!-- footer End -->
    </div>

    <!-- Main jQuery -->
    <script src="plugins/jquery/jquery.js"></script>
    <script src="plugins/jquery/jquery.back-to-top.js"></script>
    <!-- Bootstrap 3.1 -->
    <script src="plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- Owl Carousel -->
    <script src="plugins/slick-carousel/slick/slick.min.js"></script>
    <script src="plugins/nice-select/nice-select.js"></script>
    <!--  -->
    <script src="plugins/magnific-popup/dist/jquery.magnific-popup.min.js"></script>

    <script src="js/script.js"></script>
    <script>
        $(document).ready(function () {
            addRemoveActiveClass("food");
        });
    </script>

</body>

</html>