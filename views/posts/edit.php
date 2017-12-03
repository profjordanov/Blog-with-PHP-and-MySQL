<?php $this->title = 'Edit Existing Post'; ?>
<div class="new-post-block">
    <h2 id="editor-title"><?= htmlspecialchars($this->title) ?></h2>
    <form method="post" id="post-form">
        <ul class="title-author">
            <li class="single-element-form">
                <h1 class="title-form">Blog Post Title:</h1>
                <input type="text" name="post_title" value="<?= htmlspecialchars($this->post['title']) ?>" placeholder="Title" id="title"/>
            </li>
        </ul>
        <h1 class="title-form">Content:</h1>
        <textarea name="post_content" class="content-field" placeholder="Content" id="content"><?= htmlspecialchars($this->post['content']) ?></textarea>
        <br>
        <div>Date (yyyy-MM-dd hh:mm:ss):</div>
        <input aria-disabled="true" type="text" name="post_date" value="<?= htmlspecialchars($this->post['date']) ?>"/>
        <div>Author ID:</div>
        <input aria-disabled="true" type="text" name="user_id" value="<?= htmlspecialchars($this->post['user_id']) ?>"/>
        <div><input id="create-new-post-request-button" type="submit" value="Edit">
            <a href="<?= APP_ROOT ?>/posts">[Cancel]</a>
        </div>
    </form>
</div>