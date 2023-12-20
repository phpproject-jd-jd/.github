<h1><?= $todo['title'] ?></h1>
<p><?= $todo['description'] ?></p>

<form action="index.php?action=update" method="post">
    <input type="hidden" name="id" value="<?= $todo['id'] ?>">
    <label for="title">Title:</label>
    <input type="text" name="title" value="<?= $todo['title'] ?>" required>
    <br>
    <label for="description">Description:</label>
    <textarea name="description" required><?= $todo['description'] ?></textarea>
    <br>
    <input type="submit" value="Update">
</form>

<a href="index.php">Back to Todo List</a>
