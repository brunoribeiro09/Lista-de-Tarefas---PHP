<?php
require 'config.php';

if(isset($_POST['adicionar'])):

    $tarefa = mysqli_escape_string($conexao, $_POST['tarefa']);
    $sql = "INSERT INTO tarefas (tarefa) VALUES ('$tarefa') ";

    if(mysqli_query($conexao, $sql)):
        header("Location: index.php");
    endif;
endif;
?>