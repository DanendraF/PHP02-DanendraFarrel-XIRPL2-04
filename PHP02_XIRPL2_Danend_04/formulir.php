<style>
    body 
        {
            background-image: url('https://wallpaperaccess.com/full/2923094.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
        }
</style>


<?php
    session_start();
?>
<form action = "simpan.php" method = "post" enctype = "multipart/form-data">
    <table>
    <tr>
            <td>Judul Buku</td>
            <td>:</td>
            <td><input type = "text" name = "judul_buku"></td>
        </tr>

        <tr>
            <td>Penulis</td>
            <td>:</td>
            <td><input type = "text" name = "penulis"></td>
        </tr>

        <tr>
            <td>Jenis Buku</td>
            <td>:</td>
            <td><input type = "text" name = "jenis_buku"></td>
        </tr>

        <tr>
            <td>Gambar Buku</td>
            <td>:</td>
            <td><input type = "file" name = "gambar_buku"></td>
        </tr>
    </table>
    <input type = "submit" name = "simpan" value = "SIMPAN">
</form>
<?php
    if(isset($_SESSION["message"])){
        echo $_SESSION["message"];
        unset($_SESSION["Message"]);
    }
        
        
