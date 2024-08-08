<?php require('partials/head.php'); ?>

    
    <div class="container">
        <h1>My Tasks at <?= $name; ?></h1>
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

<?php require('partials/footer.php'); ?>
