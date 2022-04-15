<html>
    <head>
        <title>Membuat Otentikasi User</title>
    </head>
    <body>
        <h2>Status Registrasi</h2>

        <?php
        if (isset($_POST['regis'])){
            $uname = $_POST['uname'];
            $nama = $_POST['nama'];
            $pass = $_POST['pass'];

            include("connection.php");
            $sql = "INSERT INTO user VALUES ('$uname', '$nama', md5('$pass'))";
            mysqli_query($conn, $sql);

            $num = mysqli_affected_rows($conn);
            if($num>0){
                ?>
                <br> Selamat Anda sudah terdaftar di website kami. </br>
                <a href="login.php">Login</a>
                <?php
            }else{
                ?>
                <br>proses registrasi gagal. Silahkan ulangi</br>
                <a href="register.php">kembali ke form register</a>
                <?php
            }
        }
        ?>

    </body>
</html>