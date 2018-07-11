<?php 
include_once "helpergarage.php";
include_once "m.php";
extract($_GET);//$id
$voiture=get($id, "voiture");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <meta name="twitter:site" content="@metroui">
    <meta name="twitter:creator" content="@pimenov_sergey">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="Metro 4 Components Library">
    <meta name="twitter:description" content="Metro 4 is an open source toolkit for developing with HTML, CSS, and JS. Quickly prototype your ideas or build your entire app with responsive grid system, extensive prebuilt components, and powerful plugins built on jQuery.">
    <meta name="twitter:image" content="https://metroui.org.ua/images/m4-logo-social.png">

    <meta property="og:url" content="https://metroui.org.ua/v4/index.html">
    <meta property="og:title" content="Metro 4 Components Library">
    <meta property="og:description" content="Metro 4 is an open source toolkit for developing with HTML, CSS, and JS. Quickly prototype your ideas or build your entire app with responsive grid system, extensive prebuilt components, and powerful plugins built on jQuery.">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://metroui.org.ua/images/m4-logo-social.png">
    <meta property="og:image:secure_url" content="https://metroui.org.ua/images/m4-logo-social.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="968">
    <meta property="og:image:height" content="504">

    <meta name="author" content="Sergey Pimenov">
    <meta name="description" content="The most popular HTML, CSS, and JS library in Metro style.">
    <meta name="keywords" content="HTML, CSS, JS, Metro, CSS3, Javascript, HTML5, UI, Library, Web, Development, Framework">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.metroui.org.ua/v4/css/metro-all.min.css">
    <link href="https://fonts.googleapis.com/css?family=Inconsolata" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">
	<title>consultation de voiture : <?=$voiture->nom_voiture ?></title>
</head>
<body>
	<div class="grid bg-blue "  >
      <div class="row">
        <div class="cell-4 offset-4">
        <ul  class="h-menu bg-blue  ">
          <li><a href="voiture.php" class="fg-white ">Home</a></li>
          <li><a href="#" class="fg-white">Products</a></li>
          <li><a href="#" class="fg-white">Support</a></li>
          <li><a href="#" class="fg-white">Cart</a></li>
          <li><a href="#" class="fg-white">about</a></li>
          <li><a href="#" class="fg-white">sign in</a></li>

        </ul>
        </div>
      </div>
    </div></br>
	<div class="grid row  bg-gray border-radius-4 cell-4 offset-4  ">
	<div class="fg-white pb-5 pt-5 mif-2x aa">nom de voiture : <?=$voiture->nom_voiture ?></div>
	<div class="fg-white pb-5 pt-5 mif-2x aa">Prix  : <?=$voiture->prix ?>DHS</div>
    <div><img style="width: 100%" src="<?=$voiture->chemin?>"></div>
	<?php retour("Retour"); ?>

</div>

</body>
</html>