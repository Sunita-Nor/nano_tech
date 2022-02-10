<?php
include "layouts/head.php";
require_once 'includes/database.php';
?>

<!-- mobilemenu -->
<?php include "layouts/mobileMenu.php"?>
<!-- mobilemenu / end -->

<!-- site -->
<div class="site">
<!-- mobile site__header -->
<?php include "layouts/mobileNavbar.php"?>
<!-- mobile site__header / end -->

<!-- desktop site__header -->
<?php
include "layouts/navbar.php";
?>
<!-- desktop site__header / end -->

  <!-- site__body -->
  <div class="site__body">

    <!-- .block-slideshow -->
    <?php include "layouts/slideShow.php"?>
    <!-- .block-slideshow / end -->

    <!-- .block-features -->
    <?php include "layouts/features.php"?>
    <!-- .block-features / end -->

    <!-- .speaker Products -->
    <div class="block block-products-carousel" data-layout="grid-5">
      <div class="container">
        <div class="block-header">
          <h3 class="block-header__title">Speaker</h3>
          <div class="block-header__divider"></div>
          <div class="block-header__arrows-list">
            <!--icon เลื่อนหน้า-->
            <button class="block-header__arrow block-header__arrow--left" type="button">
              <svg width="7px" height="11px">
                <use xlink:href="images/sprite.svg#arrow-rounded-left-7x11"></use>
              </svg>
            </button>
            <button class="block-header__arrow block-header__arrow--right" type="button">
              <svg width="7px" height="11px">
                <use xlink:href="images/sprite.svg#arrow-rounded-right-7x11"></use>
              </svg>
            </button>
            <!--icon เลื่อนหน้า end-->
          </div>
        </div>
        <div class="block-products-carousel__slider">
          <div class="block-products-carousel__preloader"></div>
          <div class="owl-carousel">
            <?php
$sql = "SELECT * FROM productmaster LEFT JOIN product_img ON productmaster.pm_id = product_img.pm_id WHERE
                        productmaster.pt_id = 121 GROUP BY productmaster.pm_id ORDER BY productmaster.pm_id DESC LIMIT 5";
