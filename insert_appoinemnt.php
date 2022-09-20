<?php include('dbconn.php'); ?>
<?php

$PID  = $_POST['PID'];
$ADATE = $_POST['ADATE'];
$DID = $_POST['DID'];
$APCOST = "1500";


$sql = "INSERT INTO `appointment`(`P_ID`, `D_ID`, `AP_DATE`, `AP_COST`) VALUES('$PID','$DID','$ADATE','$APCOST')";

$result=mysqli_query($db,$sql);

if($result){ ?>
<script>
alert('Your Appoiment Has Been Registerd');
    window.location="LoginForm.php";
</script>
<?php } else { ?>
<script>
alert('Sorry Try Again');
    window.location="LoginForm.php";
</script>
<?php } ?>
