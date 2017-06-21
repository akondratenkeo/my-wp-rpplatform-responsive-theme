<?php
/**
 * A Simple Category Template
 */

get_header('blog');

$current_cat = get_queried_object();
if(!$current_cat->parent){
    $subcats_ids = get_term_children($current_cat->term_id, 'category');
} else {
    $subcats_ids = get_term_children($current_cat->parent, 'category');
}


//$args = array( 'child_of' => $current_cat->term_id, );
?>
    <div id="blog-page" class="blog-page">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 about-container">
                    <div class="col-sm-4">
                        <div class="col-sm-8 categories right no-margin">
                            <ul>
                                <?foreach ($subcats_ids as $value):?>
                                    <?if($value == $current_cat->term_id):?>
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
                        <section id="primary" class="site-content">
                            <div id="content" role="main">

                                <?php
                                // Check if there are any posts to display
                                if (have_posts()) : ?>

                                    <!--<header class="archive-header">
                                        <h1 class="archive-title">Category: <?php /*single_cat_title('', false); */?></h1>


                                        <?php
/*                                        if (category_description()) : */?>
                                            <div class="archive-meta"><?php /*echo category_description(); */?></div>
                                        <?php /*endif; */?>
                                    </header>-->

                                    <?php
                                    while (have_posts()) : the_post(); ?>
                                        <div class="entry row">
                                            <div class="col-xs-12"><?php
                                                $id = $post->ID;
                                                $feat_image = wp_get_attachment_url(get_post_thumbnail_id($id));
                                            ?>
                                            <div class="featured-image"><img src="<?php echo $feat_image;?>" alt="" class="img-responsive"></div>
                                            <small><?php the_time('d F Y G:i') ?> </small>
                                            <?php $category = get_the_category($post->ID); ?>
                                            <div class="category">
                                              <a href="<?php echo get_category_link($post->ID);?>" class="right">
                                                <?php echo $category[0]->name;?>
                                              </a>
                                            </div>
                                            <h2><a href="<?php the_permalink() ?>" rel="bookmark"
                                                   title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
                                            <?php
                                            $words = explode(" ",strip_tags(get_the_content()));
                                            $content = implode(" ",array_splice($words,0,90));
                                            echo $content . " ...";
                                            ?>
                                            <div class="col-xs-12"><div class="readMore right text-center btn"><a href="<?php echo get_permalink(); ?>">Read More</a></div></div>
                                            <!--<p class="postmetadata"><?php
/*                                                comments_popup_link('No comments yet', '1 comment', '% comments', 'comments-link', 'Comments closed');
                                                */?></p>-->
                                              </div>
                                        </div>


                                    <?php endwhile;

                                else: ?>
                                    <p>Sorry, no posts matched your criteria.</p>

                                <?php endif; ?>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php get_sidebar(); ?>
<?php get_footer('blog'); ?>
