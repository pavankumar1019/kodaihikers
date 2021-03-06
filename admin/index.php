<?php
session_start();

if(!isset($_SESSION['email']) || empty($_SESSION['name'])) {
    header("Location: login.php");
} else {
	
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Dashboard</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

    <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.html">
                            <img  src="images/icon/kodai_logo.png" alt="" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="has-sub">
                            <a class="js-arrow" href="index.php">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                            <!-- <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="index.html">Dashboard 1</a>
                                </li>
                                <li>
                                    <a href="index2.html">Dashboard 2</a>
                                </li>
                                <li>
                                    <a href="index3.html">Dashboard 3</a>
                                </li>
                                <li>
                                    <a href="index4.html">Dashboard 4</a>
                                </li>
                            </ul> -->
                        </li>
                        <li>
                            <a href="chart.php">
                                <i class="fas fa-chart-bar"></i>Charts</a>
                        </li>
                        <li>
                            <a href="table.php">
                                <i class="fas fa-table"></i>Report's</a>
                        </li>
                        <li>
                            <a href="form.php">
                                <i class="far fa-check-square"></i>Website Modification</a>
                        </li>
                        <!-- <li>
                            <a href="calendar.html">
                                <i class="fas fa-calendar-alt"></i>Calendar</a>
                        </li>
                        <li>
                            <a href="map.html">
                                <i class="fas fa-map-marker-alt"></i>Maps</a>
                        </li> -->
                        <!-- <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>Pages</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="login.html">Login</a>
                                </li>
                                <li>
                                    <a href="register.html">Register</a>
                                </li>
                                <li>
                                    <a href="forget-pass.html">Forget Password</a>
                                </li>
                            </ul>
                        </li> -->
                        <!-- <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-desktop"></i>UI Elements</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="button.html">Button</a>
                                </li>
                                <li>
                                    <a href="badge.html">Badges</a>
                                </li>
                                <li>
                                    <a href="tab.html">Tabs</a>
                                </li>
                                <li>
                                    <a href="card.html">Cards</a>
                                </li>
                                <li>
                                    <a href="alert.html">Alerts</a>
                                </li>
                                <li>
                                    <a href="progress-bar.html">Progress Bars</a>
                                </li>
                                <li>
                                    <a href="modal.html">Modals</a>
                                </li>
                                <li>
                                    <a href="switch.html">Switchs</a>
                                </li>
                                <li>
                                    <a href="grid.html">Grids</a>
                                </li>
                                <li>
                                    <a href="fontawesome.html">Fontawesome Icon</a>
                                </li>
                                <li>
                                    <a href="typo.html">Typography</a>
                                </li>
                            </ul>
                        </li> -->
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="images/icon/kodai_logo.png" alt="" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="active has-sub">
                            <a class="js-arrow" href="index.php">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                            <!-- <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="index.html">Dashboard 1</a>
                                </li>
                                <li>
                                    <a href="index2.html">Dashboard 2</a>
                                </li>
                                <li>
                                    <a href="index3.html">Dashboard 3</a>
                                </li>
                                <li>
                                    <a href="index4.html">Dashboard 4</a>
                                </li>
                            </ul> -->
                        </li>
                        <li>
                            <a href="chart.php">
                                <i class="fas fa-chart-bar"></i>Charts</a>
                        </li>
                        <li>
                            <a href="table.php">
                                <i class="fas fa-table"></i>Report's</a>
                        </li>
                        <li>
                            <a href="form.php">
                                <i class="far fa-check-square"></i>Website Modification</a>
                        </li>
                        <!-- <li>
                            <a href="calendar.html">
                                <i class="fas fa-calendar-alt"></i>Calendar</a>
                        </li>
                        <li>
                            <a href="map.html">
                                <i class="fas fa-map-marker-alt"></i>Maps</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>Pages</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="login.html">Login</a>
                                </li>
                                <li>
                                    <a href="register.html">Register</a>
                                </li>
                                <li>
                                    <a href="forget-pass.html">Forget Password</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-desktop"></i>UI Elements</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="button.html">Button</a>
                                </li>
                                <li>
                                    <a href="badge.html">Badges</a>
                                </li>
                                <li>
                                    <a href="tab.html">Tabs</a>
                                </li>
                                <li>
                                    <a href="card.html">Cards</a>
                                </li>
                                <li>
                                    <a href="alert.html">Alerts</a>
                                </li>
                                <li>
                                    <a href="progress-bar.html">Progress Bars</a>
                                </li>
                                <li>
                                    <a href="modal.html">Modals</a>
                                </li>
                                <li>
                                    <a href="switch.html">Switchs</a>
                                </li>
                                <li>
                                    <a href="grid.html">Grids</a>
                                </li>
                                <li>
                                    <a href="fontawesome.html">Fontawesome Icon</a>
                                </li>
                                <li>
                                    <a href="typo.html">Typography</a>
                                </li>
                            </ul>
                        </li> -->
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="POST">
                                <!-- <input class="au-input au-input--xl" type="text" name="search" placeholder="Search for datas &amp; reports..." />
                                <button class="au-btn--submit" type="submit">
                                    <i class="zmdi zmdi-search"></i>
                                </button> -->
                            </form>
                            <div class="header-button">
                                <div class="noti-wrap">
                                    <!-- <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-comment-more"></i>
                                        <span class="quantity">1</span>
                                        <div class="mess-dropdown js-dropdown">
                                            <div class="mess__title">
                                                <p>You have 2 news message</p>
                                            </div>
                                            <div class="mess__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-06.jpg" alt="Michelle Moreno" />
                                                </div>
                                                <div class="content">
                                                    <h6>Michelle Moreno</h6>
                                                    <p>Have sent a photo</p>
                                                    <span class="time">3 min ago</span>
                                                </div>
                                            </div>
                                            <div class="mess__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-04.jpg" alt="Diane Myers" />
                                                </div>
                                                <div class="content">
                                                    <h6>Diane Myers</h6>
                                                    <p>You are now connected on message</p>
                                                    <span class="time">Yesterday</span>
                                                </div>
                                            </div>
                                            <div class="mess__footer">
                                                <a href="#">View all messages</a>
                                            </div>
                                        </div>
                                    </div> -->
                                    <!-- <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-email"></i>
                                        <span class="quantity">1</span>
                                        <div class="email-dropdown js-dropdown">
                                            <div class="email__title">
                                                <p>You have 3 New Emails</p>
                                            </div>
                                            <div class="email__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-06.jpg" alt="Cynthia Harvey" />
                                                </div>
                                                <div class="content">
                                                    <p>Meeting about new dashboard...</p>
                                                    <span>Cynthia Harvey, 3 min ago</span>
                                                </div>
                                            </div>
                                            <div class="email__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-05.jpg" alt="Cynthia Harvey" />
                                                </div>
                                                <div class="content">
                                                    <p>Meeting about new dashboard...</p>
                                                    <span>Cynthia Harvey, Yesterday</span>
                                                </div>
                                            </div>
                                            <div class="email__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-04.jpg" alt="Cynthia Harvey" />
                                                </div>
                                                <div class="content">
                                                    <p>Meeting about new dashboard...</p>
                                                    <span>Cynthia Harvey, April 12,,2018</span>
                                                </div>
                                            </div>
                                            <div class="email__footer">
                                                <a href="#">See all emails</a>
                                            </div>
                                        </div>
                                    </div> -->
                                    <!-- <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-notifications"></i>
                                        <span class="quantity">3</span>
                                        <div class="notifi-dropdown js-dropdown">
                                            <div class="notifi__title">
                                                <p>You have 3 Notifications</p>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c1 img-cir img-40">
                                                    <i class="zmdi zmdi-email-open"></i>
                                                </div>
                                                <div class="content">
                                                    <p>You got a email notification</p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c2 img-cir img-40">
                                                    <i class="zmdi zmdi-account-box"></i>
                                                </div>
                                                <div class="content">
                                                    <p>Your account has been blocked</p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c3 img-cir img-40">
                                                    <i class="zmdi zmdi-file-text"></i>
                                                </div>
                                                <div class="content">
                                                    <p>You got a new file</p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__footer">
                                                <a href="#">All notifications</a>
                                            </div>
                                        </div>
                                    </div>-->
                                </div> 
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <img src="../images/kodai_logo.png" alt="John Doe" />
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#"><?php echo $_SESSION['name'];?></a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                        <img src="../images/kodai_logo.png" alt="John Doe" />
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#"><?php echo $_SESSION['name'];?></a>
                                                    </h5>
                                                    <span class="email"><?php echo $_SESSION['email'];?></span>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__body">
                                                <!-- <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-account"></i>Account</a>
                                                </div>
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-settings"></i>Setting</a>
                                                </div> -->
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-money-box"></i>Billing</a>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__footer">
                                                <a href="logout.php">
                                                    <i class="zmdi zmdi-power"></i>Logout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1">overview</h2>
                                    <!-- <button class="au-btn au-btn-icon au-btn--blue">
                                        <i class="zmdi zmdi-plus"></i>add item</button> -->
                                </div>
                            </div>
                        </div>
                        <div class="row m-t-25">
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c1">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-account-o"></i>
                                            </div>
                                            <div class="text">
                                                <h2>10368</h2>
                                                <span>Total clients</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart1"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c2">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-shopping-cart"></i>
                                            </div>
                                            <div class="text">
                                                <h2>388,688</h2>
                                                <span>Number of packages</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart2"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c3">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-calendar-note"></i>
                                            </div>
                                            <div class="text">
                                                <h2>1,086</h2>
                                                <span>Clients enquiries</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart3"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c4">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-money"></i>
                                            </div>
                                            <div class="text">
                                                <h2>$1,060,386</h2>
                                                <span>Total number of tourist places</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart4"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            
                           
                        </div>
                        <!-- <div class="row">
                            <div class="col-lg-12">
                                <h2 class="title-1 m-b-25">Clients enquiries</h2>
                                <div class="table-responsive table--no-card m-b-40">
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
                                                <th>date</th>
                                                <th>order ID</th>
                                                <th>name</th>
                                                <th class="text-right">price</th>
                                                <th class="text-right">quantity</th>
                                                <th class="text-right">total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>2018-09-29 05:57</td>
                                                <td>100398</td>
                                                <td>iPhone X 64Gb Grey</td>
                                                <td class="text-right">$999.00</td>
                                                <td class="text-right">1</td>
                                                <td class="text-right">$999.00</td>
                                            </tr>
                                            <tr>
                                                <td>2018-09-28 01:22</td>
                                                <td>100397</td>
                                                <td>Samsung S8 Black</td>
                                                <td class="text-right">$756.00</td>
                                                <td class="text-right">1</td>
                                                <td class="text-right">$756.00</td>
                                            </tr>
                                            <tr>
                                                <td>2018-09-27 02:12</td>
                                                <td>100396</td>
                                                <td>Game Console Controller</td>
                                                <td class="text-right">$22.00</td>
                                                <td class="text-right">2</td>
                                                <td class="text-right">$44.00</td>
                                            </tr>
                                            <tr>
                                                <td>2018-09-26 23:06</td>
                                                <td>100395</td>
                                                <td>iPhone X 256Gb Black</td>
                                                <td class="text-right">$1199.00</td>
                                                <td class="text-right">1</td>
                                                <td class="text-right">$1199.00</td>
                                            </tr>
                                            <tr>
                                                <td>2018-09-25 19:03</td>
                                                <td>100393</td>
                                                <td>USB 3.0 Cable</td>
                                                <td class="text-right">$10.00</td>
                                                <td class="text-right">3</td>
                                                <td class="text-right">$30.00</td>
                                            </tr>
                                            <tr>
                                                <td>2018-09-29 05:57</td>
                                                <td>100392</td>
                                                <td>Smartwatch 4.0 LTE Wifi</td>
                                                <td class="text-right">$199.00</td>
                                                <td class="text-right">6</td>
                                                <td class="text-right">$1494.00</td>
                                            </tr>
                                            <tr>
                                                <td>2018-09-24 19:10</td>
                                                <td>100391</td>
                                                <td>Camera C430W 4k</td>
                                                <td class="text-right">$699.00</td>
                                                <td class="text-right">1</td>
                                                <td class="text-right">$699.00</td>
                                            </tr>
                                            <tr>
                                                <td>2018-09-22 00:43</td>
                                                <td>100393</td>
                                                <td>USB 3.0 Cable</td>
                                                <td class="text-right">$10.00</td>
                                                <td class="text-right">3</td>
                                                <td class="text-right">$30.00</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div> -->
                            <!-- <div class="col-lg-3">
                                <h2 class="title-1 m-b-25">tourist places</h2>
                                <div class="au-card au-card--bg-blue au-card-top-countries m-b-40">
                                    <div class="au-card-inner">
                                        <div class="table-responsive">
                                            <table class="table table-top-countries">
                                                <tbody>
                                                    <tr>
                                                        <td>United States</td>
                                                        <td class="text-right">$119,366.96</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Australia</td>
                                                        <td class="text-right">$70,261.65</td>
                                                    </tr>
                                                    <tr>
                                                        <td>United Kingdom</td>
                                                        <td class="text-right">$46,399.22</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Turkey</td>
                                                        <td class="text-right">$35,364.90</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Germany</td>
                                                        <td class="text-right">$20,366.96</td>
                                                    </tr>
                                                    <tr>
                                                        <td>France</td>
                                                        <td class="text-right">$10,366.96</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Australia</td>
                                                        <td class="text-right">$5,366.96</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Italy</td>
                                                        <td class="text-right">$1639.32</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                        <div class="row" id="package">
                            <div class="col-lg-12">
                                <div class="au-card au-card--no-shadow au-card--no-pad m-b-40">
                                    <div class="au-card-title" style="background-image:url('images/bg-title-01.jpg');">
                                        <div class="bg-overlay bg-overlay--blue"></div>
                                        <h3>
                                            <i class="zmdi zmdi-account-calendar"></i>Add Tours Packages</h3>
                                        <button class="au-btn-plus">
                                            <i class="">Tours</i>
                                        </button>
                                    </div>
                                    <div class="au-task js-list-load">
                                        <div class="au-task__title">
                                            <p>Add the tour packages to website</p>
                                        </div>
                                        <div class="au-task-list js-scrollbar3">
                                            <div class="au-task__item au-task__item--danger">
                                                 <div class="card">
                                    <div class="card-header">
                                        <strong>Tours</strong>&nbsp;Packages
                                    </div>
                                    <div class="card-body card-block">
                                    <?php if (isset($_SESSION['message2']) && !empty($_SESSION['message2'])) { ?>
                                            <div  class="container alert alert-success" role="alert"><?php echo $_SESSION['message2']; ?></div>
                                            <?php
                                            unset($_SESSION['message2']);
                                        }
                                        ?>
                                        <form  action="uploadpackage.php" method="post" enctype="multipart/form-data">
                                            <div class="form-group">
                                                <div class="col col-md-3">
                                                    <label for="hf-email" class=" form-control-label">Package Name</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                              <input type="text" id="packagename" value="" name="packagename" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col col-md-3">
                                                    <label for="hf-email" class="form-control-label">Number of Days and Nights</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                              <input type="text" id="noofdays" value="" name="noofdays" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col col-md-3">
                                                    <label for="hf-email" class=" form-control-label">Price</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                              <input type="text" id="price" onkeypress="return onlyNumberKey(event)" value="" name="price" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col col-md-3">
                                                    <label for="hf-email" class=" form-control-label">Number of person</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                              <input type="text" id="numberofperson" onkeypress="return onlyNumberKey(event)" value="" name="numberofperson" class="form-control">
                                                </div>
                                            </div>
                                            <div class=" form-group">
                                                <div class="col col-md-3">
                                                    <label for="hf-password" class=" form-control-label">Litnerary</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                <textarea  id="editor2" rows="3" placeholder="" class="form-control" name="litnerary" ></textarea>

                                                </div>   
                                            </div>
                                            <div class=" form-group">
                                                <div class="col col-md-3">
                                                    <label for="hf-password" class=" form-control-label">Inclusion</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                <textarea  id="editor3" rows="3" placeholder="" class="form-control" name="inclusion" ></textarea>

                                                </div>   
                                            </div>
                                            <div class=" form-group">
                                                <div class="col col-md-3">
                                                    <label for="hf-password" class=" form-control-label">Exclusion</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                <textarea  id="editor4" rows="3" placeholder="" class="form-control" name="exclusion" ></textarea>

                                                </div>   
                                            </div>
                                            <div class=" form-group">
                                                <div class="col col-md-3">
                                                    <label for="hf-password" class=" form-control-label">Terms & conditions</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                <textarea  id="editor5" rows="3" placeholder="" class="form-control" name="terms&conditions" ></textarea>

                                                </div>   
                                            </div>

                                            <div class="form-group">
                                                <div class="col col-md-3">
                                               
                                       <img id="blah" style="width:300px;display:none;" src="#" alt="your image" />
                                            <label for="company" class="form-control-label">Image</label>
    <input type='file' name="fileToUpload1" onchange="readURL(this);" />
                                            </div>

                                            <br>
                                            <input type="submit"  name="save1" class="form-control btn btn-info" value="Add Packages">
                                        </form>
                                    </div>
                                   
                                </div>
                                            </div>
                                        <div class="au-task__footer">
                                            <!-- <button class="au-btn au-btn-load js-load-btn">load more</button> -->
                                        </div>
                                    </div>
                                </div>
                            </div>



                        </div>
                    
                    </div>
                    
                </div>
                <div class="row" id="blog">
                            <div class="col-lg-12">
                                <div class="au-card au-card--no-shadow au-card--no-pad m-b-40">
                                    <div class="au-card-title" style="background-image:url('images/bg-title-01.jpg');">
                                        <div class="bg-overlay bg-overlay--blue"></div>
                                        <h3>
                                            <i class="zmdi zmdi-account-calendar"></i>Post Blog</h3>
                                        <button class="au-btn-plus">
                                            <i class="">Blog</i>
                                        </button>
                                    </div>
                                    <div class="au-task js-list-load">
                                        <div class="au-task__title">
                                            <p>Post Blog to website</p>
                                        </div>
                                        <div class="au-task-list js-scrollbar3">
                                            <div class="au-task__item au-task__item--danger">
                                                 <div class="card">
                                    <div class="card-header">
                                        <strong>Blog</strong>&nbsp;Post
                                    </div>
                                    <div class="card-body card-block">
                                    <?php if (isset($_SESSION['message3']) && !empty($_SESSION['message3'])) { ?>
                                            <div  class="container alert alert-success" role="alert"><?php echo $_SESSION['message3']; ?></div>
                                            <?php
                                            unset($_SESSION['message3']);
                                        }
                                        ?>
                                        <form  action="postblog.php" method="post" enctype="multipart/form-data">
                                            <div class="form-group">
                                                <div class="col col-md-3">
                                                    <label for="hf-email" class=" form-control-label">Title</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                              <input type="text" value="" name="title" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col col-md-3">
                                               
                                       <img id="blah1" style="width:300px;display:none;" src="#" alt="your image" />
                                            <label for="company" class="form-control-label">Image</label>
    <input type='file' name="fileToUpload2" onchange="readURL1(this);" />
                                            </div>
                                            <div class=" form-group">
                                                <div class="col col-md-3">
                                                    <label for="hf-password" class=" form-control-label">Description</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                <textarea  id="editor1" rows="3" placeholder="" class="form-control" name="message" ></textarea>

                                                </div>
                  
                                              
                                            </div>
                                            <br>
                                            <input type="submit"  name="save2" class="form-control btn btn-info" value="Post Blog">
                                        </form>
                                    </div>
                                   
                                </div>
                                            </div>
                                        <div class="au-task__footer">
                                            <!-- <button class="au-btn au-btn-load js-load-btn">load more</button> -->
                                        </div>
                                    </div>
                                </div>
                            </div>



                        </div>
                     
                    </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->

            <div class="row" id="Vehicles">
                            <div class="col-lg-12">
                                <div class="au-card au-card--no-shadow au-card--no-pad m-b-40">
                                    <div class="au-card-title" style="background-image:url('images/bg-title-01.jpg');">
                                        <div class="bg-overlay bg-overlay--blue"></div>
                                        <h3>
                                        <i class="zmdi zmdi-bus"></i>Add Vehicles</h3>
                                        <!-- <button class="au-btn-plus">
                                            <i class="">Blog</i>
                                        </button> -->
                                    </div>
                                    <div class="au-task js-list-load">
                                        <div class="au-task__title">
                                            <p>Vehicles</p>
                                        </div>
                                        <div class="au-task-list js-scrollbar3">
                                            <div class="au-task__item au-task__item--danger">
                                                 <div class="card">
                                    <div class="card-header">
                                        <strong>Vehicles</strong>&nbsp;
                                    </div>
                                    <div class="card-body card-block">
                                    <?php if (isset($_SESSION['message5']) && !empty($_SESSION['message5'])) { ?>
                                            <div  class="container alert alert-success" role="alert"><?php echo $_SESSION['message5']; ?></div>
                                            <?php
                                            unset($_SESSION['message5']);
                                        }
                                        ?>
                                        <form  action="addvechile.php" method="post" enctype="multipart/form-data">
                                            <div class="form-group">
                                                <div class="col col-md-3">
                                                    <label for="hf-email" class=" form-control-label">Pickup Place</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                              <input type="text" value="" name="pickupplace" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col col-md-3">
                                                    <label for="hf-email" class=" form-control-label">Drop Place</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                              <input type="text" value="" name="dropplace" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col col-md-3">
                                                    <label for="hf-email" class=" form-control-label">Distance in KM</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                              <input type="number" value="" name="distance" class="form-control" placeholder="ex:- 24" >
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col col-md-3">
                                                    <label for="hf-email" class=" form-control-label">Duration</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                              <input type="text" value="" placeholder="ex:- 2h45m" name="duration" class="form-control">
                                                </div>
                                            </div>
                                           <div class="form-group">
                                                <div class="col col-md-3">
                                                    <label for="hf-email" class=" form-control-label">Indigo Price</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                              <input type="number" value=""  name="Indigo" class="form-control">
                                                </div>
                                            </div>
                                           <div class="form-group">
                                                <div class="col col-md-3">
                                                    <label for="hf-email" class=" form-control-label">Swift Dzire Price</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                              <input type="number" value=""  name="Swift" class="form-control">
                                                </div>
                                            </div>
                                           <div class="form-group">
                                                <div class="col col-md-3">
                                                    <label for="hf-email" class=" form-control-label">Etios Price</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                              <input type="number" value=""  name="Etios" class="form-control">
                                                </div>
                                            </div>
                                           <div class="form-group">
                                                <div class="col col-md-3">
                                                    <label for="hf-email" class=" form-control-label"> Tavera Price</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                              <input type="number" value=""  name="Tavera" class="form-control">
                                                </div>
                                            </div>
                                           <div class="form-group">
                                                <div class="col col-md-3">
                                                    <label for="hf-email" class=" form-control-label">Innova Price</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                              <input type="number" value=""  name="Innova" class="form-control">
                                                </div>
                                            </div>
                                           <div class="form-group">
                                                <div class="col col-md-3">
                                                    <label for="hf-email" class=" form-control-label">Tempo Traveller Price</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                              <input type="number" value=""  name="Tempo" class="form-control">
                                                </div>
                                            </div>

                                            <div class=" form-group">
                                                <div class="col col-md-3">
                                                    <label for="hf-password" class=" form-control-label">Description</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                <textarea  id="editor6" rows="3" placeholder="" class="form-control" name="description" ></textarea>

                                                </div>
                  
                                              
                                            </div>
                                            <br>
                                            <input type="submit"  name="save5" class="form-control btn btn-info" value="Add Vehicle">
                                        </form>
                                    </div>
                                   
                                </div>
                                            </div>
                                        <div class="au-task__footer">
                                            <!-- <button class="au-btn au-btn-load js-load-btn">load more</button> -->
                                        </div>
                                    </div>
                                </div>
                            </div>



                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    Copyright &copy;
                                    <script>document.write(new Date().getFullYear());</script> All rights reserved | Rats
                                    Technologies
                                </div>
                            </div>
                        </div>
                    </div>
            </div>


            <!-- end of vechiles -->
        </div>

    </div>


    <script>
                        CKEDITOR.replace( 'editor1' );
                        CKEDITOR.replace( 'editor2' );
                        CKEDITOR.replace( 'editor3' );
                        CKEDITOR.replace( 'editor4' );
                        CKEDITOR.replace( 'editor5' );
                        CKEDITOR.replace( 'editor6' );
                </script>
    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>
<script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#blah')
                    .attr('src', e.target.result).show();
              
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
<script>
    function readURL1(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#blah1')
                    .attr('src', e.target.result).show();
              
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
</script>

<script> 
    function onlyNumberKey(evt) { 
          
        // Only ASCII charactar in that range allowed 
        var ASCIICode = (evt.which) ? evt.which : evt.keyCode 
        if (ASCIICode > 31 && (ASCIICode < 48 || ASCIICode > 57)) 
            return false; 
        return true; 
    } 
    </script>
</body>

</html>
<!-- end document-->
