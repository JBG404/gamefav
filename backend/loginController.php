<?php
session_start();

require_once 'conn.php';

$action = $_POST['action'];

if ($action == 'create') { 
    $user = $_POST['username'];
    $pass = $_POST['password'];
    $pass = password_hash($pass, PASSWORD_DEFAULT);

    
    $query = "INSERT INTO users (user, password) VALUES (:user, :pass)";

    $statement = $conn->prepare($query);

    $statement->execute([
        ':user' => $user,
        ':pass' => $pass
    ]);
    header("Location: $base_url/createAccount.php?msg=Account+made");
}
if ($action == 'login') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $query = "SELECT * FROM users WHERE username = :username";
    
    $statement = $conn->prepare($query);
    
    $statement->execute([
        ":username" => $username
    ]);
    
    $user = $statement->fetch(PDO::FETCH_ASSOC);
    
    if ($statement->rowCount() < 1) {
        header("Location: $base_url/login.php?error=Account+not+found");
        exit;
    }
    
    if (password_verify($password, $user['password'])) {
        session_start();
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['username'] = $user['username'];
        $_SESSION['admin'] = $user['admin'];
        header("Location: $base_url/index.php?msg=Login+success");
    } else {
        header("Location: $base_url/login.php?error=Wrong+username+or+password");
    }
 }


?>