 $(document).ready(function(){
    var is_loading = false; 
    var num_messages = {{ $data_count }};
    var loaded_messages = 0;
    var intervals = 0;
    setInterval(function(){    
     if(loaded_messages <= num_messages){
      loadmore();    
    }
    console.log(intervals);
    intervals += 1;
  },3000);


    function loadmore(){
    if (is_loading == false) { 
            is_loading = true;
            $('#loader').show();
             loaded_messages += 10;
            $.ajax({
              url: url + '/more/' + loaded_messages,
              type: 'get',              
              success:function(data){
               $('#main_content').append(data);
               is_loading = false;              
             }
           });
              if(loaded_messages >= num_messages - 1)
              {
                  is_loading = true;
                $('#loader').hide();                           
              }
           }
         }
  });
