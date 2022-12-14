 <head>

     <meta charset="utf-8" />
     <title>Dashboard | POS - Admin & Dashboard </title>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
     <meta content="Themesbrand" name="author" />
     <!-- App favicon -->
     <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">

     <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">

     <link href="{{ asset('assets/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />

     <script src="{{ asset('assets/libs/jquery/jquery.min.js') }}"></script>
    
     {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

     <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
         integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
     </script>
     <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
         integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
     </script> --}}


     <link href="{{ asset('assets/libs/bootstrap-datepicker/css/bootstrap-datepicker.min.css') }}" rel="stylesheet"
         type="text/css">

     <link href="{{ asset('assets/libs/spectrum-colorpicker2/spectrum.min.css') }}" rel="stylesheet" type="text/css">

     <link href="{{ asset('assets/libs/bootstrap-timepicker/css/bootstrap-timepicker.min.css') }}" rel="stylesheet"
         type="text/css">

     <link href="{{ asset('assets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css') }}" rel="stylesheet"
         type="text/css" />

     <link rel="stylesheet" href="{{ asset('assets/libs/@chenfengyuan/datepicker/datepicker.min.css') }}">

     <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">


     <!-- Sweet Alert-->
     <link href="{{ asset('assets/libs/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet" type="text/css" />
     <!--Taostr CDN-->
     <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.css" rel="stylesheet" type="text/css">
     
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
     <!--Bootstrap4 CSS-->
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css"
         integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
     <!-- Icons Css -->
     <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
     <!-- App Css-->
     <link href="{{ asset('assets/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />
     <!-- Select2-->
     <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
     <!-- Select2-->
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

     <!-- DataTables -->
     <link href="{{ asset('assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet"
         type="text/css" />
     <link href="{{ asset('assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css') }}" rel="stylesheet"
         type="text/css" />
     <!-- Responsive datatable examples -->
     <link href="{{ asset('assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') }}"
         rel="stylesheet" type="text/css" />


     <!-- toggle-button -->
     <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">


     <style>
         * {
             box-sizing: border-box;
         }

         body {
             background-color: #f1f1f1;
         }

         #regForm {
             background-color: #ffffff;
             margin: 5px auto;
             font-family: Raleway;
             padding: 40px;
             width: 100%;
             min-width: 300px;
         }

         h1 {
             text-align: center;
         }

         input {
             padding: 10px;
             width: 100%;
             font-size: 17px;
             font-family: Raleway;
             border: 1px solid #aaaaaa;
         }

         /* Mark input boxes that gets an error on validation: */
         input.invalid {
             background-color: #ffdddd;
         }

         /* Hide all steps by default: */
         .tab {
             display: none;
         }

         button {
             background-color: #04AA6D;
             color: #ffffff;
             border: none;
             padding: 10px 20px;
             font-size: 17px;
             font-family: Raleway;
             cursor: pointer;
         }

         button:hover {
             opacity: 0.8;
         }

         #prevBtn {
             background-color: #bbbbbb;
         }

         /* Make circles that indicate the steps of the form: */
         .step {
             height: 15px;
             width: 15px;
             margin: 0 2px;
             background-color: #bbbbbb;
             border: none;
             border-radius: 50%;
             display: inline-block;
             opacity: 0.5;
         }

         .step.active {
             opacity: 1;
         }

         /* Mark the steps that are finished and valid: */
         .step.finish {
             background-color: #04AA6D;
         }
     </style>
     {{-- <style>
         @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');

         * {
             margin: 0;
             padding: 0;
             outline: none;
             font-family: 'Poppins', sans-serif;
         }

         body {
             /* display: flex;
             align-items: center;
             justify-content: center;
             min-height: 100vh;
             overflow: hidden;
             background: url("bg.png"), -webkit-linear-gradient(bottom, #0250c5, #d43f8d); */
         }

         ::selection {
             color: #fff;
             background: #d43f8d;
         }

         /* .container {
             width: 100% !important;
             background: #fff;
             text-align: center;
             border-radius: 5px;
             padding: 50px 35px 10px 35px;
         } */

         /* .container header {
             font-size: 35px;
             font-weight: 600;
             margin: 0 0 30px 0;
         } */

         .container .form-outer {
             width: 100% !important;
             overflow: hidden;
         }

         .container .form-outer form {
             display: flex;
             width: 400%;
         }

         .form-outer form .page {
             width: 25%;
             transition: margin-left 0.3s ease-in-out;
             padding: 15px;
         }

         .form-outer form .page .title {
             text-align: left;
             font-size: 25px;
             font-weight: 500;

         }

         .form-outer form .page .field {
             width: 330px;
             height: 45px;
             margin: 35px 0;
             margin-bottom: 0;
             display: flex;
             position: relative;
         }

         form .page .field .label {
             position: absolute;
             top: -30px;
             font-weight: 500;
         }

         form .page .field input {
             height: 100%;
             width: 100%;
             border: 1px solid lightgrey;
             border-radius: 5px;
             padding-left: 15px;
             font-size: 18px;
         }

         form .page .field select {
             width: 100%;
             padding-left: 10px;
             font-size: 17px;
             font-weight: 500;
         }

         form .page .field button {
             width: 100%;
             height: calc(100% + 1px);
             border: none;
             background: #2a7efc;
             margin-top: -20px;
             border-radius: 5px;
             color: #fff;
             cursor: pointer;
             font-size: 18px;
             font-weight: 500;
             letter-spacing: 1px;
             text-transform: uppercase;
             transition: 0.5s ease;
         }

         form .page .field button:hover {
             background: #000;
         }

         form .page .btns button {
             margin-top: -20px !important;
         }

         form .page .btns button.prev {
             margin-right: 3px;
             font-size: 17px;
         }

         form .page .btns button.next {
             margin-left: 3px;
         }

         .container .progress-bar {
             display: flex;
             margin: 40px 0;
             user-select: none;
         }

         .container .progress-bar .step {
             text-align: center;
             width: 100%;
             position: relative;
         }

         .container .progress-bar .step p {
             font-weight: 500;
             font-size: 18px;
             color: #000;
             margin-bottom: 8px;
         }

         .progress-bar .step .bullet {
             height: 25px;
             width: 25px;
             border: 2px solid #000;
             display: inline-block;
             border-radius: 50%;
             position: relative;
             transition: 0.2s;
             font-weight: 500;
             font-size: 17px;
             line-height: 25px;
         }

         .progress-bar .step .bullet.active {
             border-color: #d43f8d;
             background: #d43f8d;
         }

         .progress-bar .step .bullet span {
             position: absolute;
             left: 50%;
             transform: translateX(-50%);
         }

         .progress-bar .step .bullet.active span {
             display: none;
         }

         .progress-bar .step .bullet:before,
         .progress-bar .step .bullet:after {
             position: absolute;
             content: '';
             bottom: 11px;
             right: -51px;
             height: 3px;
             width: 44px;
             background: #262626;
         }

         .progress-bar .step .bullet.active:after {
             background: #d43f8d;
             transform: scaleX(0);
             transform-origin: left;
             animation: animate 0.3s linear forwards;
         }

         @keyframes animate {
             100% {
                 transform: scaleX(1);
             }
         }

         .progress-bar .step:last-child .bullet:before,
         .progress-bar .step:last-child .bullet:after {
             display: none;
         }

         .progress-bar .step p.active {
             color: #d43f8d;
             transition: 0.2s linear;
         }

         .progress-bar .step .check {
             position: absolute;
             left: 50%;
             top: 70%;
             font-size: 15px;
             transform: translate(-50%, -50%);
             display: none;
         }

         .progress-bar .step .check.active {
             display: block;
             color: #fff;
         }


         @media only screen and (max-width: 600px) {
             form .page .field button {
                 width: 20%;
                 height: calc(60% + 1px);
             }

             .slide-page {
                 padding: 0px;
             }
         }
     </style> --}}

     <style>
         .bs-example {
             margin: 20px;
         }

         #admin-img {
             margin-left: 10px;
             border-radius: 50px;
             border: 2px solid rgb(207, 199, 199);
         }

         #modal_close {
             margin-left: 10px;
             padding: 5px 15px;
         }

         #modal_submit {
             padding: 5px 15px;
         }

         #myform {
             text-align: center;
             /* padding: 5px; */
             /* border: 1px dotted #ccc; */
             margin: 1%;
         }

         .qty {
             width: 50px;
             height: 28px;
             text-align: center;
             font-weight: bold;
             background-color: rgb(240, 233, 233);
         }

         input.qtyplus {
             width: 25px;
             height: 28px;
             font-weight: bold;
         }

         input.qtyminus {
             width: 25px;
             height: 28px;
             font-weight: bold;
         }
     </style>
 </head>
