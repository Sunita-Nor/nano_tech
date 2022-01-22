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
                <form action="">
                  <div class="payment-methods">
                    <h3>Payment Method</h3> <br>
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
                          <img src="images/logos/SCB.png" alt="" width="120px" height="50%"></span>
                        </label>
                        <div class="payment-methods__item-container">
                          <div class="payment-methods__item-description text-muted">
                            <p class="my-1 mx-4"><samp>Name : </samp>นางสาว สุนิตา หน่อเครือคำ</p>
                            <p class="my-1 mx-4"><samp>Account No : </samp>816-257600-0</p>
                            <p class="my-1 mx-4"><samp>Branch : </samp>Central Airport Chiang Mai</p>
                          </div>
                        </div>
                      </li>
                      <li class="payment-methods__item">
                        <label class="payment-methods__item-header">
                          <span class="payment-methods__item-radio input-radio">
                            <span class="input-radio__body">
                              <input class="input-radio__input" name="checkout_payment_method" type="radio"
                                checked="checked">
                              <span class="input-radio__circle"></span>
                            </span>
                          </span>
                          <img src="images/logos/KS.png" alt="" width="120px" height="50%"></span>
                        </label>
                        <div class="payment-methods__item-container">
                          <div class="payment-methods__item-description text-muted">
                            <p class="my-1 mx-4"><samp>Name : </samp>น.ส สุนิตา หน่อเครือคำ</p>
                            <p class="my-1 mx-4"><samp>Account No : </samp>022-8-71662-6</p>
                            <p class="my-1 mx-4"><samp>Branch : </samp>Tesco Lotus Nakhon Pathom</p>
                          </div>
                        </div>
                      </li>
                      <li class="payment-methods__item">
                        <label class="payment-methods__item-header">
                          <span class="payment-methods__item-radio input-radio">
                            <span class="input-radio__body">
                              <input class="input-radio__input" name="checkout_payment_method" type="radio"
                                checked="checked">
                              <span class="input-radio__circle"></span>
                            </span>
                          </span>
                          <img src="images/logos/promptpay.png" alt="" width="120px" height="50%"></span>
                        </label>
                        <div class="payment-methods__item-container">
                          <div class="payment-methods__item-description text-muted">
                            <p class="my-1 mx-4"><samp>Name : </samp>นางสาว สุนิตา หน่อเครือคำ</p>
                            <p class="my-1 mx-4"><samp>Phone Number : </samp>098-3302622</p>
                          </div>
                        </div>
                      </li>
                      <li class="payment-methods__item">
                        <label class="payment-methods__item-header">
                          <span class="payment-methods__item-radio input-radio">
                            <span class="input-radio__body">
                              <input class="input-radio__input" name="checkout_payment_method" type="radio"
                                checked="checked">
                              <span class="input-radio__circle"></span>
                            </span>
                          </span>
                          <img src="images/logos/COD.png" alt="" width="120px" height="50%"></span>
                        </label>
                        <div class="payment-methods__item-container">
                          <div class="payment-methods__item-description text-muted">
                            <p class="my-1 mx-4">Pay with cash upon delivery.</p>
                          </div>
                        </div>
                      </li>
                    </ul>
                  </div>
                </form>

                <div class="card-divider"></div>

                <div class="item mt-4">
                  <form data-validation="true" action="#" method="post" enctype="multipart/form-data">
                    <h3>Upload Slip</h3>
                    <div class="file-upload mt-4">
                      <div class="image-upload-wrap">
                        <input class="file-upload-input" type='file' onchange="readURL(this);" accept="image/*" />
                        <div class="drag-text my-4">
                          <i class="fas fa-file-upload"></i>
                          <h5 class="my-1"><b>Choose Your Image to Upload</b></h5>
                        </div>
                      </div>
                      <div class="file-upload-content">
                        <img class="file-upload-image" src="#" alt="your image" />
                        <div class="image-title-wrap">
                          <button type="button" onclick="removeUpload()" class="remove-image">Remove</button>
                        </div>
                      </div>
                    </div>
                    <div class="form-row mb-6 my-2">
                      <div class="col-md-6 mb-3">
                        <label for="validationCustom01">Full Name</label>
                        <input type="text" class="form-control" id="validationCustom01" placeholder="Full Name" value=""
                          required>
                      </div>
                      <div class="col-md-6 mb-3">
                        <label for="validationCustom02">วันที่ชำระเงิน</label>
                        <input type="date" class="form-control" id="validationCustom02" placeholder="วันที่ชำระเงิน"
                          required>
                      </div>
                    </div>

                    <!-- <button type="submit" class="btn btn-primary btn-lg btn-block">Submit</button>
                    <a href="succeedOrder.php">Submit</a> -->
                  </form>
                </div>
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
                  <!-- <tbody class="checkout__totals-subtotals">
                    <tr>
                      <th>Subtotal</th>
                      <td>5,877</td>
                    </tr>
                  </tbody> -->
                  <tfoot class="checkout__totals-footer">
                    <tr>
                      <th>Total</th>
                      <td>5,877</td>
                    </tr>
                  </tfoot>
                </table>
                <button type="submit" class="btn btn-primary btn-xl btn-block"
                  onclick="document.location='./succeedOrder.php'">Place Order</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>



  <script src="js/imgPayment.js"></script>
  <!-- site__body / end -->
  <!-- site__footer -->
  <?php include"layouts/footer.php"?>
  <!-- site__footer / end -->