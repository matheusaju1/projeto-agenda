<?php

$servidor = "localhost";
$porta = "5432";
$bancoDeDados = "aula";
$usuario = "postgres";
$senha = "123";



$bd_conec = pg_connect("host=$servidor port=$porta 

dbname=$bancoDeDados user=$usuario password=$senha");

if (!$bd_conec) {
    echo "falha ao conectar";
} 

?>