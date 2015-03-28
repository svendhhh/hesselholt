<?php
   function insert_old_header($selected=0)
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

   function insert_header($selected=0,$rootPath='')
{
   echo '
<div class="container" style="background-image:url(\''.$rootPath.'img/header.jpg\');
background-repeat:no-repeat;
height:198px;">
	<!--h2>Marianne Hesselholt - Bøger</h2-->
</div>
<ul class="nav nav-tabs" role="tablist">
	<li'.($selected == 1 ? ' class="active"' : '').'><a href="'.$rootPath.'index.php">Hjem</a></li>
	<li'.($selected == 2 ? ' class="active"' : '').'><a href="'.$rootPath.'about.php">Om Marianne</a></li>
	<li'.($selected == 3 ? ' class="active"' : '').'><a href="'.$rootPath.'books.php">Mariannes bøger</a></li>
	<li class="dropdown'.($selected == 4 ? ' active' : '').'"><a class="dropdown-toggle" data-toggle="dropdown" href="'.$rootPath.'talks.php">Mariannes foredrag<span class="caret"></span></a>
		<ul class="dropdown-menu" role="menu">
			<li><a href="'.$rootPath.'talks.php">Foredragskalender</a></li>
			<li><a href="'.$rootPath.'about-talks.php">Om mine foredrag</a></li>                        
		</ul>
	</li>
	<li '.($selected == 5 ? 'class="active"' : '').'><a href="'.$rootPath.'contact.php">Kontakt</a></li>
</ul>
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
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
';
}

function macro_insert_footer()
{
	echo '
	<hr />
	<div class="row">
		<div class="col-md-12" style="text-align: center">
			&copy; Copyright Marianne Hesselholt 2015
		</div>
	</div>
';
}


?>