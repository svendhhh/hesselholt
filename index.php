<!DOCTYPE html>

<?php
require 'macros.php';
?>
<html>
<?php macro_open_head(); ?>
  <link href="css/index.css?2" type="text/css" rel="stylesheet"></link>
  <style>
	.container {
		width: 940px;
		padding: 0;
	}
  </style>
</head>
<body>
  <div id="content" class="container">
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
		Seneste bog <span class="highlighted">- Udkommer 20. maj 2021</span>
	      </span>
	      <p class="booktitle">
			Dronning Elisabeth af Kandestederne
	      </p>
	      <p class="booktext">
			Den 20. maj udgiver forlaget Ancethe den biografiske roman ”Dronning Elisabeth af Kandestederne.” Bogen handler om den kvinde, der sammen med sin mand grundlagde et af forrige århundredes mest berømte badehoteller: Kokholms Badehotel.
	      </p>
	      <button class="readmore" onclick="location.href='about-books.php?book=dronning-elisabeth-af-kandestederne'">Læs mere</button>
	    </div>
	  </td>
	  <td id="latestblog" rowspan="2" valign="top">
	    <span class="title">
	      Eksempel p&aring; blogpost
	    </span>
	    <p class="blogtitle">
	      Mine foredrag
	    </p>
	    <p class="blogdate">
	      Posted d. 28. marts 2021
	    </p>
	    <p class="blogtext">
			Coronatid har betydet næsten totalt foredragsophør. Det er mit ønske at fortsætte med den virksomhed, men i begrænset omfang. Foredragene er reduceret til kun nedenstående tre. Men det er klart, at hvis nogen virkelig ønsker foredrag om de store salmedigtere, så er jeg parat. Jeg har elsket at rejse med de tre store: Brorson, Kingo og Ingemann.
	    </p>
	    <button class="readmore" onclick="location.href='https://blog.hesselholt.com/2021/03/28/mine-foredrag/'">Læs mere</button>
	  </td>
	</tr>
	<tr>
	  <td id="nexttalk" valign="top">
<?php /*
	    <span class="title">
	      Kommende foredrag
	    </span>
	    <p>
	      <?php
		 $today = getdate();
		 $today_year = $today['year'];
		 $today_month = intval($today['mon']);
		 $today_day = intval($today['mday']);
		 $lines = file($today_year.".txt", FILE_SKIP_EMPTY_LINES);
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
		   $next_year = intval($today_year) + 1;
		   $lines = file($next_year . ".txt", FILE_SKIP_EMPTY_LINES);
		   foreach($lines as &$line) {
		      if ($count > 3) { break; }
	              $parts = explode(",", $line);
	              $line_date = date_parse($parts[0]);
	              $line_month = intval($line_date['month']);
	              $line_day = intval($line_date['day']);
	              print($line_day . "/" . $line_month . " - " . implode(array_slice($parts, 1))."<br>");
	              $count++;
	           }
                }  
*/
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
	  <li><a href="http://sogneaften.dk/Marianne%20Hesselholt.htm">Sogneaften.dk</a></li>
	  <li><a href="http://foredrag.kristeligt-dagblad.dk/105:Marianne-Hesselholt">Foredragslisten.dk</a></li>
	</ul>
      </div>
    </div>
    <div id="footer">

    </div>
	<?php macro_insert_footer(); ?>
</div>
</body>
</html>
