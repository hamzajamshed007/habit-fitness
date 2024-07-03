
{{-- <script src="assets/js/calendar.min.js"></script>  --}}
{{-- <script src="assets/js/calendar.js"></script>  --}}

<!-- JQUERY  -->
<script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>
<!-- BOOTSTRAP 5 -->
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<!-- STRIPE -->
<script src="https://js.stripe.com/v2/"></script>
<!-- RESPONSIVE NAVIFATION -->
<script src="{{ asset('assets/js/stellarnav.min.js') }}"></script>
<!-- SWIPER SLIDER -->
<script src="{{ asset('assets/js/swiper-bundle.min.js') }}"></script>
<!-- FANCY BOX IMAGE VIEWER -->
<script src="assets/js/jquery.fancybox.min.js"></script> 
<!-- WAITME LOADING -->
<script src="{{ asset('assets/js/waitMe.min.js') }}"></script>
<!-- INPUT MASK -->
<script src="{{ asset('assets/js/jquery.inputmask.min.js') }}"></script>
<!-- JAVASCRIPT SHEETS -->
<script src="{{ asset('assets/js/custom.js') }}"></script>

<script>
$('.phoneformat').inputmask('(999) 999-9999', {
    placeholder: ' ',
});


$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});