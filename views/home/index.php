<main class="main-content">
    <header class="blog-title">
        <?php $this->title = 'HOME'; ?>
        <h3><?= htmlspecialchars($this->title) ?></h3>
    </header>
    <div id="demo">
        <img onclick="loadDoc()" src="https://www.lincolnu.edu/image/image_gallery?uuid=9cdce335-75a3-4260-9ca5-6fa2fbb51048&groupId=22420&filename=more-info-button.png&t=1476245231873" alt="">
    </div>
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
    <script>
        function loadDoc() {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("demo").innerHTML =
                        this.responseText;
                }
            };
            xhttp.open("GET", "ajax_info.txt", true);
            xhttp.send();
        }
    </script>



