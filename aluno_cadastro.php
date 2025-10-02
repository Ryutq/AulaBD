<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <h1>Cadastro de Alunos</h1>

    <form method="POST" action="aluno_cadastro.php">
        <label>Informe o nome do aluno:</label><br>
        <input type="text" name="nome_aluno" required><br><br>

        <label>Escolha o curso:</label><br>
        <select name="curso" required>

            <option value="Informática">Informática</option>
            <option value="Administração">Administração</option>
            <option value="Engenharia">Engenharia</option>
            <option value="Direito">Direito</option>
        </select><br><br>

        <button type="submit">Cadastrar Aluno</button>
    </form>

    <?php




    ?>
</body>
</html>