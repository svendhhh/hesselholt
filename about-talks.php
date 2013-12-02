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
	  <li>Thomas Kingo.</li>
	  <li>Hans Adolph Brorson.</li>
	  <li>Bernhard S. Ingemann.</li>
	  <li>Lucie Mandix. En varm kvinde i en kold tid.</li>
	  <li>Hans Fugl. En udvandrerkrønike.</li>
	  <li>Hjemstavn og Udsyn.</li>
	  <li>Engle, milde eller vilde?</li>
	  <li>Skyggen af en Hverdag (om Alzheimer).</li>
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
	   }
	   ?>

      </div>
    </div>
  </div>
</body>
</html>
