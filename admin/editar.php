<?php
require_once "../config/conexion.php";
include("includes/header.php"); 
function buscarProductoById($conexion, $id_producto){
    $sql = "SELECT *FROM productos WHERE id='$id_producto'";
    return mysqli_query($conexion, $sql);
};
$id_producto = $_GET['id'];
$busc_producto = buscarProductoById($conexion, $id_producto);
$res_b_producto= mysqli_fetch_array($busc_producto);
?>
<div >
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-gradient-primary text-white">
                <h5 class="modal-title" id="title">Editar Producto</h5>
                <button class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="editar_producto.php" method="POST" enctype="multipart/form-data" autocomplete="off">
                    <div class="row">
                        <div class="col-md-6">
                        <input id="nombre" class="form-control" type="text" name="id" value="<?php echo $id_producto; ?>" >
                            <div class="form-group">
                                <label for="nombre">Nombre</label>
                                <input id="nombre" class="form-control" type="text" name="nombre" value="<?php echo $res_b_producto['nombre']; ?>" >
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="cantidad">Cantidad</label>
                                <input id="cantidad" class="form-control" type="text" name="cantidad" value="<?php echo $res_b_producto['cantidad']; ?>">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="descripcion">Descripción</label>
                                <input id="descripcion" class="form-control" name="descripcion" value="<?php echo $res_b_producto['descripcion']; ?>" rows="3" ></input>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="p_normal">Precio Normal</label>
                                <input id="p_normal" class="form-control" type="text" name="p_normal" value="<?php echo $res_b_producto['precio_normal']; ?>">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="p_rebajado">Precio Rebajado</label>
                                <input id="p_rebajado" class="form-control" type="text" name="p_rebajado" value="<?php echo $res_b_producto['precio_rebajado']; ?>" >
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="categoria">Categoria</label>
                                <select id="categoria" class="form-control" name="categoria" value="<?php echo $res_b_producto['id_categoria']; ?>">
                                    <?php
                                    $id_cat=$ $res_b_producto['id_categoria'];
                                    function buscarCategoria($conexion) {
                                        $sql = "SELECT * FROM categorias";
                                        return mysqli_query($conexion, $sql);
                                    }
                                    $busc_cat_=buscarCategoria($conexion);
                                    while ($res_b_cat = mysqli_fetch_array($busc_cat_) ) {
                                        $id_categoria = $res_b_cat['id'];
                                    
                                    ?>
                                    <option value="<?php echo $res_b_cat['id']; ?>" <?php if ($id_cat == $id_categoria) {
																																									echo "selected";
																																								}
																																								?>>
														<?php echo $res_b_cat['categoria']; ?></option>
												<?php
												};
												?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="imagen">Foto</label>
                                <input type="file" class="form-control" name="foto" value="<?php echo $res_b_producto['imagen']; ?>">
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-primary" type="submit">Actualizar</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include("includes/footer.php"); ?>