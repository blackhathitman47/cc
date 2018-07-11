<?php 
include_once "helpergarage.php";
include_once "m.php";
extract($_GET);//$notice
$voiture=get_all("voiture");

$chemin="";
if(isset($_FILES['image'])){
$chemin=    charger_fichier($_FILES['image']);
$resultat=strstr($chemin,'/');//retourne false(vide) s'il ne trouve pas de /
if(empty($resultat)){
    echo $chemin;

}

}
 ?>

<!doctype html>
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

    <title>garage</title>
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
    </div>




<form action="c.php?a=create&t=voiture" enctype ="multipart/form-data" method="post" > 
  <div class="">
    <div class="row ">
      <div class="cell-4 offset-4 grid bg-gray border-radius-4">
        <label class="fg-white pl-10 pb-5 pt-5 mif-2x aa" >Garage Voiture</label>
        <input name="nom_voiture" type="text" data-role="input"data-prepend="nom">
        </br>
         <input name="prix" type="text" data-role="input"data-prepend="prix">
       </br>
        <input name="image" type="file" data-role="file" data-caption="Choose file">
        <div class="row">
          <div class="cell grid " align="center">
            <button type="submit" class="button bg-blue fg-white mif-2x aa">O K</button>
          </div>
        </div>
        <?php if (isset($action)): ?>
    <?php notifier($action, "voiture"); ?>
  <?php endif ?>
      </div>
    </div>
  </div>
</form>





<table class="table table-border cell-border row-hover">
  <tr align="center " >
    <th>Nom voiture</th>
    <th>prix</th>
    <th>actions</th>
  </tr>

<?php foreach ($voiture as $p): ?>
  <tr align="center">
    <td><?= $p->nom_voiture?></td>
    <td><?= $p->prix?></td>
    <td><div class="button"><a href=" c.php?a=delete&t=voiture&id=<?=$p->id?>">Supprimer</a></div>
    <div class="button"><a href="c.php?a=edit&t=voiture&id=<?=$p->id?>">Editer</a></div>
    <div class="button"><a href="c.php?a=show&t=voiture&id=<?=$p->id?>">Consulter</a></div></td>
  </tr>
<?php endforeach ?>
  
</table>

  
      
 
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
   <script src="https://cdn.metroui.org.ua/v4/js/metro.min.js"></script>
  </body>
</html>