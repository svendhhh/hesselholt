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
	Jeg kommer i hele landet med f&oslash;lgende foredrag:
	<ul>
	  <a href="about-talks.php?talk=kingo"><li>Thomas Kingo.</li></a>
	  <a href="about-talks.php?talk=brorson"><li>Hans Adolph Brorson.</li></a>
	  <a href="about-talks.php?talk=ingemann"><li>Bernhard S. Ingemann.</li></a>
	  <a href="about-talks.php?talk=lucie"><li>Lucie Mandix. En varm kvinde i en kold tid.</li></a>
	  <a href="about-talks.php?talk=hans-fugl"><li>Hans Fugl. En udvandrerkrønike.</li></a>
	  <a href="about-talks.php?talk=hjemstavn-og-udsyn"><li>Hjemstavn og Udsyn.</li></a>
	  <a href="about-talks.php?talk=engle"><li>Engle, milde eller vilde?</li></a>
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
