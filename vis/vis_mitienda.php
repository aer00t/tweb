<div class="mi_tienda">
    <div class="card mb-3">
        <img src="./img/testing.jpg" class="card-img-top" alt="banner_tienda">
        <div id="bt_banner">
            <a href="#" class="btn btn-dark" id="editar_banner" data-toggle="modal" data-target="#modal_banner">
                <span class="custom_green">Cambiar banner</span>
            </a>
            <a href="#" class="btn btn-dark" id="editar_banner" data-toggle="modal" data-target="#modal_agregar">
                <span class="custom_green">Agregar productos</span>
            </a>
        </div>
        <div class="card-body">
            <h5 class="card-title">
                <p>Tienda <?php echo $_GET["id_tienda"] ?></p>
            </h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <p class="card-text"><small class="text-muted">Escom</small></p>
        </div>
    </div>



    <?php
    for ($i = 0; $i < 12; $i++) {
        ?>
        <div id="productos-mitienda">
            <div class="card text-center" style="width: 10rem;">
                <img src="./img/uc2.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?php echo "Producto " . ($i + 1) ?></h5>
                    <a href="#" class="btn btn-dark editar_click" id="editar_producto" value="<?php echo"Prod_Id: ".($i+1)?>" data-toggle="modal" data-target="#modal_editar">
                        <span class="custom_green">Editar</span>
                    </a>
                    <p class="card-text"><small class="text-muted">Precio</small></p>
                </div>
            </div>
        </div>
    <?php } ?>
</div>

<!-- Modal Agregar-->
<div class="modal fade" id="modal_agregar" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Agregar Producto</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal Editar-->
<div class="modal fade" id="modal_editar" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Editar</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body body-editar">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Understood</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal Banner-->
<div class="modal fade" id="modal_banner" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Banner</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body body-editar">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Understood</button>
      </div>
    </div>
  </div>
</div>
