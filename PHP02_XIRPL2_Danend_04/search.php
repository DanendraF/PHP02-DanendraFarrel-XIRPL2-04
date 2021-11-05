<html>

<style>
    body 
        {
            background-image: url('https://wallpaperaccess.com/full/2923094.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
        }
</style>

    <body>
        <h1>Searching Buku</h1>
        
        <form action = "hasilsearch.php" method = "post">
            <select name = "kolom">
            <option value = "judul_buku">Judul Buku</option>
            <option value = "penulis">Penulis</option>
            <option value = "jenis_buku">Jenis Buku</option>
        </select>
        Masukan Kata Yang Anda Cari
        <input type = "text" type = "text" name = "cari">
        <input type = "submit" value = "cari">
        </form>
    </body>
</html>