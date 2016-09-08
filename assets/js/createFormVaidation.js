 /* global $*/
    $(function(){
      
      $.validator.setDefaults({
        // redenumirea addClass
        // errorClass:'form-control-feedback',
        
        // adaugarea claselor la error
        highlight:function(element){
          $(element)
              .addClass("form-control-danger")
              .closest(".form-group")
              .addClass("has-danger");
        },
        
        // scoaterea lor si adaugarea de success
        unhighlight:function(element){
          $(element)
              .addClass("form-control-success")
              .closest(".form-group")
              .removeClass("has-danger")
              .addClass("has-success");
        },
        
        // error placement because of the checkbox, is placed inside the element
        errorPlacement:function(error, element){
              if(element.prop('type') === 'checkbox'){
                error.insertAfter(element.parent());
              }else{
                error.insertAfter(element);
              }
        },
        
        
		    submitHandler: function(form) {
		  
    		  var queryString = $(form).serialize(); 
      
           $.ajax({
              data:queryString,
              method:"POST"
           })
  
          		  document.getElementById("createForm").reset();
          		  return false;
		    }
		
	});
	
	 // password matching
	  $.validator.addMethod('strongPassword',function(value,element){
	    var passwordPattern = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[$@$!%*?&])[A-Za-z\d$@$!%*?&]{8,}/ ;
	    return this.optional(element) || passwordPattern.test(value);
	  }, 'Minimum 8 characters at least 1 Uppercase Alphabet, 1 Lowercase Alphabet, 1 Number and 1 Special Character');
      
      $('#createForm').validate({
        rules:{
          nume:{
            required:true,
            minlength:2,
            autocomplete:false
          },
          localitate:{
             required:true,
             autocomplete:false
          },
          email:{
             required:true,
             email:true,
             autocomplete:false
          },
          parola:{
             required:true,
             strongPassword: true
          },
          reparola:{
             required:true,
              equalTo:"#parola"
          }
        },
        messages:{
          nume:{
            required:"Don't forget your name!",
            minlength: $.validator.format("Your minlength of {0} is not right!")
          },
          reparola:{
            
          }
        },
      
      })
    })