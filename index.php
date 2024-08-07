
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    
</head>

  <body>
  <form name="form" action="login.php" method="POST">
        <h1>Login Form</h1>
        <?php if(isset ($_GET['error'])){
            ?>
            <p class="error"><?php echo $_GET['error'];?></p>
           
        <?php }?>
           
                        <label>Username: </label>
            <input type="text" name="user" placeholder="user"></br></br>
            <label>Password: </label>
            <input type="text" name="password" placeholder="pass"></br></br>
            <input type="submit" id="btn" value="Login" name="submit"/>
 
        </form>
     
    
</body>
</html>