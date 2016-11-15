<html>
	<head>
		<title>Bookmark Manager</title>
		<link rel="stylesheet" type="text/css" href="css/style.css" />
	</head>
	<body>
		<div class="controlsPane">
			<div class="control">Category 
				<select class="controlInput">
					<option>Unsorted
				</select>
			</div>
			<div class="control">Sort by 
				<select class="controlInput">
					<option>Date
				</select>
			</div>
			<div class="control">Limit 
				<select class="controlInput">
					<option>25
				</select>
			</div>
			<div class="control searchControl"> <input class="search" placeholder="Search" /></div>
		</div>
		<div class="header">
			<div class="logo">Bookmark <span class="thin">Manager</span></div>
			<form method="post" action="grab.php">
				<input class="topUrl" placeholder="Enter URL here" name="url" />
				<button type="submit" class="addUrl">Add</button>
			</form>
		</div>
		
		
		
		
		<div class="container">
			<?php
				include_once 'bookmarks.php';
			?>
			
		</div>
	</body>
</html>