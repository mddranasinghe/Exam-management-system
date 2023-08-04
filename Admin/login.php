<?php
    if(isset($_POST['submit'])){
        // create connection
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "exammanagementsystem";

        $connection = mysqli_connect($servername, $username, $password, $dbname);

        // check connection
        if (!$connection) {
            die("Connection failed: " . mysqli_connect_error());
        }

        // start session
        session_start();

        $regNum = $_POST['regNum'];
        $password = $_POST['password'];
        $query = "SELECT * FROM login WHERE RegNo='$regNum' AND password='$password'";
        $result = mysqli_query($connection, $query);

        if(mysqli_num_rows($result) == 1){
            $_SESSION['regNum'] = $regNum;
            header("Location: dashboard.php");
            exit();
        }
        else{
            $error = "Invalid reg_num or password";
        }
    }
?>

