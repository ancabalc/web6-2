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
  var inputValidation = [
    { // under 4 char,
      type: 'unaccepted',
      color: '#c9302c',
      line: '75px',
      regex: /^([\d\D]){1,4}$/
    },
    { // under 6 char, has to improved
      type: 'weak',
      color: '#ffb31a',
      line: '150px',
      regex: /^([\d\D]){5,8}$/
    },
    { // under 8 char, has to improved
      type: 'good',
      color: '#47d147',
      line: '225px',
      regex: /^([\d\D]){9,12}$/
    },
    { // 10+ char, has to improved
      type: 'strong',
      color: '#1a75ff',
      line: '300px',
      regex: /^([\d\D]){13,19}$/
    },
    { // >20 char, has to improved
      type: 'surpassed',
      color: '#000a1a',
      line: '300px',
      regex: /^([\d\D]){20,}$/
    },
  ]

  var globMatchedIndex = 0;
  // listen on input field
  $passField.on('input', function(){

    // take value from field
    var inputVal = $passField.val();

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
    
    // when user clears field
    if( ! $passField.val() ){
      // assign default color to all meter elements
      $meterElements.css('background-color', 'lightgray');

      // assign deduced strength type
      $passStrInfo.css('color', 'white');

      // disable create button if empty
      $createButton.attr('disabled', 'disabled');
    }
  });
});