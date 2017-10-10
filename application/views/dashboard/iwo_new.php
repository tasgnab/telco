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
    <link href="assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="assets/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="assets/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="assets/build/css/custom.min.css" rel="stylesheet">
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
                      <span class="section">Purchase Order</span>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="id">ID <span class="required">*</span></label>
                        <div class="col-md-2 col-sm-2 col-xs-12">
                          <input id="id" class="form-control col-md-7 col-xs-12" name="id" required="required" type="text" disabled>
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="iwo_no">No. IWO <span class="required">*</span></label>
                        <div class="col-md-2 col-sm-2 col-xs-12">
                          <input id="iwo_no" class="form-control col-md-7 col-xs-12" name="iwo_no" required="required" type="text" data-inputmask="'mask': 'IWO-9999999'">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="iwo_date">IWO Date <span class="required">*</span></label>
                        <div class="col-md-2 col-sm-2 col-xs-12">
                          <fieldset>
                            <input type="text" class="form-control has-feedback-left" id="iwo_date" name="iwo_date" aria-describedby="inputSuccess2Status2">
                            <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
                            <span id="inputSuccess2Status2" class="sr-only">(success)</span>
                          </fieldset>
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="pur_id">Purchase ID <span class="required">*</span></label>
                        <div class="col-md-2 col-sm-2 col-xs-12">
                          <input id="pur_id" class="form-control col-md-7 col-xs-12" name="pur_id" required="required" type="text" data-inputmask="'mask': '9999-99-999999'">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="po_no">No. PO <span class="required">*</span></label>
                        <div class="col-md-2 col-sm-2 col-xs-12">
                          <input id="po_no" class="form-control col-md-7 col-xs-12" name="po_no" required="required" type="text" disabled>
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="customer">Customer <span class="required">*</span></label>
                        <div class="col-md-3 col-sm-3 col-xs-12">
                          <input id="customer" class="form-control col-md-7 col-xs-12" name="customer" required="required" type="text" disabled>
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="project_name">Project Name <span class="required">*</span></label>
                        <div class="col-md-3 col-sm-3 col-xs-12">
                          <input id="project_name" class="form-control col-md-7 col-xs-12" name="project_name" required="required" type="text" disabled>
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="expired_date">Expired Date <span class="required">*</span></label>
                        <div class="col-md-2 col-sm-2 col-xs-12" disabled>
                          <fieldset>
                            <input type="text" class="form-control has-feedback-left" id="expired_date" name="expired_date" aria-describedby="inputSuccess2Status2" disabled>
                            <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
                            <span id="inputSuccess2Status2" class="sr-only">(success)</span>
                          </fieldset>
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="area">Area <span class="required">*</span></label>
                        <div class="col-md-3 col-sm-3 col-xs-12">
                          <input id="area" class="form-control col-md-7 col-xs-12" name="area" required="required" type="text" disabled>
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="site_code">Site Code <span class="required">*</span></label>
                        <div class="col-md-2 col-sm-2 col-xs-12">
                          <input id="site_code" class="form-control col-md-7 col-xs-12" name="site_code" required="required" type="text" disabled>
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="site_name">Site Name <span class="required">*</span></label>
                        <div class="col-md-3 col-sm-3 col-xs-12">
                          <input id="site_name" class="form-control col-md-7 col-xs-12" name="site_name" required="required" type="text" disabled>
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="item">Item <span class="required">*</span></label>
                        <div class="col-md-3 col-sm-3 col-xs-12">
                          <input id="item" class="form-control col-md-7 col-xs-12" name="item" required="required" type="text" disabled>
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="work_order">Work Order <span class="required">*</span></label>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                          <input id="work_order" class="form-control col-md-7 col-xs-12" name="work_order" required="required" type="text" disabled>
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="po_value">PO Value <span class="required">*</span></label>
                        <div class="col-md-2 col-sm-2 col-xs-12">
                          <input id="po_value" class="form-control col-md-7 col-xs-12 numbers" name="po_value" required="required" type="text" disabled>
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="iwo_value">IWO Value <span class="required">*</span></label>
                        <div class="col-md-2 col-sm-2 col-xs-12">
                          <input id="iwo_value" class="form-control col-md-7 col-xs-12 numbers" name="iwo_value" required="required" type="text" disabled>
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="iwo_budget">Budget IWO <span class="required">*</span></label>
                        <div class="col-md-2 col-sm-2 col-xs-12">
                          <input id="iwo_budget" class="form-control col-md-7 col-xs-12 numbers" name="iwo_budget" required="required" type="text">
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
    <script src="assets/vendors/jquery/dist/jquery.min.js"></script>
    <!-- jQuery Number-->
    <script src="assets/vendors/jquery.number/jquery.number.min.js"></script>
    <!-- Bootstrap -->
    <script src="assets/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="assets/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="assets/vendors/nprogress/nprogress.js"></script>
    <!-- validator -->
    <script src="assets/vendors/validator/validator.js"></script>
    <!-- jquery.inputmask -->
    <script src="assets/vendors/jquery.inputmask/dist/min/jquery.inputmask.bundle.min.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="assets/vendors/moment/min/moment.min.js"></script>
    <script src="assets/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="assets/build/js/custom.min.js"></script>
    <script type="text/javascript">
      $('#iwo_date').daterangepicker({
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
      $(document).ready(function(){
        $('#po_value').number( true, 2 );
        $('#iwo_value').number( true, 2 );
        $('#iwo_budget').number( true, 2 );
      });      
    </script>
	
  </body>
</html>