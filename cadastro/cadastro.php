<?php
/* Conexão no Banco */
    $server = "Locahost";
    $user = "root";
    $password = "";/* 13424551ani */
    $dbname = "form-art-socialtech";

    /* Criar conexão */

    $conn = new mysqli($server, $user, $password, $dbname);

    if($conn->connect_errno){
        echo "Erro!";
    }
    else {
        echo "Conexão efetuada com sucesso!";
    };

/* Variáveis e colunas */
/*     $nome = $_POST["nome"];
    $sobrenome = $_POST["sobrenome"];
    $email = $_POST["email"];
    $telefone = $_POST["telefone"];
    $dataNascimento = $_POST["data_nascimento"];
    $genero = $_POST["genero"];
    $pcd = $_POST["PCD"];
    $filhos = $_POST["filhos"];
    $rua = $_POST["rua"];
    $numero = $_POST["numero"];
    $bairro = $_POST["bairro"];
    $cep = $_POST["cep"];
    $cidade = $_POST["cidade"];
    $uf = $_POST["uf"];

    echo $nome, $sobrenome; */
?>