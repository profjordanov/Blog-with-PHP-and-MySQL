<?php $this->title = 'Delete Post'; ?>
<div class="new-post-block">
<h1 id="editor-title" style="color: #dd0000">Are you sure you want to delete this post?</h1>

<form method="post" id="post-form">
    <ul class="title-author">
        <li class="single-element-form">
            <h1 class="title-form">Blog Post Title:</h1>
            <input type="text" name="post_title" value="<?= htmlspecialchars($this->post['title']) ?>" placeholder="Title" id="title" disabled/>
        </li>
    </ul>
    <h1 class="title-form">Content:</h1>
    <textarea name="post_content" class="content-field" placeholder="Content" id="content" disabled><?= htmlspecialchars($this->post['content']) ?></textarea>
    <br>
    <div>Date:</div>
    <input type="text" value="<?= $this->post['date']?>" disabled />
    <div>Author ID:</div>
    <input type="text" value="<?=htmlspecialchars($this->post['user_id'])?>" disabled />
    <div><input id="create-new-post-request-button" type="submit" value="Delete" />
        <a href="<?=APP_ROOT?>/posts">[Cancel]</a>
    </div>
</form>
