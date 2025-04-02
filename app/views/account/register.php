<?php include $_SERVER['DOCUMENT_ROOT'] . '/WEBBANHANG/app/views/shares/header.php'; ?>
<?php

if (isset($errors)) {
    echo "<ul>";
    foreach ($errors as $err) {
        echo "<li class='text-danger'>$err</li>";
    }
    echo "</ul>";
}

?>

<section class="d-flex align-items-center justify-content-center vh-100" style="background-color: hsl(0, 0%, 96%)">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card shadow-sm">
          <div class="card-body p-4">
            <h3 class="text-center mb-4">Đăng kí Musicbox</h3>
            <form action="/webbanhang/account/save" method="post">
              <div class="row">
                <div class="col-md-6 mb-3">
                  <input type="text" class="form-control" id="username" name="username" placeholder="Username" required>
                </div>
                <div class="col-md-6 mb-3">
                  <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Fullname" required>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 mb-3">
                  <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                </div>
                <div class="col-md-6 mb-3">
                  <input type="password" class="form-control" id="confirmpassword" name="confirmpassword" placeholder="Confirm Password" required>
                </div>
              </div>
              <div class="text-center">
                <button type="submit" class="btn btn-primary w-100">Register</button>
              </div>
            </form>
            <p class="text-center mt-3">Already have an account? <a href="/webbanhang/account/login">Login</a></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/WEBBANHANG/app/views/shares/footer.php'; ?>
