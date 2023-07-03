<?php
/*
 * Template Name: Главная страница
 */
the_post();
get_header();

?>

<?php
$hero_img = wp_get_attachment_image_url(get_field('hero_img'), 'full');
$hero_left_img = wp_get_attachment_image_url(get_field('hero_left_img'), 'full');
$hero_right_img = wp_get_attachment_image_url(get_field('hero_right_img'), 'full');
$hero_left_text = get_field('hero_left_text');
$hero_right_text = get_field('hero_right_text');

?>

<section class="hero block-container">
	<div class="hero__items">

		<div class="hero__banner">
			<?php if ($hero_img) { ?>
				<div class="hero__banner-img">
					<img src="<?= $hero_img ?>" alt="">
					<div class="hero__banner-button">
						<a href="#buy" class="hero__banner-button-link button">Купить</a>
					</div>
				</div>
			<?php } ?>
		</div>

	</div>
	<div class="hero__banner-button mobile">
		<a href="#buy" class="hero__banner-button-link button">Купить</a>
	</div>
	<div class="first-screen__items">
		<div class="first-screen__item"><img src="/wp-content/themes/theme/assets/img/paw.svg" alt="paw">
			<p>Эффективная профилактика и лечение широкого спектра заболеваний от глистов</p>
		</div>
		<div class="first-screen__item"><img src="/wp-content/themes/theme/assets/img/paw.svg" alt="paw">
			<p>Возможность подобрать свое средство для разных по характеру питомцев любого веса и возраста</p>
		</div>
		<div class="first-screen__item"><img src="/wp-content/themes/theme/assets/img/paw.svg" alt="paw">
			<p>Хорошая переносимость животными, не оказывает токсического действия</p>
		</div>
	</div>
</section>

<?php $menu_items = get_field('menu_items');
if (is_array($menu_items) && !empty($menu_items)) { ?>
	<nav class="menu">
		<ul class="menu__list">
			<?php foreach ($menu_items as $item) { ?>
				<li class="menu-item">
					<a href="<?= $item['link'] ?>" class="menu-item__link">
						<div class="menu-item__img">
							<img src="<?= wp_get_attachment_image_url($item['img'], 'full') ?>" alt="">
						</div>
						<span class="menu-item__title"><?= $item['name'] ?></span>
					</a>
				</li>
			<?php }
			unset($item, $img); ?>
		</ul>
	</nav>
<?php } ?>

<?php
$advantages_title = get_field('advantages_title');
$advantages_title_mobile = get_field('advantages_title_mobile');
$advantages_subtitle = get_field('advantages_subtitle');
$advantages_img = wp_get_attachment_image_url(get_field('advantages_img'), 'full');
$advantages = get_field('advantages');
?>

<section class="advantages">
	<div class="advantages__top">
		<div class="advantages__head block-container">
			<?php if ($advantages_title) { ?>
				<h2 class="advantages__title desktop block-title"><?= $advantages_title ?></h2>
			<?php } ?>
			<?php if ($advantages_title_mobile) { ?>
				<h2 class="advantages__title mobile block-title">
					<?= $advantages_title_mobile ?>
				</h2>
			<?php } elseif ($advantages_title) { ?>
				<h2 class="advantages__title mobile block-title">
					<?= $advantages_title ?>
				</h2>
			<?php } ?>
			<?php if ($advantages_subtitle) { ?>
				<div class="advantages__subtitle block-subtitle">
					<?= $advantages_subtitle ?>
				</div>
			<?php } ?>
		</div>
		<?php if ($advantages_img) { ?>
			<div class="advantages__banner">
				<img src="<?= $advantages_img; ?>" alt="">
			</div>
		<?php } ?>
	</div>

	<?php if (is_array($advantages) && !empty($advantages)) { ?>
		<div class="advantages__items block-container">
			<?php foreach ($advantages as $item) { ?>
				<div class="advantage-item">
					<?php $img = wp_get_attachment_image_url($item['img'], 'full');
					if ($img) { ?>
						<div class="advantage-item__img">
							<img src="<?= $img ?>" alt="">
						</div>
					<?php } ?>
					<?php if ($item['title']) { ?>
						<span class="advantage-item__title"><?= $item['title'] ?><img src="/wp-content/themes/theme/assets/img/+НЕО.svg" class="plus-neo"></span>
					<?php } ?>
					<?php if ($item['text']) { ?>
						<div class="advantage-item__subtitle text-container"><?= $item['text'] ?></div>
					<?php } ?>
				</div>
			<?php }
			unset($item, $img); ?>
		</div>
	<?php } ?>
