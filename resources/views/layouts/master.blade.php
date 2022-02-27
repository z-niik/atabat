

@include('layouts.header')

<!--Start logina-area-->


@yield('content')

<!-- jquery  -->
<!-- Bootstrap js  -->
{{-- <script src="{{ asset('assets/css/bootstrap/js/bootstrap.min.js') }}"></script> --}}
<script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>
<script src="{{ asset('assets/js/persian-date.min.js') }}"></script>
<script src="{{ asset('assets/js/persian-datepicker.min.js') }}"></script>
<script type="text/javascript">
    $(document).ready(function() {
      $(".persianDatapicker").pDatepicker({
        altFormat: "YYYY/MM/DD",
        observer: true,
        format: 'YYYY/MM/DD',
        initialValue: false,
        initialValueType: 'persian',
        autoClose: true,
      });
    });
  </script>
</body>

</html>
