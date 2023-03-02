<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pelé Gás | Cad. Usuários</title>
    <style>
        body{
            font-family: Georgia;
            background: linear-gradient(to right, #FFB266, #FF8000);
            font-size: 11px;
        }
        .box{
            color: white;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            background-color: rgba(0, 0, 0, 0.6);
            padding: 15px;
            border-radius: 15px;
            width: 20%;
        }
        fieldset{
            border: 3px solid dodgerblue;
            border-radius: 8px;
        }
        legend{
            border: 1px solid dodgerblue;
            padding: 10px;
            text-align: center;
            background-color: dodgerblue;
            border-radius: 8px;
        }
        .TextoSalvo{
            text-align: center;
        }
        a{
            color: white;
            text-decoration: none;
        }
    </style>
</head>
<body>
<!--    <a href="home.php">Voltar</a>   -->
    <div class="box">
        <form action="cadUsu.php" method="POST">
            <fieldset>
                <legend><b><a href="usuarios.php">Formulário de Usuários</a></b></legend>
            <div class="TextoSalvo">
                <h3>Cadastro de Usuário Realizado com Sucesso!</h3>
            </div>
            </div>
            </fieldset>
        </form>
    </div>
</body>
</html>