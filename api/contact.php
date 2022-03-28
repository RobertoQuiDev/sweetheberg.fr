<?php

	/**
	 * Configure contact form
	 */
	$contact_form_config = array
	(
		/**
		 * Email address to receive messages
		 */
		'recipient' => 'service-technique@sweetheberg.fr',

		/**
		 * Email address to send the messages to your recipient
		 * Requires account permissions when used with an SMTP server
		 *
		 * Uses 'recipient' if not defined
		 */
		'sender' => 'service-technique@sweetheberg.fr',

		/**
		 * Configure subject field
		 * The prefix is prepended to the user subject
		 */
		'subject' => array
		(
			'visible' => true,
			'required' => true,
			'prefix' => '[Formulaire de contact]'
		),

		/**
		 * SMTP connection configuration
		 * Local mail server is used if not configured
		 *
		 * Setting 'secure' supports false, 'tls' or 'ssl'
		 * Setting 'port' supports 25, 465 or 587
		 */
		'smtp' => array
		(
			'hostname' => 'rev01.oxidia-cloud.com',
			'username' => 'service-technique@sweetheberg.fr',
			'password' => 'v/[d_KC\8R!',
			'secure' => 'tls',
			'port' => 465
		),

		/**
		 * Configure ReCaptcha protection
		 * Requires an API v2 key pair to function
		 *
		 * @see https://developers.google.com/recaptcha
		 */
		'recaptcha' => array
		(
			'site_key' => '',
			'secret_key' => ''
		),

		/**
		 * Configure labels and messages
		 * Can be used to customize or translate items
		 */
		'translate' => array
		(
			'labels' => array
			(
				'name' => 'Nom complet',
				'email' => 'Adresse e-mail',
				'subject' => 'Sujet',
				'message' => 'Message'
			),
			'errors' => array
			(
				'required' => '%s est requis',
				'invalid' => '%s est invalide'
			),
			'messages' => array
			(
				'error' => 'Nous avons rencontré une erreur inconnue, veuillez réessayer.',
				'success' => 'Nous avons bien reçu votre message et vous répondrons dans les plus brefs délais.'
			)
		)
	);

	/**
	 * Load contact form class and its dependencies
	 * Create new class object with given configuration
	 */
	require __DIR__ . DIRECTORY_SEPARATOR . 'php' . DIRECTORY_SEPARATOR . 'contact-form.php';
	$contact_form = new Contact_Form($contact_form_config);

