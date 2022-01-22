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
                <a href="home1.php">Home</a>
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
              <tbody class="cart-table__body">
                <tr class="cart-table__row">
                  <td class="cart-table__column cart-table__column--image">
                    <a href="#"><img src="images/products/product-1.jpg" alt=""></a>
                  </td>
                  <td class="cart-table__column cart-table__column--product">
                    <a href="#" class="cart-table__product-name">Electric Planer Brandix KL370090G 300 Watts</a>
                    <ul class="cart-table__options">
                      <li>Color: Yellow</li>
                    </ul>
                  </td>
                  <td class="cart-table__column cart-table__column--price" data-title="Price">699.00</td>
                  <td class="cart-table__column cart-table__column--quantity" data-title="Quantity">
                    <div class="input-number"><input class="form-control input-number__input" type="number" min="1"
                        value="2">
                      <div class="input-number__add"></div>
                      <div class="input-number__sub"></div>
                    </div>
                  </td>
                  <td class="cart-table__column cart-table__column--remove">
                    <button type="button" class="btn btn-light btn-sm btn-svg-icon">
                      <svg width="12px" height="12px">
                        <i class="fas fa-trash-alt"></i>
                      </svg>
                    </button>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="col-12 col-lg-6 col-xl-5 mt-4 mt-lg-0">
            <div class="card mb-0">
              <div class="card-body">
                <h3 class="card-title">Cart Totals</h3>
                <table class="cart__totals">
                  <thead class="cart__totals-header">
                    <tr>
                      <th>Subtotal</th>
                      <td>5,877.00</td>
                    </tr>
                  </thead>
                  <tbody class="cart__totals-body">
                    <tr>
                      <th>Shipping</th>
                      <td>25.00<div class="cart__calc-shipping"><a href="#">Calculate Shipping</a></div>
                      </td>
                    </tr>
                  </tbody>
                  <tfoot class="cart__totals-footer">
                    <tr>
                      <th>Total</th>
                      <td>5,902.00</td>
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
  <?php include"layouts/footer.php"?>
  <!-- site__footer / end -->
</div>
<!-- site / end -->
</body>

</html>