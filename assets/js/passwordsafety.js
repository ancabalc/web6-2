/*global $*/
$(document).ready(function(){
  // grab password field after data-id
  var $passField = $('[data-id="create-pass"]');
  var $meterElements = $passField.next(`#pass-meter`).children();
  var $passStrInfo = $passField.nextAll(`#pass-meter-info`);
  var $createButton = $('#singlebutton');

  if( !$passField.val() ){
    // disable create button if empty
    $createButton.attr('disabled', 'disabled');
  }

  // definition of password strength
  // the input has to meet the criteria set by the regex's for improvement
  var inputValidation = [
    { // under 4 char, any char. - still weak
      type: 'unaccepted',
      color: '#c9302c',
      line: '75px',
      regex: /^.{1,4}$/
    },
    { // btw. 5 and 8 will match only [a-zA-Z0-9_]
      type: 'weak',
      color: '#ffb31a',
      line: '150px',
      regex: /^([a-zA-Z0-9_]){5,8}$/
    },
    { // btw. 5 and 8, pass must contain \w\d\W // btw. 9 and 12 will match only [a-zA-Z0-9_]
      type: 'good',
      color: '#47d147',
      line: '225px',
      regex: /^((?=(?:.{9,12})$)([a-zA-Z0-9_]+)|(?=(?:.{5,8})$)((\W*[\w\d]+\W+.*)|([\w\d]*\W+[\w\d]+.*)))$/
    },
    { // btw. 9 and 12, pass must contain \w\d\W // btw. 13 and 19 will match only [a-zA-Z0-9_]
      type: 'strong',
      color: '#1a75ff',
      line: '300px',
      regex: /^((?=(?:.{13,19})$)([a-zA-Z0-9_]+)|(?=(?:.{9,12})$)((\W*[\w\d]+\W+.*)|([\w\d]*\W+[\w\d]+.*)))$/
    },
    { // >20 char // 13 -> 19 with \w\d\W -> take it as text
      type: 'surpassed',
      color: '#000a1a',
      line: '300px',
      regex: /^((.{20,}$)|(?=(?:.{13,19})$)((\W*[\w\d]+\W+.*)|([\w\d]*\W+[\w\d]+.*)))$/
    },
  ]

  var globMatchedIndex = 0;
  // listen on input field
  $passField.on('input', function(){

    // take value from field
    var inputVal = $passField.val();

    if( inputVal ){
      // iterate over each predefined password pattern
      $.each(inputValidation, function(currentMatchedIndex, obj){
        // check regex match
        if(inputVal.match(obj.regex)){
          // iterate over meter elements
          $.each($meterElements, function(elemIndex, meterElem){
            // assing corresponding color
            $(meterElem).css('background-color', obj.color);
            // break each loop match index
            if( elemIndex === currentMatchedIndex ){ return false; }
          });
  
          // when the user starts to erase the password, the coloring has to be reset to the default value
          // the second condition is for avoinding assignment to undefined pass-meter elem, since there is the 5th case for surpassed
          if(( globMatchedIndex > currentMatchedIndex ) && ( globMatchedIndex < $meterElements.length )){
  
            // get pass-meter last colored element after match
            var meterElem = $meterElements[globMatchedIndex];
  
            // assign default color
            $(meterElem).css('background-color', 'lightgray');
          }
  
          // assign deduced strength type
          $passStrInfo.text(obj.type).css('color', obj.color);
  
          // disable create account button, because password is too long
          if(( currentMatchedIndex == $meterElements.length ) && ( typeof $createButton.attr('disabled') === typeof undefined )){
            // disable button
            $createButton.attr('disabled', 'disabled');
          }
          else if(( typeof $createButton.attr('disabled') === typeof undefined ) && ( currentMatchedIndex == 0 )){
            // disable button
            $createButton.attr('disabled', 'disabled');
          }
          else if(( typeof $createButton.attr('disabled') !== typeof undefined ) && ( currentMatchedIndex > 0 ) && ( currentMatchedIndex < $meterElements.length )){
            // remove attribute disabled
            $createButton.removeAttr('disabled');
          }
  
          // store index as global variable to know which was the last match
          globMatchedIndex = currentMatchedIndex;
        }
      });
    }
    // when user clears field
    else {
      // assign default color to all meter elements
      $meterElements.css('background-color', 'lightgray');

      // assign deduced strength type
      $passStrInfo.css('color', 'white');

      // disable create button if empty
      $createButton.attr('disabled', 'disabled');
    }
  });
});