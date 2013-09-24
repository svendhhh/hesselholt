<!DOCTYPE html>

<?php
require 'macros.php';
?>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>Marianne Hesselholt - Forfatter og Foredragsholder.</title>
  <script type="text/javascript" src="js/jquery.js" ></script>
  <script type="text/javascript" src="js/global.js" ></script>
  <link href="css/index.css?0" type="text/css" rel="stylesheet"></link>
  <link href="css/global.css?0" type="text/css" rel="stylesheet"></link>
</head>
<body>
  <div id="content">
    <div id="body">
      <?php insert_header(1); ?>
      <div id="mugshot"></div>
      <div id="intro" class="text">
	<p>
	  Velkommen til Marianne Hesselholts website. Marianne er forfatter af mange dejlige bøger fra historiske romaner til børnebøger og digtsamlinger. Her kan man læse mere om Mariannes arbejde og finde information om opkommende foredrag. 
	</p>
      </div>
      <table class="skinnytable">
	<tr>
	  <td id="featuredbook">
	    <div id="featuredbookimg"></div>
	    <div id="featuredbooktxt">
	      <span class="title">
		Featurede bog
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
	    <button class="readmore">Læs mere</button>
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
		 $lines = file("2013.txt", FILE_SKIP_EMPTY_LINES);
		 $count = 0;
		 foreach($lines as &$line) {
		 if ($count > 3) { break; }
	      $parts = explode(",", $line);
	      $line_date = date_parse($parts[0]);
	      if ($line_date['month'] < $today['mon'] || ($line_date['month'] == $today['mon'] && $line_date['day'] < $today['mday'])) { continue; }
	    print($line."<br>");
	    $count++;
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
	  <li>Danes in Argentina</li>
	  <li>Dansk Teaterforlag</li>
	  <li>Ingemann Selskabet</li>
	</ul>
      </div>
    </div>
    <div id="footer">

    </div>
</div>
</body>
</html>
