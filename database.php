<?php
    //Cara 1
    define ('DB_HOST', 'localhost');
    define ('DB_USER', 'root');
    define ('DB_PASS', '');
    define ('DB_NAME', 'pplg_3_notes');
    $koneksi=mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME) or die("Gagal terhubung dengan Database: " . mysqli_error($dbconnect));
    
    function tampildata($tablename)
    {
        global $koneksi;
        $hasil=mysqli_query($koneksi,"select * from $tablename");
        $rows=[];
        while($row = mysqli_fetch_assoc($hasil))
        {
            $rows[] = $row;
        }
        return $rows;

    }

    function inputdata($inputdata)
    {
        global $koneksi;
        $sql=mysqli_query($koneksi,$inputdata);
        return $sql;
    }

    function Editdata($tablename,$id)
    {
        global $koneksi;
        $hasil=mysqli_query($koneksi,"select * from $tablename where id='$id'");
        return $hasil;
    }

    function update($table, $data, $id)
    {
        global $koneksi;
        $sql = "UPDATE $table SET note = '$data' WHERE id = '$id'";
        $hasil=mysqli_query($koneksi,$sql);
        return $hasil;
    }

    function Delete($tablename,$id)
    {
        global $koneksi;
        $hasil=mysqli_query($koneksi,"delete from $tablename where id='$id'");
        return $hasil;
    }
?>