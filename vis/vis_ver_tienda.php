<div class="ver_tienda">
    <div class="card mb-3">
        <img src="./img/testing.jpg" class="card-img-top" alt="banner_tienda">
        <div class="card-body">
            <h5 class="card-title">
                <p>Tienda <?php echo $_GET["id_tienda"] ?></p>
            </h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <p class="card-text"><small class="text-muted">Escom</small></p>
        </div>
    </div>

    <?php
        for($i=0; $i<6; $i++){
        ?>
        <div class="productos-tienda">
            <div class="card text-center" style="width: 16rem;">
                <img src="./img/uc2.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="bin_ver_producto.php?prod_id=<?php echo $i+1?>" class="btn btn-outline-success"><span class="custom_green">Ver Producto</span></a>
                </div>
            </div>
        </div>
        <?php }?>

</div>