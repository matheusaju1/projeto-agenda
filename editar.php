<?php
include "conexao.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Aluno</title>
    <link rel="stylesheet" type="text/css" href="layout_editar.css">

<?php

$codigo = $_GET["codigo"];
$res = pg_query($bd_conec, "SELECT * FROM aluno WHERE cod=" . $codigo);
$linha = pg_fetch_row($res);
$nome = $linha[1];




?>



</head>
<body>
<form class='form' action="alterar.php">
<div class='card'>
    <div class="borda_texto">
    <img src="imagens/alterar.png" width="100px" alt="">
        <h2>
            Atualização de Dados 
        </h2>
        <P></P>
    </div>
    <div class="card-group">
        <input type="hidden" name="codigo" id="idcode" value="<?= $_GET["codigo"] ?>">
        <input type="text" name="nome" id="idnome" value="<?= $nome = $linha[1] ?>">
    </div>
       <p></p>
    <div class="card-top">
        <input type="submit" value="Editar" >
    </div>
</div>
</form>  
</body>
<footer>
<div class="card-top1" > 
    <p>

</p>
    <h1>PROJETO DESENV. WEB EM HTML5, CSS, JAVASCRIPT,PHP BANCO DE DADOS </h1>
    <h2>Matheus Andrade </h2>
    
    </div>
</footer>
</html>