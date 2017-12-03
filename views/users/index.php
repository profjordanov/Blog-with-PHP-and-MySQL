<?php $this->title = 'Users'; ?>
<header id="register-title" class="blog-title">
    <?= htmlspecialchars($this->title) ?>
</header>
<table style="
    margin-left: 35%;
">
    <tr>
        <th>ID</th>
        <th>Username</th>
        <th>Full Name</th>
    </tr>

    <?php foreach ($this->users as $user) : ?>
        <tr>
            <td><?= $user['id'] ?></td>
            <td><?= htmlspecialchars($user['username']) ?></td>
            <td><?= htmlspecialchars($user['full_name']) ?></td>
        </tr>
    <?php endforeach ?>
</table>
