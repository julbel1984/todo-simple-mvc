<?php require('partials/head.php');?>

<h1>Все пользователи</h1>

<?php foreach ($users as $user): ?>
    <li><?= $user->name; ?></li>
<?php endforeach; ?>

<h1>Напиши свое имя</h1>

<form method="post" action="/users">
    <input name="name">
    <button type="submit">Отправить</button>
</form>

<?php require('partials/footer.php'); ?>

