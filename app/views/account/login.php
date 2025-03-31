<?php include 'app/views/shares/header.php'; ?>

<section >
  <div >
    <div>
      <div>
        <div>     
          <div>
          <form id="login-form">
            <div>
              <h2 >Login</h2>
              <p >Please enter your login and password!</p>
              <div>
              <label>UserName</label>
                <input type="text" name="username" />
              </div>
              <div>
              <label>Password</label>
                <input type="password" name="password" />
              </div>
              <p class="small mb-5 pb-lg-2"><a href="#!">Forgot password?</a></p>
              <button  type="submit">Login</button>
            </div>
            <div>
              <p class="mb-0">Don't have an account? <a href="\WEBBANHANG\app\views\account\register.php" class="text-white-50 fw-bold">Sign Up</a></p>
            </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
       
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
