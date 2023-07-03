<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Theme
 */

//$logo = wp_get_attachment_image_url(theme('logo'),'full');
//$phones = @settings('phones');
//$emails = @settings('emails');
//$socials = @settings('socials');

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?/*<link rel="profile" href="https://gmpg.org/xfn/11">*/?>

	<?php wp_head(); ?>
	<?/*<!-- Yandex.Metrika counter -->
	<script type="text/javascript" >
	(function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
	m[i].l=1*new Date();
	for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
	k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
	(window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

	ym(45515106, "init", {
			clickmap:true,
			trackLinks:true,
			accurateTrackBounce:true
	});
	</script>
	<noscript><div><img src="https://mc.yandex.ru/watch/45515106" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
	<!-- /Yandex.Metrika counter -->*/?>
</head>
<body <?php body_class(); ?>>
	<header class="header block-container">
		<?php if(theme('logo')) { ?>
			<a href="/" class="header__logo">
				<img src="<?=wp_get_attachment_image_url(theme('logo'), 'large')?>" alt="Логотип" class="header__logo-img">
			</a>
		<?php } ?>
		<!-- <h1 class="header__title">Для заботливых хозяев</h1> -->
	</header>
