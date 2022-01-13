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

    <div class="block faq">
      <div class="container">
        <div class="faq__section my-3">
          <div class="faq__section-body my-1">
            <div class="d-flex align-items-center">
              <h4>Address Details</h4>
              <button class="btn btn-primary ml-auto" data-toggle="modal" data-target="#exampleModalCenter">
                <i class="fas fa-plus" style="font-size: 10px;"></i>
                New Address
              </button>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
              aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title my-1" id="exampleModalCenterTitle">New Address</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <form>
                      <div class="form-group">
                        <label for="recipient-name" class="col-form-label">House No.</label>
                        <input type="text" class="form-control" id="recipient-name">
                      </div>
                      <div class="form-row">
                        <div class="form-group col-md-6">
                          <label for="">Sub-district</label>
                          <input type="text" class="form-control" id="">
                        </div>
                        <div class="form-group col-md-6">
                          <label for="">District</label>
                          <input type="text" class="form-control" id="">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="">Province</label>
                        <input type="text" class="form-control" id="">
                      </div>
                      <div class="form-group">
                        <label for="">Postal Code</label>
                        <input type="text" class="form-control col-md-3" id="">
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <!-- Modal End-->
            <p>
            <div class="form-check">
              <input class="form-check-input my-2" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
              <label class="form-check-label" for="flexRadioDefault1">
                <h7 style="font-family:verdana; color:#A9A9A9;">Name : </h7>
                <label for="checkout-postcode">Sunita Norkrueakam</label>

                <h7 style="font-family:verdana; color:#A9A9A9;">(+66) </h7>
                <label for="checkout-postcode"> 98330 2622</label>

                &emsp;
                <h7 style="font-family:verdana; color:#A9A9A9;">Address : </h7>
                <label for="checkout-street-address"> 100/18 หมู่.12 ต.ป่าแดด อ.เมือง จ.เชียงใหม่ 50100 </label>
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input my-2" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
              <label class="form-check-label" for="flexRadioDefault2">
                Default checked radio
              </label>
            </div>
            </p>
          </div>

          <div class="faq__section my-3">
            <div class="faq__section-body my-1">
              <div class="row my-0">
                <div class="faq__section-column col-12">
                  <div class="typography my-0">
                    <h4 class="card-title">Billing details</h4>
                    <table class="checkout__totals">
                      <thead class="checkout__totals-header">
                        <tr>
                          <th>Product</th>
                          <th class="text-center">จำนวน</th>
                          <th>Total</th>
                        </tr>
                      </thead>
                      <tbody class="checkout__totals-products">
                        <tr>
                          <td>Electric Planer Brandix KL370090G 300 Watts</td>
                          <td class="text-center">1</td>
                          <td>฿1,398.00</td>
                        </tr>
                        <tr>
                          <td>Undefined Tool IRadix DPS3000SY 2700 watts</td>
                          <td class="text-center">1</td>
                          <td>฿849.00</td>
                        </tr>
                      </tbody>
                    </table>

                    <div class="row">
                      <div class='col text-center'>
                        <input type="radio" name="imgbackground" id="img1" class="d-none imgbgchk" value="">
                        <label for="img1">
                          <img src="images/logos/flash.png" alt="Image 1">
                          <div class="tick_container">
                            <div class="tick"><i class="fa fa-check"></i></div>
                          </div>
                        </label>
                      </div>

                      <div class='col text-center'>
                        <input type="radio" name="imgbackground" id="img2" class="d-none imgbgchk" value="">
                        <label for="img2">
                          <img src="images/logos/kerry.png" alt="Image 2">
                          <div class="tick_container">
                            <div class="tick"><i class="fa fa-check"></i></div>
                          </div>
                        </label>
                      </div>

                      <div class='col text-center'>
                        <input type="radio" name="imgbackground" id="img3" class="d-none imgbgchk" value="">
                        <label for="img3">
                          <img src="images/logos/J&T.png" alt="Image 3">
                          <div class="tick_container">
                            <div class="tick"><i class="fa fa-check"></i></div>
                          </div>
                        </label>
                      </div>

                      <div class='col text-center'>
                        <input type="radio" name="imgbackground" id="img4" class="d-none imgbgchk" value="">
                        <label for="img4">
                          <img src="images/logos/thai.png" alt="Image 4">
                          <div class="tick_container">
                            <div class="tick"><i class="fa fa-check"></i></div>
                          </div>
                        </label>
                      </div>
                    </div>

                    <table class="checkout__totals">
                      <tbody class="checkout__totals-subtotals">
                        <tr>
                          <th>Subtotal</th>
                          <td>฿2,247.00</td>
                        </tr>
                        <tr>
                          <th>Shipping</th>
                          <td>฿25.00</td>
                        </tr>
                      </tbody>
                      <tfoot class="checkout__totals-footer">
                        <tr>
                          <th>Total</th>
                          <td>฿2,272.00</td>
                        </tr>
                      </tfoot>
                    </table>

                    <button type="submit" class="btn btn-primary btn-xl col-3 my-2" style="float: right;">
                      Place Order
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- <div class="faq__section my-3">
            <div class="faq__section-body my-1">
              <div class="row my-0">
                <div class="faq__section-column col-12">
                  <div class="typography my-0">
                    <h4 class="card-title">Payment</h4>
                    <div class="payment-methods">
                      <ul class="payment-methods__list">
                        <li class="payment-methods__item payment-methods__item--active">
                          <label class="payment-methods__item-header">
                            <span class="payment-methods__item-radio input-radio">
                              <span class="input-radio__body">
                                <input class="input-radio__input" name="checkout_payment_method" type="radio"
                                  checked="checked">
                                <span class="input-radio__circle"></span>
                              </span>
                            </span>
                            <span class="payment-methods__item-title">
                              <img src="images/logos/SCB.png" alt="" width="160px" height="50%">
                            </span>
                          </label>
                          <div class="payment-methods__item-container">
                            <div class="payment-methods__item-description text-muted">Make your payment directly into
                              our
                              bank account. Please use your Order ID as the payment reference. Your order will not be
                              shipped until the funds have cleared in our account.
                            </div>
                          </div>
                        </li>
                        <li class="payment-methods__item">
                          <label class="payment-methods__item-header">
                            <span class="payment-methods__item-radio input-radio">
                              <span class="input-radio__body">
                                <input class="input-radio__input" name="checkout_payment_method" type="radio">
                                <span class="input-radio__circle"></span>
                              </span>
                            </span>
                            <span class="payment-methods__item-title">
                              <img src="images/logos/KS.png" alt="" width="160px" height="50%">
                            </span>
                          </label>
                          <div class="payment-methods__item-container">
                            <div class="payment-methods__item-description text-muted">
                              Please send a check to Store Name,
                              Store Street, Store Town, Store State / County, Store Postcode.
                            </div>
                          </div>
                        </li>
                        <li class="payment-methods__item">
                          <label class="payment-methods__item-header">
                            <span class="payment-methods__item-radio input-radio">
                              <span class="input-radio__body">
                                <input class="input-radio__input" name="checkout_payment_method" type="radio">
                                <span class="input-radio__circle"></span>
                              </span>
                            </span>
                            <span class="payment-methods__item-title">
                              <img src="images/logos/promptpay.png" alt="" width="160px" height="50%">
                            </span>
                          </label>
                          <div class="payment-methods__item-container">
                            <div class="payment-methods__item-description text-muted">Pay with cash upon delivery.</div>
                          </div>
                        </li>
                        <li class="payment-methods__item">
                          <label class="payment-methods__item-header">
                            <span class="payment-methods__item-radio input-radio">
                              <span class="input-radio__body">
                                <input class="input-radio__input" name="checkout_payment_method" type="radio">
                                <span class="input-radio__circle"></span>
                              </span>
                            </span>
                            <span class="payment-methods__item-title">
                              <img src="images/logos/COD.png" alt="" width="150px" height="50%">
                            </span>
                          </label>
                          <div class="payment-methods__item-container">
                            <div class="payment-methods__item-description text-muted">Pay with cash upon delivery.</div>
                          </div>
                        </li>
                      </ul>
                    </div>

                    <hr>

                    <h6 class="text-right font-weight-normal">ยอดรวมสินค้า :
                      &emsp;&emsp;&emsp;&emsp;
                      ฿2,247.00
                    </h6>
                    <h6 class="text-right font-weight-normal my-2">รวมการจัดส่ง :
                      &emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;
                      ฿25.00
                    </h6>
                    <h6 class="text-right font-weight-normal my-3">การชำระเงินทั้งหมด :
                      &emsp;&ensp;
                      <code style="font-size: 25px; color:#87CEFA;" sans-serif";">฿2,272.00</code>
                    </h6>

                    <button type="submit" class="btn btn-primary btn-xl col-3 my-2" style="float: right;">
                      Place Order
                    </button>

                  </div>
                </div>
              </div>
            </div>
          </div> -->
        </div>
      </div>
      <!-- site__body / end -->
      <!-- site__footer -->
      <?php include"layouts/footer.php"?>
      <!-- site__footer / end -->