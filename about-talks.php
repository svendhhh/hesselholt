<!DOCTYPE html>

<?php
require 'macros.php';
   
if (isset($_GET["talk"])) {
   $talk = $_GET["talk"];
   if (file_exists("talks/" . $talk . ".xml")) {
      $xml = simplexml_load_file("talks/" . $talk . ".xml");
   }
}

?>
<html>
<?php macro_open_head(); ?>
</head>
<body>
  <div id="content">
    <div id="body">
      <?php insert_header(4); ?>
      <div class="content-frame text">

	<?php
	   if (empty($xml)) {
	   ?>
	Jeg kommer ikke længere rundt i landet med mine foredrag, men holder dem kun i kort afstand fra hjemmet (i Ålum). Jeg holder blandt andet foredrag om f&oslash;lgende:
	<ul>
	  <a href="about-talks.php?talk=hjemstavn-og-udsyn"><li>Hjemstavn og Udsyn.</li></a>
	  <a href="about-talks.php?talk=dronning-elisabeth"><li>Dronning Elisabeth af Kandestederne</li></a>
	  <a href="about-talks.php?talk=skyggen-af-en-hverdag"><li>Skyggen af en Hverdag (om Alzheimer).</li></a>
	</ul>
	<p>Pris for foredrag: 3000,- kr. plus transport.</p>

	<?php
	   }
	   else {
	   ?>
	<span class="title"><?= $xml->title ?></span>
	<div class="text">
	  <?= $xml->body ?>
	</div>
	<?php
	   if (isset($xml->image)) {
	   ?>
	<img src="img/<?= trim($xml->image) ?>" />
	<?php
	   }
	   }
	   ?>

      </div>
    </div>
  </div>
</body>
</html>
