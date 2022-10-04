<?php

require 'config.php';

$sql = "SELECT * FROM tarefas ORDER BY id ";

$result = $conexao->query($sql);
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Tarefas</title>
</head>
<body>
    <h1>Lista de Tarefas</h1>
    <hr>
    <p>Para adicionar uma tarefa, basta inseri-lá na caixa abaixo.</p>
    
    <table>
        <thead>
            <tr>
                <td>ID</td>
                <td>TAREFA</td>
                <td>AÇÃO</td>
            </tr>
        </thead>
        <tbody>
            <th>
            <?php
            while($user_data = mysqli_fetch_assoc($result)){
                echo "<tr>";

                echo "<td>". $user_data['id']. "</td>";

                echo "<td>". $user_data['tarefa']. "</td>";
                
                echo "<td>
                <a href='delete.php?id=$user_data[id]' > EXCLUIR</a>
                </td>";
                echo "</tr>";
            }
            ?>
            </th>
           
        </tbody>
    </table>
    <form action="create.php" method="post">
        <input type="text" name="tarefa" id="" required autofocus> <br> <br>
        <input type="submit" name="adicionar"value="ADICIONAR TAREFA">
    </form>
</body>
</html>