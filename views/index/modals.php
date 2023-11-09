<div id="addProducto" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Agregar nuevo producto</h4>
      </div>
      <div class="modal-body">
        <form name="formProducto" onsubmit="registerProducto(); return false">
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-tags"></i></span>
            <input id="nombre_producto" type="text" class="form-control" name="nombre_producto" placeholder="Nombre del Producto" required autocomplete="off">
          </div>
          <br>
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
            <input id="categoria" type="text" class="form-control" name="categoria" placeholder="Categoría" required autocomplete="off">
          </div>
          <br>
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-usd"></i></span>
            <input id="precio" type="text" class="form-control" name="precio" placeholder="Precio" required autocomplete="off">
          </div>
          <br>
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-tint"></i></span>
            <input id="color" type="text" class="form-control" name="color" placeholder="Color" required autocomplete="off">
          </div>
          <br>
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-certificate"></i></span>
            <input id="material" type="text" class="form-control" name="material" placeholder="Material" required autocomplete="off">
          </div>
          <br>
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-resize-vertical"></i></span>
            <input id="talla" type="text" class="form-control" name="talla" placeholder="Talla" required autocomplete="off">
          </div>
          <br>
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-briefcase"></i></span>
            <input id="marca" type="text" class="form-control" name="marca" placeholder="Marca" required autocomplete="off">
          </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-success">Registrar</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Salir</button>
        </form>
      </div>
    </div>
  </div>
</div>

<div id="updateProducto" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Actualizar información de producto</h4>
      </div>
      <div class="modal-body">
        <form name="formProductoUpdate" onsubmit="updateProducto(); return false">
          <input type="hidden" name="id_producto" id="id_producto">
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-tags"></i></span>
            <input id="nombre_producto" type="text" class="form-control" name="nombre_producto" placeholder="Nombre del Producto" required autocomplete="off">
          </div>
          <br>
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
            <input id="categoria" type="text" class="form-control" name="categoria" placeholder="Categoría" required autocomplete="off">
          </div>
          <br>
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-usd"></i></span>
            <input id="precio" type="text" class="form-control" name="precio" placeholder="Precio" required autocomplete="off">
          </div>
          <br>
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-tint"></i></span>
            <input id="color" type="text" class="form-control" name="color" placeholder="Color" required autocomplete="off">
          </div>
          <br>
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-certificate"></i></span>
            <input id="material" type="text" class="form-control" name="material" placeholder="Material" required autocomplete="off">
          </div>
          <br>
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-resize-vertical"></i></span>
            <input id="talla" type="text" class="form-control" name="talla" placeholder="Talla" required autocomplete="off">
          </div>
          <br>
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-briefcase"></i></span>
            <input id="marca" type="text" class="form-control" name="marca" placeholder="Marca" required autocomplete="off">
          </div>
          <br>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-success">Actualizar</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Salir</button>
        </form>
      </div>
    </div>
  </div>
</div>

