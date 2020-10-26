 <div class="form-group row">
     <label class="col-md-3 form-control-label" for="text-input">Categoría</label>
    <div class="col-md-9">
    <select class="form-control" name="id" id="id" required>
         <option value="0" disabled>Selecciones</option>
                      @foreach($categorias as $cat)
          <option value="{{$cat->id}}">{{$cat->nombre}}</option>
                       @endforeach
    </select>
 </div>
  </div>

 <div class="form-group row">
  <label class="col-md-3 form-control-label" for="codigo">Codigo</label>
    <div class="col-md-9">
 <input type="text" name="codigo" id="codigo" class="form-control" placeholder="Ingrese codigo" required pattern="[0-9]{0,15}">
      </div>
    </div>

    <div class="form-group row">
  <label class="col-md-3 form-control-label" for="stock">Stock</label>
    <div class="col-md-9">
 <input type="text" name="stock" id="stock" class="form-control" placeholder="Ingrese stock" disabled>
      </div>
    </div>

    <div class="form-group row">
  <label class="col-md-3 form-control-label" for="nombre">Nombre</label>
    <div class="col-md-9">
 <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Ingrese nombre" required pattern="^[a-zA-Z_áéíóúñ\s]{0-100}$">
      </div>
    </div>

    <div class="form-group row">
  <label class="col-md-3 form-control-label" for="precio_venta">Precio venta</label>
    <div class="col-md-9">
 <input type="number" step="any" name="precio_venta" id="precio_venta" class="form-control" placeholder="Ingrese el precio venta" required pattern="^[a-zA-Z_áéíóúñ\s]{0-100}$">
      </div>
    </div>

    <div class="form-group row">
        <label class="col-md-3 form-control-label" for="imagen">Imagen</label>
        <div class="col-md-9">
            <input type="file" id="imagen" name="imagen" class="form-control">

        </div>
        
    </div>

 <div class="modal-footer">
 <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times fa-2x"></i> Cerrar</button>
<button type="submit" class="btn btn-success"><i class="fa fa-save fa-2x"></i> Guardar</button>
                           
     </div>