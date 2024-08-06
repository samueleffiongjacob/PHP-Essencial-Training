
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>db query in php </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1>My Tasks</h1>
        <ul class="list-group mt-3">
            <?php foreach ($tasks as $task): ?>
                <li class="list-group-item">
                    <?php if ($task->completed): ?>
                        <strike><?= htmlspecialchars($task->todos); ?></strike>
                    <?php else: ?>
                        <?= htmlspecialchars($task->todos); ?>
                    <?php endif; ?>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</body>
</html>
