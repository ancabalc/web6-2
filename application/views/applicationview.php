<div class="container">
   <div class="col-sm-3">
       
      <form>
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
        <select class="form-control">
          <option>Localitate</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
          <option>5</option>
        </select><br>
        <button type="submit" class="btn btn-default">Submit</button>
      </form> 
   </div> 
    
    <div class="col-sm-9 applications"></div>
    
</div>   

<script type="text/javascript" src="<?php echo base_url();?>/assets/js/getApplications.js"></script>