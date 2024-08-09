<?php require('partials/head.php'); ?>

<!-- qury display this auto pupolate -->
<div class="container">
        <h1>My Tasks at <?= $name; ?></h1>
        <ul class="list-group mt-3">
            <?php foreach ($users as $user): ?>
                <li class="list-group-item">
                    <?= $user -> name; ?>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>

   <h1>SUBMIT FORM </h1>
   <form method='POST' action="/names">
        <input type="text" name='name'>

        <button type="submit"> send</button>
   </form>

<?php require('partials/footer.php'); ?>
