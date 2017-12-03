<?php $this->title = 'Register New User'; ?>

    <header id="register-title" class="blog-title">
        register
    </header>
    <div class="user-login-block">
        <form method="post" class="user-register">
            <h1 class="form-title">Username:</h1>
            <input id="username" type="text" name="username" placeholder="Enter Username"/>
            <h1 class="form-title">Password:</h1>
            <input id="password" type="password" name="password" placeholder="Enter password"/>
            <h1 class="form-title">Full Name:</h1>
            <input placeholder="Enter Full Name" id="full_name" type="text" name="full_name"/>
            <div><input type="submit" value="Register"/>
            </div>
        </form>
        <a href="<?= APP_ROOT ?>/users/login">Go to Login</a>
    </div>
</main>