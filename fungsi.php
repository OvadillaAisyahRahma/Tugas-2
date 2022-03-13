<!DOCTYPE html>
<html lang="en">
<head>
    <title>NO 3</title>
</head>
<body style="background-color:pink">
    <?php
    // Fungsi dapat digunakan ulang tanpa menulis ulang intruksinya
    function nama_bunga($bunga){
    echo "<h3> Saya suka bunga $bunga <h3><br/>";
    }

    // Memanggil fungsi yang sudah dibuat
    nama_bunga ("Matahari");

    // Memanggil fungsi lagi 
    nama_bunga ("Mawar");
    nama_bunga ("Melati")
    ?>
</body>
</html>