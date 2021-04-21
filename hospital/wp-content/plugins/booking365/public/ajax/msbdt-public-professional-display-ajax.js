(function($){
    "use strict";    

    $(document).ready(function(){  
           
        $('#mas_public_service_id').on('change', function(e){                                   
            var service_change_id = $(this).val();
            $.ajax({
                 url: object.ajaxurl,
                 type: 'post',
                 cache: false,                 
                 dataType: 'html', 
                 data: { action: 'professional_ajaxProsessData', data : service_change_id },                 
                 success: function(response) { 
                  $('#display_professional').html(response);            
                 }              
            });
        });       

    });
                 
})(jQuery);
