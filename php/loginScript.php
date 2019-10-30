<?php
    include_once 'db_connect.php';
    $name = htmlspecialchars($_POST['name']);
    $passphrase = htmlspecialchars($_POST['password']);

    $sql = "INSERT INTO customer (name, passphrase)
    VALUES
    (:name, :passphrase);";

    $stmt = $pdo->prepare($sql);
    $stmt->execute(array(':name' => $name, ':passphrase' => $passphrase));

?>