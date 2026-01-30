<?php
get_header();
?>

<div class="container my-5">
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
            <?php 
            $bg = get_the_post_thumbnail_url(get_the_ID(), 'full'); 
            ?>
            <article class="post mb-4 p-0 rounded shadow-sm" 
        style="background-image: url('<?php echo esc_url($bg); ?>'); 
                background-size: cover; 
                background-position: center;">
    <div style="background-color: rgba(0,0,0,0.4); padding: 20px; border-radius: 8px;">
        <h2><a href="<?php the_permalink(); ?>" style="color: #fff;"><?php the_title(); ?></a></h2>
        <div class="post-meta text-light mb-3">
            Publicat el <?php the_date(); ?> per <?php the_author(); ?>
        </div>
        <div class="post-content text-white">
            <?php the_excerpt(); ?>
        </div>
        <a href="<?php the_permalink(); ?>" class="btn btn-light mt-3">Llegir més →</a>
    </div>
</article>
        <?php endwhile; ?>
    <?php else : ?>
        <p>No hi ha entrades encara. <a href="<?php echo admin_url('post-new.php'); ?>">Crea'n una!</a></p>
    <?php endif; ?>
</div>

<?php
get_footer();
?>