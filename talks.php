<!DOCTYPE html>

<?php
require 'macros.php';

$year1=2013;
$year2=$year1+1;

function write_calendar_lines($lines) {
   foreach($lines as $line) {
   if($line == null || strlen(trim($line)) == 0) continue;
   
   $parts = preg_split("/[\s]*,[\s]*/", $line);
   if(count($parts) != 3) continue;
   $line_date = date_parse($parts[0]);
   $line_month = intval($line_date['month']);
   $line_day = intval($line_date['day']);
   echo "<li><b>" . $line_day . "/" . $line_month . "</b> - " . trim($parts[1]) . "<br>" . trim($parts[2]) . ".<p></li>";
   }
}

?>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>Marianne Hesselholt - Forfatter og Foredragsholder.</title>
  <script type="text/javascript" src="js/jquery.js" ></script>
  <script type="text/javascript" src="js/global.js" ></script>
  <link href="css/global.css?0" type="text/css" rel="stylesheet"></link>
</head>
<body>
  <div id="content">
    <div id="body">
      <?php insert_header(4); ?>
      <div class="content-frame text">
	<div class="centred">
	  <table>
	    <tr>
	      <td>
		<h2> Kalender <?php echo $year1; ?></h2>
		<ul>
		  <?php

		     // Get first file for first period in calendar.
		     $lines = file($year1 . '.txt', FILE_SKIP_EMPTY_LINES);

		     write_calendar_lines($lines);
		   ?>
		</ul>
	      </td>

	      <td valign="top">
		<h2> Kalender <?php echo $year2; ?></h2>
		<ul> 
		  <?php

		     // Get first file for first period in calendar.
		     $lines = file($year2 . '.txt', FILE_SKIP_EMPTY_LINES);

		     write_calendar_lines($lines);
		   ?>
		</ul>
	      </td>
	    </tr>
	  </table>
	</div>

      </div>
    </div>
  </div>
</body>
</html>
