<?php
get_header();
?>

<div class="container my-5">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <article class="entry-header text-center mb-5">
            <h1 class="entry-title"><?php the_title(); ?></h1>
            <div class="entry-meta text-muted mb-3">
                Publicat el <?php the_date(); ?> per <?php the_author(); ?>
            </div>
        </article>

        <div class="entry-content fs-5 lh-lg">
            <?php the_content(); ?>
        </div>

        <div class="back-link text-center mt-5">
            <a href="<?php echo esc_url(get_permalink(get_option('page_for_posts'))); ?>" class="btn btn-outline-primary">← Tornar al blog</a>
        </div>
    <?php endwhile; endif; ?>
</div>

<?php
get_footer();

?>
