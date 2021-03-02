var tabProduit = [];

function init_tab_produit(){
    $.ajax({
        type : "get",
        url : 'http://localhost/suivistock/ajax/getProduit.php',
        dataType : 'json',
        success : function(donnees){
             //console.log(donnees);
            for (let i = 0; i < donnees.length; i++) {
                tabProduit.push(donnees[i]);
            }
        }, 
        error : function(){
            console.log("Erreur de recupération");   
        }
    });
}

//init_tab_produit();
 console.log(tabProduit); 

var error = 0;
var cpt =0;

function recherche(){
    error=0;
    cpt=0;
    var searchBox = document.getElementById("rechercher");
    var produits = document.querySelectorAll(".Produits");
    var searchFilter;

    searchBox.addEventListener('keyup',function (e) {
        searchFilter = e.target.value.toLowerCase().trim();
        console.log(searchFilter);

        produits.forEach(function (u) {
    
            if(searchFilter!=""){
                console.log(u.id.includes(searchFilter));
                if(u.id.includes(searchFilter)){
                    //initSearch();
                    error=0;
                    console.log(u.id);
                   
                    //break;
                }else if(!u.id.includes(searchFilter)){
                    cpt=1;
                    error=1;
                    u.setAttribute("hidden","hidden");
                  
                }
            }

        });
       
    });

}

function initSearch() {
    var searchBox = document.getElementById("rechercher");
    var produit = document.querySelectorAll(".Produits");
    var searchFilter;
    searchBox.addEventListener('keyup',function (e) {
        searchFilter = e.target.value.toLowerCase().trim();
        if(searchFilter==''){

            produit.forEach(function (p) {
                //alert("djjdjd");
                    p.removeAttribute("hidden");
            });
            errorSearch.innerText = "";
        }
    });
}


initSearch();
recherche();




