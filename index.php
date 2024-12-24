<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>AULIA - SHAFIRA - Dashboard</title>
    <link rel="icon" href="img/laptop.png">
    
    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles and charts for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/data.js"></script>
    <script src="https://code.highcharts.com/modules/drilldown.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/export-data.js"></script>
    <script src="https://code.highcharts.com/modules/accessibility.js"></script>
    <!-- <link rel="stylesheet" href="/drilldown.css"/> -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.js"></script>
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div class="sidebar-brand-icon">
                    <img class="img-profile "src="img/store.png" width="40">
                </div>
                <div class="sidebar-brand-text mx-3">AULIA-SHAFIRA</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.php">
                    <img class="img-profile "src="img/speedometer.png" width="10">
                    <span>Dashboard</span>
                </a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <div class="sidebar-heading">
                Chart Menu
            </div>

            <!-- Item - Items -->
            <li class="nav-item">
                <a class="nav-link" href="customer.php">
                    <img class="img-profile "src="img/promotion.png" width="10">
                    <span>Customer Chart</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="product.php">
                    <img class="img-profile "src="img/report.png" width="10">
                    <span>Product Chart</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="sales.php">
                    <img class="img-profile "src="img/sales.png" width="10">
                    <span>Sales Chart</span>
                </a>
            </li>
            
            <li class="nav-item">
                <a class="nav-link" href="shipment.php">
                    <img class="img-profile "src="img/bar-chart.png" width="10">
                    <span>Shipment Chart</span>
                </a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <div class="input-group" style="margin-left: 10px; color: #000000; font-weight: 500; font-size: 15pt">
                            Final Project Data Warehouse
                    </div>
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Admin</span>
                                <img class="img-profile rounded-circle"
                                    src="img/man.png">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <!-- <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <div class="dropdown-divider"></div> -->
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    LogOut
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-900">Summary</h1>
                       
                    </div>

                    <!-- Content Row 1 Summary -->
                    <div class="row">

                        <!-- Total Income Card -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col auto">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Order</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-900">
                                                <?php  
                                                    $mysqli = mysqli_connect("localhost","root","","fpdwo");
                                                    $sql = "SELECT SUM(orderqty) as total from sales_fact";
                                                    $query = mysqli_query($mysqli,$sql);
                                                        while($row2=mysqli_fetch_array($query)){
                                                            echo number_format($row2['total']);
                                                        }
                                                ?>  
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                        <img class="img-profile "src="img/order.png" width="50">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Total Customers Card -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Total Customers</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-900">
                                                <?php
                                                    $sql = "SELECT COUNT(CustomerID) as jumlah_cus from customer_dimension";
                                                    $query = mysqli_query($mysqli,$sql);
                                                        while($row2=mysqli_fetch_array($query)){
                                                            echo number_format($row2['jumlah_cus'],0,".",",");
                                                        }
                                                ?>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                        <img class="img-profile "src="img/rating.png" width="50">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Total Products Card -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-danger shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Total Products</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-900">
                                                <?php
                                                    $sql = "SELECT COUNT(ProductID) as jumlah_produk from product_dimension";
                                                    $query = mysqli_query($mysqli,$sql);
                                                        while($row2=mysqli_fetch_array($query)){
                                                            echo number_format($row2['jumlah_produk'],0,".",",");
                                                        }
                                                ?>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                        <img class="img-profile "src="img/delivery-box.png" width="50">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>            

                        <!-- Total Transactions Card -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Total Transactions</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-900">
                                                <?php
                                                    $sql = "SELECT COUNT(CustomerID) as jumlah_transaksi from sales_fact";
                                                    $query = mysqli_query($mysqli,$sql);
                                                        while($row2=mysqli_fetch_array($query)){
                                                            echo number_format($row2['jumlah_transaksi'],0,".",",");
                                                        }
                                                ?>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                        <img class="img-profile "src="img/transaction.png" width="50">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Total Transactions Card -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Total Shipments</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-900">
                                                <?php
                                                    $sql = "SELECT COUNT(ShipMethodID) as jumlah_pengiriman from shipping_fact";
                                                    $query = mysqli_query($mysqli,$sql);
                                                        while($row2=mysqli_fetch_array($query)){
                                                            echo number_format($row2['jumlah_pengiriman'],0,".",",");
                                                        }
                                                ?>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                        <img class="img-profile "src="img/shipment.png" width="50">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- Content Row 2 OLAP -->

                     <!-- Collapsable Card -->
                     <div class="card shadow mb-4">
                            
                            <!-- Card Header - Accordion -->
                            <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample">
                                <h6 class="m-0 font-weight-bold text-dark">Mondrian OLAP</h6>
                            </a>

                            <!-- Card Content - Collapse -->
                            <div class="collapse" id="collapseCardExample">
                                <div class="card-body">
                                    <iframe name="mondrian" src="http://localhost:8080/mondrian/index.html" style="height: 500px;; width:100%; border:none; align-content:center"> </iframe>
                                </div>
                            </div>
                    </div>

                    <!-- <div class="row"> -->
                        <!-- <iframe name="mondrian" src="http://localhost:8080/mondrian/index.html" style="height:300px; width:100%; border:none; align-content:center"> </iframe> -->
                        <!-- <iframe name="mondrian" src="http://localhost:8080/mondrian/testpage.jsp?query=dwoadw1" style="height:1000px; width:100%; border:none; align-content:center"> </iframe>
                    </div>         -->
                </div>
                <!-- End of Page Content -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright2024 &copy; FinalProjectDWO-AuliaShafira</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Do you want to Leave this Site?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "LogOut" button below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-danger" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-success" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

                    
</body>
</html>