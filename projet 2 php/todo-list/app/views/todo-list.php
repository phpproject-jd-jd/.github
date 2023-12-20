<h1>Todo List</h1>
<ul>
    <?php foreach ($todos as $todo): ?>
        <li><a href="index.php?action=show&id=<?= $todo['id'] ?>"><?= $todo['title'] ?></a></li>
    <?php endforeach; ?>
</ul>
