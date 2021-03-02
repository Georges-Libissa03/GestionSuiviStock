
<div class="content">
<div class="container mt-4">
    <div class="col-md-10 offset-1">
        <div class="card">
            <div class="card-header blue lighten-4 text-center text-uppercase h4 font-weight-bold">
                Nouveau Produit
            </div>
            <div class="card-body">
                <form action="produitC" method="post">
                    <div class="row mt-2 offset-1">
                        <div class="text-center">
                            <label for="numero" class="h5">REFERENCE</label>
                        </div>
                        <div class="col-md-8">
                            <input type="text" class="form-control" id="fname" name="ref" value="<?=$ref?>" disabled>
                            <input type="text" class="form-control" id="fname" name="ref" value="<?=$ref?>" hidden>
                            <input type="text" class="form-control" id="fname" hidden name="idU" value="<?=$id?>">
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-md-2 text-center">
                            <label for="nom" class="h5">Libelle</label>
                        </div>
                        <div class="col-md-4">
                            <input type="text" id="fname"  class="form-control" name="libelle">
                        </div>
                        <div class="col-md-1 text-center">
                            <label for="prenom" class="h5">Quantite</label>
                        </div>
                        <div class="col-md-4">
                              <input type="text" class="form-control" name="qtStock">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 offset-5 mt-4">
                            <input type="submit" name="addProduit" class="btn btn-md btn-info">
                        </div>
                    </div>
                </form>
                <?php 
                  if(isset($_GET['ok']) && $_GET['ok']==1){
                ?>
                  <div class="alert alert-success alert-dismissible fade show">
                      <button type="button" aria-hidden="true" class="close" data-dismiss="alert" aria-label="Close">
                          <i class="nc-icon nc-simple-remove"></i>
                      </button>
                      <span><b> Success - </b> Le produit a bien été ajouté</span>
                  </div>
                <?php 
                  }
                ?>

                <?php 
                  if(isset($_GET['ok']) && $_GET['ok']==0){
                ?>
                  <div class="alert alert-danger alert-dismissible fade show">
                      <button type="button" aria-hidden="true" class="close" data-dismiss="alert" aria-label="Close">
                          <i class="nc-icon nc-simple-remove"></i>
                      </button>
                      <span><b> Erreur - </b> Le produit n'a pas été ajouté</span>
                  </div>
                <?php 
                  }
                ?>
            </div>
        </div>
    </div>
</div>
</div>