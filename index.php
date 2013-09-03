<!DOCTYPE html>
<html>
<head>
	<title>Marianne Hesselholt - Forfatter og Foredragsholder.</title>
	<script type="text/javascript" src="js/jquery.js" ></script>
	<script type="text/javascript" src="js/global.js" ></script>
	<link href="css/index.css" type="text/css" rel="stylesheet"></link>
	<link href="css/global.css" type="text/css" rel="stylesheet"></link>
</head>
<body>
  <div id="content">
    <div id="headerImg"></div>
    <div id="headerNav">
      <ul id="nav">
	<a href="index.php"><li>Hjem</li></a>
	<a href="about.php"><li>Om Marianne</li></a>
	<a href="books.php"><li>Mariannes bøger</li></a>
	<a href="talks.php"><li>Foredrag</li></a>
	<a href="contact.php"><li>Kontakt</li></a>
      </ul>
    </div>
    <div id="body">

      <div id="mugshot"></div>
      <div id="intro" class="text">
	Welcome to my website! Welcome to my website! Welcome to my website! Welcome to my website! Welcome to my website! Welcome to my website! Welcome to my website! Welcome to my website! Welcome to my website! Welcome to my website! Welcome to my website! Welcome to my website! Welcome to my website! 
      </div>
      <table class="skinnytable">
	<tr>
	  <td id="featuredbook">
	    <div id="featuredbookimg"></div>
	    <div id="featuredbooktxt">
	      <span class="title">
		Digteren og Malerinden
	      </span>
	      I romanen vil man møde to kunstnere der på mange måder skilte sig ud fra deres samtid, men som skabte verdener af stor skønhed.
	      <button id="readmore">Læs mere</button>
	    </div>
	  </td>
	  <td id="latestblog" rowspan="2">
	    Latest blog post goes here
	  </td>
	</tr>
	<tr>
	  <td id="nexttalk" valign="top">
	    <span class="title">
	      Kommende foredrag
	    </span>
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
	  </td>
	</tr>
      </table>
      <div id="externallinks">
	External links go here
      </div>
    </div>
    <div id="footer">

    </div>
</div>
</body>
</html>
