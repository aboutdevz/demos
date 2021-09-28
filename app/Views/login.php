

<div class="login-register">
    <div class="login-wrapper">
        <div class="welcome flex-grow-1">
            <h2>Selamat Datang !</h2>
            <p>Ayo buat akunmu sendiri</p>
            <a href="<?=base_url('register')?>"><button class="signup btn">Sign Up</button></a>
        </div>
    
        <div class="login-form flex-grow-1">
            <h4>Hai, apa kabar?</h4>
            <small style="margin-bottom: 4em;">Login untuk melanjutkan</small>

            <form id="login" action="<?=base_url('Login/login')?>" method="POST">
                <input type="text" name="username" placeholder="Username">
                <input type="password" name="password" placeholder="Password">
                <button type="submit">Login</button>
            </form>

            <a href=""><small>Forgot Password?</small></a>

            <div class="btn-group icon">
                <img src="assets/fb.svg" alt="facebok icon">
                <img src="assets/twitter.svg" alt="twitter icon">
                <img src="assets/amplop.svg" alt="amplop icon">
            </div>
        </div>
    </div>

</div>