<main class="main-content">
    <header class="blog-title">
        <?php $this->title = 'HOME'; ?>
        <h3><?= htmlspecialchars($this->title) ?></h3>
    </header>
    <ul class="articles" id="article">
        <?php foreach ($this->posts as $post) : ?>
            <li class="single-post">
                <div class="dot">&nbsp;</div>
                <h2 class='title'><?= htmlentities($post['title']) ?></h2>
                <div class="subtitle"><i>Posted on</i>
                    <?= (new DateTime($post['date']))->format('d-M-Y') ?>
                    <i>by</i> <?= htmlentities($post['full_name']) ?>
                </div>
                <p class="content"><?= $post['content'] ?></p>
            </li>
        <?php endforeach ?>
    </ul>



