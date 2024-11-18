<?php

include('includes/db.php');
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Edit Profile</title>
</head>
<body>
    
    <div class="container">
      <h3>Edit Profile</h3>
      <a href="./index.php">BACK</a>
      
      <?php
      if(isset($_GET['id'])) {

        $user_id = $_GET['id'];       

        $query = "SELECT * FROM users WHERE id=:id LIMIT 1";
        $statement = $pdo->prepare($query);
        $data = [':id' => $user_id];
        $statement->execute($data);

        $result = $statement->fetch(PDO::FETCH_OBJ); //PDO::FETCH_ASSOC

        } ?>

      <form action="includes/update-user.php" method="POST">
        <input type="text" name="user_id" value="<?php echo $result->id?>" />

                            <div>
                                <label>Username</label>
                                <input type="text" name="username" value="<?= $result->username; ?>" class="form-control" />
                            </div>

                            <div>
                                <label>Email</label>
                                <input type="text" name="email" value="<?= $result->email; ?>" class="form-control" />
                            </div>
                            
                            <div>
                                <label>Password</label>
                                <input type="text" name="password" value="<?= $result->pass; ?>" class="form-control" />
                            </div>

                            <div>
                                <label>Retype Password</label>
                                <input type="text" name="course" value="<?= $result->pass; ?>" class="form-control" />
                            </div>

                            <div>
                                <button type="submit" name="update_student_btn" class="btn btn-primary">Update Student</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
  </body>
</html>