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

	<?php $menu_items = get_field('menu_items');
	if (is_array($menu_items) && !empty($menu_items)) { ?>
		<nav class="menu mobile-menu">
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

<?php
if (is_array($menu_items) && !empty($menu_items)) { ?>
	<nav class="menu desktop-menu">
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

<?php

$goods_title = get_field('goods_title');
$goods_subtitle = get_field('goods_subtitle');
$goods_img = wp_get_attachment_image_url(get_field('advantages_img'), 'full');
$goods_benefits = get_field('benefits');
?>
<?
$queryGoods = new WP_Query(['post_type' => 'goods']);
?>


<section class="goods">


	<? while ($queryGoods->have_posts()) {
		$queryGoods->the_post();
		$goods_meta = get_fields($queryGoods->ID);
		$goods_id = get_the_ID();

		if ($goods_id == 244) : ?>

			<div id="syspensy" class="up b_long_ovr">
				<div class="container">
					<div class="bg"></div>
					<div class="desc">
						<div class="rows">
							<div class="cols cols01">
								<div class="h5t"><?= $goods_meta['goods_title'] ?></div>
								<div class="h4t">
									<?= $goods_meta['goods_subtitle'] ?>
								</div>
								<div class="dbl_btn dbl_btn_vs">
									<a href="#buy" class="button">Где купить</a>
									<a href="#prs01" class="button compound_lnk sw_lnk">Состав</a>
								</div>
							</div>
							<div class="cols cols02">
								<ul class="list_dana">
									<? if ($goods_meta['benefits']) :
										foreach ($goods_meta['benefits'] as $benLink) : ?>

											<li><?= $benLink['benefit'] ?></li>

									<? endforeach;
									endif ?>
								</ul>
							</div>
						</div>
						<div class="rows_cards_ovr">
							<div class="rows_cards">

								<? if ($goods_meta['good']) :
									$i = 0;
									foreach ($goods_meta['good'] as $good) :
										$i++;
										if ($i <= 3) : ?>

											<div class="up cols_cards cols_cards01">

												<a data-fancybox1 href="#prs01" class="rc_lnk sw_lnk">
													<span class="cnt_in">
														<span class="h5"><img class="little-logo" src="/wp-content/themes/theme/assets/img/Logo_Prasicid.png" alt=""></span>
														<span class="h4"><?= $good['undertitle'] ?></span>
														<span class="ig">
															<img src="<?= $good['image']['url'] ?>" width="142" height="224" alt="">
														</span>
														<span class="dtt">
															<span class="vlm">Суспензия плюс</span><span class="vlm"><?= $good['dozirovka'] ?></span>
														</span>
													</span>
												</a>
											</div>

								<? endif;
									endforeach;
								endif ?>

							</div>
							<div class="rows_cards">
								<? if ($goods_meta['good']) :
									$i = 0;
									foreach ($goods_meta['good'] as $good) :
										$i++;
										if ($i > 3) : ?>


											<div class="up cols_cards cols_cards01">

												<a data-fancybox1 href="#prs01" class="rc_lnk sw_lnk">
													<span class="cnt_in">
														<span class="h5"><img class="little-logo" src="/wp-content/themes/theme/assets/img/Logo_Prasicid.png" alt=""></span>
														<span class="h4"><?= $good['undertitle'] ?></span>
														<span class="ig">
															<img src="<?= $good['image']['url'] ?>" width="142" height="224" alt="">
														</span>
														<span class="dtt">
															<span class="vlm">Суспензия плюс</span><span class="vlm"><?= $good['dozirovka'] ?></span>
														</span>
													</span>
												</a>
											</div>

								<? endif;
									endforeach;
								endif ?>

							</div>
						</div>
					</div>
					<div class="blo_mb">
						<div class="swiper blo_slr">
							<div class="swiper-wrapper">

								<? if ($goods_meta['good']) :
									foreach ($goods_meta['good'] as $good) : ?>

										<div class="swiper-slide">
											<div class="caption">

												<a data-fancybox1 href="#prs01" class="rc_lnk sw_lnk">
													<span class="cnt_in">
														<span class="h5"><img class="little-logo" src="/wp-content/themes/theme/assets/img/Logo_Prasicid.png" alt=""></span>
														<span class="h4"><?= $good['undertitle'] ?></span>
														<span class="ig">
															<img src="<?= $good['image']['url'] ?>" width="134" height="216" alt="">
														</span>
														<span class="dtt">
															<span class="vlm">Суспензия плюс</span><span class="vlm"><?= $good['dozirovka'] ?></span>
														</span>
													</span>
												</a>
											</div>
										</div>

								<?
									endforeach;
								endif ?>

							</div>
							<div class="nav_blo swiper-pagination"></div>
						</div>
					</div>
				</div>
			</div>

		<? endif; ?>

		<? if ($goods_id == 238) : ?>

			<div id="syspensy-neo" class="up b_long_ovr">
				<div class="container">
					<div class="bg"></div>
					<div class="desc">
						<div class="rows">
							<div class="cols cols01">
								<div class="h5t"><?= $goods_meta['goods_title'] ?> <span class="neo-big">Нео</span></div>
								<div class="h4t">
									<?= $goods_meta['goods_subtitle'] ?>
								</div>
								<div class="dbl_btn dbl_btn_vs">
									<a href="#buy" class="button">Где купить</a>
									<a href="#prs01" class="button compound_lnk sw_lnk">Состав</a>
								</div>
							</div>
							<div class="cols cols02">
								<ul class="list_dana">
									<? if ($goods_meta['benefits']) :
										foreach ($goods_meta['benefits'] as $benLink) : ?>

											<li><?= $benLink['benefit'] ?></li>

									<? endforeach;
									endif ?>
								</ul>
							</div>
						</div>
						<div class="rows_cards_ovr">
							<div class="rows_cards">

								<? if ($goods_meta['good']) :
									foreach ($goods_meta['good'] as $good) : ?>

										<div class="up cols_cards cols_cards01">

											<a data-fancybox1 href="#prs01" class="rc_lnk sw_lnk">
												<span class="cnt_in">
													<span class="h5"><img class="little-logo" src="/wp-content/themes/theme/assets/img/Logo_Prasicid.png" alt=""></span>
													<span class="h4"><?= $good['undertitle'] ?></span>
													<span class="ig">
														<img src="<?= $good['image']['url'] ?>" width="142" height="224" alt="">
													</span>
													<span class="dtt">
														<span class="vlm">Суспензия HEO</span><span class="vlm"><?= $good['dozirovka'] ?></span>
													</span>
												</span>
											</a>
										</div>

								<? endforeach;
								endif ?>

							</div>
						</div>
					</div>
					<div class="blo_mb">
						<div class="swiper blo_slr">
							<div class="swiper-wrapper">
								<? if ($goods_meta['good']) :
									foreach ($goods_meta['good'] as $good) : ?>
										<div class="swiper-slide">
											<div class="caption">

												<a data-fancybox1 href="#prs01" class="rc_lnk sw_lnk">
													<span class="cnt_in">
														<span class="h5"><img class="little-logo" src="/wp-content/themes/theme/assets/img/Logo_Prasicid.png" alt=""></span>
														<span class="h4"><?= $good['undertitle'] ?></span>
														<span class="ig">
															<img src="<?= $good['image']['url'] ?>" width="134" height="216" alt="">
														</span>
														<span class="dtt">
															<span class="vlm">Суспензия HEO</span><span class="vlm"><?= $good['dozirovka'] ?></span>
														</span>
													</span>
												</a>
											</div>
										</div>

								<? endforeach;
								endif ?>

							</div>
							<div class="nav_blo swiper-pagination"></div>
						</div>
					</div>
				</div>
			</div>

		<? endif; ?>

		<? if ($goods_id == 252) : ?>

			<div id="complex" class="up b_long_ovr">
				<div class="container">
					<div class="bg"></div>
					<div class="desc">
						<div class="rows">
							<div class="cols cols01">
								<div class="h5t"><?= $goods_meta['goods_title'] ?></div>
								<div class="h4t">
									<?= $goods_meta['goods_subtitle'] ?>
								</div>
								<div class="dbl_btn dbl_btn_vs">
									<a href="#buy" class="button">Где купить</a>
									<a href="#prs01" class="button compound_lnk sw_lnk">Состав</a>
								</div>
							</div>
							<div class="cols cols02">
								<ul class="list_dana">
									<? if ($goods_meta['benefits']) :
										foreach ($goods_meta['benefits'] as $benLink) : ?>

											<li><?= $benLink['benefit'] ?></li>

									<? endforeach;
									endif ?>
								</ul>
							</div>
						</div>
						<div class="rows_cards_ovr">
							<div class="rows_cards">

								<? if ($goods_meta['good']) :
									$i = 0;
									foreach ($goods_meta['good'] as $good) :
										$i++;
										if ($i <= 3) : ?>


											<div class="up cols_cards cols_cards01">

												<a data-fancybox1 href="#prs01" class="rc_lnk sw_lnk">
													<span class="cnt_in">
														<span class="h5"><img class="little-logo" src="/wp-content/themes/theme/assets/img/Logo_Prasicid.png" alt=""></span>
														<span class="h4"><?= $good['undertitle'] ?></span>
														<span class="ig">
															<img src="<?= $good['image']['url'] ?>" width="142" height="224" alt="">
														</span>
														<span class="dtt">
															<span class="vlm">Комплекс</span><span class="vlm"><?= $good['dozirovka'] ?></span>
														</span>
													</span>
												</a>
											</div>

								<? endif;
									endforeach;
								endif ?>

							</div>
							<div class="rows_cards">

								<? if ($goods_meta['good']) :
									$i = 0;
									foreach ($goods_meta['good'] as $good) :
										$i++;
										if ($i > 3) : ?>


											<div class="up cols_cards cols_cards01">

												<a data-fancybox1 href="#prs01" class="rc_lnk sw_lnk">
													<span class="cnt_in">
														<span class="h5"><img class="little-logo" src="/wp-content/themes/theme/assets/img/Logo_Prasicid.png" alt=""></span>
														<span class="h4"><?= $good['undertitle'] ?></span>
														<span class="ig">
															<img src="<?= $good['image']['url'] ?>" width="142" height="224" alt="">
														</span>
														<span class="dtt">
															<span class="vlm">Комплекс</span><span class="vlm"><?= $good['dozirovka'] ?></span>
														</span>
													</span>
												</a>
											</div>

								<? endif;
									endforeach;
								endif ?>


							</div>
						</div>
					</div>
					<div class="blo_mb">
						<div class="swiper blo_slr">
							<div class="swiper-wrapper">

								<? if ($goods_meta['good']) :
									foreach ($goods_meta['good'] as $good) : ?>

										<div class="swiper-slide">
											<div class="caption">

												<a data-fancybox1 href="#prs01" class="rc_lnk sw_lnk">
													<span class="cnt_in">
														<span class="h5"><img class="little-logo" src="/wp-content/themes/theme/assets/img/Logo_Prasicid.png" alt=""></span>
														<span class="h4"><?= $good['undertitle'] ?></span>
														<span class="ig">
															<img src="<?= $good['image']['url'] ?>" width="134" height="216" alt="">
														</span>
														<span class="dtt">
															<span class="vlm">Комплекс</span><span class="vlm"><?= $good['dozirovka'] ?></span>
														</span>
													</span>
												</a>
											</div>
										</div>

								<?
									endforeach;
								endif ?>

							</div>
							<div class="nav_blo swiper-pagination"></div>
						</div>
					</div>
				</div>
			</div>

		<? endif; ?>

		<? if ($goods_id == 259) : ?>

			<div id="complex-neo" class="up b_long_ovr">
				<div class="container">
					<div class="bg"></div>
					<div class="desc">
						<div class="rows">
							<div class="cols cols01">
								<div class="h5t"><?= $goods_meta['goods_title'] ?> <span class="neo-big">Нео</span></div>
								<div class="h4t">
									<?= $goods_meta['goods_subtitle'] ?>
								</div>
								<div class="dbl_btn dbl_btn_vs">
									<a href="#buy" class="button">Где купить</a>
									<a href="#prs01" class="button compound_lnk sw_lnk">Состав</a>
								</div>
							</div>
							<div class="cols cols02">
								<ul class="list_dana">
									<? if ($goods_meta['benefits']) :
										foreach ($goods_meta['benefits'] as $benLink) : ?>

											<li><?= $benLink['benefit'] ?></li>

									<? endforeach;
									endif ?>
								</ul>
							</div>
						</div>
						<div class="rows_cards_ovr">
							<div class="rows_cards">

								<? if ($goods_meta['good']) :
									$i = 0;
									foreach ($goods_meta['good'] as $good) :
										$i++;
										if ($i <= 3) : ?>


											<div class="up cols_cards cols_cards01">

												<a data-fancybox1 href="#prs01" class="rc_lnk sw_lnk">
													<span class="cnt_in">
														<span class="h5"><img class="little-logo" src="/wp-content/themes/theme/assets/img/Logo_Prasicid.png" alt=""></span>
														<span class="h4"><?= $good['undertitle'] ?></span>
														<span class="ig">
															<img src="<?= $good['image']['url'] ?>" width="142" height="224" alt="">
														</span>
														<span class="dtt">
															<span class="vlm">Комплекс</span><span class="vlm"><?= $good['dozirovka'] ?></span>
														</span>
													</span>
												</a>
											</div>

								<? endif;
									endforeach;
								endif ?>

							</div>
							<div class="rows_cards">

								<? if ($goods_meta['good']) :
									$i = 0;
									foreach ($goods_meta['good'] as $good) :
										$i++;
										if ($i > 3) : ?>


											<div class="up cols_cards cols_cards01">

												<a data-fancybox1 href="#prs01" class="rc_lnk sw_lnk">
													<span class="cnt_in">
														<span class="h5"><img class="little-logo" src="/wp-content/themes/theme/assets/img/Logo_Prasicid.png" alt=""></span>
														<span class="h4"><?= $good['undertitle'] ?></span>
														<span class="ig">
															<img src="<?= $good['image']['url'] ?>" width="142" height="224" alt="">
														</span>
														<span class="dtt">
															<span class="vlm">Комплекс</span><span class="vlm"><?= $good['dozirovka'] ?></span>
														</span>
													</span>
												</a>
											</div>

								<? endif;
									endforeach;
								endif ?>


							</div>
						</div>
					</div>
					<div class="blo_mb">
						<div class="swiper blo_slr">
							<div class="swiper-wrapper">

								<? if ($goods_meta['good']) :
									foreach ($goods_meta['good'] as $good) : ?>

										<div class="swiper-slide">
											<div class="caption">

												<a data-fancybox1 href="#prs01" class="rc_lnk sw_lnk">
													<span class="cnt_in">
														<span class="h5"><img class="little-logo" src="/wp-content/themes/theme/assets/img/Logo_Prasicid.png" alt=""></span>
														<span class="h4"><?= $good['undertitle'] ?></span>
														<span class="ig">
															<img src="<?= $good['image']['url'] ?>" width="134" height="216" alt="">
														</span>
														<span class="dtt">
															<span class="vlm">Комплекс</span><span class="vlm"><?= $good['dozirovka'] ?></span>
														</span>
													</span>
												</a>
											</div>
										</div>

								<?
									endforeach;
								endif ?>

							</div>
							<div class="nav_blo swiper-pagination"></div>
						</div>
					</div>
				</div>
			</div>

		<? endif; ?>

		<? if ($goods_id == 266) : ?>

			<div id="tablets" class="up b_long_ovr">
				<div class="container">
					<div class="bg"></div>
					<div class="desc">
						<div class="rows">
							<div class="cols cols01">
								<div class="h5t"><?= $goods_meta['goods_title'] ?></div>
								<div class="h4t">
								<?= $goods_meta['goods_subtitle'] ?>
								</div>
								<div class="dbl_btn dbl_btn_vs">
									<a href="#buy" class="button">Где купить</a>
									<a href="#prs01" class="button compound_lnk sw_lnk">Состав</a>
								</div>
							</div>
							<div class="cols cols02">
								<ul class="list_dana">
								<? if ($goods_meta['benefits']) :
										foreach ($goods_meta['benefits'] as $benLink) : ?>

											<li><?= $benLink['benefit'] ?></li>

									<? endforeach;
									endif ?>
								</ul>
							</div>
						</div>
						<div class="rows_cards_ovr">
							<div class="rows_cards">

							<? if ($goods_meta['good']) :
									foreach ($goods_meta['good'] as $good) : ?>

										<div class="up cols_cards cols_cards01">

											<a data-fancybox1 href="#prs01" class="rc_lnk sw_lnk">
												<span class="cnt_in">
													<span class="h5"><img class="little-logo" src="/wp-content/themes/theme/assets/img/Logo_Prasicid.png" alt=""></span>
													<span class="h4"><?= $good['undertitle'] ?></span>
													<span class="ig">
														<img src="<?= $good['image']['url'] ?>" width="206" height="130" alt="">
													</span>
													<span class="dtt">
														<span class="vlm">6 таблеток</span><span class="vlm"><?= $good['dozirovka'] ?></span>
													</span>
												</span>
											</a>
										</div>

								<? endforeach;
								endif ?>

							</div>

						</div>
					</div>
					<div class="blo_mb">
						<div class="swiper blo_slr">
							<div class="swiper-wrapper">

							<? if ($goods_meta['good']) :
									foreach ($goods_meta['good'] as $good) : ?>
										<div class="swiper-slide">
											<div class="caption">

												<a data-fancybox1 href="#prs01" class="rc_lnk sw_lnk">
													<span class="cnt_in">
														<span class="h5"><img class="little-logo" src="/wp-content/themes/theme/assets/img/Logo_Prasicid.png" alt=""></span>
														<span class="h4"><?= $good['undertitle'] ?></span>
														<span class="ig">
															<img src="<?= $good['image']['url'] ?>" width="190" height="120" alt="">
														</span>
														<span class="dtt">
															<span class="vlm">Суспензия HEO</span><span class="vlm"><?= $good['dozirovka'] ?></span>
														</span>
													</span>
												</a>
											</div>
										</div>

								<? endforeach;
								endif ?>

							</div>
							<div class="nav_blo swiper-pagination"></div>
						</div>
					</div>
				</div>
			</div>

		<? endif; ?>



	<? }
	wp_reset_postdata();
	?>

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

							<?/*php $links = get_field('links', $item);
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
							<?php } */ ?>

						</div>
					</div>
				</div>
			<?php }
			unset($item); ?>
		</div>
	<?php } ?>
	<!-- <div class="show-all"><a href="#" class="button">Все статьи</a></div> -->
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

