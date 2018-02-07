<?php
require 'macros.php';

if (isset($_GET["book"])) {
	$book = $_GET["book"];
	$book_path = "books/" . $book . ".xml";
	if (file_exists($book_path)) {
		$xml = simplexml_load_file($book_path);
	}
}
if (empty($xml))
{
//	header('Location: books.php');
}
?>
<!DOCTYPE html>

<html>
<?php macro_open_head(); ?>
    <title><?= $xml->title ?></title>
  </head>

  <body>
  <div class="container">
	<?php insert_header(3,''); ?>
    <div class="row">
		<div class="col-md-2" style="text-align:center;padding-top:25px">
			<img src="<?= $xml->image ?>" class="img-rounded" alt="<?= $xml->image_title ?>">
		</div>
		<div class="col-md-6">
			<h2 class="text-left"><?= $xml->title ?></h2>
			<p class="lead"><?= $xml->subheader ?></p>
		</div>
		<div class="col-md-4">
			<!--div style="float: right; padding-right: 15px;
  padding-left: 15px;"-->
			<br />
		<?php
			if (!empty($xml->price))
			{
		?>
			
			<p class="lead">
			Send mig en mail, hvis du vil købe bogen. Den koster <?= $xml->price ?> kr og sendes portofrit.
			<a href="mailto:marianne@hesselholt.com?subject=K&oslash;b af <?= $xml->title ?>">marianne@hesselholt.com</a>
			</p>
			<a href="mailto:marianne@hesselholt.com?subject=K&oslash;b af <?= $xml->title ?>" class="btn btn-info" role="button">
			Kr <?= $xml->price ?>,-
			</a>
		<?php
			}
		?>
		</div>
	</div>

	<?php
		if (!empty($xml->jumbotron))
		{
	?>
		<hr/>
		<div class="jumbotron">
			<?= $xml->jumbotron ?>
		</div>

	<?php
		}
		if (!empty($xml->review))
		{
	?>
	<hr/>
	<div>
		<div class="section-header">
			<?= $xml->review_header ?>
		</div>
		<?php
			if (!empty($xml->review_subheader))
			{
		?>
		<p><?= $xml->review_subheader ?></p>
		<?php
			}
		?>
		<blockquote>
			<?= $xml->review ?>
		</blockquote>

	</div>
	<?php
		}
	?>

	<?php
		if (!empty($xml->review2))
		{
	?>
		<hr/>
		<div>
	<?php
			if (!empty($xml->review2_header))
			{
	?>
		<div class="section-header">
			<?= $xml->review2_header ?>
		</div>
	
		<?php
			}
			if (!empty($xml->review2_subheader))
			{
		?>
			<p><?= $xml->review2_subheader ?><p>
		<?php
			}
		?>

	<blockquote>
		<?= $xml->review2 ?>
	</blockquote>
      </div>
	<?php
		}
	?>

	<?php
		if (!empty($xml->excerpt))
		{
	?>

		<hr/>

		<div>
			<div class="large-section-header">
				<?= $xml->excerpt_header ?>
			</div>
			<div class="container">
				<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo1">Læs <?= $xml->excerpt_name ?>...</button>
				<div id="demo1" class="collapse">
					<?= $xml->excerpt ?>
				</div>
			</div>
		</div>
		
	<?php
		}
	?>

	<?php macro_insert_footer(); ?>
	</div>
	</body>
</html>
