<!-- Header start-->
<?php include"layouts/head.php"?>
<!-- Header End-->

<div class="container py-5" id="main-wrapper">
  <div class="row justify-content-center py-5">
    <div class="col-xl-10">
      <div class="card border-0">
        <div class="card-body p-0">
          <div class="row no-gutters">

            <div class="col-lg-6">
              <div class="account-block1 rounded-left">
                <div class="overlay1 rounded-left"></div>
                <div class="account-testimonial1">
                  <h4 class="text-white mb-4">This beautiful theme yours!</h4>
                  <p class="lead text-white">"Best investment i made for a long time. Can only recommend it for other
                    users."</p>
                  <p>- Admin User -</p>
                </div>
              </div>
            </div>

            <div class="col-lg-6">
              <div class="p-5">
                <div class="mb-50">
                  <h2 class="h2 font-weight-bold text-theme text-center">Member Login</h2>
                </div>
                <form class="needs-validation" novalidate>
                  <div class="form-group mt-4">
                    <label for="">Username</label>
                    <input type="text" class="form-control" name="" placeholder="Username" required>
                    <div class="invalid-feedback">
                      Please enter Username.
                    </div>
                  </div>

                  <div class="form-group my-2">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" placeholder="Password" required>
                    <div class="invalid-feedback">
                      Please enter Password.
                    </div>
                  </div>

                  <div class="form-check my-3">
                    <label class="form-check-label">
                      <input class="form-check-input" type="checkbox" value="">
                      <span class="form-check-sign">Remember me</span>
                    </label>
                    <a href="#" class="float-right">
                      <h5>Forgot Password?</h5>
                    </a>
                  </div>


                  <div class="form-group mt-1">
                    <button type="submit" class="btn btn-theme btn-block btn-lg pull-right">
                      <span>Login</span>
                    </button>
                  </div> <br>

                </form>
              </div>
            </div>


          </div>
        </div>
        <!-- end card-body -->
      </div>
      <!-- end card -->
      <p class="text-muted text-center mt-3 mb-0">Create an Account ?
        <a href="create-account.php" class="text-primary ml-1">Sign Up</a>
      </p>
      <!-- end row -->
    </div>
    <!-- end col -->
  </div>
  <!-- Row -->
</div>


<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>


<?php include"layouts/script.php"?>