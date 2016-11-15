<?php
$installDB = new SQLite3(DB_NAME);
$installQuery = "CREATE TABLE bookmarks(
id INTEGER PRIMARY KEY AUTOINCREMENT,
url TEXT NOT NULL,
title TEXT NOT NULL,
icon TEXT,
category TEXT
);";
if(!$installDB->query($installQuery))
	exit("Failed to initialise DB");

?>