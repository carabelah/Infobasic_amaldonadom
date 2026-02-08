<?php
/*
Template Name: Camises
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
            <p class="lead mb-5">Explora la nostra col·lecció de camises de qualitat i estil.</p>
        </div>
    </div>
</div>


<div class="container my-5">
<div class="row g-4">


        <div class="col-md-4">
            <div class="card h-100 text-center">
                <?php
                $camisa1_id = 47;
                $camisa1_url = wp_get_attachment_image_src($camisa1_id, 'full')[0];
                ?>
                <img src="<?php echo esc_url($camisa1_url); ?>" class="card-img-top" alt="Camisa 1">
                <div class="card-body">
                    <h5 class="card-title">Camisa Moderna</h5>
                    <p class="card-text">Preu: 25€</p>
                    <a href="#" class="btn btn-primary">Comprar</a>
                </div>
            </div>
        </div>


        <div class="col-md-4">
            <div class="card h-100 text-center">
                <?php
                $camisa2_id = 52;
                $camisa2_url = wp_get_attachment_image_src($camisa2_id, 'full')[0];
                ?>
                <img src="<?php echo esc_url($camisa2_url); ?>" class="card-img-top" alt="Camisa 2">
                <div class="card-body">
                    <h5 class="card-title">Camisa Casual</h5>
                    <p class="card-text">Preu: 30€</p>
                    <a href="#" class="btn btn-primary">Comprar</a>
                </div>
            </div>
        </div>


        <div class="col-md-4">
            <div class="card h-100 text-center">
                <?php
                $camisa3_id = 46;
                $camisa3_url = wp_get_attachment_image_src($camisa3_id, 'full')[0];
                ?>
                <img src="<?php echo esc_url($camisa3_url); ?>" class="card-img-top" alt="Camisa 3">
                <div class="card-body">
                    <h5 class="card-title">Camisa Elegant</h5>
                    <p class="card-text">Preu: 35€</p>
                    <a href="#" class="btn btn-primary">Comprar</a>
                </div>
            </div>
        </div>

    </div>
</div>

<?php get_footer(); ?>
