<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>class</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css">
</head>
<body>
    
    <ul>
        <?php foreach ($tasks as $task): ?>
            <li><?= $task->description; ?></li>
        <?php endforeach; ?>
    </ul>

    <!-- let create a strike throw when task is complete -->
    <ul>
        <?php foreach ($tasks as $task): ?>
            <li>
                <?php if ($task->completed) :?>
                    <strike><?= $task->description; ?></strike>
                <?php else: ?>
                    <?= $task->description; ?>
                <?php endif; ?>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>