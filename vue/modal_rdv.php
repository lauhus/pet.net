<?php
require_once '../model/manager/PetManager.php';
$pet=new PetManager();
$pets=$pet->selectAllPetName($_SESSION['id']);
?>

<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Choisissez un créneau: </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
      </div>
      <div class="modal-body">
          <form action="../controller/controller_rdv.php" method="post">
            <label> Date :</label>
            <input type="date" name="date"> <br>
            <label> Heure de début : </label>
            <input type="time" name="start">
            <p> Durée du rendez-vous visio 30 minutes. </p>
        <div class="form-group">
          <select name="name_pet" class="custom-select">
            <option selected="">Choisir un animal</option>
            <?php foreach ($pets as $value){?>
            <option  value="<?=implode($value) ?>"><?= $value=implode($value) ?></option> <?php } ?>
          </select>
        </div>
      </div>
      <div class="modal-footer">
        <input type="submit" class="btn btn-primary" value="Valider ce rendez-vous">
        </form>
      </div>
    </div>
  </div>
</div>