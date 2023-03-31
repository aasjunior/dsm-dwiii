<?php
    // Verifica se o valor de pagina esta sendo passado pelo metodo GET, senão atribui 1 para pagina atual
    $pagina_atual = (isset($_GET['pagina'])) ? $_GET['pagina'] : 1; 

    // Quantidade de produtos por pagina
    $produtos_por_pagina = 6;

    // Quantidade de produtos cadastrados no banco
    $query = mysqli_query($conexao, "SELECT COUNT(*) as total_produtos FROM produtos");
    
    // Matriz associativa gerada a partir do total de produtos retornado da consulta
    $total_produtos = mysqli_fetch_array($query)['total_produtos'];

    // Função 'ceil()' arredonda resultado da divisão para cima
    $total_paginas = ceil($total_produtos / $produtos_por_pagina);

    // Calcula indice do primeiro produto que será exibido na pagina atual
    $primeiro_produto = ($pagina_atual - 1) * $produtos_por_pagina;
    
    // Função para exibir os produtos de maneira dinamica, recebe como argumento a conexao, o indice do produto e a quantidade de produtos por pagina
    function exibirProdutos($conexao, $primeiro_produto, $produtos_por_pagina){

        // Consulta no banco que retorna os produtos com limite entre o indice armazenado na variavel $primeiro_produto e a quatidade definida por pagina
        $query = mysqli_query($conexao, "SELECT * FROM produtos LIMIT $primeiro_produto, $produtos_por_pagina");
        
        // Laço de repetição que armazena os dados retornados da consulta em um array e exibe de maneira dinamica um card com os dados do produto
        while($exibe = mysqli_fetch_array($query)){
            echo "<div class='card m-3' style='width: 18rem;'>".
                    "<img src='$exibe[8]' class='card-img-top' alt='produto-$exibe[0]'>".
                    "<div class='card-body'>".
                        "<h5 class='card-title'>$exibe[1]</h5>".
                        "<p class='card-text'>$exibe[2]</p>".
                        "<h6>$exibe[5]</h6>".
                        "<a href='#' class='btn btn-primary'>Comprar</a>".
                    "</div>".
                  "</div>";
        }
    }
?>