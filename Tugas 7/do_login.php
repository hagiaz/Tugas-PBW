<html>
    <head>
        <title>Membuat Otentikasi User</title>
    </head>
    <body>
        <?php
        if (isset($_POST['login'])){
            $uname = $_POST['uname'];
            $pass = $_POST['pass'];

            include('connection.php');

            $query = "SELECT uname FROM user WHERE uname = '$uname' and pass = md5('$pass')";
            $result = mysqli_query($conn,$query);
            $num = mysqli_num_rows($result);

            if($num == 1){
                $user = mysqli_fetch_array($result);
                session_start();
                $_SESSION["nama"] = $user;
                header("Location: index.php");   
            }
            else{
                echo "<script> alert('ID atau Password Salah'); 
                window.location.href = 'login.php';
                </script>";     
            }
        }
        ?>
    </body>
</html>