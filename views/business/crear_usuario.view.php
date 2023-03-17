<!-- Vista de crear usuario -->
<form>
    <div class="card">
        <div class="form-row m-3">
            <div class="form-group col-md-4">
                <label for="inputEmail4">Rol</label>
                <select class="form-control">
                    <option>Proveedor</option>
                    <option>Coodinador</option>
                    <option>Administrador</option>
                    <option>Inclusor social</option>
                </select>
            </div>
            <div class="form-group col-md-4 ">
                <label for="inputEmail4">Nombre</label>
                <input type="email" class="form-control" id="inputEmail4" placeholder="nombre">
            </div>
            <div class="form-group col-md-4">
                <label for="inputPassword4">Apellidos</label>
                <input type="password" class="form-control" id="inputPassword4" placeholder="Apellidos">
            </div>
        </div>
        <div class="form-group m-3">
            <label for="inputAddress">
                
            Cédula</label>
            <input type="text" class="form-control-sm" id="inputAddress" placeholder="Numero de cédula">
        </div>
        <div class="form-group m-3">
            <label for="inputAddress2">Registrar contraseña</label>
            <input type="text" class="form-control-sm" id="inputAddress2" placeholder="Registrar contraseña">
        </div>
        <div class="form-group m-3">
            <label for="inputAddress2">Confirmar contraseña</label>
            <input type="text" class="form-control-sm" id="inputAddress2" placeholder="Confirmar contraseña">
        </div>
        
    
        <a type="submit" class="btn btn-primary m-3">Crear Usuario</a>
    </div>


</form>