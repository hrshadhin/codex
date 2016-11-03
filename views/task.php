<?php require('partials/head.php'); ?>
<?php require('partials/nav.php'); ?>
<h1>Task For The Day</h1>
<ul>
  <?php foreach ($tasks as $task) : ?>
  <li>
    <?= $task->title; ?> <?= $task->completed ? '&#x2713;' : '&#x2717;'; ?>
  </li>
<?php endforeach; ?>
</ul><?php require('partials/footer.php'); ?>
