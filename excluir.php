<?php
include "conexao.php";

$codigo = $_GET["codigo"];


$res = pg_query ($bd_conec, "DELETE FROM aluno WHERE cod = "  . $codigo);


if (!$res){
    echo "Falha ao excluir Aluno";
} else {
    header('location: consulta.php');
}
?>