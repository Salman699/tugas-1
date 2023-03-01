<?php
 include "koneksi.php";
 include "create_message.php";
 if(isset($_POST['mahasiswa_id'])){
 //Kondisi Update
 $sql = "UPDATE mahasiswa SET nama_lengkap = '".$_POST['nama_lengkap']."',alamat
= '".$_POST['alamat']."',kelas_id = '".$_POST['kelas_id']."' WHERE (`mahasiswa_id` =
'".$_POST['mahasiswa_id']."');";
 if ($conn->query($sql) === TRUE) {
 $conn->close(); 
 create_message("Ubah Data Berhasil","success","check");
 header("location:".$_SERVER['HTTP_REFERER']);
 exit();

} else {
    $conn->close();
    create_message("Error: " . $sql . "<br>" . $conn->error,"danger","warning");
    header("location:".$_SERVER['HTTP_REFERER']);
    exit();
    } 
    }
    else{
    //Kondisi Insert
    $sql = "INSERT INTO mahasiswa (nama_lengkap, kelas_id, alamat)
    VALUES ('".$_POST['nama_lengkap']."', ".$_POST['kelas_id'].", '".$_POST['alamat
   ']."')";
    if ($conn->query($sql) === TRUE) {
    $conn->close(); 
    create_message("Simpan Data Berhasil","success","check");
    header("location:index.php");
    exit();
    } else {
    $conn->close();
    create_message("Error: " . $sql . "<br>" . $conn->error,"danger","warning");
    header("location:index.php");
    exit();
    }
    }
   ?>