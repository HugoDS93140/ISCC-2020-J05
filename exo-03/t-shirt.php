<?php
$nom_produit = "T-shirt simple";
$couleur= "Blanc";
    $prix= 10.50;
    $disponible= "true";
    $quantite= 10;
?>

<h3> L'affichage </h3>
<p> le nom du produit est <?php echo $nom_produit ?></p>;

<p> il reste <?php echo $quantité?></p>;

<p> le produit 
    <?php echo $nom_produit ?> est de couleur <?php echo $couleur?></p>;

<h4>Opération Simple</h4>
<p>acheter 3 produits couterait;
<?php $nombre= 10.50*3;
    echo $nombre?></p>
<p>la totalité des produits couterait;
</p>
