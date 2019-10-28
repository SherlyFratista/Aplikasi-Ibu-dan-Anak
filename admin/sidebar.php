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
       
        <li class="treeview active">
          <a href="#">
            <i class="fa fa-table"></i> <span>User</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="lihatadmin.php"><i class="fa fa-circle-o"></i> Lihat Admin</a></li>
            <li class="active"><a href="lihatmember.php"><i class="fa fa-circle-o"></i> Lihat Member</a></li>
          </ul>
        </li>
      </ul>
    </section>