<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>My Application</title>
        <link rel="stylesheet" href="style.css">
        <script src="script.js"></script>
    </head>
    <body>
        <?php
        include 'dbcon.php'
        ?>
        <div class="login-page">
            <div class="form">
                <!--<form class="register-form">
                    <input type="text" placeholder="name" name="uname"/>
                    <input type="password" placeholder="password" name="upass"/>
                    <input type="text" placeholder="email address"/>
                    <button>create</button>
                    <p class="message">Already registered? <a href="#">Sign In</a></p>
                 <p class="message">Not registered? <a href="#">Create an account</a></p>
                action="main.php"
                </form>-->
                <form class="login-form" action="index.php" method="post" onsubmit="return isvalid()">
                    <input type="text" placeholder="username" name="uname"/>
                    <input type="password" placeholder="password" name="pass"/>
                    <button  name="submit">login</button>
                    <?php
                    if (isset($_POST['submit'])) {
                        $name = $_POST['uname'];
                        $pass = $_POST['pass'];
                       $query = "SELECT * FROM `user_info` where uname='$name' and upassword='$pass'" ;
                       $result = mysqli_query($con, $query);
                       $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                       $count = mysqli_num_rows($result);
                       
                       if ($count == 1){
                           header("location: retrieve.php" );
                       }else{
                           echo '<script>window.location.href="index.php"; alert("Login Failed incorrect username or password") </script>';
                       }
                    }
                        ?>
                </form>
            </div>
        </div>  
        <script>
            function isvalid(){
                var username = document.form.uname.value;
                var password = document.form.pass.value;
                if(username.length== "" && password.length == ""){
                    alert("username or password field is empty");
                    return false;
                }else{
                    if(username.length == ""){
                        alert("username is empty");
                        return false;
                    }
                    if(password.length == ""){
                        alert("password is empty");
                        return false;
                    }
                }
            }
        </script>



    </body>
</html>
