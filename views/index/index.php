<div class="container">
    <div class="row">
        <div class="col-md-12">
            <center><h1>CRUD - PRODUCTOS - ELMER</h1></center>
            <br>            
            <center>
                <button type="button" onclick="ModalRegisterProducto();" class="btn btn-success">Agregar producto</button>
            </center>
            <br>
            <div id="information">
                <?php
                $admin = new administratorController();
                $admin->table_productos();
                ?>
            </div>            
        </div>
    </div>
</div>