$stmt = $pdo->prepare($sql);
$stmt->execute();
while ($result = $stmt->fetch(PDO::FETCH_ASSOC)) {
    ?>
            <div class="block-products-carousel__column">
              <div class="block-products-carousel__cell">
                <div class="product-card">
                  <div class="product-card__image">
                    <a href="productDetails.php">
                      <img class="img-fluid" src="../admin/<?php echo $result["img_name"]; ?>" alt="">
                    </a>
                  </div>
                  <div class="product-card__info">
                    <div class="product-card__name font-weight-bold">
                      <a href="productDetails.php"><?php echo $result["pm_name"]; ?></a>
                    </div>
                  </div>
                  <div class="product-card__actions">
                    <div class="product-card__prices">
                      <span class="product-card__prices" style="color: LightSkyBlue;">฿
                        <?php echo $result["pm_price"]; ?></span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <?php }?>
          </div>
        </div>
      </div>
    </div>
    <!-- .speaker Products / end -->

    <!-- .Auriculares Products -->
    <div class="block block-products-carousel" data-layout="grid-5">
      <div class="container">
        <div class="block-header">
          <h3 class="block-header__title">Auriculares</h3>
          <div class="block-header__divider"></div>
          <div class="block-header__arrows-list">
            <!--icon เลื่อนหน้า-->
            <button class="block-header__arrow block-header__arrow--left" type="button">
              <svg width="7px" height="11px">
                <use xlink:href="images/sprite.svg#arrow-rounded-left-7x11"></use>
              </svg>
            </button>
            <button class="block-header__arrow block-header__arrow--right" type="button">
              <svg width="7px" height="11px">
                <use xlink:href="images/sprite.svg#arrow-rounded-right-7x11"></use>
              </svg>
            </button>
            <!--icon เลื่อนหน้า end-->
          </div>
        </div>
        <div class="block-products-carousel__slider">
          <div class="block-products-carousel__preloader"></div>
          <div class="owl-carousel">
            <div class="block-products-carousel__column">
              <div class="block-products-carousel__cell">
                <div class="product-card">
                  <div class="product-card__image">
                    <a href="product.html"><img src="images/Earphones/i12-6.png" alt=""></a>
                  </div>
                  <div class="product-card__info">
                    <div class="product-card__name font-weight-bold">
                      <a href="product.html">Auriculares Air Ear Pods Inpod I12 TWS</a>
                    </div>
                  </div>
                  <div class="product-card__actions">
                    <div class="product-card__prices">
                      <span class="product-card__prices" style="color: LightSkyBlue;">฿299</span>
                    </div>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- .Auriculares Products / end -->

    <!-- .Charging Products -->
    <div class="block block-products-carousel" data-layout="grid-5">
      <div class="container">
        <div class="block-header">
          <h3 class="block-header__title">Charging</h3>
          <div class="block-header__divider"></div>
          <div class="block-header__arrows-list">
            <!--icon เลื่อนหน้า-->
            <button class="block-header__arrow block-header__arrow--left" type="button">
              <svg width="7px" height="11px">
                <use xlink:href="images/sprite.svg#arrow-rounded-left-7x11"></use>
              </svg>
            </button>
            <button class="block-header__arrow block-header__arrow--right" type="button">
              <svg width="7px" height="11px">
                <use xlink:href="images/sprite.svg#arrow-rounded-right-7x11"></use>
              </svg>
            </button>
            <!--icon เลื่อนหน้า end-->
          </div>
        </div>
        <div class="block-products-carousel__slider">
          <div class="block-products-carousel__preloader"></div>
          <div class="owl-carousel">
            <div class="block-products-carousel__column">
              <div class="block-products-carousel__cell">
                <div class="product-card">
                  <div class="product-card__image">
                    <a href="product.html">
                      <img src="images/Charging/4.jpg" alt="">
                    </a>
                  </div>
                  <div class="product-card__info">
                    <div class="product-card__name font-weight-bold">
                      <a href="product.html">3 In 1 Charging Cable Micro Quick Charge </a>
                    </div>
                  </div>
                  <div class="product-card__actions">
                    <div class="product-card__prices">
                      <span class="product-card__prices" style="color: LightSkyBlue;">฿99</span> &emsp;&emsp;&emsp;
                      <!-- <span><small>Sold 0 pieces</small></span> -->
                    </div>
                    <!-- <div class="product-card__buttons">
                      <button class="btn btn-primary product-card__addtocart" type="button">Add To Cart</button>
                      <button class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__wishlist"
                        type="button">
                        <svg width="16px" height="16px">
                          <use xlink:href="images/sprite.svg#wishlist-16"></use>
                        </svg>
                        <span class="fake-svg-icon fake-svg-icon--wishlist-16"></span>
                      </button>
                    </div> -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- .Charging Products / end -->

    <!-- .block-banner -->
    <!-- <div class="block block-banner">
      <div class="container">
        <a href="#" class="block-banner__body">
          <div class="block-banner__image block-banner__image--desktop"
            style="background-image: url('images/banners/banner-1.png')">
          </div>
          <div class="block-banner__image block-banner__image--mobile"
            style="background-image: url('images/banners/banner-1-mobile.png')">
          </div>
          <div class="block-banner__title">Bluetooth<br class="block-banner__mobile-br"> 5.0</div>
          <div class="block-banner__text">Speaker, Charging, Earphones</div>
          <div class="block-banner__button">
            <span class="btn btn-sm btn-primary">Shop Now</span>
          </div>
        </a>
      </div>
    </div> -->
    <!-- .block-banner / end -->


  </div>
  <!-- site__body / end -->

  <!-- site__footer -->
  <?php include "layouts/footer.php"?>
  <!-- site__footer / end -->