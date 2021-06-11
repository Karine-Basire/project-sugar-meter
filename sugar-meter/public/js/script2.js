  function checkExistingProduct(barcode){
    //On check si le produit existe en base de données
    const product = getProductDatabase(barcode);
    if(product){
        const uptodate = false;
        //check si le produit n'est pas mis à jour depuis plus de 14j
        if(uptodate){
            //afficher l'input qui demande le G ingéré
        }else{
            //on récupère les informations du produit
            const updatedProduct = getProductFromAPI(product.barcode)
            //mettre à jour le produit
            jQuery.ajax({
                type: "POST",
                url: 'updateProductDatabase.php',
                data: {updatedProduct},
                success: function (res) {
                              //afficher l'iput qui demande le G ingéré
                        }
            });
        }

        //afficher le produit
    }else{
        const newProduct = getProductFromAPI(barcode);
        if(newProduct){
            const insertedProduct = insertProductDatabase(newProduct);
            //afficher le produit "insertedProduct"
        }else{
            //afficher que le produit n'existe pas
        }
    }
  }

  function getProductDatabase(barcode){
      jQuery.ajax({
        type: "POST",
        url: 'getProductDatabase.php',
        data: {barcode},
        success: function (res) {
                      return res.result;
                }
    });
  }

  function insertProductDatabase(product){
    jQuery.ajax({
        type: "POST",
        url: 'insertProductDatabse.php',
        data: {product},
        success: function (res) {
                    product.id = res.id;
                    return product;
                }
        });
  }

  function getProductFromAPI(barcode){      
    fetch('https://world.openfoodfacts.org/api/v0/product/' + barCode)
      .then(reponse => reponse.json())
      .then((data) => {
        if(data.status === 0){
            return null;
        }
        const product = {
            name: data.product.product_name_fr,
            imgUrl : data.product.image_front_small_url,
            percentEstimate: data.product.ingredients[1].percent_estimate,
            barcode :data.product._id
        };
        return product;
    });
}