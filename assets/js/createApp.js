/*global $*/
$(document).ready(function(){
  var $createAppBtn = $("#createApp");
  
  $createAppBtn.click(function(){
    var $appSubject = $("#appSubject"),
      $selectCategory = $("#selectCategory"),
      $appDescription = $("#appDescription");
    
    var categoryId = $selectCategory.val(),
      categoryName = $selectCategory.find("option:selected").text(),
      appSubject = $appSubject.val(),
      appDescription = $appDescription.val();

    $.ajax({
      type:"POST",
      data:{
        categoryId: categoryId,
        categoryName: categoryName,
        appSubject: appSubject,
        appDescription: appDescription
      },
      url:"save", 
      success: function(response) {   
        alert(response.responseJSON.message);
      },
      error: function(response) {
        alert(response.responseJSON.message);
      }
    });
  });
})