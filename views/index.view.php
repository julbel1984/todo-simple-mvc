<?php require('partials/head.php');?>

<?php foreach ($users as $user): ?>
    <li><?= $user->name; ?></li>
<?php endforeach; ?>

<h1>Напиши свое имя</h1>

<form method="post" action="/names">
    <input name="name">
    <button type="submit">Отправить</button>
</form>

<?php require('partials/footer.php'); ?>

