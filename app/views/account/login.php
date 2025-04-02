<?php include 'app/views/shares/header.php'; ?>

 <!-- Section: Design Block -->
 <section class="text-center text-lg-start">
        <div class="container py-4">
            <div class="row g-0 align-items-center">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <div class="card cascading-right bg-body-tertiary" style="backdrop-filter: blur(30px);">
                        <div class="card-body p-5 shadow-5 text-center">
                            <h2 class="fw-bold mb-5">Đăng Nhập vào Musicbox</h2>
                            <p>Please enter your login and password!</p>
                            <form id="login-form">
                                <div class="mb-4">
                                    <input type="text" name="username" class="form-control" placeholder="UserName" />
                                </div>
                                <div class="mb-4">
                                    <input type="password" name="password" class="form-control" placeholder="Password" />
                                </div>
                                <p class="small mb-5 pb-lg-2"><a href="#">Forgot password?</a></p>
                                <button type="submit" class="btn btn-primary btn-block mb-4">Login</button>
                                <div class="text-center">
                                    <p class="mb-0">Don't have an account? <a href="/WEBBANHANG/app/views/account/register.php" class="text-primary fw-bold">Sign Up</a></p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>          
            </div>
        </div>
    </section>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
       
<?php include 'app/views/shares/footer.php'; ?>
<script>
document.getElementById('login-form').addEventListener('submit', function(event) {
    event.preventDefault();
    
    const formData = new FormData(this);
    const jsonData = {};
    formData.forEach((value, key) => {
        jsonData[key] = value;
    });

    fetch('/webbanhang/account/checkLogin', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify(jsonData)
    })
    .then(response => response.json())
    .then(data => {
    
        if (data.token) {
            localStorage.setItem('jwtToken', data.token);
            location.href = '/webbanhang/Product';
        } else {
            alert('Đăng nhập thất bại');
        }
    });
});
</script>
