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
              <li class="breadcrumb-item"><a href="index.html">หน้าแรก</a> <svg class="breadcrumb-arrow" width="6px"
                  height="9px">
                  <use xlink:href="images/sprite.svg#arrow-rounded-right-6x9"></use>
                </svg></li>
              <li class="breadcrumb-item"><a href="#">เงื่อนไขบริการ</a> <svg class="breadcrumb-arrow" width="6px"
                  height="9px">
                  <use xlink:href="images/sprite.svg#arrow-rounded-right-6x9"></use>
                </svg></li>
              <li class="breadcrumb-item active" aria-current="page">ขั้นตอนการสั่งซื้อสินค้า</li>
            </ol>
          </nav>
        </div>
        <div class="page-header__title">
          <h4>ขั้นตอนการสั่งซื้อสินค้า</h4>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="block">
            <div class="posts-view">
              <div class="posts-view__list posts-list posts-list--layout--classic">
                <div class="posts-list__body">
                  <div class="posts-list__item">
                    <div class="post-card post-card--layout--grid post-card--size--lg">
                      <div class="post-card__image">
                        <img src="images/howTo/1.png" alt="">
                      </div>
                      <!-- <div class="post-card__info">
                        <div class="post-card__category"><a href="#">Special Offers</a></div>
                        <div class="post-card__name"><a href="#">A Variety Of Other Academic And Non-Academic Approaches
                            Have Been Explored</a></div>
                        <div class="post-card__date">Jule 30, 2019</div>
                        <div class="post-card__content">In one general sense, philosophy is associated with wisdom,
                          intellectual culture and a search for knowledge. In that sense, all cultures...</div>
                        <div class="post-card__read-more"><a href="#" class="btn btn-secondary btn-sm">Read More</a>
                        </div>
                      </div> -->
                    </div>
                  </div>

                  <div class="posts-list__item mt-1">
                    <div class="post-card post-card--layout--grid post-card--size--lg">
                      <div class="post-card__image">
                        <img src="images/howTo/2.png" alt="">
                      </div>
                    </div>
                  </div>
                </div>
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