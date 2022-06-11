<?php
session_start();
//include ur db connection here
$_SESSION['login']=="";
date_default_timezone_set(/*enter ur zone here  more info go to https://www.php.net/manual/en/function.date-default-timezone-set.php*/);
$ldate=date( 'd-m-Y h:i:s A', time () );
mysqli_query($con,"UPDATE userlog  SET logout = '$ldate' WHERE userEmail = '".$_SESSION['login']."' ORDER BY id DESC LIMIT 1");
session_unset();
$_SESSION['errmsg']="You have successfully logout";
?>
<script language="javascript">
document.location="index.php";
</script>
