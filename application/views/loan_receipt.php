<?php
   $current_date = Date('d/m/Y');
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Loan Receipt</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="<?php echo base_url('assets/')?>css/bootstrap.min.css" />
      <!-- site css -->
      <link rel="stylesheet" href="<?php echo base_url('assets/')?>css/style.css" />
      <!-- responsive css -->
      <link rel="stylesheet" href="<?php echo base_url('assets/')?>css/responsive.css" />
     
      <!-- scrollbar css -->
      <link rel="stylesheet" href="<?php echo base_url('assets/')?>css/perfect-scrollbar.css" />
      <!-- custom css -->
      <link rel="stylesheet" href="<?php echo base_url('assets/')?>css/custom.css" />
      <!-- calendar file css -->
      <link rel="stylesheet" href="<?php echo base_url('assets/')?>css/semantic.min.css" />
      <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.css" rel="stylesheet" type="text/css" />
      <style>
         .error{
            color:red;
            font-size: 13px;
         }
         label{
            font-size:16px;
            font-weight: 600;
         }
         .center {
            text-align: center;
         }
      </style>
   </head>
   <body class="inner_page profile_page">
      <div class="full_container">
         <div class="inner_container">
            <!-- Sidebar  -->
            <?php include('_sidebar.php')?>
            <!-- end sidebar -->
            <!-- right content -->
            <div id="content">
               <!-- topbar -->
               <?php include('_topbar.php')?>
               <!-- end topbar -->
               <!-- dashboard inner -->
               <div class="midde_cont">
                  <div class="container-fluid">
                     <!-- row -->
                     <div class="row column1" style="padding-top: 20px;">
                        <div class="col-md-6">
                           <div class="white_shd full margin_bottom_30">
                              <div class="full graph_head">
                                 <div class="center">
                                    <h3>Loan Receipt</h3>
                                 </div>
                              </div>
                              <div class="full price_table padding_infor_info">
                                 <form action="" name="customer-form" id="customer-form">
                                    <div class="row">
                                       <div class="form-group col-md-8">
                                          <label for="name">Mobile Number:</label>
                                          <input type="text" class="form-control" name="name">
                                       </div>
                                       <div class="form-group col-md-4">
                                          <label>&nbsp;</label>
                                          <div class="button_block">
                                             <button type="button" class="btn cur-p btn-info"> <span class="fa fa-search fa-lg" aria-hidden="true"></span></button>
                                          </div>
                                       </div>
                                       <div class="form-group col-md-4">
                                          <label for="date">Loan Date:</label>
                                          <div id="datepicker1" class="date" data-date-format="dd/mm/yyyy">	
                                             <input class="form-control" type="text" id="date" name="date"/>
                                             <span class="input-group-addon"></span>
                                          </div>
                                       </div>
                                       <div class="form-group col-md-4">
                                          <label for="date">Date:</label>
                                          <div id="datepicker2" class="date" data-date-format="dd/mm/yyyy">	
                                             <input class="form-control" type="text" id="date" name="date"/>
                                             <span class="input-group-addon"></span>
                                          </div>
                                       </div>
                                       <div class="form-group col-md-4">
                                          <label for="address">Due Amount:</label>
                                          <input type="text" class="form-control" name="adhaarno">
                                       </div>
                                       <div class="form-group col-md-4">
                                          <label for="mobileno">Receipt Number:</label>
                                          <input type="text" class="form-control" name="mobileno">
                                       </div>
                                       <div class="form-group col-md-4">
                                          <label for="address">Received Amount:</label>
                                          <input type="text" class="form-control" name="adhaarno">
                                       </div>
                                       <div class="form-group col-md-4">
                                          <label for="adhaarno">Mode Of Amount:</label>
                                          <input type="text" class="form-control" name="adhaarno">
                                       </div>
                                       <div class="form-group col-md-12">
                                          <label for="adhaarno">Remarks:</label>
                                          <textarea class="form-control" rows="2" name="address"></textarea>
                                       </div>
                                       <div class="col text-center" style="padding-top:10px;">
                                       <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                    </div>                                    
                              </div>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="white_shd full margin_bottom_30">
                              <div class="full graph_head">
                                 <div class="center">
                                    <h3>Loan Details</h3>
                                 </div>
                              </div>
                              <div class="full price_table padding_infor_info">
                                 <form action="" name="customer-form" id="customer-form">
                                    <div class="row">
                                       <div class="form-group col-md-6">
                                          <label for="name">Loan No:</label>
                                          <input type="text" class="form-control" name="name">
                                       </div>
                                       <div class="form-group col-md-6">
                                          <label for="address">Customer Name:</label>
                                          <input type="text" class="form-control" name="adhaarno">
                                       </div>
                                       <div class="form-group col-md-6">
                                          <label for="mobileno">Principal Amount:</label>
                                          <input type="text" class="form-control" name="mobileno">
                                       </div>
                                       <div class="form-group col-md-6">
                                          <label for="address">Amount Received:</label>
                                          <input type="text" class="form-control" name="adhaarno">
                                       </div>
                                       <div class="form-group col-md-6">
                                          <label for="adhaarno">Total Due:</label>
                                          <input type="text" class="form-control" name="adhaarno">
                                       </div>
                                       <div class="form-group col-md-6">
                                          <label for="address">Pending Due:</label>
                                          <input type="text" class="form-control" name="adhaarno">
                                       </div>
                                       <div class="form-group col-md-6">
                                          <label for="mobileno">Balance Amount:</label>
                                          <input type="text" class="form-control" name="mobileno">
                                       </div>
                                       <div class="form-group col-md-6">
                                          <label for="address">EMI:</label>
                                          <input type="text" class="form-control" name="adhaarno">
                                       </div>
                                       <div class="form-group col-md-6" style="padding-bottom:30px;">
                                          <label for="adhaarno">Loan Status:</label>
                                          <input type="text" class="form-control" name="adhaarno">
                                       </div>                                      
                                    </div>                                    
                              </div>
                           </div>
                        </div>
                        <!-- end row -->
                     </div>

                     <div class="row column1">
                     <div class="col-md-12">
                           <div class="white_shd full margin_bottom_30">
                              <div class="full graph_head">
                                 <div class="center">
                                    <h3>Payment History</h3>
                                 </div>
                              </div>
                              <div class="table_section padding_infor_info">
                                 <div class="table-responsive-sm">
                                    <table class="table table-bordered">
                                       <thead class="thead-dark">
                                          <tr>
                                             <th>Date</th>
                                             <th>Receipt No</th>
                                             <th>Dues</th>
                                             <th>Amount</th>
                                             <th>Mode Of Amount</th>
                                          </tr>
                                       </thead>
                                       <tbody>
                                          <tr>
                                             <td>01/07/2024</td>
                                             <td>001</td>
                                             <td>1</td>
                                             <td>1200</td>
                                             <td>Cash</td>
                                          </tr>
                                          <tr>
                                             <td>01/08/2024</td>
                                             <td>002</td>
                                             <td>2</td>
                                             <td>1200</td>
                                             <td>Cash</td>
                                          </tr>
                                          <tr>
                                             <td>01/09/2024</td>
                                             <td>003</td>
                                             <td>3</td>
                                             <td>1200</td>
                                             <td>Cash</td>
                                          </tr>
                                          <tr>
                                             <td>01/10/2024</td>
                                             <td>004</td>
                                             <td>4</td>
                                             <td>1200</td>
                                             <td>GPay</td>
                                          </tr>
                                       </tbody>
                                    </table>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- footer -->
                    
                  </div>
                  <!-- end dashboard inner -->
               </div>
            </div>
         </div>
      </div>
      
   </body>
