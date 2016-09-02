
<div class="container">
    
    <h1 class="text-xs-center">Create account page</h1>
    
   <form class="form-horizontal " style="width:50%;" >
        
        <!-- Text input-->
        <div class="form-group row">
          <div class="col-xs-12">
          <input id="nume" name="nume" type="text" placeholder="Nume*" class="form-control input-md" required="">
          </div>
        </div>
        
        <!-- Text input-->
        <div class="form-group row">
          <div class="col-xs-12">
          <input id="localitate" name="localitate" type="text" placeholder="Localitate*" class="form-control input-md" required="">
          </div>
        </div>
        
        <!-- Text input-->
        <div class="form-group row">
          <div class="col-xs-12">
          <input id="email" name="email" type="text" placeholder="Email*" class="form-control input-md" required="">
          </div>
        </div>
        
        <!-- Password input-->
        <div class="form-group row">
          <div class="col-xs-12">
            <input id="passwor" name="parola" type="password" data-id="create-pass" onkeypress="return cleanInput(event)" 
                placeholder="Parola*" class="form-control input-md" required="">
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
        
        <!-- Password input-->
        <div class="form-group row">
          <div class="col-xs-12">
            <input id="reparola" name="reparola" type="password" placeholder="Reintrodu parola*" class="form-control input-md" required="">
          </div>
        </div>
        
        <!-- Button -->
        <div class="form-group row">
          <div class="col-xs-12">
            <button id="singlebutton" type="submit" name="submit" class="btn btn-danger btn-block">CREEAZA CONT</button>
          </div>
        </div>
    
</form>

</div>