</section>

<section class="goods">
	<div id="syspensy" class="up b_long_ovr">
		<div class="container">
			<div class="bg"></div>
			<div class="desc">
				<div class="rows">
					<div class="cols cols01">
						<div class="h5t">Празицид Суспензия</div>
						<div class="h4t">
							Усиленная трёхкомпонентная формула. Сладкий вкус
						</div>
						<div class="dbl_btn dbl_btn_vs">
							<a href="#buy" class="button">Где купить</a>
							<a href="#prs01" class="button compound_lnk">Состав</a>
						</div>
					</div>
					<div class="cols cols02">
						<ul class="list_dana">
							<li>Широкий спектр действия против круглых и ленточных глистов</li>
							<li>Препарат выбора для первичной обработки котят и щенков</li>
							<li>Вкусную суспензию съедят с удовольствием</li>
						</ul>
					</div>
				</div>
				<div class="rows_cards_ovr">
					<div class="rows_cards">
						<div class="up cols_cards cols_cards01">
							<!-- <a data-fancybox href="video/video_t1.mp4" class="rc_lnk"> -->
							<a data-fancybox1 href="#prs01" class="rc_lnk sw_lnk">
								<span class="cnt_in">
									<span class="h5">Празицид</span>
									<span class="h4">для кошек и котят до 4 кг</span>
									<span class="ig">
										<img src="/wp-content/themes/theme/assets/img/syspensy-goods/adult_cat.png" width="142" height="224" alt="">
									</span>
									<span class="dtt">
										<span class="vlm">0,32 мл</span>
										<!-- <span class="vr">Видео-обзор</span> -->
									</span>
								</span>
							</a>
						</div>
						<div class="up cols_cards cols_cards02">
							<!-- <a data-fancybox href="video/video_t1.mp4" class="rc_lnk"> -->
							<a data-fancybox1 href="#prs01" class="rc_lnk sw_lnk">
								<span class="cnt_in">
									<span class="h5">Празицид</span>
									<span class="h4">капли на холку Празицид для кошек и более 4 кг</span>
									<span class="ig">
										<img src="/wp-content/themes/theme/assets/img/syspensy-goods/adult_cat.png" width="142" height="224" alt="">
									</span>
									<span class="dtt">
										<span class="vlm">0,64 мл</span>
										<!-- <span class="vr">Видео-обзор</span> -->
									</span>
								</span>
							</a>
						</div>
						<div class="up cols_cards cols_cards03">
							<!-- <a data-fancybox href="video/video_t1.mp4" class="rc_lnk"> -->
							<a data-fancybox1 href="#prs01" class="rc_lnk sw_lnk">
								<span class="cnt_in">
									<span class="h5">Празицид</span>
									<span class="h4">Капли на холку Празицид для собак и щенков до 5 кг</span>
									<span class="ig">
										<img src="/wp-content/themes/theme/assets/img/syspensy-goods/adult_cat.png" width="142" height="224" alt="">
									</span>
									<span class="dtt">
										<span class="vlm">0,4 мл</span>
										<!-- <span class="vr">Видео-обзор</span> -->
									</span>
								</span>
							</a>
						</div>
					</div>
					<div class="rows_cards">
						<div class="up cols_cards cols_cards01">
							<!-- <a data-fancybox href="video/video_t1.mp4" class="rc_lnk"> -->
							<a data-fancybox1 href="#prs01" class="rc_lnk sw_lnk">
								<span class="cnt_in">
									<span class="h5">Празицид</span>
									<span class="h4">Капли на холку Празицид для собак и щенков до 5-10 кг</span>
									<span class="ig">
										<img src="/wp-content/themes/theme/assets/img/syspensy-goods/adult_cat.png" width="142" height="224" alt="">
									</span>
									<span class="dtt">
										<span class="vlm">0,8 мл</span>
										<!-- <span class="vr">Видео-обзор</span> -->
									</span>
								</span>
							</a>
						</div>
						<div class="up cols_cards cols_cards02">
							<!-- <a data-fancybox href="video/video_t1.mp4" class="rc_lnk"> -->
							<a data-fancybox1 href="#prs01" class="rc_lnk sw_lnk">
								<span class="cnt_in">
									<span class="h5">Празицид</span>
									<span class="h4">Капли на холку Празицид для собак и щенков 10-20 кг</span>
									<span class="ig">
										<img src="/wp-content/themes/theme/assets/img/syspensy-goods/adult_cat.png" width="142" height="224" alt="">
									</span>
									<span class="dtt">
										<span class="vlm">1,6 мл</span>
										<!-- <span class="vr">Видео-обзор</span> -->
									</span>
								</span>
							</a>
						</div>

					</div>
				</div>
			</div>

		</div>
	</div>

	<div id="syspensy-neo" class="up b_long_ovr">
		<div class="container">
			<div class="bg"></div>
			<div class="desc">
				<div class="rows">
					<div class="cols cols01">
						<div class="h5t">Празицид Суспензия <span class="neo-big">Нео</span></div>
						<div class="h4t">
							Лечение и профилактика заболеваний от глистов
						</div>
						<div class="dbl_btn dbl_btn_vs">
							<a href="#buy" class="button">Где купить</a>
							<a href="#prs01" class="button compound_lnk">Состав</a>
						</div>
					</div>
					<div class="cols cols02">
						<ul class="list_dana">
							<li>Широкий спектр действия против круглых и ленточных глистов</li>
							<li>Применение с трехнедельного возраста</li>
							<li>Увеличенный объем для полного курса лечения от глистов</li>
						</ul>
					</div>
				</div>
				<div class="rows_cards_ovr">
					<div class="rows_cards">
						<div class="up cols_cards cols_cards01">
							<!-- <a data-fancybox href="video/video_t1.mp4" class="rc_lnk"> -->
							<a data-fancybox1 href="#prs01" class="rc_lnk sw_lnk">
								<span class="cnt_in">
									<span class="h5">Празицид</span>
									<span class="h4">для кошек и котят до 4 кг</span>
									<span class="ig">
										<img src="/wp-content/themes/theme/assets/img/complex-neo-goods/cats&kitten_before4.png" width="142" height="224" alt="">
									</span>
									<span class="dtt">
										<span class="vlm">0,32 мл</span>
										<!-- <span class="vr">Видео-обзор</span> -->
									</span>
								</span>
							</a>
						</div>
						<div class="up cols_cards cols_cards02">
							<!-- <a data-fancybox href="video/video_t1.mp4" class="rc_lnk"> -->
							<a data-fancybox1 href="#prs01" class="rc_lnk sw_lnk">
								<span class="cnt_in">
									<span class="h5">Празицид</span>
									<span class="h4">капли на холку Празицид для кошек и более 4 кг</span>
									<span class="ig">
										<img src="/wp-content/themes/theme/assets/img/complex-neo-goods/cats&kitten_before4.png" width="142" height="224" alt="">
									</span>
									<span class="dtt">
										<span class="vlm">0,64 мл</span>
										<!-- <span class="vr">Видео-обзор</span> -->
									</span>
								</span>
							</a>
						</div>
						<div class="up cols_cards cols_cards03">
							<!-- <a data-fancybox href="video/video_t1.mp4" class="rc_lnk"> -->
							<a data-fancybox1 href="#prs01" class="rc_lnk sw_lnk">
								<span class="cnt_in">
									<span class="h5">Празицид</span>
									<span class="h4">Капли на холку Празицид для собак и щенков до 5 кг</span>
									<span class="ig">
										<img src="/wp-content/themes/theme/assets/img/complex-neo-goods/cats&kitten_before4.png" width="142" height="224" alt="">
									</span>
									<span class="dtt">
										<span class="vlm">0,4 мл</span>
										<!-- <span class="vr">Видео-обзор</span> -->
									</span>
								</span>
							</a>
						</div>
					</div>

				</div>
			</div>

		</div>
	</div>

	<div id="complex" class="up b_long_ovr">
		<div class="container">
			<div class="bg"></div>
			<div class="desc">
				<div class="rows">
					<div class="cols cols01">
						<div class="h5t">Празицид Комплекс</div>
						<div class="h4t">
							Уникальная 4-х компонентная формула. Легкость обработки
						</div>
						<div class="dbl_btn dbl_btn_vs">
							<a href="#buy" class="button">Где купить</a>
							<a href="#prs01" class="button compound_lnk">Состав</a>
						</div>
					</div>
					<div class="cols cols02">
						<ul class="list_dana">
							<li>Широкий спектр действия против круглых и ленточных глистов</li>
							<li>Защита от иксодовых клещей и насекомых в течение месяца</li>
							<li>Удобная форма применения - капли на холку - легко обработать капризных или агрессивных животных</li>
						</ul>
					</div>
				</div>
				<div class="rows_cards_ovr">
					<div class="rows_cards">
						<div class="up cols_cards cols_cards01">
							<!-- <a data-fancybox href="video/video_t1.mp4" class="rc_lnk"> -->
							<a data-fancybox1 href="#prs01" class="rc_lnk sw_lnk">
								<span class="cnt_in">
									<span class="h5">Празицид</span>
									<span class="h4">для кошек и котят до 4 кг</span>
									<span class="ig">
										<img src="/wp-content/themes/theme/assets/img/complex-goods/dog&puppy_before_4kg.png" width="142" height="224" alt="">
									</span>
									<span class="dtt">
										<span class="vlm">0,32 мл</span>
										<!-- <span class="vr">Видео-обзор</span> -->
									</span>
								</span>
							</a>
						</div>
						<div class="up cols_cards cols_cards02">
							<!-- <a data-fancybox href="video/video_t1.mp4" class="rc_lnk"> -->
							<a data-fancybox1 href="#prs01" class="rc_lnk sw_lnk">
								<span class="cnt_in">
									<span class="h5">Празицид</span>
									<span class="h4">капли на холку Празицид для кошек и более 4 кг</span>
									<span class="ig">
										<img src="/wp-content/themes/theme/assets/img/complex-goods/dog&puppy_before_4kg.png" width="142" height="224" alt="">
									</span>
									<span class="dtt">
										<span class="vlm">0,64 мл</span>
										<!-- <span class="vr">Видео-обзор</span> -->
									</span>
								</span>
							</a>
						</div>
						<div class="up cols_cards cols_cards03">
							<!-- <a data-fancybox href="video/video_t1.mp4" class="rc_lnk"> -->
							<a data-fancybox1 href="#prs01" class="rc_lnk sw_lnk">
								<span class="cnt_in">
									<span class="h5">Празицид</span>
									<span class="h4">Капли на холку Празицид для собак и щенков до 5 кг</span>
									<span class="ig">
										<img src="/wp-content/themes/theme/assets/img/complex-goods/dog&puppy_before_4kg.png" width="142" height="224" alt="">
									</span>
									<span class="dtt">
										<span class="vlm">0,4 мл</span>
										<!-- <span class="vr">Видео-обзор</span> -->
									</span>
								</span>
							</a>
						</div>
					</div>
					<div class="rows_cards">
						<div class="up cols_cards cols_cards01">
							<!-- <a data-fancybox href="video/video_t1.mp4" class="rc_lnk"> -->
							<a data-fancybox1 href="#prs01" class="rc_lnk sw_lnk">
								<span class="cnt_in">
									<span class="h5">Празицид</span>
									<span class="h4">Капли на холку Празицид для собак и щенков до 5-10 кг</span>
									<span class="ig">
										<img src="/wp-content/themes/theme/assets/img/complex-goods/dog&puppy_before_4kg.png" width="142" height="224" alt="">
									</span>
									<span class="dtt">
										<span class="vlm">0,8 мл</span>
										<!-- <span class="vr">Видео-обзор</span> -->
									</span>
								</span>
							</a>
						</div>
						<div class="up cols_cards cols_cards02">
							<!-- <a data-fancybox href="video/video_t1.mp4" class="rc_lnk"> -->
							<a data-fancybox1 href="#prs01" class="rc_lnk sw_lnk">
								<span class="cnt_in">
									<span class="h5">Празицид</span>
									<span class="h4">Капли на холку Празицид для собак и щенков 10-20 кг</span>
									<span class="ig">
										<img src="/wp-content/themes/theme/assets/img/complex-goods/dog&puppy_before_4kg.png" width="142" height="224" alt="">
									</span>
									<span class="dtt">
										<span class="vlm">1,6 мл</span>
										<!-- <span class="vr">Видео-обзор</span> -->
									</span>
								</span>
							</a>
						</div>
						<div class="up cols_cards cols_cards03">
							<!-- <a data-fancybox href="video/video_t1.mp4" class="rc_lnk"> -->
							<a data-fancybox1 href="#prs01" class="rc_lnk sw_lnk">
								<span class="cnt_in">
									<span class="h5">Празицид</span>
									<span class="h4">Капли на холку Празицид для собак и щенков 10-20 кг</span>
									<span class="ig">
										<img src="/wp-content/themes/theme/assets/img/complex-goods/dog&puppy_before_4kg.png" width="142" height="224" alt="">
									</span>
									<span class="dtt">
										<span class="vlm">1,6 мл</span>
										<!-- <span class="vr">Видео-обзор</span> -->
									</span>
								</span>
							</a>
						</div>

					</div>
				</div>
			</div>

		</div>
	</div>

	<div id="complex-neo" class="up b_long_ovr">
		<div class="container">
			<div class="bg"></div>
			<div class="desc">
				<div class="rows">
					<div class="cols cols01">
						<div class="h5t">Празицид Комплекс <span class="neo-big">Нео</span></div>
						<div class="h4t">
							Лечение и профилактика глистных инвазий у кошек и собак
						</div>
						<div class="dbl_btn dbl_btn_vs">
							<a href="#buy" class="button">Где купить</a>
							<a href="#prs01" class="button compound_lnk">Состав</a>
						</div>
					</div>
					<div class="cols cols02">
						<ul class="list_dana">
							<li>Широкий спектр действия против круглых и ленточных глистов</li>
							<li>Защита от иксодовых клещей и насекомых в течение месяца</li>
							<li>Удобная форма применения - капли на холку - легко обработать капризных или агрессивных животных</li>
						</ul>
					</div>
				</div>
				<div class="rows_cards_ovr">
					<div class="rows_cards">
						<div class="up cols_cards cols_cards01">
							<!-- <a data-fancybox href="video/video_t1.mp4" class="rc_lnk"> -->
							<a data-fancybox1 href="#prs01" class="rc_lnk sw_lnk">
								<span class="cnt_in">
									<span class="h5">Празицид</span>
									<span class="h4">для кошек и котят до 4 кг</span>
									<span class="ig">
										<img src="/wp-content/themes/theme/assets/img/complex-goods/dog&puppy_before_4kg.png" width="142" height="224" alt="">
									</span>
									<span class="dtt">
										<span class="vlm">0,32 мл</span>
										<!-- <span class="vr">Видео-обзор</span> -->
									</span>
								</span>
							</a>
						</div>
						<div class="up cols_cards cols_cards02">
							<!-- <a data-fancybox href="video/video_t1.mp4" class="rc_lnk"> -->
							<a data-fancybox1 href="#prs01" class="rc_lnk sw_lnk">
								<span class="cnt_in">
									<span class="h5">Празицид</span>
									<span class="h4">капли на холку Празицид для кошек и более 4 кг</span>
									<span class="ig">
										<img src="/wp-content/themes/theme/assets/img/complex-goods/dog&puppy_before_4kg.png" width="142" height="224" alt="">
									</span>
									<span class="dtt">
										<span class="vlm">0,64 мл</span>
										<!-- <span class="vr">Видео-обзор</span> -->
									</span>
								</span>
							</a>
						</div>
						<div class="up cols_cards cols_cards03">
							<!-- <a data-fancybox href="video/video_t1.mp4" class="rc_lnk"> -->
							<a data-fancybox1 href="#prs01" class="rc_lnk sw_lnk">
								<span class="cnt_in">
									<span class="h5">Празицид</span>
									<span class="h4">Капли на холку Празицид для собак и щенков до 5 кг</span>
									<span class="ig">
										<img src="/wp-content/themes/theme/assets/img/complex-goods/dog&puppy_before_4kg.png" width="142" height="224" alt="">
									</span>
									<span class="dtt">
										<span class="vlm">0,4 мл</span>
										<!-- <span class="vr">Видео-обзор</span> -->
									</span>
								</span>
							</a>
						</div>
					</div>
					<div class="rows_cards">
						<div class="up cols_cards cols_cards01">
							<!-- <a data-fancybox href="video/video_t1.mp4" class="rc_lnk"> -->
							<a data-fancybox1 href="#prs01" class="rc_lnk sw_lnk">
								<span class="cnt_in">
									<span class="h5">Празицид</span>
									<span class="h4">Капли на холку Празицид для собак и щенков до 5-10 кг</span>
									<span class="ig">
										<img src="/wp-content/themes/theme/assets/img/complex-goods/dog&puppy_before_4kg.png" width="142" height="224" alt="">
									</span>
									<span class="dtt">
										<span class="vlm">0,8 мл</span>
										<!-- <span class="vr">Видео-обзор</span> -->
									</span>
								</span>
							</a>
						</div>
						<div class="up cols_cards cols_cards02">
							<!-- <a data-fancybox href="video/video_t1.mp4" class="rc_lnk"> -->
							<a data-fancybox1 href="#prs01" class="rc_lnk sw_lnk">
								<span class="cnt_in">
									<span class="h5">Празицид</span>
									<span class="h4">Капли на холку Празицид для собак и щенков 10-20 кг</span>
									<span class="ig">
										<img src="/wp-content/themes/theme/assets/img/complex-goods/dog&puppy_before_4kg.png" width="142" height="224" alt="">
									</span>
									<span class="dtt">
										<span class="vlm">1,6 мл</span>
										<!-- <span class="vr">Видео-обзор</span> -->
									</span>
								</span>
							</a>
						</div>
						<div class="up cols_cards cols_cards03">
							<!-- <a data-fancybox href="video/video_t1.mp4" class="rc_lnk"> -->
							<a data-fancybox1 href="#prs01" class="rc_lnk sw_lnk">
								<span class="cnt_in">
									<span class="h5">Празицид</span>
									<span class="h4">Капли на холку Празицид для собак и щенков 10-20 кг</span>
									<span class="ig">
										<img src="/wp-content/themes/theme/assets/img/complex-goods/dog&puppy_before_4kg.png" width="142" height="224" alt="">
									</span>
									<span class="dtt">
										<span class="vlm">1,6 мл</span>
										<!-- <span class="vr">Видео-обзор</span> -->
									</span>
								</span>
							</a>
						</div>

					</div>
				</div>
			</div>

		</div>
	</div>

	<div id="tablets" class="up b_long_ovr">
		<div class="container">
			<div class="bg"></div>
			<div class="desc">
				<div class="rows">
					<div class="cols cols01">
						<div class="h5t">Таблетки</div>
						<div class="h4t">
							Точность дозировки. Выгодно владельцам нескольких питомцев
						</div>
						<div class="dbl_btn dbl_btn_vs">
							<a href="#buy" class="button">Где купить</a>
							<a href="#prs01" class="button compound_lnk">Состав</a>
						</div>
					</div>
					<div class="cols cols02">
						<ul class="list_dana">
							<li>Широкий спектр действия против круглых и ленточных глистов</li>
							<li>Применение с трехнедельного возраста</li>
							<li>Увеличенный объем для полного курса лечения от глистов</li>
						</ul>
					</div>
				</div>
				<div class="rows_cards_ovr">
					<div class="rows_cards">
						<div class="up cols_cards cols_cards01">
							<!-- <a data-fancybox href="video/video_t1.mp4" class="rc_lnk"> -->
							<a data-fancybox1 href="#prs01" class="rc_lnk sw_lnk">
								<span class="cnt_in">
									<span class="h5">Празицид</span>
									<span class="h4">для дегельминтизации кошек</span>
									<span class="ig">
										<img src="/wp-content/themes/theme/assets/img/tablets/cat.png" width="206" height="130" alt="">
									</span>
									<span class="dtt">
										<span class="vlm">0,32 мл</span>
										<!-- <span class="vr">Видео-обзор</span> -->
									</span>
								</span>
							</a>
						</div>
						<div class="up cols_cards cols_cards02">
							<!-- <a data-fancybox href="video/video_t1.mp4" class="rc_lnk"> -->
							<a data-fancybox1 href="#prs01" class="rc_lnk sw_lnk">
								<span class="cnt_in">
									<span class="h5">Празицид</span>
									<span class="h4">для дегельминтизации собак</span>
									<span class="ig">
										<img src="/wp-content/themes/theme/assets/img/tablets/dog.png" width="206" height="130" alt="">
									</span>
									<span class="dtt">
										<span class="vlm">0,64 мл</span>
										<!-- <span class="vr">Видео-обзор</span> -->
									</span>
								</span>
							</a>
						</div>
					</div>

				</div>
			</div>

		</div>
	</div>
