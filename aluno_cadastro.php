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
     <h3>Cadastro de Alunos</h3>

    <form method="POST" action="#">
       <p>
        Digite o nome do aluno<br>
        <input type="text" name="nome" required>
       </p>

        <p>
            Digite a cidade do aluno <br>
            <input type="text" name="cidade">
        </p>

        <p>
            Digite o estado <br>
            <input type="text" name="estado">
        </p>

        <p>
            <input type="submit" name="enviar" value="Cadastrar">
        </p>
    </form>
    </div>
</body>
</html>