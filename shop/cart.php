<?php
include "layouts/head.php"?>

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
  <?php if (!isset($_SESSION['carts'])) { 
	echo "<script>
	window.location = 'index.php';
	</script>";
	} ?>
  <!-- site__body -->
  <div class="site__body">
    <div class="page-header">
      <div class="page-header__container container">
        <div class="page-header__breadcrumb">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="index.php">Home</a>
                <svg class="breadcrumb-arrow" width="6px" height="9px">
                  <use xlink:href="images/sprite.svg#arrow-rounded-right-6x9"></use>
                </svg>
              </li>
              <li class="breadcrumb-item">
                <a href="#">Cart</a>
                <svg class="breadcrumb-arrow" width="6px" height="9px">
                  <use xlink:href="images/sprite.svg#arrow-rounded-right-6x9"></use>
                </svg>
              </li>
              <li class="breadcrumb-item active" aria-current="page">Shopping Cart</li>
            </ol>
          </nav>
        </div>
        <div class="page-header__title">
          <h1>Shopping Cart</h1>
        </div>
      </div>
    </div>
    <div class="cart block">
      <div class="container">
        <div class="row">
          <div class="col-12 col-lg-6 col-xl-7">
            <table class="cart__table cart-table">
              <thead class="cart-table__head">
                <tr class="cart-table__row">
                  <th class="cart-table__column cart-table__column--image">Image</th>
                  <th class="cart-table__column cart-table__column--product">Product</th>
                  <th class="cart-table__column cart-table__column--price">Price</th>
                  <th class="cart-table__column cart-table__column--quantity">Quantity</th>
                  <th class="cart-table__column cart-table__column--remove"></th>
                </tr>
              </thead>
              <form method="POST" action="addCart.php">
                <input type="hidden" name="action" value="clearCart" />
                <input class="btn btn-danger mb-3" type="submit" value="Clear Cart " />
              </form>
              <tbody class="cart-table__body">
                <?php if (isset($_SESSION['carts'])) {
                                    foreach ($_SESSION['carts'] as $key => $row) {?>
                <tr class="cart-table__row">
                  <td class="cart-table__column cart-table__column--image">
                    <a href="#"><img src="../admin/<?=$row['img_name']?>" alt=""></a>
                  </td>
                  <td class="cart-table__column cart-table__column--product">
                    <a href="#" class="cart-table__product-name"><?=$row['pm_name']?></a>
                    <!-- <ul class="cart-table__options">
                      <li>Color: Yellow</li>
                    </ul> -->
                    <?php if (!empty($row['color'])) {?>
                    <div class="input-radio-color__list">
                      <label class="input-radio-color__item" style="color: <?=$row['color']?>;" data-toggle="tooltip">
                        <input value="<?=$row['color']?>" type="radio" name="color" disabled>
                        <span></span>
                      </label>
                    </div>
                    <?php } ?>
                  </td>
                  <td class="cart-table__column cart-table__column--price" data-title="Price">
                    <?=number_format($row['pm_price'])?></td>
                  <td class="cart-table__column cart-table__column--quantity" data-title="Quantity">
                    <div class="input-number"><input class="form-control input-number__input" type="number" min="1"
                        value="<?=$row['quantity']?>">
                      <form METHOD="POST" action="addCart.php">
                        <input type="hidden" name="action" value="edit">
                        <input type="hidden" name="pm_id" value="<?=$row['pm_id']?>">
                        <input type="hidden" name="color" value="<?=$row['color']?>">
                        <input type="submit" class="input-number__add" name="plus" value="+"></input>
                        <input type="submit" class="input-number__sub" name="minus" value="-"></input>
                      </form>
                    </div>
                  </td>
                  <td class="cart-table__column cart-table__column--remove">
                    <form method="POST" action="addCart.php">
                      <input type="hidden" name="action" value="del" />
                      <input type="hidden" name="index" value="<?=$key?>" />
                      <button type="submit" class="btn btn-light btn-sm btn-svg-icon">
                        <svg width="12px" height="12px">
                          <i class="fas fa-trash-alt"></i>
                        </svg>
                      </button>
                    </form>
                  </td>
                </tr>
                <?php } 
												} ?>
              </tbody>
            </table>
            <a href="shop.php">
              <i class="fas fa-angle-left mt-3" style="font-size: 20px;"></i>
              See more products
            </a>
          </div>
          <div class="col-12 col-lg-6 col-xl-5 mt-4 mt-lg-0">
            <div class="card mb-0">
              <div class="card-body">
                <h3 class="card-title">Cart Totals</h3>
                <table class="cart__totals">
                  <thead class="cart__totals-header">
                    <tr>
                      <th>Subtotal</th>
                      <td>5,877</td>
                    </tr>
                  </thead>
                  <tbody class="cart__totals-body">
                    <tr>
                      <th>Shipping</th>
                      <td>25</td>
                    </tr>
                  </tbody>
                  <tfoot class="cart__totals-footer">
                    <tr>
                      <th>Total</th>
                      <?php
												$sum = 0;
												foreach ($_SESSION['carts'] as $key => $row) {
														$price = (int) $row['pm_price'] * (int) $row['quantity'];
														$sum += $price;
												}
											?>
                      <td><?=number_format($sum)?> บาท</td>
                    </tr>
                  </tfoot>
                </table>
                <button type="submit" class="btn btn-primary btn-xl btn-block cart__checkout-button"
                  onclick="document.location='./checkout.php'">Proceed to checkout</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- site__body / end -->

  <!-- site__footer -->
  <?php include "layouts/footer.php"?>
  <!-- site__footer / end -->
</div>
<!-- site / end -->
</body>

</html>