</section>

<?php
$info_title = get_field('info_title');
$main_articles = get_field('main_articles');
$main_articles_ids = array();
foreach ($main_articles as $item) {
	$main_articles_ids[] = $item->ID;
}
unset($item);
$info_slides = get_posts(array(
	'numberposts' => -1,
	'orderby'     => 'date',
	'order'       => 'DESC',
	'exclude'     => $main_articles_ids,
	'post_type'   => 'articles',
));

$info_posts = get_posts(array(
	'numberposts' => -1,
	'orderby'     => 'date',
	'order'       => 'DESC',
	'post_type'   => 'articles',
));
?>

<section id="info" class="info block-container">
	<?php if ($info_title) { ?>
		<h2 class="info__title block-title">Полезная <br> информация</h2>
	<?php } ?>

	<?php if (is_array($main_articles) && !empty($main_articles)) { ?>
		<div class="info__main">
			<?php foreach ($main_articles as $item) { ?>
				<div class="info__main-item-wrap">
					<div class="info__main-item open-article" data-article="<?= $item->ID ?>">
						<?php $img = get_the_post_thumbnail_url($item, 'full');
						if ($img) { ?>
							<div class="info__main-item-img">
								<img src="<?= $img ?>" alt="">
							</div>
						<?php } ?>
						<div class="info__main-item-content">
							<h3 class="info__main-item-title"><?= get_the_title($item) ?></h3>
							<?php $tag = get_field('tag', $item);
							if ($tag) { ?>
								<span class="info__main-item-tag"><?= $tag ?></span>
							<?php } ?>
						</div>
					</div>
				</div>
			<?php }
			unset($item, $img, $tag); ?>
		</div>
	<?php } ?>

	<div class="info__slider swiper">
		<div class="swiper-wrapper">
			<?php foreach ($info_slides as $item) {
				$img = get_the_post_thumbnail_url($item, 'full');
				$tag = get_field('tag', $item);
			?>
				<div class="info__slide swiper-slide open-article" data-article="<?= $item->ID ?>">
					<?php if ($img) { ?>
						<div class="info__slide-img">
							<img src="<?= $img ?>" alt="">
						</div>
					<?php } ?>
					<div class="info__slide-content">
						<h3 class="info__slide-title"><?= get_the_title($item) ?></h3>
						<?php if ($tag) { ?>
							<span class="info__slide-tag"><?= $tag ?></span>
						<?php } ?>
					</div>
				</div>
			<?php }
			unset($item, $img); ?>
		</div>
		<div class="info__slider-pagination swiper-pagination"></div>
	</div>
	<?php if (is_array($info_posts) && !empty($info_posts)) { ?>
		<div class="modals">
			<?php foreach ($info_posts as $item) { ?>
				<div class="modal modal-article" data-article="<?= $item->ID ?>">
					<div class="modal__close">
						<svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M1 1L13 13M1 13L13 1L1 13Z" stroke="#5B6BCC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
						</svg>
					</div>
					<div class="modal__content">
						<div class="modal__content-banner">
							<div class="modal__content-banner-img">
								<?php $image = wp_get_attachment_image_url(get_field('image', $item), 'full');
								if ($image) { ?>
									<img src="<?= $image ?>" alt="">
								<?php } ?>
							</div>
						</div>
						<div class="modal__content-text">
							<span class="modal__headline block-title">Гельмимакс</span>
							<h2 class="modal__title block-title"><?php echo get_the_title($item); ?></h2>

							<?php echo apply_filters('post_content', $item->post_content); ?>

							<?php $links = get_field('links', $item);
							if (is_array($links) && !empty($links)) { ?>
								<div class="modal__links">
									<?php foreach ($links as $link) { ?>
										<div class="modal__link">
											<div class="modal__link-inner">
												<?php $link_img = wp_get_attachment_image_url($link['img'], 'full');
												if ($link_img) { ?>
													<div class="modal__link-img">
														<img src="<?= $link_img ?>" alt="">
													</div>
												<?php } ?>
												<div class="modal__link-content">
													<?php $link_name = $link['name'];
													if ($link_name) { ?>
														<h4 class="modal__link-title">Гельмимакс 4 для взрослых кошек <br> и котят</h4>
													<?php } ?>
													<div class="modal__link-button-holder">
														<?php $link_link = $link['link']; ?>
														<a href="<?= $link_link ? $link_link : '#' ?>" target="_blank" class="modal__link-button">Смотреть
															<svg width="20" height="14" viewBox="0 0 20 14" fill="none" xmlns="http://www.w3.org/2000/svg">
																<rect y="0.862305" width="19.0497" height="13.1377" rx="4" fill="#FF0000" />
																<path d="M12.8867 7.43091L7.84416 10.2753L7.84416 4.58651L12.8867 7.43091Z" fill="white" />
															</svg>
														</a>
													</div>
												</div>
											</div>
										</div>
									<?php }
									unset($link); ?>
								</div>
							<?php } ?>

						</div>
					</div>
				</div>
			<?php }
			unset($item); ?>
		</div>
	<?php } ?>
	<div class="show-all"><a href="#" class="button">Все статьи</a></div>
