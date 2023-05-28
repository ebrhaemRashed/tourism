    <!-- Required vendors -->

    <script src="{{ asset('admin/vendor/global/global.min.js') }}"></script>
    <script src="{{ asset('admin/vendor/chart.js/Chart.bundle.min.js') }}"></script>
    <script src="{{ asset('admin/vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>

    <script src="{{ asset('admin/vendor/draggable/draggable.js') }}"></script>


    <!-- tagify -->
    <script src="{{ asset('admin/vendor/tagify/dist/tagify.js') }}"></script>

    <script src="{{ asset('admin/vendor/datatables/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('admin/vendor/datatables/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('admin/vendor/datatables/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('admin/vendor/datatables/js/jszip.min.js') }}"></script>
    <script src="{{ asset('admin/js/plugins-init/datatables.init.js') }}"></script>

    <!-- Apex Chart -->

    <script src="{{ asset('admin/vendor/bootstrap-datetimepicker/js/moment.js') }}"></script>
    <script src="{{ asset('admin/vendor/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js') }}"></script>


    <!-- Vectormap -->
    <script src="{{ asset('admin/vendor/jqvmap/js/jquery.vmap.min.js') }}"></script>
    <script src="{{ asset('admin/vendor/jqvmap/js/jquery.vmap.world.js') }}"></script>
    <script src="{{ asset('admin/vendor/jqvmap/js/jquery.vmap.usa.js') }}"></script>
    <script src="{{ asset('admin/js/custom.js') }}"></script>
    <script src="{{ asset('admin/js/deznav-init.js') }}"></script>
    <script src="{{ asset('admin/js/demo.js') }}"></script>
    <script src="{{ asset('admin/js/styleSwitcher.js') }}"></script>
    <script src="{{ asset('admin/js/toastr/js/toastr.min.js') }}"></script>
    <script src="{{ asset('admin/js/ckeditor/ckeditor.js') }}"></script>
    @include('admin.layouts.Validation.errorValidation')
        @yield('jsadmin')

    <script type="text/javascript">
        $(document).ready(function(){
            $('#image').change(function(e){
                var reader = new FileReader();
                reader.onload = function(e){
                    $('#mainThmb').attr('src',e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });
    </script>