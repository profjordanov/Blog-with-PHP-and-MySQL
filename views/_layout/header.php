<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="<?= APP_ROOT ?>/content/styles.css"/>
    <link rel="icon" href="<?= APP_ROOT ?>/content/images/favicon.ico"/>
    <script src="<?= APP_ROOT ?>/content/scripts/jquery-3.0.0.min.js"></script>
    <script src="<?= APP_ROOT ?>/content/scripts/blog-scripts.js"></script>
    <link rel="stylesheet" href="<?= APP_ROOT ?>/content/styles/style.css">
    <link rel="stylesheet" href="<?= APP_ROOT ?>/content/styles/main-style.css">
    <link rel="stylesheet" href="<?= APP_ROOT ?>/content/styles/form-style.css">
    <link rel="stylesheet" href="<?= APP_ROOT ?>/content/styles/new-post-style.css">
    <script src="<?= APP_ROOT ?>/content/scripts/libs/mustache.js"></script>
    <script src="<?= APP_ROOT ?>/content/scripts/libs/moment.js"></script>
    <script src="<?= APP_ROOT ?>/content/scripts/libs/jquery.min.js"></script>
    <script src="<?= APP_ROOT ?>/content/scripts/libs/jquery.noty.minified.js"></script>
    <script src="<?= APP_ROOT ?>/content/scripts/libs/sammy.js"></script>
    <script src="<?= APP_ROOT ?>/content/scripts/libs/framework.js"></script>
    <title><?php if (isset($this->title)) echo htmlspecialchars($this->title) ?></title>
</head>

<body>
<div class="wrapper">
    <aside class="sidebar">
        <div class="logo"><a href="<?= APP_ROOT ?>">
                <img src="<?= APP_ROOT ?>/content/images/logo_sidebar.png" alt="" width="123" height="123"></a>
        </div>
        <hr>
        <nav>
            <ul>
                <li class="single-menu-element">
                    <a href="<?= APP_ROOT ?>/" class="single-menu-element-link">
                        Home
                    </a>
                </li>
                <?php if ($this->isLoggedIn) : ?>
                    <li class="single-menu-element">
                        <span>Hello, <b><?= htmlspecialchars($_SESSION['username']) ?></b></span>
                    </li>
                    <li class="single-menu-element">
                        <a href="<?= APP_ROOT ?>/posts/create" class="single-menu-element-link">
                            Create Post
                        </a>
                    </li>

                    <li class="single-menu-element">
                        <a href="<?= APP_ROOT ?>/posts">Posts</a>
                    </li>

                    <li class="single-menu-element">
                        <a href="<?= APP_ROOT ?>/users">Users</a>
                    </li>
                    <li class="single-menu-element">
                        <form method="post" action="<?= APP_ROOT ?>/users/logout">
                            <input type="submit" value="Logout"/>
                        </form>
                    </li>
                <?php else: ?>
                    <li class="single-menu-element">
                        <a href="<?= APP_ROOT ?>/users/login" class="single-menu-element-link">
                            Login
                        </a>
                    </li>
                    <li class="single-menu-element">
                        <a href="<?= APP_ROOT ?>/users/register" class="single-menu-element-link">
                            Register
                        </a>
                    </li>
                <?php endif; ?>
            </ul>
        </nav>
    </aside>




            <?php require_once('show-notify-messages.php'); ?>
