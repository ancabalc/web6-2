/*global $*/
$(function(){
    
   (function(){
       
       $.ajax({
           url: document.location.origin + "/getApps",
           success:function(response){
               
               console.log(response);
               
              var html ='';
              
              for(var i in response){
                  
                  html +='<div class="card">';
                  html +='<div class="card-header">';
                  html +='<h3 class="panel-title">'+response[i].title+'</h3>';
                  html +='</div>';
                  html +='<div class="card-block">';
                  html +=response[i]['description'];
                  html +='</div>';
                  html +='</div>';
    
              }
            $(".applications").html(html);
           }
           
           
           
       })
       
       })() 
    
    
})