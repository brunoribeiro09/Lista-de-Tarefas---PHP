<?php

require 'config.php';

if(!empty($_GET['id'])):

    $id = $_GET['id'];
    $sqlSelect = "SELECT * FROM tarefas WHERE id= $id";
    $result = $conexao->query($sqlSelect);

    if($result->num_rows > 0):
        $delete = "DELETE FROM tarefas WHERE id = $id";
        $select = $conexao->query($delete);
        header("Location: index.php");
 
    endif;
endif;
?>