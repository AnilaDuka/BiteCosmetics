<?php

include_once 'server/userRepo.php';
include_once 'server/user.php';

if(isset($_POST['registerBtn'])){
    if(empty($_POST['name']) ||  empty($_POST['email']) || empty($_POST['password'])){
        echo "Fill all fields!";
    }else{
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $id = $name . rand(100, 999);

        $user = new User($id, $name, $email, $password);

        $userRepository = new UserRepository();

        $userRepository->insertUser($user);
    }
}

?>
