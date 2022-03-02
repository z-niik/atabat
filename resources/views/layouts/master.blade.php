

@include('layouts.header')

<!--Start logina-area-->


@yield('content')

<!-- jquery  -->
<!-- Bootstrap js  -->
{{-- <script src="{{ asset('assets/css/bootstrap/js/bootstrap.min.js') }}"></script> --}}
<script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>
<script src="{{ asset('assets/js/persian-date.min.js') }}"></script>
{{--  <script src="{{ asset('assets/js/addrow.js') }}"></script>  --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" type="text/javascript"></script>

    <script>
      @if(Session::has('message'))
     var type="{{Session::get('alert_type' , 'info')}}"
     switch(type){

     case 'info' :
     toastr.info("{{ Session::get('message') }}");
     break;

     case 'success' :
      toastr.success("{{ Session::get('message') }}");
      break;

      case 'warning' :
      toastr.warning("{{ Session::get('message') }}");
      break;

      case 'error' :
      toastr.error("{{ Session::get('message') }}");
      break;

     }

      @endif

    </script>

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

  <script type="text/javascript">

    function check() {
        if(document.getElementById("accept-rules").checked = false)
        {
            document.getElementById("rules").value = "لطفا قوانین و شرایط را مطلعه نموده و تایید نمایید.";
        };
      }
 </script>

  <script type="text/javascript">

    var counter = 0;

function moreFields() {
	counter++;
	var newFields = document.getElementById('readroot').cloneNode(true);
	newFields.id = '';
	newFields.style.display = 'block';
	var newField = newFields.childNodes;
	for (var i=0;i<newField.length;i++) {
		var theName = newField[i].name
		if (theName)
			newField[i].name = theName + counter;
	}
	var insertHere = document.getElementById('writeroot');
	insertHere.parentNode.insertBefore(newFields,insertHere);
}
var element = document.getElementById("writeroot");
element.onclick = function(event) {
element.onclick = moreFields;
}
  </script>
</body>

</html>
