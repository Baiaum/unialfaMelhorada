<!DOCTYPE html>
<?php
    include "./php/config.php"
?>

<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>UNIALFA - Area do Aluno</title>
    <script src="./js/jquery-3.6.4.js"></script>
    <script src="./js/script.js"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body >
<div class="corpo">
    <header>
    <img src="img/Logo_UNIALFA.png" alt="Logo_UNIALFA">
    <img src="img/Logo_FADISP.png" alt="Logo_FADISPS" />
    <h1 class=" titulo"  >UNIALFA - Acesso do Aluno</h1>
    </header>
        <div class="login">
            <h2 class="titulo">Área de acesso</h2>
    
            <input class="cx_de_texto" type="text" placeholder="Login" id="username" >
            <input  class="cx_de_texto"  type="password"  placeholder="senha"  id="password" >
            
            <button id="access"> Acessar </button>
            <script>
                 
                $(document).ready(function(){
                    $("#access").click(function(){
                        var user = $("#username").val();
                        var password = $("#password").val();
                        //alert("user: " + user + " password: " + password);
                        $.post("./php/login.php", {user: user, password: password}, function(data){
                            console.log(data)
                            if(data == 1){
                                window.location.href = "./PagInicial.php";
                            } else {
                                alert("Senha inválida!")
                            }
                        });
                        
                        
                    })
                })
            </script>
        </div>
</div>
<footer></footer>
</body>
</html>