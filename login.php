<?php
include_once "config/core.php";

$page_title = "Login";
//include login cheker
$require_login =false;
//include_once "login_checker.php";
//default  to false
$access_denied=false;

//<!-- Post Content -->


//form
include_once "layout_header.php";
echo"<div class='col-md-8 col-sm-12'>";


    echo"<form action='" .htmlspecialchars($_SERVER["PHP_SELF"]) ."' method='post'>";
            echo"<div class='form-group'>";
                echo"<label for='name'><div class='font-clr'>Email:</div></label>";
                echo"<input type='text' class='form-control'  placeholder='Enter email' name='email' required autofocus>";
            echo"</div>";
            echo"<div class='form-group'>";
                echo"<label for='password'><div class='font-clr'>Password:</div></label>";
                echo"<input type='password' class='form-control'  placeholder='Enter Password' name='password' required>";
            echo"</div>";
            echo"<br>";
            echo"<button type='submit' class='btn btn-default' value='Log In'>Log In</button>";
            echo"</form>";
            echo"<br>";
            echo"<h4 class='font-clr'>Don't have an account yet. <a href='SignUp.php'><h4 class='font-clr'>Sign Up!</h4></a></h4>";
        echo"</div>";
    echo"</div>";
echo"</div>";
 ///form end

 ///footer
 include_once "layout_footer.php";  
?>
        