<?php
require_once 'helpers.php';
$tasks = getjsonData();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TODO APP</title>
</head>

<body>
    <form action="new.php" method="POST">
        <input type="text" placeholder="Add new task" name="task">
        <input type="submit" value="New">
    </form>
    <?php foreach ($tasks as $name => $task) : ?>
        <div style="margin-bottom: 10px; padding:5px">
            <form style="display:inline" action="changeStatus.php" method="post">
                <input type="hidden" name="taskName" value="<?php echo $name ?>">
                <input type="checkbox" id="task" <?php echo $task['completed'] ? 'checked' : '' ?> name="" id="">
            </form>
            <label for="task"><?php echo $name; ?></label>
            <form style="display:inline" action="delete.php" method="post">
                <input type="hidden" name="taskName" value="<?php echo $name ?>">
                <button type="submit">Delete</button>
            </form>
        </div>
    <?php endforeach; ?>
</body>
<script>
    const checkboxes = document.querySelectorAll("input[type=checkbox]");
    checkboxes.forEach(ch => {
        ch.onclick = function() {
            this.parentNode.submit();
        };
    });
</script>

</html>