<?php include 'app/views/shares/header.php'; ?>
<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Font Awesome (để hiển thị icon) -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<section class="vh-100">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-6 text-black">

        <div class="px-5 ms-xl-4">
          <i class="fas fa-crow fa-2x me-3 pt-5 mt-xl-4" style="color: #709085;"></i>
          <span class="h1 fw-bold mb-0">MUSICBOXSHOP</span>
        </div>

        <div class="d-flex align-items-center h-custom-2 px-5 ms-xl-4 mt-5 pt-5 pt-xl-0 mt-xl-n5">
          <form action="/webbanhang/account/checklogin" method="post" style="width: 23rem;">
            <h3 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign into your account</h3>

            <div class="form-outline mb-4">
            <label class="form-label">UserName</label>
              <input type="text" name="username" class="form-control form-control-lg" required />
            </div>

            <div class="form-outline mb-4">
            <label class="form-label">Password</label>
              <input type="password" name="password" class="form-control form-control-lg" required />
            </div>

            <div class="pt-1 mb-4">
              <button class="btn btn-info btn-lg btn-block" type="submit">Login</button>
            </div>

            <p class="small mb-5 pb-lg-2"><a class="text-muted" href="#">Forgot password?</a></p>
            <p>Don't have an account? <a href="/webbanhang/account/register" class="link-info">Register here</a></p>
          </form>
        </div>
      </div>
      
      <div class="col-sm-6 px-0 d-none d-sm-block">
        <img src="https://media.soundoflife.com/articles/462/anastasia-saldatava-7Ys0u4woGQs-unsplash_1024x1024.jpg"
          alt="Login image" class="w-100 vh-100" style="object-fit: cover; object-position: left;">
      </div>
    </div>
  </div>
</section>

<?php include 'app/views/shares/footer.php'; ?>