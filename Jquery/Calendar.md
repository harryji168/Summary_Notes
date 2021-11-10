<link rel="stylesheet" href="//code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>
  <script>

var booking_day_array = ["11/11/2021", "11/20/2021", "11/26/2021"];
var booking_num_array = ["12", "20", "30"];
  $( function() {
    $( "#datepicker" ).datepicker({
        numberOfMonths:1,
        changeMonth: true,
        changeYear: true,
        beforeShow: addCustomInformation(),

    }
    );
  } );
  function addCustomInformation() {
    setTimeout(function() {
		$(".ui-datepicker-inline").css("width", "100%");
        $('td', $('#datepicker')).each(function () {
            var month1=$(this).data('month')+1;
            var year1=$(this).data('year');
            var day=$(this).text();
            var current_date=month1+"/"+day+"/"+year1 ;
            var temp=$(this);
            var pos=booking_day_array.indexOf(current_date);
            if(pos>=0){ 
                $( temp ).append( '<a style=" background: #fff;" href="#">' + booking_num_array[pos] +'</a>' );
            }else{
                $( temp ).append( "<br>" + '&nbsp;' );
            }
        });    

	}, 0)
  }
  </script>
  <style>
  .ui-datepicker-inline {
      width: 100%;
  }
  .ui-datepicker td {
    vertical-align: top;
  }
  .ui-datepicker td a  {
        text-align: center;
        
  }
  .ui-state-num{
  
    background: #f2f2f2;
  }
  </style>
 <div id="datepicker" ></div>