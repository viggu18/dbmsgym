<?php
include 'conn.php';

     $u= $_POST['uname'];
    $p= $_POST['psw'];

    $q = " SELECT * FROM users WHERE  uname = '$u' and passwd = '$p'";
    
   $res=mysqli_query($conn,$q);
    
if(mysqli_num_rows($res)==1)
{
    $_SESSION['uname'] = $u;
    //echo "welcome  $u";
}
else
{
    $message = "incorrect Username Or Passsword";
    

   echo '<script type="text/javascript">alert("' . $message . '")</script>';
   echo "<script>window.open('login.phsp','_self')</script>";

}

?>