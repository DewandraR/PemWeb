<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Prata&display=swap" rel="stylesheet">
    <title>Buku Tamu</title>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="All.css">
    <link rel="stylesheet" href="buku-tamu.css">
    <style>
    body{
        overflow-x: hidden;
        background: linear-gradient(243.68deg, #FFBEC2 -1.49%, rgba(152, 181, 254, 0.863703) 25.47%, rgba(10, 225, 71, 0.846137) 64.31%, rgba(255, 161, 74, 0.83) 100%, #BEAC4E 100%)
}
    </style>
</head>
<body>
    <div class="header mnsrat">  
        <h1 style="font-size: 50px;">Welcome</h1>
        <h2 style="font-size: 35px;">TO</h2>
        <p style="padding: 15px; font-size: 24px;">MY BLOG</hp>
    </div>
    <nav class="mnsrat">
        <label class="logo"><a href="Home.html"><img src="img/logo-m.svg" alt="Mankyau" width="140px"></a></label>
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
                <i class="fas fa-bars"></i>
        </label>
        <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="About.html">About</a></li>
            <li><a href="Blog.html">Blog</a></li>
            <li><a class="aktif" href="Buku-Tamu.php">Buku Tamu</a></li>
        </ul>
    </nav>
    <div class="utama">
        <form method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
            <div>
                <label>Nama</label><br>
                <input type="text" placeholder=" Masukkan Nama Mu" required name="fname"><br>
            </div>
            <div>
                <label>Email</label><br>
                <input type="email" placeholder=" Email Mu" required name="femail"><br>
            </div>
            <div>
                <label>Tanggal Lahir</label><br>
                <input type="date" name="fdate"><br>
            </div>
            <div>
                <label>Angka Keberuntungan</label><br>
                <input type="number" placeholder=" Angka Keberuntungan" required name="fnumber"><br>
            </div>
            <div>
                <label>Makanan Kesukaan</label><br>
                <input type="text" placeholder=" Makanan Kesukaan Mu" required name="ffood"><br>
            </div>
            <div>
                <label>Gender</label><br>
                <input type="radio" name="fgender" value="laki-laki">Laki-laki
				<input type="radio" name="fgender" value="perempuan">Perempuan<br>
            </div>
            <div>
                <br>
                <input class="btn-primary" type="submit" value="submit">
            </div>
        <form> 
        <div>
            <?php
                $nama = isset($_POST['fname']) ? $_POST['fname'] : '';
                $email = isset($_POST['femail']) ? $_POST['femail'] : '';
                $gender = isset($_POST['fgender']) ? $_POST['fgender'] : '';
                $date = isset($_POST['fdate']) ? $_POST['fdate'] : '';
                $number = isset($_POST['fnumber']) ? $_POST['fnumber'] : '';
                $food = isset($_POST['ffood']) ? $_POST['ffood'] : '';

                $data = "<br><br>Nama: $nama<br>Email: $email<br>Gender: $gender<br>Tanggal Lahir: $date<br>Angka Keberuntungan: $number<br>Makanan Kesukaan: $food<br><br>";

                $tamu = fopen("Daftar-Tamu.txt", "a");

                if(isset($_POST['fname']) || isset($_POST['femail']) || isset($_POST['fgender']) || isset($_POST['fdate']) || isset($_POST['fnumber']) || isset($_POST['ffood'])){
                    fwrite($tamu, $data);
                    fclose($tamu);
                }
                
                if(isset($_POST['fname']) || isset($_POST['femail']) || isset($_POST['fgender']) || isset($_POST['fdate']) || isset($_POST['fnumber']) || isset($_POST['ffood'])){
                    $tamu = fopen("Daftar-Tamu.txt", "r");
                    echo fread($tamu, filesize("Daftar-tamu.txt"));
                }
            ?>
        </div>
    </div>
    <footer>
        <h5 style="text-align: center;">Copyright &copy;2022 | Muhammad Dewandra Rhamadan</h5>
        <a href="#"><i class="fas fa-arrow-up"></i></a>
    </footer>
</body>
</html>