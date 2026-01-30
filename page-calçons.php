<?php
/*
Template Name: Calçons
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
            <p class="lead mb-5">Descobreix els nostres calçons còmodes i de qualitat.</p>
        </div>
    </div>
</div>

<div class="container my-5">
<div class="row g-4">

        <div class="col-md-4">
            <div class="card h-100 text-center">
                <img src="<?php echo get_template_directory_uri(); ?>/calcons1.jpg" class="card-img-top" alt="Calçons 1">
                <div class="card-body">
                    <h5 class="card-title">Calçons Bàsics</h5>
                    <p class="card-text">Preu: 15€</p>
                    <a href="#" class="btn btn-primary">Comprar</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card h-100 text-center">
                <img src="<?php echo get_template_directory_uri(); ?>/calcons2.jpg" class="card-img-top" alt="Calçons 2">
                <div class="card-body">
                    <h5 class="card-title">Calçons Esportius</h5>
                    <p class="card-text">Preu: 20€</p>
                    <a href="#" class="btn btn-primary">Comprar</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card h-100 text-center">
                <img src="<?php echo get_template_directory_uri(); ?>/calcons3.jpg" class="card-img-top" alt="Calçons 3">
                <div class="card-body">
                    <h5 class="card-title">Calçons Elegants</h5>
                    <p class="card-text">Preu: 25€</p>
                    <a href="#" class="btn btn-primary">Comprar</a>
                </div>
            </div>
        </div>

    </div>
</div>

<?php get_footer(); ?>