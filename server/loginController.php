<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include('database-connection.php');
    include('userRepo.php');

    $email = $_POST['email'];
    $password = $_POST['password'];

    $userRepository = new UserRepository();
    $user = $userRepository->login($email, $password);

    if ($user) {
        $_SESSION['user_id'] = $user['user_id'];
        $_SESSION['name'] = $user['name'];
        $_SESSION['logged_in'] = true;
        header("Location: ../HomePage.php");
        exit();
    } else {
        echo "Incorrect username or password!";
    }
}
?>
