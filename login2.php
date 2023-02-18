<!DOCTYPE HTML5>
<html>
    <?php
  session_start();
 
?>
    <title>Gamiz | login</title>
    <link rel="shortcut icon" href="./favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="indexstyle2.css">
    <style>
        body{
          background-image: url(background.png);
        background-size: 100%;
      } 
      </style>

   
    <body>
        <!-- CSS only -->
        
        
        <div  class="hero">
            
            <div class="form-box">
                <div class="button_box">
                    <div id="btn"></div>
                    <button type="button" class="toggle-btn"onclick ="login()">Login</button>
                    <button type="button" class="toggle-btn"onclick ="register()">Register</button>
                    
                </div>
                <div class="social-icons">
                    
                    
                    <a href="https://www.facebook.com/">
                        <img alt="Qries" src="facebook_icon.png" >
                     </a>
                     <a href="https://www.gmail.com/">
                        <img alt="Qries" src="gmail-logo.png" >
                     </a>
                     <a href="https://www.instagram.com/">
                        <img alt="Qries" src="instagram_icon.png" >
                     </a>
    
                    
    
                </div>
                <form id="login" class="input-group" action="teest2.php" method="post">
                    
                    <input type="text" class="input-field" placeholder="User Id" name="user_id" required>
                    <input type="text" class="input-field" placeholder="Enter Password" name="password" required>
                    <input type="checkbox" class="check-box"><span>Remember password?</span> 
                    <button type="submit" class="submit-btn" name="submit">Login</button>
                </form>
                <form id="register" class="input-group" action="teest.php" method="post" >
                <?php
                    
                                    
                    if ($_SESSION['temp'] == 1) {
                        echo "already exists";
                    }
                            
                ?>
                
                
                
               
                    <input type="text" class="input-field" placeholder="User Id" name="user_id" required>
                    <input type="email" class="input-field" placeholder="Email Id" name="email" required>
                    <input type="text" class="input-field" placeholder="Enter Password" name="password" required>
                    <input type="checkbox" class="check-box"><span>I agree to the terms & conditions</span> 
                    <button type="submit" class="submit-btn" name="submit">Register</button>
                </form>
                
            </div>
            
           
        </div>
        
        <script>
            var x= document.getElementById("login");
            var y= document.getElementById("register");
            var z= document.getElementById("btn");
            
            function register(){
                x.style.left="-400px";
                y.style.left="50px";
                z.style.left="110px";

            }
            function login(){
                x.style.left="50px";
                y.style.left="450px";
                z.style.left="0px";

            }

        </script>

        
    </body>
</html>

<!-- <div align = "center" class="c1">
            <a href="E:\ta5asos\new 1.html" target= "_blank" >
                <img src="5.jpg" alt="not ofund" width=150 height=150>
                
                    
                
            </a>

        </div>
        <div align= "center" class="c2">
            <a href="">Forget your password?</a>
        </div> -->