<?php 
include"layouts/head.php";
require_once 'includes/database.php';
?>

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
                <a href="home1.php">Home</a>
                <svg class="breadcrumb-arrow" width="6px" height="9px">
                  <use xlink:href="images/sprite.svg#arrow-rounded-right-6x9"></use>
                </svg>
              </li>
              <li class="breadcrumb-item">
                <a href="#">Product List</a>
                <svg class="breadcrumb-arrow" width="6px" height="9px">
                  <use xlink:href="images/sprite.svg#arrow-rounded-right-6x9"></use>
                </svg>
              </li>
              <li class="breadcrumb-item active" aria-current="page">Product Details</li>
            </ol>
          </nav>
        </div>
      </div>
    </div>

    <?php 
    $sql = "SELECT * FROM productmaster LEFT JOIN product_detail ON product_detail.pm_id = productmaster.pm_id LEFT JOIN product_img ON product_img.pm_id = productmaster.pm_id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
      while($result = $stmt->fetch(PDO::FETCH_ASSOC)){
    ?>

    <div class="block">
      <div class="container">
        <div class="product product--layout--standard" data-layout="standard">
          <div class="product__content">
            <!-- .product__gallery -->

            <div class="product__gallery">
              <div class="product-gallery">
                <div class="product-gallery__featured">
                  <div class="owl-carousel" id="product-image">
                    <a href="#" target="_blank">
                      <img class="img-fluid" src="../admin/<?php echo $result["img_name"]; ?>" alt="">
                    </a>
                    <a href="#" target="_blank">
                      <img src="images/products/product-16-1.jpg" alt="">
                    </a>
                    <a href="#" target="_blank">
                      <img src="images/products/product-16-2.jpg" alt="">
                    </a>
                    <a href="#" target="_blank">
                      <img src="images/products/product-16-3.jpg" alt="">
                    </a>
                    <a href="#" target="_blank">
                      <img src="images/products/product-16-4.jpg" alt="">
                    </a>
                  </div>
                </div>
                <div class="product-gallery__carousel">
                  <div class="owl-carousel" id="product-carousel">
                    <a href="#" class="product-gallery__carousel-item">
                      <img class="img-fluid" src="../admin/<?php echo $result["img_name"]; ?>" alt="">
                      <a href="#" class="product-gallery__carousel-item">
                        <img class="product-gallery__carousel-image" src="images/products/product-16-1.jpg" alt="">
                      </a>
                      <a href="#" class="product-gallery__carousel-item">
                        <img class="product-gallery__carousel-image" src="images/products/product-16-2.jpg" alt="">
                      </a>
                      <a href="#" class="product-gallery__carousel-item">
                        <img class="product-gallery__carousel-image" src="images/products/product-16-3.jpg" alt="">
                      </a>
                      <a href="#" class="product-gallery__carousel-item">
                        <img class="product-gallery__carousel-image" src="images/products/product-16-4.jpg" alt="">
                      </a>
                  </div>
                </div>
              </div>
            </div>
            <!-- .product__gallery / end -->

            <!-- .product__info -->
            <div class="product__info">
              <div class="product__wishlist-compare">
                <button type="button" class="btn btn-sm btn-light btn-svg-icon" data-toggle="tooltip"
                  data-placement="right" title="Wishlist">
                  <svg width="16px" height="16px">
                    <use xlink:href="images/sprite.svg#wishlist-16"></use>
                  </svg>
                </button>
                <button type="button" class="btn btn-sm btn-light btn-svg-icon" data-toggle="tooltip"
                  data-placement="right" title="Compare">
                  <svg width="16px" height="16px">
                    <use xlink:href="images/sprite.svg#compare-16"></use>
                  </svg>
                </button>
              </div>
              <h1 class="product__name">Brandix Screwdriver SCREW1500ACC</h1>
              <div class="product__description">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur
                ornare, mi in ornare elementum, libero nibh lacinia urna, quis convallis lorem erat at purus. Maecenas
                eu varius nisi.
              </div>
            </div>
            <!-- .product__info / end -->

            <!-- .product__sidebar -->
            <div class="product__sidebar">
              <div class="product__prices">฿ <?php echo $result["pm_price"];?></div>
              <!-- .product__options -->
              <form class="product__options">
                <div class="form-group product__option">
                  <label class="product__option-label">Color</label>
                  <div class="input-radio-color">
                    <div class="input-radio-color__list">
                      <label class="input-radio-color__item input-radio-color__item--white" style="color: #fff;"
                        data-toggle="tooltip" title="White">
                        <input type="radio" name="color">
                        <span></span>
                      </label>
                      <label class="input-radio-color__item" style="color: #ffd333;" data-toggle="tooltip"
                        title="Yellow">
                        <input type="radio" name="color">
                        <span></span></label>
                      <label class="input-radio-color__item" style="color: #ff4040;" data-toggle="tooltip" title="Red">
                        <input type="radio" name="color">
                        <span></span>
                      </label>
                      <label class="input-radio-color__item input-radio-color__item--disabled" style="color: #4080ff;"
                        data-toggle="tooltip" title="Blue">
                        <input type="radio" name="color" disabled="disabled">
                        <span></span>
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group product__option">
                  <label class="product__option-label" for="product-quantity">Quantity</label>
                  <div class="product__actions">
                    <div class="product__actions-item">
                      <div class="input-number product__quantity">
                        <input id="product-quantity" class="input-number__input form-control form-control-lg"
                          type="number" min="1" value="1">
                        <div class="input-number__add"></div>
                        <div class="input-number__sub"></div>
                      </div>
                    </div>
                  </div>
                  <div class="form-group product__option mt-2">
                    <div class="product__actions">
                      <div class="product__actions-item product__actions-item--addtocart">
                        <a href="cart.php" class="btn btn-primary btn-lg">Add to cart</a>
                      </div>
                      <div class="product__actions-item product__actions-item--addtocart">
                        <a href="cart.php" class="btn btn-primary btn-lg">Buy</a>
                      </div>
                    </div>
                  </div>
              </form>
              <!-- .product__options / end -->
            </div>
            <!-- .product__end -->
          </div>
        </div>

        <div class="product-tabs">
          <div class="product-tabs__list">
            <a href="#tab-specification" class="product-tabs__item"></a>
          </div>
          <div class="product-tabs__content">
            <div class="product-tabs__pane" id="tab-specification">
              <div class="spec">
                <h3 class="spec__header">Specification</h3>
                <div class="spec__section">
                  <h4 class="spec__section-title">General</h4>
                  <div class="spec__row">
                    <div class="spec__name">Name</div>
                    <div class="spec__value">GT-112 Portable wireless speaker, HIFI sound</div>
                  </div>
                  <div class="spec__row">
                    <div class="spec__name">Material</div>
                    <div class="spec__value">Aluminium, Plastic</div>
                  </div>
                  <div class="spec__row">
                    <div class="spec__name">Certification</div>
                    <div class="spec__value">CE</div>
                  </div>
                  <!-- <div class="spec__row">
                    <div class="spec__name">Play time</div>
                    <div class="spec__value">4 H</div>
                  </div>
                  <div class="spec__row">
                    <div class="spec__name">Weight</div>
                    <div class="spec__value">1.5 kg</div>
                  </div> -->
                </div>
                <div class="spec__section">
                  <h4 class="spec__section-title">Dimensions</h4>
                  <div class="spec__disclaimer">
                    Information on technical characteristics, the delivery set, the country of manufacture and the
                    appearance of the goods is for reference only and is based on the latest
                    information available at the time of publication.
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>

    <?php } ?>

  </div>
  <!-- site__body / end -->

  <!-- site__footer -->
  <?php include"layouts/footer.php"?>
  <!-- site__footer / end -->
  <!-- site / end -->