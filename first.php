<?php
// ----------------  Printing Strings ----------------------------------------------------------------------//
            echo "I love Pizza"; // Printing a STRING
            echo "I really love Pizza <br>"; // Adding Line Break
            
            echo "<br>";
            echo "<br>";
            echo "<br>";

// -------------------- Variables ----------------------------------------------------------------//
            $name = "John"; // Assign Variables
            $food = "pizza";
            echo "hello ".$name."<br>"; // Printing String with Variable
            echo "He like ".$food."<br>";
            
            $quantity = 20;
            $price = 5.20;
            $total = $quantity * $price;
            echo "Quantity x Price is $".$quantity * $price."<br>";
            echo "total price is $".$total;
            
            echo "<br>";
            echo "<br>";
            echo "<br>";
// ------------------- Arithmetic Operators --------------------------------------------------------------------------//
            // the + - * / % stuff

//-------------------- $_GET and $_POST ------------------------------------------------------------------------------------//
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="first.php" method="post">
            <label>Username:</label>
            <input type="username" name="username">
            <label>Password:</label>
            <input type="password" name="password">
            <input type="submit" value="log in">
        </form>
    </body>
</html>

<?php
    //echo $_GET["username"]."<br>";
    //echo $_GET["password"]."<br>";
    echo $_POST["username"]."<br>";
    echo $_POST["password"]."<br>";
    
    /*
    --------  GET and POST Differences -------------
        
        GET -  Data is appended to the URL
               NOT SECURE
               got character limit
               Bookmark is possible with values
               GET requests can be cached
               Better for a search page
        
        POST - Data is packaged inside the body of the HTTP Request
               MORE SECURE
               no data limit
               Cannot Bookmark
               GET request are not cached
               Better for submitting credentials
    */

 // -----------------------  If Else  ------------------------------------------------------------//    
?>

<?php
    $number1 = 5;
    $number2 = 10;
    
    if($number1 <= $number2){
        echo "number 1 is smaller than number 2";
    }
    else if($number1 >= $number2){
        echo "number 2 is smaller than number 1";
    }
    else{
        echo"i dont know anymore";
    }
?>

<?php
// ------------------------  Logical Operators  ----------------------------------------//    
        /*
                the funny && || ! Stuff
                && AND
                || OR
                ! Not Equal
         */

?>

<?php
// ------------------------- For Loop -------------------------------------------------------//
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="first.php" method="post">
            <label>Enter a counter</label><br>
            <input type="text" name="counter"><br>
            <input type="submit" value="submit"><br>
        </form>
    </body>
</html>
<?php
    $LocalCounter = $_POST["counter"];
    
    for($i=0;$i <= $LocalCounter; $i++){
        echo $i . "<br>";
    }
?>

<?php
//------------------------- While Loops ----------------------------------------------------------------//
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="first.php" method="post">
            <input type="submit" name="stop "value="stop"><br>
        </form>
    </body>
</html>
<?php
/*
    $seconds = 0;
    $running = true;
    while($running){
        if(isset($_POST["stop"])){
            $running = false;
        }
       // wait 1 second
        else{
        $seconds++;
        echo $seconds."<br>";
        }
        
    }
 */
?>

<?php
//----------------------- Arrays ---------------------------------------------------------//
     $foods = array("apple","orange","banana","coconut");
     
     for($i=0;$i <=4;$i++){
         echo $foods[$i]."<br>";
     }
     
     // Alternativly can do this
     foreach($foods as $food){
         echo $food."<br>";
     }
     
     // Appending Arrays
     array_push($foods,"pineapple","kiwi");
     
     // Remove last element of array
     array_pop($foods);
     
     // Remove First Element of Array
     array_shift($foods);
     
     // Reversing Array
     $ReversedArray = array_reverse($foods);
     
     // Count element in array
     echo count($foods);
?>

<?php
//---------------------- Associative Arrays ---------------------------------------------//
        $AssociativeArrs = array("USA" => "Worst Country Award",
                                "British" => "Worst People Award",
                                "China" => "Worst Gov Award",
                                "Malaysia" => "Most Brainlet Award");
        foreach($AssociativeArrs as $AssociativeArr){
            echo  $AssociativeArrs."-". $AssociativeArr."<br>";
        }
?>

<?php
// --------------------- isset() and empty() ------------------------------------------------------//
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="first.php" method="post">
            <label>Username</label><br>
            <input type="username" name="username"><br>
            <label>Password</label><br>
            <input type="password" name="password"><br>
            <input type="submit" name="login" value="login"><br>
        </form>
    </body>
</html>

<?php
    // isset() - Return TRUE if a variable is decleared and not NULL
    // empty() - Return TRUE if a variable is not decleared, NULL 
    
    /*
    foreach($_POST as $key => $value){
        echo $key."=".$value."<br>";
    }
    */

    if(isset($_POST["login"])){
        echo "you tried to login<br>";
        $username = $_POST["username"];
        $password = $_POST["password"];
        
        if(empty($username)){
            echo "username is emtpy<br>";
        }
        else{
            echo "hello".$username."<br>";
        }
    }
    
    
?>

<?php
// ----------------------- Radio Buttons -------------------------------------------------//
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="first.php" method="post">
            <input type="radio" name="card" value="visa">
            Visa<br>
            <input type="radio" name="card" value="mastercard">
            Mastercard<br>
            <input type="radio" name="card" value="paypal">
            Paypal<br>
            <input type="submit" value="submit" name="submit">
        </form>
    </body>
</html>

<?php
if(isset($_POST["submit"])){
  if(isset($_POST["card"])){
    $credit_card = $_POST["card"];
    echo $credit_card."<br>";
  }
  else{
      echo "please select a valid card <br>"; 
  }
}
?>

<?php
// ---------------------------- Check box ----------------------------------------------//

        // Same as radio but just change type="radio" to type="checkbox"
?>

<?php
//------------------------------ Functions --------------------------------------------//
    function print_something(){
        echo "hello <br>";
    }
    $age = 10;
    function age($age){
        echo $age."<br>";
    }
    
    print_something();
    age($age);
?>

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
       <a href="second.php">this goes to another page</a>
    </body>
</html>

<?php
    $_SESSION["username"] ="Brocode";
    $_SESSION["password"] ="123";
    
?>