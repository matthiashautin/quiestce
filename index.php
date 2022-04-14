<!--===TP Qui Est-ce ?
==
Date: Annoncé le 09/03/2022
Lien: ""<a href="http://travaux-pratiques.net/wakka.php?wiki=JeuQuesEstCe" target="_blank">http://travaux-pratiques.net/wakka.php?wiki=JeuQuesEstCe</a>""
1BTSB Grouppe 1
Tp Réalisé par: Thibaud, Enzo, Nils
-->


<!DOCTYPE HTML>
<html>

<head>
  <title>Qui est-ce ?</title>
  <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
  <link rel="stylesheet" type="text/css" href="style/style.css" />
  <link rel="stylesheet" href="index.css">
</head>


<body>
  <div id="main">
    <div id="header">
        <h2>Qui est-ce ?</h2>
        <!-- <h2>Travail par Thibaud, Enzo et Nils.</h2> -->
    </div>  
        
    <div class="page">

      <div class="personnages">

        <div class="lignepersonnages">
        
          <img src="images/1.jpg" alt="1" style="width:13%">
          <img src="images/2.jpg" alt="2" style="width:13%">
          <img src="images/3.jpg" alt="3" style="width:13%">
          <img src="images/4.jpg" alt="4" style="width:13%">
          <img src="images/5.jpg" alt="5" style="width:13%">
        
        </div>

        <div class="lignepersonnages">

          <img src="images/6.jpg" alt="6" style="width:13%">
          <img src="images/7.jpg" alt="7" style="width:13%">   
          <img src="images/8.jpg" alt="8" style="width:13%">
          <img src="images/9.jpg" alt="9" style="width:13%">
          <img src="images/10.jpg" alt="10" style="width:13%">
          <img src="images/11.jpg" alt="11" style="width:13%">
        </div>

        <div class="lignepersonnages">

          <img src="images/12.jpg" alt="12" style="width:13%">
          <img src="images/13.jpg" alt="13" style="width:13%">
          <img src="images/14.jpg" alt="14" style="width:13%">
          <img src="images/15.jpg" alt="15" style="width:13%">
          <img src="images/16.jpg" alt="16" style="width:13%">

        </div>

      </div>

      <div class="formulaire">

      <form action="answer.php" method="post">
        <p style="color:#FF0000";>Avec ou sans lunettes ?</p> 
        Oui   <input type="radio" name="Lunettes" value="1" align="MIDDLE"> &nbsp
        Non   <input type="radio" name="Lunettes" value="0" align="MIDDLE">

        
        <p style="color:#FF0000";>Avec ou sans moustache ?</p>
        Oui <input type="radio" name="Moustache" value="1" align="MIDDLE"> &nbsp
        Non <input type="radio" name="Moustache" value="0" align="MIDDLE">


        <p style="color:#FF0000";>Avec ou sans chapeau ?</p> 
        Oui   <input type="radio" name="Chapeau" value="1" align="MIDDLE"> &nbsp
        Non   <input type="radio" name="Chapeau" value="0" align="MIDDLE"> 


        <p style="color:#FF0000";>Avec ou sans cheveux ?</p> 
        Oui   <input type="radio" name="Cheveux" value="1" align="MIDDLE"> &nbsp
        Non   <input type="radio" name="Cheveux" value="0" align="MIDDLE"> 


        <p style="color:#FF0000";>Avec ou sans boucles d'oreilles ?</p> 
        Oui   <input type="radio" name="Oreille" value="1" align="MIDDLE"> &nbsp
        Non   <input type="radio" name="Oreille" value="0" align="MIDDLE">


        <p style="color:#FF0000";>Avec ou sans barbe ?</p> 
        Oui   <input type="radio" name="Barbe" value="1" align="MIDDLE"> &nbsp
        Non   <input type="radio" name="Barbe" value="0" align="MIDDLE">


        <p style="color:#FF0000";>Avec ou sans noeud papillon ?</p> 
        Oui   <input type="radio" name="Papillon" value="1" align="MIDDLE"> &nbsp
        Non   <input type="radio" name="Papillon" value="0" align="MIDDLE">               

        <br>
        <br>
        <input type="submit" value="Valider" style="width:130px">
        </form>


      </div>
    </div>



 </div>
</body>
</html>

<?php

$personnages["images/1.jpg", "images/2.jpg", "images/3.jpg", "images/4.jpg", "images/5.jpg", "images/6.jpg", "images/7.jpg", "images/8.jpg", "images/9.jpg", "images/10.jpg", "images/11.jpg", "images/12.jpg", "images/13.jpg", "images/14.jpg", "images/15.jpg", "images/16.jpg"]


?>