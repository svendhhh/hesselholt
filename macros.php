<?php
   function insert_header($selected=1)
{
   echo '
<div id="headerImg"></div>
<div id="headerNav">
  <ul id="nav" data-selected="'.$selected.'">
    <a href="index.php" data-row="1"><li>Hjem</li></a>
    <a href="about.php" data-row="2"><li>Om Marianne</li></a>
    <a href="books.php" data-row="3"><li>Mariannes b�ger</li></a>
    <a href="talks.php" data-row="4"><li>Foredrag</li></a>
    <a href="contact.php" data-row="5"><li>Kontakt</li></a>
  </ul>
</div>
';
}
?>