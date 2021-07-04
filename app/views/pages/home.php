<?php

include_once URL_APP .'/views/resources/header.php';



?>

<!-- Modal -->
<div class="modal fade" id="miModal" tabindex="-1" role="dialog" aria-labelledby="modalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content mb-2">
            <div class="modal-header mb-2">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
                <div class="modal-body mb-2">
                    <h3 class="text-center">Insertar Nuevo Producto</h3>

                    <form action="<?php echo URL_PROJECT ?>/home/registrar" method="POST">
                        <div class="form-group">
                            <select name="marca" id="marca" class="form-control mb-2" required>
                                <option value="">Marca</option>
                                <?php foreach($datos['options']['marcas'] as $datosMarca): ?>
                                    <option value="<?php echo $datosMarca->id_marca?>"><?php echo $datosMarca->descripcion ?></options>
                                    <?php endforeach ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <select name="presentacion" id="presentacion" class="form-control mb-2" required>
                                <option value="">Presentacion</option>
                                <?php foreach($datos['options']['presentacion'] as $datosMarca): ?>
                                    <option value="<?php echo $datosMarca->id_presentacion?>"><?php echo $datosMarca->descripcion ?></options>
                                    <?php endforeach ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <select name="provedor" id="provedor" class="form-control mb-2 " required>
                                <option value="">Proveedor</option>
                                <?php foreach($datos['options']['proveedor'] as $datosMarca): ?>
                                    <option value="<?php echo $datosMarca->id_proveedor?>"><?php echo $datosMarca->descripcion ?></options>
                                    <?php endforeach ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <select name="zona" id="zona" class="form-control mb-2" required>
                                <option value="">Zona</option>
                                <?php foreach($datos['options']['zona'] as $datosMarca): ?>
                                    <option value="<?php echo $datosMarca->id_zona?>"><?php echo $datosMarca->descripcion ?></options>
                                    <?php endforeach ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="text" name="codigo" id="codigo" class="form-control mb-2" placeholder="Codigo del prodcuto" required>

                        </div>
                        <div class="form-group">
                            <input type="text" name="descripcion" id="descripcion" class="form-control mb-2" placeholder="Descripcion del Producto" required>
                            
                        </div>
                        <div class="form-group">
                            <input type="text" name="precio" id="precio" class="form-control mb-2" placeholder="Precio del prodcuto" required>
                            
                        </div>
                        <div class="form-group">
                            <input type="text" name="stock" id="stock" class="form-control mb-2" placeholder="Stock" required>
                            
                        </div>
                        <div class="form-group">
                            <input type="text" name="iva" id="iva" class="form-control mb-2" placeholder="IVA" required>
                            
                        </div>
                        <div class="form-group">
                            <input type="text" name="peso" id="peso" class="form-control mb-2" placeholder="Peso" required>
                            
                        </div>
                        <button class="btn btn-success btn-block">Registrar producto</button>
                        

                    </form>
                </div>    

            </div>
        </div>

</div>

    

<div class="container-fluid mt-3">
    <div class="contenido-acciones-formulario-producto mb-3">
        <div class="boton-crear-nuevo-producto">
        <button type="button" class=" mt-5 mx-5 btn btn-primary" data-bs-toggle="modal" data-bs-target="#miModal"><i class="fas fa-plus mr-1"></i> Nuevo</button>
        </div>

        <div class="formulario-buscar-producto">
            <form action="<?php echo URL_PROJECT ?>/home" method="post" class="form-inline">
                <div class="form-group mb-2">
                    <input type="search" name="buscar" id="buscar" class="form-control" placeholder="Buscar Producto" >
                </div>
                <div class="form-group">
                    <button class="btn btn-success"> <i class="fas fa-search"></i>Buscar</button>
                </div>
            </form>
        </div>
    </div>



   
        <div class="tabla-vista-productos-acciones">
            <div class="table-responsive">
                <table class="table">
                    <tr>
                        <th>ID</th>
                        <th>Marca</th>
                        <th>Estado</th>
                        <th>Proveedor</th>
                        <th>Zona</th>
                        <th>Codigo</th>
                        <th>Descripcion</th>
                        <th>Precio</th>
                        <th>Stock</th>
                        <th>IVA</th>
                        <th>Peso</th>
                        <th>Acciones</th>
                    </tr>
                    <?php foreach ($datos['productos'] as $datosProductos) : ?>
                        <tr>
                            <td><?php echo $datosProductos->id_producto ?></td>
                            <td><?php echo $datosProductos->descripcionMarca ?></td>
                            <td><?php echo $datosProductos->descripcionPresentacion ?></td>
                            <td><?php echo $datosProductos->descripcionProveedores ?></td>
                            <td><?php echo $datosProductos->descripcionZona ?></td>
                            <td><?php echo $datosProductos->codigo ?></td>
                            <td><?php echo $datosProductos->descripcion_producto ?></td>
                            <td><?php echo $datosProductos->precio ?></td>
                            <td><?php echo $datosProductos->stock ?></td>
                            <td><?php echo $datosProductos->iva ?></td>
                            <td><?php echo $datosProductos->peso ?></td>
                            <td>
                                <a href="<?php echo URL_PROJECT ?>/home/editar/<?php echo $datosProductos->id_producto ?>" class="btn btn-info"> <i class="far fa-edit"></i> Editar</a>
                                <a href="<?php echo URL_PROJECT ?>/home/eliminar/<?php echo $datosProductos->id_producto ?>" class="btn btn-danger" onclick="return eliminarproducto()"> <i class="fas fa-trash"></i> Eliminar</a>
                            </td>
                        </tr>
                        <?php endforeach ?>
                </table>

            </div>
        </div>  
</div>





<?php

include_once URL_APP .'/views/resources/footer.php';

?>