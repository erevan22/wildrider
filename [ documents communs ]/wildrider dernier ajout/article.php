<?php
require ('../wildrider/models/produit.class.php');
$produit = new Produit();

<?php
echo '<input type="check_box" name="ajout_'.$donnes['id_article'].'" >';
//[...]
echo '<input type="texte" name="nombre_'.$donnes['id_article'].'" >';