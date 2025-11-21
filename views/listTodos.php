<!DOCTYPE html>
<html>
<head>
    <title>Todo List</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="assets/js/script.js"></script>
</head>
<body>
    <h1>Todo List App </h1>
    <form method="POST" action="?action=add">
        <input type="text" name="task" placeholder="New Task">
        <button type="submit">Add</button>
    </form>
    <ul>
        <?php foreach ($todos as $todo): ?>
            <li>
                <?= $todo['task'] ?>
                <?php if (!$todo['is_completed']): ?>
                    <a href="?action=complete&id=<?= $todo['id'] ?>">Selesai</a>
                <?php endif; ?>
                <a href="?action=delete&id=<?= $todo['id'] ?>">  Delete</a>
            </li>
        <?php endforeach; ?>
    </ul>

 
</body>
</html>
