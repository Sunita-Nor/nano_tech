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
              <li class="breadcrumb-item"><a href="index.html">Home</a> <svg class="breadcrumb-arrow" width="6px"
                  height="9px">
                  <use xlink:href="images/sprite.svg#arrow-rounded-right-6x9"></use>
                </svg></li>
              <li class="breadcrumb-item"><a href="#">Shop</a> <svg class="breadcrumb-arrow" width="6px" height="9px">
                  <use xlink:href="images/sprite.svg#arrow-rounded-right-6x9"></use>
                </svg></li>
              <li class="breadcrumb-item active" aria-current="page">Checkout</li>
            </ol>
          </nav>
        </div>
        <div class="page-header__title">
          <h1>Checkout</h1>
        </div>
      </div>
    </div>
    <div class="checkout block">
      <div class="container">
        <div class="row">
          <div class="col-12 mb-3">
            <div class="alert alert-lg alert-primary">Returning customer? <a href="#">Click here to login</a></div>
          </div>
          <div class="col-12 col-lg-6 col-xl-7">
            <div class="card mb-lg-0">
              <div class="card-body">
                <h3 class="card-title">Billing details</h3>
                <form action="">
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="checkout-first-name">First Name</label>
                      <input type="text" class="form-control" id="checkout-first-name" placeholder="First Name">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="checkout-last-name">Last Name</label>
                      <input type="text" class="form-control" id="checkout-last-name" placeholder="Last Name">
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="checkout-first-name">House No.</label>
                      <input type="text" class="form-control" id="checkout-first-name" placeholder="House No.">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="checkout-last-name">Sub-district</label>
                      <input type="text" class="form-control" id="checkout-last-name" placeholder="Sub-district">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="checkout-company-name">District</label>
                    <input type="text" class="form-control" id="checkout-company-name" placeholder="District">
                  </div>
                  <div class="form-group">
                    <label for="checkout-postcode">Postcode / ZIP</label>
                    <input type="text" class="form-control" id="checkout-postcode">
                  </div>
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="checkout-phone">Phone</label>
                      <input type="text" class="form-control" id="checkout-phone" placeholder="Phone">
                    </div>
                  </div>
                  <!-- <div class="form-group">
                    <div class="form-check">
                      <span class="form-check-input input-check">
                        <span class="input-check__body">
                          <input class="input-check__input" type="checkbox" id="checkout-create-account">
                          <span class="input-check__box"></span>
                          <svg class="input-check__icon" width="9px" height="7px">
                            <use xlink:href="images/sprite.svg#check-9x7"></use>
                          </svg>
                        </span>
                      </span>
                      <label class="form-check-label" for="checkout-create-account">Create an account?</label>
                    </div>
                  </div> -->
                  <div class="card-divider"></div>
                  <div class="payment-methods mt-4">
                    <h3 class="mt-2">Choose a delivery </h3>
                    <ul class="payment-methods__list mt-4">
                      <li>
                        <label class="payment-methods__item-header">
                          <span class="payment-methods__item-radio input-radio">
                            <span class="input-radio__body">
                              <input class="input-radio__input" name="checkout_payment_method" type="radio"
                                checked="checked">
                              <span class="input-radio__circle"></span>
                            </span>
                          </span>
                          <img src="images/logos/flash.png" alt="" width="150px" height="50%"></span>

                        </label>
                        <div class="payment-methods__item-container">
                          <div class="payment-methods__item-description text-muted">
                          </div>
                        </div>
                      </li>
                      <li>
                        <label class="payment-methods__item-header">
                          <span class="payment-methods__item-radio input-radio">
                            <span class="input-radio__body">
                              <input class="input-radio__input" name="checkout_payment_method" type="radio"
                                checked="checked">
                              <span class="input-radio__circle"></span>
                            </span>
                          </span>
                          <img src="images/logos/kerry.png" alt="" width="150px" height="50%"></span>
                        </label>
                        <div class="payment-methods__item-container">
                          <div class="payment-methods__item-description text-muted">
                          </div>
                        </div>
                      </li>
                      <li>
                        <label class="payment-methods__item-header">
                          <span class="payment-methods__item-radio input-radio">
                            <span class="input-radio__body">
                              <input class="input-radio__input" name="checkout_payment_method" type="radio"
                                checked="checked">
                              <span class="input-radio__circle"></span>
                            </span>
                          </span>
                          <img src="images/logos/J&T.png" alt="" width="150px" height="50%"></span>
                        </label>
                        <div class="payment-methods__item-container">
                          <div class="payment-methods__item-description text-muted">
                          </div>
                        </div>
                      </li>
                      <li>
                        <label class="payment-methods__item-header">
                          <span class="payment-methods__item-radio input-radio">
                            <span class="input-radio__body">
                              <input class="input-radio__input" name="checkout_payment_method" type="radio"
                                checked="checked">
                              <span class="input-radio__circle"></span>
                            </span>
                          </span>
                          <img src="images/logos/thai.png" alt="" width="150px" height="50%">
                        </label>
                        <div class="payment-methods__item-container">
                          <div class="payment-methods__item-description text-muted">
                            <!-- <p class="my-1 mx-4"><samp>Delivery Charge : </samp>฿ 25</p> -->
                          </div>
                        </div>
                      </li>
                    </ul>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <div class="col-12 col-lg-6 col-xl-5 mt-4 mt-lg-0">
            <div class="card mb-0">
              <div class="card-body">
                <h3 class="card-title">Your Order</h3>
                <table class="checkout__totals">
                  <thead class="checkout__totals-header">
                    <tr>
                      <th>Product</th>
                      <th>Total</th>
                    </tr>
                  </thead>
                  <tbody class="checkout__totals-products">
                    <tr>
                      <td>Electric Planer Brandix KL370090G 300 Watts × 2</td>
                      <td>$1,398.00</td>
                    </tr>
                  </tbody>
                  <tbody class="checkout__totals-subtotals">
                    <tr>
                      <th>Shipping</th>
                      <td>25</td>
                    </tr>
                  </tbody>
                  <tfoot class="checkout__totals-footer">
                    <tr>
                      <th>Total</th>
                      <td>5,877</td>
                    </tr>
                  </tfoot>
                </table>
                <button type="submit" class="btn btn-primary btn-xl btn-block"
                  onclick="document.location='./payment.php'">Payment Method</button>
                <button type="submit" class="btn btn-primary btn-xl btn-block cart__checkout-button"
                  onclick="document.location='./yourOrder.php'">Process the payment later</button>
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