<?php
// --------------------------- Cookie ----------------------------------------//
    /*
        cookie = Infomation about a user stored in a user's web browser
        EXP - Targeted advertisements browsing preference, and 
                other non-sensitive data.
    */

    setcookie("fav_food","pizza",time()+(86400 *2),"/");
    // setcookie(key,value stored to key, expiration date, file path)
?>

<?php
// ------------------------ Session -------------------------------------------//
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
       This is the login page<br>
       <form action="second.php" method="post">
       Username<br>
       <input type="text" name="username" value="username">
       Password<br>
       <input type="text" name="password" value="password">
       <input type="submit" value="submit" name="submit">
       </form>
    </body>
</html>

<?php
    
    
    if(isset($_POST["submit"])){
      
       if(!empty($_POST["username"]) && !empty($_POST["password"])){
            $_SESSION["username"] = $_POST["username"];
            $_SESSION["password"] = $_POST["password"];
             echo $_SESSION["username"]."<br>";
             echo $_SESSION["password"]."<br>";
       }
       else{
           echo "Missing password <br>";
       }
    }
    
    // to destroy session
    // session_destroy();
?>

<?php
// ------------------------ Server -----------------------------------------------//

        // Better way of handing post request
        if($SERVER["REQUEST_METHOD"] = "POST"){
            echo "HELLO";
        }
?>