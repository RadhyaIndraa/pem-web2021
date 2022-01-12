<!DOCTYPE html>
<html lang="en">
<head>
    <title>Mobil Rentalan</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">   
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/all.css">
    <link rel="stylesheet" href="../css/owl.carousel.min.css">
    <link rel="stylesheet" href="../css/owl.theme.default.min.css">
    <link rel="stylesheet" href="../css/bukutamu.css">


</head>
<body>
    <!-- NAVIGATION -->
    <nav class="nav">
        <div class="nav-menu flex-row">
            <div class="nav-brand">
                <a href="../index.html" class="text-gray">Mobil Rentalan</a>
            </div>
            <div class="toggle-collapse">
                <div class="toggle-icon">
                    <i class="fas fa-bars"></i>
                </div>
            </div>
            <div>
                <ul class="nav-item">
                    <li class="nav-link">
                        <a href="../index.html">Home</a>
                    </li>
                    <li class="nav-link">
                        <a href="../about.html">About</a>
                    </li>
                    <li class="nav-link">
                        <a href="../produk.html">Produk</a>
                    </li>
                    <li class="nav-link">
                        <a href="#">Buku Tamu</a>
                    </li>
                </ul>
            </div>
            <div class="social text-gray">
                <a href="https://www.facebook.com/radya.indra.7"><i class="fab fa-facebook-f"></i></a>
                <a href="https://www.instagram.com/indraradhya/"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-whatsapp"></i></a>
                <a href="https://www.youtube.com/channel/UCpDleXg0XqNaPxomL2cQaLw"><i class="fab fa-youtube"></i></a>
            </div>
        </div>
    </nav>
    <div class="wrapper">
        <h1>Buku Tamu</h1>
        <p>Isikan buku tamu ini untuk meninggalkan pesan</p>

        <div class="form">
            <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
                <div class="inputfield">
                    <label>Nama Lengkap</label>
                    <input type="text" name="fnama" id="nama" class="input">
                </div>
                <div class="inputfield">
                    <label>Email</label>
                    <input type="email" name="femail" id="email" class="input">
                </div>
                <div class="inputfield">
                    <label>No Hp</label>
                    <input type="number" name="fnohp" id="nohp" class="input">
                </div>
                <div class="inputfield">
                    <label>Jenis Kelamin</label>
                    <div class="custom_select">
                        <select name="fkelamin" id="kelamin">
                            <option value=""></option>
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                </div>
                <div class="inputfield">
                    <label>Alamat</label>
                    <textarea name="falamat" id="alamat" class="textarea"></textarea>
                </div>
                <div class="inputfield">
                    <label>Pesan</label>
                    <textarea name="fpesan" id="pesan" class="textarea"></textarea>
                </div>
                <div class="inputfield">
                    <input type="Submit" value="Submit" class="butn">
                </div>
            </form>
        </div>
    </div>
    <div class="php">
    <?php
        if(isset($_POST['fnama'])){
            $nama = $_POST['fnama'];
            $email = $_POST['femail'];
            $nohp = $_POST['fnohp'];
            $kelamin = $_POST['fkelamin'];
            $alamat = $_POST['falamat'];
            $pesan = $_POST['fpesan'];
            echo"
            <table>
                <tr>
                    <td>Nama Lengkap</td>
                    <td>Email</td>
                    <td>No Hp</td>
                    <td>Jenis kelamin</td>
                    <td>Alamat</td>
                    <td>Pesan</td>
                </tr>
                <tr>
                    <td>$nama</td>
                    <td>$email</td>
                    <td>$nohp</td>
                    <td>$kelamin</td>
                    <td>$alamat</td>
                    <td>$pesan</td>
                </tr>
            </table>";
        }
    ?>
    </div>
    
    <!-- footer-->
    <footer class="footer">
        <div class="rights flex-row">
            <h4 class="text-gray">
                <p>Copyright &copy;MobilRentalan</p>
            </h4>
        </div>
        <div class="move-up">
            <span><i class="fas fa-arrow-circle-up fa-2x"></i></span>
        </div>
    </footer>


    <!-- Jquery file -->
    <script src="./js/Jquery3.4.1.min.js"></script>
     <!-- owl carousel -->
     <script src="./js/owl.carousel.min.js"></script>
    <!-- js file -->
    <script src="./js/main.js"></script>
</body>
</html>