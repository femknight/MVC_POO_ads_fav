<?php

echo "test de articles";
 ?>
<h1>Liste des articles</h1>
<?php
   foreach ($articles as $article){?>
   <h2> 
    <?= $article['title']?> </h2>

    <p>
    <?= $article['introduction']?>

    </p>
    <a href="index.php?Controller=Articles&task=showbyid&id=<?=$article['id']?>"> lire l'article</a>
   <a href="index.php?Controller=Articles&task=delete&id=<?=$article['id']?>">Supprimer</a>
    
    <?php }?> 