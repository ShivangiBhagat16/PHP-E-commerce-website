
<?php
    require_once("includes/registration-header.php");//only include the file once, if there's duplication of file
  
?>

<body>
        <!-- Backend development for building web applications -->
    <?php

        $firstname = ''; $email = ''; $password = ''; $re_password = '';
        $errors = array("email"=>"","password"=>"");

        // email validation
        if(isset($_POST['submit'])) {
            //validations
            
            $email = htmlspecialchars($_POST['email']);
            if(empty($email)){
                // if there is no data
                $errors['email']= "Invalid! Please enter a email id!";
            
            }else{
                // if there is data
                //validation continued
                if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                    $errors['email']= "Invalid! Please enter a valid email id";
                }
            }

            //Password Validation
            $password=htmlspecialchars($_POST['password']);
            if(empty($password)){
                    // if there is no data
                    $errors['password']= "Invalid! Please enter a password!";
                
            }else{
                    // if there is data
                    //validation continued
                    if (strlen($password) < 8){
                        $errors['password']= "length of password is too short.";
                    }else if(!preg_match('/\d/', $password)){
                        $errors['password']= "password must contain atleast one digit.";
                    }else if (!preg_match('/[^A-Za-z0-9]/', $password)){
                        $errors['password']= "password must contain atleast one special character.";
                    }


            }


            if($email == "admin@mcit.ca" && $password == "admin123$") {
                echo "You are logged in.";
            } else {
                echo "Incorrect Credentials ! Try Again.";
            }
            
        }
       
    
    
    ?>

   
    <div class="HeaderWrap WindowHeight">
        <div class="Container">
            
            <div class="Header">
                <div class="MainWrapper">
                        <div class="group ClearBoth">
                            
            
                            <div class="RightBlock FormBlock">
                                <h5>Registration Form</h5>
                                <form method="POST" action="lab1-exam.php">
                                    <div class="group ClearBoth">
                                        
                                        <div class="Col1"><input type="email" name="email" id="email" placeholder="Email Address*" value="<?php echo $email ?>"></div>
                                        <div><?php echo $errors['email'] ?></div>
                                        <div class="Col1"><input type="password" name="password" id="password" placeholder="Password*" value="<?php echo $password ?>"></div>
                                        <div><?php echo $errors['password'] ?></div>
                                       
                                        <div class="Col1"><input type="submit" name="submit" id="submit" value="submit" class="RedBtn"></div>
                                    </div>

                                </form>
                            </div> <!--right-->
                        </div>
                </div>
            </div>

        </div>
    </div> <!--HeaderWrap-->

    

  

    <?php
    require_once("includes/registration-footer.php");//only include the file once, if there's duplication of file
  
?>    