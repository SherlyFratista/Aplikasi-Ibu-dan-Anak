
<body class="hold-transition skin-blue fixed sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="../home.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>IdA</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Ibu dan Anak</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
       
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="../img/user2-160x160.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs">  <?php echo $name;?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="../img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
                <?php echo $name;?>
                 
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
              
                <div class="pull-right">
                  <a href="../logout.php" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
 <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="../img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p> <?php echo $name;?></p>
        </div>
      </div>
   
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
       
        <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>Admin</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="lihatadmin.php"><i class="fa fa-circle-o"></i> Lihat Admin</a></li>
            <li ><a href="tambahadmin.php"><i class="fa fa-circle-o"></i> Tambah Admin</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>Member</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
          </a>
          <ul class="treeview-menu">
            <li ><a href="lihatmember.php"><i class="fa fa-circle-o"></i> Lihat Member</a></li>
            <li ><a href="tambahmember.php"><i class="fa fa-circle-o"></i> Tambah Member</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>Feedback</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
          </a>
          <ul class="treeview-menu">
            <li ><a href="lihatfeedback.php"><i class="fa fa-circle-o"></i> Lihat Feedback</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>Artikel Informasi</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
          </a>
          <ul class="treeview-menu">
          <li ><a href="lihatartikelinformasi.php"><i class="fa fa-circle-o"></i> Lihat Artikel Informasi</a></li>
           <li ><a href="tambahartikelinformasi.php"><i class="fa fa-circle-o"></i> Tambah Artikel Informasi</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>Artikel Info Anak</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
          </a>
          <ul class="treeview-menu">
          <li ><a href="lihatartikeltumbuhkembanganak.php"><i class="fa fa-circle-o"></i> Lihat Artikel Info Anak</a></li>
            <li ><a href="tambahartikeltumbuhkembanganak.php"><i class="fa fa-circle-o"></i> Tambah Artikel Info Anak</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>Darurat</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
          </a>
          <ul class="treeview-menu">
          <li ><a href="lihatdarurat.php"><i class="fa fa-circle-o"></i> Lihat Data Darurat</a></li>
            <li ><a href="tambahdarurat.php"><i class="fa fa-circle-o"></i> Tambah Data Darurat</a></li>
          </ul>
        </li>
      </ul>
    </section>