<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ProgDev
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<!-- Header -->
	<header class="sticky-top">
		<nav class="navbar navbar-expand-lg navbar-dark">
			<div class="container-fluid">
				<a class="navbar-brand" href="/">ProgDev</a>
				<button class="btn nav-link targetMain__mob" type="button" data-bs-toggle="modal" data-bs-target="#targetMain">Начать проект</a>
					<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menuButton" aria-controls="menuButton" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="menuButton">
						<ul class="navbar-nav ms-auto mb-2 mb-lg-0">
							<li class="nav-item">
								<a class="nav-link active" aria-current="page" href="#"></a>
								&#128075; Как проходит работа</a>
							</li>
							<li class="nav-item">
								<button class=" btn nav-link targetMain" type="button" data-bs-toggle="modal" data-bs-target="#targetMain" href="#">
									&#128104;&#8205;&#128187; Начать проект
									&#128105;&#8205;&#128187;</button>
							</li>
						</ul>
					</div>
			</div>
		</nav>
	</header>
	<!-- /Header -->