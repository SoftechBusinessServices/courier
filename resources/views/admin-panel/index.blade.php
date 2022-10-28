<!doctype html>
<html lang="en">

@include('admin-panel.head')

<body>
    <!-- Begin page -->
    <div id="layout-wrapper">
        @include('admin-panel.header')
        @yield('content')
    </div>

  <!-- JAVASCRIPT -->
 <script src="{{ asset('assets/libs/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>
 <script src="{{ asset('assets/libs/spectrum-colorpicker2/spectrum.min.js') }}"></script>
 <script src="{{ asset('assets/libs/bootstrap-timepicker/js/bootstrap-timepicker.min.js') }}"></script>
 <script src="{{ asset('assets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js') }}"></script>
 <script src="{{ asset('assets/libs/bootstrap-maxlength/bootstrap-maxlength.min.js') }}"></script>
 <script src="{{ asset('assets/libs/@chenfengyuan/datepicker/datepicker.min.js') }}"></script>
 <script src="{{ asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
 <script src="{{ asset('assets/libs/metismenu/metisMenu.min.js') }}"></script>
 <script src="{{ asset('assets/libs/simplebar/simplebar.min.js') }}"></script>
 <script src="{{ asset('assets/libs/node-waves/waves.min.js') }}"></script>

 <!-- Required datatable js -->
 <script src="{{ asset('assets/libs/datatables.net/js/jquery.dataTables.min.js') }}"></script>
 <script src="{{ asset('assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
 <!-- Buttons examples -->
 <script src="{{ asset('assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
 <script src="{{ asset('assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js') }}"></script>
 <script src="{{ asset('assets/libs/jszip/jszip.min.js') }}"></script>
 <script src="{{ asset('assets/libs/pdfmake/build/pdfmake.min.js') }}"></script>
 <script src="{{ asset('assets/libs/pdfmake/build/vfs_fonts.js') }}"></script>
 <script src="{{ asset('assets/libs/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
 <script src="{{ asset('assets/libs/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
 <script src="{{ asset('assets/libs/datatables.net-buttons/js/buttons.colVis.min.js') }}"></script>

 <!-- Datatable init js -->
 {{-- <script src="{{ asset('assets/js/pages/datatables.init.js') }}"></script> --}}
 <script src="{{ asset('assets/js/app.js') }}"></script>
 {{-- <script src="{{ asset('assets/js/script.js') }}"></script> --}}

 <!-- echarts js -->
 <script src="{{ asset('assets/libs/echarts/echarts.min.js') }}"></script>
 <!-- echarts init -->

 <!-- jquery step -->
 <script src="{{ asset('assets/libs/jquery-steps/build/jquery.steps.min.js')}}"></script>

 <!-- form wizard init -->
 {{-- <script src="{{ asset('assets/js/pages/form-wizard.init.js')}}"></script> --}}

 <!-- form repeater js -->
 <script src="{{ asset('assets/js/pages/form-repeater.int.js')}}"></script>
 <script src="{{ asset('assets/libs/jquery.repeater/jquery.repeater.min.js')}}"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.repeater/1.2.1/jquery.repeater.min.js" data-cfasync="false" data-no-optimize="1" data-no-defer="1" data-no-minify="1"></script>
 <!-- Sweet Alerts js -->
 <script src="{{ asset('assets/libs/sweetalert2/sweetalert2.min.js') }}"></script>
 <!-- Sweet alert init js-->
 <script src="{{ asset('assets/js/pages/sweet-alerts.init.js') }}"></script>

 <!-- Js Links-->
 <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>

<!-- Select2 js -->
 <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
 <script>
     $(document).ready(function() {
         // Select2 Multiple
         $('.select2-multiple').select2({
             placeholder: "Select Multiple Services",
             allowClear: true
         });

     });
 </script>

<!-- Input Mask js -->
<script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/3/jquery.inputmask.bundle.js"></script>
 <script>
     $(":input").inputmask();
 </script>

<!-- toastr js -->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>

 <script>
     $(document).ready(function() {
         toastr.options.timeOut = 10000;
         @if(Session::has('error'))
         toastr.error('{{ Session::get('
             error ') }}');
         @elseif(Session::has('success'))
         toastr.success('{{ Session::get('
             success ') }}');
         @endif
     });
 </script>
 

   
</body>

</html>
