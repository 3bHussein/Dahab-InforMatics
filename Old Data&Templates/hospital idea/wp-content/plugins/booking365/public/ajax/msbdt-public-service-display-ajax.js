(function($){
    "use strict";    

    $(document).ready(function(){ 
        var ajaxurl ;
        var category_id ;
        var category_change_id ;
        var category_change_id ;
        
        ajaxurl = object.ajaxurl;
        category_id = $('#mas_public_category_id').val();  
        $('#mas_public_category_id').on('change', function(e){                             
            category_change_id = $(this).val();
            $.ajax({
                 url: ajaxurl,
                 type: 'post',
                 cache: false,                 
                 dataType: 'html', 
                 data: { action: 'service_ajaxProsessData', data : category_change_id },                 
                 success: function(response) { 
                  $('#mas_public_service_id').html(response);
                               
                 }              
            });
              
        });       

    });
                 
})(jQuery);

  var count  =  0  ;
    var pre_id =  '' ;

	  function clickTimeSloteButton(start_time , end_time , date, btn ){
          
	     if(start_time != null && 
	        end_time   != null && 
	        date       != null && 
	        btn        != null ){
	        var schedule_start_time = start_time;
	        var schedule_end_time   = end_time ;
	        var schedule_date       = date ;
	       

            if(count == 0){
            	  document.getElementById('schedule_date').value       = '' ;
                document.getElementById('schedule_start_time').value = '' ;
                document.getElementById('schedule_end_time').value   = '' ;  
                
                document.getElementById(btn).style.backgroundColor ='';
                document.getElementById('book36_hidden_1').value;
                document.getElementById('schedule_date').value       = schedule_date ;
                document.getElementById('schedule_start_time').value = schedule_start_time ;
                document.getElementById('schedule_end_time').value   = schedule_end_time ;                 
                count = 1 ;
              
            }
	    else if(count == 1){
                document.getElementById('schedule_date').value       = '' ;
                document.getElementById('schedule_start_time').value = '' ;
                document.getElementById('schedule_end_time').value   = '' ;     
                document.getElementById(btn).style.backgroundColor = '';
                document.getElementById('book36_hidden_2').value;

                count = 0 ;
            }    
	  
             
          }	 
            
        }
