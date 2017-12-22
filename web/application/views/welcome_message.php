<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">JDR JAVA</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Accueil</a></li>
      <li><a href="#">règles</a></li>
      <li><a href="#">apero</a></li>
      <li><a href="#">remerciments</a></li>
    </ul>
  </div>
</nav>
  
<div class="container">
  <h3>Bienvenue sur le jdr</h3>
  <p>Jdr est un projet développer en JAVA , PHP et react JS qui ce présente sous forme d'un mini jeux de combat tour par tour avec des cartes</p>
</div>
<br>
<br>
<div class="row">
  <div class="col-sm-4">
  <img src="http://static.mnium.org/images/contenu/actus/HearthStone/Cartes/funcards_chanteurs/David-Guetta.png">
  </div>
  <div class="col-sm-4">
  <H3>Le concept :</h3>
		<p>vous vous verez attribué 5 cartes aléatoirement avec des attaques, defence, pa diférentes</p>
		<table>
   <tr>
       <td>Attaque</td>
       <td>Defence</td>
       <td>PA</td>
   </tr>
   <tr>
       <td>150</td>
       <td>500</td>
       <td>3</td>
   </tr>
</table>
  </div>
  <div class="col-sm-4"></div>
</div>


</body>

<style>
table
{
    border-collapse: collapse; /* Les bordures du tableau seront collées (plus joli) */
	text-align : center;
}
td
{
    border: 1px solid black;
}
img {
	height: 250;
    width: 250px;
	padding-left : 50px;
}
</style>
</html>
