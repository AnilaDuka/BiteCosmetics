<?php
include_once 'userRepo.php';

$userId = $_GET['id'];

$userRepository = new UserRepository();

$user = $userRepository->getUserById($userId);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
</head>
<body>
    <h2>Edit User</h2>
    <form action="" method="post">
        <input type="hidden" name="user_id" value="<?= $user['user_id']; ?>">
        <label for="firstname">First Name:</label>
        <input type="text" name="firstname" value="<?= $user['name']; ?>"><br>
        <label for="email">Email:</label>
        <input type="text" name="email" value="<?= $user['email']; ?>"><br>
        <label for="password">Password:</label>
        <input type="password" name="password" value="<?= $user['password']; ?>"><br>
        <input type="submit" name="save" value="Save">
    </form>
</body>
</html>

<?php
if (isset($_POST['save'])) {
    $id = $_POST['user_id'];
    $name = $_POST['firstname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $userRepository->updateUser($id, $name, $email, $password);
    header("location:dashboard.php");
}
?>
