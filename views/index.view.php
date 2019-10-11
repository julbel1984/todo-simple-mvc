<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<nav>
    <ul>
        <li><a href="/views/about.php">Обо мне</a></li>
        <li><a href="/views/contact.phpct.php">Связаться</a></li>
    </ul>
</nav>

<h3>Мои задачи</h3>

<ul>
    <?php foreach ($tasks as $task): ?>
        <li>
            <?php if ($task->completed): ?>
            <strike><?= $task->description; ?></strike>
                <?php else: ?>
                <?= $task->description; ?>
        <?php endif; ?>
        </li>
    <?php endforeach; ?>
</ul>

</body>
</html>

