<div class="form-group row">
    <label class="col-md-3 form-control-label" for="nombre">Nombre</label>
        <div class="col-md-9">
    <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Ingrese el nombre" require pattern="^[a-zA-Z_áéíóúñ\s]{0-30}$">
                                       
    </div>
</div>
    <div class="form-group row">
        <label class="col-md-3 form-control-label" for="direccion">Direccion</label>
            <div class="col-md-9">
        <input type="text" name="direccion" id="direccion" class="form-control" placeholder="Ingrese la direccion" pattern="^[a-zA-Z_áéíóúñ\s]{0-30}$">
            </div>
    </div>

    <div class="form-group row">
        <label class="col-md-3 form-control-label" for="documento">Documento</label>
            <div class="col-md-9">
        <select class="form-control" name="tipo_documento" id="tipo_documento">

            <option value="0" disabled>Selecciones</option>
            <option value="DPI">DPI</option>
            <option value="CEDULA">CEDULA</option>
            
        </select>
            </div>
    </div>

    <div class="form-group row">
        <label class="col-md-3 form-control-label" for="num_documento">Numero documento</label>
            <div class="col-md-9">
        <input type="text" name="num_documento" id="num_documento" class="form-control" placeholder="Ingrese el numero de documento" pattern="[0-9]{0,15}">
            </div>
    </div>

    <div class="form-group row">
        <label class="col-md-3 form-control-label" for="telefono">Telefono</label>
            <div class="col-md-9">
        <input type="text" name="telefono" id="telefono" class="form-control" placeholder="Ingrese el telefono" pattern="[0-9]{0,15}">
            </div>
    </div>

    <div class="form-group row">
        <label class="col-md-3 form-control-label" for="email">Correo</label>
            <div class="col-md-9">
        <input type="text" name="email" id="email" class="form-control" placeholder="Ingrese el correo">
            </div>
    </div>

        <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times fa-2x"></i> Cerrar</button>
        <button type="submit" class="btn btn-success"><i class="fa fa-save fa-2x"></i> Guardar</button>
    </div>