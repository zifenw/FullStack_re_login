<?php
    // new mysqli("那里的数据库","用户名"，"密码", "库名")
    $mysqli = new mysqli("localhost", "root", "root", "lo_db");
    if($mysqli->connect_errno){
        die("Database connection error: ". $mysqli->connect_error);
    }

    $name = $_POST["name"];
    $mail = $_POST["email"];

    if(empty($name)){
        //header("Location: register.html"); // 页面跳转
        echo "<script>window.alert('Username cannot be empty!!!'); window.location.href = 'register.html';</script>";        
        die("Username cannot be empty!!!");
    }

    $sql1 = "SELECT pass_hash FROM tuser WHERE name = '$name'";
    $res = $mysqli->query($sql1)->fetch_assoc();
    if ($res) {
        echo "<script>window.alert('Username already exists!!!'); window.location.href = 'register.html';</script>";        
        die("Username already exists");
    }

    if(strlen($_POST["pass"])<6){
        echo "<script>window.alert('Password length cannot less than 6!!!'); window.location.href = 'register.html';</script>";        
        die("Password length cannot less than 6!!!");
    }

    if(($_POST["pass"])!== ($_POST["qpass"])){
        echo "<script>window.alert('The password inputs are different!!!'); window.location.href = 'register.html';</script>";        
        die("The password inputs are different!!!");
    }

    if(!filter_var($mail, FILTER_VALIDATE_EMAIL)){
        echo "<script>window.alert('Please type valid email!!!'); window.location.href = 'register.html';</script>";        
        die("Please type valid email!!!");
    }
    $pass_hash = password_hash($_POST["pass"], PASSWORD_DEFAULT);

    if(isset($_POST["reg"])){
        $sql2 = "INSERT INTO tuser (name, email, pass_hash) VALUES ('$name', '$mail', '$pass_hash')";
        $mysqli->query($sql2);

        if($mysqli->affected_rows > 0){
            echo "<script>window.alert('Congratulations, you have successfully registered!'); window.location.href = 'index.html';</script>";        
        }
    }
