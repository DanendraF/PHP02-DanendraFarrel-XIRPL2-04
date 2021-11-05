<?php
    session_start();
    if(isset($_POST["judul_buku"])){
        include 'koneksi.php';

        $id_buku = $_POST["id"];
        $judul_buku = $_POST['judul_buku'];
        $penulis = $_POST['penulis'];
        $jenis_buku = $_POST['jenis_buku'];
        $gambar_buku = $_FILES['gambar_buku'];

        $message        = "";

        if($judul_buku==""){
            $message    = "judul buku harus diisi!";
        }else if($penulis==""){
            $message    = "Penulis harus diisi!";
        }else if($jenis_buku==""){
            $message    = "Jenis Buku harus diisi!";
        }else{

            if(isset($gambar_buku["tmp_name"]) && $gambar_buku["tmp_name"]!=""){
                $message    = "Gambar buku harus dipilih!";
            $filePath = "upload/".basename($gambar_buku["name"]);
            move_uploaded_file($gambar_buku["tmp_name"], $filePath);

                $conn->query("UPDATE buku SET gambar_buku='".$filePath."' WHERE id_buku = ".$id_buku);
            }

            $conn->query("UPDATE buku SET judul_buku='".$filePath."' , penulis ='".$penulis."', jenis_buku'".$jenis_buku."' WHERE id_buku=".$id_buku);

             $message = "Buku berhasil di update!";
        }
        $_SESSION["message"] = $message;

        header("location:update.php?id=".$id_buku);
    exit();
    }

    header("location:formulir.php");
    exit();
    ?>