<?php 
include "../config/conexion.php";

    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $cantidad = $_POST['cantidad'];
    $descripcion = $_POST['descripcion'];
    $p_normal = $_POST['p_normal'];
    $p_rebajado = $_POST['p_rebajado'];
    $categoria = $_POST['categoria'];
    $foto = $_POST['foto'];

    $sql = "UPDATE productos SET nombre='$nombre', descripcion='$descripcion', precio_normal='$p_normal', precio_rebajado='$p_rebajado', cantidad='$cantidad', imagen='$foto', id_categoria='$categoria' WHERE id='$id' ";

    $ejec_consulta = mysqli_query($conexion, $sql);

    if ($ejec_consulta) {
        echo "<script>
					alert('Datos actualizados de manera Correcta');
					window.location= 'productos.php';
				</script>
			";
    } else {
        echo "<script>
					alert('Error al Actualizar Registro');
					window.history.back();
				</script>
			";
    }
    mysqli_close($conexion);

?>