<!-- General JS Scripts -->
<script src="{{ asset('assets/admin/js/app.min.js') }}"></script>
<!-- JS Libraies -->
<script src="{{ asset('assets/admin/bundles/apexcharts/apexcharts.min.js') }}"></script>
<!-- Page Specific JS File -->
<script src="{{ asset('assets/admin/js/page/index.js') }}"></script>
<!-- Template JS File -->
<script src="{{ asset('assets/admin/js/scripts.js') }}"></script>

<!-- jQuery -->
<script src="{{ asset('assets/admin/bundles/jquery-ui/jquery-ui.min.js') }}"></script>
<!-- jQuery Fancybox-->
<script src="{{ asset('assets/admin/js/jquery.fancybox.min.js') }}"></script>
<!-- Custom JS File -->
<script src="{{ asset('assets/admin/js/custom.js') }}"></script>

<script>
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

</script>