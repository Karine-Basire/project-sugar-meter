<h1><span style="color: #9370DB">SEO REFERENCEMENT NATUREL ET BONNES PRATIQUES</span></h1>

<h2><span style="color: #00CED1">BALISE META </span></h2>

<span style="color: #FF69B4">**Les balises meta vont renseigner les robots de google mais elles vont aussi aider les utilisateurs**</span><br>
__Robot__: qu'est ce que votre site de quoi il parle, comment les robots doivent l'afficher.<br>
__Utilisateur__: titre, keywords, langue etc...

<span style="color: #FF69B4">**Balise meta description est trés importante(240 caractères max)**</span>

`<meta name="description" content="Ma description personnalisée">`


><span style="color: #FF0000">**Ne plus utiliser:**</span><br>
  ` <meta name="keywords" content="seo, referencement, meta">`<br>
  `<meta name="author" content="Karine Basire">`

---

<h2><span style="color: #00CED1">BALISE TITLE</span></h2>

`<title>cours seo introduction</title>`<br>

- Est extrêment importante pour les moteurs de recherche. <br>
- Doit être assez courte,(50, 60caractères/600px) <br>
- Mots importrants au débuts. <br>
- Doit être decriptive et donner envie. <br>
- Peut contenir de mots clés sans faire du "keywords stuffing". <br>

<span style="color: #FF69B4">**Les balises strong ne servent plus à rien concernant le référencement SEO.**</span><br>
  
---
<h2> <span style="color: #00CED1">LES BACKLINKS</span> </h2>

<span style="color: #FF69B4">**Ce sont les liens qui pointent vers notre site**</span><br>

  Ex: `<a href="https://google.com">google</a>`
- Il accorde de la crédibilité à votre site.<br>
- Google vous fait donc plus confiance et vous apparaissez plus haut dans les SERPs(search engine results pages).<br>
- Il faut que le site d'ou proviennent les backlinks soit de qualité, qu'il soit un exemple dans son milieu.<br>
- L'ancre du texte doit contenir des mots clés, ou être optimisée.<br>
  ex: pas de cliquez-ici ou en savoir plus etc...

  
   ><span style="color: #FF0000">**Attention!!**</span><br>
   Se procurer des liens en payant des services ou des outils pour créer des baklist et très dangereux. <br>
  On peut se retrouver sur la liste noire de google.<br>

---
<h2> <span style="color: #00CED1">LES BALISES DE TITRE</span> </h2>

- Il existe 6 balises de titre de `<h1></h1>` jusqu'à `<h6></h6>`.<br>
- Elles sont beaucoup **moins importante** que le balise **"meta title"**.<br>
- Servent à présenter une page, peuvent aider les lecteurs, liseuses d'écrans .<br>
- Un seul H1 par page, puis on avise pour les autres, le tout pour presenter et structurer sa page.<br>

---
 <h2> <span style="color: #00CED1">L'ATTRIBUT TITLE</span> </h2>

Ex: `<a title="Les meilleurs livres de 2021">`En savoir plus`</a>`.<br>
- Il faut l'éviter.
- On préfère renseigner un bon "alt" ou une bonne ancre de lien !<br>
- Les lecteurs d'écrans le lisent mal ou pas du tout.<br>
- Apporte pas mal de bug lié à son tooltip.
---
<h2> <span style="color: #00CED1">LES IMAGES</span> </h2>

Ex: `<img src="" alt="Coucher de soleil de la Dune du Pilat">`

- alt est trés important pour le SEO, description de l'image (125 caractères)<br>
- Etre bien explicite<br>
- Eviter de ne pas mettre de alt/ de mettre juste un mot dans alt<br>
- Ce texte alternatif, deux entités peuvent le lire <br>
         1- Les personnes avec des problèmes d'accessibité<br>
         2- Les robots vont crawlés le site et ils vont lire les textes alternatifs<br>
- On utilise la compression d'image pour que le site soit performant. <br>
        1- **LOSSY**: on permet de perdre de la qualité de notre image.<br>
        2- **LOSSLESS**: On ne touche pas à la qualité.<br>

---

<h2><span style="color: #00CED1">KEYWORDS</span></h2>

<span style="color: #FF69B4">**Les mots clés sont des mots ou des listes de mots appartenant à un thème précis, recherchés par un utilisateur de moteur de recherche.**</span><br>

- Mot clés de base : Chat. <br>
  - On n'est pas seul dessus. (short tail)<br>
- Mot clés avec modificateurs : Nourriture pour chat, race de chat.<br>
- Mots clés étendus : Meilleure nourriture pour Maine Coon, combien de temps vit le chat, vivre avec un chat...<br>
  - On s'insère plus facilement. (long tail)
  - Regarder les outils pour chercher les keywords <br>
    ex: https://www.wordtracker.com/<br>(placer les mots clés)
