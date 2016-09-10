  <div class="container">

    <h1 class="text-xs-center m-t-3">Create account page</h1>

    <form name="createForm" id="createForm" class="form-horizontal m-x-auto m-t-3" style="width:50%;" method="POST">

         <!--name input-->
        <div class=" row">
            <div class="form-group col-xs-12 nume">
                <input id="nume" name="nume" autocomplete="off" type="text" placeholder="Nume*" class="form-control input-md" >
            </div>
        </div>

         <!--localitate input-->
        <div class=" row">
            <div class="form-group col-xs-12">
                <input id="localitate" name="localitate" type="text" placeholder="Localitate*" class="form-control input-md" >
            </div>
        </div>

         <!--email input-->
        <div class=" row">
            <div class="form-group col-xs-12">
                <input id="email" name="email" autocomplete="off" type="text" placeholder="Email*" class="form-control input-md" >
            </div>
        </div>

         <!--Password input-->
        <div class=" row">
            <div class="form-group col-xs-12">
                <input id="parola" name="parola" type="password" data-container="body" data-id="create-pass" onkeypress="return cleanInput(event)"
                data-toggle="popover" data-trigger="focus" data-placement="left" data-content="low"
                Popover on left data-id="create-pass" placeholder="Parola*" class="form-control input-md" >
                <div id="pass-meter" class="pass-meter">
                    <div id="pass-meter-1" class="single-meter"></div>
                    <div id="pass-meter-2" class="single-meter"></div>
                    <div id="pass-meter-3" class="single-meter"></div>
                    <div id="pass-meter-4" class="single-meter"></div>
                </div>
                <span id="pass-meter-icon" class="pass-meter-aux"></span>
                <span id="pass-meter-info" class="pass-meter-aux"></span>
            </div>
        </div>
        
         <!--Password input-->
        <div class=" row">
            <div class="form-group col-xs-12">
                <input id="reParola" name="reparola" type="password" placeholder="Reintrodu parola*" class="form-control input-md" >
            </div>
        </div>

         <!--Button -->
        <div class=" row">
            <div class="form-group col-xs-12">
                <input id="submitButton"  type="submit" name="submit"  class="btn btn-danger btn-block" value="CREEAZA CONT"/>
            </div>
        </div>
      
    </form>

</div>


<!--/* global $*/-->
    <!--// Bootstrap popovers-->
<!--$('#form-signup_v1 [data-toggle="popover"]').popover({trigger: 'focus'});-->
 
<!--$('#form-signup_v1').validate({-->
     
<!--    submit: {-->
        
<!--        settings: {-->
<!--            inputContainer: '.field',-->
<!--            errorListClass: 'ui red pointing below label'-->
<!--        },-->
        
<!--        callback: {-->
<!--            onBeforeSubmit: function (node) {-->
 
<!--                myBeforeSubmitFunction(':D', ':)', $('#form-signup_v1'));-->
 
<!--            },-->
<!--            onSubmit: function (node, formData) {-->
 
<!--                console.log('#' + node[0].id + ' has a submit override.');-->
<!--                console.log(formData);-->
 
                <!--//node[0].submit();-->
 
<!--            }-->
<!--        }-->
<!--    }-->
<!--});-->
 
<!--function myBeforeSubmitFunction(a, b, node) {-->
 
<!--    console.log(a, b);-->
 
<!--    node.find('input:not([type="submit"]), select, textarea').attr('readonly', 'true');-->
<!--    node.append('<div class="ui active loader"></div>');-->
 
<!--}-->
<!--</script>-->









<!--<div class="container">-->

<!--    <h1 class="text-xs-center m-t-3">Create account page</h1>-->

<!--    <form name="createForm" class="form-horizontal m-x-auto m-t-3" style="width:50%;" method="POST">-->

        <!-- name input-->
<!--        <div class="form-group row">-->
<!--            <div class="col-xs-12 nume">-->
<!--                <input id="nume" name="fnume" type="text" placeholder="Nume*" class="form-control input-md" >-->
<!--                <div class="error text-xs-center"></div>-->
<!--            </div>-->
            
