<script>
    $(document).ready(function(){
        $("button").click(function(){
            $("#article").load("<?= APP_ROOT ?>/content/ajax.html");
            $(".blog-title").hide();
            $("button").hide();
            window.scrollTo(0,0);
        });
    });
</script>
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

<div class="content" style="margin-left: 30%">
    <button>MORE INFO</button>
</div>

