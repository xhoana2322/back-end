<?php get_header(); ?>

<div class="text-center">
        <div class="row">
            <div class="col-6 d-flex align-items-center justify-content-center flex-column">
                <h1 class="text-center">HomePage: <?php bloginfo( 'name' ); ?></h1>
                <h2 class="text-center"><?php bloginfo( 'description' ); ?></h2>
            </div>
            <div class="col-6">
                <img src="<?php echo get_template_directory_uri() . '/assets/img/micio_buffo.jpg'; ?>" alt="" class="w-100">
            </div>
        </div>
    </div>

    <div class="row border">
        <div class="col-3">
            <img src="<?php echo get_template_directory_uri() . '/assets/img/micio_eheh.jpg'; ?>" alt="">
        </div>
        <div class="col-9">
            <div><? the_title() ?></div>
        </div>
    </div>

<?php get_footer(); ?>