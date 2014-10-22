<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<title><?php wp_title() ?></title>
		<?php wp_head() ?>
	</head>
	<body <?php body_class() ?>>
		<header class="head" role="banner">
			<?php my_logo() ?>

			<?php my_nav_menu() ?>

		</header>
		<main class="main" role="main">
