<?php

include_once 'userRepo.php';

$userRepository = new UserRepository();

if (isset($_POST['changeRoleBtn'])) {
    $userRepository->updateUserRole($_POST['user_id'], $_POST['new_role']);
}

$users = $userRepository->getAllUsers();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <h2>Dashboard</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Role</th>
            <th colspan="3">Actions</th>
        </tr>
        <?php foreach ($users as $user): ?>
            <tr>
                <td><?= $user['user_id']; ?></td>
                <td><?= $user['name']; ?></td>
                <td><?= $user['email']; ?></td>
                <td><?= $user['role']; ?></td>
                <td>
                    <form action="" method="post">
                        <input type="hidden" name="user_id" value="<?= $user['user_id']; ?>">
                        <label for="new_role">Change Role:</label>
                        <select name="new_role">
                            <option value="user">User</option>
                            <option value="admin">Admin</option>
                        </select>
                        <input type="submit" name="changeRoleBtn" value="Change Role">
                    </form>
                    <td><a href="edit.php?id=<?= $user['user_id']; ?>">Edit</a></td>
                    <td><a href="delete.php?id=<?= $user['user_id']; ?>">Delete</a></td>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>

</body>
</html>

