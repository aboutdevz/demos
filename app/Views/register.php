<div class="login-register">
    <div class="login-wrapper">
        
        <div class="login-form flex-grow-1">
            <h4>Selamat Datang</h4>
            <small style="margin-bottom: 4em;">Ayo buat akunmu sendiri</small>
            <form id="register" action="<?=base_url('users')?>" method="POST">
                <input id="username" type="text" name="username" placeholder="Username">
                <div class="feedback text-danger">

                </div>
                <div class="valid-feedback">
                    Looks good!
                </div>
                <input id="password" type="password" name="password" placeholder="Password">
                <div class="feedback text-danger">
                    
                </div>
                <div class="valid-feedback">
                    Looks good!
                </div>
                <input id="cnfPassword" type="password" name="cnfPassword" placeholder="Password">
                <div class="feedback text-danger">
                    
                </div>
                <div class="valid-feedback">
                    Looks good!
                </div>
                <button class="btn btnSubmit" type="submit" disabled>Register</button>
            </form>


            <div class="btn-group icon">
                <img src="assets/fb.svg" alt="facebok icon">
                <img src="assets/twitter.svg" alt="twitter icon">
                <img src="assets/amplop.svg" alt="amplop icon">
            </div>
        </div>
        
        <div class="welcome flex-grow-1">
            <h2>Hai, Apa Kabar</h2>
            <p>Ayo buat akunmu sendiri</p>
            <a href="<?=base_url('Login')?>"><button class="signup btn">Login</button></a>
        </div>
    </div>

</div>