---
<h2> <span style="color: #00CED1">LES "RICH SNIPPETS"</span> </h2>

<span style="color: #FF69B4">**Bout d'interface qui répond à une question posé par un utilisateur sur google.<br>**</span>
On rajoute du json dans le head.
- Se rendre sur le site https://answerthepublic.com/ ou l'on peut voir les questions les plus posées. Ce qui permet de ciblées les questions posées<br>
Les rich snippets peuvent être représentés sour forme de :
    - Liste <br>
    - Tableau <br>
    - Vidéo (faire des videos sur son site.)<br>
Liens utiles:<br>
  -  https://developers.google.com/search

---
<h2> <span style="color: #00CED1">LES "Sitemap"</span> </h2>

<span style="color: #FF69B4">**C'est une carte des pages de votre site. <br>
création d'un fichier avec toutes les pages de notre site que l'on souhaite indexées: ça va servir aux robots, aux crawlers, ça va les aider.**</span><br>

Utilisé un sitemap si:
    - Votre site contient énormément de pages.<br>
    - Votre site à une navigation compliquée. <br>
    - Certaines pages sont "cachées", mais vous voulez quand même les indexer.<br>
    - Votre site est récent et vous voulez l'indexer rapidement.

 Aller sur https://www.xml-sitemaps.com/ et suivre les instructions<br<>
  - Rentrer l'url de notre sitemaps
  - Génèrer un fichier XML (fichier lisible pour les robots et les humains)
  - Mettre le fichier à la racine de notre site, le renommer, "sitemap.xml" par exemple.
  - Cliquer sur opensearch control, on renseigne l'url de notre sitemaps
  - Un nouveau fichier google est généré, le mettre à la racine de votre site
  - Validation pour que google est renseigné qu'on a bien mis notre sitemap.<br>

  ---
<h2><span style="color: #00CED1">FICHIER robots.txt</span></h2>

