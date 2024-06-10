<h1 class="text-center m-5">Nos annonces!</h1>
<section class="d-flex flex-column m-auto text-center">

    <?php foreach ($ads as $ad) :
        require  dirname(__DIR__) .'/partials/ad-card.html.php';
     endforeach ?>
</section>