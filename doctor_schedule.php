<!DOCTYPE html>
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
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3 fw-bolder text-uppercase" href="./">Arogya Health Care - HMS</a>        
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-danger" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">Settings</a></li>
                        <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="#!">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
        <?php include('navbar.php'); ?>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4 text-center">Delete And View Doctor Schedule</h1>
                    <div class="card my-5">
                    <div class="card-header">
                    Doctor Schedule
                    </div>			
                    <div class="card-body">	
                        <form action="" method="POST">
                        <label>Doctor ID</label>
                        <input type="text" name="fname" class="form-control my-1" placeholder="Enter Doctor ID">
                        <label>Date</label>
                        <input type="text" name="fname" class="form-control my-1" value="<?php echo date("d-m-Y");?>" readonly>
                        <label>Shift</label>
                        <select name="WStatus" class="form-select" required>
								<option value="Day Shift" >Day Shift</option>
								<option value="Night Shift" >Night Shift</option>
							</select>
                            <input type="submit" value="Save" class="btn btn-success mt-3">
                        </form>
                    </div>
                    </div>
                    <table class="table table-responsive">
                        <tr>
                            <th># DSID</th>
                            <th>Doctor Name & DID</th>
                            <th>Date</th>
                            <th>Shift</th>
                            <th colspan="2">Action</th>
                        </tr>
                        <tr>
                            <td>#1</td>
                            <td>Test Doctor - 10</td>
                            <td>12/09/2022</td>
                            <td>Day Shift</td>
                            <td><a class="btn btn-danger">Delete</a></td>
                            <td><a href="update_doctor.php" class="btn btn-success">Update</a></td>
                        </tr>
                    </table>
                </div>
            </main>
        </div>
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