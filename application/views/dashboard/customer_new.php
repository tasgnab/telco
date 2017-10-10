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
    <!-- Datatables -->
    <link href="<?=base_url();?>assets/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="<?=base_url();?>assets/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="<?=base_url();?>assets/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="<?=base_url();?>assets/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="<?=base_url();?>assets/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">

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
                  <div class="x_content">
                    <form class="form-horizontal form-label-left" novalidate>
                      <span class="section">Insert New Customer Data</span>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="cust_name">Customer Name <span class="required">*</span></label>
                        <div class="col-md-2 col-sm-2 col-xs-12">
                          <input id="cust_name" class="form-control col-md-7 col-xs-12" name="cust_name" required="required" type="text">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="cust_address">Customer Addres <span class="required">*</span></label>
                        <div class="col-md-3 col-sm-3 col-xs-12">
                          <textarea id="cust_address" class="form-control col-md-7 col-xs-12" name="cust_address" required="required" type="text" rows="3"></textarea>
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="cust_phone">Customer Phone <span class="required">*</span></label>
                        <div class="col-md-2 col-sm-2 col-xs-12">
                          <input id="cust_phone" class="form-control col-md-7 col-xs-12" name="cust_phone" required="required" type="text" data-inputmask="'mask': '999-99999999'">
                        </div>
                      </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                          <button type="submit" class="btn btn-primary">Cancel</button>
                          <button id="send" type="submit" class="btn btn-success">Submit</button>
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
    <!-- Datatables -->
    <script src="<?=base_url();?>assets/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="<?=base_url();?>assets/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="<?=base_url();?>assets/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="<?=base_url();?>assets/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="<?=base_url();?>assets/vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="<?=base_url();?>assets/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="<?=base_url();?>assets/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="<?=base_url();?>assets/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="<?=base_url();?>assets/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="<?=base_url();?>assets/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?=base_url();?>assets/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="<?=base_url();?>assets/vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
    <script src="<?=base_url();?>assets/vendors/jszip/dist/jszip.min.js"></script>
    <script src="<?=base_url();?>assets/vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="<?=base_url();?>assets/vendors/pdfmake/build/vfs_fonts.js"></script>
    <script type="text/javascript">
      $('#po_date').daterangepicker({
        singleDatePicker: true,
        singleClasses: "picker_3"
      }, function(start, end, label) {
        console.log(start.toISOString(), end.toISOString(), label);
      });
      $('#expired_date').daterangepicker({
        singleDatePicker: true,
        singleClasses: "picker_3"
      }, function(start, end, label) {
        console.log(start.toISOString(), end.toISOString(), label);
      });
       $('#printed_date').daterangepicker({
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