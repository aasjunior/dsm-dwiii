<?php 
    include("models/conexao.php");
    include("views/blades/header.php");
?>
    <a href="views/cadastro.php">Cadastrar</a>
    <hr>
    <form action="index.php" method="post">
        <input type="text" name="buscar" size="30" placeholder="Buscar">
        <input type="submit" value="Buscar">
    </form>
    <hr>
    <?php
        if(empty($_POST["buscar"])){
            echo "Nenhum resultado";
        }else{ 
            $varBusca = $_POST["buscar"];
    ?>
    <table border="1" width="450">
        <tr>
            <td>Frase</td>
            <td>Editar</td>
            <td>Excluir</td>
        </tr>  
        <?php   
            $query = mysqli_query($conexao, "SELECT * FROM aluno WHERE nome LIKE '%$varBusca%'");
            while($exibe = mysqli_fetch_array($query)){
                $varSexo = ($exibe[3]=="m")?"o":"a";
                echo "<tr>" .
                        "<td>". strtoupper($varSexo) ." alun$varSexo <b>". $exibe[1] ."</b> mora na cidade de ". $exibe[2].".</td>" .
                        "<td><a href='views/cadastroAtualiza.php?ida=".$exibe[0]."'>Editar</a></td>" .
                        "<td><a href='controllers/deletarAluno.php?ida=".$exibe[0]."'>Excluir</a></td>" .             
                     "</tr>";
            }
        ?>
    </table>
<?php } ?>
<?php include("views/blades/footer.php"); ?>