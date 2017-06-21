<?php
/**
 * The template part for displaying single posts
 */
?>
<?php
get_header('blog'); ?>
<?php
$current_cat = get_the_category();
$subcats_ids = get_term_children($current_cat[0]->parent, 'category');
?>

<div id="blog-page" class="blog-page">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 about-container">
				<div class="col-sm-4">
					<div class="col-sm-8 categories right no-margin">
						<ul>
							<?foreach ($subcats_ids as $value):?>
								<?if($value == $current_cat[0]->term_id):?>
									<li class="category" id="active"><a href="<?php echo get_category_link($value);?>"><?php echo get_the_category_by_ID($value);?></a></li>
								<?else :?>
									<li class="category"><a href="<?php echo get_category_link($value);?>"><?php echo get_the_category_by_ID($value);?></a></li>
								<?endif;?>
							<?endforeach;?>
						</ul>
					</div>
					<div class="col-sm-8 h-line right"></div>
					<div class="clearfix"></div>
					<div class="col-sm-8 recent-posts-wrapper right">
						<?php
						$args = array( 'numberposts' => '3', 'post_status' => 'publish' );
						$recent_posts = wp_get_recent_posts( $args );
						?>
						<p class="recent-posts-title">Recent posts:</p>
						<div class="recent-posts-list">
							<?php foreach( $recent_posts as $recent ):?>
								<div class="recent-post">
									<p class="recent-post-date"><?php echo date( "d F Y G:i", strtotime($recent['post_date']));?></p>
									<a href="<?php echo get_permalink($recent['ID']);?>" class="recent-post-link"><?php echo $recent['post_title'];?></a>
								</div>
							<?php endforeach;?>
						</div>
					</div>
					<div class="h-line right"></div>
					<div class="clearfix"></div>
					<div class="automate-form col-sm-8 right">
						<?php echo do_shortcode('[contact-form-7 id="350" title="Form on category"]'); ?>
					</div>
				</div>
				<div class="col-sm-8">
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<div class="entry-content">
							<?php
								$id = $post->ID;
								$feat_image = wp_get_attachment_url(get_post_thumbnail_id($id));
							?>
							<div class="bread"><?php the_breadcrumb(); ?></div>
							<div class="post-date"><p><?php echo date( "d F Y G:i", strtotime($post->post_date));?></p></div>
							<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
							<div class="featured-image"><img src="<?php echo $feat_image;?>" alt=""></div>
							<?php the_content(); ?>
						</div>
					</article><!-- #post-## -->
				</div>
			</div>
		</div>
	</div>
</div>

<?php get_sidebar(); ?>
<?php get_footer('blog'); ?>
