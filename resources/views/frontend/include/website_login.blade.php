<form id="website_login" onsubmit="login(event)" method="post">
    <h3>Login</h3>
    <p>Please enter your username and password to login.</p>
    <div class="login-register-input">
        <div class="form-group">
            <input type="text" name="email" placeholder="Username or email address" />
        </div>
    </div>
    <div class="login-register-input">
        <div class="form-group">
            <input type="password" name="password" placeholder="Password" />
            <div class="forgot">
                <a href="/forget-password">Forgot?</a>
            </div>
        </div>
    </div>
    <div class="remember-me-btn">
        <h5>Dont have a account? <a href="javascript:void(0)" id="register_btn_link">Register now</a></h5>
        {{-- <input id="remember-me-checkbox" type="checkbox" />
        <label for="remember-me-checkbox">Remember me</label> --}}
    </div>
    <div class="btn-register">
        <button class="btn-register-now" type="submit">Login</button>
    </div>
</form>

<form id="website_register" onsubmit="register(event)" method="post">
    <h3>Register</h3>
    <p>Please enter your email, phone number and password to register.</p>
    <div class="login-register-input">
        <div class="form-group">
            <input type="text" name="name" placeholder="Name" />
        </div>
    </div>
    <div class="login-register-input">
        <div class="form-group">
            <input type="text" name="email" placeholder="email address" />
        </div>
    </div>
    <div class="login-register-input">
        <div class="form-group">
            <input type="text" name="mobile_number" placeholder="Mobile number" />
        </div>
    </div>
    <div class="login-register-input">
        <div class="form-group">
            <input type="password" name="password" placeholder="Password" />
        </div>
    </div>
    <div class="login-register-input">
        <div class="form-group">
            <input type="password" name="password_confirmation" placeholder="Confirm Password" />
        </div>
    </div>
    <div class="remember-me-btn">
        <h5>Already have a account? <a href="javascript:void(0)" id="login_btn_link">Login now</a></h5>
        {{-- <input id="remember-me-checkbox" type="checkbox" />
        <label for="remember-me-checkbox">Remember me</label> --}}
    </div>
    <div class="btn-register">
        <button class="btn-register-now" type="submit">Register</button>
    </div>
</form>