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
                <form class="login-form" action="index.php" method="post">
                    <input type="text" placeholder="username" name="uname"/>
                    <input type="password" placeholder="password" name="pass"/>
                    <button  name="submit">login</button>
                    <?php
                    if (isset($_POST['submit'])) {
                        $name = 'Priya123';
                        $pass = "12345";
                        if ($name != null && $pass != null) {
                            ?>
                            <script>
                               
                                if (!alert('Login successfully.')) {
                                    window.location = "insert.php";
                                }

                            </script>
                            <?php
                        } else {
                            ?>
                            <script>
                                
                                if (!alert('Login unsucessful!')) {
                                    window.location = "index.php";
                                }

                            </script>
                            <?php
                        }
                    }
                        ?>
                </form>
            </div>
        </div>




    </body>
</html>
