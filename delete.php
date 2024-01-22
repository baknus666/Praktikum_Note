<?php
    require_once("database.php");
    // if(isset($_GET['id'])){
        $id = $_GET['kode'];
        $sql = Delete("notes",$id);
        if ($sql) {
            header("location:list_notes.php");
        }
    // }else{
    //     echo "Jangan Akses langsung kemari, cek name pada submit <a href='list_notes.php'>Kembali</a>";
    // }
    
?>