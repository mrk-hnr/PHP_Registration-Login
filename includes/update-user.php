<?php

include('db.php');
include('validator.php');
include('user-models.php');

    if(isset($_POST['update_user'])) {
        $user_id = $_POST['user_id'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
    
        try {
    
            $query = "UPDATE users SET username = :username, email = :email, pass = :pass WHERE id= :id LIMIT 1";
            $statement = $pdo->prepare($query);

            $options = [
                "cost" => 12
            ];  // The higher the number, the harder to decrypt. However, it takes more computational power to read
        
            $hashed_password = password_hash($password, PASSWORD_BCRYPT, $options);

            $statement->bindParam(":username", $username);
            $statement->bindParam(":email", $email);
            
            $statement->bindParam(":pass", $hashed_password);
            $statement->bindParam(":id", $user_id);

            $query_execute = $statement->execute();
    
            if($query_execute)
            {
                $_SESSION['message'] = "Updated Successfully";

                $validate_user = new ValidateLogin($username, $password, $pdo);$validate_user->validate_data();
                $_SESSION["user"] = $validate_user->get_user_data();
                
                header('Location: ../index.php');
                exit(0);
            }
            else
            {
                $_SESSION['message'] = "Not Updated";
                header('Location: ../index.php');
                exit(0);
            }
    
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }