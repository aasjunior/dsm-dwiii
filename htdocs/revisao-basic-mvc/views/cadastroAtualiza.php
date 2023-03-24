<?php 
    include("../models/conexao.php");
    include("blades/header.php");
?>
<?php
    $query = mysqli_query($conexao,"SELECT * FROM aluno WHERE codigo = ".$_GET["ida"]);
    while($exibe = mysqli_fetch_array($query)){
?>
    <form action="../controllers/atualizarAluno.php" method="post">
        <input type="hidden" name="alunoCodigo" value="<?php echo $exibe[0] ?>">
        <label>Nome</label>
        <input type="text" name="alunoNome" value="<?php echo $exibe[1] ?>"><br>
        <label>Cidade</label>
        <input type="text" name="alunoCidade" value="<?php echo $exibe[2] ?>"><br>
        M<input type="radio" value="m" name="alunoSexo" <?php echo ($exibe[3]=="m")?"checked":""?>><br>
        F<input type="radio" value="f" name="alunoSexo" <?php echo ($exibe[3]=="f")?"checked":""?>><br>
        <input type="submit" value="Atualizar">
    </form>
<?php } ?>
<?php include("blades/footer.php"); ?>
