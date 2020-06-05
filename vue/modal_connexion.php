<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Connectez-vous </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <form action="controller/controller_connexion.php" method="post">
        <label>Votre E-mail :</label>
        <input type="text" name="email"> <br>
        <label>Mot de passe : </label>
        <input type="password" name="mot_de_passe">
      </div>
      <div class="modal-footer">
        <input type="submit" class="btn btn-primary" value="Connectez-vous">
</form>
      </div>
    </div>
  </div>
</div>