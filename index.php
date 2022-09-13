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
        <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav my-3">  
                            <!-- DOCTOR -->                          
                            <a class="nav-link collapsed mx-3 fw-bolder text-uppercase" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayoutsDoctor" aria-expanded="false" aria-controls="collapseLayouts">
                                Doctor  <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayoutsDoctor" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="create_doctor.php">Create Doctor</a>
                                    <a class="nav-link" href="">Update Doctor</a>                                    
                                    <a class="nav-link" href="">Delete & View Doctor</a>
                                    <a class="nav-link" href="">Doctor Schedule</a>
                                </nav>
                            </div>     
                            <!-- DOCTOR -->  
                            <!-- STAFF -->                          
                            <a class="nav-link collapsed mx-3 fw-bolder text-uppercase" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayoutsStaff" aria-expanded="false" aria-controls="collapseLayouts">
                                Staff  <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayoutsStaff" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="">Create Staff</a>
                                    <a class="nav-link" href="">Update Staff</a>                                    
                                    <a class="nav-link" href="">Delete & View Staff</a>
                                    <a class="nav-link" href="">Staff Schedule</a>
                                </nav>
                            </div>     
                            <!-- STAFF --> 
                            <!-- Patient -->                          
                            <a class="nav-link collapsed mx-3 fw-bolder text-uppercase" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayoutsPatient" aria-expanded="false" aria-controls="collapseLayouts">
                            Patient  <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayoutsPatient" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="">Create Patient</a>
                                    <a class="nav-link" href="">Update Patient</a>                                    
                                    <a class="nav-link" href="">Delete & View Patient</a>
                                </nav>
                            </div>     
                            <!-- Patient --> 
                            <!-- ward -->                          
                            <a class="nav-link collapsed mx-3 fw-bolder text-uppercase" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayoutsward" aria-expanded="false" aria-controls="collapseLayouts">
                            Ward  <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayoutsward" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="">Create Ward</a>
                                    <a class="nav-link" href="">Update Ward</a>                                    
                                    <a class="nav-link" href="">Delete & View Ward</a>
                                </nav>
                            </div>     
                            <!-- ward -->
                            <!-- ward Admisssion -->                          
                            <a class="nav-link collapsed mx-3 fw-bolder text-uppercase" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayoutswarda" aria-expanded="false" aria-controls="collapseLayouts">
                            Ward Admisssion <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayoutswarda" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="">Create Ward Admisssion</a>
                                    <a class="nav-link" href="">Update Ward Admisssion</a>                                    
                                    <a class="nav-link" href="">Delete & View Ward Admisssion</a>
                                </nav>
                            </div>     
                            <!-- ward Admisssion-->
                            <!-- Room -->                          
                            <a class="nav-link collapsed mx-3 fw-bolder text-uppercase" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayoutsRoom" aria-expanded="false" aria-controls="collapseLayouts">
                            Room   <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayoutsRoom" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="">Create Room</a>
                                    <a class="nav-link" href="">Update Room</a>                                    
                                    <a class="nav-link" href="">Delete & View Room</a>
                                </nav>
                            </div>     
                            <!-- Room --> 
                            <!-- Room Admisssion-->                          
                            <a class="nav-link collapsed mx-3 fw-bolder text-uppercase" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayoutsRooma" aria-expanded="false" aria-controls="collapseLayouts">
                            Room Admisssion <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayoutsRooma" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="">Create Room Admisssion</a>
                                    <a class="nav-link" href="">Update Room Admisssion</a>                                    
                                    <a class="nav-link" href="">Delete & View Room Admisssion</a>
                                </nav>
                            </div>     
                            <!-- Room Admisssion-->                            
                            <!-- Appoinment -->                          
                            <a class="nav-link collapsed mx-3 fw-bolder text-uppercase" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayoutsAppoinment" aria-expanded="false" aria-controls="collapseLayouts">
                            Appoinment  <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayoutsAppoinment" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="">Create Appoinment</a>
                                    <a class="nav-link" href="">Update Appoinment</a>                                    
                                    <a class="nav-link" href="">Delete & View Appoinment</a>
                                </nav>
                            </div>     
                            <!-- Appoinment -->
                            <!-- Surgery -->                          
                            <a class="nav-link collapsed mx-3 fw-bolder text-uppercase" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayoutsSurgery" aria-expanded="false" aria-controls="collapseLayouts">
                            Surgery  <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayoutsSurgery" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="">Create Surgery</a>
                                    <a class="nav-link" href="">Update Surgery</a>                                    
                                    <a class="nav-link" href="">Delete & View Surgery</a>
                                </nav>
                            </div>     
                            <!-- Surgery -->
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Admin
                    </div>
                </nav>
            </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Dashboard</h1>                    
                </div>
            </main>
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