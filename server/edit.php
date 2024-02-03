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
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap');

        *{
            margin: 0;
            padding: 0;
            font-family: 'Poppins', sans-serif;
        }

        .form-edit {
            max-width: 600px;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            color: #333;
        }

        form {
            display: grid;
            gap: 15px;
        }

        label {
            font-weight: bold;
            color: #555;
        }

        input,
        textarea {
            width: 100%;
            padding: 10px;
            box-sizing: border-box;
            border: 1px solid #ddd;
            border-radius: 4px;
            margin-top: 5px;
        }

        textarea {
            resize: none;
            height: 100px;
        }

        input[type="submit"] {
            background-color: black;
            color: white;
            cursor: pointer;
            height: 50px;
            border-radius: 8px;
        }
    </style>
</head>
<body>
    <div class="form-edit">
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
    </div>
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
