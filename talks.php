<!DOCTYPE html>

<?php
require 'macros.php';

$year1=2015;
$year2=$year1+1;

function write_calendar_lines($lines) {
   foreach($lines as $line) {
   if($line == null || strlen(trim($line)) == 0) continue;
   
   $parts = preg_split("/[\s]*,[\s]*/", $line);
   if(count($parts) != 3) continue;
   $line_date = date_parse($parts[0]);
   $line_month = intval($line_date['month']);
   $line_day = intval($line_date['day']);
   $line_year = intval($line_date['year']);
   echo "<tr><td><b>" . $line_day . "/" . $line_month . "/" . $line_year . "</b></td><td> - " . trim($parts[1]) . " " . trim($parts[2]) . ".</td></tr>";
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
	<h2> Kalender <?php echo $year1; ?></h2>
	<table>
		  <?php

		     // Get first file for first period in calendar.
		     $lines = file($year1 . '.txt', FILE_SKIP_EMPTY_LINES);

		     write_calendar_lines($lines);
		   ?>
	</table>
	      
	<h2> Kalender <?php echo $year2; ?></h2>
	<table> 
		  <?php

		     // Get first file for first period in calendar.
		     $lines = file($year2 . '.txt', FILE_SKIP_EMPTY_LINES);

		     write_calendar_lines($lines);
		   ?>
	</table>
	      
	    
	  
      </div>
    </div>
  </div>
</body>
</html>
