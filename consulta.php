<?php
include "conexao.php";
?>
<!DOCTYPE html>
<html lang="pt">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de consulta</title>
    <link rel="stylesheet" href="layout_consulta.css">
    
    
</head>
<script>
   
    function excluir(codigo){
        var res=confirm ("deseja realmente excluir");
     if (res) {
         window.location = "excluir.php?codigo=" + codigo;
         }
    }

</script>
<script>
    function alterar(codigo){
        var res=confirm ("deseja realmente alterar");
        
     if (res) {
         window.location = "editar.php?codigo=" + codigo;
         }
    }

</script>
<?php
$res = pg_query($bd_conec, "select * from aluno");

?>

<body>
<div class="borda_texto" > 
        <h2> Consulta <img src="imagens/logo_p.png" width="100px" alt=""></img></h2>
</div>
<form class='form' name="consulta," action="cadastro.php">
    
<table border='1' cellspacing="5" cellpadding="8     " >
    <tr>
        <div class="card-gr">
        <button type="submit" value="cadastrar">Nova Tarefa</button> 
        </tr>
    <tr>
    <div class="td">
        <td style="color:white;"align="center" bgcolor="black" >COD</td>
        <td style="color:white;"align="center" bgcolor="black">NOME</td>
        <td style="color:white;"align="center" bgcolor="black">DATA DE CRIAÇÃO</td>
        <td style="color:white"align="center" bgcolor="black">DELETE</td>
        <td style="color:white"align="center" bgcolor="black">ALTERAR</td>
    </div>
    </tr>
    <?php
        while ($linha= pg_fetch_row($res)){
            echo "<tr>";
            echo "<td>" . $linha[0] . "</td>";
            echo "<td>" . $linha[1] . "</td>";
            echo "<td>" . $linha[2] . "</td>";
            echo "<td><input type='button' value='Excluir' onclick='excluir($linha[0])'></td>";
            echo "<td><input type='button' value='editar' onclick='alterar($linha[0])'></td>";
            echo "</tr>";

        }    
    ?>
</table>

</form>

</body>
<footer>
<div class="card-top1" > 
<div class="card-top1" > 
    <p>

</p>
    <h1>PROJETO DESENV. WEB EM HTML5, CSS, JAVASCRIPT,PHP BANCO DE DADOS </h1>
    <h2>Matheus Andrade </h2>
    
    </div>
</footer>
</html>