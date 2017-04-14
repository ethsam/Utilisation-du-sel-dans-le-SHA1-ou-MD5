<html lang="fr">
  <head>
    <title></title>
  </head>

  <body>
<h2>Utilisation du sel dans le SHA1 ou MD5</h2>

  <?php
      $salt = "MonGrainDeSel";

      $MonTextAChiffrer = "MonTextAChiffrerPourLeTEST";

  ?>
<br>
<p>Mon text à chiffrer : <?php echo $MonTextAChiffrer;?></p>
<br>
<p>ShA1 seul : <?php echo sha1($MonTextAChiffrer);?></p>
<br>
<p>MD5 seul : <?php echo md5($MonTextAChiffrer);?></p>
<br>
<p>ShA1 + grain de sel : <?php echo sha1($salt.$MonTextAChiffrer);?></p>
<br>
<p>MD5 + grain de sel : <?php echo md5($salt.$MonTextAChiffrer);?></p>
<br>
<br>
<p>Le grain de sel permet un chiffrement de meilleur qualité,</p>
<p>Avec le sel le dechiffrement prendra enormement de temp,</p>
<p>voir meme l'impossibilité de déchiffrer.</p>
<p>www.ethsam.fr</p>




  </body>
</html>
