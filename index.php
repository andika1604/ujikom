<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>Form Login Perpustakaan</title>
</head>

<body>
    <div class="container">
        <div class="container-image">
            <img src="img/login.jpg" alt="login" width="100%">
        </div>
        <div class="container-form">
            <h2>Login Account</h2>

            <?php 
            if(isset($_GET['pesan'])){
            if($_GET['pesan']=="gagal"){
                echo "<div>Username dan Password tidak sesuai !</div>";
            } elseif($_GET['pesan']=="info_login"){
                echo "<div>Maaf anda belum Login !</div>";
            } elseif($_GET['pesan']=="info_logout"){
                echo "<div>Anda berhasil logout !</div>";
            } elseif($_GET['pesan']=="info_daftar"){
                echo "<div>Anda berhasil daftar silahkan login !</div>";
            }
            }
            ?>

            <form method="post" action="cek_login2.php">
                <input type="text" name="username" placeholder="Username" required>
                <input type="password" name="password" placeholder="Password" required>
                <button type="submit">Login</button>
                <div class="container-link">
                    <label>Don't have an account yet?</label><br>
                    <a href="daftar.php">Register</a>
                </div>
            </form>
        </div>
    </div>

</body>

</html>