<nav class="nav nav-pills nav-stacked col-md-2" id="meinTab">
  <a class="nav-link active" data-toggle="tab" href="#home" role="tab">Creare oferte</a>
  <a class="nav-link" data-toggle="tab" href="#profile" role="tab">Lista oferte</a>
</nav>
<!-- Tab panes -->
<div class="tab-content">
  <div class="tab-pane active" id="home" role="tabpanel">
      <?php include "addofferview.php" ?>;
  </div>
  <div class="tab-pane" id="profile" role="tabpanel">
      <?php include "offersview.php" ?>;   
  </div>
</div>
