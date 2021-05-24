<?php
include "conexao.php";




$codigo = $_GET["codigo"];
$nome= $_GET["nome"];


//$res = pg_query ($bd_conec, "UPDATE aluno SET nome= 'MATHEUS' WHERE cod = "  . $codigo);
//$res = pg_query ($bd_conec, "UPDATE aluno SET nome= '".$nome."' WHERE cod = "  . $codigo);
$res = pg_query ($bd_conec, "UPDATE aluno SET nome='" . $nome . "' where cod= '" . $codigo . "' ");

if (!$res){
    echo "Falha ao alterar Aluno";
} else {
    header('location: consulta.php');
}
?>