<!-- Модалка товара 1-->
<div id="prs01" class="l_menu">
	<div class="modal__close l_close">
		<svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
			<path d="M1 1L13 13M1 13L13 1L1 13Z" stroke="#5B6BCC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
		</svg>
	</div>
	<div class="desc_img">
		<!-- <div class="dbi01"></div> -->
		<!-- <div class="dbi02"></div>
		<div class="dbi03"></div> -->
		<!-- <img src="img/pp4.png" width="339" height="537" alt="" class="w_img w_img01">
		<img src="img/pp5.png" width="339" height="537" alt="" class="w_img w_img02"> -->

	</div>
	<div class="l_menu_in">
		<div class="desc_ovr">
			<div class="rows">
				<div class="cols cols01">
					<div class="desc_img">
						<!-- <div class="dbi01"></div> -->
						<div class="dbi02"></div>
						<div class="dbi03"></div>
						<div class="modal-goods">
							<!-- <div class="up cols_cards cols_cards01">
								<a data-fancybox1 href="#prs01" class="rc_lnk sw_lnk">
									<span class="cnt_in">
										<img class="little-logo" src="/wp-content/themes/theme/assets/img/Logo_Prasicid.png" alt="">
										<span class="h4">для кошек и котят до 4 кг</span>
										<span class="ig">
											<img src="/wp-content/themes/theme/assets/img/syspensy-goods/adult_cat.png" width="142" height="224" alt="">
										</span>
										<span class="dtt">
											<span class="vlm">0,32 мл</span>
										</span>
									</span>
								</a>
							</div>
							<div class="up cols_cards cols_cards02">
								<a data-fancybox1 href="#prs01" class="rc_lnk sw_lnk">
									<span class="cnt_in">
										<img class="little-logo" src="/wp-content/themes/theme/assets/img/Logo_Prasicid.png" alt="">

										<span class="h4">для кошек более 4 кг</span>
										<span class="ig">
											<img src="/wp-content/themes/theme/assets/img/syspensy-goods/adult_cat.png" width="142" height="224" alt="">
										</span>
										<span class="dtt">
											<span class="vlm">Суспензия</span><span class="vlm">0,64 мл</span>
										</span>
									</span>
								</a>
							</div>
							<div class="up cols_cards cols_cards03">
								<a data-fancybox1 href="#prs01" class="rc_lnk sw_lnk">
									<span class="cnt_in">
										<img class="little-logo" src="/wp-content/themes/theme/assets/img/Logo_Prasicid.png" alt="">

										<span class="h4">для собак и щенков до 5 кг</span>
										<span class="ig">
											<img src="/wp-content/themes/theme/assets/img/syspensy-goods/adult_cat.png" width="142" height="224" alt="">
										</span>
										<span class="dtt">
											<span class="vlm">0,4 мл</span>
										</span>
									</span>
								</a>
							</div>
							<div class="up cols_cards cols_cards03">
								<a data-fancybox1 href="#prs01" class="rc_lnk sw_lnk">
									<span class="cnt_in">
										<img class="little-logo" src="/wp-content/themes/theme/assets/img/Logo_Prasicid.png" alt="">

										<span class="h4">для собак и щенков до 5 кг</span>
										<span class="ig">
											<img src="/wp-content/themes/theme/assets/img/syspensy-goods/adult_cat.png" width="142" height="224" alt="">
										</span>
										<span class="dtt">
											<span class="vlm">0,4 мл</span>
										</span>
									</span>
								</a>
							</div>
							<div class="up cols_cards cols_cards03">
								<a data-fancybox1 href="#prs01" class="rc_lnk sw_lnk">
									<span class="cnt_in">
										<img class="little-logo" src="/wp-content/themes/theme/assets/img/Logo_Prasicid.png" alt="">

										<span class="h4">для собак и щенков до 5 кг</span>
										<span class="ig">
											<img src="/wp-content/themes/theme/assets/img/syspensy-goods/adult_cat.png" width="142" height="224" alt="">
										</span>
										<span class="dtt">
											<span class="vlm">0,4 мл</span>
										</span>
									</span>
								</a>
							</div> -->
						</div>

						<div class="mobile-modal-slider">
							<div class="swiper modal-slider">
								<div class="swiper-wrapper">
									<div class="swiper-slide">
										<div class="caption">

											<a data-fancybox1 href="#prs01" class="rc_lnk sw_lnk">
												<span class="cnt_in">
													<span class="h5"><img class="little-logo" src="/wp-content/themes/theme/assets/img/Logo_Prasicid.png" alt=""></span>
													<span class="h4">для кошек и котят до 4 кг</span>
													<span class="ig">
														<img src="/wp-content/themes/theme/assets/img/syspensy-goods/adult_cat.png" width="134" height="216" alt="">
													</span>
													<span class="dtt">
														<span class="vlm">0,32 мл</span>
														<!-- <span class="vr">Видео-обзор</span> -->
													</span>
												</span>
											</a>
										</div>
									</div>
									<div class="swiper-slide">
										<div class="caption">

											<a data-fancybox1 href="#prs01" class="rc_lnk sw_lnk">
												<span class="cnt_in">
													<span class="h5"><img class="little-logo" src="/wp-content/themes/theme/assets/img/Logo_Prasicid.png" alt=""></span>
													<span class="h4">капли на холку Дана Ультра для кошек и более 4 кг</span>
													<span class="ig">
														<img src="/wp-content/themes/theme/assets/img/syspensy-goods/adult_cat.png" width="134" height="216" alt="">
													</span>
													<span class="dtt">
														<span class="vlm">0,64 мл</span>
														<!-- <span class="vr">Видео-обзор</span> -->
													</span>
												</span>
											</a>
										</div>
									</div>
									<div class="swiper-slide">
										<div class="caption">

											<a data-fancybox1 href="#prs01" class="rc_lnk sw_lnk">
												<span class="cnt_in">
													<span class="h5"><img class="little-logo" src="/wp-content/themes/theme/assets/img/Logo_Prasicid.png" alt=""></span>
													<span class="h4">Капли на холку Дана Ультра для собак и щенков до 5 кг</span>
													<span class="ig">
														<img src="/wp-content/themes/theme/assets/img/syspensy-goods/adult_cat.png" width="134" height="216" alt="">
													</span>
													<span class="dtt">
														<span class="vlm">0,4 мл</span>
														<!-- <span class="vr">Видео-обзор</span> -->
													</span>
												</span>
											</a>
										</div>
									</div>
									<div class="swiper-slide">
										<div class="caption">

											<a data-fancybox1 href="#prs01" class="rc_lnk sw_lnk">
												<span class="cnt_in">
													<span class="h5"><img class="little-logo" src="/wp-content/themes/theme/assets/img/Logo_Prasicid.png" alt=""></span>
													<span class="h4">Капли на холку Дана Ультра для собак и щенков до 5 кг</span>
													<span class="ig">
														<img src="/wp-content/themes/theme/assets/img/syspensy-goods/adult_cat.png" width="134" height="216" alt="">
													</span>
													<span class="dtt">
														<span class="vlm">0,4 мл</span>
														<!-- <span class="vr">Видео-обзор</span> -->
													</span>
												</span>
											</a>
										</div>
									</div>
									<div class="swiper-slide">
										<div class="caption">

											<a data-fancybox1 href="#prs01" class="rc_lnk sw_lnk">
												<span class="cnt_in">
													<span class="h5"><img class="little-logo" src="/wp-content/themes/theme/assets/img/Logo_Prasicid.png" alt=""></span>
													<span class="h4">Капли на холку Дана Ультра для собак и щенков до 5 кг</span>
													<span class="ig">
														<img src="/wp-content/themes/theme/assets/img/syspensy-goods/adult_cat.png" width="134" height="216" alt="">
													</span>
													<span class="dtt">
														<span class="vlm">0,4 мл</span>
														<!-- <span class="vr">Видео-обзор</span> -->
													</span>
												</span>
											</a>
										</div>
									</div>
									<div class="swiper-slide">
										<div class="caption">

											<a data-fancybox1 href="#prs01" class="rc_lnk sw_lnk">
												<span class="cnt_in">
													<span class="h5"><img class="little-logo" src="/wp-content/themes/theme/assets/img/Logo_Prasicid.png" alt=""></span>
													<span class="h4">Капли на холку Дана Ультра для собак и щенков до 5 кг</span>
													<span class="ig">
														<img src="/wp-content/themes/theme/assets/img/syspensy-goods/adult_cat.png" width="134" height="216" alt="">
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
								<div class="modal_pag_block"></div>
							</div>
						</div>
					</div>
				</div>
				<div class="cols cols02 modal-content modal-news-content">
					<div class="desc">
						<div class="h5t">Празицид Суспензия</div>
						<div class="txt">
							<p>
								Празицид-суспензию Плюс назначают взрослым собакам и кошкам, щенкам и котятам с профилактической и лечебной целью при желудочно-кишечных нематодозах (токсокароз, токсаскаридоз, унцинариоз, трихоцефалез, анкилостомоз), цестодозах (тениидоз, дипилидиоз, альвеококкоз, эхинококкоз, дифиллоботриоз, мезоцестоидоз), ассоциативных нематодоцестодозных инвазиях и лямблиозе.
							</p>
							<div class="ln"></div>
							<div class="h5">Состав</div>
							<div class="modal-h6">Празицид-суспензия Плюс для котят, щенков мелких пород и взрослых кошек:</div>
							<ul>
								<li>Фипронил — 100 мг/мл,</li>
								<li>тиаметоксам — 50 мг/мл,</li>
								<li>пирипроксифен — 50 мг/мл,</li>
								<li>вспомогательные вещества до 1 мл.</li>
							</ul>

							<div class="modal-h6">Празицид-суспензия Плюс для щенков средних и крупных пород и взрослых собак:</div>
							<ul>
								<li>Фипронил — 100 мг/мл,</li>
								<li>тиаметоксам — 50 мг/мл,</li>
								<li>пирипроксифен — 50 мг/мл,</li>
								<li>вспомогательные вещества до 1 мл.</li>
							</ul>
							<div class="ln"></div>
							<div class="h5">Дозировка и применение</div>
							<p>Лекарственный препарат применяют животным перорально индивидуально, в утреннее кормление с небольшим количеством корма или вводят принудительно на корень языка с помощью шприца-дозатора в дозах, указанных в таблице. С профилактической целью дегельминтизацию животных проводят один раз в квартал, а также перед каждой вакцинацией.
							</p>
							<div class="table_p">
								<div class="r">
									<div class="c">Масса животного</div>
									<div class="c">Объем препарата</div>
									<div class="c">Кол-во пипеток, шт</div>
								</div>
								<div class="r">
									<div class="c">Собаки и щенки до 5 кг</div>
									<div class="c">0,5 мл</div>
									<div class="c">1 пипетка</div>
								</div>
								<div class="r">
									<div class="c">Собаки и щенки от 5 до 10 кг</div>
									<div class="c">1 мл</div>
									<div class="c">1 пипетка</div>
								</div>
								<div class="r">
									<div class="c">Собаки и щенки от 5 до 20 кг</div>
									<div class="c">2 мл</div>
									<div class="c">1 пипетка</div>
								</div>
								<div class="r">
									<div class="c">Собаки от 20 до 40 кг</div>
									<div class="c">4 мл</div>
									<div class="c">1 пипетка</div>
								</div>
								<div class="r">
									<div class="c">Собаки от 40 до 60 кг</div>
									<div class="c">6 мл</div>
									<div class="c">Комбинация пипеток</div>
								</div>
								<div class="r">
									<div class="c">Собаки от 40 до 80 кг</div>
									<div class="c">8 мл</div>
									<div class="c">Комбинация пипеток</div>
								</div>
								<div class="r">
									<div class="c">Кошки менее 4 кг</div>
									<div class="c">0,4 мл</div>
									<div class="c">1 пипетка</div>
								</div>
								<div class="r">
									<div class="c">Кошки более 4 кг</div>
									<div class="c">0,8 мл</div>
									<div class="c">1 пипетка</div>
								</div>
							</div>
							<div class="ln"></div>
							<div class="h5">Противопоказания</div>
							<p>Противопоказанием к применению является индивидуальная непереносимость компонентов препарата (в том числе в анамнезе). Празицид-суспензию Плюс не следует применять истощенным, больным инфекционными болезнями и выздоравливающим животным, щенкам и котятам моложе 3-недельного возраста.</p>
							<div class="ln"></div>
							<div class="h5">Условия хранения</div>
							<p>Хранят препарат в закрытой упаковке производителя, в защищенном от прямых солнечных лучей месте, отдельно от продуктов питания и кормов при температуре от 0 ºС до 25 ºС.</p>
							<div class="ln"></div>
							<div class="h5">Срок годности</div>
							<p>Срок годности лекарственного препарата при соблюдении условий хранения в закрытой упаковке производителя — 2 года со дня производства.</p>
							<div class="ln"></div>
							<div class="h5">Особенности и преимущества</div>
							<div class="h6">Высокая эффективность</div>
							<ul>
								<li>Широкий спектр действия против наружных паразитов</li>
								<li>Защита от иксодовых клещей в течение месяца</li>
								<li>Защита от блох, вшей, власоедов в течение двух месяцев</li>
								<li>Усиленная формула для борьбы с резистентностью
									паразитов</li>
								<li>Прерывание цикла развития блох</li>
								<li>Лечение и профилактика паразитарных болезней за одно применение</li>
								<li>Начинает действовать в течение суток после нанесения</li>
							</ul>
							<div class="h6">Безопасность</div>
							<ul>
								<li>Компоненты работают только на поверхности кожи</li>
								<li>Применение уже с 10-недельного возраста</li>
								<li>Широкая линейка дозировок для точного подбора
									на любой вес животного
								</li>
							</ul>
							<div class="h6">Удобство</div>
							<ul>
								<li>Каждая пипетка в индивидуальной упаковке с инструкцией</li>
								<li>Пипетки открываются без использования ножниц</li>
								<li>Средство минимально пачкает шерсть и капли быстро
									распределяются</li>
								<li>Легкий цитрусовый запах</li>
								<li>Все средства из линейки Дана Ультра можно комбинировать</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- </div> -->

<?php get_footer(); ?>