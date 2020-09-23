<?php

$DOMAIN = 'http://thomaspreece.com/andrewforpostgrad';

Echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
<html>
<head>
<meta name=\"Description\" content=\"".$MetaDescription."\" />
<meta name=\"Keywords\" content=\"".$MetaKeywords."\" />
<meta http-equiv=\"content-language\" content=\"en-US\" />
<title>".$MetaTitle."</title>
";


function auto_version($file)
{
  if(strpos($file, '/') !== 0 || !file_exists($_SERVER['DOCUMENT_ROOT'] . $file))
    return $file;

  $mtime = filemtime($_SERVER['DOCUMENT_ROOT'] . $file);
  return preg_replace('{\\.([^./]+)$}', ".$mtime.\$1", $file);
}


echo "<link rel=\"stylesheet\" href=\"".$DOMAIN.auto_version('/Style.css')."\" type=\"text/css\" media=\"screen\" />";

?>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.min.js"></script>


</head>

<body style='margin:0px;'>

	<div style='width:1000px;margin-right:auto;margin-left:auto;'>
		<img src='logo.png' style='height:180px;margin:10px;position:relative;top:0px;z-index:5;float:left'/>
	</div>
	<div style='height:70px;background:white;width:1000px;margin-right:auto;margin-left:auto;'>
	</div>
	<div class='ColourStrip'>
		<div style='width:1000px;margin-right:auto;margin-left:auto;height:100%;position:relative;'>
			
			
			<div class='TopMenu'>
			<ul>
			<?php
			
			if($PageName=='index.php'){
				echo "<li><a class='selected' href='index.php'>Home</a></li>";
			}else{
				echo "<li><a href='index.php'>Home</a></li>";
			}
			
			if($PageName=='Manifesto.php'){
				echo "<li><a class='selected' href='Manifesto.php'>Manifesto</a></li>";
			}else{
				echo "<li><a href='Manifesto.php'>Manifesto</a></li>";
			}
			/*
			if($PageName=='VidsImages.php'){
				echo "<li><a class='selected' href='VidsImages.php'>Videos & Images</a></li>";
			}else{
				echo "<li><a href='VidsImages.php'>Videos & Images</a></li>";
			}
			*/
				
			?>
			</ul>
			</div>
		</div>
	</div>
	
	<div class='ContentArea'>
		<div style='padding:35px;'>	
			