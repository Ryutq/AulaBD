<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Cursos</title>
</head>
<body>

<h1>Cadastro de Cursos</h1>

    <form method="POST" action="curso_cadastro.php">
        <label>Informe o nome do curso:</label><br>
        <input type="text" name="nome_curso" required><br><br>

        <label>Informe o nome do coordenador:</label><br>
        <input type="text" name="nome_coordenador" required><br><br>

        <button type="submit">Cadastrar Curso</button>
    </form>
    
    <?php





?>
</body>
</html>