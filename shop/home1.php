<?php include"layouts/head.php"?>

<!-- mobilemenu -->
<?php include"layouts/mobileMenu.php"?>
<!-- mobilemenu / end -->

<!-- site -->
<div class="site">
  <!-- mobile site__header -->
  <?php include"layouts/mobileNavbar.php"?>
  <!-- mobile site__header / end -->

  <!-- desktop site__header -->
  <header class="site__header d-lg-block d-none">
    <div class="site-header">
      <!-- .topbar -->
      <div class="site-header__topbar topbar" id="topbar">
        <div class="topbar__container container">
          <div class="topbar__row">
            <div class="topbar__item topbar__item--link">
              <a class="topbar-link" href="about-us.html">About Us</a>
            </div>
            <div class="topbar__item topbar__item--link">
              <a class="topbar-link" href="contact-us.html">Contacts</a>
            </div>
            <div class="topbar__item topbar__item--link">
              <a class="topbar-link" href="track-order.html">Track Order</a>
            </div>

            <div class="topbar__spring"></div>
            <div class="topbar__item">
              <div class="topbar-dropdown">
                <button class="topbar-dropdown__btn" type="button">
                  <img class="avatar" src="images/avatar.png"> &nbsp;
                  <svg width="9px" height="10px">
                    <use xlink:href="images/sprite.svg#arrow-rounded-down-7x5"></use>
                  </svg>
                </button>
                <div class="topbar-dropdown__body">
                  <!-- .menu -->
                  <ul class="menu menu--layout--topbar">
                    <li><a href="homeMember.php">Log in</a></li>
                    <li><a href="account.html">Register</a></li>
                  </ul><!-- .menu / end -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- .topbar / end -->

      <!-- .nav-links -->
      <div class="site-header__nav-panel">
        <div class="nav-panel" id="navbar">
          <div class="nav-panel__container container">
            <div class="nav-panel__row">
              <div class="nav-panel__logo">
                <a href="home1.php">
                  <!-- Logo -->
                  <img src="images/footer2.png" alt="" width="190px" height="90px">
                  <!-- <svg xmlns="images/LogoTitle.png" width="120px" height="20px"></svg> -->
                </a>
              </div>

              <!-- .nav-links -->
              <div class="nav-panel__nav-links nav-links">
                <ul class="nav-links__list">
                  <li class="nav-links__item">
                    <a href="home1.php">
                      <span>Home</span>
                    </a>
                  </li>

                  <li class="nav-links__item nav-links__item--with-submenu">
                    <a href="shop.php">
                      <span>Shop
                        <svg class="nav-links__arrow" width="9px" height="6px">
                          <use xlink:href="images/sprite.svg#arrow-rounded-down-9x6"></use>
                        </svg>
                      </span>
                    </a>
                    <div class="nav-links__menu">
                      <!-- .menu -->
                      <ul class="menu menu--layout--classic">
                        <li>
                          <a href="shop.php">Product List
                            <svg class="menu__arrow" width="6px" height="9px">
                              <use xlink:href="images/sprite.svg#arrow-rounded-right-6x9"></use>
                            </svg>
                          </a>
                          <div class="menu__submenu">
                            <!-- .menu -->
                            <ul class="menu menu--layout--classic">
                              <li><a href="productDetails.php">Product Details</a></li>
                            </ul>
                            <!-- .menu / end -->
                          </div>
                        </li>

                        <li><a href="cart.php">Cart</a></li>
                        <li><a href="checkout.php">Checkout</a></li>
                        <li><a href="wishlist.php">Wishlist</a></li>
                        <li><a href="track-order.html">Track Order</a></li>
                      </ul>
                      <!-- .menu / end -->
                    </div>
                  </li>

                  <li class="nav-links__item nav-links__item--with-submenu">
                    <a href="blog-classic.html">
                      <span> Blog
                        <svg class="nav-links__arrow" width="9px" height="6px">
                          <use xlink:href="images/sprite.svg#arrow-rounded-down-9x6"></use>
                        </svg>
                      </span>
                    </a>
                    <div class="nav-links__menu">
                      <!-- .menu -->
                      <ul class="menu menu--layout--classic">
                        <li><a href="blog-classic.html">Blog Classic</a></li>
                        <li><a href="blog-grid.html">Blog Grid</a></li>
                      </ul>
                      <!-- .menu / end -->
                    </div>
                  </li>

                  <li class="nav-links__item nav-links__item--with-submenu">
                    <a href="#">
                      <span> Pages
                        <svg class="nav-links__arrow" width="9px" height="6px">
                          <use xlink:href="images/sprite.svg#arrow-rounded-down-9x6"></use>
                        </svg>
                      </span>
                    </a>
                    <div class="nav-links__menu">
                      <!-- .menu -->
                      <ul class="menu menu--layout--classic">
                        <li><a href="about-us.html">About Us</a></li>
                        <li><a href="contact-us-alt.html">Contact Us</a></li>
                        <li><a href="faq.html">FAQ</a></li>
                      </ul>
                      <!-- .menu / end -->
                    </div>
                  </li>

                  <li class="nav-links__item">
                    <a href="contact-us.html"><span>Contact Us</span></a>
                  </li>
                </ul>
              </div>
              <!-- .nav-links / end -->

              <!-- ส่วนของ icon -->
              <div class="nav-panel__indicators">
                <div class="indicator indicator--trigger--click">
                  <button type="button" class="indicator__button">
                    <span class="indicator__area">
                      <svg class="indicator__icon" width="20px" height="20px">
                        <use xlink:href="images/sprite.svg#search-20"></use>
                      </svg>
                      <svg class="indicator__icon indicator__icon--open" width="20px" height="20px">
                        <use xlink:href="images/sprite.svg#cross-20"></use>
                      </svg>
                    </span>
                  </button>

                  <div class="indicator__dropdown">
                    <div class="drop-search">
                      <form action="#" class="drop-search__form">
                        <input class="drop-search__input" name="search" placeholder="Search over 10,000 products"
                          aria-label="Site search" type="text" autocomplete="off">
                        <button class="drop-search__button drop-search__button--submit" type="submit">
                          <svg width="20px" height="20px">
                            <use xlink:href="images/sprite.svg#search-20"></use>
                          </svg>
                        </button>
                      </form>
                    </div>
                  </div>
                </div>

                <div class="indicator">
                  <a href="wishlist.html" class="indicator__button">
                    <span class="indicator__area">
                      <svg width="20px" height="20px">
                        <use xlink:href="images/sprite.svg#heart-20"></use>
                      </svg>
                      <span class="indicator__value">0</span>
                    </span>
                  </a>
                </div>
                <div class="indicator indicator--trigger--click">
                  <a href="cart.html" class="indicator__button">
                    <span class="indicator__area">
                      <svg width="20px" height="20px">
                        <use xlink:href="images/sprite.svg#cart-20"></use>
                      </svg>
                      <span class="indicator__value">3</span>
                    </span>
                  </a>

                  <div class="indicator__dropdown">
                    <!-- .dropcart -->
                    <div class="dropcart">
                      <div class="dropcart__products-list">
                        <div class="dropcart__product">
                          <div class="dropcart__product-image">
                            <a href="product.html"><img src="images/products/product-1.jpg" alt="">
                            </a>
                          </div>
                          <div class="dropcart__product-info">
                            <div class="dropcart__product-name">
                              <a href="product.html">Electric Planer Brandix KL370090G 300 Watts</a>
                            </div>
                            <ul class="dropcart__product-options">
                              <li>Color: Yellow</li>
                              <li>Material: Aluminium</li>
                            </ul>
                            <div class="dropcart__product-meta">
                              <span class="dropcart__product-quantity">2</span> x
                              <span class="dropcart__product-price">$699.00</span>
                            </div>
                          </div><button type="button"
                            class="dropcart__product-remove btn btn-light btn-sm btn-svg-icon">
                            <svg width="10px" height="10px">
                              <use xlink:href="images/sprite.svg#cross-10"></use>
                            </svg>
                          </button>
                        </div>
                        <div class="dropcart__product">
                          <div class="dropcart__product-image">
                            <a href="product.html">
                              <img src="images/products/product-2.jpg" alt="">
                            </a>
                          </div>
                          <div class="dropcart__product-info">
                            <div class="dropcart__product-name">
                              <a href="product.html">Undefined Tool IRadix DPS3000SY 2700 watts</a>
                            </div>
                            <div class="dropcart__product-meta">
                              <span class="dropcart__product-quantity">1</span> x
                              <span class="dropcart__product-price">$849.00</span>
                            </div>
                          </div>
                          <button type="button" class="dropcart__product-remove btn btn-light btn-sm btn-svg-icon">
                            <svg width="10px" height="10px">
                              <use xlink:href="images/sprite.svg#cross-10"></use>
                            </svg>
                          </button>
                        </div>
                        <div class="dropcart__product">
                          <div class="dropcart__product-image">
                            <a href="product.html">
                              <img src="images/products/product-5.jpg" alt=""></a>
                          </div>
                          <div class="dropcart__product-info">
                            <div class="dropcart__product-name">
                              <a href="product.html">Brandix Router Power Tool 2017ERXPK</a>
                            </div>
                            <ul class="dropcart__product-options">
                              <li>Color: True Red</li>
                            </ul>
                            <div class="dropcart__product-meta">
                              <span class="dropcart__product-quantity">3</span> x
                              <span class="dropcart__product-price">$1,210.00</span>
                            </div>
                          </div>
                          <button type="button" class="dropcart__product-remove btn btn-light btn-sm btn-svg-icon">
                            <svg width="10px" height="10px">
                              <use xlink:href="images/sprite.svg#cross-10"></use>
                            </svg>
                          </button>
                        </div>
                      </div>
                      <div class="dropcart__totals">
                        <table>
                          <tr>
                            <th>Subtotal</th>
                            <td>$5,877.00</td>
                          </tr>
                          <tr>
                            <th>Shipping</th>
                            <td>$25.00</td>
                          </tr>
                          <tr>
                            <th>Tax</th>
                            <td>$0.00</td>
                          </tr>
                          <tr>
                            <th>Total</th>
                            <td>$5,902.00</td>
                          </tr>
                        </table>
                      </div>
                      <div class="dropcart__buttons">
                        <a class="btn btn-secondary" href="cart.php">View Cart</a>
                        <a class="btn btn-primary" href="checkout.php">Checkout</a>
                      </div>
                    </div>
                    <!-- .dropcart / end -->
                  </div>
                </div>
              </div>
              <!-- icon END -->

            </div>
          </div>
        </div>
      </div>

    </div>
  </header>
  <!-- desktop site__header / end -->

  <!-- site__body -->
  <div class="site__body">

    <!-- .block-slideshow -->
    <?php include"layouts/slideShow.php"?>
    <!-- .block-slideshow / end -->

    <!-- .block-features -->
    <?php include"layouts/features.php"?>
    <!-- .block-features / end -->

    <!-- .Featured Products -->
    <div class="block block-products-carousel" data-layout="grid-5">
      <div class="container">
        <div class="block-header">
          <h3 class="block-header__title">Featured Products</h3>
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
                      <img src="images/Speaker/GT-2.jpg" alt="">
                    </a>
                  </div>
                  <div class="product-card__info">
                    <div class="product-card__name font-weight-bold">
                      <a href="product.html">GT-112 Portable wireless speaker, HIFI sound </a>
                    </div>
                  </div>
                  <div class="product-card__actions">
                    <div class="product-card__availability">Availability:
                      <span class="text-success">In Stock</span>
                    </div>
                    <div class="product-card__prices">
                      <span class="product-card__prices" style="color: LightSkyBlue;">฿259</span> &emsp;&emsp;&emsp;
                      <span><small>Sold 0 pieces</small></span>
                    </div>
                    <div class="product-card__buttons">
                      <button class="btn btn-primary product-card__addtocart" type="button">Add To Cart</button>
                      <button class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__wishlist"
                        type="button">
                        <svg width="16px" height="16px">
                          <use xlink:href="images/sprite.svg#wishlist-16"></use>
                        </svg>
                        <span class="fake-svg-icon fake-svg-icon--wishlist-16"></span>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="block-products-carousel__column">
              <div class="block-products-carousel__cell">
                <div class="product-card">
                  <div class="product-card__image">
                    <a href="product.html">
                      <img src="images/Speaker/TG-6.jpg" alt="">
                    </a>
                  </div>
                  <div class="product-card__info">
                    <div class="product-card__name font-weight-bold">
                      <a href="product.html">TG-113 Wireless Speaker Portable Fabric Stereo</a>
                    </div>
                  </div>

                  <div class="product-card__actions">
                    <div class="product-card__availability">Availability:
                      <span class="text-success">In Stock</span>
                    </div>
                    <div class="product-card__prices">
                      <span class="product-card__prices" style="color: LightSkyBlue;">฿259</span> &emsp;&emsp;&emsp;
                      <span><small>Sold 0 pieces</small></span>
                    </div>
                    <div class="product-card__buttons">
                      <button class="btn btn-primary product-card__addtocart" type="button">Add To Cart</button>
                      <button class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__wishlist"
                        type="button">
                        <svg width="16px" height="16px">
                          <use xlink:href="images/sprite.svg#wishlist-16"></use>
                        </svg>
                        <span class="fake-svg-icon fake-svg-icon--wishlist-16"></span>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>

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
                      <span class="product-card__prices" style="color: LightSkyBlue;">฿299</span> &emsp;&emsp;&emsp;
                      <span><small>Sold 0 pieces</small></span>
                    </div>
                    <div class="product-card__buttons">
                      <button class="btn btn-primary product-card__addtocart" type="button">Add To Cart</button>
                      <button class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__wishlist"
                        type="button">
                        <svg width="16px" height="16px">
                          <use xlink:href="images/sprite.svg#wishlist-16"></use>
                        </svg>
                        <span class="fake-svg-icon fake-svg-icon--wishlist-16"></span>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>

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
                      <span><small>Sold 0 pieces</small></span>
                    </div>
                    <div class="product-card__buttons">
                      <button class="btn btn-primary product-card__addtocart" type="button">Add To Cart</button>
                      <button class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__wishlist"
                        type="button">
                        <svg width="16px" height="16px">
                          <use xlink:href="images/sprite.svg#wishlist-16"></use>
                        </svg>
                        <span class="fake-svg-icon fake-svg-icon--wishlist-16"></span>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- .Featured Products / end -->

    <!-- .block-banner -->
    <div class="block block-banner">
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
    </div>
    <!-- .block-banner / end -->

    <!-- .block-products -->
    <div class="block block-products block-products--layout--large-last">
      <div class="container">
        <div class="block-header">
          <h3 class="block-header__title">Bestsellers</h3>
          <div class="block-header__divider"></div>
        </div>
        <div class="block-products__body">
          <div class="block-products__list">
            <div class="block-products__list-item">
              <div class="product-card">
                <div class="product-card__badges-list">
                  <div class="product-card__badge product-card__badge--hot">Hot</div>
                </div>
                <div class="product-card__image">
                  <a href="product.html"><img src="images/Earphones/i12-6.png" alt=""></a>
                </div>
                <div class="product-card__info">
                  <div class="product-card__name font-weight-bold">
                    <a href="product.html">Auriculares Air Ear Pods Inpod I12 TWS</a>
                  </div>
                  <!-- <div class="product-card__rating">
                    <div class="rating">
                      <div class="rating__body">
                        <svg class="rating__star rating__star--active" width="13px" height="12px">
                          <g class="rating__fill">
                            <use xlink:href="images/sprite.svg#star-normal"></use>
                          </g>
                          <g class="rating__stroke">
                            <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
                          </g>
                        </svg>
                        <div class="rating__star rating__star--only-edge rating__star--active">
                          <div class="rating__fill">
                            <div class="fake-svg-icon"></div>
                          </div>
                          <div class="rating__stroke">
                            <div class="fake-svg-icon"></div>
                          </div>
                        </div>
                        <svg class="rating__star rating__star--active" width="13px" height="12px">
                          <g class="rating__fill">
                            <use xlink:href="images/sprite.svg#star-normal"></use>
                          </g>
                          <g class="rating__stroke">
                            <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
                          </g>
                        </svg>
                        <div class="rating__star rating__star--only-edge rating__star--active">
                          <div class="rating__fill">
                            <div class="fake-svg-icon"></div>
                          </div>
                          <div class="rating__stroke">
                            <div class="fake-svg-icon"></div>
                          </div>
                        </div>
                        <svg class="rating__star" width="13px" height="12px">
                          <g class="rating__fill">
                            <use xlink:href="images/sprite.svg#star-normal"></use>
                          </g>
                          <g class="rating__stroke">
                            <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
                          </g>
                        </svg>
                        <div class="rating__star rating__star--only-edge">
                          <div class="rating__fill">
                            <div class="fake-svg-icon"></div>
                          </div>
                          <div class="rating__stroke">
                            <div class="fake-svg-icon"></div>
                          </div>
                        </div>
                        <svg class="rating__star" width="13px" height="12px">
                          <g class="rating__fill">
                            <use xlink:href="images/sprite.svg#star-normal"></use>
                          </g>
                          <g class="rating__stroke">
                            <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
                          </g>
                        </svg>
                        <div class="rating__star rating__star--only-edge">
                          <div class="rating__fill">
                            <div class="fake-svg-icon"></div>
                          </div>
                          <div class="rating__stroke">
                            <div class="fake-svg-icon"></div>
                          </div>
                        </div>
                        <svg class="rating__star" width="13px" height="12px">
                          <g class="rating__fill">
                            <use xlink:href="images/sprite.svg#star-normal"></use>
                          </g>
                          <g class="rating__stroke">
                            <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
                          </g>
                        </svg>
                        <div class="rating__star rating__star--only-edge">
                          <div class="rating__fill">
                            <div class="fake-svg-icon"></div>
                          </div>
                          <div class="rating__stroke">
                            <div class="fake-svg-icon"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="product-card__rating-legend">4 Reviews</div>
                  </div> -->
                </div>
                <div class="product-card__actions">
                  <div class="product-card__prices">
                    <span class="product-card__prices" style="color: LightSkyBlue;">฿299</span> &emsp;&emsp;&emsp;
                    <span><small>Sold 0 pieces</small></span>
                  </div>
                  <div class="product-card__buttons">
                    <button class="btn btn-primary product-card__addtocart" type="button">Add To Cart</button>
                    <button class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__wishlist"
                      type="button">
                      <svg width="16px" height="16px">
                        <use xlink:href="images/sprite.svg#wishlist-16"></use>
                      </svg>
                      <span class="fake-svg-icon fake-svg-icon--wishlist-16"></span>
                    </button>
                  </div>
                </div>
              </div>
            </div>

            <div class="block-products__list-item">
              <div class="product-card">
                <div class="product-card__image">
                  <a href="product.html">
                    <img src="images/Speaker/GT-4.jpg" alt=""></a>
                </div>
                <div class="product-card__info">
                  <div class="product-card__name font-weight-bold">
                    <a href="product.html">GT-112 Portable wireless speaker, HIFI sound </a>
                  </div>
                </div>
                <div class="product-card__actions">
                  <div class="product-card__availability">Availability:
                    <span class="text-success">In Stock</span>
                  </div>
                  <div class="product-card__prices">
                    <span class="product-card__prices" style="color: LightSkyBlue;">฿259</span> &emsp;&emsp;&emsp;
                    <span><small>Sold 0 pieces</small></span>
                  </div>
                  <div class="product-card__buttons">
                    <button class="btn btn-primary product-card__addtocart" type="button">Add To Cart</button>
                    <button class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__wishlist"
                      type="button">
                      <svg width="16px" height="16px">
                        <use xlink:href="images/sprite.svg#wishlist-16"></use>
                      </svg>
                      <span class="fake-svg-icon fake-svg-icon--wishlist-16"></span>
                    </button>
                  </div>
                </div>
              </div>
            </div>

            <div class="block-products__list-item">
              <div class="product-card">
                <div class="product-card__image">
                  <a href="product.html">
                    <img src="images/Speaker/TG-6.jpg" alt=""></a>
                </div>
                <div class="product-card__info">
                  <div class="product-card__name font-weight-bold">
                    <a href="product.html">TG-113 Wireless Speaker Portable Fabric Stereo</a>
                  </div>
                </div>
                <div class="product-card__actions">
                  <div class="product-card__availability">Availability:
                    <span class="text-success">In Stock</span>
                  </div>
                  <div class="product-card__prices">
                    <span class="product-card__prices" style="color: LightSkyBlue;">฿259</span> &emsp;&emsp;&emsp;
                    <span><small>Sold 0 pieces</small></span>
                  </div>
                  <div class="product-card__buttons">
                    <button class="btn btn-primary product-card__addtocart" type="button">Add To Cart</button>
                    <button class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__wishlist"
                      type="button">
                      <svg width="16px" height="16px">
                        <use xlink:href="images/sprite.svg#wishlist-16"></use>
                      </svg>
                      <span class="fake-svg-icon fake-svg-icon--wishlist-16"></span>
                    </button>
                  </div>
                </div>
              </div>
            </div>

            <div class="block-products__list-item">
              <div class="product-card">
                <div class="product-card__image">
                  <a href="product.html"><img src="images/Earphones/i11-4.jpg" alt=""></a>
                </div>
                <div class="product-card__info">
                  <div class="product-card__name font-weight-bold">
                    <a href="product.html">Auriculares Air Ear Pods Inpod I11 TWS</a>
                  </div>
                </div>
                <div class="product-card__actions">
                  <div class="product-card__prices">
                    <span class="product-card__prices" style="color: LightSkyBlue;">฿299</span> &emsp;&emsp;&emsp;
                    <span><small>Sold 0 pieces</small></span>
                  </div>
                  <div class="product-card__buttons">
                    <button class="btn btn-primary product-card__addtocart" type="button">Add To Cart</button>
                    <button class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__wishlist"
                      type="button">
                      <svg width="16px" height="16px">
                        <use xlink:href="images/sprite.svg#wishlist-16"></use>
                      </svg>
                      <span class="fake-svg-icon fake-svg-icon--wishlist-16"></span>
                    </button>
                  </div>
                </div>
              </div>
            </div>

            <div class="block-products__list-item">
              <div class="product-card">
                <div class="product-card__image">
                  <a href="product.html"><img src="images/Speaker/ZBT-1.png" alt=""></a>
                </div>
                <div class="product-card__info">
                  <div class="product-card__name font-weight-bold">
                    <a href="product.html">ZBT-119 Mini portable wireless speaker</a>
                  </div>
                </div>
                <div class="product-card__actions">
                  <div class="product-card__prices">
                    <span class="product-card__prices" style="color: LightSkyBlue;">฿199</span> &emsp;&emsp;&emsp;
                    <span><small>Sold 0 pieces</small></span>
                  </div>
                  <div class="product-card__buttons">
                    <button class="btn btn-primary product-card__addtocart" type="button">Add To Cart</button>
                    <button class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__wishlist"
                      type="button">
                      <svg width="16px" height="16px">
                        <use xlink:href="images/sprite.svg#wishlist-16"></use>
                      </svg>
                      <span class="fake-svg-icon fake-svg-icon--wishlist-16"></span>
                    </button>
                  </div>
                </div>
              </div>
            </div>

            <div class="block-products__list-item">
              <div class="product-card">
                <div class="product-card__image">
                  <a href="product.html"><img src="images/Speaker/EC-1.png" alt=""></a>
                </div>
                <div class="product-card__info">
                  <div class="product-card__name font-weight-bold">
                    <a href="product.html">EC-0011 Mini wireless speaker, Goes Here</a>
                  </div>
                </div>
                <div class="product-card__actions">
                  <div class="product-card__prices">
                    <span class="product-card__prices" style="color: LightSkyBlue;">฿199</span> &emsp;&emsp;&emsp;
                    <span><small>Sold 0 pieces</small></span>
                  </div>
                  <div class="product-card__buttons">
                    <button class="btn btn-primary product-card__addtocart" type="button">Add To Cart</button>
                    <button class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__wishlist"
                      type="button">
                      <svg width="16px" height="16px">
                        <use xlink:href="images/sprite.svg#wishlist-16"></use>
                      </svg>
                      <span class="fake-svg-icon fake-svg-icon--wishlist-16"></span>
                    </button>
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
                <div class="product-card__image my-4">
                  <a href="product.html"><img src="images/Speaker/GT-2.jpg" alt=""></a>
                </div>
                <div class="product-card__info">
                  <div class="product-card__name font-weight-bold">
                    <a href="product.html">GT-112 Portable wireless speaker, HIFI sound </a>
                  </div>
                </div>
                <div class="product-card__actions">
                  <div class="product-card__prices">
                    <span class="product-card__prices" style="color: LightSkyBlue;">฿259</span>
                    &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                    <span><small>Sold 0 pieces</small></span>
                  </div>
                  <div class="product-card__buttons">
                    <button class="btn btn-primary product-card__addtocart" type="button">Add To Cart</button>
                    <button class="btn btn-secondary product-card__addtocart product-card__addtocart--list"
                      type="button">
                      Add To Cart</button>
                    <button class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__wishlist"
                      type="button">
                      <svg width="16px" height="16px">
                        <use xlink:href="images/sprite.svg#wishlist-16"></use>
                      </svg>
                      <span class="fake-svg-icon fake-svg-icon--wishlist-16"></span>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
    <!-- .block-products / end -->

    <!-- .block-categories -->
    <div class="block block--highlighted block-categories block-categories--layout--compact">
      <div class="container">
        <div class="block-header">
          <h3 class="block-header__title">Categories</h3>
          <div class="block-header__divider"></div>
        </div>
        <div class="block-categories__list">
          <div class="block-categories__item category-card category-card--layout--compact">
            <div class="category-card__body">
              <div class="category-card__image"><a href="#"><img src="images/Speaker/Categories.png" alt=""></a></div>
              <div class="category-card__content">
                <div class="category-card__name"><a href="#">Speaker</a></div>
                <div class="category-card__products">300 Products</div>
              </div>
            </div>
          </div>
          <div class="block-categories__item category-card category-card--layout--compact">
            <div class="category-card__body">
              <div class="category-card__image"><a href="#"> <a href="#"><img src="images/Charging/Categories.png"
                      alt=""></a>
              </div>
              <div class="category-card__content">
                <div class="category-card__name"><a href="#">Charging cable</a></div>
                <div class="category-card__products">50 Products</div>
              </div>
            </div>
          </div>
          <div class="block-categories__item category-card category-card--layout--compact">
            <div class="category-card__body">
              <div class="category-card__image"><a href="#"><img src="images/Earphones/Categories.png" alt=""></a></div>
              <div class="category-card__content">
                <div class="category-card__name"><a href="#">Earphones</a></div>
                <div class="category-card__products">20 Products</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- .block-categories / end -->

    <!-- .block-product-columns -->
    <?php include"layouts/productColumns.php"?>
    <!-- .block-product-columns / end -->

    <!--การทำ Alert ใช้การประกาศแบบ onclick="Click()" id="shopButton" ตรงปุ่มที่อยากจะให้มี Alert -->
    <!-- <script src="../shop/js/utils.js"></script>
    <script>
    let postion = 0;

    function Click() {
      showAlert();
    }

    document.addEventListener('scroll', (e) => {
      postion = window.scrollY;
      if (postion === 1500) {
        showAlert();
      }
    });
    </script> -->

  </div>
  <!-- site__body / end -->

  <!-- site__footer -->
  <?php include"layouts/footer.php"?>
  <!-- site__footer / end -->