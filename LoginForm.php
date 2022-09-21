<!DOCTYPE html>
<?php include('dbconn.php'); ?>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Arogya Health Care - HMS</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body>
    <?php include('navbar2.php'); ?>
        <div class="container py-5">
        <form action="insert_db_appointment.php" method="POST">
          <h3>Make New Doctor Appoiment</h3>
            <label>Patient ID</label>
            <input type="text" class="form-control my-1" placeholder="Enter Patient ID" name="PID" required>
            <label>Date of Appoiment</label>
            <input type="date" class="form-control my-1" name="ADATE" required>
            <label>Doctor Name</label>
            <select name="DID" class="form-select" required>
            <?php
            // Get images from the database
            $query = $db->query("SELECT * FROM `doctor` ORDER BY `D_ID` DESC;");
            if($query->num_rows > 0){
            while($row = $query->fetch_assoc()){								
            ?>	
                <option value="<?php echo $row['D_ID'];?>"><?php echo $row['D_FNAME'];?> <?php echo $row['D_LNAME'];?></option>
            <?php } } ?>
            </select>            
            <button type="submit" class="btn btn-success container my-2">Make Appoiment</button>
            <a class="btn btn-primary container" data-bs-toggle="modal" data-bs-target="#exampleModalloginadmin">Admin Login</a>
        </form>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>
<form action="login.php" method="POST">
<div class="modal fade" id="exampleModalloginadmin" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Admin Login</h5>
      </div>
      <div class="modal-body">        
            <label>Staff Email</label>
            <input type="text" class="form-control my-1" placeholder="Enter Email Address" name="email" required>
            <label>Staff Password</label>
            <input type="password" class="form-control my-1" placeholder="Enter Password" name="pass" required>        
      </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Login</button>
      </div>
    </div>
  </div>
</div>
</form>