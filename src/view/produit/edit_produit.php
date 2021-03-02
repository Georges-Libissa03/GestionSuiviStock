<?php

?>
<div class="content">
<div class="container mt-4">
    <div class="col-md-10 offset-1">
        <div class="card">
            <div class="card-header blue lighten-4 text-center text-uppercase h4 font-weight-bold">
                Modifier Produit
            </div>
            <div class="card-body">
                <form action="produitC?id=<?=$res['id']?>" method="post">
                    <div class="row mt-2 offset-1">
                        <div class="col-md-2 text-center">
                            <label for="numero" class="h5">REFERENCE</label>
                        </div>
                        <div class="col-md-8">
                            <input type="text" class="form-control" id="fname" name="ref" value="<?= $res['ref']?>" readonly>
                            <input type="text" class="form-control" id="fname" hidden name="idU" value="<?=$id?>">
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-md-2 text-center">
                            <label for="nom" class="h5">Libelle</label>
                        </div>
                        <div class="col-md-4">
                            <input type="text" id="fname"  class="form-control" value="<?= $res['libelle']?>" name="libelle">
                        </div>
                        <div class="col-md-2 text-center">
                            <label for="prenom" class="h5">Quantite</label>
                        </div>
                        <div class="col-md-4">
                              <input type="text" class="form-control" value="<?= $res['qtStock']?>" name="qtStock" >
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 offset-5 mt-4">
                            <input type="submit" name="editP" class="btn btn-md btn-info">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>