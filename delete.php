<?php
    require_once('conection.php');

    $id= 1;
    $con->query("DELETE alunos WHERE id='$id'");



?>