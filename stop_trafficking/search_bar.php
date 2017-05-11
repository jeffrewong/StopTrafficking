<!DOCTYPE HTMl>
<!-- Harry Feng and others -->
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
		<?php 
			$conn = new PDO("mysql:host=mysql9.000webhost.com;dbname=a8322565_damsun","a8322565_damsun","damsun123");
			$searchquery = $_POST["query"];
			if(empty($searchquery)==true || $searchquery == undefined || $searchquery == null)
			{
				$sql = "SELECT * FROM terms;";
			}
			else
			{
				$sql = "SELECT * FROM terms WHERE word LIKE '%$searchquery%'";
			}
			$statement = $conn -> prepare($sql);
			$statement -> execute();
			$numberRows = $statement -> rowCount();
			for($i = 0; $i < $numberRows; $i++)
			{
				$data = $statement -> fetch(PDO::FETCH_ASSOC);
				$items["word"][$i] = $data["word"];
				$items["definition"][$i] = $data["definition"];
			}
		?>
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
			<div class = "result_count"><!-- amount of results for search goes here -->
			<?php 
				if($searchquery == undefined || $searchquery == null || empty($searchquery) == true)
				{
					echo "All terms displayed.";
				}
				else
				{
					echo $numberRows." results for words containing ".$searchquery.".";	
				}
			?>
			</div>
			<br/>
			<div><!-- information regarding the search results go here -->
				<?php 
				for($i = 0; $i < $numberRows; $i++)
				{
					echo "	
					<dl>
						<dt class = 'word'>".$items["word"][$i]."</dt>
							<dd class = 'define'>".$items["definition"][$i]."</dd>
					</dl><br />
					";
				}?>
			</div>
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