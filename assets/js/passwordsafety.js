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

