<?php   
require_once('header.php');
?>

    
    <div class="container mt-4">
        <h1 class="text-center">Dettaglio singola attivita</h1>
        <h4 class="mt-4">Titolo: <?= $post->title ?></h4>
        <p><?= $post->body ?></p>
    </div>

    
<?php   
require_once('footer.php');
?>