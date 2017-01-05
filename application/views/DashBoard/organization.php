<div class="content-wrapper">
<!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
          Organization List
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
          <button class="btn btn-success" onclick="add_organization()"><i class="glyphicon glyphicon-plus"></i> Add Organization</button>
          <br><br>
              <table id="table" class="table table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                  <tr>
                    <th>Org Name</th>
                    <th>Slug</th>
                    <th style="width:125px;">Action</th>
                  </tr>
                </thead>
                <tbody>
                </tbody>

                <tfoot>
                  <tr>
                    <th>Org Name</th>
                    <th>Slug</th>
                    <th>Action</th>
                  </tr>
                </tfoot>
              </table>        
              <!-- Bootstrap modal -->
              <div class="modal fade" id="modal_form" role="dialog">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h3 class="modal-title">organization</h3>
                  </div>
                  <div class="modal-body form">
                    <form action="#" id="form" class="form-horizontal">
                      <input type="hidden" value="" name="id"/> 
                      <div class="form-body">
                        <div class="form-group">
                          <label class="control-label col-md-3">Name</label>
                          <div class="col-md-9">
                            <input name="name" placeholder="Name" class="form-control" type="text" required>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-md-3">slug</label>
                          <div class="col-md-9">
                            <input name="slug" placeholder="slug" class="form-control" type="text" readonly="readonly">
                          </div>
                        </div>
                      </div>
                    </form>
                      </div>
                      <div class="modal-footer">
                        <button type="button" id="btnSave" onclick="save()" class="btn btn-primary">Save</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                      </div>
                    </div><!-- /.modal-content -->
                  </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->
              <!-- End Bootstrap modal -->        
        </div><!-- /.box-body -->
      
      </div><!-- /.box -->

    </section><!-- /.content -->
</div><!-- /.content-wrapper -->
<script src="<?php echo base_url('assets/plugins/jQuery/jQuery-2.1.4.min.js')?>"></script>
<script src="<?php echo base_url('assets/bootstrap/js/jquery.dataTables.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/bootstrap/js/dataTables.bootstrap.js')?>"></script>
<script type="text/javascript">

  var save_method; //for save method string
  var table;
  $(document).ready(function() {
    table = $('#table').DataTable({ 
      
      "processing": true, //Feature control the processing indicator.
      "serverSide": true, //Feature control DataTables' server-side processing mode.
      
      // Load data for the table's content from an Ajax source
      "ajax": {
          "url": "<?php echo site_url('organization/ajax_list')?>",
          "type": "POST"
      },

      //Set column definition initialisation properties.
      "columnDefs": [
      { 
        "targets": [ -1 ], //last column
        "orderable": false, //set not orderable
      },
      ],

    });
  });

  function add_organization()
  {
    save_method = 'add';
    $('#form')[0].reset(); // reset form on modals
    $('#modal_form').modal('show'); // show bootstrap modal
    $('.modal-title').text('Add Organization'); // Set Title to Bootstrap modal title
  }

  function edit_organization(id)
  {
    save_method = 'update';
    $('#form')[0].reset(); // reset form on modals

    //Ajax Load data from ajax
    $.ajax({
      url : "<?php echo site_url('organization/ajax_edit/')?>/" + id,
      type: "GET",
      dataType: "JSON",
      success: function(data)
      {
         
          $('[name="id"]').val(data.id);
          $('[name="name"]').val(data.name);
          $('[name="slug"]').val(data.slug);
          
          $('#modal_form').modal('show'); // show bootstrap modal when complete loaded
          $('.modal-title').text('Edit organization'); // Set title to Bootstrap modal title
          
      },
      errorz: function (jqXHR, textStatus, errorThrown)
      {
          alert('Error get data from ajax');
      }
  });
  }

  function reload_table()
  {
    table.ajax.reload(null,false); //reload datatable ajax 
  }

  function save()
  {
    var url;
    if(save_method == 'add') 
    {
        url = "<?php echo site_url('organization/ajax_add')?>";
    }
    else
    {
      url = "<?php echo site_url('organization/ajax_update')?>";
    }

     // ajax adding data to database
        $.ajax({
          url : url,
          type: "POST",
          data: $('#form').serialize(),
          dataType: "JSON",
          success: function(data)
          {
             //if success close modal and reload ajax table
             $('#modal_form').modal('hide');
             reload_table();
          },
          error: function (jqXHR, textStatus, errorThrown)
          {
              alert('Error adding / update data');
          }
      });
  }

  function delete_organization(id)
  {
    if(confirm('Are you sure delete this data?'))
    {
      // ajax delete data to database
        $.ajax({
          url : "<?php echo site_url('organization/ajax_delete')?>/"+id,
          type: "POST",
          dataType: "JSON",
          success: function(data)
          {
             //if success reload ajax table
             $('#modal_form').modal('hide');
             reload_table();
          },
          error: function (jqXHR, textStatus, errorThrown)
          {
              alert('Error adding / update data');
          }
      });
       
    }
  }

</script>

