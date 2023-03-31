<?php 
    include("../models/conexao.php"); 
    include("../views/blades/header.php"); 
    include("../controllers/utils/pagination.php"); 
    include("../controllers/utils/filters.php"); 
?>
<main>
    <section>
       <?php checks(); ?>
    </section>
    <section class="container d-flex flex-wrap">
        <?php exibirProdutos($conexao, $primeiro_produto, $produtos_por_pagina); ?>
        <section class='container'>
                <nav aria-label='Page navigation example'>
                    <ul class='pagination'>
                        <li class='page-item'>
                            <a class='page-link' href='#' aria-label='Anterior'>
                                <span aria-hidden='true'>&laquo;</span>
                            </a>
                        </li>

                        <?php
                            for($pagina=1; $pagina<=$total_paginas; $pagina++){
                                // Indices das paginas no catalogo de produtos gerados dinamicamente. Envia atraves da URL o indice da pagina
                                echo "<li class='page-item'><a class='page-link' href='index.php?pagina=$pagina'>$pagina</a></li>";
                            }
                        ?>

                        <li class='page-item'>
                            <a class='page-link' href='#' aria-label='Próximo'>
                                <span aria-hidden='true'>&raquo;</span>
                            </a>
                        </li>
                    </ul>
                </nav> 
             </section>
    </section>
</main>
<?php include("../views/blades/footer.php"); ?>