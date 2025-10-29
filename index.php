<?php include('db_connection.php'); ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>To_do_List</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Minha to do List</h1>
    <form action="add_task.php" method="POST">
    <input type="text" name="title" placeholder="novatarefa..." required>
    <button type="subimit"> adicionar</button>

</form>

<hr>

<ul>
    <?php
    $sql = "SELECT * FROM tasks ORDER BY id DESC";
    $result = $conn->query($sql);

    if($result->num_rows > 0) {
        while($row = $result->fetch_assoc()){
            echo"<li>";
            echo $row['status'] == 'concluiída' ? "<s>{$row['title']}</s>" : $row['title'];
            echo "
                 <a href='update-task.php?id={$row['id']}'>x</a>
                 <a href='delete_task.php?id={$row['id']}'>l</a>";
            echo "</li>";
        }
    } else {
        echo "<p>Nenhuma tarefa cadastrada.</p>";
    }     
    ?>
</ul>
</body>
</html>