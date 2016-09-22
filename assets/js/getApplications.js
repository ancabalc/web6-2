/*global $*/
$(function(){
    
       var url= window.location.origin;
  
       console.log(url);
      
      // list apps on load
    //   listApplications(url);
       getApps();
       
      //  list apps on filter change
        // $('[name="categories[]"]').change(function(){
      
        //  var formData = $('#filterform').serialize();
        //     console.log(formData);
            
        //     //if filters are empty load all list  
        //     if(formData === ''){
        //       listApplications(url)
        //       }
            
        //  // ajax call for filters active
         
        //   $.ajax({
        //      url:url+"/getAppsByCat",
        //      method:"POST",
        //      data:formData,
        //       success:function(response){
        //          console.log(response);
                 
        //           var html ='';
              
        //          for(var i in response){
                     
        //              html +='<div class="card">';
        //              html +='<div class="card-header">';
        //              html +='<h3 class="panel-title">'+response[i].title+'</h3><br>';
        //              html +='<em> <em>';
        //              html +='</div>';
        //              html +='<div class="card-block">';
        //              html +=response[i]['description'];
        //              html +='</div>';
        //              html +='</div>';
       
        //          }
                 
        //       $(".applications").html(html);
                    
        //          }
              
              
        //   })
        //  })
       
       $('.searchapp').click(function(e){
           
        var formData = $('#filterform').serialize();
        console.log(formData);
            
         // ajax call for filters active
         
           getApps(formData);
           
       })
       
  
function getApps(formData){
    
      $.ajax({
           url: url + "/getApps",
           method:"POST",
           data:formData || {},
           success:function(response){
               
               // console.log(response);
              var html ='';
              
              for(var i in response){
                  
                  html +='<div class="panel panel-primary">';
                     html +='<div class="panel-heading">';
                     html +='<h3 class="panel-title">'+response[i].title+'</h3><br>';
                     html +='</div>';
                     html +='<div class="panel-body">'+response[i]['description']+'</div>';
                     html +='</div>';
              }
              
            $(".applications").html(html);
            
           }
           
       })
}

})