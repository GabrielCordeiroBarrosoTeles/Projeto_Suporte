<?php
    include './conexao.php';
    include './includes/navbar.php';
    $id = $_GET['id'];
    $consultar = "SELECT * FROM cliente WHERE id ='$id' ";
    $con = $mysqli ->query($consultar) or die($mysqli -> errno);
    while($dados = $con -> fetch_array()){ 
        echo $id   ."<br>";
        echo $nome ."<br>";
        $alt = $mysqli-> query("UPDATE cliente SET id='$id' , nome='$nome' WHERE id=$id");
    }
  ?>