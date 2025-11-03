<?php
if(!isset($_COOKIE["CS_website_theme"]) || (isset($_COOKIE["CS_website_theme"]) && $_COOKIE["CS_website_theme"] != "light")){
	setcookie("CS_website_theme", "light", time() + (86400 * 30), "/");
}else{
	setcookie("CS_website_theme", "dark", time() + (86400 * 30), "/");
}

header("Location:/");
?>