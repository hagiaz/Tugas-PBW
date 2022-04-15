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
                echo "<script> alert('Proses registrasi berhasil.'); 
                window.location.href = 'login.php';
                </script>";   
            }else{
                echo "<script> alert('Proses registrasi gagal. Silakan registasi kembali.'); 
                window.location.href = 'register.php';
                </script>";   
            }
        }
        ?>

    </body>
</html>