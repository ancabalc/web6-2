/*global $*/
$(function(){
    
   (function(){
       
       $.ajax({
           url:"https://project-web2-andreic15.c9users.io/Application/getAll",
           success:function(response){
               
               console.log(response);
               
              var html =' <div class="panel panel-default">';
              
              for(var i in reponse){
                  html +='<div class="panel-heading">
    <h3 class="panel-title">Panel title</h3>
  </div>'
              }
  
  <div class="panel-body">
    Panel content
  </div>
</div>
           }
           
           
           
       })
       
       })() 
    
    
})