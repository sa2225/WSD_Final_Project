<!DOCTYPE html>

<html>

  <head>

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>WSD Project - FALL2017</title>

    <meta name="description" content="">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="robots" content="all,follow">

    <!-- Bootstrap CSS-->

    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">

    <!-- Fontastic Custom icon font-->

    <link rel="stylesheet" href="css/fontastic.css">

    <!-- Font Awesome CSS-->

    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">

    <!-- Google fonts - Poppins -->

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,700">

    <!-- theme stylesheet-->

    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">

    <!-- Custom stylesheet - for your changes-->

    <link rel="stylesheet" href="css/custom.css">

    <!-- Favicon-->

    <link rel="shortcut icon" href="favicon.png">

    <!-- Tweaks for older IEs--><!--[if lt IE 9]>

        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>

        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->

  </head>

  <body>

    <div class="page home-page">

      <!-- Main Navbar-->

    <header class="header">

        <nav class="navbar">

          <!-- Search Box-->

          <div class="search-box">

            <button class="dismiss"><i class="icon-close"></i></button>

            <form id="searchForm" action="#" role="search">

              <input type="search" placeholder="What are you looking for..." class="form-control">

            </form>

          </div>

          <div class="container-fluid">

            <div class="navbar-holder d-flex align-items-center justify-content-between">

              <!-- Navbar Header-->

              <div class="navbar-header">

                <!-- Navbar Brand --><a href="#" class="navbar-brand">

                  <div class="brand-text brand-big"><span>WSD: Ultimate Tasker</span></div>

                  <div class="brand-text brand-small"><strong>UT</strong></div></a>

              </div>

              <!-- Navbar Menu -->

              <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">

                <!-- Search-->

                

                <li class="nav-item">



                 <form action="index.php?page=accounts&action=logout" method="post" id="form3" style="float:right;">

                 <li><button class="btn btn-link navbar-btn" type="submit">Logout</button></li>

                 </form>

                <!-- My Profile-->             

                 <form action="index.php?page=accounts&action=myProf" method="post" id="form4" style="float:right;">

                 <li><span class="glyphicon glyphicon-user"></span><button class="btn btn-link navbar-btn" type="submit">My Profile</button>

                 </li>

                 </form>                            

              </ul>

            </div>

          </div>

        </nav>

      </header>

      <div class="page-content d-flex align-items-stretch">

        <!-- Side Navbar -->

        <nav class="side-navbar">

          <!-- Sidebar Header-->

          <div class="sidebar-header d-flex align-items-center">

            <div class="avatar"><img src="img/avatar-1.jpg" alt="" class="img-fluid rounded-circle"></div>

            <div class="title">

              <h1 class="h4">Saniya Anand</h1>

            </div>

          </div>

          <!-- Sidebar Navidation Menus-->

          <span class="heading">Main</span>

          <div>

           <ul class="list-unstyled">

            <form action="index.php?page=tasks&action=create" method="POST" style="float:left;">

            <button class="btn btn-link navbar-btn" class="icon-interface-windows" type="submit"></i>Create Task</button>

            </form></ul>

          </div>
           

        </nav>

        <div class="content-inner">

          <!-- Page Header-->

          <header class="page-header">

            <div class="container-fluid">

              <h2 class="no-margin-bottom">Dashboard</h2>

            </div>

          </header>

          <!-- Dashboard Counts Section-->

                         

          <!-- Dashboard Header Section    -->

          <section class="dashboard-header">

            <div class="container-fluid">

              <div class="row">

                         

         <?php

print utility\htmlTable::genarateTableFromMultiArray($data);

?>

                     

                

          <!-- Page Footer-->

          

        </div>

      </div>

    </div>

    <div id="style-switch" class="collapse">

      <h4 class="mb-3">Select theme colour</h4>

      <form class="mb-3">

        <select name="colour" id="colour" class="form-control">

          <option value="">select colour variant</option>

          <option value="default">violet</option>

          <option value="pink">pink</option>

          <option value="red">red</option>

          <option value="green">green</option>

          <option value="sea">sea</option>

          <option value="blue">blue</option>

        </select>

      </form>

    </div>

    <!-- Javascript files-->

    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

    <script src="vendor/popper.js/umd/popper.min.js"> </script>

    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <script src="vendor/jquery.cookie/jquery.cookie.js"> </script>

    <script src="vendor/jquery-validation/jquery.validate.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>

    <script src="js/charts-home.js"></script>

    <script src="js/front.js"></script>

  </body>

</html>







<script src="js/scripts.js"></script>

</body>

</html>