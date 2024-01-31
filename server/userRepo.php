<?php

include_once 'server/database-connection.php';

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
    
        $sql = "INSERT INTO user (user_id, name, email, password) VALUES (?, ?, ?, ?)";
    
        $statement = $conn->prepare($sql);
    
        if (!$statement) {
            die('Error during prepare: ' . $conn->error);
        }
    
        $statement->bind_param("ssss", $id, $name, $email, $password);
    
        if ($statement->execute()) {
            echo "<script> alert('User has been inserted successfully!'); </script>";
        } else {
            echo "<script> alert('Error inserting user!'); </script>";
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
        $sql = "SELECT * FROM user WHERE id=?";

        $statement = $this->connection->prepare($sql);
        $statement->bind_param("s", $user_id);
        $statement->execute();
        $user = $statement->get_result()->fetch_assoc();

        return $user;
    }

    public function updateUser($user_id, $name, $email, $password)
    {
        $sql = "UPDATE user SET name=?, email=?, password=? WHERE id=?";

        $statement = $this->connection->prepare($sql);
        $statement->bind_param("ssssss", $name, $email, $password, $user_id);

        if ($statement->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function deleteUser($user_id)
    {
        $sql = "DELETE FROM user WHERE id=?";

        $statement = $this->connection->prepare($sql);
        $statement->bind_param("s", $user_id);

        if ($statement->execute()) {
            return true;
        } else {
            return false;
        }
    }
}

// Example usage:

// $userRepo = new UserRepository();

// $user = new User(); // Assuming you have a User class with appropriate getters and setters
// $user->setId('1111');
// $user->setName('SSS');
// $user->setSurname('SSS');
// $user->setEmail('SSS');
// $user->setUsername('SSS');
// $user->setPassword('SSS');

// $userRepo->updateUser($user->getId(), $user->getName(), $user->getSurname(), $user->getEmail(), $user->getUsername(), $user->getPassword());

?>
