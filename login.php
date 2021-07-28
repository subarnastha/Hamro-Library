
<!DOCTYPE html>
<html>
    <head>
        <title>Login or Signup</title>
        <link rel="stylesheet" href="login.css">
    </head>
    <body>
        <div class="hero">
            <div class="form-box">
                <div class="button-box">
                    <div id="btn"></div>
                        <button type="button" class="toogle-btn" onclick="login()">Log In</button>
                        <button type="button" class="toogle-btn" onclick="signup()">Sign Up</button>
                </div>
                <div class="social-icons">
                    <img src="images/fb.png">
                    <img src="images/tw.png">
                    <img src="images/gp.png">
                </div> 
                <form id="login" class="input-group" action="validation.php" method="post">
                    <input type="text" class="input-field" placeholder="Name" required name="name">
                    <input type="password" class="input-field" placeholder="Enter Password" required name="password">
                    <input type="checkbox" class="check-box"><span>Remember Password</span>
                    <div class="send-button">
                    <input type="submit" name="login"; value="Log In">
                </form>
                    </div>
                <form id="signup" class="input-group" action="connect.php" method="post">
                    <input type="text" class="input-field" placeholder="Name" required name="name">
                    <input type="Email" class="input-field" placeholder="Email" required name="email">
                    <input type="password" class="input-field" placeholder="Enter Password" required name="password">
                    <input type="text" Name="PhoneNumber" class="input-field" placeholder="Phone Number" required>
                    <input type="text" Name="RollNo" class="input-field" placeholder="Roll Number" required="">
                <br>
                    <input type="checkbox" class="check-box"><span><a href="terms.html">I agree to the terms and conditions</a></span>
                    <div class="send-button">
                    <input type="submit" name="signup"; value="Sign Up">
                    </div>
                </form>
                <div>
            <img src="images/logo1.jpg" class="logo">
        </div>
         <div class="footer">
        <p> &copy; 2021 Hamro Library Member Login. All Rights Reserved </a></p>
        
    </div>
            </div>

        </div>
        <script>
            var x = document.getElementById("login");
            var y = document.getElementById("signup");
            var z = document.getElementById("btn");
            function signup(){
                x.style.left = "-400px";
                y.style.left = "50px";
                z.style.left = "110px";
            }
            function login(){
                x.style.left = "50px";
                y.style.left = "450px";
                z.style.left = "0";
            }
        </script>
        

    </body>
</html>