<?php
    require_once('conection.php');

    $resultado = $con->query("SELECT * FROM alunos order by id");
       
    while($linha = $resultado->fetch_array()){
         echo $linha['id']. ",".$linha['nome'] . ",". $linha['matricula']."<br>";

        }






?>