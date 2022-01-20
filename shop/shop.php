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
    <div class="page-header">
      <div class="page-header__container container">
        <div class="page-header__breadcrumb">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="home1.php">Home</a>
                <svg class="breadcrumb-arrow" width="6px" height="9px">
                  <use xlink:href="images/sprite.svg#arrow-rounded-right-6x9"></use>
                </svg>
              </li>
              <li class="breadcrumb-item">Shop
                <svg class="breadcrumb-arrow" width="6px" height="9px">
                  <use xlink:href="images/sprite.svg#arrow-rounded-right-6x9"></use>
                </svg>
              </li>
              <li class="breadcrumb-item active" aria-current="page">Product List</li>
            </ol>
          </nav>
        </div>
        <div class="page-header__title">
          <h1>Product List</h1>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="shop-layout shop-layout--sidebar--start">
        <div class="shop-layout__sidebar">
          <div class="block block-sidebar">
            <div class="block-sidebar__item">
              <div class="widget-filters widget" data-collapse data-collapse-opened-class="filter--opened">
                <h4 class="widget__title">Filters</h4>
                <div class="widget-filters__list">
                  <div class="widget-filters__item">
                    <div class="filter filter--opened" data-collapse-item>
                      <button type="button" class="filter__title" data-collapse-trigger> Product List
                        <svg class="filter__arrow" width="12px" height="7px">
                          <use xlink:href="images/sprite.svg#arrow-rounded-down-12x7"></use>
                        </svg>
                      </button>
                      <div class="filter__body" data-collapse-content>
                        <div class="filter__container">
                          <div class="filter-categories">
                            <ul class="filter-categories__list">
                              <li class="filter-categories__item filter-categories__item--parent">
                                <a href="#">Speaker</a>
                                <div class="filter-categories__counter">254</div>
                              </li>
                              <li class="filter-categories__item filter-categories__item--parent">
                                <a href="#">Wireless headphones</a>
                                <div class="filter-categories__counter">75</div>
                              </li>
                              <li class="filter-categories__item filter-categories__item--parent">
                                <a href="#"> Phone charger</a>
                                <div class="filter-categories__counter">75</div>
                              </li>
                              <!-- <li class="filter-categories__item filter-categories__item--current">
                                <a href="#"> Speaker </a>
                                <div class="filter-categories__counter">21</div>
                              </li>
                              <li class="filter-categories__item filter-categories__item--child">
                                <a href="#">Glue Guns</a>
                                <div class="filter-categories__counter">7</div>
                              </li>
                              <li class="filter-categories__item filter-categories__item--current">
                                <a href="#"> Wireless headphones </a>
                                <div class="filter-categories__counter">21</div>
                              </li>
                              <li class="filter-categories__item filter-categories__item--child">
                                <a href="#">Glue Guns</a>
                                <div class="filter-categories__counter">7</div>
                              </li>
                              <li class="filter-categories__item filter-categories__item--current">
                                <a href="#"> Phone charger </a>
                                <div class="filter-categories__counter">21</div>
                              </li>
                              <li class="filter-categories__item filter-categories__item--child">
                                <a href="#">Glue Guns</a>
                                <div class="filter-categories__counter">7</div>
                              </li> -->
                            </ul>
                          </div>
                        </div>
                      </div>

                    </div>
                  </div>

                  <!-- Menu Color -->
                  <div class="widget-filters__item">
                    <div class="filter filter--opened" data-collapse-item>
                      <button type="button" class="filter__title" data-collapse-trigger>Color
                        <svg class="filter__arrow" width="12px" height="7px">
                          <use xlink:href="images/sprite.svg#arrow-rounded-down-12x7"></use>
                        </svg>
                      </button>
                      <div class="filter__body" data-collapse-content>
                        <div class="filter__container">
                          <div class="filter-color">
                            <div class="filter-color__list">

                              <!-- Color White -->
                              <label class="filter-color__item">
                                <span class="filter-color__check input-check-color input-check-color--white"
                                  style="color: #fff;">
                                  <label class="input-check-color__body">
                                    <input class="input-check-color__input" type="checkbox">
                                    <span class="input-check-color__box"></span>
                                    <svg class="input-check-color__icon" width="12px" height="9px">
                                      <use xlink:href="images/sprite.svg#check-12x9"></use>
                                    </svg> <span class="input-check-color__stick"></span>
                                  </label>
                                </span>
                              </label>

                              <!-- Color Gainsboro -->
                              <label class="filter-color__item">
                                <span class="filter-color__check input-check-color input-check-color--light"
                                  style="color: #d9d9d9;">
                                  <label class="input-check-color__body">
                                    <input class="input-check-color__input" type="checkbox">
                                    <span class="input-check-color__box"></span>
                                    <svg class="input-check-color__icon" width="12px" height="9px">
                                      <use xlink:href="images/sprite.svg#check-12x9"></use>
                                    </svg> <span class="input-check-color__stick"></span>
                                  </label>
                                </span>
                              </label>

                              <!-- Color black -->
                              <label class="filter-color__item">
                                <span class="filter-color__check input-check-color" style="color: #262626;">
                                  <label class="input-check-color__body">
                                    <input class="input-check-color__input" type="checkbox">
                                    <span class="input-check-color__box"></span>
                                    <svg class="input-check-color__icon" width="12px" height="9px">
                                      <use xlink:href="images/sprite.svg#check-12x9"></use>
                                    </svg>
                                    <span class="input-check-color__stick"></span>
                                  </label>
                                </span>
                              </label>

                              <!-- Color Red -->
                              <label class="filter-color__item">
                                <span class="filter-color__check input-check-color" style="color: #ff4040;">
                                  <label class="input-check-color__body">
                                    <input class="input-check-color__input" type="checkbox">
                                    <span class="input-check-color__box"></span>
                                    <svg class="input-check-color__icon" width="12px" height="9px">
                                      <use xlink:href="images/sprite.svg#check-12x9"></use>
                                    </svg>
                                    <span class="input-check-color__stick"></span>
                                  </label>
                                </span>
                              </label>


                              <!-- Color Orange -->
                              <label class="filter-color__item">
                                <span class="filter-color__check input-check-color" style="color: #ff8126;">
                                  <label class="input-check-color__body">
                                    <input class="input-check-color__input" type="checkbox">
                                    <span class="input-check-color__box"></span>
                                    <svg class="input-check-color__icon" width="12px" height="9px">
                                      <use xlink:href="images/sprite.svg#check-12x9"></use>
                                    </svg>
                                    <span class="input-check-color__stick"></span>
                                  </label>
                                </span>
                              </label>

                              <!-- Color Gold -->
                              <label class="filter-color__item">
                                <span class="filter-color__check input-check-color input-check-color--light"
                                  style="color: #FFD700;">
                                  <label class="input-check-color__body">
                                    <input class="input-check-color__input" type="checkbox">
                                    <span class="input-check-color__box"></span>
                                    <svg class="input-check-color__icon" width="12px" height="9px">
                                      <use xlink:href="images/sprite.svg#check-12x9"></use>
                                    </svg>
                                    <span class="input-check-color__stick"></span>
                                  </label>
                                </span>
                              </label>

                              <!-- Color PaleGoldenrod -->
                              <label class="filter-color__item">
                                <span class="filter-color__check input-check-color input-check-color--light"
                                  style="color: #EEE8AA;">
                                  <label class="input-check-color__body">
                                    <input class="input-check-color__input" type="checkbox">
                                    <span class="input-check-color__box"></span>
                                    <svg class="input-check-color__icon" width="12px" height="9px">
                                      <use xlink:href="images/sprite.svg#check-12x9"></use>
                                    </svg>
                                    <span class="input-check-color__stick"></span>
                                  </label>
                                </span>
                              </label>

                              <!-- Color Green -->
                              <label class="filter-color__item">
                                <span class="filter-color__check input-check-color" style="color: #8fcc14;">
                                  <label class="input-check-color__body">
                                    <input class="input-check-color__input" type="checkbox" checked="checked">
                                    <span class="input-check-color__box"></span>
                                    <svg class="input-check-color__icon" width="12px" height="9px">
                                      <use xlink:href="images/sprite.svg#check-12x9"></use>
                                    </svg>
                                    <span class="input-check-color__stick"></span>
                                  </label>
                                </span>
                              </label>

                              <!-- Color DeepSkyBlue -->
                              <label class="filter-color__item">
                                <span class="filter-color__check input-check-color" style="color: #00BFFF;">
                                  <label class="input-check-color__body">
                                    <input class="input-check-color__input" type="checkbox">
                                    <span class="input-check-color__box"></span>
                                    <svg class="input-check-color__icon" width="12px" height="9px">
                                      <use xlink:href="images/sprite.svg#check-12x9"></use>
                                    </svg>
                                    <span class="input-check-color__stick"></span>
                                  </label>
                                </span>
                              </label>

                              <!-- Color Blue -->
                              <label class="filter-color__item">
                                <span class="filter-color__check input-check-color" style="color: #0000CD;">
                                  <label class="input-check-color__body">
                                    <input class="input-check-color__input" type="checkbox">
                                    <span class="input-check-color__box"></span>
                                    <svg class="input-check-color__icon" width="12px" height="9px">
                                      <use xlink:href="images/sprite.svg#check-12x9"></use>
                                    </svg>
                                    <span class="input-check-color__stick"></span>
                                  </label>
                                </span>
                              </label>

                              <!-- Color LightPink -->
                              <label class="filter-color__item">
                                <span class="filter-color__check input-check-color" style="color: #FFB6C1;">
                                  <label class="input-check-color__body">
                                    <input class="input-check-color__input" type="checkbox">
                                    <span class="input-check-color__box"></span>
                                    <svg class="input-check-color__icon" width="12px" height="9px">
                                      <use xlink:href="images/sprite.svg#check-12x9"></use>
                                    </svg>
                                    <span class="input-check-color__stick"></span>
                                  </label>
                                </span>
                              </label>

                              <!-- Color HotPink -->
                              <label class="filter-color__item">
                                <span class="filter-color__check input-check-color" style="color: #FF69B4;">
                                  <label class="input-check-color__body">
                                    <input class="input-check-color__input" type="checkbox">
                                    <span class="input-check-color__box"></span>
                                    <svg class="input-check-color__icon" width="12px" height="9px">
                                      <use xlink:href="images/sprite.svg#check-12x9"></use>
                                    </svg>
                                    <span class="input-check-color__stick"></span>
                                  </label>
                                </span>
                              </label>

                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- Menu Color End-->
                </div>

                <div class="widget-filters__actions d-flex">
                  <button class="btn btn-primary btn-sm">Filter</button>
                  <button class="btn btn-secondary btn-sm ml-2">Reset</button>
                </div>

              </div>
            </div>
          </div>
        </div>

        <!-- product  List-->
        <div class="shop-layout__content">
          <div class="block">
            <div class="products-view">
              <div class="products-view__options">
                <div class="view-options">
                  <div class="view-options__layout">
                    <div class="layout-switcher">
                      <div class="layout-switcher__list">
                        <button data-layout="grid-3-sidebar" data-with-features="false" title="Grid" type="button"
                          class="layout-switcher__button layout-switcher__button--active">
                          <svg width="16px" height="16px">
                            <use xlink:href="images/sprite.svg#layout-grid-16x16"></use>
                          </svg>
                        </button>
                        <button data-layout="grid-3-sidebar" data-with-features="true" title="Grid With Features"
                          type="button" class="layout-switcher__button">
                          <svg width="16px" height="16px">
                            <use xlink:href="images/sprite.svg#layout-grid-with-details-16x16"></use>
                          </svg>
                        </button>
                        <button data-layout="list" data-with-features="false" title="List" type="button"
                          class="layout-switcher__button">
                          <svg width="16px" height="16px">
                            <use xlink:href="images/sprite.svg#layout-list-16x16"></use>
                          </svg>
                        </button>
                      </div>
                    </div>
                  </div>
                  <div class="view-options__legend">Showing 6 of 98 products</div>
                  <div class="view-options__divider"></div>
                  <div class="view-options__control"><label for="">Sort By</label>
                    <div>
                      <select class="form-control form-control-sm" name="" id="">
                        <option value="">Default</option>
                        <option value="">Name (A-Z)</option>
                      </select>
                    </div>
                  </div>
                  <div class="view-options__control"><label for="">Show</label>
                    <div>
                      <select class="form-control form-control-sm" name="" id="">
                        <option value="">12</option>
                        <option value="">24</option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>
              <div class="products-view__list products-list" data-layout="grid-3-sidebar" data-with-features="false">
                <div class="products-list__body">
                  <!--New Product-->
                  <div class="products-list__item">
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
                        <div class="product-card__rating">
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
                              <svg class="rating__star rating__star--active" width="13px" height="12px">
                                <g class="rating__fill">
                                  <use xlink:href="images/sprite.svg#star-normal"></use>
                                </g>
                                <g class="rating__stroke">
                                  <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                </g>
                              </svg>

                            </div>
                          </div>
                          <div class="product-card__rating-legend">9 Reviews</div>
                        </div>
                        <ul class="product-card__features-list">
                          <li>Speed: 750 RPM</li>
                          <li>Power Source: Cordless-Electric</li>
                          <li>Battery Cell Type: Lithium</li>
                          <li>Voltage: 20 Volts</li>
                          <li>Battery Capacity: 2 Ah</li>
                        </ul>
                      </div>
                      <div class="product-card__actions">
                        <div class="product-card__availability">Availability: <span class="text-success">In
                            Stock</span></div>
                        <div class="product-card__prices">$749.00</div>
                        <div class="product-card__buttons">
                          <button class="btn btn-primary product-card__addtocart" type="button">Add To Cart</button>
                          <button class="btn btn-secondary product-card__addtocart product-card__addtocart--list"
                            type="button">Add To Cart</button>
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
                  <!--New Product End-->

                  <!--Hot Product-->
                  <div class="products-list__item">
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
                        <div class="product-card__rating">
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
                            </div>
                          </div>
                          <div class="product-card__rating-legend">11 Reviews</div>
                        </div>
                        <ul class="product-card__features-list">
                          <li>Speed: 750 RPM</li>
                          <li>Power Source: Cordless-Electric</li>
                          <li>Battery Cell Type: Lithium</li>
                          <li>Voltage: 20 Volts</li>
                          <li>Battery Capacity: 2 Ah</li>
                        </ul>
                      </div>
                      <div class="product-card__actions">
                        <div class="product-card__availability">Availability:
                          <span class="text-success">In Stock</span>
                        </div>
                        <div class="product-card__prices">$1,019.00</div>
                        <div class="product-card__buttons">
                          <button class="btn btn-primary product-card__addtocart" type="button">Add To Cart</button>
                          <button class="btn btn-secondary product-card__addtocart product-card__addtocart--list"
                            type="button">Add To Cart</button>
                          <button class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__wishlist"
                            type="button">
                            <svg width="16px" height="16px">
                              <use xlink:href="images/sprite.svg#wishlist-16"></use>
                            </svg> <span class="fake-svg-icon fake-svg-icon--wishlist-16"></span>
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!--Hot Product End-->

                  <!-- Product End-->
                  <div class="products-list__item">
                    <div class="product-card">
                      <div class="product-card__image">
                        <a href="product.html"><img src="images/products/product-3.jpg" alt=""></a>
                      </div>
                      <div class="product-card__info">
                        <div class="product-card__name">
                          <a href="product.html">Drill Screwdriver Brandix ALX7054 200 Watts</a>
                        </div>
                        <div class="product-card__rating">
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
                            </div>
                          </div>
                          <div class="product-card__rating-legend">9 Reviews</div>
                        </div>
                        <ul class="product-card__features-list">
                          <li>Speed: 750 RPM</li>
                          <li>Power Source: Cordless-Electric</li>
                          <li>Battery Cell Type: Lithium</li>
                          <li>Voltage: 20 Volts</li>
                          <li>Battery Capacity: 2 Ah</li>
                        </ul>
                      </div>
                      <div class="product-card__actions">
                        <div class="product-card__availability">Availability:
                          <span class="text-success">In Stock</span>
                        </div>
                        <div class="product-card__prices">$850.00</div>
                        <div class="product-card__buttons">
                          <button class="btn btn-primary product-card__addtocart" type="button">Add To Cart</button>
                          <button class="btn btn-secondary product-card__addtocart product-card__addtocart--list"
                            type="button">Add To Cart</button>
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
                  <!-- Product End-->

                  <!-- Sale Product -->
                  <div class="products-list__item">
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
                        <div class="product-card__rating">
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
                            </div>
                          </div>
                          <div class="product-card__rating-legend">7 Reviews</div>
                        </div>
                        <ul class="product-card__features-list">
                          <li>Speed: 750 RPM</li>
                          <li>Power Source: Cordless-Electric</li>
                          <li>Battery Cell Type: Lithium</li>
                          <li>Voltage: 20 Volts</li>
                          <li>Battery Capacity: 2 Ah</li>
                        </ul>
                      </div>
                      <div class="product-card__actions">
                        <div class="product-card__availability">Availability:
                          <span class="text-success">In Stock</span>
                        </div>
                        <div class="product-card__prices">
                          <span class="product-card__new-price">$949.00</span>
                          <span class="product-card__old-price">$1189.00</span>
                        </div>
                        <div class="product-card__buttons">
                          <button class="btn btn-primary product-card__addtocart" type="button">Add To Cart</button>
                          <button class="btn btn-secondary product-card__addtocart product-card__addtocart--list"
                            type="button">Add To Cart</button>
                          <button class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__wishlist"
                            type="button">
                            <svg width="16px" height="16px">
                              <use xlink:href="images/sprite.svg#wishlist-16"></use>
                            </svg> <span class="fake-svg-icon fake-svg-icon--wishlist-16"></span>
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- Sale Product End-->
                </div>
              </div>

              <div class="products-view__pagination">
                <ul class="pagination justify-content-center">
                  <li class="page-item disabled">
                    <a class="page-link page-link--with-arrow" href="#" aria-label="Previous">
                      <svg class="page-link__arrow page-link__arrow--left" aria-hidden="true" width="8px" height="13px">
                        <use xlink:href="images/sprite.svg#arrow-rounded-left-8x13"></use>
                      </svg>
                    </a>
                  </li>
                  <li class="page-item active">
                    <a class="page-link" href="#">1</a>
                  </li>
                  <li class="page-item">
                    <a class="page-link" href="#">2
                      <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="page-item">
                    <a class="page-link" href="#">3</a>
                  </li>
                  <li class="page-item">
                    <a class="page-link page-link--with-arrow" href="#" aria-label="Next">
                      <svg class="page-link__arrow page-link__arrow--right" aria-hidden="true" width="8px"
                        height="13px">
                        <use xlink:href="images/sprite.svg#arrow-rounded-right-8x13"></use>
                      </svg>
                    </a>
                  </li>
                </ul>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- site__body / end -->

  <!-- site__footer -->
  <?php include"layouts/footer.php"?>
  <!-- site__footer / end -->