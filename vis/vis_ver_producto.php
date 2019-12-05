<div id="ver_producto">
    <div class="card text-center">
        <div class="card-header">
            <?php echo "Tienda" ?>
        </div>
        <div class="card-body">
            <h5 class="card-title">Producto <?php echo $_GET["prod_id"] ?></h5>
            <p class="card-text">
                With supporting text below as a natural lead-in to additional content.
                <ul>
                    <li>Caracteristica 1</li>
                    <li>Caracteristica 2</li>
                    <li>Caracteristica 3</li>
                    <li>Caracteristica 4</li>
                </ul>
            </p>
            <a href="#" class="btn btn-primary">Comprar</a>
        </div>
        <div class="card-footer text-muted">
            <?php echo "Categoria" ?>
        </div>
    </div>

    <div id="carrusel">

        <h3>Productos similares</h3>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                        <img src="./img/uc.png" class="img-carrusel" alt="img/id=<?php echo $_GET["carrusel_id"] ?>"> 
                    <div class="carousel-caption d-none d-md-block">
                        <h5 class="desc-carrusel"><?php echo"Nombre prod"?></h5>
                    </div>
                </div>
                <div class="carousel-item">
                        <img src="./img/uc2.png" class="img-carrusel" alt="img/id=<?php echo $_GET["carrusel_id"] ?>"> 
                    <div class="carousel-caption d-none d-md-block">
                        <h5 class="desc-carrusel"><?php echo"Nombre prod"?></h5>
                    </div>
                </div>
                <div class="carousel-item">
                        <img src="./img/testing.jpg" class="img-carrusel" alt="img/id=<?php echo $_GET["carrusel_id"] ?>"> 
                    <div class="carousel-caption d-none d-md-block">
                        <h5 class="desc-carrusel"><?php echo"Nombre prod"?></h5>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon custom_green" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</div>