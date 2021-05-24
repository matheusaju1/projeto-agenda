<?php
include "conexao.php";

$nome= $_GET["nome"];

$res = pg_query ($bd_conec, "INSERT INTO aluno (nome, data_hoje) values ('" . $nome . "', current_date)");


if (!$res){
    echo "Falha ao inserir Aluno";
} else {
    header('location: consulta.php');
}



?>