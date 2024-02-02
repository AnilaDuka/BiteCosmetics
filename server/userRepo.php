<?php

include_once 'database-connection.php';

class UserRepository
{
    private $connection;

    public function __construct()
    {
        $dbConnection = new DatabaseConnection();
        $this->connection = $dbConnection->startConnection();
    }

    function insertUser($user){
        $conn = $this->connection;
    
        $id = $user->getId();
        $name = $user->getName();
        $email = $user->getEmail();
        $password = $user->getPassword();
        $role = 'user';
    
        $sql = "INSERT INTO user (user_id, name, email, password, role) VALUES (?, ?, ?, ?, ?)";
    
        $statement = $conn->prepare($sql);
    
        if (!$statement) {
            die('Error during prepare: ' . $conn->error);
        }
    
        $statement->bind_param("sssss", $id, $name, $email, $password, $role);
    
        if ($statement->execute()) {
            echo "<script> alert('User has been inserted successfully!'); </script>";
        } else {
            echo "<script> alert('Error inserting user!'); </script>";
        }
    }
    
    public function updateUserRole($user_id, $role)
    {
        $sql = "UPDATE user SET role=? WHERE user_id=?";

        $statement = $this->connection->prepare($sql);
        $statement->bind_param("ss", $role, $user_id);

        if ($statement->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function getAllUsers()
    {
        $sql = "SELECT * FROM user";

        $result = $this->connection->query($sql);

        if ($result) {
            $users = $result->fetch_all(MYSQLI_ASSOC);
            return $users;
        } else {
            return false;
        }
    }

    public function getUserById($user_id)
    {
        $sql = "SELECT * FROM user WHERE user_id=?";
        
        $statement = $this->connection->prepare($sql);
        $statement->bind_param("i", $user_id);
        $statement->execute();
    
        if ($statement->error) {
            die('Error during query execution: ' . $statement->error);
        }
    
        $user = $statement->get_result()->fetch_assoc();
    
        return $user;
    }

    public function updateUser($user_id, $name, $email, $password)
{
    $sql = "UPDATE user SET name=?, email=?, password=? WHERE user_id=?";

    $statement = $this->connection->prepare($sql);
    $statement->bind_param("sssi", $name, $email, $password, $user_id);

    if ($statement->execute()) {
        return true;
    } else {
        return false;
    }
}

    public function deleteUser($user_id)
    {
        $sql = "DELETE FROM user WHERE user_id=?";
    
        $statement = $this->connection->prepare($sql);
        $statement->bind_param("i", $user_id);
    
        if ($statement->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function login($email, $password)
    {
        $sql = "SELECT * FROM user WHERE email = ?";
        $statement = $this->connection->prepare($sql);
        $statement->bind_param("s", $email);
        $statement->execute();

        $result = $statement->get_result();

        if ($result->num_rows > 0) {
            $user = $result->fetch_assoc();

            if ($password == $user['password']) {
                return $user;
            }
        }

        return false;
    }

    public function getError()
    {
        return $this->error;
    }
}


?>