?>
<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="UTF-8">
		<title>Sweetheberg.fr </title>
		<meta name="description" content="SweetHeberg, hébergement de serveur de Jeux GAME.">
		<meta name="keywords" content="html template, responsive, retina, cloud hosting, technology, startup">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<!-- Icons -->
		<link rel="apple-touch-icon-precomposed" href="img/icons/apple-touch-icon.png">
		<link rel="icon" href="img/icons/favicon.ico">
		<!-- Stylesheets -->
		<link rel="stylesheet" href="css/fontawesome.min.css">
		<link rel="stylesheet" href="css/main.min.css">
	</head>
	<body class="footer-dark">
		<!-- Header -->
		<header id="header" class="header-dynamic header-shadow-scroll">
			<div class="container">
				<a class="logo" href="index.html">
					<img src="img/logos/header-light.png" alt="">
				</a>
				<nav>
					<ul class="nav-primary">
						<li>
							<a href="index.html">ACCUEIL ↓</a>
							<ul>
								<li>
									<a href="about.html">A propos</a>
								</li>
								<li>
									<a href="discord.html">Discord</a>
								</li>
							</ul>
						</li>
						<li>
							<a href="index.html">GAME SOUS PANEL ↓</a>
							<ul>
								<li>
									<a href="GTARP.html">GTA 5 RP</a>
								</li>
								<li>
									<a href="redm.html">Red Dead Redemption 2</a>
								</li>
								<li>
									<a href="minecraft.html">Minecraft</a>
								</li>
								<li>
									<a href="csgo.html">CS:GO</a>
								</li>
								<li>
									<a href="gmod.html">Garry's Mod</a>
								</li>
								<li>
									<a href="ark.html">ARK</a>
								</li>
								<li>
									<a href="rust.html">Rust</a>
								</li>
								<li>
									<a href="discordjs.html">Discord Node JS</a>
								</li>
								<li>
									<a href="discordpy.html">Discord Node PY</a>
								</li>
							</ul>
						</li>
						<li>
							<a href="index.html">SERVEURS PRIVER ↓</a>
							<ul>
								<li>
									<a href="vps.html">VPS</a>
								</li>
								<li>
									<a href="Dedier.html">Serveurs Dédiés</a>
								</li>
							</ul>
						</li>
						<li>
													<a href="contact.php">Contacter</a>
						</li>
						<li>
							<a class="button button-secondary" href="https://my.sweetheberg.fr/">
								<i class="fas fa-lock icon-left"></i>Espace client
							</a>
						</li>
					</ul>

				</nav>
			</div>
		</header>
		<!-- Content -->
		<section id="content">
			<!-- Content Row -->
			<section class="content-row content-row-color content-row-clouds">
				<div class="container">
					<header class="content-header content-header-small content-header-uppercase">
					<h1>
							Nous contacter
						</h1>
						<p>
							Envoyez-nous un message et notre équipe vous contactera très bientôt.
						</p>
					</header>
				</div>
			</section>
			<!-- Content Row -->
			<section class="content-row">
				<div class="container">
					<div class="column-row align-center">
						<div class="column-50">
							<form class="form-full-width" method="post" action="contact.php">
								<?php if ($contact_form->success): ?>
								<div class="form-row form-success">
									<ul>
										<li><?php echo $contact_form->config['translate']['messages']['success'] ?></li>
									</ul>
								</div>
								<div class="form-row">
									<div class="feature-box">
										<div class="feature-content">
											<dl>
												<dt><?php echo $contact_form->config['translate']['labels']['name'] ?></dt>
												<dd><?php if (isset($contact_form->sanitize['name'])) echo $contact_form->sanitize['name'] ?></dd>
											</dl>
											<dl>
												<dt><?php echo $contact_form->config['translate']['labels']['email'] ?></dt>
												<dd><?php if (isset($contact_form->sanitize['email'])) echo $contact_form->sanitize['email'] ?></dd>
											</dl>
											<?php if (empty($contact_form->sanitize['subject']) === false): ?>
											<dl>
												<dt><?php echo $contact_form->config['translate']['labels']['subject'] ?></dt>
												<dd><?php if (isset($contact_form->sanitize['subject'])) echo $contact_form->sanitize['subject'] ?></dd>
											</dl>
											<?php endif; ?>
											<dl>
												<dt><?php echo $contact_form->config['translate']['labels']['message'] ?></dt>
												<dd><?php if (isset($contact_form->sanitize['message'])) echo nl2br($contact_form->sanitize['message']) ?></dd>
											</dl>
										</div>
									</div>
								</div>
								<?php else: ?>
								<?php if ($contact_form->errors): ?>
								<div class="form-row form-error">
									<ul>
										<?php foreach ($contact_form->errors as $error): ?>
										<li><?php echo $error ?></li>
										<?php endforeach; ?>
									</ul>
								</div>
								<?php endif; ?>
								<div class="form-row">
									<div class="column-row">
										<div class="column-50">
											<label for="form-name"><?php echo $contact_form->config['translate']['labels']['name'] ?></label>
											<input id="form-name" type="text" name="name" value="<?php if (isset($contact_form->sanitize['name'])) echo $contact_form->sanitize['name'] ?>" required>
										</div>
										<div class="column-50">
											<label for="form-email"><?php echo $contact_form->config['translate']['labels']['email'] ?></label>
											<input id="form-email" type="email" name="email" value="<?php if (isset($contact_form->sanitize['email'])) echo $contact_form->sanitize['email'] ?>" required>
										</div>
									</div>
								</div>
								<?php if ($contact_form->config['subject']['visible']): ?>
								<div class="form-row">
									<label for="form-subject"><?php echo $contact_form->config['translate']['labels']['subject'] ?></label>
									<input id="form-subject" type="text" name="subject" value="<?php if (isset($contact_form->sanitize['subject'])) echo $contact_form->sanitize['subject'] ?>"<?php if ($contact_form->config['subject']['required']) echo ' required' ?>>
								</div>
								<?php endif; ?>
								<div class="form-row">
									<label for="form-message"><?php echo $contact_form->config['translate']['labels']['message'] ?></label>
									<textarea id="form-message" name="message" cols="10" rows="10" required><?php if (isset($contact_form->sanitize['message'])) echo $contact_form->sanitize['message'] ?></textarea>
								</div>
								<?php if ($contact_form->config['recaptcha']['site_key'] && $contact_form->config['recaptcha']['secret_key']): ?>
								<div class="form-row">
									<div class="g-recaptcha" data-sitekey="<?php echo $contact_form->config['recaptcha']['site_key'] ?>"></div>
									<script src="https://www.google.com/recaptcha/api.js"></script>
								</div>
								<?php endif; ?>
								<div class="form-row">
									<button class="button-secondary"><i class="fas fa-envelope icon-left"></i>Envoyer le message</button>
								</div>
								<?php endif; ?>
								<?php if ($contact_form->debug && is_object($contact_form->debug)): ?>
								<div class="form-row">
									<pre><?php print_r($contact_form->debug) ?></pre>
								</div>
								<?php endif; ?>
							</form>
						</div>
					</div>
				</div>
			</section>
			<!-- Content Row -->
			<section class="content-row">
				<div class="container">
					<header class="content-header">
						<h2>
							Sweetheberg.fr
						</h2>
						<p>
							<mark>SweetHeberg</mark> </mark>  Peut vous faire des offres personnaliser sur lademande , si ça vous intéresse veuillez venir faire un ticket sur notre Discord
						</p>
					</header>
					<div class="column-row align-center-bottom text-align-center">
						<div class="column-33">
							<i class="fas fa-rocket icon-feature"></i>
							<h3>
								Haute performance
							</h3>
							<p>
								Notre infrastructure est tennu sur des serveur performant avec de espace pour vous accueillir avec une 99.5% de uptime.
							</p>
							<p>
								<a href="network.html">Où sont-ils hébergés<i class="fas fa-angle-right icon-right"></i></a>
							</p>
						</div>
						<div class="column-33">
							<i class="fas fa-cloud icon-feature"></i>
							<h3>
								Notre Uptime
							</h3>
							<p>
								Nos serveurs de jeux cloud offre une garantie de disponibilité SLA de <mark>99.55%</mark> avec une redondance complète du matériel et du réseau pour maintenir vos services en ligne.
							</p>
							<p>
								<a href="https://www.trustpilot.com/review/sweetheberg.fr">Mettre un avis<i class="fas fa-angle-right icon-right"></i></a>
							</p>
						</div>
						<div class="column-33">
							<i class="fas fa-life-ring icon-feature"></i>
							<h3>
								Support 24h/24 , 7j/7
							</h3>
							<p>
								On dispose d'une équipe internationale disponible sur discord 24/4 pret pour vous aider à tous vos problèmes ou même pour une question.
							</p>
							<p>
								<a href="https://discord.gg/U32cxvfbE6">Notre Serveur Discord<i class="fas fa-angle-right icon-right"></i></a>
							</p>
						</div>
					</div>
				</div>
			</section>
			<!-- Content Row -->
		<!-- Footer -->
		<footer id="footer">
			<section class="footer-primary">
				<div class="container">
					<div class="column-row">
						<div class="column-33">
							<h5>
								Qui nous sommes?
							</h5>
							<p>
								Sweetheberg V1 À commencer en début 2021 et ç'a terminé vers été 2021 et en ce moment ré-ouvre une V2 toute nouvelle qui est prête pour durer des années, le v2 va être basé sur des serveurs de jeux principalement avec de protect Anti ddos🛡️  encore en test au moment de ce message le but de sweetheberg et principalement de faire un hébergement stable et profitable à bon prix pour tous les jeux et disponible à toute clientèle
							</p>
						</div>
						<div class="column-66">
							<div class="column-row align-right-top">
								<div class="column-25">
									<h5>
										LIENS UTILES
									</h5>
									<ul class="list-style-icon">
										<li>
											<a href="https://my.sweetheberg.fr/"></i>Espace Client</a>
										</li>
										<li>
											<a href="https://status.sweetheberg.fr/"></i>Status</a>
										</li>
										<li>
											<a href="https://infra.sweetheberg.fr/"></i>Panel Game</a>
										</li>
										<li>
											<a href="https://infra.sweetheberg.fr/phpmyadmin"></i>Phpmyadmin</a>
										</li>
									</ul>
								</div>
								<div class="column-25">
									<h5>
										Products
									</h5>
									<ul>
										<li>
											<a href="GTARP.html">GTA 5 RP</a>
										</li>
										<li>
											<a href="redm.html">Red Dead Redemption 2</a>
										</li>
										<li>
											<a href="minecraft.html">Minecraft</a>
										</li>
										<li>
											<a href="products-block-storage.html">Discord Node JS</a>
										</li>
										<li>
											<a href="products-anycast-dns.html">Discord Node PY</a>
										</li>
									</ul>
								</div>
								<div class="column-25">
									<h5>
										RESSOURCES
									</h5>
									<ul>
										<!-- <li>
											<a href="features.html">Mentions Légales</a>
										</li> -->
										<li>
											<a href="uploads/Conditionsdutilisation.pdf">Conditions d'utilisation</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="footer-secondary">
				<div class="container">
					<p>
						Copyright 2022 &copy; Sweetheberg. Tous droits réservés. 
					</p>
				</div>
			</section>
		</footer>
		<!-- Scripts -->
		<script src="js/jquery.min.js"></script>
		<script src="js/headroom.min.js"></script>
		<script src="js/js.cookie.min.js"></script>
		<script src="js/imagesloaded.min.js"></script>
		<script src="js/bricks.min.js"></script>
		<script src="js/main.min.js"></script>
	</body>
</html>
