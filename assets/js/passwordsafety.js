/*global $*/
$(document).ready(function(){
  // grab password field after data-id
  var $passField = $('[data-id="create-pass"]');
  var $meterElements = $passField.next(`#pass-meter`).children();
  var $passStrInfo = $passField.nextAll(`#pass-meter-info`);
  var $createButton = $('#submitButton');

  if( !$passField.val() ){
    // disable create button if empty
    $createButton.attr('disabled', 'disabled');
  }

  // Priciple of password strength: the input will be qualified using the criteria set by the regex's
  // Level clasiffication and their criteria:
  //
  // unaccepted: (!the create account button is disabled on this state)
  //  - criteria: *length = 4, *any character except newline
  //
  // weak: (create account - allowed)
  //  - criteria: *length btw. 5-8, *any alphanumeric character and underscores
  //
  // good: (create account - allowed)
  //  - criteria: *length btw. 9-12, *any alphanumeric character and underscores
  //  - criteria: *length btw. 5-8, *if password contains at least one of each types: \w == [A-Za-z0-9_], \W == [^A-Za-z0-9_]
  //
  // strong: (create account - allowed)
  //  - criteria: *length btw. 13-19, *any alphanumeric character and underscores
  //  - criteria: *length btw. 9-12, *if password contains at least one of each types: \w == [A-Za-z0-9_], \W == [^A-Za-z0-9_]
  //
  // surpassed: (create account - disabled -> reason: not human)
  //  - criteria: *length > 20, *any character except newline
  //  - criteria: *length btw. 13-19, *if password contains at least one of each types: \w == [A-Za-z0-9_], \W == [^A-Za-z0-9_]
  //
  // Mention:
  // - the password input is constraint from accepting: \s - any whitespace character (space, tab, form feed and so on)
  //
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
    { // btw. 5 and 8, pass must contain \w\W // btw. 9 and 12 will match only [a-zA-Z0-9_]
      type: 'good',
      color: '#47d147',
      line: '225px',
      regex: /^((?=(?:.{9,12})$)([a-zA-Z0-9_]+)|(?=(?:.{5,8})$)((\W*\w+\W+.*)|(\w*\W+\w+.*)))$/
    },
    { // btw. 9 and 12, pass must contain \w\W // btw. 13 and 19 will match only [a-zA-Z0-9_]
      type: 'strong',
      color: '#1a75ff',
      line: '300px',
      regex: /^((?=(?:.{13,19})$)([a-zA-Z0-9_]+)|(?=(?:.{9,12})$)((\W*\w+\W+.*)|(\w*\W+\w+.*)))$/
    },
    { // >20 char // 13 -> 19 with \w\W -> take it as text
      type: 'surpassed',
      color: '#000a1a',
      line: '300px',
      regex: /^((.{20,}$)|(?=(?:.{13,19})$)((\W*\w+\W+.*)|(\w*\W+\w+.*)))$/
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
            // break each loop on index match
            if( elemIndex === currentMatchedIndex ){ return false; }
          });
  
          // when the user starts to erase the password, the coloring has to be reset to the default value
          // the second condition is for avoinding assignment to undefined pass-meter elem, since there is the 5th case for surpassed
          if(( globMatchedIndex > currentMatchedIndex ) && ( globMatchedIndex < $meterElements.length )){
            
            var tmpIndex = globMatchedIndex;
            // loop required to cover cases where the erased char downgrades the remaining password with more than one level
            while( tmpIndex > currentMatchedIndex ){
              // get pass-meter last colored element after match
              var meterElem = $meterElements[tmpIndex];
              // assign default color
              $(meterElem).css('background-color', 'lightgray');
              // decrease index
              tmpIndex--;
            }
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


$(document).ready(function () {
    $("#form_id").validate({
        debug: false,
        errorPlacement: function (error, element) {
            error.insertBefore(element);
        },
        submitHandler: function (form) {
            $(".success-overlay").show();
            $(".success-message").show();    
            return false;
        },
        rules: {
            email: {
                required: true,
                email: true,
                minlength: 10
            }
        },
        highlight: function(element, errorClass) {
                $(element).style.borderColor = "red";
  },
        messages: {
            email: {
                required: "Please enter your email address",
                email: "Please enter a valid email address"
            }
        }
    });
});

 $("#submit-btn").click(function(){
       
    var email = $('#email-login').val();  
    var password = $('#password-login').val();
    
    var obj=new Object();
    obj.email = email ;
    obj.password=password;

          $.ajax({
              type:"POST",
              dataType:"json",
              data:obj,
              url:"account/login", 
              success: function(data) {   
                  alert("Success !");
                  $.each(data, function (key, value) {
                  console.log(value.uname);
                      if (value.uname != '' && value.password!='')
                          {
                              if(value.email == email && value.password == password)
                              alert("Correct password");
                              return false;
                          }
                  });
              },
              error: function() {
              }
           });



});

