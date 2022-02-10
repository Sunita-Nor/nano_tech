<header class="site__header d-lg-block d-none">
  <div class="site-header">
    <!-- .topbar -->
    <div class="site-header__topbar topbar" id="topbar">
      <div class="topbar__container container">
        <div class="topbar__row">
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
                  <li><a href="index.php">Log Out</a></li>
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
              <a href="index.php">
                <!-- Logo -->
                <img src="images/footer2.png" alt="" width="190px" height="90px">
                <!-- <svg xmlns="images/LogoTitle.png" width="120px" height="20px"></svg> -->
              </a>
            </div>

            <!-- .nav-links -->
            <div class="nav-panel__nav-links nav-links">
              <ul class="nav-links__list">
                <li class="nav-links__item">
                  <a href="index.php">
                    <span>Home</span>
                  </a>
                </li>

                <li class="nav-links__item">
                  <a href="shop.php">
                    <span>Shop</span>
                  </a>
                </li>

                <li class="nav-links__item">
                  <a href="contact-us.html"><span>Contact Us</span></a>
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
                    <ul class="menu menu--layout--classic">
                      <li><a href="about-us.html">How to order</a></li>
                    </ul>
                  </div>
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
              <!-- <div class="indicator">
                <a href="wishlist.php" class="indicator__button">
                  <span class="indicator__area">
                    <svg width="20px" height="20px">
                      <use xlink:href="images/sprite.svg#heart-20"></use>
                    </svg>
                    <span class="indicator__value">0</span>
                  </span>
                </a>
              </div> -->

              <!--icon ตะกร้า-->
              <div class="indicator indicator--trigger--click">
                <a href="cart.html" class="indicator__button">
                  <span class="indicator__area">
                    <svg width="20px" height="20px">
                      <use xlink:href="images/sprite.svg#cart-20"></use>
                    </svg>
                    <?php if (isset($_SESSION['carts'])) {?>
                    <span class="indicator__value"><?php echo count($_SESSION['carts']) ?></span>
                    <?php }?>
                  </span>
                </a>
                <div class="indicator__dropdown">
                  <!-- .dropcart -->
                  <?php
if (isset($_SESSION['carts'])) {
		$sum = 0;
    foreach ($_SESSION['carts'] as $key => $row) {
			$price = (int) $row['pm_price'] * (int) $row['quantity'];
			$sum += $price;
        ?>
                  <div class="dropcart">
                    <div class="dropcart__products-list">
                      <div class="dropcart__product">
                        <div class="dropcart__product-image">
                          <a href="productDetails.php?pm_id=<?=$row['pm_id']?>"><img
                              src="../admin/<?=$row['img_name']?>" alt="">
                          </a>
                        </div>
                        <div class="dropcart__product-info">
                          <div class="dropcart__product-name">
                            <a href="productDetails.php?pm_id=<?=$row['pm_id']?>"><?=$row['pm_name']?></a>
                          </div>
                          <div class="input-radio-color__list">
                            <span style="margin-top: 6px;">Color: </span>
                            <label class="input-radio-color__item" style="color: <?=$row['color']?>;"
                              data-toggle="tooltip">
                              <input value="<?=$row['color']?>" type="radio" name="color" disabled>
                              <span></span>
                            </label>
                          </div>
                          <div class="dropcart__product-meta">
                            <span class="dropcart__product-quantity"><?=$row['quantity']?></span> x
                            <span class="dropcart__product-price"><?=number_format($row['pm_price'])?> บาท</span>
                          </div>
                        </div>
                        <button type="button" class="dropcart__product-remove btn btn-light btn-sm btn-svg-icon">
                          <svg width="10px" height="10px">
                            <use xlink:href="images/sprite.svg#cross-10"></use>
                          </svg>
                        </button>
                      </div>
                    </div>
                    <?php }} else {
		echo '<div class="dropcart">
			<div class="dropcart__products-list">
			<div class="dropcart__product">
	</div>
	<div class="dropcart__totals">
		<span class="dropcart__product-price">ยังไม่มีสินค้าในตะกร้า</span>
	</div>
	<div class="dropcart__buttons">
			<a class="btn btn-primary" href="shop.php">View Product</a>
	</div>
	</div>
	</div>
	</div>';
} ?>

                    <?php if (isset($_SESSION['carts'])) { ?>
                    <div class="dropcart">
                      <div class="dropcart__products-list">
                        <div class="dropcart__product">
                        </div>
                        <div class="dropcart__totals">
                          <span class="dropcart__product-price">ราคาทั้งหมด <?=number_format($sum)?> บาท</span>
                        </div>
                        <div class="dropcart__buttons">
                          <a class="btn btn-primary" href="cart.php">Check Out</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <?php } ?>
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