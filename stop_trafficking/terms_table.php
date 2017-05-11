<!DOCTYPE HTMl>
<!-- Harry, Muhammad, Jeffrey, David, Alexis -->
<html>
	<head>
		<link rel="shortcut icon" href="icon.ico">
		<title>
			ECPAT-USA: Empowering the Youth
		</title>		
		<link href='http://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Vast+Shadow' rel='stylesheet' type='text/css'>
		<link rel = "stylesheet" type="text/css" href = "index.css">
		<link rel = "stylesheet" type="text/css" href = "search_bar.css">
		<script type="text/javascript" src = "index.js"></script>
	</head>
	<body class = "body" onload = "start();">
		<div class = "top">
			<img src = "logo1.png" class = "logo" onclick = "location.href='index.html'"/>
			<span class = "quote">
				Trafficking ends here.
			</span>
		</div>
		<br/>
		<div class = "nav_bar">
			<span class = "text_holder" onclick = "menu_change();">
				&#9776 Menu
			</span>
			<span class = "search_bar">
				<form method = "post" action = "search_bar.php">
					<input class = "input_bar" type = "text" name = "query" placeholder = "Search for terms">
					<input class = "submit" type = "submit" name = "submit" value = "&#128269">
				</form>
			</span>
		</div>
		<span id = "drop_down">
			<ul class = "list">
				<li class = "drop_down" onclick = "location.href = 'terms_table.php'">Dictionary</li>
				<li class = "drop_down" onclick = "location.href = 'scenario.html'">Choices Quiz</li>
				<li class = "drop_down" onclick = "location.href = 'stats.html'">Statistics</li>
				<li class = "drop_down" onclick = "location.href = 'myth_busters.html'">Myth vs Reality</li>
				<li class = "drop_down" onclick = "location.href = 'vulnerabilities.html'">Vulnerabilities</li>
				<li class = "drop_down" onclick = "location.href = 'contactUs.html'">Contact Us</li>
			</ul>
		</span>
		<div class = "content">
			<?php
				$hostname = "mysql3.000webhost.com";
				$dbname = "a2665184_damsun";
				$uname = "a2665184_damsun";
				$pword = "damsun123";
				$cmd = "SELECT * FROM terms";
				$conn = new PDO("mysql:host=mysql9.000webhost.com;dbname=a8322565_damsun","a8322565_damsun","damsun123");
				$statement = $conn->prepare($cmd);
				$statement->execute();
				$rowCount = $statement->rowCount();

				echo
				"<table>".
				"<tr>".
				"<td class = 'result_count' width = '250'>"."Word: " ."</td>".
				"<td class = 'result_count' width = '500'>"."Definition: " ."</td>". "<br/>".
				"</tr>".
				"</table>";
				for($i = 0; $i < $rowCount; $i++)
				{
					$resultEverything = $statement->fetch(PDO::FETCH_ASSOC);
					echo
						"<table>".
							"<tr>".
								"<td class = 'word' width = '250'>". $resultEverything["word"]."</td>".
								"<td class = 'define' width = '500'>". $resultEverything["definition"]."</td>". "<br/>".
							"</tr>".
						"</table>";
				}
			?>
		</div>
		<hr>
		<div class = "footer">
			<span class = "left_foot">
				Designed by: RS Life
			</span>
			<span class = "right_foot">
				<img src = "website.png" class = "social_media_icon"/> 
				<a class = "footer_links" href="http://www.ecpatusa.org/home">Visit ECPAT-USA's site</a>
				<img src = "fb_logo.png" class = "social_media_icon"/> 
				<a class = "footer_links" href="https://www.facebook.com/ECPATUSA">Follow ECPAT-USA on Facebook</a>
				<img src = "twitter_logo.png" class = "social_media_icon"/> 
				<a class = "footer_links" href="https://twitter.com/ecpatusa">Follow ECPAT-USA on Twitter</a>
			</span>
		</div>
	</body>
</html>