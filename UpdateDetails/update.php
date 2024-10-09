<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<?php
include '../dbcon.php';
$id = $_GET['id'];
echo $id;

$query = "Select * from travel where tid=$id";
$result = mysqli_query($con, $query) or die(mysqli_error($con));
while ($res = mysqli_fetch_array($result)) {
    $name = $res['tname'];
    $email = $res['temail'];
    $contact = $res['tcontact'];
    $from = $res['tjfrom'];
    $to = $res['tjto'];
    $message = $res['tmessage'];
}
?>
<html lang="en" >
    <head>
        <meta charset="UTF-8">
        <title>Update details</title>
        <link rel="stylesheet" href="./style.css">

    </head>
    <body>

        <!-- partial:index.partial.html -->
        <div class="container">  
            <form id="contact" action="" method="post">
                <h3>Update Details Here</h3>
                <h4>Wait details will be fetched here!</h4>
                <fieldset>
                    <input type="text" name="uid" value="<?php echo $id; ?>">
                    <input placeholder="Your name" value="<?php echo $name; ?>" type="text" name="name" tabindex="1" required autofocus>
                </fieldset>
                <fieldset>
                    <input placeholder="Your Email Address" value="<?php echo $email; ?>" name="email" type="email" tabindex="2" required>
                </fieldset>
                <fieldset>
                    <input placeholder="Your Phone Number" value="<?php echo $contact; ?>" name="contact" type="tel" tabindex="3" required>
                </fieldset>

                <label for="cars">Choose a place:</label>
                <label for="cars">from:</label>
                <select name="from" id="from">
                    <option value=""><?php echo $from; ?></option>
                    <option value="MUMBAI">MUMBAI</option>
                    <option value="delhi">delhi</option>
                    <option value="U.P">U.P</option>
                    <option value="Bihar">Bihar</option>
                </select>
                <label for="cars">To:</label>

                <select name="to" id="to">
                    <option value=""><?php echo $to; ?></option>
                    <option value="MUMBAI">MUMBAI</option>
                    <option value="delhi">delhi</option>
                    <option value="U.P">U.P</option>
                    <option value="Bihar">Bihar</option>
                    <fieldset>
                        <textarea placeholder="Type your message here...." name="message" tabindex="5" required><?php echo $message; ?></textarea>
                    </fieldset>
                    <fieldset>
                        <button name="update" type="submit" id="contact-submit" data-submit="...Sending">Update</button>
                    </fieldset>
            </form>



            <!-- partial -->
            <?php
            if (isset($_POST['update'])) {
//       echo 'Success';
                $id = $_POST['uid'];
                $name = $_POST['name'];
                $email = $_POST['email'];
                $contact = $_POST['contact'];
                $from = $_POST['from'];
                $to = $_POST['to'];
                $message = $_POST['message'];

                $query = "UPDATE travel SET tname='$name', tcontact='$contact',"
                        . " temail='$email',tjfrom='$from',tjto='$to',tmessage='$message' WHERE $id=tid";
                $res = mysqli_query($con, $query);
                if ($res > 0) {
                    // echo'<script>alert("Data successfully updated")</script>';
                    // echo 'Success';
                    ?>
                    <script>
                        if (!alert('Data successfully updated')) {
                            window.location = "../retrieve.php";
                        }
                    </script>
                    <?php
                } else {
                    //echo'<script>alert("Data failed to update")</script>';
                    //echo 'Failed'; 
                    ?>
                    <script>
                        if (!alert('Data failed to update')) {
                            window.location = "update.php";
                        }
                    </script>
                    <?php
                }
            }
            ?>

    </body>
</html>