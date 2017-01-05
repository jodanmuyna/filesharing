<div class="content-wrapper">
<!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
          Dashboard
          <small></small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        </ol>
     </section>
    
    <!-- Main content -->
    <section class="content">
    <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
           <h3 class="box-title"></h3>
        </div>
        <div class="box-body">
        	<h3>
            Welcome
            <?php echo $this->session->userdata('role') ?>
            </h3>
        </div><!-- /.box-body -->
        <div class="box-footer">
        </div><!-- /.box-footer-->
      </div><!-- /.box -->

    </section><!-- /.content -->
    
</div><!-- /.content-wrapper -->