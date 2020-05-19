<?php require ("cdn.php")
          
 ?>


<div class="modal fade" id="popup1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Hecho!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h3>The file </h3><br>
        <p><span><?php  require("../uploadFile.php");  echo $fileName; ?></span> Was create </p>
      </div>
      <div class="modal-footer">
     
        <button type="button" class="btn btn-primary"  data-dismiss="modal">Aceptar</button>
        
      </div>
    </div>
  </div>
</div>