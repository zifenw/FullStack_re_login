<?php
    $mysqli = new mysqli("localhost", "root", "root", "lo_db");
    if($mysqli->connect_errno){
        die("Database connection error: ". $mysqli->connect_error);
    }
    $pass_hash = password_hash($_POST["pass"], PASSWORD_DEFAULT);
    $name = $_POST["name"];

    if(isset($_POST["login"])){
        $sql = "SELECT pass_hash FROM tuser WHERE name = '$name'";
        $res = $mysqli->query($sql)->fetch_assoc();

        if($res){
            if(password_verify($_POST["pass"],$res["pass_hash"])){
                echo "<script>window.location.href='user.php?uname=$name'</script>";
            }else{
                echo "<script>alert('Password error!');history.go(-1);</script>";
            }
        }else{
            echo "<script>alert('Username not exist!');history.go(-1);</script>";
        }
    }