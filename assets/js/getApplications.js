/*global $*/
$(function(){
    
   (function(){
       var url= window.location.origin;
       console.log(url);
      
      // list apps on load
       listApplications(url);
       
       
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
            
        //if filters are empty load all list  
            if(formData === 'localitate=Localitate'){
              listApplications(url);
            }
            
         // ajax call for filters active
         
          $.ajax({
             url:url+"/getAppsByCat",
             method:"POST",
             data:formData,
              success:function(response){
                 console.log(response);
                 
                  var html ='';
              
                 for(var i in response){
                     
                     html +='<div class="card">';
                     html +='<div class="card-header">';
                     html +='<h3 class="panel-title">'+response[i].title+'</h3><br>';
                     html +='<em> <em>';
                     html +='</div>';
                     html +='<div class="card-block">';
                     html +=response[i]['description'];
                     html +='</div>';
                     html +='</div>';
       
                 }
                 
              $(".applications").html(html);
                    
                 }
              
              
          })
           
       })
       
   })() 
    
})


function listApplications(url){
    $.ajax({
           url:url+"/applications/list",
           
           success:function(response){
               
               // console.log(response);
              var html ='';
              
              for(var i in response){
                  
                  html +='<div class="card">';
                  html +='<div class="card-header">';
                  html +='<h3 class="panel-title">'+response[i].title+'</h3><br>';
                  html +='<em> <em>';
                  html +='</div>';
                  html +='<div class="card-block">';
                  html +=response[i]['description'];
                  html +='</div>';
                  html +='</div>';
              }
              
            $(".applications").html(html);
            
           }
           
       })
}