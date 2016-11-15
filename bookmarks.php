<?php
require_once 'config.php';
$dbHandler = new SQLite3(DB_NAME);
$query = "SELECT * FROM bookmarks WHERE 1";
$results = $dbHandler->query($query);
while($row = $results->fetchArray(SQLITE3_ASSOC))
{
	echo '<a href="' . $row['url'] . '" target="_blank"><div class="bookmark">';
	echo '<div class="title">' . $row['title'] . '</div>';
	if($row['icon'])
		echo '<img src="' . $row['icon'] . '" class="img" />';
	echo '<div class="url">' . $row['url'] . '</div>';
	echo '</div></a>';
}

?>