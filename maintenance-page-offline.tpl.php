<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<style type="text/css">
			body {
				background-color: #FFF;
				text-align: center;
			}
			#maintenance-page-wrapper {
				margin: auto;
				width: 500px;	
			}
			h1 {
				padding: 5px;
				border-bottom: 1px solid #CCC;
			}
			img {
				margin: 15px 0 0 0;	
			}
		</style>
	</head>
	<body>
		<div id="maintenance-page-wrapper">
			<h1>Site Offline</h1>
			<div id="maintenance-message">
				<?php print $content; ?>
			</div>
		</div>
	</body>
</html>
