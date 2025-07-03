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
      <title>Customer</title>
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
                                    <h3>Personal Details</h3>
                                 </div>
                              </div>
                              <div class="full price_table padding_infor_info">
                                 <form action="" name="customer-form" id="customer-form">
                                    <div class="row">
                                       <div class="form-group col-md-12">
                                          <label for="name">Customer Name:</label>
                                          <input type="text" class="form-control" name="name">
                                       </div>
                                       <div class="form-group col-md-12">
                                          <label for="fname">Father Name:</label>
                                          <input type="text" class="form-control" name="fname">
                                       </div>
                                       <div class="form-group col-md-12">
                                          <label for="mobileno">Mobile Number:</label>
                                          <input type="text" class="form-control" name="mobileno">
                                       </div>
                                       <div class="form-group col-md-12">
                                          <label for="address">Address:</label>
                                          <textarea class="form-control" rows="2" name="address"></textarea>
                                       </div>
                                       <div class="col-md-12" style="display:flex;align-items:center;padding-bottom:10px;">
                                          <label for="working">Working:&nbsp;&nbsp;&nbsp;&nbsp;</label>
                                          <div class="form-check-inline">
                                             <label class="form-check-label" for="radio1">
                                             <input type="radio" class="form-check-input" id="radio1" name="working" value="Yes" checked>Yes
                                             </label>
                                          </div>
                                          <div class="form-check-inline">
                                             <label class="form-check-label" for="radio2">
                                             <input type="radio" class="form-check-input" id="radio2" name="working" value="No">No
                                             </label>
                                          </div>
                                       </div>
                                       <div class="form-group col-md-12">
                                          <label for="adhaarno">Aadhaar Number:</label>
                                          <input type="text" class="form-control" name="adhaarno">
                                       </div>
                                       <div class="form-group col-md-12">
                                          <label for="gname">Guardian Name:</label>
                                          <input type="text" class="form-control" name="gname">
                                       </div>
                                       <div class="form-group col-md-12">
                                          <label for="gmobileno">Guardian Contact Number:</label>
                                          <input type="text" class="form-control" name="gmobileno">
                                       </div>
                                       <div class="form-group col-md-12">
                                          <label for="gaddress">Guardian Address:</label>
                                          <textarea class="form-control" rows="2" name="gaddress"></textarea>
                                       </div>
                                    </div>                                    
                              </div>                            
                           </div>
                           <div class="col-md-2"></div>
                        </div>

                        <div class="col-md-6">
                           <dvi class="row">
                              <div class="white_shd full margin_bottom_30">
                                 <div class="full graph_head">
                                    <div class="center">
                                       <h3>Reference Detail</h3>
                                    </div>
                                 </div>
                                 <div class="full price_table padding_infor_info">
                                    <div class="row">
                                       <div class="form-group col-md-6">
                                          <label for="name">Reference Name:</label>
                                          <input type="text" class="form-control" name="rname">
                                       </div>
                                       <div class="form-group col-md-6">
                                          <label for="rmobileno">Contact Number:</label>
                                          <input type="text" class="form-control" name="rmobileno">
                                       </div>
                                       <div class="form-group col-md-12">
                                          <label for="raddress">Address:</label>
                                          <textarea class="form-control" rows="2" name="raddress"></textarea>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="white_shd full margin_bottom_30">
                                 <div class="full graph_head">
                                    <div class="center">
                                       <h3>Vehicle Details</h3>
                                    </div>
                                 </div>
                                 <div class="full price_table padding_infor_info">
                                    <div class="row">
                                       <div class="form-group col-md-6">
                                          <label for="registrationno">Registration No:</label>
                                          <input type="text" class="form-control" name="registrationno">
                                       </div>
                                       <div class="form-group col-md-6">
                                          <label for="brand">Vehicle Brand:</label>
                                          <input type="text" class="form-control" name="brand">
                                       </div>
                                       <div class="form-group col-md-6">
                                          <label for="model">Model:</label>
                                          <input type="text" class="form-control" name="model">
                                       </div>
                                       <div class="form-group col-md-6">
                                          <label for="colour">Colour:</label>
                                          <input type="text" class="form-control" name="colour">
                                       </div>
                                       <div class="form-group col-md-6">
                                          <label for="year">Manufacturing Year:</label>
                                          <select class="form-control" id="year">
                                             <option value="">Please Select</option>
                                             <?php
                                                foreach($years as $years){
                                             ?>
                                             <option value="<?php echo $years;?>"><?php echo $years;?></option>
                                             <?php } ?>
                                          </select>
                                       </div>
                                       <div class="form-group col-md-6">
                                          <label for="engine">Engine Number:</label>
                                          <input type="text" class="form-control" name="engine">
                                       </div>
                                       <div class="form-group col-md-6" style="padding-bottom: 45px;">
                                          <label for="chasis">Chasis Number:</label>
                                          <input type="text" class="form-control" name="chasis">
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col text-center">
                           <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                        </form>
                        <!-- end row -->
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

<script>

$(document).ready(function () {

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
            number:true,
            minlength:10,
            maxlength:10
        },
        address: {
            required: true,
        },
        adhaarno:{
         required: true,
         number:true,
         minlength:12,
         maxlength:12
        }

    },
   //  messages: {
   //    email: "Please enter your firstname",
   //    pwd: "Please enter your lastname",
   //  },
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