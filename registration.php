
<?php
    require_once("includes/header.php");//only include the file once, if there's duplication of file
    require_once("includes/database.php");
?>

<?php

$firstname = ''; $email = ''; $password = ''; $re_password = '';
$errors = array("firstname"=>"Please enter a valid name",
                "email"=>"Please enter a valid email address",
                "password"=>"",
                "re_password"=>"",
                "agree_term"=>"");
$success = '';

// print_r($_POST);
//echo "<br>";

if(isset($_POST['submit'])) {
    //validations
    $firstname = htmlspecialchars($_POST['firstname']);
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);
    $re_password = htmlspecialchars($_POST['re_password']);
    

    if(empty($password)) { // true = empty ,filled = false
        //if there is no data
        echo "Invalid! Enter all * fields.";
        
    } else {
        

        //password validation
        //(1) pwd length must be 8 or more than 8
        $pwd_length = strlen($password);
        if ($pwd_length < 8) {
            echo "Password length must be greather than or equals to 8.";
        } else {
            echo "pwd length is perfect.";   
        }

        //pwd should contain atleast one digit
       
    }
}
else{
   // echo "not set";
}


?>
    
                
    <div class="HeaderWrap InnerHeaderBg"></div> <!--HeaderWrap-->

    <div class="Header RegistrationPage">
                <div class="MainWrapper">
                        <div class="group ClearBoth">
                        <h1>Registration Form</h1>
                            <div class="RightBlock FormBlock">
                                
        <form name="RegistrationForm" id="RegistrationForm" method="get" action="<?php $_php_self ?>">
            <div class="Col1"><input type="text" name="firstname" id="firstname" placeholder="first name"></div>
            <div class="Col1"><input type="email" name="email" id="email" placeholder="email"></div>
            <div class="Col1"><input type="text" name="username" id="username" placeholder="username"></div>
            <div class="Col1"><input type="password" name="password" id="password" placeholder="password"></div>
            <div class="Col1"><input type="password" name="re-password" id="re_password" placeholder="confirm password"></div>
            <div class="Col1"><input type="submit" name="sibmit" value="submit" class="RedBtn"></div>
        </form>
    
                            </div> <!--right-->
                        </div>
                </div>
            </div>


    <?php
    require_once("includes/footer.php");//only include the file once, if there's duplication of file
  
?>