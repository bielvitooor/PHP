<?php
    require_once('conection.php');
    $id = 1;
    $con->query("UPDATE alunos set nome='Evandro' WHERE id='$id'");


?>
