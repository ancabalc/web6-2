<div class="container"><br>
<br>
<br>
   <div class="col-sm-3">
      <form method="POST" id="filterform" onsubmit="return false">
        <div class="checkbox">
          <label>
             <input type="checkbox" name="categories[]" value="1"/> Meditatii
          </label>
        </div>
        <div class="checkbox">
          <label>
             <input type="checkbox" name="categories[]" value="2"/> Curatenie & Menaj
          </label>
        </div>
        <select name="localitate" class="form-control">
          <!--<option selected disabled hidden>Localitate</option>-->
          <option selected value=''>Localitate</option>
          <option value='1'>1</option>
          <option value='2'>2</option>
          <option value='3'>3</option>
          <option value='4'>4</option>
        </select><br>
        <button type="submit" name="submit" class="btn searchapp btn-default">Search</button>
      </form> 
   </div><br><br> 
    
    <div class="col-sm-9 applications"></div>
    
</div>   
<?php //  print_r($_POST);?>
<script type="text/javascript" src="<?php echo base_url();?>/assets/js/getApplications.js"></script>