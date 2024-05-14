<?php include 'header.php'; ?>

<div class="page-top" style="background-image: url('<?php echo BASE_URL; ?>uploads/banner.jpg')">
  <div class="bg"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h2>Customer Registration</h2>
      </div>
    </div>
  </div>
</div>

<div class="page-content">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-xl-4 col-lg-5 col-md-6 col-sm-12">
        <div class="login-form">
          <form action="" method="post">
            
            <div class="mb-3">
              <label for="" class="form-label">Email Address *</label>
              <input type="text" name="email" class="form-control">
            </div>
            <div class="mb-3">
              <label for="" class="form-label">Password *</label>
              <input type="password" name="password" class="form-control">
            </div>
            <div class="mb-3">
              <label for="" class="form-label">Confirm Password *</label>
              <input type="password" name="retype_password" class="form-control">
            </div>
            <div class="mb-3">
              <button type="submit" class="btn btn-primary bg-website" name="form_submit">
                Create Account
              </button>
            </div>
          </form>
          <div class="mb-3">
            <a href="<?php echo BASE_URL; ?>customer-login" class="primary-color">Existing User? Login Now</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include 'footer.php'; ?>
