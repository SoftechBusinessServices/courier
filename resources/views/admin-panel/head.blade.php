 <head>

     <meta charset="utf-8" />
     <title>Dashboard | POS - Admin & Dashboard </title>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
     <meta content="Themesbrand" name="author" />
     <!-- App favicon -->
     <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">
     <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">
     <!-- DataTables -->
     <link href="{{ asset('assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
     <link href="{{ asset('assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
     <!-- Responsive datatable examples -->
     <link href="{{ asset('assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />

     <!-- Sweet Alert-->
     <link href="{{ asset('assets/libs/sweetalert2/sweetalert2.min.css')}}" rel="stylesheet" type="text/css" />


     <link href="{{ asset('assets/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
     <!-- Icons Css -->
     <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
     <!-- App Css-->
     <link href="{{ asset('assets/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />

     {{-- toastr cdn --}}
     <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.css" rel="stylesheet" type="text/css">

     {{-- cart system --}}
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
     <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
     {{-- <link href="{{ asset('assets/libs/select2/css/select2.min.css')}}" rel="stylesheet" type="text/css" /> --}}
     <link href="{{ asset('assets/libs/bootstrap-datepicker/css/bootstrap-datepicker.min.css')}}" rel="stylesheet" type="text/css">
     <link href="{{ asset('assets/libs/spectrum-colorpicker2/spectrum.min.css')}}" rel="stylesheet" type="text/css">
     <link href="{{ asset('assets/libs/bootstrap-timepicker/css/bootstrap-timepicker.min.css')}}" rel="stylesheet" type="text/css">
     <link href="{{ asset('assets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css')}}" rel="stylesheet" type="text/css" />
     <link rel="stylesheet" href="{{ asset('assets/libs/@chenfengyuan/datepicker/datepicker.min.css')}}">
     {{-- <link href="{{ asset('assets/libs/select2/css/select2.min.css')}}" rel="stylesheet" type="text/css" /> --}}
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
     <style>
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

         .container {
             width: 100% !important;
             background: #fff;
             text-align: center;
             border-radius: 5px;
             padding: 50px 35px 10px 35px;
         }

         .container header {
             font-size: 35px;
             font-weight: 600;
             margin: 0 0 30px 0;
         }

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
         }

         .form-outer form .page .title {
             text-align: left;
             font-size: 25px;
             font-weight: 500;
         }

         .form-outer form .page .field {
             width: 330px;
             height: 45px;
             margin: 45px 0;
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
             height: calc(100% + 5px);
             border: none;
             background: #d33f8d;
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
     </style>

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