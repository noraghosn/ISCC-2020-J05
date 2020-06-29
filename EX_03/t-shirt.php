<?php

$nomduproduit= 'T-shirt simple';
$couleur= 'Blanc';
$prix= 10.50;
$disponible= true;
$quantité= 10;

?>


<h3>
<?php
//affichage// 
echo "Le nom du produit est {$nomduproduit}."; 
echo "Il reste $quantité produits en stock.";
echo "Le produit  $nomduproduit est de couleur $couleur.";
?>

<h4>
<?php
// opération simple //
$produits= $prix*3;
$total= $prix * $quantité;

echo "Acheter 3 produits couterait $produits euros.";
echo "Acheter la totalité des produits disponibles coûterait $total euros.";
echo "Si 3 produits sont vendus";
?>

<p>
<?php
//conditions simples//
if ($disponible==true)
{
echo "Le produit $nomduproduit est disponible en ligne.";
}
else {
    echo "Le produit $nomduproduit n'est malheureusement plus disponible.";
}

if ($quantité >= 5)
{
    echo "Il reste {$quantité} produits en magasin.";
}
elseif ($quantité<5 and $quantité>1)
{
    echo "Il ne reste plus que $quantité produits en magasin.";
}
elseif ($quantité == 1)
{
    echo "Il ne reste qu'un produit en magasin.";
}
elseif ($quantité==0)
{
    echo "Il ne reste plus de produit en magasin.";
}
?>
