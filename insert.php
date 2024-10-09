<html>
    <head>
        <title>title</title>
        <link rel="stylesheet" href="main.css">
    </head>
    <body>
        <?php
        include 'dbcon.php';
        ?>
        <div class="container">  
            <form id="contact" action="" method="post">
                <h3>Contact Form</h3>
                <h4>Contact us for Tours and travels </h4>
                <fieldset>
                    <input placeholder="Your name" type="text" name="name" tabindex="1" required autofocus>
                </fieldset>
                <fieldset>
                    <input placeholder="Your Email Address" name="email" type="email" tabindex="2" required>
                </fieldset>
                <fieldset>
                    <input placeholder="Your Phone Number" name="contact" type="tel" tabindex="3" required>
                </fieldset>

                <label for="cars">Choose a place:</label>
                <label for="cars">from:</label>
                <select name="from" id="from">
                    <option value="Blank"></option>
                    <option value="MUMBAI">MUMBAI</option>
                    <option value="delhi">delhi</option>
                    <option value="U.P">U.P</option>
                    <option value="Bihar">Bihar</option>
                </select>
                <label for="cars">To:</label>

                <select name="to" id="to">
                    <option value="Blank"></option>
                    <option value="MUMBAI">MUMBAI</option>
                    <option value="delhi">delhi</option>
                    <option value="U.P">U.P</option>
                    <option value="Bihar">Bihar</option>
                    <fieldset>
                        <textarea placeholder="Type your message here...." name="message" tabindex="5" required></textarea>
                    </fieldset>
                    <fieldset>
                        <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
                    </fieldset>


                    <div>
                        <button style="background: pink; border: 1px solid black; color: red; padding: 5px;border-radius: 5px;"
                                name="show" id=""><a href="retrieve.php">show data</a></button>
                    </div>

                    <p class="copyright">Designed by <a  target="_blank" title="Colorlib">priya</a></p>
            </form>
            <?php
            if (isset($_POST['submit'])) {
                $name = $_POST['name'];
                $email = $_POST['email'];
                $contact = $_POST['contact'];
                $from = $_POST['from'];
                $to = $_POST['to'];
                $message = $_POST['message'];

                $query = " INSERT INTO `travel`(`tid`, `tname`, `temail`, `tcontact`, `tjfrom`, `tjto`, `tmessage`) VALUES (null,'$name','$email','$contact','$from','$to','$message')";
                $result = mysqli_query($con, $query);
                if ($result > 0) {
                    ?>
                    <script>
                        if (!alert('Data inserted successfully')) {
                            window.location = "retrieve.php";
                        }
                    </script>
                    <?php
                } else {
                    //echo'<script>alert("Data failed to update")</script>';
                    //echo 'Failed'; 
                    ?>
                    <script>
                        if (!alert('Data failed to insert')) {
                            window.location = "insert.php";
                        }
                    </script>
                    <?php
                }
            }
            ?>


        </div>



    </body>
</html>

