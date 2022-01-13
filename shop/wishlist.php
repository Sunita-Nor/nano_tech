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
              <li class="breadcrumb-item">
                <a href="homeMember.php">Home</a> <svg class="breadcrumb-arrow" width="6px" height="9px">
                  <use xlink:href="images/sprite.svg#arrow-rounded-right-6x9"></use>
                </svg>
              </li>
              <li class="breadcrumb-item active" aria-current="page">Wish List</li>
            </ol>
          </nav>
        </div>
        <div class="page-header__title">
          <h1>Wish List</h1>
        </div>
      </div>
    </div>
    <div class="block">
      <div class="container">
        <table class="wishlist">
          <thead class="wishlist__head">
            <tr class="wishlist__row">
              <th class="wishlist__column wishlist__column--image">Image</th>
              <th class="wishlist__column wishlist__column--product">Product</th>
              <th class="wishlist__column wishlist__column--stock">Stock Status</th>
              <th class="wishlist__column wishlist__column--price">Price</th>
              <th class="wishlist__column wishlist__column--tocart"></th>
              <th class="wishlist__column wishlist__column--remove"></th>
            </tr>
          </thead>
          <tbody class="wishlist__body">
            <tr class="wishlist__row">
              <td class="wishlist__column wishlist__column--image">
                <a href="#"><img src="images/Speaker/GT-2.jpg" alt=""></a>
              </td>
              <td class="wishlist__column wishlist__column--product">
                <a href="#" class="wishlist__product-name">GT-112 Portable wireless speaker, HIFI sound</a>
                <!--star-->
                <div class="wishlist__product-rating">
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
                  <div class="wishlist__product-rating-legend">9 Reviews</div>
                </div>
                <!--End star-->
              </td>
              <td class="wishlist__column wishlist__column--stock">
                <div class="badge badge-success">In Stock</div>
              </td>
              <td class="wishlist__column wishlist__column--price">฿259</td>
              <td class="wishlist__column wishlist__column--tocart">
                <button type="button" class="btn btn-primary btn-sm">Add To Cart</button>
              </td>
              <td class="wishlist__column wishlist__column--remove">
                <button type="button" class="btn btn-light btn-sm btn-svg-icon">
                  <svg width="12px" height="12px">
                    <use xlink:href="images/sprite.svg#cross-12"></use>
                  </svg>
                </button>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <!-- site__body / end -->

  <!-- site__footer -->
  <?php include"layouts/footer.php"?>
  <!-- site__footer / end -->