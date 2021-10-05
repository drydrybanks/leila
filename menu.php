<?php
  $page = 'menu';

  // Inclure l'entête
  include('inclusions/entete.php');

  // Inclure la librairie 'citations'
  include('lib/citations.lib.php');
  // Obtenir une citation aléatoire
  $citation = citationAleatoire($langueChoisie, 'menu');

  //Étape 1 : lire le contenu du fichier dans un chaîne de caractères
//Tester si le fichier existe
$menuChaine = file_get_contents("menu-$langueChoisie.json");
echo $menuChaine;

//Décoder la chaîne JSON pour obtenir un tableau PHP
$menuTableau = json_decode($menuChaine, true);
print_r($menuTableau);


?>
    <div class="contenu-principal">
      <div class="citation">
        <img src="images/menu-citation.jpg" alt="">
        <blockquote>
          <?= $citation['texte']; ?>
          <cite>- <?= $citation['auteur']; ?></cite>
        </blockquote>
      </div>
      <div class="carte">

<!-- Boucle pour générer dynamiquement les sections du menu -->
<?php foreach($menuTableau as $titreSection => $platsSection)   :   ?>

        <section>
          <h2><?= $titreSection; ?></h2>
          <ul>


            <!-- Boucle pour généer dynamiquement les plats  -->
            <?php foreach($platsSection as $plat) : ?>
            <li>
              <span><?= $platsSection; ?><br><i><?= $platsSections; ?></i></span>
              <span class="prix"><i class="article-menu-portion">(2 <?= $menu_portion?>)</i>34</span>
            </li>
            <!-- fin de la boucle -->
              <?php endforeach ?>

          </ul>
        </section>
        <?php endforeach ?>
       
      </div>
    </div>


<?php
  // Inclure le pied de page
  include('inclusions/pied2page.php');
?>

<?php
  
?>