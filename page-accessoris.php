<?php
/*
Template Name: Accessoris
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
            <h2 class="display-4 mb-4"><?php the_title(); ?></h2>
            <p class="lead mb-5">Completa el teu estil amb els nostres accessoris únics.</p>
        </div>
    </div>
</div>

<div class="container my-5">
<div class="row g-4">

        <div class="col-md-4">
            <div class="card h-100 text-center">
                <img src="<?php echo get_template_directory_uri(); ?>/accessori1.jpg" class="card-img-top" alt="Accessoris 1">
                <div class="card-body">
                    <h5 class="card-title">Accessoris Moderns</h5>
                    <p class="card-text">Preu: 10€</p>
                    <a href="#" class="btn btn-primary">Comprar</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card h-100 text-center">
                <img src="<?php echo get_template_directory_uri(); ?>/accessori2.jpg" class="card-img-top" alt="Accessoris 2">
                <div class="card-body">
                    <h5 class="card-title">Accessoris Elegants</h5>
                    <p class="card-text">Preu: 15€</p>
                    <a href="#" class="btn btn-primary">Comprar</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card h-100 text-center">
                <img src="<?php echo get_template_directory_uri(); ?>/accessori3.jpg" class="card-img-top" alt="Accessoris 3">
                <div class="card-body">
                    <h5 class="card-title">Accessoris Premium</h5>
                    <p class="card-text">Preu: 20€</p>
                    <a href="#" class="btn btn-primary">Comprar</a>
                </div>
            </div>
        </div>

    </div>
</div>

<?php get_footer(); ?>