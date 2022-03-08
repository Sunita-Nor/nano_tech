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
                <a href="index.html">หน้าแรก</a>
                <svg class="breadcrumb-arrow" width="6px" height="9px">
                  <use xlink:href="images/sprite.svg#arrow-rounded-right-6x9"></use>
                </svg>
              </li>
              <li class="breadcrumb-item active" aria-current="page">ติดต่อเรา</li>
            </ol>
          </nav>
        </div>
        <div class="page-header__title">
          <h4>ติดต่อเรา</h4>
        </div>
      </div>
    </div>
    <div class="block">
      <div class="container">
        <div class="card mb-0 contact-us">
          <div class="contact-us__map">
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3874.021715982424!2d100.10653670249094!3d13.83773453323596!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30e2efe2acb2b413%3A0xa99379b4e494a7a!2sNanotech%20production!5e0!3m2!1sth!2sth!4v1646466161299!5m2!1sth!2sth"
              width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
          </div>
          <div class="card-body">
            <div class="contact-us__container">
              <div class="row">
                <div class="col-12 col-lg-6 pb-4 pb-lg-0">
                  <h4 class="contact-us__header card-title">ที่อยู่ของเรา</h4>
                  <div class="contact-us__address">
                    <p> 250 หมู่6 ตำบล สามควายเผือก เมืองนครปฐม นครปฐม 73000
                      <br>Email : nano22.tech@gmail.com
                      <br>หมายเลขโทรศัพท์ : (+66) 9833-02622, (+66) 9045-98725
                    </p>
                  </div>
                </div>
                <div class="col-12 col-lg-6">
                  <h4 class="contact-us__header card-title">เวลาทำการ</h4>
                  <div class="contact-us__address">
                    <p> วันจันทร์ ถึง วันศุกร์ : 10:00 - 19:00
                      <br>วันเสาร์ : 13:00 - 22:00
                      <br>วันอาทิตย์ : <strong style="color: red;">ปิด</strong>
                    </p>
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