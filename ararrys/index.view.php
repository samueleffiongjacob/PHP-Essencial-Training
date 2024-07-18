<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> SAMUEL EFFIONG </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <div class="container-fluid">
        <header>
          <ul class="h1">
              <?php

                foreach ($names as $name) {
                  echo "<li>$name</li>";
                }
              ?>

            <!-- Alternatives -->
            <?php foreach ($names as $name) :?>
              <li><?= $name; ?></li>
            <?php endforeach; ?>

            <!-- Associative Array -->

            <?php foreach ($person as $key => $feature) : ?>
              <li><strong><?= $key; ?></strong> <?= $feature; ?></li>
            <?php endforeach; ?>

            <?php foreach ($task as $key => $feature) : ?>
              <li><strong><?= $key; ?></strong> <?= $feature; ?></li>
            <?php endforeach; ?>

            <!-- To capitalize each latters -->

            <?= ucwords('hello my name is samuel')?>
          </ul>

          <!-- new way to contol assosiate array -->

          <ul  class='ne'>
            <li><strong>Name : </strong></li> <?= $task['title']; ?>
            <li><strong>Due Date : </strong></li> <?= $task['due']; ?>
            <li><strong>Personal Responsible : </strong></li> <?= $task['assigned_to']; ?>

            <!-- conditionals using tenery operators -->
            <li><strong>Status : </strong></li> <?= $task['complete'] ? 'completed' : 'incomplete'; ?>           
          </ul>

          <ul class='ne1'>
             <!-- conditionals  -->
              <li><strong>Name : </strong></li> <?= $sax['title']; ?>
              <li><strong>Due Date : </strong></li> <?= $sax['due']; ?>
              <li><strong>Personal Responsible : </strong></li> <?= $sax['assigned_to']; ?>
              <li>
                <?php
                  if($sax['complete']){
                    echo '&#9989';
                  }else {
                    echo 'incomplete';
                  }
                ?>
              </li>
          </ul>

          <ul class='ne2'>
              <li><strong>Name : </strong></li> <?= $me['title']; ?>
              <li><strong>Due Date : </strong></li> <?= $me['due']; ?>
              <li><strong>Personal Responsible : </strong></li> <?= $me['assigned_to']; ?>
              <li> 
                <?php if ($me ['complete']) : ?>
                  <span class="icon"> &#9989</span>
                <?php else  : ?>
                  <span class="icon">  incomplete </span>
                <?php endif; ?>
              </li>
          </ul>
                  <!-- function rendering in php -->
          <ul class='ne3'> 
            <li>
                <?php echo php('hello', 'cock', 'mtt'); ?>
            </li>
          </ul>

          <ul class='ne4'>
              <li>
                    <?php  echo checkAge(17); ?>
              </li>
          </ul>
        </header> 
    </div>
    
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>