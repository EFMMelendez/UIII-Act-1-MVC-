<?php
/*
    CRUD creado por Oscar Amado
    Contacto: oscarfamado@gmail.com
*/
class administratorController extends Administrator{

    function index(){
        require_once('views/all/header.php');
        require_once('views/all/nav.php');
        require_once('views/index/index.php');
        require_once('views/index/modals.php');
        require_once('views/all/footer.php');
    }

    function table_productos(){
        ?>
        <table class="table table-bordered">
            <thead>
                <tr>
                <th>#</th>
                <th>Nombre Producto</th>
                <th>Categoría</th>
                <th>Precio</th>
                <th>Color</th>
                <th>Material</th>
                <th>Talla</th>
                <th>Marca</th>
                <th>Opciones</th>
                </tr>
            </thead>
            <tbody >      
        <?php
        foreach (parent::get_view_productos() as $data) {
        ?>
        <tr>
            <td><?php echo $data->id_producto; ?> </td>
            <td><?php echo $data->nombre_producto; ?> </td>
            <td><?php echo $data->categoria; ?> </td>
            <td><?php echo $data->precio; ?> </td>
            <td><?php echo $data->color; ?> </td>
            <td><?php echo $data->material; ?> </td>
            <td><?php echo $data->talla; ?> </td>
            <td><?php echo $data->marca; ?> </td>
            <td>
              <div class="btn-group">
                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                Seleccionar <span class="caret"></span></button>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="#" onclick="ModalUpdate('<?php echo $data->id_producto; ?>','<?php echo $data->nombre_producto; ?>','<?php echo $data->categoria; ?>','<?php echo $data->precio; ?>', '<?php echo $data->color; ?>', '<?php echo $data->material; ?>', '<?php echo $data->talla; ?>', '<?php echo $data->marca; ?>');">Actualizar</a></li>
                  <li><a href="#" onclick="deleteProducto('<?php echo $data->id_producto; ?>');">Borrar</a></li>
                </ul>
              </div>
            </td>
        </tr>
        <?php
        }
        ?>
            </tbody>
        </table>    
    <?php   
    }
    
    function deleteproducto(){       
            parent::set_delete_producto($_REQUEST['id_producto']);      
    }

    function registerproducto(){
        $data = array(
                    'nombre_producto' => $_REQUEST['nombre_producto'],
                    'categoria' => $_REQUEST['categoria'],
                    'precio' => $_REQUEST['precio'],
                    'color' => $_REQUEST['color'],
                    'material' => $_REQUEST['material'],
                    'talla' => $_REQUEST['talla'],
                    'marca' => $_REQUEST['marca']
                    );      
                    parent::set_register_producto($data);      
    }    
    
    function updateproducto(){
        $data = array(
                    'id_producto' => $_REQUEST['id_producto'],
                    'nombre_producto' => $_REQUEST['nombre_producto'],
                    'categoria' => $_REQUEST['categoria'],
                    'precio' => $_REQUEST['precio'],
                    'color' => $_REQUEST['color'],
                    'material' => $_REQUEST['material'],
                    'talla' => $_REQUEST['talla'],
                    'marca' => $_REQUEST['marca']
                    );      
            parent::set_update_producto($data);      
    }    
    
}
?>