</section>

<?php
$buy_title = get_field('buy_title');
$buy_places = get_field('buy_places');
?>

<section id="buy" class="buy block-container">
	<?php if ($buy_title) { ?>
		<h2 class="block-title"><?= $buy_title ?></h2>
	<?php } ?>
	<?php if (is_array($buy_places) && !empty($buy_places)) { ?>
		<div class="buy__items">
			<?php foreach ($buy_places as $item) {
				$img = wp_get_attachment_image_url($item['img'], 'full');
			?>
				<div class="buy__item">
					<div class="buy-item">
						<?php if ($img) { ?>
							<div class="buy-item__image">
								<img src="<?= $img ?>" alt="">
							</div>
						<?php } ?>
						<a href="<?= $item['link'] ?>" target="_blank" class="buy-item__button button">Купить</a>
					</div>
				</div>
			<?php }
			unset($item, $img); ?>
		</div>
	<?php } ?>
</section>

<?php
$form_title = get_field('form_title');
$form_subtitle = get_field('form_subtitle');
?>

<section id="contact" class="contactform">
	<div class="for-right-padding">
		<?php if ($form_title) { ?>
			<h2 class="contactform__title block-title"><?= $form_title ?></h2>
		<?php } ?>
		<?php if ($form_subtitle) { ?>
			<div class="contactform__subtitle block-subtitle"><?= $form_subtitle ?></div>
		<?php } ?>
		<div class="contact-form-wrapper"><?php echo do_shortcode('[contact-form-7 id="133" title="Консультация"]'); ?></div>
	</div>

	<div class="contactform__bg"></div>
</section>

<div class="modal-thank">
	<h2 class="modal-thank__title">Спасибо!</h2>
	<span class="modal-thank__subtitle">Ваше обращение успешно отправлено</span>
</div>
</div>

<?php get_footer(); ?>