<?php
include_once URL_APP . '/views/resources/header.php';

?>


<div class="container mt-4">

    <a href="<?php echo URL_PROJECT ?>" class="btn btn-danger float-right"><i class="fas fa-times mr-1"></i> Cerrar</a>

    <br>
    <br>
    <h3 class="text-center">Editar Producto</h3>

    <form action="<?php echo URL_PROJECT ?>/home/editar/<?php echo $datos['producto']->id_producto ?>" method="POST">
        <div class="form-group">
            <select name="marca" id="marca" class="form-control mb-2" required>
                <option value="<?php echo $datos['producto']->id_marca?>"><?php echo $datos['producto']->descripcionMarca ?></option>
                <?php foreach ($datos['options']['marcas'] as $datosMarca) : ?> 
                <?php if($datosMarca->id_marca != $datos['producto']->id_marca ){ ?>
                    <option value="<?php echo $datosMarca->id_marca ?>"><?php echo $datosMarca->descripcion ?></options>
                    <?php } ?>
                    <?php endforeach ?>
                    
            </select>
        </div>
        <div class="form-group">
            <select name="presentacion" id="presentacion" class="form-control mb-2" required>
                <option value="<?php echo $datos['producto']->id_presentacion ?>"><?php echo $datos['producto']->descripcionPresentacion ?></option>
                <?php foreach ($datos['options']['presentacion'] as $datosMarca) : ?>
                    <?php if($datosMarca->id_presentacion != $datos['producto']->id_presentacion ){ ?>
                    <option value="<?php echo $datosMarca->id_presentacion ?>"><?php echo $datosMarca->descripcion ?></options>
                    <?php } ?>
                    <?php endforeach ?>
            </select>
        </div>
        <div class="form-group">
            <select name="provedor" id="provedor" class="form-control mb-2 " required>
                <option value="<?php echo $datos['producto']->id_proveedor ?>"><?php echo $datos['producto']->descripcionProveedores ?></option>
                <?php foreach ($datos['options']['proveedor'] as $datosMarca) : ?>
                    <?php if($datosMarca->id_proveedor != $datos['producto']->id_proveedor ){ ?>
                    <option value="<?php echo $datosMarca->id_proveedor ?>"><?php echo $datosMarca->descripcion ?></options>
                    <?php } ?>
                    <?php endforeach ?>
            </select>
        </div>
        <div class="form-group">
            <select name="zona" id="zona" class="form-control mb-2" required>
                <option value="<?php echo $datos['producto']->id_zona ?>"><?php echo $datos['producto']->descripcionZona ?></option>
                <?php foreach ($datos['options']['zona'] as $datosMarca) : ?>
                    <?php if($datosMarca->id_zona != $datos['producto']->id_zona ){ ?>
                    <option value="<?php echo $datosMarca->id_zona ?>"><?php echo $datosMarca->descripcion ?></options>
                    <?php } ?>
                    <?php endforeach ?>
            </select>
        </div>
        <div class="form-group">
            <input type="text" name="codigo" id="codigo" class="form-control mb-2" placeholder="Codigo del prodcuto"  value="<?php echo $datos['producto']->codigo ?>" required>

        </div>
        <div class="form-group">
            <input type="text" name="descripcion" id="descripcion" class="form-control mb-2" placeholder="Descripcion del Producto" value="<?php echo $datos['producto']->descripcion_producto ?>" required>

        </div>
        <div class="form-group">
            <input type="text" name="precio" id="precio" class="form-control mb-2" placeholder="Precio del prodcuto" value="<?php echo $datos['producto']->precio ?>"  required>

        </div>
        <div class="form-group">
            <input type="text" name="stock" id="stock" class="form-control mb-2" placeholder="Stock"  value="<?php echo $datos['producto']->stock ?>" required>

        </div>
        <div class="form-group">
            <input type="text" name="iva" id="iva" class="form-control mb-2" placeholder="IVA" value="<?php echo $datos['producto']->iva ?>" required>

        </div>
        <div class="form-group">
            <input type="text" name="peso" id="peso" class="form-control mb-2" placeholder="Peso"  value="<?php echo $datos['producto']->peso ?>" required>

        </div>
        <button class="btn btn-success btn-block">Editar producto</button>


    </form>
</div>