<?php $this->title = 'Login'; ?>

<header class="blog-title"><?= htmlspecialchars($this->title) ?></header>

<div class="user-login-block">
    <form method="post">
        <h1 class="form-title">Username:</h1>
        <input id="username" type="text" name="username" placeholder="Enter Username"/>
        <h1 class="form-title">Password:</h1>
        <input id="password" type="password" name="password" placeholder="Enter password"/>

        <input type="submit" value="Login" id="login-request-button"/>


    </form>
    <a href="<?= APP_ROOT ?>/users//register">Register here</a>
</div>