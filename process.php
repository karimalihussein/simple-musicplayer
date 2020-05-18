<?php
require_once 'config.php';

if (isset($_POST)) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $repassword = $_POST['repassword'];

    $sql = "INSERT INTO users (name, email, password, repassword) VALUES(?,?,?,?)";
    $stmtinsert = $db->prepare($sql);
    $result = $stmtinsert->execute([$name, $email, $password, $repassword]);
    if ($result) {
        header("Location: home.php");

    } else {
        echo 'There were erros while saving the data.';
    }
} else {
    echo 'No data';
}
