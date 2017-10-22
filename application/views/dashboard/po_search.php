<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gentelella Alela! | </title>

    <!-- Bootstrap -->
    <link href="<?=base_url();?>assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?=base_url();?>assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?=base_url();?>assets/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="<?=base_url();?>assets/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="<?=base_url();?>assets/build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <?php include_once('left_navbar.php');?>

        <!-- top navigation -->
        <?php include_once('top_navbar.php');?>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h1>Search Purchase Order </h1>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <?php if(!is_null($this->session->flashdata('message'))): ?>
                      <div class="alert alert-success alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                        <strong> <?=$this->session->flashdata('message');?> </strong>
                      </div>
                    <?php endif; ?>
                    <form class="form-horizontal form-label-left" action="" method="POST" novalidate>
                      <div class="row">
                        <div class="item col-xs-offset-1 col-md-3 col-sm-3 col-xs-12">
                          <label class="control-label" for="id">ID </label>
                          <input id="id" class="form-control" name="id" type="text" value="<?php if(isset($id)): ?><?=$id;?><?php endif; ?>">
                        </div>
                      </div>
                      <div class="row">
                        <div class="item col-xs-offset-1 col-md-3 col-sm-3 col-xs-12">
                          <label class="control-label" for="po_no">Cust PO No. </label>
                          <input id="po_no" class="form-control" name="po_no" type="text" value="<?php if(isset($po_no)): ?><?=$po_no;?><?php endif; ?>">
                        </div>
                        <div class="item col-md-3 col-sm-3 col-xs-12">
                          <label class="control-label" for="po_date">PO Date </label>
                          <fieldset>
                            <input type="text" class="form-control has-feedback-left" id="po_date" name="po_date" aria-describedby="inputSuccess2Status2" value="<?php if(isset($po_date)): ?><?=$po_date;?><?php endif; ?>">
                            <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true" style="top: 25px;"></span>
                            <span id="inputSuccess2Status2" class="sr-only">(success)</span>
                          </fieldset>
                        </div>
                      </div>
                      <div class="row">
                        <div class="item col-xs-offset-1 col-md-3 col-sm-3 col-xs-12">
                          <label class="control-label" for="project_name">Project Name </label>
                          <input id="project_name" class="form-control" name="project_name" type="text" value="<?php if(isset($project_name)): ?><?=$project_name;?><?php endif; ?>">
                        </div>
                        <div class="item col-md-3 col-sm-3 col-xs-12">
                          <label class="control-label" for="customer">Customer </label>
                          <div>
                          <input id="customer" class="form-control" name="customer" type="text" value="<?php if(isset($customer)): ?><?=$customer;?><?php endif; ?>">
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="item col-xs-offset-1 col-md-4 col-sm-4 col-xs-12">
                          <label class="control-label" for="area">Area </label>
                          <input id="area" class="form-control" name="area" type="text" value="<?php if(isset($area)): ?><?=$area;?><?php endif; ?>">
                        </div>
                      </div>
                      <div class="row">
                        <div class="item col-xs-offset-1 col-md-2 col-sm-2 col-xs-12">
                          <label class="control-label" for="site_code">Site Code </label>
                          <input id="site_code" class="form-control" name="site_code" type="text" value="<?php if(isset($site_code)): ?><?=$site_code;?><?php endif; ?>">
                        </div>
                        <div class="item col-xs-offset-1 col-md-3 col-sm-3 col-xs-12">
                          <label class="control-label" for="site_name">Site Name </label>
                          <input id="site_name" class="form-control" name="site_name" type="text" value="<?php if(isset($site_name)): ?><?=$site_name;?><?php endif; ?>">
                        </div>
                      </div>
                      
                      <div class="ln_solid col-md-12 col-sm-12 col-xs-12"></div>
                      
                      <div class="row">
                        <div class="item">
                          <div class="col-md-offset-4 col-md-6 ">
                            <button id="send" type="submit" class="btn btn-success">Search</button>
                          </div>
                        </div>
                      </div>
                      
                    </form>

                    <div class="ln_solid col-md-12 col-sm-12 col-xs-12"></div>

                    <div class="row">
                      <div class="col-sm-12">
                        <div class="card-box table-responsive">

                          <table id="datatable-keytable" class="table table-striped table-bordered">
                            <thead>
                              <tr>
                                <th>ID</th>
                                <th>PO No.</th>
                                <th>Customer</th>
                                <th>Project</th>
                                <th>PO date</th>
                                <th>Site</th>
                                <th>PO value</th>
                                <th></th>
                              </tr>
                            </thead>
                            <tbody>
                              <?php foreach($polist as $po): ?> 
                              <tr>
                                <td><?=$po->id; ?></td>
                                <td><?=$po->po_no; ?></td>
                                <td><?=$po->customer; ?></td>
                                <td><?=$po->project_name; ?></td>
                                <td><?=$po->po_date; ?></td>
                                <td><?=$po->site_code; ?> - <?=$po->site_name; ?></td>
                                <td class="po_value"><?=$po->po_value; ?></td>
                                <td><button id="view" type="submit" class="btn btn-success">View</button></td>
                              </tr>
                              <?php endforeach; ?>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="<?=base_url();?>assets/vendors/jquery/dist/jquery.min.js"></script>
    <!-- jQuery Number-->
    <script src="<?=base_url();?>assets/vendors/jquery.number/jquery.number.min.js"></script>
    <!-- Bootstrap -->
    <script src="<?=base_url();?>assets/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="<?=base_url();?>assets/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="<?=base_url();?>assets/vendors/nprogress/nprogress.js"></script>
    <!-- validator -->
    <script src="<?=base_url();?>assets/vendors/validator/validator.js"></script>
    <!-- jquery.inputmask -->
    <script src="<?=base_url();?>assets/vendors/jquery.inputmask/dist/min/jquery.inputmask.bundle.min.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="<?=base_url();?>assets/vendors/moment/min/moment.min.js"></script>
    <script src="<?=base_url();?>assets/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- jQuery-Autocomplete -->
    <script src="<?=base_url();?>assets/vendors/jQuery-Autocomplete/jquery.autocomplete.min.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="<?=base_url();?>assets/build/js/custom.min.js"></script>
    <script type="text/javascript">
      $('#po_date').daterangepicker({
        singleClasses: "picker_3"
      }, function(start, end, label) {
        console.log(start.toISOString(), end.toISOString(), label);
      });
      $("#unit_price").change(function() {
        $("#po_value").val($("#unit_price").val() * $("#quantity").val());
        $("#vat").val(Math.round($("#unit_price").val() * $("#quantity").val() * 0.1));
      });
      $("#quantity").change(function() {
        $("#po_value").val($("#unit_price").val() * $("#quantity").val());
        $("#vat").val(Math.round($("#unit_price").val() * $("#quantity").val() * 0.1));
      });
      $(document).ready(function(){
        $('#po_value').number( true, 2 );
        $('#vat').number( true, 2 );
        $('#unit_price').number( true, 2 );

        var customer_list = [<?php if(!is_null($customer_list)): ?><?php foreach($customer_list as $customer): ?> 
          { value: '<?=$customer->customer;?>', data: '<?=$customer->customer;?>' },<?php endforeach; ?><?php endif; ?>
        ];
        $('#customer').autocomplete({
          lookup: customer_list,
        });
        var project_list = [<?php if(!is_null($project_list)): ?><?php foreach($project_list as $project): ?> 
          { value: '<?=$project->project_name;?>', data: '<?=$project->project_name;?>' },<?php endforeach; ?><?php endif; ?>
        ];

        $('#project_name').autocomplete({
          lookup: project_list,
        });
      }); 
    </script>
  
  </body>
</html>