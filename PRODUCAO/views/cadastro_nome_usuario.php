<!DOCTYPE html>
<html lang="pt_br">
<head>
<?php
	    include('../conexao.php');
?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/cadastro.css">
    <title>Cadastro</title>
</head>
<body>
    <div class="img">
        <div class="container">
            <div class="corpo">

                <form action="../includes/cadastro_nome_usuario_db.php" method="POST">
                    <br>
                    <br>
                    <div >
                        <!-- src="https://image.flaticon.com/icons/png/512/17/17004.png"-->
                        <img id="z1" src="../img/pergunta2.png" alt="" style="height: 300px; width: 300px;">
               
                    </div>
                    <p class="p1"> Primeiro nos diga o seu nome jovem herói </p>

                    <input class="input_pergunta" type="text" placeholder="Digite seu nome..." id="nome_usuario" name="nome_usuario"> 
                    <br>
                    <br>
                    <input type="submit" > 
                </form>

            </div>
        </div>
    </div>
</body>
</html>

<script src="../js/dialogo.js" defer> </script> 
