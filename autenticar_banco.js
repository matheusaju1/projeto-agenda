function logar(){
    if(document.getElementById("idusuario").value == "admin" && 
    document.getElementById("idsenha").value == "123"){
       window.location.href="http://localhost/aula/consulta.php"
    }else{
        alert("Usuário ou senha incorreto");
    }
}

