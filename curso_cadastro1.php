<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php include "menu.php" ?>

    <div class="conteudo">
        <h3>Confirmação de cadastro do curso</h3>

    <?php

        if ( isset($_REQUEST["enviar"]) )
        {
            include "conexao.php";

            $cursos = $_REQUEST["cursos"];
            $coordenador = $_REQUEST["coordenador"];

            $sql = "insert into cursos (cursos, coordenador) values (:cursos, :coordenador)";

            $result = $conexao->prepare($sql);
            $result->bindValue(":cursos", $cursos);
            $result->bindValue(":coordenador", $coordenador); 
            $result->execute();

            echo "Curso cadastrado com sucesso!<br>";
        }
    ?>

        <a href="curso_cadastro.php">Voltar</a>
    </div>
    
</body>
</html>