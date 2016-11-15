<?php
require_once 'config.php';
$dbHandler = new SQLite3(DB_NAME);
if(isset($_POST['url']))
{
	$url = $_POST['url'];
	$data = file_get_contents($url);
	//echo $data;
	if(strlen($data) > 0 )
	{
		preg_match("(<title>(.*)</title>)",$data,$title);
		$title = $title[1];
		//echo $title;
		if(strlen($title) > 0)
		{
				
			
			preg_match("/<link[^<]*?rel=\"shortcut icon\".*?>/",$data,$icon);
			if(sizeof($icon) != 0)
			{
				preg_match("(href=\"(.*?)\".*)",$icon[0],$icon);
				$icon = $icon[1];
				$iconPath = "img/" . time() . "_" . basename($icon);
				if(substr($icon,0,4) == "http")
					file_put_contents($iconPath, file_get_contents($icon));
				else
					file_put_contents($iconPath, file_get_contents($url.$icon));
				
				$query = "INSERT INTO bookmarks(url,title,icon) VALUES('$url', '$title', '$iconPath')";
			}
			else
			{
				$icon = null;
				$query = "INSERT INTO bookmarks(url,title) VALUES('$url', '$title')";
			}
			
			if($dbHandler->query($query))
			{
				echo "Success";
				header("Location:index.php");
			}
			else
			{
				echo "Failed";
			}
		}
	}
	else
	{
		echo "Failed";
	}
}
?>