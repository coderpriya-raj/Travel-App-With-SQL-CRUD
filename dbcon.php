<?php 

$con= mysqli_connect("localhost", "root","");
$res= mysqli_select_db($con, "applications");
if($res>0)
{
    echo'success';
}
 else {
    echo 'fail';    
}

?>