</html>
<!-- jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
<script src="<?php echo base_url('assets/')?>js/popper.min.js"></script>
<script src="<?php echo base_url('assets/')?>js/bootstrap.min.js"></script>
<!-- wow animation -->
<script src="<?php echo base_url('assets/')?>js/animate.js"></script>
<!-- nice scrollbar -->
<script src="<?php echo base_url('assets/')?>js/perfect-scrollbar.min.js"></script>
<script>
   var ps = new PerfectScrollbar('#sidebar');
</script>
<script src="<?php echo base_url('assets/')?>js/custom.js"></script>
<!-- calendar file css -->    
<script src="<?php echo base_url('assets/')?>js/semantic.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>

<script>

$(document).ready(function () {

   $("#datepicker1").datepicker({ 
        autoclose: true, 
        todayHighlight: true,
  }).datepicker('update', '<?php echo $current_date;?>');

  $("#datepicker2").datepicker({ 
        autoclose: true, 
        todayHighlight: true,
  }).datepicker('update', '<?php echo $current_date;?>');

$('#customer-form').validate({ // initialize the plugin
    rules: {
        name: {
            required: true,
        },
        fname: {
            required: true,
        },
        mobileno: {
            required: true,
        },
        address: {
            required: true,
        }

    },
    submitHandler: function (form) { // for demo
        alert('valid form submitted'); // for demo
        return false; // for demo
    }
});

});

   
// $(function() {
//   // Initialize form validation on the registration form.
//   // It has the name attribute "registration"
//   $("form[name='customer-form']").validate({
//     // Specify validation rules
//     rules: {
//       email: "required",
//       pwd: "required",
//     },
//     // Specify validation error messages
//     messages: {
//       email: "Please enter your firstname",
//       pwd: "Please enter your lastname",
//     },
//     // Make sure the form is submitted to the destination defined
//     // in the "action" attribute of the form when valid
//     submitHandler: function(form) {
//       form.submit();
//     }
//   });
// });
</script>