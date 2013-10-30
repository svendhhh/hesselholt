<?php
   function insert_header($selected=0)
{
   echo '
<div id="headerImg"></div>
<div id="headerNav">
  <ul id="nav" data-selected="'.$selected.'">
    <li data-row="1"><a href="index.php">Hjem</a></li>
    <li data-row="2"><a href="about.php">Om Marianne</a></li>
    <li data-row="3"><a href="books.php">Mariannes bøger</a></li>
    <li data-row="4"><a href="talks.php">Mariannes foredrag</a>
		<ul>
			<li data-row="4"><a href="talks.php">Foredragskalender</a></li>
			<li data-row="4"><a href="about-talks.php">Om mine foredrag</a></li>
		</ul>
	</li>
    <li data-row="5"><a href="contact.php">Kontakt</a></li>
  </ul>
</div>
';
}

function macro_open_head()
{
	echo '
		<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Marianne Hesselholt - Forfatter og Foredragsholder.</title>
		<script type="text/javascript" src="js/jquery.js" ></script>
		<script type="text/javascript" src="js/dropdown.js"></script>
		<script type="text/javascript" src="js/global.js" ></script>
		<link href="css/global.css?0" type="text/css" rel="stylesheet"></link>
		<link href="css/navigation.css" type="text/css" rel="stylesheet"></link>
		';
}
?>