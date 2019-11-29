
<?php
for($i=0;$i<6;$i++){ ?>
    <div class="tiendas">
        <div class="card text-center" style="width: 17rem;">
            <img src="./img/uc.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Nombre de tienda</h5>
                <a href="bin_ver_tienda.php?id_tienda= <?php echo $i+1?>" class="btn btn-outline-success"><span class="custom_green">Ver Tienda</span></a>
            </div>
        </div>
    </div>
<?php } ?>