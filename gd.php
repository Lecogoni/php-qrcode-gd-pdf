<?php

/*
-------------------------------------------------*/

// SPIRALE 


// $width=500;
// $height=500;
// $origx = $width / 2 ;
// $origy = $height / 2 ;
// $pfx = 250 ;
// $pfy = 125 ;
// Header("Content-type: image/gif");
// $im = imagecreate($width,$height);
// $gray=ImageColorAllocate($im,225,225,225);
// $black=ImageColorAllocate($im,0,0,0);
// for ($i=0; $i<=500 ; $i+=25)
// {
// imageline($im,0,0,$i,500,$black);
// imageline($im,500,0,500-$i,500,$black);
// }
// imagePng($im);
// ImageDestroy($im);

/*
-------------------------------------------------*/

// // dessine le canevas
// $x = 500;
// $y = 500;

// header("Content-type: image/png");
// $image = imagecreate($x,$y);
// // donne un fond
// $gray=ImageColorAllocate($image,225,225,225);
// // couleur de trait
// $black=ImageColorAllocate($image,0,0,0);


// for ($i=0; $i<=500; $i+=10)
// {
// imageline($image,$i,0,$i,500  - $i,$black);
// }

// //envoie l'img dans le browser
// imagePng($image);
// ImageDestroy($image);


/*
-------------------------------------------------*/


// $x = 500;
// $y = 500;

// header("Content-type: image/png");
// $image = imagecreate($x,$y);
// // donne un fond
// $gray=ImageColorAllocate($image,225,225,225);
// // couleur de trait
// $black=ImageColorAllocate($image,0,0,0);



// for ($i=0; $i<=500; $i+=10)
// {
//   // imageline($image,0,0,500,0,$black);
//   imageline($image,0,$i,500 - $i,$i,$black);
//   // imageline($image,500,0,500,500,$black);
//   imageline($image,500 - $i, $i,500 -$i,500,$black);
// }

// //envoie l'img dans le browser
// imagePng($image);
// ImageDestroy($image);

/*
-------------------------------------------------*/

// $x = 500;
// $y = 500;

// header("Content-type: image/png");
// $image = imagecreate($x,$y);
// // donne un fond
// $gray=ImageColorAllocate($image,225,225,225);
// $black=ImageColorAllocate($image,0,0,0);


// for ($i=495; $i>=0; $i-=10)
// {
//   imageline($image,0,495,495,$i,$black);
// }

// //envoie l'img dans le browser
// imagePng($image);
// ImageDestroy($image);

/* CARRE QUI DIMINUE DE TAILLE
-------------------------------------------------*/



$x = 501;
$y = 501;

header("Content-type: image/png");
$image = imagecreate($x,$y);
// donne un fond
$gray=ImageColorAllocate($image,225,225,225);
$black=ImageColorAllocate($image,0,0,0);


for ($i=0; $i<=500; $i+=20)
{

  //horizontal haute
  imageline($image,$i,$i,500 -$i, $i,$black);
  // verticale gauche
  imageline($image,$i,$i,$i,500 - $i,$black);
  // verticale droite
  imageline($image,500- $i,$i,500 - $i, 500- $i,$black);
  //horizontal bas
  imageline($image,$i,500 - $i,500 - $i,500 - $i,$black);
}

//envoie l'img dans le browser
imagePng($image);
ImageDestroy($image);



/*
-------------------------------------------------*/