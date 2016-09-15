<div class="container">
  <h1 class="text-xs-center m-t-3"><?php echo $title;?></h1>
  <form name="createForm" id="createForm" class="form-horizontal m-x-auto m-t-3" style="width:50%;" method="POST">
    <div class=" row">
      <div class="form-group col-xs-12">
        <input id="appSubject" type="text" name="appSubject" class="form-control input-md" placeholder="Application subject"/>
      </div>
    </div>
    <div class=" row">
      <div class="form-group col-xs-12">
        <select id="selectCategory" type="text" name="selectCategory" class="form-control input-md"/>
          <option value="0">Select category</option>
          <?php 
            foreach ($categories as $array) {
              echo '<option value="'.$array['id'].'">'.$array['title'].'</option>';
            }
          ?>
        </select>
      </div>
    </div>
    <div class=" row">
      <div class="form-group col-xs-12">
        <input id="appDescription" type="text" name="appDescription" class="form-control input-md" placeholder="Description"/>
      </div>
    </div>
    <div class=" row">
      <div class="form-group col-xs-12">
        <input id="createApp" type="submit" name="createApp" class="btn btn-danger btn-block" value="SAVE APPLICATION"/>
      </div>
    </div>
  </form>
</div>
