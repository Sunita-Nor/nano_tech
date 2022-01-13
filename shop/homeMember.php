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
  <?php include"layouts/navbar.php"?>
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
          <div class="block-banner__title">Hundreds<br class="block-banner__mobile-br">Hand Tools</div>
          <div class="block-banner__text">Hammers, Chisels, Universal Pliers, Nippers, Jigsaws, Saws</div>
          <div class="block-banner__button">
            <span class="btn btn-sm btn-primary">Shop Now</span>
          </div>
        </a>
      </div>
    </div>
    <!-- .block-banner / end -->

    <!-- .Bestsellers-products -->
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
    <!-- .Bestsellers-products / end -->

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

  </div>
  <!-- site__body / end -->

  <!-- site__footer -->
  <?php include"layouts/footer.php"?>
  <!-- site__footer / end -->