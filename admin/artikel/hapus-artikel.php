<?php
session_start();
    include '../../config/database.php';

    $id_artikel=$_POST["id_artikel"];
    $gambar=$_POST["gambar"];

    $sql="delete from artikel where id_artikel=$id_artikel";
    $hapus_artikel=mysqli_query($kon,$sql);

    if ($gambar!='gambar_default.png'){
        unlink("gambar/".$gambar);
    }
?>