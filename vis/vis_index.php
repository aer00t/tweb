        <?php
        for($i=0; $i<6; $i++){
        ?>
        <div class="productos-index">
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