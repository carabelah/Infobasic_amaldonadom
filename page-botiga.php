<?php
/*
Template Name: Botiga
*/
get_header();

$bg = get_the_post_thumbnail_url(get_the_ID(), 'full');
?>

<div class="jumbotron jumbotron-fluid text-white py-5 mb-5"
    style="background-image: url('<?php echo esc_url($bg); ?>'); 
            background-size: cover; 
            background-position: center;">


    <div class="bg-dark bg-opacity-50 py-5">
        <div class="container text-center">
            <strong><h2 class="display-4 mb-4">La nostra botiga</h2></strong>
            <p class="lead mb-5" style="color: #cdcdcd;">
            Descobreix els nostres productes destacats i selecciona el que més t’agrada!
            </p>
        </div>
    </div>
</div>


<div class="container my-5">
<div class="row g-4">


        <div class="col-md-4">
            <div class="card h-100 text-center">
                <?php if (get_page_by_path('botiga/camises')->post_thumbnail_id) : ?>
                    <img src="<?php echo get_the_post_thumbnail_url(get_page_by_path('botiga/camises'), 'medium'); ?>" class="card-img-top" alt="Camises">
                <?php endif; ?>
                <div class="card-body">
                    <h5 class="card-title"><strong>Camises</strong></h5>
                    <p class="card-text">Explora la nostra col·lecció de camises de qualitat i estil.</p>
                    <a href="<?php echo esc_url(get_permalink(get_page_by_path('botiga/camises'))); ?>" class="btn btn-primary">Veure</a>
                </div>
            </div>
        </div>


        <div class="col-md-4">
            <div class="card h-100 text-center">
                <?php if (get_page_by_path('botiga/calcons')->post_thumbnail_id) : ?>
                    <img src="<?php echo get_the_post_thumbnail_url(get_page_by_path('botiga/calcons'), 'medium'); ?>" class="card-img-top" alt="Calçons">
                <?php endif; ?>
                <div class="card-body">
                    <h5 class="card-title"><strong>Calçons</strong></h5>
                    <p class="card-text">Descobreix els nostres calçons còmodes i de qualitat.</p>
                    <a href="<?php echo esc_url(get_permalink(get_page_by_path('botiga/calcons'))); ?>" class="btn btn-primary">Veure</a>
                </div>
            </div>
        </div>


        <div class="col-md-4">
            <div class="card h-100 text-center">
                <?php if (get_page_by_path('botiga/accessoris')->post_thumbnail_id) : ?>
                    <img src="<?php echo get_the_post_thumbnail_url(get_page_by_path('botiga/accessoris'), 'medium'); ?>" class="card-img-top" alt="Accessoris">
                <?php endif; ?>
                <div class="card-body">
                    <h5 class="card-title"><strong>Accessoris</strong></h5>
                    <p class="card-text">Completa el teu estil amb els nostres accessoris únics.</p>
                    <a href="<?php echo esc_url(get_permalink(get_page_by_path('botiga/accessoris'))); ?>" class="btn btn-primary">Veure</a>
                </div>
            </div>
        </div>

    </div>
</div>

<?php get_footer(); ?>