<?php
session_start();
define("DB_NAME","bookmarks");
define("AUTH_REQUIRED", false);
define("AUTH_KEY","9d4e1e23bd5b727046a9e3b4b7db57bd8d6ee684");
if(!file_exists(DB_NAME))
	require_once 'install.php';
if(AUTH_REQUIRED == true)
{
	require_once 'auth.php';
}

?>