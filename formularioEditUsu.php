<?php
    include_once('config.php');

    if(!empty($_GET['id']))
    {
        $id = $_GET['id'];
        $sqlSelect = "SELECT * FROM clientes WHERE id=$id";
        $result = $conexao->query($sqlSelect);
        if($result->num_rows > 0)
        {
            while($user_data = mysqli_fetch_assoc($result))
            {
            //    $cpf = $user_data['cpf'];
                $nome = $user_data['nome'];
                $email = $user_data['email'];
                $telefone = $user_data['telefone'];
                $sexo = $user_data['sexo'];
                $dataNascimento = $user_data['dataNascimento'];
                $cidade = $user_data['cidade'];
                $estado = $user_data['estado'];
                $bairro = $user_data['bairro'];
                $endereco = $user_data['endereco'];
                $numEndereco = $user_data['numEndereco'];
            }
        }
        else
        {
            header('Location: homeUsu.php');
        }
    }
    else
    {
        header('Location: homeUsu.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pelé Gás | Formulário</title>
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
            width: 40%;
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
            font-size: 14px;
        }
        .inputBox{
            position: relative;
        }
        .inputUser{
            background: none;
            border: none;
            border-bottom: 1px solid white;
            outline: none;
            color: white;
            font-size: 12px;
            width: 100%;
            letter-spacing: 2px;
        }
        .labelInput{
            position: absolute;
            top: 0px;
            left: 0px;
            pointer-events: none;
            transition: .7s;
            font-size: 12px;
        }
        .inputUser:focus ~ .labelInput,
        .inputUser:valid ~ .labelInput{
            top: -15px;
            font-size: 12px;
            color: lightblue;
        }
        #dataNascimento{
            border: none;
            padding: 8px;
            border-radius: 10px;
            outline: none;
            font-size: 12px;            
        }
        #submit{
            background-image: linear-gradient(to right,rgb(0, 92, 197), rgb(90, 20, 220));
            width: 100%;
            border: none;
            padding: 15px;
            color: white;
            font-size: 10px;
            cursor: pointer;
            border-radius: 10px;
            font-size: 14px;
        }
        #submit:hover{
            background-image: linear-gradient(to right,rgb(0, 80, 172), rgb(80, 19, 195));
        }
        #cpf{
            width: 30%;
        }
        #endereco{
            width: 95%;
        }
        #numEndereco{
            width: 100%;
        }
        .cel1{
            width: 85%;
        }
        .cel2{
            width: 100%;
        }
        #estado{
            color: #FFB266;
        }
    </style>
    <!--Para mascará de CPF e Telefone-->    
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>
        <script type="text/javascript">
            $("#cpf").mask("000.000.000-00");
            $("#telefone").mask("(00) 00000-0000");
            $("#numEndereco").mask("0000")
        </script>
</head>
<body>
<!--    <a href="home.php">Voltar</a>   -->
    <div class="box">
        <form action="FormularioSaveEdit.php" method="POST">
            <fieldset>
                <legend><b>Editar Cliente</b></legend>                
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" value=<?php echo $nome;?> required>
                    <label for="nome" class="labelInput">Nome Completo:</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" value=<?php echo $email;?> required>
                    <label for="email" class="labelInput">Email</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="tel" name="telefone" id="telefone" class="inputUser" value=<?php echo $telefone;?> required>
                    <label for="telefone" class="labelInput">Telefone</label>
                </div>
                <p>Sexo:</p>
                <input type="radio" id="masculino" name="sexo" value="M" <?php echo ($sexo == 'M') ? 'checked' : '';?> required>
                <label for="masculino">Masculino</label>
                <br>
                <input type="radio" id="feminino" name="sexo" value="F" <?php echo ($sexo == 'F') ? 'checked' : '';?> required>
                <label for="feminino">Feminino</label>
                <br>
                <input type="radio" id="outro" name="sexo" value="O" <?php echo ($sexo == 'O') ? 'checked' : '';?> required>
                <label for="outro">Outro</label>
                <br><br>
                <label for="dataNascimento"><b>Data de Nascimento:</b></label>
                <input type="date" name="dataNascimento" id="dataNascimento" value=<?php echo $dataNascimento;?> required>
                <br><br><br>
                <div class="inputBox">                    
                    <select name="estado" id="estado" class="inputUser" required>
                        <option value=<?php echo $estado;?>><?php echo $estado;?></option>
                        <option value="Paraíba">Paraíba</option>                       
                    </select>
                    <label for="estado" class="labelInput">Estado:</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="cidade" id="cidade" class="inputUser" value=<?php echo $cidade;?> required>
                    <label for="cidade" class="labelInput">Cidade</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="bairro" id="bairro" class="inputUser" value=<?php echo $bairro;?> required>
                    <label for="bairro" class="labelInput">Bairro:</label>
                </div>
                <br><br>
                <table>
                <tr>
                <td class="cel1">
                <div class="inputBox">
                    <input type="text" name="endereco" id="endereco" class="inputUser" value=<?php echo $endereco;?> required>
                    <label for="endereco" class="labelInput">Endereço (sem número):</label>
                </td>                    
                </div>
                <td class="cel2">
                <div class="inputBox">
                    <input type="text" name="numEndereco" id="numEndereco" class="inputUser" value=<?php echo $numEndereco;?> required>
                    <label for="numEndereco" class="labelInput">Nº:</label>
                </td>
                </tr>
                </div>
                </table>
                <br>
				<input type="hidden" name="id" value=<?php echo $id;?>>
                <input type="submit" name="update" id="submit" value="Salvar">
            </fieldset>
        </form>
    </div>
</body>
</html>