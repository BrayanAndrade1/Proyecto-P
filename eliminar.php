<?php
    if (isset($_GET)) {
        if (!empty($_GET['accion']) && !empty($_GET['id'])) {
            include("config/conexion1.php");
            
            $id = $_GET['id'];
            if ($_GET['accion'] == 'pro') {
                $sql="DELETE FROM productos WHERE id = '$id'";
                $query = mysqli_query($conexion, $sql);
                if ($query) {
                    header('Location: insert_Productos.php');
                }
            }
            if ($_GET['accion'] == 'cli') {
                $sql = "DELETE FROM categorias WHERE id = '$id'";
                $query = mysqli_query($conexion, $sql);
                if ($query) {
                    header('Location: categorias.php');
                }
            }
        }
    }
?>