<?php
    // isset -> serve para saber se uma variável está definida
    include_once('config.php');
    if(isset($_POST['update']))
    {
        $id = $_POST['id'];
        //$cpf = $_POST['cpf'];
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $sexo = $_POST['sexo'];
        $dataNascimento = $_POST['dataNascimento'];
        $cidade = $_POST['cidade'];
        $estado = $_POST['estado'];
        $bairro = $_POST['bairro'];
        $endereco = $_POST['endereco'];
        $numEndereco = $_POST['numEndereco'];
        
        $sqlInsert = "UPDATE clientes 
        SET nome='$nome',email='$email',telefone='$telefone',sexo='$sexo',dataNascimento='$dataNascimento',cidade='$cidade',estado='$estado',endereco='$endereco',numEndereco='$numEndereco'
        WHERE id=$id";
        $result = $conexao->query($sqlInsert);
        print_r($result);
    }
    header('Location: clientes.php');

?>