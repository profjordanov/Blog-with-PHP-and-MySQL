<?php $this->title = 'Create New Post'; ?>

<div class="new-post-block">
    <h2 id="editor-title">new post</h2>
    <form method="post" id="post-form">
        <ul class="title-author">
            <li class="single-element-form">
                <h1 class="title-form">Blog Post Title:</h1>
                <input type="text" name="post_title" value="" placeholder="Title" id="title"/>
            </li>
        </ul>
        <h1 class="title-form">Content:</h1>
        <textarea name="post_content" class="content-field" placeholder="Content" id="content"></textarea>
        <br>
        <input id="create-new-post-request-button" type="submit" value="Publish"/>
        <a href="<?= APP_ROOT ?>/posts">[Cancel]</a>
    </form>
</div>