<span style="color: #FF69B4">**Faire un fichier dans lequel on va donner des instructions aux robots qui parcourent notre site pour leur enlever un peu de poid.**</span><br>

 - Le fichier robot.txt indique aux crawlers les pages à éviter.<br>
 - Elles peuvent apparaitre dans les resultats de recherche même si les crawlers les évitent. (elles n'auront pas de description / ne serviront pas au SEO).<br>
 - Cela permet aux crawlers de fournir moins d'effort(crawler budget) pour parcourir tout votre site, et enfin d'être indexé plus rapidement.<br>
**Que faut-il mettre dans son robots.txt ?**
    - Du contenu dupliqué.
    - des pages administrateur.
    - Pages de chat.
    - Pages de remerciements.
    - Pages de mentions légales.
 

---
<h2><span style="color: #00CED1">BALISE META ROBOT</span></h2>

<span style="color: #FF69B4">**Balise à rajouter si on ne veut pas que le robot index la page. Cette page n'apparait pas dans les moteurs de recherche.**</span>

`<meta name="robots" content="noindex, nofollow">`<br>

On rajoute "noindex, nofollow" pour empêcher les robots de suivre les liens de la page qu'on ne veut pas indexer.

---
<h2><span style="color: #00CED1">LES MOTEURS DE RECHERCHE</span></h2>

**GOOLE**: 90% des recherches passent par Google.<br>
**BING**: 6% des recherches, moteur de recherche de base sur windows.(Edge utilise >Bing)<br>
**YAHOO**: 2-3% les recherches de Yahoo fonctionnent via Bing. (Firefox utilise yahoo aux US)<br>
**BAIDU**: Seulement disponible en Chine, moteur le plus polpulaire en Chine crée en 2000, enormément de requêtes passent par là.<br>
**YANDEX**: L'équivalent en Russe de Baidu<br>
**DuckDuckGO**: 5% des recherches, pas de pubs, n'utilise pas les données de l'utilisateur de manière abusive, il utilise une compilation de moteurs pour afficher ses resultats, moins bon que Google.<br>
**YOUTUBE**: Extrêmement populaire, détenu par Google, 1 milliard 300 millions d'utilisateurs, 5 milliards de vidéos vues par jour, **mérite de s'y intérésser pour son SEO**.<br>
**FACEBOOK**: 2,74 Milliards d'utilisateurs actifs, assez difficile de s'y placer en tant que page, son système de groupes peut permettre de toucher une audience.
**AMAZON**: 310 Millions d'utilisateurs actifs, peut-être intéressant de placer ses produits sur le marketplace.

---
<h2><span style="color: #00CED1">PASSER SON SITE EN HTTPS</span></h2>

<span style="color: #FF69B4">**HTTP n'est pas sécurisé mais HTTPS l'est.**</span>

- Hypertext transfer protocol secure.
- Les informations sont cryptés donc sécurisées.
- Le protocole de chiffrement s'appelle TLS(Tranfer Laying Security) mais plus connu sous le nom de SSL.
- **C'est très important pour SEO** d'avoir son site en HTTPS.
- C'est disponible en 1 clic chez tous les plus grand hébergeurs.

---
<h2><span style="color: #00CED1">NOM DE DOMAINE</span></h2>

- Ce n'est pas obligatoire de rajouter des mots clés. 1 à 2 mots clés max.
- Certains sites très connus dans un domaine ont des noms sans rapport avec leur thème.
- Il faut que le bouche à oreille (ou clavier à clavier) soit facile.
- Court, prononciation aisée.
- On peut créer des abrégés. (Instagram -> IG, insta | facebook -> FB)
- C'est possible de mettre des accents mais fortement déconseillé.
- Pas de fautes...
- Caractères spéciaux interdits.
- Pas trop de tiret (-).
- Choisir des mots à fort potentiel, qui inspirent confiance.
- Penser au lonf terme, image de marque.
- Extension .com est rassurante.

---
<h2><span style="color: #00CED1">FAVICON</span></h2>

<span style="color: #FF69B4">**Cela fait plus sérieux pour l'utilisateur de voir une icone que de laisser la planète par défaut.**</span><br>
https://realfavicongenerator.net/<br>
Ils en existe pleins d'autres, ne plus mettre une icon en ".ico" comme avant.

---
<h2><span style="color: #00CED1">LES SEMANTIQUES</span></h2>

<span style="color: #FF69B4">**Il faut utiliser les éléments sémantiques pour les boutons, liens, titres, listes, formulaires etc...  pour les lecteurs d'écran.**</span><br>
- h1, h2, h3, h4, h5, h6.
- nav, ul, li...
- button, form, label, input..
- header, footer
- main, section, article
- table, thead, tr, th, td, tbody
- Les listes sont très importante, (Google apprécie fortement)

<span style="color: #FF69B4">**Il faut vraiment les utiliser pour les écrans et les crawlers.**</span><br>
<span style="color: #00CED1">- Les liens</span>

- Le texte doit décrire la destination.
- Les liens sont souvent soulignés.
- Les liens sont "tabable".
- Si le lien entoure une image, n'oubliez pas l'attribut de l'image et rajouté "lien vers le projet React" par ex.
- Si le lien ouvre une nouvelle page, ajouter du texte seulement visible pour les SR.

---
<h2><span style="color: #00CED1">LECTEUR ECRAN</span></h2>

<span style="color: #FF69B4">**Speakeur qui décrit des infos sur le site, il nous dit les actions à suivre, c'est pour ça que la sémantique est importante.**</span><br>


https://www.freedomscientific.com/products/software/home-licenses/

---
<h2><span style="color: #00CED1">LES ATTRIBUTS ARIA</span></h2>

<span style="color: #FF69B4">**Attributs qui ont été crée pour rendre le web plus accessible**</span><br>
- Pas implémenté partout de la même façon.
- **Possède 5 règles officielles.**
  - 1- Ne pas utiliser ARIA (**ELEMENTS SEMANTIQUES avant tout**)

    - On utilise des attributs ARIA si la fonctionnalité qu'on utilise n'est pas disponible nativement. (tab/marquee/region...).

  - 2- Changer les éléments sématique seulement si c'est nécessaire. <br>
    >Eviter de faire ceci: <br>
    `<a role="button">Valider</a>` <br>
      VS <br>
    `<button>Valider</button>`

  - 3- Les éléments qui ont des attibuts ARIA doivent être navigable. <br>

      - Les attributs ARIA servent aux Screnn Reader.
      - Il faut qu'ils soient accessible par navigation.
      - On navigue avec la touche "tab" et les flèches directionnelles.
      - On peut rendre un élément navigable avec tabindex. (tabindex=0)

  - 4-Ne pas cacher des éléments "focusable".<br>
  Sinon les utilisateurs se déplaceront vers du vide et ne comprendront logiquement plus rien.
      
      - `<button role=presentation>Modifier</button>` oublie des guillemets
      - `<button aria-hidden="true">Modifier</button>` 

  - 5-Les éléments interactif doivent avoir un nom.(du texte)

      - Un label pour un input, un texte pour un lien et un bouton, attribut alt, etc...
      > `<label for="nom">Entrez votre nom</label>`
      `<input type="text" id="nom">`

---
<h2><span style="color: #00CED1">LE CONTRASTE</span></h2>

<span style="color: #FF69B4">**Le contraste est très important pour l'accessibilité donc important pour le SEO également.**</span><br>

Il existe des outils pour checker les contrastes, ce que l'on voit n'est pas forcément valide.<br>
- https://colourcontrast.cc/
- https://webaim.org/
- https://coolors.co/

---
<h2><span style="color: #00CED1">LES FORMULAIRES</span></h2>

- Toujours mettre un label
- Faire soon code de façon à ce que l'on puisse naviguer avec tab et les flèches.
- Quand on a un input en commun, les entourer d'un fieldset pour dire qu'ils sont liés.

 <fieldset>
    <legend>Choisissez votre pays préféré</legend>

    <label for="ecosse">Ecosse</label>
    <input type="radio" name="pays" id="ecosse" value="ecosse">

    <label for="australie">Australie</label>
    <input type="radio" name="pays" id="australie" value="australie">
  </fieldset>

  ---
  <h2><span style="color: #00CED1">AUDIT D'ACCESSIBILITE</span></h2>

  <span style="color: #FF69B4">**Il faut aller sur lighthouse dans la console, on va avoir des informations et on va pouvoir corriger des petites erreurs**</span><br>

   ---
  <h2><span style="color: #00CED1">SITE RESPONSIVE</span></h2>

  <span style="color: #FF69B4">**Penser réactif "responsive", très très important**</span><br>

  - S'adapter à toutes les largeur et hauteurs d'ecrans possible.
  - Mobile /Ordinateur / Tablette.
  - Il existe des milliers d'écrans différents.
  - On gère en grande partie le côté "reactif" en css.
      - FLEXBOX
      - CSS-GRID
      - MEDIA QUERIES
      - TEXTE RESPONSIVE 
      - Unité de mesure(, em, rem, vh...), propriétés(min/max-width...)



   ---
  <h2><span style="color: #00CED1">LES PERFORMANCES</span></h2>

   <span style="color: #FF69B4">**avoir de bonnes performances fait gagner des points au SEO. Le chargement doit être rapide**</span><br>

**Bien penser à mettre notre projet sur git ou avoir une sauvegarde avant de minifier**
- Minifier HTML: plus rapide à charger
https://www.willpeavy.com/tools/minifier/
- Minifier CSS:
https://cssminifier.com/

- A utiliser sur la page d'accueil pour améliorer son chargement pas toute les pages.<br>
` <link rel="preload" href="style.css" as="style">`

- Eviter d'avoir du style inline, deux propriétés qui sont performantes en css opacity et transform.

- Aller sur performance dans la console pour faire des comparatifs.

- Se servir de Coverage dans la console pour le js.

- Se servir de async et await en js.

- On met maintenant le script js dans le head mais on rajoute "defer" dans le script.
Ca va dire tu as un script mais tu attends que le DOM soit prêt pour le lancer. <br>
`<script defer src="app.js></script>`

- Il y a aussi async, le chargement se fait de manière asynchrone, il y a analyses des autres script.
`<script async src="app.js></script>`

- Améliorer les performances au niveau des images
    - Images trop grande pour leur emplacement, il faut les resize
    - Compresser les images.
    https://kraken.io/

- Utiliser des sprites.

- Adapter les images à la largeur, suivant l'ecran.

>`<img`<br>
`srcset=`<br>
`arbres-small.jpg 400w,`<br>
`arbres-medium.jpg 700w,`<br>
`arbres-small.jpg 1200w"`<br>
`sizes = "`<br>
`(max-widht=600px) 400px,`<br>
`(max-widht=900px) 700px,`<br>
`1200px"`<br>
`src="arbres-big.jpg">`<br>

- Utiliser les svg pour les petits logos et dessins, icones moins long à charger.
- Lazy loading, il charge seulement ce qui est important, il n'est pas supporté par safari
`<img src="img.jpg" loading="lazy">` 

---
 <h2><span style="color: #00CED1">LES OUTILS</span></h2>

<span style="color: #FF69B4">**Les mots clés**</span><br>
 - https://trends.google.fr/trends/?geo=FR
 - https://neilpatel.com/fr/ubersuggest/
 - https://www.semrush.com/

<span style="color: #FF69B4">**Rapidité d'apparition des premières pages**</span><br>
- https://developers.google.com/speed/pagespeed/insights/?hl=fr
- https://answerthepublic.com/
- La console: lighthouse en mobile et en desktop.

<span style="color: #FF69B4">**Analyses des utilisateurs**</span><br>
- Google analythiques: https://analytics.google.com/


  


