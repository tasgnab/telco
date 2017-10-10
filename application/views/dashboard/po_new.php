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
                    <h1>Purchase Order <small><i>* wajib diisi </i></small></h1>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <form class="form-horizontal form-label-left" action="<?=base_url();?>po/add" novalidate>

                      <h3 class="col-md-12 col-sm-12 col-xs-12">Project Info </h3>
                      <div class="row">
                        <div class="item col-xs-offset-1 col-md-3 col-sm-3 col-xs-12">
                          <label class="control-label" for="po_no">Cust PO No. </label>
                          <input id="po_no" class="form-control" name="po_no" type="text">
                        </div>
                        <div class="item col-md-2 col-sm-2 col-xs-12">
                          <label class="control-label" for="po_date">PO Date <span class="required">*</span></label>
                          <fieldset>
                            <input type="text" class="form-control has-feedback-left" id="po_date" name="po_date" aria-describedby="inputSuccess2Status2">
                            <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true" style="top: 25px;"></span>
                            <span id="inputSuccess2Status2" class="sr-only">(success)</span>
                          </fieldset>
                        </div>
                      </div>
                      <div class="row">
                        <div class="item col-xs-offset-1 col-md-3 col-sm-3 col-xs-12">
                          <label class="control-label" for="project_name">Project Name <span class="required">*</span></label>
                          <input id="project_name" class="form-control" name="project_name" required="required" type="text">
                        </div>
                        <div class="item col-md-3 col-sm-3 col-xs-12">
                          <label class="control-label" for="customer">Customer <span class="required">*</span></label>
                          <div>
                          <input id="customer" class="form-control" name="customer" required="required" type="text">
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="item col-xs-offset-1 col-md-4 col-sm-4 col-xs-12">
                          <label class="control-label" for="area">Area <span class="required">*</span></label>
                          <input id="area" class="form-control" name="area" required="required" type="text">
                        </div>
                      </div>
                      <div class="row">
                        <div class="item col-xs-offset-1 col-md-2 col-sm-2 col-xs-12">
                          <label class="control-label" for="site_code">Site Code <span class="required">*</span></label>
                          <input id="site_code" class="form-control" name="site_code" required="required" type="text">
                        </div>
                        <div class="item col-xs-offset-1 col-md-3 col-sm-3 col-xs-12">
                          <label class="control-label" for="site_name">Site Name <span class="required">*</span></label>
                          <input id="site_name" class="form-control" name="site_name" required="required" type="text">
                        </div>
                      </div>
                      
                      <div class="ln_solid col-md-12 col-sm-12 col-xs-12"></div>
                      <h3 class="col-md-12 col-sm-12 col-xs-12">Item Information </h3>
                      <div class="row">
                        <div class="item col-xs-offset-1 col-md-4 col-sm-4 col-xs-12">
                          <label class="control-label" for="item">Item <span class="required">*</span></label>
                          <input id="item" class="form-control" name="item" required="required" type="text">
                        </div>
                        <div class="item col-md-2 col-sm-2 col-xs-12">
                          <label class="control-label" for="unit_price">Unit Price <span class="required">*</span></label>
                          <input id="unit_price" class="form-control" name="unit_price" required="required" type="text" min=1>
                        </div>
                        <div class="item col-md-1 col-sm-1 col-xs-12">
                          <label class="control-label" for="quantity">Quantity <span class="required">*</span></label>
                          <input id="quantity" class="form-control" name="quantity" required="required" type="number" min=1>
                        </div>
                        <div class="item col-md-2 col-sm-2 col-xs-12">
                          <label class="control-label" for="po_value">PO Value <span class="required">*</span></label>
                          <input id="po_value" class="form-control numbers" name="po_value" required="required" type="text" disabled="">
                        </div>
                      </div>
                      <div class="row">
                        <div class="item col-xs-offset-8 col-md-2 col-sm-2 col-xs-12">
                          <label class="control-label" for="vat">VAT <span class="required">*</span></label>
                          <input id="vat" class="form-control numbers" name="vat" required="required" type="text" disabled>
                        </div>
                      </div>
                      
                      <div class="ln_solid col-md-12 col-sm-12 col-xs-12"></div>
                      <h3 class="col-md-12 col-sm-12 col-xs-12">Work Detail </h3>
                      <div class="row">
                        <div class="item col-xs-offset-1 col-md-2 col-sm-2 col-xs-12">
                          <label class="control-label" for="start_date">Start Date <span class="required">*</span></label>
                          <fieldset>
                            <input type="text" class="form-control has-feedback-left" id="start_date" name="start_date" aria-describedby="inputSuccess2Status2">
                            <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true" style="top: 25px;"></span>
                            <span id="inputSuccess2Status2" class="sr-only">(success)</span>
                          </fieldset>
                        </div>
                        <div class="item col-md-2 col-sm-2 col-xs-12">
                          <label class="control-label" for="end_date">End Date <span class="required">*</span></label>
                          <fieldset>
                            <input type="text" class="form-control has-feedback-left" id="end_date" name="end_date" aria-describedby="inputSuccess2Status2">
                            <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true" style="top: 25px;"></span>
                            <span id="inputSuccess2Status2" class="sr-only">(success)</span>
                          </fieldset>
                        </div>
                      </div>
                      <div class="row">
                        <div class="item col-xs-offset-1 col-md-2 col-sm-2 col-xs-12">
                          <label class="control-label" for="duration">Duration <span class="required">*</span></label>
                          <input id="duration" class="form-control" name="duration" required="required" type="number" min=1 disabled>
                        </div>
                      </div>
                      <div class="row">
                        <div class="item col-xs-offset-1 col-md-5 col-sm-5 col-xs-12">
                          <label class="control-label" for="work_order">Work Order <span class="required">*</span></label>
                          <textarea id="work_order" class="form-control" name="work_order" required="required" type="text" rows="4"></textarea>
                        </div>
                      </div>

                      <div class="ln_solid col-md-12 col-sm-12 col-xs-12"></div>
                      
                      <div class="row">
                        <div class="item">
                          <div class="col-md-offset-4 col-md-6 ">
                            <button type="submit" class="btn btn-primary">Cancel</button>
                            <button id="send" type="submit" class="btn btn-success">Submit</button>
                          </div>
                        </div>
                      </div>
                      
                    </form>
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
    <!-- Custom Theme Scripts -->
    <script src="<?=base_url();?>assets/build/js/custom.min.js"></script>
    <script type="text/javascript">
      $('#po_date').daterangepicker({
        singleDatePicker: true,
        singleClasses: "picker_3"
      }, function(start, end, label) {
        console.log(start.toISOString(), end.toISOString(), label);
      });
      $('#start_date').daterangepicker({
        singleDatePicker: true,
        singleClasses: "picker_3"
      }, function(start, end, label) {
        console.log(start.toISOString(), end.toISOString(), label);
      });
      $('#end_date').daterangepicker({
        singleDatePicker: true,
        singleClasses: "picker_3"
      }, function(start, end, label) {
        console.log(start.toISOString(), end.toISOString(), label);
      });
      $("#start_date").change(function() {
        var start = new Date($('#start_date').val());
        var end = new Date($('#end_date').val());
        var diff = end-start;
        $("#duration").val(diff/86400000);
      });
      $("#end_date").change(function() {
        var start = new Date($('#start_date').val());
        var end = new Date($('#end_date').val());
        var diff = end-start;
        $("#duration").val(diff/86400000);
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
      }); 
    </script>
	
  </body>
</html>