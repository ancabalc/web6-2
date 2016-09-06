/*global $*/
$(document).ready(function(){
  // grab password field after data-id
  var $passField = $('[data-id="create-pass"]');

  // console.log($passField);
  // console.log($passField.first());
  // console.log($passField.get(0));

  $passField.on('input', function (e){
    
    // console.log($passField.val());
    
  });
});