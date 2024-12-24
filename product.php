<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>AULIA - SHAFIRA - Product</title>
        <link rel="icon" href="img/laptop.png">
        
        <!-- Custom fonts for this template-->
        <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

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
                    <div class="sidebar-brand-text mx-3">AULIA - SHAFIRA </div>
                </a>
                
                <!-- Divider -->
                <hr class="sidebar-divider my-0">

                <!-- Item - Dashboard -->
                <li class="nav-item">
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

                <!-- Item - Chart Menu -->
                <li class="nav-item">
                    <a class="nav-link" href="customer.php">
                        <img class="img-profile "src="img/promotion.png" width="10">
                        <span>Customer Chart</span>
                    </a>
                </li>

                <li class="nav-item active">
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
                        <div class="input-group" style="margin-left: 10px; color: #000000; font-weight: 500; font-size: 15pt">Final Project Data Warehouse</div>
                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                        </button>

                        <!-- Top Navbar -->
                        <ul class="navbar-nav ml-auto">
                            <div class="topbar-divider d-none d-sm-block"></div>
                            <!-- Nav Item - User Information -->
                            <li class="nav-item dropdown no-arrow">
                                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="mr-2 d-none d-lg-inline text-gray-600 small">Admin</span>
                                    <img class="img-profile rounded-circle"src="img/man.png">
                                </a>
                                <!-- Dropdown - User Information -->
                                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Logout
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </nav>
                    <!-- End of Topbar -->
                    
                    <!-- Page Content -->
                    <div class="container-fluid">
                        <!-- Page Heading -->
                        <div class="d-sm-flex align-items-center justify-content-between mb-4">
                            <h1 class="h3 mb-0 text-gray-900">Product</h1>
                        </div>

                        <!-- Content 1: Card Summary -->
                        <div class="row">
                            <!-- Total Product Card -->
                            <div class="col-xl-3 col-md-6 mb-4">
                                <div class="card border-left-primary shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Products</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-900">
                                                    <?php
                                                        $mysqli = mysqli_connect("localhost","root","","fpdwo");
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

                            <!-- Total Product Category Card -->
                            <div class="col-xl-3 col-md-6 mb-4">
                                <div class="card border-left-success shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Total Sub Kategori Produk</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                    <?php
                                                        $sql = "SELECT COUNT(DISTINCT(ProductSubcategoryID)) kategori FROM product_dimension";
                                                        $query = mysqli_query($mysqli,$sql);
                                                        while($row2=mysqli_fetch_array($query)){
                                                            echo number_format($row2['kategori'],0,".",",");
                                                        }
                                                    ?>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                            <img class="img-profile "src="img/categories.png" width="50">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Total Product Card -->
                            <div class="col-xl-3 col-md-6 mb-4">
                                <div class="card border-left-warning shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Total Model Produk</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                    <?php
                                                        $sql = "SELECT COUNT(DISTINCT(ProductModelID)) model FROM product_dimension";
                                                        $query = mysqli_query($mysqli,$sql);
                                                        while($row2=mysqli_fetch_array($query)){
                                                            echo number_format($row2['model'],0,".",",");
                                                        }
                                                    ?>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                            <img class="img-profile "src="img/product.png" width="50">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Avg Product Price Card -->
                            <div class="col-xl-3 col-md-6 mb-4">
                                <div class="card border-left-danger shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Rata-rata Harga Produk</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                    <?php
                                                        $sql = "SELECT AVG(ListPrice) as avg FROM product_dimension";
                                                        $query = mysqli_query($mysqli,$sql);
                                                        while($row2=mysqli_fetch_array($query)){
                                                            echo "$".number_format($row2['avg'],0,".",",");
                                                        }
                                                    ?>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                            <img class="img-profile "src="img/tag.png" width="50">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Content 2: Product Charts -->
                        <div class="row">
                            <!-- Pie Chart -->
                            <div class="col-xl-8 col-lg-7">
                                <div class="card shadow mb-4">
                                    <!-- Card Header -->
                                    <div
                                        class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                        <h6 class="m-0 font-weight-bold text-primary">Total Pembelian Produk berdasarkan Category</h6>
                                    </div>
                                    <!-- Card Body -->
                                    <div class="card-body-store">
                                        <div class="chart-area-store">
                                            <div id="canvas-holder" style="width:100%">
                                                <canvas id="chart-area"></canvas>
                                            </div>
                                            <?php
                                                $mysqli = mysqli_connect("localhost", "root", "", "fpdwo");
                                                $vendor = mysqli_query($mysqli,"SELECT SUM(sf.orderqty) as total, p.NameSub as category FROM sales_fact sf JOIN product_dimension p ON sf.ProductID = p.ProductID GROUP BY category ORDER BY total DESC LIMIT 5");
                                                while($row = mysqli_fetch_array($vendor)){
                                                    $jenis_vendor[] = $row['category'];

                                                    $query = mysqli_query($mysqli,"SELECT SUM(sf.orderqty) as total, p.NameSub as category FROM sales_fact sf JOIN product_dimension p ON sf.ProductID = p.ProductID  GROUP BY category HAVING p.NameSub='".$row['category']."'");
                                                    $row = $query->fetch_array();
                                                    $total[] = $row['total'];
                                                };
                                            ?>
                                            <figure class="highcharts-figure">
                                                <div id="container"></div>
                                                <p class="highcharts-description"></p>
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Bar Chart -->
                            <div class="col-xl-8 col-lg-7">
                                <div class="card shadow mb-4">
                                    <div class="card-header py-3">
                                        <h6 class="m-0 font-weight-bold text-primary">Top 10 Produk yang Paling Banyak Dibeli</h6>
                                    </div>
                                    <div class="card-body">
                                        <div class="chart-bar">
                                            <canvas id="myBarChart"></canvas>
                                        </div>
                                        <!-- Styling for the bar chart can be found in the
                                        <code>/js/demo/chart-bar-demo3.js</code> file. -->
                                    </div>
                                </div>
                            </div>
                        </div>
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
                        <h5 class="modal-title" id="exampleModalLabel">Are you sure, do you want to Leave this Site?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Select "Logout" button below if you are ready to end your current session.</div>
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

        <!-- JavaScript for Charts -->
        <!-- JavaScript for Doughnut Chart Total Pembelian berdasarkan Category-->
        <script>
            var config = {
                type: 'doughnut',
                data: {
                    datasets: [{
                        data:<?php echo json_encode($total); ?>,
                        backgroundColor: [
                        '#191970',
                        '#0000CD',
                        '#4169E1',
                        '#4682B4',
                        '#912CEE',
                        '#7B68EE',
                        '#6495ED',
                        '#00BFFF',
                        '#87CEFA',
                        '#B0C4DE',
                        '#48D1CC',
                        '#7FFFD4',
                        '#AFEEEE',
                        '#E0FFFF',
                        ],
                        label: 'Total Produk berdasarkan Category'
                    }],
                    labels: <?php echo json_encode($jenis_vendor); ?>},
                options: {
                    responsive: true
                }
            };

            window.onload = function() {
                var ctx = document.getElementById('chart-area').getContext('2d');
                window.myPie = new Chart(ctx, config);
            };

            document.getElementById('randomizeData').addEventListener('click', function() {
                config.data.datasets.forEach(function(dataset) {
                    dataset.data = dataset.data.map(function() {
                        return randomScalingFactor();
                    });
                });

                window.myPie.update();
            });

            var colorNames = Object.keys(window.chartColors);
            document.getElementById('addDataset').addEventListener('click', function() {
                var newDataset = {
                    backgroundColor: [],
                    data: [],
                    label: 'New dataset ' + config.data.datasets.length,
                };

                for (var index = 0; index < config.data.labels.length; ++index) {
                    newDataset.data.push(randomScalingFactor());

                    var colorName = colorNames[index % colorNames.length];
                    var newColor = window.chartColors[colorName];
                    newDataset.backgroundColor.push(newColor);
                }

                config.data.datasets.push(newDataset);
                window.myPie.update();
            });

            document.getElementById('removeDataset').addEventListener('click', function() {
                config.data.datasets.splice(0, 1);
                window.myPie.update();
            });
        </script>
    
        <!-- <script type="text/javascript">
            Highcharts.chart('container', {
                chart: {
                type: 'pie'
            },
            title: {
                text: 'Persentase Total Pembelian Produk Berdasarkan Category'},
                subtitle: {
                    text:'Klik pada salah satu bagian Pie untuk melihat total pembelian produk berdasarkan category'
                },
                accessibility: {
                    announceNewData: {
                        enabled: true
                    },
                    point: {
                        valueSuffix: '%'
                    }
                },
                plotOptions: {
                    series:{
                        dataLabels: {
                            enabled: true,
                            format:'{point.name}: {point.y:.1f}%'
                        }
                    }
                },
                tooltip: {
                    headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
                    pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.2f}%</b> of total<br/>'
                },
                series: [
                    {
                        name: "Total Pembelian berdasarkan Category",
                        colorByPoint: true,
                        data:
                            <?php
                            $datanya = $json_all_kat;
                            $data1 = str_replace('["', '{"',$datanya) ;
                            $data2 = str_replace('"]', '"}',$data1) ;
                            $data3 = str_replace('[[', '[', $data2);
                            $data4 = str_replace(']]', ']', $data3);
                            $data5 = str_replace(':', '" : "', $data4);
                            $data6 = str_replace('"name"', 'name', $data5);
                            $data7 = str_replace('"drilldown"', 'drilldown', $data6);
                            $data8 = str_replace('"y"', 'y', $data7);
                            $data9 = str_replace('",', ',', $data8);
                            $data10 = str_replace(',y', '",y', $data9);
                            $data11 = str_replace(',y : "', ',y : ', $data10);
                            echo $data11;
                            ?>
                    }
                ],
                drilldown: {
                    series: [
                        <?php
                        echo $string_data;
                        ?>
                    ]
                }
            });
        </script> -->
        
        <!-- JavaScript for Bar Chart -->
        <script src="js/demo/chart-bar-demo1.js"></script>
    </body>
</html>