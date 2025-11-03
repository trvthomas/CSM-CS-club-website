<?php
$onclickNav = "this.classList.toggle('is-active');document.getElementById('headerMobile').classList.toggle('is-active');";

$themeIcon = "moon";
$themeLogo = "-dark";
if (isset($_COOKIE["CS_website_theme"]) && $_COOKIE["CS_website_theme"] == "light") {
	$themeIcon = "sun";
	$themeLogo = "";
}

//Toggle between "is-fixed-top"
echo '<nav class="navbar is-fixed-top">
	<div class="navbar-brand">
		<a class="navbar-item" href="/">
			<img src="/assets/logo' . $themeLogo . '.webp" style="width: auto;max-height: 4rem;">
		</a>
		
		<span class="navbar-burger" data-target="headerMobile" onclick= "' . $onclickNav . '">
			<span></span>
			<span></span>
			<span></span>
			<span></span>
		</span>
	</div>
	
	<div id="headerMobile" class="navbar-menu">
	<div class="navbar-start">
		<a class="navbar-item" href= "/"><i class="fa-solid fa-house"></i> Home</a>
		
		<a class="navbar-item" href= "/#what-we-do"><i class="fa-solid fa-puzzle-piece"></i> What do we do</a>
		<a class="navbar-item" href= "/#gallery"><i class="fa-solid fa-images"></i> Gallery</a>
	</div>
	
	<div class="navbar-end">
		<div class= "navbar-item">
			<div class= "buttons">
				<a class="button is-text has-text-primary-bold" style="text-decoration: none" href="/change-theme.php" title="Change theme"><span class="icon"><i class="fa-solid fa-' . $themeIcon . '"></i></span></a>
				<button class="button is-primary is-dark" onclick= "document.getElementById(\'overlayJoinDiscord\').style.display=\'block\'"><b><i class="fa-brands fa-discord"></i> Join our club</b></button>
			</div>
		</div>
	</div>
	</div>
	</nav>
	
	<div style= "min-height: 5rem;"></div>';
?>