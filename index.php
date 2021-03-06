<?php 
session_start();

if (!isset($_SESSION['username'])){
header("location:pagenotfound.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Focus Admin Dashboard</title>

<!-- ================= Favicon ================== -->
<!-- Standard -->
<link rel="shortcut icon" href="http://placehold.it/64.png/000/fff">
<!-- Retina iPad Touch Icon-->
<link rel="apple-touch-icon" sizes="144x144" href="http://placehold.it/144.png/000/fff">
<!-- Retina iPhone Touch Icon-->
<link rel="apple-touch-icon" sizes="114x114" href="http://placehold.it/114.png/000/fff">
<!-- Standard iPad Touch Icon-->
<link rel="apple-touch-icon" sizes="72x72" href="http://placehold.it/72.png/000/fff">
<!-- Standard iPhone Touch Icon-->
<link rel="apple-touch-icon" sizes="57x57" href="http://placehold.it/57.png/000/fff">

<!-- Toastr -->
<link href="assets/css/lib/toastr/toastr.min.css" rel="stylesheet">
<!-- Sweet Alert -->
<link href="assets/css/lib/sweetalert/sweetalert.css" rel="stylesheet">
<!-- Range Slider -->
<link href="assets/css/lib/rangSlider/ion.rangeSlider.css" rel="stylesheet">
<link href="assets/css/lib/rangSlider/ion.rangeSlider.skinFlat.css" rel="stylesheet">
<!-- Bar Rating -->
<link href="assets/css/lib/barRating/barRating.css" rel="stylesheet">
<!-- Nestable -->
<link href="assets/css/lib/nestable/nestable.css" rel="stylesheet">
<!-- JsGrid -->
<link href="assets/css/lib/jsgrid/jsgrid-theme.min.css" rel="stylesheet" />
<link href="assets/css/lib/jsgrid/jsgrid.min.css" type="text/css" rel="stylesheet" />
<!-- Datatable -->
<!-- <link href="assets/css/lib/datatable/dataTables.bootstrap.min.css" rel="stylesheet" />
<link href="assets/css/lib/data-table/buttons.bootstrap.min.css" rel="stylesheet" /> -->
<!-- Calender 2 -->
<link href="assets/css/lib/calendar2/pignose.calendar.min.css" rel="stylesheet">
<!-- Weather Icon -->
<link href="assets/css/lib/weather-icons.css" rel="stylesheet" />
<!-- Owl Carousel -->
<link href="assets/css/lib/owl.carousel.min.css" rel="stylesheet" />
<link href="assets/css/lib/owl.theme.default.min.css" rel="stylesheet" />
<!-- Select2 -->
<link href="assets/css/lib/select2/select2.min.css" rel="stylesheet">
<!-- Chartist -->
<link href="assets/css/lib/chartist/chartist.min.css" rel="stylesheet">
<!-- Calender -->
<link href="assets/css/lib/calendar/fullcalendar.css" rel="stylesheet" />

<!-- Common -->
<link href="assets/css/lib/font-awesome.min.css" rel="stylesheet">
<link href="assets/css/lib/themify-icons.css" rel="stylesheet">
<link href="assets/css/lib/menubar/sidebar.css" rel="stylesheet">
<link href="assets/css/lib/bootstrap.min.css" rel="stylesheet">
<link href="assets/css/lib/helper.css" rel="stylesheet">
<link href="assets/css/style.css" rel="stylesheet">

<style type="text/css">
.user-avatar {
    text-transform: capitalize;
}
</style>
</head>

<body>

<div class="sidebar sidebar-hide-to-small sidebar-shrink sidebar-gestures">
<div class="nano">
    <div class="nano-content">
        <div class="logo">
            <a href="index.php">
                <!-- <img src="assets/images/logo.png" alt="" /> -->
                <span>SDGs</span>
            </a>
        </div>
        <ul>
            <li class="label">Main</li>
            <li>
                <a class="nav-link" href="index.php">
                    <i class="ti-home"></i> Home
                </a>
                 <!-- <span class="badge badge-primary">2</span>
                <span class="sidebar-collapse-icon ti-angle-down"></span>
            
            <ul>
                <li>
                    <a href="index.html">Dashboard 1</a>
                </li>
                <li>
                    <a href="index1.html">Dashboard 2</a>
                </li>



            </ul> --> 
        </li>


        <li class="label">Data</li>
        <li>
            <a href="?page=form-keluarga" class="nav-link">
                <i class="ti-bar-chart-alt"></i> Input Data
<!--                             <span class="sidebar-collapse-icon ti-angle-down"></span>
-->                        </a>
            <!-- <ul>
                <li>
                    <a href="chart-flot.html">Flot</a>
                </li>
                <li>
                    <a href="chart-morris.html">Morris</a>
                </li>
                <li>
                    <a href="chartjs.html">Chartjs</a>
                </li>
                <li>
                    <a href="chartist.html">Chartist</a>
                </li>
                <li>
                    <a href="chart-peity.html">Peity</a>
                </li>
                <li>
                    <a href="chart-sparkline.html">Sparkle</a>
                </li>
                <li>
                    <a href="chart-knob.html">Knob</a>
                </li>
            </ul> -->
        </li>
        <li><a href="?page=laporan"><i class="ti-agenda"></i> Laporan</a></li>
        <li class="label">Logout</li>
        <li><a href="?page=logout"><i class="ti-close"></i> Logout</a></li>
        
    </ul>
</div>
</div>
</div>
<!-- /# sidebar -->


<div class="header">
<div class="container-fluid">
<div class="row">
    <div class="col-lg-12">
        <div class="float-left">
            <div class="hamburger sidebar-toggle">
                <span class="line"></span>
                <span class="line"></span>
                <span class="line"></span>
            </div>
        </div>
        <div class="float-right">
            <div class="dropdown dib">
                <div class="header-icon" data-toggle="dropdown">

                </div>
            </div>
            

            <div class="dropdown dib">
                <div class="header-icon" data-toggle="dropdown">
                    <span class="user-avatar"><?php echo $_SESSION['username'] ?>
                </span>
                
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>


<div class="content-wrap">
<div class="main">
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-8 p-r-0 title-margin-right">
            <div class="page-header">
                <div class="page-title">
                    <h1>Halaman
                        <span>
                            <?php 
                                if (isset($_GET['page'])){
                                    echo "Laporan";
                                }else if(isset($_GET['page'])){
                                    echo "oinput";
                                }else{
                                    echo "Utama";
                                }
                            ?>
                        </span>
                    </h1>
                </div>
            </div>
        </div>
        <!-- /# column -->
        <div class="col-lg-4 p-l-0 title-margin-left">
            <div class="page-header">
                <div class="page-title">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="index.php">Halaman Utama</a>
                        </li>
                   
                    </ol>
                </div>
            </div>
        </div>
        <!-- /# column -->
    </div>
    <!-- /# row -->
    <section id="main-content">
        <div class="row">
            <div class="col-lg-12">

                <div id="extra-area-chart"></div>
                <div id="morris-line-chart"></div>

                <?php 

                if(isset($_GET['page'])){
                    $page = $_GET['page'];

                    switch ($page) {

                        case 'form-keluarga':
                        include "page/formulir_keluarga.php";
                        break;
                        case 'form-pII':
                        include "page/FormPI&II.php";
                        break;
                        case 'form-pIII':
                        include "page/FormPIII&IV.php";
                        break;
                        case 'form-pIVlanjut':
                        include "page/FormPIVlanjut.php";
                        break;
                        case 'form-pIVlanjutI':
                        include "page/FormPIVlanjutI.php";
                        break;
                        case 'form-pIVlanjutII':
                        include "page/FormPIVlanjutII.php";
                        break;
                        case 'alldata':
                        include "page/alldata.php";
                        break;
                        case 'detail':
                        include "page/Detail.php";
                        break;
                        case 'hapus':
                        include "page/hapus.php";
                        break;
                        case 'processkel':
                        include "process/formkeluarga.php";
                        break;
                        case 'login':
                        include "login.php";
                        break;

                        case 'form-keluargaI':
                        include "formulir_keluarga.php";
                        break;

                        case 'form':
                        include "FormPI&II.php";
                        break;

                        case 'laporan':
                        include "page/Laporan.php";
                        break;

                        case 'logout':
                        include "page/logout.php";
                        break;

                        case 'laporan1':
                        include "page/laporan1.php";
                        break;

                        default:
                        include "page/home.php";
                        break;
                    }
                } else {
                    include "page/home.php";
                }

                ?>

            </div>
        </div>

    </div>
</div>
</section>
</div>
</div>
</div>




<!-- Common -->
<script type="text/javascript" src="assets/js/lib/jquery.min.js"></script>
<script src="assets/js/lib/jquery.nanoscroller.min.js"></script>
<script src="assets/js/lib/menubar/sidebar.js"></script>
<script src="assets/js/lib/bootstrap.min.js"></script>
<script src="assets/js/script.js"></script>

<!-- Calender -->
<script src="assets/js/lib/jquery-ui/jquery-ui.min.js"></script>
<script src="assets/js/lib/moment/moment.js"></script>
<script src="assets/js/lib/calendar/fullcalendar.min.js"></script>
<script src="assets/js/lib/calendar/fullcalendar-init.js"></script>

<!--  Flot Chart -->
<!-- <script src="assets/js/lib/flot-chart/excanvas.min.js"></script>
<script src="assets/js/lib/flot-chart/jquery.flot.js"></script>
<script src="assets/js/lib/flot-chart/jquery.flot.pie.js"></script>
<script src="assets/js/lib/flot-chart/jquery.flot.time.js"></script>
<script src="assets/js/lib/flot-chart/jquery.flot.stack.js"></script>
<script src="assets/js/lib/flot-chart/jquery.flot.resize.js"></script>
<script src="assets/js/lib/flot-chart/jquery.flot.crosshair.js"></script>
<script src="assets/js/lib/flot-chart/curvedLines.js"></script>
<script src="assets/js/lib/flot-chart/flot-tooltip/jquery.flot.tooltip.min.js"></script>
<script src="assets/js/lib/flot-chart/flot-chart-init.js"></script> -->

<!--  Chartist -->
<!-- <script src="assets/js/lib/chartist/chartist-plugin-tooltip.min.js"></script>
<script src="assets/js/lib/chartist/chartist-init.js"></script> -->

<!--  Chartjs -->
<!-- <script src="assets/js/lib/chart-js/Chart.bundle.js"></script>
<script src="assets/js/lib/chart-js/chartjs-init.js"></script> -->

<!--  Knob -->
<script src="assets/js/lib/knob/jquery.knob.min.js "></script>
<script src="assets/js/lib/knob/knob.init.js "></script>

<!--  Morris -->
<!-- <script src="assets/js/lib/morris-chart/raphael-min.js"></script>
<script src="assets/js/lib/morris-chart/morris.js"></script>
<script src="assets/js/lib/morris-chart/morris-init.js"></script> -->

<!--  Peity -->
<!-- <script src="assets/js/lib/peitychart/jquery.peity.min.js"></script>
<script src="assets/js/lib/peitychart/peitychart.init.js"></scrip -->t>

<!--  Sparkline -->
<script src="assets/js/lib/sparklinechart/jquery.sparkline.min.js"></script>
<script src="assets/js/lib/sparklinechart/sparkline.init.js"></script>

<!-- Select2 -->
<script src="assets/js/lib/select2/select2.full.min.js"></script>

<!--  Validation -->
<!-- <script src="assets/js/lib/form-validation/jquery.validate.min.js"></script>
<script src="assets/js/lib/form-validation/jquery.validate-init.js"></script> -->

<!--  Circle Progress -->


<!--  Vector Map -->
<script src="assets/js/lib/vector-map/jquery.vmap.js"></script>
<script src="assets/js/lib/vector-map/jquery.vmap.min.js"></script>
<script src="assets/js/lib/vector-map/jquery.vmap.sampledata.js"></script>
<script src="assets/js/lib/vector-map/country/jquery.vmap.world.js"></script>
<script src="assets/js/lib/vector-map/country/jquery.vmap.algeria.js"></script>
<script src="assets/js/lib/vector-map/country/jquery.vmap.argentina.js"></script>
<script src="assets/js/lib/vector-map/country/jquery.vmap.brazil.js"></script>
<script src="assets/js/lib/vector-map/country/jquery.vmap.france.js"></script>
<script src="assets/js/lib/vector-map/country/jquery.vmap.germany.js"></script>
<script src="assets/js/lib/vector-map/country/jquery.vmap.greece.js"></script>
<script src="assets/js/lib/vector-map/country/jquery.vmap.iran.js"></script>
<script src="assets/js/lib/vector-map/country/jquery.vmap.iraq.js"></script>
<script src="assets/js/lib/vector-map/country/jquery.vmap.russia.js"></script>
<script src="assets/js/lib/vector-map/country/jquery.vmap.tunisia.js"></script>
<script src="assets/js/lib/vector-map/country/jquery.vmap.europe.js"></script>
<script src="assets/js/lib/vector-map/country/jquery.vmap.usa.js"></script>

<!--  Simple Weather -->
<script src="assets/js/lib/weather/jquery.simpleWeather.min.js"></script>
<script src="assets/js/lib/weather/weather-init.js"></script>

<!--  Owl Carousel -->
<script src="assets/js/lib/owl-carousel/owl.carousel.min.js"></script>
<script src="assets/js/lib/owl-carousel/owl.carousel-init.js"></script>

<!--  Calender 2 -->
<script src="assets/js/lib/calendar-2/moment.latest.min.js"></script>
<script src="assets/js/lib/calendar-2/pignose.calendar.min.js"></script>
<script src="assets/js/lib/calendar-2/pignose.init.js"></script>
<script src="./assets/js/scripts.js"></script>



<!-- Datatable -->
<!--     <script src="assets/js/lib/data-table/datatables.min.js"></script>
<script src="assets/js/lib/data-table/buttons.dataTables.min.js"></script>
<script src="assets/js/lib/data-table/dataTables.buttons.min.js"></script>
<script src="assets/js/lib/data-table/buttons.flash.min.js"></script>
<script src="assets/js/lib/data-table/jszip.min.js"></script>
<script src="assets/js/lib/data-table/pdfmake.min.js"></script>
<script src="assets/js/lib/data-table/vfs_fonts.js"></script>
<script src="assets/js/lib/data-table/buttons.html5.min.js"></script>
<script src="assets/js/lib/data-table/buttons.print.min.js"></script>
<script src="assets/js/lib/data-table/datatables-init.js"></script> -->

<!-- JS Grid -->
<!-- <script src="assets/js/lib/jsgrid/db.js"></script>
<script src="assets/js/lib/jsgrid/jsgrid.core.js"></script>
<script src="assets/js/lib/jsgrid/jsgrid.load-indicator.js"></script>
<script src="assets/js/lib/jsgrid/jsgrid.load-strategies.js"></script>
<script src="assets/js/lib/jsgrid/jsgrid.sort-strategies.js"></script>
<script src="assets/js/lib/jsgrid/jsgrid.field.js"></script>
<script src="assets/js/lib/jsgrid/fields/jsgrid.field.text.js"></script>
<script src="assets/js/lib/jsgrid/fields/jsgrid.field.number.js"></script>
<script src="assets/js/lib/jsgrid/fields/jsgrid.field.select.js"></script>
<script src="assets/js/lib/jsgrid/fields/jsgrid.field.checkbox.js"></script>
<script src="assets/js/lib/jsgrid/fields/jsgrid.field.control.js"></script>
<script src="assets/js/lib/jsgrid/jsgrid-init.js"></script> -->

<!--  Datamap -->
<!-- <script src="assets/js/lib/datamap/d3.min.js"></script>
<script src="assets/js/lib/datamap/topojson.js"></script>
<script src="assets/js/lib/datamap/datamaps.world.min.js"></script>
<script src="assets/js/lib/datamap/datamap-init.js"></script> -->

<!--  Nestable -->
<!-- <script src="assets/js/lib/nestable/jquery.nestable.js"></script>
<script src="assets/js/lib/nestable/nestable.init.js"></script> -->

<!--ION Range Slider JS-->
<!-- <script src="assets/js/lib/rangeSlider/ion.rangeSlider.min.js"></script>
<script src="assets/js/lib/rangeSlider/moment.js"></script>
<script src="assets/js/lib/rangeSlider/moment-with-locales.js"></script>
<script src="assets/js/lib/rangeSlider/rangeslider.init.js"></script>

Bar Rating
<script src="assets/js/lib/barRating/jquery.barrating.js"></script>
<script src="assets/js/lib/barRating/barRating.init.js"></script>

<!- jRate -->
<!-- <script src="assets/js/lib/rating1/jRate.min.js"></script>
<script src="assets/js/lib/rating1/jRate.init.js"></script> --> -->

<!-- Sweet Alert -->
<script src="assets/js/lib/sweetalert/sweetalert.min.js"></script>
<script src="assets/js/lib/sweetalert/sweetalert.init.js"></script>
<script src="assets/js/lib/sweetalert/sweetalert.min.js"></script>
<script src="assets/js/lib/sweetalert/sweetalert.init.js"></script>
<script src="assets/js/lib/bootstrap.min.js"></script>

<!-- Toastr -->
<!-- <script src="assets/js/lib/toastr/toastr.min.js"></script>
<script src="assets/js/lib/toastr/toastr.init.js"></script> -->













<!--  Dashboard 1 -->
<!-- <script src="assets/js/dashboard1.js"></script>
<script src="assets/js/dashboard2.js"></script> -->

</body>

</html>