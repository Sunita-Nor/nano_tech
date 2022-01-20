<header class="site__header d-lg-block d-none">
  <div class="site-header">
    <!-- .topbar -->
    <div class="site-header__topbar topbar" id="topbar">
      <div class="topbar__container container">
        <div class="topbar__row">
          <!-- <div class="topbar__item topbar__item--link">
            <a class="topbar-link" href="about-us.html">About Us</a>
          </div>
          <div class="topbar__item topbar__item--link">
            <a class="topbar-link" href="contact-us.html">Contacts</a>
          </div>
          <div class="topbar__item topbar__item--link">
            <a class="topbar-link" href="track-order.html">Track Order</a>
          </div> -->

          <div class="topbar__spring"></div>
          <div class="topbar__item">
            <div class="topbar-dropdown">
              <button class="topbar-dropdown__btn" type="button">
                <img class="avatar" src="images/avatar.png"> &nbsp; name &nbsp;
                <svg width="9px" height="10px">
                  <use xlink:href="images/sprite.svg#arrow-rounded-down-7x5"></use>
                </svg>
              </button>
              <div class="topbar-dropdown__body">
                <!-- .menu -->
                <ul class="menu menu--layout--topbar">
                  <li><a href="account.php">Account</a></li>
                  <li><a href="#">Orders</a></li>
                  <li><a href="home1.php">Log Out</a></li>
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

                <li class="nav-links__item">
                  <a href="shop.php">
                    <span>Shop</span>
                  </a>
                </li>
                <!-- <div class="nav-links__menu">
                    <ul class="menu menu--layout--classic">
                      <li><a href="cart.php">Cart</a></li>
                      <li><a href="checkout.php">Checkout</a></li>
                      <li><a href="wishlist.php">Wishlist</a></li>
                      <li><a href="track-order.html">Track Order</a></li>
                    </ul>
                  </div> -->


                <!-- <li class="nav-links__item nav-links__item--with-submenu">
                  <a href="blog-classic.html">
                    <span> Blog
                      <svg class="nav-links__arrow" width="9px" height="6px">
                        <use xlink:href="images/sprite.svg#arrow-rounded-down-9x6"></use>
                      </svg>
                    </span>
                  </a>
                  <div class="nav-links__menu">
                    <ul class="menu menu--layout--classic">
                      <li><a href="blog-classic.html">Blog Classic</a></li>
                      <li><a href="blog-grid.html">Blog Grid</a></li>
                    </ul>
                  </div>
                </li> -->

                <li class="nav-links__item nav-links__item--with-submenu">
                  <a href="#">
                    <span> Pages
                      <svg class="nav-links__arrow" width="9px" height="6px">
                        <use xlink:href="images/sprite.svg#arrow-rounded-down-9x6"></use>
                      </svg>
                    </span>
                  </a>
                  <div class="nav-links__menu">
                    <ul class="menu menu--layout--classic">
                      <li><a href="about-us.html">About Us</a></li>
                      <li><a href="contact-us-alt.html">Contact Us</a></li>
                      <li><a href="faq.html">FAQ</a></li>
                    </ul>
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

              <!--icon หัวใจ-->
              <div class="indicator">
                <a href="wishlist.php" class="indicator__button">
                  <span class="indicator__area">
                    <svg width="20px" height="20px">
                      <use xlink:href="images/sprite.svg#heart-20"></use>
                    </svg>
                    <span class="indicator__value">0</span>
                  </span>
                </a>
              </div>

              <!--icon ตะกร้า-->
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
                        </div><button type="button" class="dropcart__product-remove btn btn-light btn-sm btn-svg-icon">
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

              <!--แจ้งเตือนการชำระเงิน-->
              <!-- <div class="indicator indicator--trigger--click">
                <a href="cart.html" class="indicator__button">
                  <span class="indicator__area">
                    <i class="far fa-bell" style="font-size: 20px;"></i>
                    <span class="indicator__value">1</span>
                  </span>
                </a>
                <div class="indicator__dropdown">
                  <div class="dropcart">
                    <div class="dropcart__products-list">
                      <div class="dropcart__product">
                        <div class="dropcart__product-image">
                          <a href="product.html">
                            <img src="images/Speaker/ZBT-1.png" alt="">
                          </a>
                        </div>
                        <div class="dropcart__product-info">
                          <div class="dropcart__product-name">
                            <a href="product.html">ZBT-119 Mini portable wireless speaker</a>
                          </div>
                          <ul class="dropcart__product-options">
                            <li>Color: Gold</li>
                          </ul>
                          <div class="dropcart__product-meta">
                            <span class="dropcart__product-quantity">1</span> x
                            <span class="dropcart__product-price">฿199</span>
                          </div>
                          <div class="dropcart__product-meta">
                            <span class="dropcart__product-quantity">Status:</span>
                            <span class="dropcart__product-price" style="color: red; font-size:12px;">Waiting for
                              payment </span>
                          </div>
                        </div>
                        <button type="button" class="dropcart__product-remove btn btn-light btn-sm btn-svg-icon">
                          <svg width="10px" height="10px">
                            <use xlink:href="images/sprite.svg#cross-10"></use>
                          </svg>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
              </div> -->
            </div>
            <!-- icon END -->

          </div>
        </div>
      </div>
    </div>

  </div>
</header>