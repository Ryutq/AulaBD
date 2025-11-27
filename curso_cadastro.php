<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Cursos</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include "menu.php" ?>

<h1>Cadastro de Cursos</h1>

    <form action="curso_cadastro1.php" method="post">
        <label>Informe o nome do curso:</label><br>
        <input type="text" name="cursos" required><br><br>

        <label>Informe o nome do coordenador:</label><br>
        <input type="text" name="coordenador" required><br><br>

        <input type="submit" name="enviar" value="Cadastrar">
    </form>
    
    <?php





?>
</body>
</html>