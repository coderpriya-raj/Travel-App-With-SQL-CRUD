<?php include 'dbcon.php'; ?>

<html>
    <head>
        <title>title</title>
        <link rel="stylesheet" href="retrieve.css">
    </head>
    <body>
        <h2>Responsive Table</h2>
        <div class="table-wrapper">
            <table class="fl-table">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Contact</th>
                        <th>FROM</th>
                        <th>To</th>
                        <th>Message</th>
                        <th>Update</th>
                        <th>Delete</th>
                    </tr>
                    <?php
                    $query = "SELECT * FROM travel";
                    $result = mysqli_query($con, $query) or die(mysqli_error($con));
                    while ($row = mysqli_fetch_assoc($result) or die(mysqli_error($con))) {
                        ?>
                    </thead>
                    <tbody>
                        <tr>
                            <td><?php echo $row['tid']; ?></td>
                            <td><?php echo $row['tname']; ?></td>
                            <td><?php echo $row['temail']; ?></td>
                            <td><?php echo $row['tcontact']; ?></td>
                            <td><?php echo $row['tjfrom']; ?></td>
                            <td><?php echo $row['tjto']; ?></td>
                            <td><?php echo $row['tmessage']; ?></td>
                            
                            <td><a href="./UpdateDetails/update.php?id=<?php echo $row['tid']; ?>"><button class="ubtn" value="update">Update</button></a></td>
                            <td><a href="./delete/delete.php?id=<?php echo $row['tid']; ?>"><button class="ubtn" value="delete">delete</button></a></td>
                        </tr>
                    <?php } ?>

                    </tr>
                <tbody>
            </table>
        </div>
    </body>
</html>
