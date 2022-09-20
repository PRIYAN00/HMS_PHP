<?php
session_start();
include('dbconn.php');

if(isset($_POST['email']) && isset($_POST['pass'])){

    $EMAIL = $_POST['email'];
    $PASS  = $_POST['pass'];

    $sql="SELECT `S_FNAME` FROM staff WHERE S_EMAIL = '$EMAIL' AND  S_PASSWORD = '$PASS'";

    $result=mysqli_query($db,$sql);

    $no=mysqli_num_rows($result);


if($result && $no>0){	
    
    
    while($row = mysqli_fetch_array($result)){
        
        $_SESSION['userName'] = $row['S_FNAME'];
        
    }

?>		
<script>
    window.location="./";
</script>
<?php 
}else{	
?>		
<script>
alert("invalid login");
        window.location="LoginForm.php";
</script>
<?php }	} ?>