<?php
session_start();

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="images/kucing.png" type="image/png" rel="shortcut icon" />
    <link rel="stylesheet" href="style.css">
    <title> HAY MIAW CARE SHOP.com </title>
</head>

<body>

    <div class="navigasi">
        <div class="logo">
            <img src="images/logo.png" width="360" height="98">
        </div>

        <div class="menu">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>

                <li class="submenu">
                    <a href="shop.php">SHOP</a>
                    <ul class="submenu-content">
                        <li><a href="food.php">FOOD</a></li>
                        <?php

                        // Check if the 'user_data' and 'role' are set in the session
                        if (isset($_SESSION['user_data']) && isset($_SESSION['role'])) {
                            // Check the role value
                            if ($_SESSION['role'] == 2) {
                                echo '<li><a href="cart.php">Transaksi</a></li>';
                                echo '<li><a href="transaksi.php">Barang Anda</a></li>';
                            } elseif ($_SESSION['role'] == 1) {
                                echo '<li><a href="daftarproduk.php">Tambah Produk</a></li>';
                                echo '<li><a href="transaksi_admin.php">Transaksi User</a></li>';
                                echo '<li><a href="user_admin.php">User</a></li>';
                            }
                        } else {
                            // Handle the case when the 'user_data' or 'role' is not set (optional)
                        }
                        ?>
                        <li><a href="cleaning.php">CLEANING</a></li>
                        <li><a href="medis.php">MEDICINE</a></li>
                        <li><a href="toys.php">TOYS </a></li>
                        
                    </ul>
                </li>

                <li class="submenu">
                    <a href="miaw.html">Service</a>
                    <ul class="submenu-content">
                        <li><a href="hotel.php">HOTEL</a></li>
                        <li><a href="miawcare.php">CARE</a></li>
                        <li><a href="playground.php">PLAYGROUND</a></li>
                    </ul>
                </li>

                <li><a href="https://api.whatsapp.com/">Contact</a></li>

                <li class="search-box">
                    <form action="#" method="get">
                        <input type="text" name="query" placeholder="Search">
                        <button type="submit">Search</button>
                    </form>
                </li>

                <li class="submenuakun">
                    <img src="images/akun1.png"></a>
                    <ul class="submenudua-content">
                        <li>
                            <?php
                            // Display username if the user is logged in
                            if (isset($_SESSION['user_data'])) {
                                $username = $_SESSION['user_data']['username'];
                                echo '<p>Selamat datang, ' . $username . '!</p>';
                                echo '<li>';
                                // FORM LOGOUT
                                echo '<form class="signup-form" action="controller/logout_controller.php" method="post">';
                                echo '<h2>Logout Your Account</h2>';
                                // ...TOMBOL LOG OUT
                                echo '<button type="submit">Log Out</button>';
                                echo '</form>';
                                echo '</li>';
                            } else {
                                echo '<li>';
                                // FORM SIGN UP
                                echo '<form class="signup-form" action="register.php" method="post">';
                                echo '<h2>Create an Account</h2>';
                                // ...TOMBOL SIGN UP
                                echo '<button type="submit">Sign Up</button>';
                                echo '</form>';
                                echo '</li>';

                                echo '<li>';
                                echo '<form class="signin-form" action="controller/login_controller.php" method="post">';
                                echo '<h2>Sign In</h2>';
                                echo '<label for="signin-username">Username Or Email:</label>';
                                echo '<input type="text" id="signin-username" name="identifier">';
                                echo '<label for="signin-password">Password:</label>';
                                echo '<input type="password" id="signin-password" name="password">';
                                echo '<button type="submit">Sign In</button>';
                                echo '</form>';
                                echo '</li>';
                            }
                            ?>
                        </li>
                    </ul>
                </li>
                <li><a href="cart.php"><img src="images/cart.png"></a></li>

            </ul>
        </div>

        <div class="icon">
            <img src="images/keranjang.png" alt="icon">
            <ul class="meni">
                <li><a href="food.php">FOOD</a></li>
                <li><a href="toys.php">TOYS</a></li>
                <li><a href="cleaning.php">CLEANING</a></li>
                <li><a href="medis.php">MEDICINE</a></li>
            </ul>
        </div>
        <div class="logoone">
            <img src="images/miaw3.png" width="310" height="300" loading="lazy" alt="" class="img">
        </div>

        <!-- beli beli -->
        <div class='gambar'>

            <div class='foto'>
                <img src='images/obat4.png'>
                <h2>Suplement Gizi</h2>
                <p>Rp 50.000.000,00</p> <br>
            </div>

            <div class='foto'>
                <img src='images/obat1.png'>
                <h2>Bapil Cat </h2>
                <p>Rp 15.000,00</p> <br>
            </div>
            <div class='foto'>
                <img src='images/obat2.png'>
                <h2>Pembersih Gigi Kucing</h2>
                <p>Rp 25.000,00</p> <br>
            </div>
            <div class='foto'>
                <img src='images/obat3.png'>
                <h2>Seperangkat Feather Health</h2>
                <p>Rp 75.000,00</p> <br>
            </div>
            <div class='foto'>
                <img src='images/obat5.png'>
                <h2>Obat Kutu dan jamur</h2>
                <p>Rp 85.000,00</p> <br>
            </div>
            <div class='foto'>
                <img src='images/obat6.png'>
                <h2>Vitamin kitten</h2>
                <p>Rp 25.000,00</p> <br>
            </div>
            <div class='foto'>
                <img src='images/obat7.png'>
                <h2>Madu kitten</h2>
                <p>Rp 25.000,00</p> <br>
            </div>

            <div class="background_imagetree">
                <div class="boking">
                    <h1>Buy Now</h1>
                    <a href="cart.php">
                        <div class="button">
                            <p>BUY NOW !!</p>
                        </div>
                    </a>
                </div>
            </div>
            <script>
                document.addEventListener("DOMContentLoaded", function () {
                    const icon = document.querySelector(".icon");
                    const menu = document.querySelector(".meni");

                    // Toggle menu visibility when the icon is clicked
                    icon.addEventListener("click", function () {
                        menu.style.display = menu.style.display === "none" ? "block" : "none";
                    });
                });
            </script>

</body>

</html>