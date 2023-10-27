<?php
require 'conectare.php';
?>
<!DOCTYPE html>
<html>
  <head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;400&family=Tapestry&display=swap" rel="stylesheet">
    <title>Critică Literară</title>
    <link rel="stylesheet" href="index.css">
  </head>
  <body>
    <a href="index.html">
      <button class="dmeniu-button">F. M. Dostoievski</button>
    </a>
    <a id="sus">
    <div class="meniu" role="banner">
    <ul>
      <li><a href="index.html">Acasă</a></li>
      <li>
        <a>Viața</a>
        <ul>
          <li><a href="personala.html">Personală</a></li>
          <li><a href="literara.html">Literară</a></li>
  
        </ul>
      </li>
      <li> <a>Opere</a>
        <ul>
          <li><a href="idiotul.html">Idiotul</a></li>
          <li><a href="karamazov.html">Frații Karamazov</a></li>
          <li><a href="crima.html">Crimă și pedeapsă</a></li>
          <li><a href="demonii.html">Demonii</a></li>
        </ul>
      </li>
      <li><a href="ideologie.html">Ideologie</a>
      </li>
      <li><a href="critica.html">Critică literară</a>
 </li>
    </ul>
  </a>
  </div>
  <a class="sm" href="#sus">
    <button class="up">&#129093;</button>
  </a>
  <div class="formular">
  <form action="signup.inc.php" methode="POST">
    <input type='text' name="nume" placeholder="Nume" class="hm">
    <input type='text' name="prenume" placeholder="Prenume" class="hm">
    <input type='text' name="parereata" placeholder="Parerea ta" class="hm">
    <br>
    <input type='submit' name="trimite" placeholder="Trimite" class="buton">
    <br><br>
    </form>
</div>

</body>
</html>