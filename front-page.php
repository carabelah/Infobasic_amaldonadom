<?php
get_header();

$bg = get_the_post_thumbnail_url(get_the_ID(), 'full');
?>

<div class="jumbotron jumbotron-fluid text-white py-5 mb-5"
    style="background-image: url('<?php echo esc_url($bg); ?>');
            background-size: cover;
            background-position: center;">

    <div class="bg-dark bg-opacity-50 py-5">
        <div class="container text-center">
            <h1 class="display-4">Benvingut a Infobasic!</h1>
            <p class="lead">Descobreix els nostres serveis i productes destacats.</p>

        <?php
        $serveis_page = get_posts(array(
            'name'        => 'serveis',
            'post_type'   => 'page',
            'post_status' => 'publish',
            'numberposts' => 1
        ));
        if (!empty($serveis_page)) :
            $serveis_id = $serveis_page[0]->ID; ?>
            <a href="<?php echo esc_url(get_permalink($serveis_id)); ?>" class="btn btn-light btn-lg mt-3">
                Serveis
            </a>
        <?php endif; ?>

        <?php
        $botiga_page = get_posts(array(
            'name'        => 'botiga',
            'post_type'   => 'page',
            'post_status' => 'publish',
            'numberposts' => 1
        ));
        if (!empty($botiga_page)) :
            $botiga_id = $botiga_page[0]->ID; ?>
            <a href="<?php echo esc_url(get_permalink($botiga_id)); ?>" class="btn btn-warning btn-lg mt-3">
                Botiga
            </a>
        <?php endif; ?>
    </div>
</div>

<div class="container my-5">
    <h2 class="text-center mb-4" style="color: #515151;">Els nostres serveis</h2>
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Venda</h5>
                    <p class="card-text">Descobreix els nostres productes i serveis a la botiga, amb opcions adaptades a les teves necessitats.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Gestió</h5>
                    <p class="card-text">Solucions eficients per gestionar tots els aspectes del teu projecte, 
                        assegurant un funcionament òptim i sense complicacions.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Ajuda</h5>
                    <p class="card-text">Estem aquí per respondre dubtes i ajudar-te en tot moment, 
                        amb assistència clara i ràpida.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container my-5 text-center">
    <?php
    $blog_page_id = get_option('page_for_posts');
    if ($blog_page_id) : ?>
        <a href="<?php echo esc_url(get_permalink($blog_page_id)); ?>" class="btn btn-secondary btn-lg">
            Blog
        </a>
    <?php endif; ?>
</div>

<?php get_footer(); ?>