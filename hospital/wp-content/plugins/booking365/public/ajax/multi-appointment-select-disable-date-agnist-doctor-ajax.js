(function($){
    "use strict";    
  
    $(document).ready(function(){ 

    
        var ajaxurl , nonce , ret_val, professional_id , professional_change_id ;         
        ajaxurl                 = '';
        nonce                   = '';
        ret_val                 = '';
        professional_id         = '';
        professional_change_id  = '';
        /* set value using localize */
        ajaxurl = object.ajaxurl;
        nonce = object.nonce;

        professional_id = $('#display_professional').val();   
        ajaxRequest_byId(ajaxurl, professional_id);
        $('#display_professional').on('change', function(e){
              professional_id = $(this).val();
              ajaxRequest_byId(ajaxurl, professional_id); 
        });
      
        function ajaxRequest_byId(ajaxurl, id ){

           $.ajax({

                   url: ajaxurl,
                   type: 'post',
                   cache: false,                 
                   dataType: 'json', 
                   data: { action: 'disableDate_ajaxProsessData', data : id },                 
                   success: function(response) { 
                       // console.log(response);
                       $('#datepicker').datepicker("destroy"); 
                       var datelist = [];
                       var datelist = response ;
                       $("#datepicker").datepicker({
                       dateFormat: 'yy-mm-dd',
                       beforeShowDay: function(d){  
                          var dmy = "";
                          dmy += d.getFullYear()+ "-";
                          dmy += ("00" + (d.getMonth() + 1)).slice(-2) + "-";                          
                          dmy += ("00" + d.getDate()).slice(-2);
                          return ($.inArray(dmy, datelist) >= 0) ? [true, ""] : [false, ""];                        
                       },
                       onSelect: function(dateText, inst) {
                        var date   = $(this).val();
                        var pro_id = id ;
                        ajaxRequest_forTimeSlote( ajaxurl , date , pro_id );
                        }
                    });
                
                    $("#datepicker").datepicker("refresh"); // tell datepicker that it needs to draw itself again      

                  }              

              });

       } // end ajaxRequest_byId().

       function ajaxRequest_forTimeSlote( ajaxurl , date , pro_id ){
            $.ajax({

                   url: ajaxurl,
                   type: 'post',
                   cache: false,                 
                   dataType: 'html', 
                   data: { action: 'selectTimeSlote_ajaxProsessData', date : date , pro_id: pro_id },                 
                   success: function(response){ 
                      $('#showTimeSlote').html(response);
                   }
            });
      
       }// end ajaxRequest_forTimeSlote().      
    });
                 
})(jQuery);
