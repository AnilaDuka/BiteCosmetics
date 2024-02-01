<?php

include_once 'userRepo.php';
$id = $_GET['id'];
$userRepository = new UserRepository();

$userRepository->deleteUser($id);

header("location:dashboard.php");
?>