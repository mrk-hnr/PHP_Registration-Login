<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Friends List</title>
</head>
<body>

<div class="container">
    <h1>Add Friend</h1>
    <a href="../index.php">Back</a>
</div>

<div class="friend-create__form">
    <form action="code.php" method="POST">
        <div>
            <label>First Name</label>
            <input type="text" name="firstname">
        </div>
        <div>
            <label>Last Name</label>
            <input type="text" name="lastname">
        </div>
        <div>
            <label>Contact</label>
            <input type="text" name="contact">
        </div>
        <div>
            <label>Connection</label>
            <input type="text" name="connection">
        </div>

        <div>
            <button type="submit" name="save_friend">Save</button>
        </div>
        
    </form>

</div>






    
</body>
</html>