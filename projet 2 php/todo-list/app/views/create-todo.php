<h1>Create Todo</h1>
<form action="index.php?action=create" method="post">
    <label for="title">Title:</label>
    <input type="text" name="title" required>
    <br>
    <label for="description">Description:</label>
    <textarea name="description" required></textarea>
    <br>
    <input type="submit" value="Create">
</form>
