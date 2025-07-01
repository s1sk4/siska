<h1>Data User</h1>
<ul>
<?php foreach($users as $u): ?> //mengganti $user menjadi $users agar cocok dengan data di controller
    <li><?= $u['name'] ?> - <?= $u['email'] ?></li> //mengganti nama menjadi name
<?php endforeach; ?>
</ul>
