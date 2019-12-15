<div id="login">
    <h2>Registro</h2>
    <form action=""></form>
    <form id="foo_registro" action="#">
        <div class="form-group row">
            <label for="staticEmail" class="col-sm-2 col-form-label">Email*</label>
            <div class="col-sm-10">
                <input type="mail" class="form-control" id="email" placeholder="Email" required maxlength="60">
            </div>
        </div>

        <div class="form-group row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Contrase&ntilde;a*</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" id="pass_new1" placeholder="Password" maxlength="10" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Repetir Contrase&ntilde;a*</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" id="pass_new2" placeholder="Password" maxlength="10" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="school" class="col-sm-2 col-form-label">Escuela (Opcional)</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="school" placeholder="Escuela">
            </div>
        </div>
        

        <div class="reset_pass_btn">
            <button type="submit" class="btn btn-primary">Registrar</button>
            <a type="button" class="btn btn-secondary" href="index.php">Cancelar</a>
            <a id="bt-login" class="btn btn-outline-success" type="button" href="bin_registro_tienda.php">
                <span class="custom_green">Registrar Tienda</span>
            </a>
        </div>
    </form>
</div>