<?php get_header(); // hook di WP per elaborare ed includere il file header.php ?>

<div class="container text-center">
        <div class="row">
            <div class="col-8">
                <h1 class="text-center">Page: <?php bloginfo( 'name' ); ?></h1>
                <?php
                    if ( is_user_logged_in() ) {
                        echo 'Welcome, registered user!';
                    } else {
                        echo 'Welcome, visitor!';
                    }
                ?>
                <div>
                    <div class="card mt-4" style="width: 18rem;">
                        <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                    </div>
                </div>
                
            </div>


            <div class="col-4">
                <?php get_sidebar(); ?>
            </div>
        </div>
    </div>


<?php get_footer(); // hook di WP per elaborare ed includere il file footer.php ?>