<?php if ($this->session->flashdata('error')) { ?>
    <div class="alert bg-danger" role="alert"> <?= $this->session->flashdata('error') ?> </div>
<?php } ?>
<?php if ($this->session->flashdata('success')) { ?>
    <div class="alert bg-success" role="alert"> <?= $this->session->flashdata('success') ?> </div>
<?php } ?>
<header class="main-header">
        <!-- Logo -->
        <a class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><i class="fa fa-home"></i></span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>Dashboard</b></span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <li class="">
                <a href="<?php echo base_url() ?>" >
                  <i class="fa fa-home"></i>
                  <span class="hidden-xs">Visit Site</span>
                </a>
              </li>
              <li class="">
                <a href="<?php echo site_url(); ?>/Authentication/logout" class="fa fa-power-off"> Logout</a>
              </li>
            </ul>
          </div>
        </nav>
      </header>

      <!-- =============================================== -->

      <!-- Left side column. contains the sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
                <img src="<?php echo base_url() ?>assets/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <p>
                  <?php echo $this->session->userdata('userName'); ?>
              </p>
              
              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>
          <!-- search form -->
          <form action="#" method="get" class="sidebar-form">
            <!-- <div class="input-group">
              <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div> -->
          </form>
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li>
            	<a href="<?php echo site_url() ?>/Dashboard"><i class="fa fa-dashboard"></i> <span> Dashboard </span></a>
            </li> 
            <li>
            	<a href="<?php echo site_url() ?>/DashBoard/profile"><i class="fa fa-dashboard"></i> <span> Profile </span></a>
            </li>
            <?php if ($this->session->userdata('role') == 'admin'): ?>
            <li>
              <a href="<?php echo site_url() ?>/DashBoard/orgPage"><i class="fa fa-dashboard"></i> <span> Org Page </span></a>
            </li>
            <?php endif ?>           
            <li class="treeview">
              <a href="#">
                <i class="fa fa-dashboard"></i> <span> Accounts </span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
              	<li>
              		<a href="<?php echo site_url(); ?>/DashBoard/accountList"><i class="fa fa-circle-o"></i> <span> Account List </span></a>
                </li>
                <li>
              		<a href="<?php echo site_url() ?>/DashBoard/addAccount"><i class="fa fa-circle-o"></i> <span> Add Account </span></a>
                </li>
              </ul>
            </li>
            <?php if ($this->session->userdata('role') == 'systemadmin'): ?>
            <li>
              <a href="<?php echo site_url() ?>/DashBoard/organization"><i class="fa fa-dashboard"></i> <span> Oraganization </span></a>
            </li> 
            <li class="treeview">
              <a href="#">
                <i class="fa fa-dashboard"></i> <span> Page </span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
              	<li>
              		<a href="<?php echo site_url(); ?>/DashBoard/page"><i class="fa fa-circle-o"></i> <span> Page List </span></a>
                </li>
                <li>
              		<a href="<?php echo site_url() ?>/DashBoard/addPage"><i class="fa fa-circle-o"></i> <span> Add Page </span></a>
                </li>
                <li>
                  <a href="<?php echo site_url() ?>/DashBoard/homeContent"><i class="fa fa-circle-o"></i> <span> Home Page </span></a>
                </li>
              </ul>
            </li>
            <?php endif ?>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>
