<?php require_once "include/update/our-team.php";
require_once "include/update/gallery.php";
?>
<!DOCTYPE html>
<html data-theme="<?php if (isset($_COOKIE["CS_website_theme"]) && ($_COOKIE["CS_website_theme"] == "dark" || $_COOKIE["CS_website_theme"] == "light")) {
						echo $_COOKIE["CS_website_theme"];
					} else {
						echo "dark";
					} ?>">

<head>
	<title>CSM Computer Science Club</title>

	<meta name="description" content="DESCRIPTION">
	<meta property="og:title" content="CSM Computer Science Club">
	<meta property="og:description" content="DESCRIPTION">
	<meta property="og:image" content="IMAGE">
	<meta property="og:type" content="SEO TYPE">
	<?php include $_SERVER['DOCUMENT_ROOT'] . "/include/head-tracking.php"; ?>

	<script type="text/javascript" src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
	<link rel="stylesheet" href="/include/libraries/txt-rotate.css">
	<script src="/include/libraries/txt-rotate.min.js"></script>
	<link rel="stylesheet" href="/include/libraries/tiny-slider.css">
	<script src="/include/libraries/tiny-slider.js"></script>
</head>

<body onload="createStars()">
	<?php include $_SERVER['DOCUMENT_ROOT'] . "/include/header.php"; ?>

	<div class="starsContainer" id="starsContainer"></div>

	<section class="section">
		<div class="container">
			<div class="columns">
				<div class="column is-two-thirds is-relative has-text-centered-mobile">
					<div class="specialPagesLeftTitle">
						<h1 class="title is-2">Code. Create. <span class="rotate has-text-primary">Connect, Build, Learn, Grow, Share, Lead, Explore, Inspire, Design, Dream, Transform, Innovate, Develop, Challenge, Discover</span>.</h1>
						<p class="subtitle">More than just a club - we're a community of passionate developers and innovators pushing the boundaries of what's possible. Through hackathons, workshops, and collaborative projects, we're building the next generation of tech leaders while having fun along the way.</p>
					</div>
				</div>

				<div class="column is-hidden-mobile">
					<div class="terminal">
						<div class="terminal-header p-2">
							<div class="window-controls">
								<div class="control-btn close"></div>
								<div class="control-btn minimize"></div>
								<div class="control-btn maximize"></div>
							</div>
							<div class="terminal-title">Computer Science Club</div>
						</div>
						<div class="terminal-body p-4" id="terminalBody">
							<div class="terminal-message system">$ Welcome to CSM Computer Science Club Terminal! Type "help" for available commands.</div>
						</div>
						<form id="terminalForm" class="input-area" onsubmit="submitCommand(); return false;">
							<span class="prompt"><i class="fa-solid fa-chevron-right fa-fw"></i></span>
							<input type="text" id="terminalInput" placeholder="Type a command...">
							<button type="submit" class="is-hidden"></button>
						</form>
					</div>
				</div>
			</div>

			<div class="level has-text-centered">
				<div class="level-item">
					<div>
						<p class="heading">Meetings every</p>
						<p class="title has-text-primary">Wednesday</p>
					</div>
				</div>
				<div class="level-item">
					<div>
						<p class="heading">Time</p>
						<p class="title has-text-primary">3:30pm - 4:30pm</p>
					</div>
				</div>
				<div class="level-item">
					<div>
						<p class="heading">Building</p>
						<p class="title has-text-primary">CSM 18-307</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="section" id="gallery">
		<div class="container">
			<h2 class="title has-text-centered">Gallery</h2>
			<p class="subtitle has-text-centered">Check out some of the awesome events and projects we've been working on!</p>

			<div id="gallerySlider" class="has-text-centered">
				<?php
				for ($xG = 0; $xG < count($galleryImages); ++$xG) {
					echo '<div><img src="' . $galleryImages[$xG] . '" data-src="' . $galleryImages[$xG] . '" class="tns-lazy-img" style="width: 90%;"></div>';
				}
				?>
			</div>
		</div>
	</section>

	<section class="section below-stars" id="what-we-do">
		<div class="container">
			<h2 class="title has-text-centered">What do we do</h2>

			<div class="grid has-text-centered">
				<div class="cell has-background-primary-15 has-radius-normal what-we-do-box">
					<figure><img src="/assets/what-we-do-1.webp" alt=""></figure>
					<div class="p-4">
						<h3 class="title is-4 has-text-primary-70">Mentorships</h3>
						<p class="subtitle is-6 has-text-primary-90">Guide the next generation of innovators by mentoring local high school robotics teams. Share your knowledge, build leadership skills, and make a lasting impact on aspiring tech enthusiasts.</p>
					</div>
				</div>

				<div class="cell has-background-primary-25 has-radius-normal what-we-do-box">
					<figure><img src="/assets/what-we-do-2.webp" alt=""></figure>
					<div class="p-4">
						<h3 class="title is-4 has-text-primary-70">Hackathons</h3>
						<p class="subtitle is-6 has-text-primary-90">Transform ideas into reality in our high-energy hackathons. Team up with fellow innovators, tackle real-world challenges, and build impressive projects in counted hours of creative problem-solving.</p>
					</div>
				</div>

				<div class="cell has-background-primary-40 has-radius-normal what-we-do-box">
					<figure><img src="/assets/what-we-do-3.webp" alt=""></figure>
					<div class="p-4">
						<h3 class="title is-4 has-text-primary-10">Projects</h3>
						<p class="subtitle is-6 has-text-primary-90">Bring your ideas to life through collaborative projects. Work with other students, learn new technologies, and build an impressive portfolio along the way.</p>
					</div>
				</div>

				<div class="cell has-background-primary-45 has-radius-normal what-we-do-box">
					<figure><img src="/assets/what-we-do-4.webp" alt=""></figure>
					<div class="p-4">
						<h3 class="title is-4 has-text-primary-10">Workshops & Tech Talks</h3>
						<p class="subtitle is-6 has-text-primary-90">Level up your skills through our workshops and inspiring tech talks. Learn different technologies, best practices, and insider tips from professors and developers.</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="section gray-section is-relative" id="our-club">
		<div class="floating-earth"><img src="/assets/floating-earth.png" alt=""></div>
		<div class="floating-planet"><img src="/assets/floating-planet.png" alt=""></div>

		<div class="container">
			<h2 class="title has-text-centered mb-1">Our club</h2>
			<p class="has-text-centered">Where lines of code meet lines of friendship. We empower students to explore computer science through talks, meaningful projects, and a supportive community of fellow tech enthusiasts.</p>

			<h3 class="title has-text-centered mb-1 mt-3">Meet our team!</h3>
			<div class="columns is-multiline is-centered">
				<?php
				for ($x = 0; $x < count($ourTeam); ++$x) {
					$socialMedia = "";
					for ($x2 = 0; $x2 < count($ourTeam[$x]["social_media"]); ++$x2) {
						$socialMedia .= '<a class="tag is-rounded is-primary is-light" href="' . explode("?", $ourTeam[$x]["social_media"][$x2])[1] . '" target="_blank" title="Follow ' . explode(" ", $ourTeam[$x]["name"])[0] . '"><span class="icon is-small"><i class="fa-brands ' . explode("?", $ourTeam[$x]["social_media"][$x2])[0] . ' fa-fw"></i></span></a>';
					}
					echo '<div class="column is-half">
					<div class="box">
						<div class="columns is-mobile">
							<div class="column is-narrow">
								<figure class="image is-96x96">
									<img src="' . $ourTeam[$x]["image"] . '" class="is-rounded" alt="Profile picture of ' . $ourTeam[$x]["name"] . '">
								</figure>
							</div>
							<div class="column">
								<h4 class="title is-5 mb-1">' . $ourTeam[$x]["name"] . '</h4>
								<div class="tags">
									<span class="tag is-rounded is-primary is-light"><b>' . $ourTeam[$x]["role"] . '</b></span>
									' . $socialMedia . '
								</div>
							</div>
						</div>
					</div>
				</div>';
				}
				?>
			</div>

			<div class="has-text-centered">
				<span class="tag is-rounded has-text-centered tag-updated">Updated for: Fall 2024 🍂</span>
			</div>
		</div>
	</section>

	<?php include $_SERVER['DOCUMENT_ROOT'] . "/include/footer.php"; ?>

	<div id="overlayJoinDiscord" class="trvModal">
		<div class="trvModal-content trvModal-content-small">
			<span class="delete" onclick="document.getElementById('overlayJoinDiscord').style.display='none'"></span>

			<div class="trvModal-header p-5 has-text-centered">
				<h3 class="title is-2 has-text-primary-on-scheme">Join our club!</h3>
				<h3 class="subtitle">Join our Discord to get the latest updates on our club</h3>
			</div>

			<div class="trvModal-elements p-5 has-text-centered">
				<figure class="image is-1by1 mx-auto" style="width: 60%;">
					<img src="/assets/discord-qr.png" alt="CSM Computer Science Club Discord QR Code" style="border-radius: var(--bulma-radius);">
				</figure>
			</div>
		</div>
	</div>

	<div id="overlayContact" class="trvModal">
		<div class="trvModal-content trvModal-content-small">
			<span class="delete" onclick="document.getElementById('overlayContact').style.display='none'"></span>

			<div class="trvModal-header p-5 has-text-centered">
				<h3 class="title is-2 mb-1 has-text-primary-on-scheme">Contact us</h3>
			</div>

			<div class="trvModal-elements p-5 has-text-centered">
				<div class="field">
					<label class="label">Name*</label>
					<div class="control has-icons-left">
						<input type="text" class="input" placeholder="e.g. Jhon Doe" id="inputName" maxlength="100">
						<span class="icon is-small is-left"><i class="fas fa-signature"></i></span>
					</div>
				</div>

				<div class="field">
					<label class="label">E-mail address*</label>
					<div class="control has-icons-left">
						<input type="email" class="input" placeholder="e.g. jhondoe@gmail.com" id="inputEmail" maxlength="100">
						<span class="icon is-small is-left"><i class="fas fa-envelope"></i></span>
					</div>
				</div>

				<div class="field">
					<label class="label">Message*</label>
					<div class="control">
						<textarea class="textarea" placeholder="Write your message" id="inputMessage" maxlength="2000"></textarea>
					</div>
				</div>

				<div class="field">
					<div class="control">
						<button class="button is-primary is-dark is-fullwidth" onclick="contactSendMessage()"><i class="fas fa-paper-plane"></i> Send</button>
					</div>
				</div>
			</div>
		</div>
	</div>

	<form action="/include/send-message.php" method="POST" class="is-hidden" id="contactForm" onsubmit="return contactReturn();">
		<input id="messageName" name="messageName">
		<input id="messageEmail" name="messageEmail">
		<input id="messageBody" name="messageBody">

		<input id="messageSend" type="submit">
	</form>

	<script type="text/javascript" src="/include/notifications-loader.js"></script>
	<script type="text/javascript" src="/include/update/terminal-messages.js"></script>
	<script>
		$(".rotate").textrotator({
			animation: "flipUp",
			speed: 3000
		});

		var sliderImage = tns({
			container: "#gallerySlider",
			controls: false,
			nav: false,
			autoplay: true,
			autoplayTimeout: 4000,
			autoplayButtonOutput: false,
			lazyload: true,
			autoHeight: true,
			items: 3,
			responsive: {
				851: {
					items: 4
				}
			}
		});

		function createStars() {
			for (var x = 0; x <= 150; x++) {
				const xPosition = Math.floor(Math.random() * 101);
				const yPosition = Math.floor(Math.random() * 101);
				const starType = Math.floor(Math.random() * 3) + 1;

				const createStar = document.createElement("DIV");
				const attributeStar = document.createAttribute("class");
				attributeStar.value = "star" + starType;
				const attributeStar2 = document.createAttribute("style");
				attributeStar2.value = "top: " + yPosition + "vh; left: " + xPosition + "vw;";
				const appendLoader = document.getElementById('starsContainer').appendChild(createStar);
				appendLoader.setAttributeNode(attributeStar);
				appendLoader.setAttributeNode(attributeStar2);
			}
		}

		function submitCommand() {
			const commandInput = document.getElementById("terminalInput").value.toLowerCase().trim();

			/*if (!commandInput) {
				return;
			}*/

			addTerminalMessage(commandInput, 'user');

			if (commandInput === 'clear') {
				document.getElementById("terminalBody").innerHTML = '';
				addTerminalMessage('Welcome to CSM Computer Science Club Terminal! Type "help" for available commands.', 'system');
			} else {
				const response = terminalResponses[commandInput] || "Command not recognized. Type 'help' for available commands.";
				addTerminalMessage(response, 'system');
			}

			document.getElementById("terminalInput").value = '';
		}

		function addTerminalMessage(content, type) {
			const messageDiv = document.createElement('div');
			messageDiv.classList.add('terminal-message', type);
			if (type == 'system') {
				messageDiv.innerHTML = '$ ' + content;
			} else {
				messageDiv.innerHTML = '> ' + content;
			}
			document.getElementById("terminalBody").appendChild(messageDiv);
			document.getElementById("terminalBody").scrollTop = document.getElementById("terminalBody").scrollHeight;
		}

		function contactSendMessage() {
			const name = document.getElementById('inputName').value;
			const email = document.getElementById('inputEmail').value;
			const message = document.getElementById('inputMessage').value;

			if (name == "" || email == "" || message == "") {
				newNotification('Please fill in the required fields', 'error');
			} else {
				document.getElementById('messageName').value = name;
				document.getElementById('messageEmail').value = email;
				document.getElementById('messageBody').value = message;

				document.getElementById('messageSend').click();
				openLoader();
			}
		}

		function contactReturn() {
			$.ajax({
				type: 'POST',
				url: '/include/send-message.php',
				data: $('#contactForm').serialize(),
				dataType: 'json',
				success: function(response) {
					if (response["message_sent"] == true) {
						newNotification("Message sent successfully", "success");
						document.getElementById('overlayContact').style.display = 'none';
						document.getElementById('inputName').value = "";
						document.getElementById('inputEmail').value = "";
						document.getElementById('inputMessage').value = "";
					} else {
						newNotificationError();
					}
					closeLoader();
				}
			});

			return false;
		}
	</script>
</body>

</html>