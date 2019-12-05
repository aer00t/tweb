<div id="mi_cuenta">
    <form>
        <div class="form-group row">
            <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
                <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="<?php echo"test@mail.com"?>">
            </div>
        </div>

        <div class="form-group row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Contraseña Actual</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" id="current_pass" placeholder="Password">
            </div>
        </div>

        <div class="form-group row">
            <label for="pass_reset1" class="col-sm-2 col-form-label">Contraseña Nueva</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" id="pass_reset1" placeholder="Password">
            </div>
        </div>

        <div class="form-group row">
            <label for="pass_reset2" class="col-sm-2 col-form-label">Reingrese Contraseña Nueva</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" id="pass_reset2" placeholder="Password">
            </div>
        </div>
        <div class="reset_pass_btn">
            <button type="button" class="btn btn-primary">Cambiar</button>
            <a type="button" class="btn btn-secondary" href="index.php">Cancelar</a>
        </div>
    </form>
</div>