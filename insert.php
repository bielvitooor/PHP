<?php
require_once('conection.php');

$nome = "Gabriel";
$matricula = "2019103012340188";

$start = $con->prepare("INSERT INTO alunos (nome, matricula) VALUES(?,?);");
$start->bind_param('ss', $nome, $matricula);

$start->execute();





?>