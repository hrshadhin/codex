<?php require('partials/head.php'); ?>
<?php require('partials/nav.php'); ?>
<h1>Task For The Day</h1>
<ul>
  <?php foreach ($data['tasks'] as $task) : ?>
  <li>
    <?= $task->title; ?> <?= $task->completed ? '&#x2713;' : '&#x2717;'; ?>
  </li>
<?php endforeach; ?>
</ul>
<h2>Add New Task</h2>
<form  action="taskadd" method="POST">
  <input type="text" name="title" value="">
  <button type="submit">Add</button>
</form>
<?php require('partials/footer.php'); ?>
