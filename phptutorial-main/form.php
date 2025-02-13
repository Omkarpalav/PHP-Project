<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="style.css" />
  </head>

  <body>
    <center>
      <form method="POST" action="<?php echo $_SERVER['PHP_SELF']?>">
        <label for="username">Username</label>
        <input type="text" name="username" id="username" />
        <label for="password">Password</label>
        <input type="password" name="password" id="password" />
        <input type="submit" value="Submit" name="submit" />
      </form>

      <div class="feedback">
        <?php 
            if(isset($_POST['submit'])){
                if($_SERVER['REQUEST_METHOD']==='POST'){
                    $username=htmlspecialchars($_POST['username']);
                    $pass=htmlspecialchars($_POST['password']);
                   if(strcmp($username,"Aadarsh")===0 && strcasecmp($pass,"Aadarsh")===0){
                    header("location:fuck.html");
                    exit;
                   }else{
                    echo "Sahi se daal be choob raha hai";
                   }
                }
            }
            ?>
      </div>
    </center>
  </body>
</html>
