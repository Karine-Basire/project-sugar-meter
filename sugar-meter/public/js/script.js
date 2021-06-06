function fetchProductBase() {
  // VENTILATION
  let inputSearch = document.getElementById('input_search');
  let resultPieceSugar = document.getElementById('result_piece_sugar');

  let barCode = inputSearch.value; // exemple '7622210449283'

  fetch('https://world.openfoodfacts.org/api/v0/product/' + barCode)
    .then(reponse => reponse.json())
    .then((data) => {
      // console.log(data)

      // masque
      let percentSugar = data.product.ingredients[1].percent_estimate;
      let gramSugar = getGramSugarUser(percentSugar);
      let pieceSugar = gram2PieceSugar(gramSugar);

      let gramSugarMask = maskGram(gramSugar);
      let pieceSugarMask = maskGram(pieceSugar);

      let feedbackPieceSugar = `<p>🥄 Vous avez consommé ${gramSugarMask}g de sucre,
                                      ce qui correspond à ${pieceSugarMask}  morceaux de sucre🥄</p>`;
      resultPieceSugar.innerHTML = feedbackPieceSugar;

      let eleDeck = document.querySelector('.deck')

      //recuperation data
      let productNameFr = data.product.product_name_fr;
      let imageFrontSmallUrl = data.product.image_front_small_url;
      let percentEstimate = data.product.ingredients[1].percent_estimate;
      let productId = data.product._id;

      eleDeck.innerHTML = getHtmlCard(productNameFr, imageFrontSmallUrl, percentEstimate, productId)
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

// renvoi une chaine qui contient le HTML d'une carte
function getHtmlCard(productNameFr, imageFrontSmallUrl, percentEstimate, productId) {
  let percentRound = Math.round(percentEstimate * 100) / 100;
  return `<div class="card">
  <h2>${productNameFr}</h2>
  <div class="img_card" style="background-image: url(${imageFrontSmallUrl});">
  <img src="${imageFrontSmallUrl}" alt="${productNameFr}">
  </div>
  <p class="pourcentage_sucre">Pourcentage de sucre&nbsp;: <span>${percentRound}</span>%</p>
  <p class="code-barre">Code-barre&nbsp;: <span>${productId}</span></p>
  </div>`;
}

let submitSearch = document.getElementById('submit_search');
submitSearch.addEventListener("click", function () {
  fetchProductBase()
});