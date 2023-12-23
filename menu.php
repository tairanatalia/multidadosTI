
<?php
    $categoriasMenu = array(
        "Dashboard",
        "Cadastro" => array(
            "Cliente",
            "Fornecedor",
            "Usuário",
            "Produtos",
            "Perfil de acesso"
        ),
        "Relatório" => array(
            "Cliente",
            "Faturamento",
            "Produtos"
        ));


    function ordemAlfabetica(array $categoriasMenu) : array
    {
        ksort($categoriasMenu);
        foreach ($categoriasMenu as &$categoria) {
            if (is_array($categoria)) {
                sort($categoria);
            }
        }
        return $categoriasMenu;
    }
?>

<!-- BEGIN SIDEBAR -->
<div class="page-sidebar-wrapper">
    <div class="page-sidebar navbar-collapse collapse">
        <!-- BEGIN SIDEBAR MENU -->
        <ul class="page-sidebar-menu">
            <li class="sidebar-toggler-wrapper">
                <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                <div class="sidebar-toggler hidden-phone">
                </div>
                <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
            </li>
            <li class="sidebar-search-wrapper">
                <!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
                <form class="sidebar-search" action="extra_search.html" method="POST">
                    <div class="form-container">
                        <div class="input-box">
                            <a href="javascript:;" class="remove"></a>
                            <input type="text" placeholder="Search..."/>
                            <input type="button" class="submit" value=" "/>
                        </div>
                    </div>
                </form>
                <!-- END RESPONSIVE QUICK SEARCH FORM -->
            </li>
            <?php
                $menuOrdenado = ordemAlfabetica($categoriasMenu);
                foreach ($menuOrdenado as $chave => $categorias) {
                    if (is_array($categorias)) {
                        echo "<li class=''>";
                        echo "<a href='javascript:;'>";
                        if ($chave == "Cadastro") {
                            echo "<i class='fa fa-file-text'></i>";
                        }
                        else if ($chave == "Relatório") {
                            echo "<i class='fa fa-bar-chart-o'></i>";
                        }
                        echo "<span class='title'>". $chave ."</spam>";
                        echo "<span class='arrow '></span>";
                        echo "</a>";
                        echo "<ul class='sub-menu'>";
                        foreach ($categorias as $subcategoria) {
                            echo '<li><a href="#">' . $subcategoria . '</a></li>';
                        }
                        echo '</ul>';
                        echo '</li>';
                    } else {
                        echo '<li class="start active ">';
                        echo '<a href="#">';
                        echo '<i class="fa fa-home"></i>';
                        echo '<span class="title">'. $categorias .'</span>';
                        echo '</a>';
                        echo '</li>';
                    }
                }
            ?>
        </ul>
        <!-- END SIDEBAR MENU -->
    </div>
</div>