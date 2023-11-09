// Inicializo automáticamente la función read al entrar a la página o recargarla.
addEventListener('load', read, false);

function read() {
    $.ajax({
        type: 'POST',
        url: '?c=administrator&m=table_productos',
        beforeSend: function () {
            $("#information").html("Procesando, espere por favor...");
        },
        success: function (response) {
            $("#information").html(response);
        }
    });
}

function registerProducto() {
    var formData = new FormData(document.forms.namedItem("formProducto"));
    $.ajax({
        type: 'POST',
        url: '?c=administrator&m=registerproducto',
        data: formData,
        processData: false,
        contentType: false,
        success: function (response) {
            read();
            alert('Los datos se guardaron correctamente.');
            $('#addProducto').modal('hide');
        }
    });
}

function updateProducto() {
    var id_producto = document.formProductoUpdate.id_producto.value;
    var nombre_producto = document.formProductoUpdate.nombre_producto.value;
    var categoria = document.formProductoUpdate.categoria.value;
    var precio = document.formProductoUpdate.precio.value;
    var color = document.formProductoUpdate.color.value;
    var material = document.formProductoUpdate.material.value;
    var talla = document.formProductoUpdate.talla.value;
    var marca = document.formProductoUpdate.marca.value;
    $.ajax({
        type: 'POST',
        url: '?c=administrator&m=updateproducto',
        data: {
            id_producto: id_producto,
            nombre_producto: nombre_producto,
            categoria: categoria,
            precio: precio,
            color: color,
            material: material,
            talla: talla,
            marca: marca
        },
        success: function (response) {
            read();
            $('#updateProducto').modal('hide');
        }
    });
}


function deleteProducto(id_producto) {
    if (confirm('¿Está seguro de eliminar este producto?')) {
        $.ajax({
            type: 'POST',
            url: '?c=administrator&m=deleteproducto',
            data: {
                id_producto: id_producto
            },
            success: function (response) {
                read();
            }
        });
    }
}

function ModalRegisterProducto() {
    $('#addProducto').modal('show');
}

function ModalUpdate(id_producto, nombre_producto, categoria, precio, color, material, talla, marca) {
    document.formProductoUpdate.id_producto.value = id_producto;
    document.formProductoUpdate.nombre_producto.value = nombre_producto;
    document.formProductoUpdate.categoria.value = categoria;
    document.formProductoUpdate.precio.value = precio;
    document.formProductoUpdate.color.value = color;
    document.formProductoUpdate.material.value = material;
    document.formProductoUpdate.talla.value = talla;
    document.formProductoUpdate.marca.value = marca;
    $('#updateProducto').modal('show');
}
