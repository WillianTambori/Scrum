<!DOCTYPE html>
<html>
<head>
    <title>Fóruns</title>
</head>
<body>
    <h1>Lista de Fóruns</h1>
    <ul>
        <?php foreach ($forums as $forum): ?>
            <li>
                <a href="/forum/show.php?id=<?php echo $forum['id']; ?>">
                    <?php echo htmlspecialchars($forum['name']); ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
