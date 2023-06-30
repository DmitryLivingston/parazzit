<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Theme
 */

get_header();
?>

	<main id="main" class="site-page">

		<div class="container">
			<?php if(!is_front_page()){ ?>
				<div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
					<?php if(function_exists('bcn_display'))
					{
					   bcn_display();
					}?>
				</div>
			<?php } ?>

			<h1 class="page_title"><?php the_title(); ?></h1>
			<div class="page_content">
				<?php the_content(); ?> 
			</div>
		</div>
	</main>

<?php
get_footer();
