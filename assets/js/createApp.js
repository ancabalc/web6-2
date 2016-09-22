/*global $*/
$(document).ready(function(){
  var $createAppBtn = $("#createApp");
  
  $createAppBtn.click(function(e){
    var linkedFields = {
      subject: 'appSubject',
      category: 'selectCategory',
      description: 'appDescription'
    },
    incompleteData = [],
    completeData = {};
    
    $.map(linkedFields, function(selectorId, selectorName){
      var $selector = $("#"+selectorId);

      if(( !$selector.val() || parseInt($selector.val(), 10) === 0 )){
        
        if( $selector.siblings("span").length === 0 ){
          $selector.css('border-bottom', '3px solid #c9302c');
          $selector.after(
            '<span id="pass-meter-info" name="'+selectorName+'Warn" class="pass-meter-aux" style="width:300px; color:#c9302c;">'+
            'Incomplete data for '+selectorName+'</span>'
          );
          $selector.after('<span id="pass-meter-icon" name="'
            +selectorName+'Icon" class="pass-meter-aux"></span>'
          );
        }

        incompleteData.push($selector);
      }
      else {
        $selector.css('border-bottom', '1px solid #435160');
        $selector.siblings().map(function(index, sibling){
          var $jQelem = $(sibling);
          if(($jQelem.attr('name') == selectorName+"Icon") || ($jQelem.attr('name') == selectorName+"Warn")){
            
            $jQelem.remove();
          }
        });
        
        completeData[selectorName] = $selector; 
      }
    });
      
    if( !incompleteData.length ){
      var categoryId = completeData['category'].val(),
        categoryName = completeData['category'].find("option:selected").text(),
        appSubject = completeData['subject'].val(),
        appDescription = completeData['description'].val();

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
          // alert(response.responseJSON.message);
          alert(response.message);
        },
        error: function(response) {
          // alert(response.responseJSON.message);
          alert(response.message);
        }
      });
    }
  });
})