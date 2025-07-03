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
      <title>Sri Bharani Finance</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- site icon -->
      <!-- bootstrap css -->
      <link rel="stylesheet" href="<?php echo base_url('assets/')?>css/bootstrap.min.css" />
      <!-- site css -->
      <link rel="stylesheet" href="<?php echo base_url('assets/css/')?>style.css" />
      <!-- responsive css -->
      <link rel="stylesheet" href="<?php echo base_url('assets/')?>css/responsive.css" />
      <!-- color css -->
      <link rel="stylesheet" href="<?php echo base_url('assets/')?>css/colors.css" />
      <!-- select bootstrap -->
      <link rel="stylesheet" href="<?php echo base_url('assets/')?>css/bootstrap-select.css" />
      <!-- scrollbar css -->
      <link rel="stylesheet" href="<?php echo base_url('assets/')?>css/perfect-scrollbar.css" />
      <!-- custom css -->
      <link rel="stylesheet" href="<?php echo base_url('assets/')?>css/custom.css" />

      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
      <style>
         .error{
            color:red;
            font-size: 13px;
         }

      </style>
   </head>
   <body class="inner_page login">
      <div class="full_container">
         <div class="container">
            <div class="center verticle_center full_height">
               <div class="login_section">
                  <div class="logo_login">
                     <div class="center">
                        <!-- <img width="210" src="<?php echo base_url('assets/')?>images/logo/logo.png" alt="#" /> -->
                     </div>
                  </div>
                  <div class="login_form">
                  <form action="" name="login-form" id="login-form">
                        <fieldset>
                           <div class="field">
                              <label class="label_field">Email Address</label>
                              <input type="email" name="email" placeholder="E-mail" class="input-group"/>
                           </div>
                           <div class="field">
                              <label class="label_field">Password</label>
                              <input type="password" name="password" placeholder="Password" class="input-group"/>
                           </div>
                           <div class="field margin_0">
                              <label class="label_field hidden">hidden label</label>
                              <button class="main_bt">Sign In</button>
                           </div>
                        </fieldset>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- jQuery -->
      <script src="<?php echo base_url('assets/')?>js/popper.min.js"></script>
      <script src="<?php echo base_url('assets/')?>js/bootstrap.min.js"></script>
      <!-- wow animation -->
      <script src="<?php echo base_url('assets/')?>js/animate.js"></script>
   </body>
</html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>

<script>

$(document).ready(function () {

   $('#login-form').validate({ // initialize the plugin
      // rules: {
      //    email: {
      //          required: true,
      //    },
      //    password: {
      //          required: true,
      //    }
      // },
      
      //  messages: {
      //    email: "Please enter your firstname",
      //    pwd: "Please enter your lastname",
      //  },
      submitHandler: function (form) { // for demo
         location.href = 'customer';
      }
   });

});
</script>