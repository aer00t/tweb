<div id="login">
    <h2>Registro Tienda</h2>
    <form>
        <div class="form-group row">
            <label for="staticEmail" class="col-sm-2 col-form-label">Email*</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="email" placeholder="Email" required maxlength="60">
            </div>
        </div>

        <div class="form-group row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Contrase&ntilde;a*</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" id="pass_new1" placeholder="Contrase&ntilde;a" maxlength="10" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Repetir Contrase&ntilde;a*</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" id="pass_new2" placeholder="Contrase&ntilde;a" maxlength="10" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="school" class="col-sm-2 col-form-label">Escuela</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="school" placeholder="Opcional">
            </div>
        </div>
        <div class="form-group row">
            <label for="nombreTienda" class="col-sm-2 col-form-label">Tienda</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="nombreTienda" placeholder="Nombre de Tienda">
            </div>
        </div>
        

        <div class="reset_pass_btn">
            <button type="button" class="btn btn-primary">Registrar</button>
            <a type="button" class="btn btn-secondary" href="index.php">Cancelar</a>
        </div>
    </form>
</div>