function fetchProductBase() {
  // VENTILATION
  let inputSearch = document.getElementById('input_search');
  let resultPieceSugar = document.getElementById('result_piece_sugar');

  let barCode = inputSearch.value; // exemple '7622210449283'

  fetch('https://world.openfoodfacts.org/api/v0/product/' + barCode)
    .then(reponse => reponse.json())
    .then((data) => {
 
      // masque
      let percentSugar = data.product.ingredients[1].percent_estimate;
      let gramSugar = getGramSugarUser(percentSugar);
      let pieceSugar = gram2PieceSugar(gramSugar);

      let gramSugarMask = maskGram(gramSugar);
      let pieceSugarMask = maskGram(pieceSugar);

      let feedbackPieceSugar = `<p>🥄 Vous avez consommé ${gramSugarMask}g de sucre,
                                      ce qui correspond à ${pieceSugarMask}  morceaux de sucre🥄</p>`;
      resultPieceSugar.innerHTML = feedbackPieceSugar;
    })
}

//récupération de la saisie user/ pourcentage_sucre ===> gramme_sucre
function getGramSugarUser(paraPercentSugar) {
  let inputGram = document.getElementById('input_gram');
  let totalGram = inputGram.value;
  let floatGramSugar = (paraPercentSugar * totalGram) / 100;
  return floatGramSugar; //retourne le nombre de g de sucre consommé par le user
}

//poids gramme_sucre ===> morceau_sucre
function gram2PieceSugar(paraSugarGram) {
  let weightOneSugar = 7.9; //grammes
  let piece = paraSugarGram / weightOneSugar;
  return piece; //retourne le nombre de morceaux de sucre consommé par le user
}

//masque retour
function maskGram(paraFloat) {
  let result = '';
  result = "" + paraFloat.toFixed(1); //12.548654 ===> 12.5
  result = result.replace(/\./gi, ","); //12.5 ===> 12,5 (virgule)
  return result; //retourne 1 chiffre après la virgule
}

let submitSearch = document.getElementById('submit_search');
submitSearch.addEventListener("click", function () {
  fetchProductBase()
});

// function createCard(productNameFr, imageFrontSmallUrl, percentEstimate, productId){



// }