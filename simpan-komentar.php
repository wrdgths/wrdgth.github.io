<?php
    if (isset($_POST['form_komentar'])) {
        include 'config/database.php';
        
        function input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        $id_artikel=input($_POST["id_artikel"]);
        $nama=input($_POST["nama"]);
        $email=input($_POST["email"]);
        $komentar=input($_POST["komentar"]);
        $status=input($_POST["status"]);

 
        $sql="insert into komentar (id_artikel,nama,email,isi_komentar,status_komentar) values
        ('$id_artikel','$nama','$email','$komentar','$status')";
        $hasil=mysqli_query($kon,$sql);
     
        if ($hasil) {
            header("Location:index.php?halaman=artikel&id=$id_artikel&komentar=berhasil");
        }
        else {
            header("Location:index.php?halaman=artikel&id=$id_artikel&komentar=gagal");

        }
        
    }
?>