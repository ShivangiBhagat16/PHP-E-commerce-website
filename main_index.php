
<?php
    require_once("includes/registration-header.php");//only include the file once, if there's duplication of file
  
?>

<body>
        <!-- Backend development for building web applications -->
    <?php

        $firstname = ''; $email = ''; $password = ''; $re_password = '';
        $errors = array("firstname"=>"Please enter a valid name",
                        "email"=>"Please enter a valid email address",
                        "password"=>"",
                        "re_password"=>"",
                        "agree_term"=>"");
        $success = '';

        print_r($_POST);
        echo "<br>";
    
        if(isset($_POST['submit'])) {
            //validations
            $firstname = htmlspecialchars($_POST['firstname']);
            $email = htmlspecialchars($_POST['email']);
            $password = htmlspecialchars($_POST['password']);
            $re_password = htmlspecialchars($_POST['re_password']);
            //$agree_term = htmlspecialchars($_POST['agree_term']);

            //$re_password = htmlspecialchars($_POST['re_password']);|| $firstname) || empty($email ||  empty($re_password)

            if(empty($password)) { // true = empty ,filled = false
                //if there is no data
                echo "Invalid! Enter all * fields.";
                
            } else {
                //if there is data

                //name validation
                // if(preg_match("/[a-zA-Z\s]/", $firstname, $firstname_res)) {
                //     print_r($firstname_res);
                //    echo "<br>";
                // } else {
                //    $errors['firstname] = echo "Please enter a valid name.<br>";
                // } 

                //email validation
                // if(preg_match("/[^\s]/", $email, $email_res)) {
                //     print_r($email_res);
                // } else {
                //     echo "White space is not allowed";
                // } 

                //password validation
                //(1) pwd length must be 8 or more than 8
                $pwd_length = strlen($password);
                if ($pwd_length < 8) {
                    echo "Password length must be greather than or equals to 8.";
                } else {
                    echo "pwd length is perfect.";   
                }

                //pwd should contain atleast one digit
                // if(preg_match("/\d/", $password, $password_digit)) {
                //     print_r($password_digit);
                // } else {
                //     echo "Please enter atleast one digit.<br>";
                // } 

                //pwd shold not contain white space
                // if(preg_match("/[\s]/", $password, $password)) {//pwd contains space
                //     echo "Please remove white space.<br>";
                // } else {
                //     echo "good";
                // } 
            }
        }
        else{
            echo "not set";
        }
    
    
    ?>

    <div class="TopBg">
        <div class="TopMainWrapper">
            <div class="group ClearBoth">
                <div class="TopMainLeft">
                    <div class="Logo"><a href="#">Logo</a></div>
                    
                </div>
                <div class="TopMainRight">
                        <ul id="navigation">
                                <li><a href="#" class="on">Home</a></li>         
                                <li><a href="#">About</a></li> 
                                <li><a href="#">cars</a></li> 
                                <li><a href="#">service</a></li> 
                                <li><a href="#">team</a></li> 
                                <li><a href="#">blog</a></li> 
                                <li><a href="#">contact</a></li> 
                                <li><a href="#">pages <i class="fa fa-angle-down"></i></a>
                                    <ul>
                                        <li><a href="#">blog single</a></li> 
                                        <li><a href="#">elements</a></li> 
                                    </ul>
                                </li> 
                          </ul>                                 
                    
                </div>
                </div>
            </div>
        </div><!--TopBg-->

        <div class="TopBg StickyMenu">
                <div class="TopMainWrapper">
                    <div class="group ClearBoth">
                        <div class="TopMainLeft">
                            <div class="Logo"><a href="#">Logo</a></div>
                        </div>
                        <div class="TopMainRight">
                                <ul id="navigation">
                                        <li><a href="#" class="on">Home</a></li>         
                                        <li><a href="#">About</a></li> 
                                        <li><a href="#">cars</a></li> 
                                        <li><a href="#">service</a></li> 
                                        <li><a href="#">team</a></li> 
                                        <li><a href="#">blog</a></li> 
                                        <li><a href="#">contact</a></li> 
                                        <li><a href="#">pages <i class="fa fa-angle-down"></i></a>
                                            <ul>
                                                <li><a href="#">blog single</a></li> 
                                                <li><a href="#">elements</a></li> 
                                            </ul>
                                        </li> 
                                  </ul>                                 
                            
                        </div>
                        </div>
                    </div>
                </div> <!--TopBg-->
    

    <div class="HeaderWrap WindowHeight">
        <div class="Container">
            
            <div class="Header">
                <div class="MainWrapper">
                        <div class="group ClearBoth">
                            <div class="LeftBlock">
                                <h5>The Royal Essence Of Journey </h5>
                                <h2>Relaxed Journey Ever </h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam pharetra, nisl et sodales aliquam, risus libero cursus felis, vestibulum egestas nibh diam eu eros.</p>
                                <div class="RedBtn"><a href="#">rent car now</a></div>
                            </div> <!--left-->
            
                            <div class="RightBlock FormBlock">
                                <h5>Registration Form</h5>
                                <form method="POST" action="index.php">
                                    <div class="group ClearBoth">
                                        <div><?php echo $success ?></div>
                                        <div class="Col1"><input type="text" name="firstname" id="firstname" placeholder="First Name*" value="<?php echo $firstname ?>"></div>
                                        <div><?php echo $errors['firstname'] ?></div>
                                        <div class="Col1"><input type="email" name="email" id="email" placeholder="Email Address*" value="<?php echo $email ?>"></div>
                                        <div><?php echo $errors['email'] ?></div>
                                        <div class="Col1"><input type="password" name="password" id="password" placeholder="Password*" value="<?php echo $password ?>"></div>
                                        <div><?php echo $errors['password'] ?></div>
                                        <div class="Col1"><input type="password" name="re_password" id="re_password" placeholder="Confirm Password*" value="<?php echo $re_password ?>"></div>
                                        <div><?php echo $errors['re_password'] ?></div>
                                        <div class="Col1"><input type="checkbox" name="agree_term" id="agree_term" value="<?php if(isset($_POST['agree_term'])) echo "checked"; ?>">Agree terms & conditions</div>
                                        <div><?php echo $errors['agree_term'] ?></div>
                                        <div class="Col1"><input type="submit" name="submit" id="submit" value="submit" class="RedBtn"></div>
                                    </div>

                                </form>
                            </div> <!--right-->
                        </div>
                </div>
            </div>

        </div>
    </div> <!--HeaderWrap-->

    <div class="ServicesWrap">
        <div class="Container">

            <h1>What services we offer to our clients</h1>
            <p class="MiddleText">who are in extremely love with eco friendly system</p>

            <div class="row">
                <div class="col-sm-4">
                    <div class="Col">
                        <h5><i class="fa fa-user"></i> <span>Expert Technicians</span></h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam pharetra, nisl et sodales aliquam, risus libero cursus felis, vestibulum egestas nibh diam eu eros. 
                            Phasellus imperdiet tincidunt porta.</p>
                    </div>
                </div> <!--1-->

                <div class="col-sm-4">
                    <div class="Col">
                            <h5><i class="fa fa-address-card-o"></i> <span>Professional Service</span></h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam pharetra, nisl et sodales aliquam, risus libero cursus felis, vestibulum egestas nibh diam eu eros. 
                            Phasellus imperdiet tincidunt porta.</p>
                    </div>
                </div> <!--2-->

                <div class="col-sm-4">
                    <div class="Col">
                            <h5><i class="fa fa-phone-square"></i> <span>Great Support</span></h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam pharetra, nisl et sodales aliquam, risus libero cursus felis, vestibulum egestas nibh diam eu eros. 
                            Phasellus imperdiet tincidunt porta.</p>
                    </div>
                </div> <!--3-->
            </div>

            <div class="row">
                <div class="col-sm-4">
                    <div class="Col">
                        <h5><i class="fa fa-rocket"></i> <span>Technical Skills</span></h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam pharetra, nisl et sodales aliquam, risus libero cursus felis, vestibulum egestas nibh diam eu eros. 
                            Phasellus imperdiet tincidunt porta.</p>
                    </div>
                </div> <!--1-->

                <div class="col-sm-4">
                    <div class="Col">
                            <h5><i class="fa fa-diamond"></i> <span>Highly Recommended</span></h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam pharetra, nisl et sodales aliquam, risus libero cursus felis, vestibulum egestas nibh diam eu eros. 
                            Phasellus imperdiet tincidunt porta.</p>
                    </div>
                </div> <!--2-->

                <div class="col-sm-4">
                    <div class="Col">
                            <h5><i class="fa fa-comment-o"></i> <span>Positive Reviews</span></h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam pharetra, nisl et sodales aliquam, risus libero cursus felis, vestibulum egestas nibh diam eu eros. 
                            Phasellus imperdiet tincidunt porta.</p>
                    </div>
                </div> <!--3-->
            </div>

        </div>
    </div> <!--ServicesWrap-->

    <div class="FooterWrap">
        <div class="Container">

            <div class="row">
                <div class="col-sm-2">
                    <h5>Quick Links</h5>
                    <ul class="NoBullet">
                        <li><a href="#">Jobs</a></li>
                        <li><a href="#">Brans Assets</a></li>
                        <li><a href="#">Investor Relations</a></li>
                        <li><a href="#">Terms of Service</a></li>
                    </ul>
                </div> <!--1-->

                <div class="col-sm-2">
                    <h5>Features</h5>
                    <ul class="NoBullet">
                        <li><a href="#">Jobs</a></li>
                        <li><a href="#">Brans Assets</a></li>
                        <li><a href="#">Investor Relations</a></li>
                        <li><a href="#">Terms of Service</a></li>
                    </ul>
                </div> <!--2-->

                <div class="col-sm-2">
                    <h5>Resources</h5>
                    <ul class="NoBullet">
                        <li><a href="#">Jobs</a></li>
                        <li><a href="#">Brans Assets</a></li>
                        <li><a href="#">Investor Relations</a></li>
                        <li><a href="#">Terms of Service</a></li>
                    </ul>
                </div> <!--3-->

                <div class="col-sm-2">
                    <h5>Follow Us</h5>
                    <p>Let be Social</p>
                    <div class="SocialIcons">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-globe"></i></a>
                        <a href="#"><i class="fa fa-behance"></i></a>
                    </div>
                </div> <!--4-->

                <div class="col-sm-4">
                    <h5>Newsletter</h5>
                    <p>Stay update with our latest</p>
                    <div class="Newsletter">
                        <input type="email" placeholder="Enter Email">
                        <button><i class="fa fa-long-arrow-right"></i></button>
                    </div>
                </div> <!--5-->
            </div>

        </div>
    </div> <!--FooterWrap-->

    <?php
    require_once("includes/registration-footer.php");//only include the file once, if there's duplication of file
  
?>    