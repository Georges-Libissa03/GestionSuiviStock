<div class="content">
<?php
//var_dump($produit);
?>

<div class="container mt-4">
    <div class="row">
    </div>
    <!-- <div id="barreR">
    <input  type="text" placeholder="Search here" aria-label="Search" id="rechercher">
    </div> -->
    
    
    <div class="row">
        <div class="col-md-12">
            <div class="card">
            <div class="card-header">
                <h4 class="card-title">Liste des Produit</h4>
            </div>
                <div class="card-body">
                <!-- search -->
                <form class="col-md-4" id="barreR">
                <div class="input-group no-border" id="barreR">
                  <input type="text" value="" class="form-control" placeholder="Search..." id="rechercher">
                  <div class="input-group-append">
                    <div class="input-group-text">
                      <i class="nc-icon nc-zoom-split"></i>
                    </div>
                  </div>
                </div>
             </form>
            <!-- search -->
            <div class="table-responsive">
                    <table class="table-info table">
                        <tr>
                            <th class="font-weight-bold text-uppercase">Reference</th>
                            <th class="font-weight-bold text-uppercase">Libelle</th>
                            <th class="font-weight-bold text-uppercase">Quantite</th>
                            <!-- <th class="font-weight-bold text-uppercase">Utilisateur</th> -->
                            <th class="font-weight-bold text-uppercase">Action</th>
                        </tr>
                        <?php
                        foreach ($list as $p) {
                          ?>
                          <tr class="Produits" id="<?= strtolower($p["libelle"])?>">
                          <th><?=$p['ref'] ?></th>
                          <th><?=$p['libelle'] ?></th>
                          <th><?=$p['qtStock'] ?></th>
                          <th>
                            <a href="accueil?p=editProduit&id=<?=$p['id'] ?>" class="btn btn-sm btn-warning">Edit</a>
                            <a href="produitC?idDelete=<?=$p['id'] ?>" class="btn btn-sm btn-danger">Remove</a>
                          </th>
                        </tr>
                        <?php  
                        }
                        ?>
                    </table>
                    <?php 
                  if(isset($_GET['delete']) && $_GET['delete']==1){
                ?>
                  <div class="alert alert-success alert-dismissible fade show">
                      <button type="button" aria-hidden="true" class="close" data-dismiss="alert" aria-label="Close">
                          <i class="nc-icon nc-simple-remove"></i>
                      </button>
                      <span><b> Success - </b> Le produit a bien été supprimé</span>
                  </div>
                <?php 
                  }
                ?>

                
<?php 
                  if(isset($_GET['update']) && $_GET['update']==1){
                ?>
                  <div class="alert alert-success alert-dismissible fade show">
                      <button type="button" aria-hidden="true" class="close" data-dismiss="alert" aria-label="Close">
                          <i class="nc-icon nc-simple-remove"></i>
                      </button>
                      <span><b> Success - </b> Le produit a bien été modifié</span>
                  </div>
                <?php 
                  }
                ?>

                <?php 
                  if(isset($_GET['update']) && $_GET['update']==0){
                ?>
                  <div class="alert alert-danger alert-dismissible fade show">
                      <button type="button" aria-hidden="true" class="close" data-dismiss="alert" aria-label="Close">
                          <i class="nc-icon nc-simple-remove"></i>
                      </button>
                      <span><b> Erreur - </b> Le produit n'a pas été modifié</span>
                  </div>
                <?php 
                  }
                ?>

                </div>
                </div>
            </div>
        </div>
          
    </div>
</div>
</div>