<!--        </div>-->

        <!-- localitate input-->
<!--        <div class="form-group row">-->
<!--            <div class="col-xs-12">-->
<!--                <input id="localitate" name="flocalitate" type="text" placeholder="Localitate*" class="form-control input-md" >-->
<!--                <div class="error text-xs-center"></div>-->
<!--            </div>-->
<!--        </div>-->

        <!-- email input-->
<!--        <div class="form-group row">-->
<!--            <div class="col-xs-12">-->
<!--                <input id="email" name="femail" type="text" placeholder="Email*" class="form-control input-md" >-->
<!--                <div class="error text-xs-center"></div>-->
<!--            </div>-->
<!--        </div>-->

        <!-- Password input-->
<!--        <div class="form-group row">-->
<!--            <div class="col-xs-12">-->
<!--                <input id="password" name="fparola" type="password" data-container="body" title="Strength"  data-toggle="popover" data-trigger="focus" data-placement="left" data-content="low"-->
<!--  Popover on left data-id="create-pass" placeholder="Parola*" class="form-control input-md" >-->
<!--                 <div class="error text-xs-center"></div>-->
<!--            </div>-->
<!--        </div>-->
        
        <!-- Password input-->
<!--        <div class="form-group row">-->
<!--            <div class="col-xs-12">-->
<!--                <input id="reparola" name="freparola" type="password" placeholder="Reintrodu parola*" class="form-control input-md" >-->
<!--                <div class="error text-xs-center"></div>-->
<!--            </div>-->
<!--        </div>-->

        <!-- Button -->
<!--        <div class="form-group row">-->
<!--            <div class="col-xs-12">-->
<!--                <button id="singlebutton" disabled type="submit" name="submit" class="btn btn-danger btn-block">CREEAZA CONT</button>-->
<!--            </div>-->
<!--            <div class="error"></div>-->
<!--        </div>-->
      
<!--    </form>-->

<!--</div>-->

<!-- <script>
//     /* global $ */
//   $(function () { 
       
//       var namePattern = /[a-z]+/i;
//       var emailPattern = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
//       var passwordPattern = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[$@$!%*?&])[A-Za-z\d$@$!%*?&]{8,}/    
//     //   console.log(namePattern.test("http://www"));
       
       
       
//       $("input").keyup(function(){
//           var input =$(this);
//           var field = input.attr('name');
//           var inputNext=input.next();
//         //   console.log(field);
        
//         switch(field) {
//         case "fnume":
//             (!namePattern.test(input.val()))?  input.next().html("error") :  input.next().html('');
//             (input.val() === '' )?  input.next().html(''): '';
//         break; 
//         case "flocalitate": 
//             (!namePattern.test(input.val()))?  input.next().html("error") :  input.next().html('');
//              (input.val() === '' )?  input.next().html(''): '';
//         break; 
//         case "femail": 
//             (!emailPattern.test(input.val()))?  input.next().html("error") :  input.next().html('');
//              (input.val() === '' )?  input.next().html(''): '';
//         break; 
//         case "fparola": 
//             (!passwordPattern.test(input.val()))?  input.next().html("Minimum 8 characters at least 1 Uppercase Alphabet, 1 Lowercase Alphabet, 1 Number and 1 Special Character:") :  input.next().html('');
//              (input.val() === '' )?  input.next().html(''): '';
//         break; 
//         case "freparola": 
//             (!passwordPattern.test(input.val()))?  input.next().html("error") :  input.next().html('');
//              (input.val() === '' )?  input.next().html(''): '';
//         break;
       
//     }
    
    
    
        
//         // if(field === 'fnume' ){    
//         //     (!namePattern.test(input.val()))?  input.next().html("error"):  input.next().html('');
//         // }    
       
        
//       })
       
   
       
//   } );
</script>-->

</div>
<!--Login using Facebook account-->
<div id="fb-root"></div>

<script>
    (function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.7&appId=1285490414803865";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>
    
<div class="fb-login-button" data-max-rows="1" data-size="large" data-show-faces="false" data-auto-logout-link="true"></div>

