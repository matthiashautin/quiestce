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
        <?php
        $personnages = ["images/1.jpg", "images/2.jpg", "images/3.jpg", "images/4.jpg", "images/5.jpg", "images/6.jpg", "images/7.jpg", "images/8.jpg", "images/9.jpg", "images/10.jpg", "images/11.jpg", "images/12.jpg", "images/13.jpg", "images/14.jpg", "images/15.jpg", "images/16.jpg"];
        shuffle($personnages);
        echo('

        <div class="lignepersonnages">

        
          <img src="'.$personnages[0].'" alt="1" style="width:13%">
          <img src="'.$personnages[1].'" alt="2" style="width:13%">
          <img src="'.$personnages[2].'" alt="3" style="width:13%">
          <img src="'.$personnages[3].'" alt="4" style="width:13%">
          <img src="'.$personnages[4].'" alt="5" style="width:13%">
        
        </div>

        <div class="lignepersonnages">

          <img src="'.$personnages[5].'" alt="6" style="width:13%">
          <img src="'.$personnages[6].'" alt="7" style="width:13%">   
          <img src="'.$personnages[7].'" alt="8" style="width:13%">
          <img src="'.$personnages[8].'" alt="9" style="width:13%">
          <img src="'.$personnages[9].'" alt="10" style="width:13%">
          <img src="'.$personnages[10].'" alt="11" style="width:13%">
        </div>

        <div class="lignepersonnages">

          <img src="'.$personnages[11].'" alt="12" style="width:13%">
          <img src="'.$personnages[12].'" alt="13" style="width:13%">
          <img src="'.$personnages[13].'" alt="14" style="width:13%">
          <img src="'.$personnages[14].'" alt="15" style="width:13%">
          <img src="'.$personnages[15].'" alt="16" style="width:13%">

        </div>

        ');
        ?> 
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
