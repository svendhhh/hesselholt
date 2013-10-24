<!DOCTYPE html>

<?php
require 'macros.php';
?>
<html>
<?php macro_open_head(); ?>
  <link href="css/index.css?0" type="text/css" rel="stylesheet"></link>
</head>
<body>
  <div id="content">
    <div id="body">
      <?php insert_header(1); ?>
      <div id="mugshot"></div>
      <div id="intro" class="text">
	<p>
Velkommen til Marianne Hesselholts hjemmeside. Her kan du finde oplysninger om et forfatterskab, der udfolder sig i børnebøger, romaner og noveller, og om en foredragsvirksomhed, der tager udgangspunkt i de temaer, der behandles i de litterære værker, f. eks.: udvandrere, outsidere, engle, salmedigtere og egnshistorie. Desuden vil du kunne læse lidt om personen bag disse virksomheder.
	</p>
      </div>
      <table class="skinnytable">
	<tr>
	  <td id="featuredbook">
	    <div id="featuredbookimg"></div>
	    <div id="featuredbooktxt">
	      <span class="title">
		Seneste bog
	      </span>
	      <p class="booktitle">
		Digteren og Malerinden
	      </p>
	      <p class="booktext">
		I romanen vil man møde to kunstnere der på mange måder skilte sig ud fra deres samtid, men som skabte verdener af stor skønhed.
	      </p>
	      <button class="readmore">Læs mere</button>
	    </div>
	  </td>
	  <td id="latestblog" rowspan="2" valign="top">
	    <span class="title">
	      Seneste blog post
	    </span>
	    <p class="blogtitle">
	      119 – Et usædvanligt indblik i en bondestue og dens beboere
	    </p>
	    <p class="blogdate">
	      Posted on 27. august 2013	
	    </p>
	    <p class="blogtext">
	      Sidder for tiden dag ud og dag ind og læser Skagen Avis fra 1919 – 1925, og det kan ind imellem synes spild af tid, men af og til fanger man en flig af tidens atmosfære, og det er jo godt for en forfatter, der vil skrive om gamle dage.
	    </p>
	    <button class="readmore" onclick="location.href='http://blog.hesselholt.com'">Læs mere</button>
	  </td>
	</tr>
	<tr>
	  <td id="nexttalk" valign="top">
	    <span class="title">
	      Kommende foredrag
	    </span>
	    <p>
	      <?php
		 $today = getdate();
		 $today_month = intval($today['mon']);
		 $today_day = intval($today['mday']);
		 $lines = file("2013.txt", FILE_SKIP_EMPTY_LINES);
		 $count = 0;
		 foreach($lines as &$line) {
		   if ($count > 3) { break; }
	           $parts = explode(",", $line);
	           $line_date = date_parse($parts[0]);
	           $line_month = intval($line_date['month']);
	           $line_day = intval($line_date['day']);
	           if ($line_month < $today_month) { continue; }
                   if ($line_month == $today_month && $line_day < $today_day) { continue; }
	           print($line_day . "/" . $line_month . " - " . implode(array_slice($parts, 1))."<br>");
	           $count++;
	        }
                if ($count < 4) {
		   $lines = file("2014.txt", FILE_SKIP_EMPTY_LINES);
		   foreach($lines as &$line) {
		      if ($count > 3) { break; }
	              $parts = explode(",", $line);
	              $line_date = date_parse($parts[0]);
	              $line_month = intval($line_date['month']);
	              $line_day = intval($line_date['day']);
	              if ($line_month < $today_month) { continue; }
                      if ($line_month == $today_month && $line_day < $today_day) { continue; }
	              print($line_day . "/" . $line_month . " - " . implode(array_slice($parts, 1))."<br>");
	              $count++;
	           }
                }  
	      ?>
            </p>
	  </td>
	</tr>
      </table>
      <div id="externallinks">
	<span class="title">
	  Eksterne links
	</span>
	<ul>
	  <li><a href="http://www.danes-in-argentina.dk/litterature.html">Danes in Argentina</a></li>
	  <li><a href="http://www.danteater.dk/">Dansk Teaterforlag</a></li>
	  <li><a href="http://www.ingemann-selskabet.dk/">Ingemann Selskabet</a></li>
	</ul>
      </div>
    </div>
    <div id="footer">

    </div>
</div>
</body>
</html>
