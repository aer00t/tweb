<nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" id="name_logo" href="index.php">Candy Shop</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link link_a" href="index.php"><span class="custom_green">Inicio</span><span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link link_a" href="bin_tiendas.php"><span class="custom_green">Tiendas</span></a>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="custom_green">Categorias</span>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="bin_categorias.php?cat=1">Cat1</a>
                    <a class="dropdown-item" href="bin_categorias.php?cat=2">Cat2</a>
                    <a class="dropdown-item" href="bin_categorias.php?cat=3">Cat3</a>
                </div>
            </li>
            <?php
            if ($var_access == "user") { ?>
                <li class="nav-item">
                    <a class="nav-link link_a" href="bin_micuenta.php"><span class="custom_green">Mi cuenta</span></a>
                </li>
            <?php }
            elseif($var_access == "vendor"){ ?>
                <li class="nav-item">
                    <a class="nav-link link_a" href="bin_mitienda.php"><span class="custom_green">Mi tienda</span></a>
                </li>
            <?php } ?>
            

        </ul>
        <span class="nav-item"><span class="custom_green">-<?php echo $__bin__?>-</span>&nbsp;&nbsp;&nbsp;</span>
        <span class="nav-item">
            <button id="bt-login" class="btn btn-outline-success" type="button"><span class="custom_green">Entar/Registrar</span></button>
        </span>
    </div>
</nav>