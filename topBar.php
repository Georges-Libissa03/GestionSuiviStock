
<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="white" data-active-color="danger">
      <div class="logo">
        <a href="https://www.creative-tim.com" class="simple-text logo-mini">
          <div class="logo-image-small">
            <img src="/suiviStock/public/template/assets/img/logo-small.png">
          </div>
          <!-- <p>CT</p> -->
        </a>
        <a href="https://www.creative-tim.com" class="simple-text logo-normal">
          <?= $_SESSION['nomComplet']?>
          <!-- <div class="logo-image-big">
            <img src="/suiviStock/public/template/assets/img/logo-big.png">
          </div> -->
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="">
          <a class="waves-effect" href="/suiviStock/accueil">
              <img src="/suiviStock/public/img/logo/Stock.svg" width="70%" class="logo img-fluid" alt="">
          </a>
          </li>
          <li class="btn-rotate dropdown active" onmouseover="activeFunction(this)">
            <a href="/suiviStock/accueil">
              <i class="nc-icon nc-bank"></i>
              <p>Tableau de bord</p>
            </a>
          </li>
          <!-- <li class="btn-rotate dropdown" onmouseover="activeFunction(this)">
                <a class="nav-link" href="" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="nc-icon nc-bell-55"></i>
                  <p>
                    Utilisateurs
                  </p>
                  <p>
                    <span class="d-lg-none d-md-block">Some Actions</span>
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="/suiviStock/addUser">Ajouter utilisateurs</a>
                  <a class="dropdown-item" href="/suiviStock/listUser">Liste utilisateurs</a>
                </div>
          </li> -->
          <li class="btn-rotate dropdown" onmouseover="activeFunction(this)">
                <a class="nav-link" href="" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="nc-icon nc-box-2"></i>
                  <p>
                    Produits
                  </p>
                  <p>
                    <span class="d-lg-none d-md-block">Some Actions</span>
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="/suiviStock/addProduit">Ajouter produits</a>
                  <a class="dropdown-item" href="/suiviStock/listProduit">Liste produits</a>
                </div>
          </li>
         
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="javascript:;">stock management system</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            
            <ul class="navbar-nav">
              
              <li class="nav-item">
                  <!--Modal Form Login with Avatar Demo-->
                  <a href="/suiviStock/employeC?deconnexion=1" class="">
                      <button type="button" class="btn text-justify btn-danger" data-toggle="modal"
                          data-target="#modalLoginAvatarDemo"
                          style="color: white;">Déconnexion
                      </button>
                  </a>

              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <!-- <div class="content">

      </div> -->
      
<script type="text/javascript">
    function activeFunction(btn) {
      //alert(btn.innerHTML);
      var buttons = document.getElementsByClassName('btn-rotate');
      buttonsLength = buttons.length;

      for (var i = 0 ; i < buttonsLength ; i++) {
        buttons[i].classList.remove('active');      
      }
      btn.classList.add("active");
    }

</script>

<?php
    //include '../../../footer.php';

?>
   
<?php

?>
