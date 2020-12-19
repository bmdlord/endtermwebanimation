<?php
if (!isset($_GET['loadpage'])){
	$url = "index.php?loadpage=HOME";
		echo '<META HTTP-EQUIV=REFRESH CONTENT=".1;'.$url.'">';
}
$page = (isset($_GET['loadpage']) && $_GET['loadpage'] != '') ? $_GET['loadpage'] : '';
?>
<!DOCTYPE html>
<html>
<head>
	<link href="https://fonts.googleapis.com/css?family=Mukta|PT+Sans|Roboto&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/myStyle.css">
</head>
<body>
	<div id="container">
		<div id="header">
			<div id="navigation">
				<ul>
				  	<li><a class="btn16" href="index.php?loadpage=HOME"> HOME </a></li>
					<li><a class="btn16" href="index.php?loadpage=CSS"> CSS </a></li>
					<li><a class="btn16" href="index.php?loadpage=SVG"> SVG </a></li>
					<li><a class="btn16" href="index.php?loadpage=CANVAS"> CANVAS </a></li>
					<li><a class="btn16" href="index.php?loadpage=ABOUT"> ABOUT	</a></li>
				  
				</ul>	
			</div>
			<div class="picture1">
<svg height="130" width="500">

  <defs>
    <linearGradient id="grad1" x1="0%" y1="0%" x2="100%" y2="0%">
      <stop offset="0%" style="stop-color:rgb(119,127,236);stop-opacity:1" />
      <stop offset="100%" style="stop-color:rgb(255,0,0);stop-opacity:1" />
    </linearGradient>
  </defs>
  <ellipse cx="100" cy="70" rx="100" ry="60" fill="url(#grad1)" />
  <text fill="pink" font-size="25" font-family="Bold" x="50" y="40">BRIAN</text>
   <text fill="pink" font-size="25" font-family="Bold" x="50" y="70">NATURE</text>
    <text fill="pink" font-size="25" font-family="Bold" x="50" y="100">LOVER</text>
</svg>
</div>
		</div>
			<div id="content">
			<?php
					switch($page){
						case 'HOME': 
							require_once 'HOME.php';
							break;
						;
						case 'CSS': 
							require_once 'CSS.php';
							break;
						;
						case 'SVG': 
							require_once 'SVG.php';
							break;
						;
						case 'CANVAS': 
							require_once 'CANVAS.php';
							break;
						;
						case 'ABOUT': 
							require_once 'about.php';
							break;
						;
				}
			?>
			</div>
			<div id="footer">
				<div id="closer">
					<h2>
					<p>Bacolod City, Philippines | brianaturelover@gmail.com | 4448-086</p>
					<p>Copyright &copy; 2020 BRIAN NATURE. All Rights Reserve.<p>
					</h2>
				</div>
			</div>
	</div>
</body>
</html>