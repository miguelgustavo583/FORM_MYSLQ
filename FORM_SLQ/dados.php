<?php  

    $idForm = $_POST['id'];
    $nomeForm = $_POST['nome'];
    $enderecoForm = $_POST['endereco'];
    $bairroForm = $_POST['bairro'];
    $cepForm = $_POST['cep'];
    $cidadeForm = $_POST['cidade'];
    $estadoForm = $_POST['estado'];

    define('MYSQL_HOST' , 'localhost:3306');
    define('MYSQL_USER' , 'root');
    define('MYSQL_PASSWORD' , '');
    define('MYSQL_DB_NAME' , 'bd_sistemas');

    try {
        $pdo = new PDO('mysql:host=' . MYSQL_HOST . ';dbname=' . MYSQL_DB_NAME, MYSQL_USER, MYSQL_PASSWORD);

    } catch (PDOException $ex) {
        echo "Erro ao tentar fazer a conexão com MYSQL: " . $ex->getMessage();
    }

    $sql = "INSERT INTO `clientes`(`id`, `nome`, `endereco`, `bairro`, `cep`, `cidade`, `estado`) VALUES ('$idForm', '$nomeForm','$enderecoForm','$bairroForm','$cepForm', '$cidadeForm','$estadoForm')";

    $cadastrarCliente = $pdo->prepare($sql);
    $cadastrarCliente->execute();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/reset.css">
    <title>PHP - Sistema de Acesso ao Banco de Dados</title>
</head>
<body class="body">
        <div class="container">
            <div class="row">
                <div class="col">
                    <nav class="navbar bg-dark">
                        <div class="container-fluid">
                            <a class="navbar-brand" href="index.php"><h3 class="title">SISTEMA WEB</h3></a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarNav">
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <a class="nav-link active text-white Options" aria-current="page" href="index.php">Cadastrar</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link active text-white-50 Options" aria-current="page" href="dados.php">Consultar</a>
                                    </li>
                                </ul>
                            </div>
                        </div>   
                    </nav>
                </div>    
            </div>
            <br>
            <div class="linha">
            <h2 class="subtitle_2 consulta">Consultar - Contatos Agendados</h2>
            </div>
            <br>
            <div class="linha">
                <div class="table-responsive"> 
                
                <table class="table table-dark">
                        <thead>
                            <tr class="tabela_linha">
                                <td class="tabela_dados">ID</td>
                                <td class="tabela_dados">Nome</td>
                                <td class="tabela_dados">Endereço</td>
                                <td class="tabela_dados">Bairro</td>
                                <td class="tabela_dados">CEP</td>
                                <td class="tabela_dados">Cidade</td>
                                <td class="tabela_dados">Estado</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="tabela_c">
                                    <?php
                                    
                                    try {
                                        $pdo = new PDO( 'mysql:host=' . MYSQL_HOST . ';dbname=' . MYSQL_DB_NAME, MYSQL_USER, MYSQL_PASSWORD);
                                    } catch ( PDOException $e ) {
                                    
                                        echo  'Erro ao conectar com o MySQL: ' . $e->getMessage();
                                    }

                                    $sql = "SELECT * FROM clientes";
                                    $result = $pdo->query( $sql );
                                    $rows = $result->fetchAll();

                                    for ($i=0; $i < count($rows); $i++) { 
                                    echo  $rows[$i]['id'] . "<br><br>";
                                    }
                                    ?>
                                </td>
                                <td class="tabela_c">
                                    <?php
                                    $sql = "SELECT * FROM clientes";
                                    $result = $pdo->query( $sql );
                                    $rows = $result->fetchAll();

                                    for ($i=0; $i < count($rows); $i++) { 
                                    echo $rows[$i]['nome'] . "<br><br>";
                                    }
                                    ?>
                                </td>
                                <td class="tabela_c">
                                    <?php
                                    $sql = "SELECT * FROM clientes";
                                    $result = $pdo->query( $sql );
                                    $rows = $result->fetchAll();

                                    for ($i=0; $i < count($rows); $i++) { 
                                    echo $rows[$i]['endereco'] . "<br><br>";
                                    }
                                    ?>
                                </td>
                                <td class="tabela_c">
                                    <?php
                                    $sql = "SELECT * FROM clientes";
                                    $result = $pdo->query( $sql );
                                    $rows = $result->fetchAll();

                                    for ($i=0; $i < count($rows); $i++) { 
                                    echo  $rows[$i]['bairro'].  "<br><br>";
                                    }
                                    ?>
                                </td>
                                <td class="tabela_c">
                                    <?php
                                    $sql = "SELECT * FROM clientes";
                                    $result = $pdo->query( $sql );
                                    $rows = $result->fetchAll();

                                    for ($i=0; $i < count($rows); $i++) { 
                                    echo  $rows[$i]['cep'].  "<br><br>";
                                    }
                                    ?>
                                </td>
                                <td class="tabela_c">
                                    <?php
                                    $sql = "SELECT * FROM clientes";
                                    $result = $pdo->query( $sql );
                                    $rows = $result->fetchAll();

                                    for ($i=0; $i < count($rows); $i++) { 
                                    echo  $rows[$i]['cidade'] . "<br><br>";
                                    }
                                    ?>
                                </td>
                                <td class="tabela_c">
                                    <?php
                                    $sql = "SELECT * FROM clientes";
                                    $result = $pdo->query( $sql );
                                    $rows = $result->fetchAll();

                                    for ($i=0; $i < count($rows); $i++) { 
                                    echo  $rows[$i]['estado'] . "<br><br>";
                                    }
                                    ?>
                                </td>
                                <td class="tabela_c">
                                </td>    
                            </tr>
                        </tbody>
                    </table>   
                </div>
            </div>
        <br>
        <br>
        <br>      
        </div>      
    </body>        