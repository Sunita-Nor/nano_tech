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
  <?php include "layouts/navbar.php";?>
  <!-- desktop site__header / end-->

  <!-- site__body -->
  <div class="site__body">

    <!-- .block-slideshow -->
    <?php include "layouts/slideShow.php"?>
    <!-- .block-slideshow / end -->

    <!-- .block-features -->
    <?php include "layouts/features.php"?>
    <!-- .block-features / end -->

    <!-- .block-products-carousel -->
    <div class="block block-products-carousel" data-layout="grid-5">
      <div class="container">
        <div class="block-header">
          <h3 class="block-header__title">Featured Products</h3>
          <div class="block-header__divider"></div>
          <ul class="block-header__groups-list">
            <li><button type="button" class="block-header__group block-header__group--active">All</button></li>
            <li><button type="button" class="block-header__group">Power Tools</button></li>
            <li><button type="button" class="block-header__group">Hand Tools</button></li>
            <li><button type="button" class="block-header__group">Plumbing</button></li>
          </ul>
          <div class="block-header__arrows-list">
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
          </div>
        </div>
        <div class="block-products-carousel__slider">
          <div class="block-products-carousel__preloader"></div>
          <div class="owl-carousel">
            <div class="block-products-carousel__column">
              <div class="block-products-carousel__cell">
                <div class="product-card">
                  <div class="product-card__badges-list">
                    <div class="product-card__badge product-card__badge--new">New</div>
                  </div>
                  <div class="product-card__image">
                    <a href="product.html"><img src="images/products/product-1.jpg" alt=""></a>
                  </div>
                  <div class="product-card__info">
                    <div class="product-card__name">
                      <a href="product.html">Electric Planer Brandix KL370090G 300 Watts</a>
                    </div>
                  </div>
                  <div class="product-card__actions">
                    <div class="product-card__prices">$749.00</div>
                  </div>
                </div>
              </div>
              <div class="block-products-carousel__cell">
                <div class="product-card">
                  <div class="product-card__badges-list">
                    <div class="product-card__badge product-card__badge--hot">Hot</div>
                  </div>
                  <div class="product-card__image">
                    <a href="product.html"><img src="images/products/product-2.jpg" alt=""></a>
                  </div>
                  <div class="product-card__info">
                    <div class="product-card__name">
                      <a href="product.html">Undefined Tool IRadix DPS3000SY 2700 Watts</a>
                    </div>
                  </div>
                  <div class="product-card__actions">
                    <div class="product-card__prices">$1,019.00</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="block-products-carousel__column">
              <div class="block-products-carousel__cell">
                <div class="product-card">
                  <div class="product-card__image">
                    <a href="product.html"><img src="images/products/product-3.jpg" alt=""></a>
                  </div>
                  <div class="product-card__info">
                    <div class="product-card__name">
                      <a href="product.html">Drill Screwdriver Brandix ALX7054 200 Watts</a>
                    </div>
                  </div>
                  <div class="product-card__actions">
                    <div class="product-card__prices">$850.00</div>
                  </div>
                </div>
              </div>
              <div class="block-products-carousel__cell">
                <div class="product-card">
                  <div class="product-card__badges-list">
                    <div class="product-card__badge product-card__badge--sale">Sale</div>
                  </div>
                  <div class="product-card__image">
                    <a href="product.html"><img src="images/products/product-4.jpg" alt=""></a>
                  </div>
                  <div class="product-card__info">
                    <div class="product-card__name">
                      <a href="product.html">Drill Series 3 Brandix KSR4590PQS 1500 Watts</a>
                    </div>
                    <div class="product-card__actions">
                      <div class="product-card__prices">$749.00</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
    <!-- .block-products-carousel / end -->

    <div class="banner">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-6">
            <div class="banner_pic">
              <img src="images/posts/post-6.jpg" alt="" width="600%" height="213px">
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-6">
            <div class="banner_pic">
              <img src="images/posts/post-7.jpg" alt="" width="600%" height="213px">
            </div>
          </div>
        </div>
      </div>
    </div><br>

    <!-- .block-products -->
    <div class="block block-products block-products--layout--large-last mt-5">
      <div class="container">
        <div class="block-header">
          <h3 class="block-header__title">Bestsellers</h3>
          <div class="block-header__divider"></div>
        </div>
        <div class="block-products__body">
          <div class="block-products__list">
            <div class="block-products__list-item">
              <div class="block-products-carousel__cell">
                <div class="product-card">
                  <div class="product-card__badges-list">
                    <div class="product-card__badge product-card__badge--hot">Hot</div>
                  </div>
                  <div class="product-card__image">
                    <a href="product.html"><img src="images/products/product-1.jpg" alt=""></a>
                  </div>
                  <div class="product-card__info">
                    <div class="product-card__name">
                      <a href="product.html">Electric Planer Brandix KL370090G 300 Watts</a>
                    </div>
                  </div>
                  <div class="product-card__actions">
                    <div class="product-card__prices">$749.00</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="block-products__list-item">
              <div class="block-products-carousel__cell">
                <div class="product-card">
                  <div class="product-card__image">
                    <a href="product.html"><img src="images/products/product-1.jpg" alt=""></a>
                  </div>
                  <div class="product-card__info">
                    <div class="product-card__name">
                      <a href="product.html">Electric Planer Brandix KL370090G 300 Watts</a>
                    </div>
                  </div>
                  <div class="product-card__actions">
                    <div class="product-card__prices">$749.00</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="block-products__list-item">
              <div class="block-products-carousel__cell">
                <div class="product-card">
                  <div class="product-card__badges-list">
                    <div class="product-card__badge product-card__badge--sale">Sale</div>
                  </div>
                  <div class="product-card__image">
                    <a href="product.html"><img src="images/products/product-1.jpg" alt=""></a>
                  </div>
                  <div class="product-card__info">
                    <div class="product-card__name">
                      <a href="product.html">Electric Planer Brandix KL370090G 300 Watts</a>
                    </div>
                  </div>
                  <div class="product-card__actions">
                    <div class="product-card__prices"><span class="product-card__new-price">$949.00</span> <span
                        class="product-card__old-price">$1189.00</span></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="block-products__list-item">
              <div class="block-products-carousel__cell">
                <div class="product-card">
                  <div class="product-card__image">
                    <a href="product.html"><img src="images/products/product-1.jpg" alt=""></a>
                  </div>
                  <div class="product-card__info">
                    <div class="product-card__name">
                      <a href="product.html">Electric Planer Brandix KL370090G 300 Watts</a>
                    </div>
                  </div>
                  <div class="product-card__actions">
                    <div class="product-card__prices">$749.00</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="block-products__list-item">
              <div class="block-products-carousel__cell">
                <div class="product-card">
                  <div class="product-card__image">
                    <a href="product.html"><img src="images/products/product-1.jpg" alt=""></a>
                  </div>
                  <div class="product-card__info">
                    <div class="product-card__name">
                      <a href="product.html">Electric Planer Brandix KL370090G 300 Watts</a>
                    </div>
                  </div>
                  <div class="product-card__actions">
                    <div class="product-card__prices">$749.00</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="block-products__list-item">
              <div class="block-products-carousel__cell">
                <div class="product-card">
                  <div class="product-card__image">
                    <a href="product.html"><img src="images/products/product-1.jpg" alt=""></a>
                  </div>
                  <div class="product-card__info">
                    <div class="product-card__name">
                      <a href="product.html">Electric Planer Brandix KL370090G 300 Watts</a>
                    </div>
                  </div>
                  <div class="product-card__actions">
                    <div class="product-card__prices">$749.00</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="block-products__featured">
            <div class="block-products__featured-item">
              <div class="product-card">
                <div class="product-card__badges-list">
                  <div class="product-card__badge product-card__badge--new">New</div>
                </div>
                <div class="product-card__image">
                  <a href="product.html"><img src="images/products/product-1.jpg" alt=""></a>
                </div>
                <div class="product-card__info mt-5">
                  <div class="product-card__name">
                    <a href="product.html">Electric Planer Brandix KL370090G 300 Watts</a>
                  </div>
                </div>
                <div class="product-card__actions">
                  <div class="product-card__prices">$749.00</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- .block-products / end -->
  </div>
  <!-- site__body / end -->

  <!-- site__footer -->
  <?php include "layouts/footer.php"?>
  <!-- site__footer / end -->

  <!-- .block-banner -->
  <!-- <div class="block block-banner">
      <div class="container">
        <a href="shop.php" class="block-banner__body">
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