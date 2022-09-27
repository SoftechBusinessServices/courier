<!doctype html>
<html lang="en">
{{-- @dd(1); --}}
@include('admin-panel.head')

<body>
    <!-- Begin page -->
    <div id="layout-wrapper">

        @include('admin-panel.header')
        {{-- @include('admin-panel.leftbar') --}}

        @include('admin-panel.content')

        <!-- end main content-->
        {{--  @include('admin-panel.footer')  --}}

    </div>

    {{-- <div class="rightbar-overlay"></div> --}}

    <!-- JAVASCRIPT -->
    <script src="{{ asset('assets/libs/jquery/jquery.min.js') }}"></script>
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
    <script src="{{ asset('assets/js/pages/datatables.init.js') }}"></script>
    <script src="{{ asset('assets/js/app.js') }}"></script>

    <!-- echarts js -->
    <script src="{{ asset('assets/libs/echarts/echarts.min.js') }}"></script>
    <!-- echarts init -->

    <!-- jquery step -->
    <script src="{{ asset('assets/libs/jquery-steps/build/jquery.steps.min.js')}}"></script>

    <!-- form wizard init -->
    <script src="{{ asset('assets/js/pages/form-wizard.init.js')}}"></script>

      <!-- form repeater js -->
      <script src="{{ asset('assets/libs/jquery.repeater/jquery.repeater.min.js')}}"></script>

      <script src="{{ asset('assets/js/pages/form-repeater.int.js')}}"></script>


    {{-- toastr js --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script> --}}
    <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/3/jquery.inputmask.bundle.js"></script>
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script> --}}
    <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/3/jquery.inputmask.bundle.js"></script>

     <!-- Sweet Alerts js -->
     <script src="{{ asset('assets/libs/sweetalert2/sweetalert2.min.js') }}"></script>

     <!-- Sweet alert init js-->
     <script src="{{ asset('assets/js/pages/sweet-alerts.init.js') }}"></script>

    <!-- App js -->
    <script src="{{ asset('assets/js/app.js') }}"></script>
    <script>
        $(":input").inputmask();
    </script>

    <script>
        $(document).ready(function() {
            toastr.options.timeOut = 10000;
            @if (Session::has('error'))
                toastr.error('{{ Session::get('error') }}');
            @elseif (Session::has('success'))
                toastr.success('{{ Session::get('success') }}');
            @endif
        });
    </script>
</body>


</html>
