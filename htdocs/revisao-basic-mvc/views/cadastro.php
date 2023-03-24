<?php include("blades/header.php"); ?>
    <form action="../controllers/cadastrarAluno.php" method="post">
        <label>Nome</label>
        <input type="text" name="alunoNome"><br>
        <label>Cidade</label>
        <input type="text" name="alunoCidade"><br>
        M<input type="radio" value="m" name="alunoSexo"><br>
        F<input type="radio" value="f" name="alunoSexo"><br>
        <input type="submit" value="Cadastrar">
    </form>
<?php include("blades/footer.php"); ?>