<?php
/*
Template Name: Serveis
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
            <p class="lead mb-5">Descobreix els serveis que oferim: gestió, ajuda i venda.</p>
        </div>
    </div>
</div>

<div class="container my-5">
<div class="row g-4">

        <div class="col-md-4">
            <div class="card h-100 text-center">
                <img src="<?php echo get_template_directory_uri(); ?>/servei1.jpg" class="card-img-top" alt="Gestió">
                <div class="card-body">
                    <h5 class="card-title">Gestió</h5>
                    <p class="card-text">Organitzem tots els processos per a tu de manera eficient.</p>
                    <a href="#" class="btn btn-primary">Veure</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card h-100 text-center">
                <img src="<?php echo get_template_directory_uri(); ?>/servei2.jpg" class="card-img-top" alt="Ajuda">
                <div class="card-body">
                    <h5 class="card-title">Ajuda</h5>
                    <p class="card-text">Assessorament i suport personalitzat per a cada client.</p>
                    <a href="#" class="btn btn-primary">Veure</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card h-100 text-center">
                <img src="<?php echo get_template_directory_uri(); ?>/servei3.jpg" class="card-img-top" alt="Venda">
                <div class="card-body">
                    <h5 class="card-title">Venda</h5>
                    <p class="card-text">Productes i serveis de qualitat adaptats a les teves necessitats.</p>
                    <a href="#" class="btn btn-primary">Veure</a>
                </div>
            </div>
        </div>

    </div>
</div>

<?php get_footer(); ?>