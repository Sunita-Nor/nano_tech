<!-- Header start-->
<?php include"layouts/head.php"?>
<!-- Header End-->

<!-- <style>
body {
  margin: 0;
  padding: 0;
  background: linear-gradient(115deg, #56d8e4 10%, #9f01ea 90%);
  height: 100vh;
  overflow: hidden;
}
</style> -->


<!-- ซ่อนทั้งแถบเลื่อนแนวนอนและแนวตั้ง -->
<style type="text/css">
body {
  overflow: hidden;
}
</style>
<!-- End ซ่อนทั้งแถบเลื่อนแนวนอนและแนวตั้ง -->

<script type="text/javascript">
$(document).ready(function() {

  $.validator.addMethod('username', function(value, element, param) {
    var nameRegex = /^[a-zA-Z0-9]+$/;
    return value.match(nameRegex);
  }, 'Only a-z, A-Z, 0-9 characters are allowed');

  var val = {
    // Specify validation rules
    rules: {
      firstName: "required",
      lastName: "required",
      email: {
        required: true,
        email: true
      },
      date: "required",
      phone: {
        required: true,
        minlength: 10,
        maxlength: 10,
        digits: true
      },

      username: {
        username: true,
        required: true,
        minlength: 4,
        maxlength: 16,
      },
      password: {
        required: true,
        minlength: 6,
        maxlength: 16,
      },
      Cpassword: {
        required: true,
        equalTo: "#password"
      },
      address: "required",
      gender: "required",
      tambol: "required",
      amphur: "required",
      province: "required",
      postalCode: "required",
    },
    // Specify validation error messages
    messages: {
      firstName: "First name is required",
      lastName: "Last name is required",
      email: {
        required: "Please enter email",
        email: "Please enter a valid e-mail",
      },
      date: "Please enter a valid Your Birth Day",
      phone: {
        required: "Phone number is requied",
        minlength: "Please enter 10 digit mobile number",
        maxlength: "Please enter 10 digit mobile number",
        digits: "Only numbers are allowed in this field"
      },

      username: {
        required: "Please enter Username",
        // minlength: 	"Username should be minimum 4 characters",
        // maxlength: 	"Username should be maximum 16 characters",
      },
      password: {
        required: "Please enter Password",
        minlength: "Password should be minimum 6 characters",
        maxlength: "Password should be maximum 16 characters",
      },
      Cpassword: {
        required: "Please enter the same password.",
        equalTo: "Passwords do not match",
      },
      address: "Please enter House No. and Village No.",
      gender: "Please select Gender",
      tambol: "Please enter Sub-district",
      amphur: "Please enter District",
      province: "Please enter Province",
      postalCode: "Please enter Postal Code",
    }
  }
  $("#myForm").multiStepForm({
    // defaultStep:0,
    beforeSubmit: function(form, submit) {
      console.log("called before submiting the form");
      console.log(form);
      console.log(submit);
    },
    validations: val,
  }).navigateTo(0);
});
</script>

<div class="container my-0" id="main-wrapper">
  <div class="row justify-content-center py-5">
    <div class="col-xl-10">
      <div class="card border-4">
        <div class="card-body p-0">
          <div class="row no-gutters">
            <div class="col-lg-6">
              <div class="p-4">

                <form id="myForm" action="add_member.php" method="post">

                  <div class="mt-2">
                    <h2 class="h2 font-weight-bold text-theme text-center">Create an Account</h2>
                  </div>

                  <div class="text-center" style="text-align:center;margin-top:15px;">
                    <span class="step"></span>
                    <span class="step"></span>
                    <span class="step"></span>
                    <span class="step"></span>
                  </div>

                  <!-- step1 -->
                  <div class="form-group tab mt-3">
                    <div class="row">
                      <div class="col">
                        <label>Email address</label>
                        <input type="email" class="form-control " name="email" id="email" placeholder="Email"
                          value="6103011011@feu.edu">
                      </div>
                    </div>

                    <div class="row mt-3">
                      <div class="col">
                        <label for="password">Username</label>
                        <input type="text" class="form-control" name="username" id="username" placeholder="Username"
                          value="">
                      </div>
                    </div>

                    <div class="row mt-3">
                      <div class="col">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" name="password" id="password" placeholder="Password"
                          value="11111111">
                      </div>
                    </div>

                    <div class="row mt-3">
                      <div class="col">
                        <label for="Confirm-Password">Confirm Password</label>
                        <input type="password" class="form-control" id="Cpassword" name="Cpassword"
                          placeholder="Confirm Password" value="11111111">
                      </div>
                    </div>
                  </div>

                  <!-- step2 -->
                  <div class="form-group tab">
                    <label for="yourName">Your name</label>
                    <div class="row">
                      <div class="col">
                        <input type="text" class="form-control" id="firstName" name="firstName" placeholder="First Name"
                          value="asd">
                      </div>

                      <div class="col">
                        <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Last Name"
                          value="asd">
                      </div>
                    </div>

                    <div class="row mt-3">
                      <div class="col">
                        <label for="password">Birth Day</label>
                        <input type="date" class="form-control" name="date" id="date" placeholder="Birth Day">
                      </div>
                    </div>

                    <div class="row mt-4">
                      <div class="col">
                        <label for="yourName">Gender</label>
                        <div class="custom-control custom-radio custom-control-inline mx-4">
                          <input type="radio" class="custom-control-input form-control" id="male" name="gender"
                            value="male">
                          <label class="custom-control-label" for="male">Male
                            <i class="fas fa-mars" style="font-size:20px; color:#87CEFA;"></i>
                          </label>
                        </div>

                        <div class="custom-control custom-radio custom-control-inline mx-4">
                          <input type="radio" class="custom-control-input form-control" id="female" name="gender"
                            value="female">
                          <label class="custom-control-label" for="female">Female
                            <i class="fas fa-venus" style="font-size: 20px; color:#FFB6C1;"></i>
                          </label>
                        </div>

                      </div>
                    </div>

                    <div class="row mt-3">
                      <div class="col">
                        <label for="password">Phone</label>
                        <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone"
                          value="1111111111">
                      </div>
                    </div>

                  </div>

                  <!-- step3 -->
                  <!-- <div class="form-group tab">
                    <div class="row">
                      <div class="col">
                        <label>House No.</label>
                        <input type="text" class="form-control " name="address" id="address" placeholder="House No."
                          value="250 NO.6">
                      </div>
                    </div>

                    <div class="row mt-3">
                      <div class="col">
                        <label>Sub-district</label>
                        <input type="text" class="form-control" name="tambol" id="tambol" placeholder="Sub-district"
                          value="sssss">
                      </div>
                      <div class="col">
                        <label class=""> District</label>
                        <input type="text" class="form-control" name="amphur" id="amphur" placeholder="District"
                          value="sssssss">
                      </div>
                    </div>

                    <div class="row mt-3">
                      <div class="col">
                        <label for="password">Province</label>
                        <input type="text" class="form-control" name="province" id="province" placeholder="Province"
                          value="ssssss">
                      </div>
                    </div>

                    <div class="row mt-2">
                      <div class="col-md-5">
                        <label for="inputZip">Postal Code</label>
                        <input type="text" class="form-control" maxlength="5" name="postalCode" id="postalCode"
                          placeholder="Postal Code" value="73000">
                      </div>
                    </div>
                  </div> -->

                  <!-- step4 -->
                  <div class="form-group tab mt-3">
                    <div class="row">
                      <div class="col-sm-4"><label>Email address</label></div>
                      <div class="col-sm-8"><span id="emailText"></span></div>
                    </div>

                    <div class="row mt-3">
                      <div class="col-sm-4 weight-600"><label>Username</label></div>
                      <div class="col-sm-8"><span id="usernameText"></span></div>
                    </div>

                    <div class="row mt-3">
                      <div class="col-sm-4 weight-600"><label>Password</label></div>
                      <div class="col-sm-8"><span id="passwordText"></span></div>
                    </div>

                    <div class="row mt-3">
                      <div class="col-sm-4 weight-600"><label>Full Name</label></div>
                      <div class="col-sm-8"><span id="yourName"></span></div>
                    </div>

                    <div class="row mt-3">
                      <div class="col-sm-4 weight-600"><label>Gender</label></div>
                      <div class="col-sm-8"><span id="genderText"></span></div>
                    </div>

                    <div class="row mt-3">
                      <div class="col-sm-4 weight-600"><label>Birthday</label></div>
                      <div class="col-sm-8"><span id="birthdayText"></span></div>
                    </div>
                    <!-- 
                    <div class="row mt-3">
                      <div class="col-sm-4 weight-600"><label>Address</label></div>
                      <div class="col-sm-8"><span id="addressText"></span></div>
                    </div> -->

                    <div class="form-check mt-3">
                      <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" id="status" name="status" value="USER">
                        <span class="form-check-sign">I agree with the terms and conditions</span>
                      </label>
                    </div>

                  </div>

                  <!-- button -->
                  <div class="form-group mt-5 py-5">
                    <button type="button"
                      class="previous btn btn-theme arrow-left pull-left mt-3"><span>Previous</span></button>
                    <button type="button"
                      class="next btn btn-theme arrow-right pull-right mt-3"><span>Next</span></button>
                    <button type="button" class="submit btn btn-theme pull-right mt-3"><span>Submit</span></button>
                  </div>

                </form>
              </div>
            </div>

            <div class="col-lg-6 d-none d-lg-inline-block">
              <div class="account-block rounded-right">
                <div class="overlay rounded-right"></div>
                <!-- <div class="account-testimonial">
                  <h4 class="text-white mb-4">This beautiful theme yours!</h4>
                  <p class="lead text-white">"Best investment i made for a long time. Can only recommend it for other
                    users."</p>
                  <p>- Admin User -</p>
                </div> -->
              </div>
            </div>

          </div>
        </div>
        <!-- end card-body -->
      </div>
      <!-- end card -->
      <p class="text-dark text-center mt-1 mb-0">Already have an account?
        <a href="signin.php" class="text-primary2 ml-1">Sign In</a>
      </p>
      <!-- end row -->
    </div>
    <!-- end col -->
  </div>
  <!-- Row -->
</div>

<?php include"layouts/script.php"?>