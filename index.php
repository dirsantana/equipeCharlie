<?php require_once("header.php") ?>

<section id="bannerHome">
    <img class="image-banner" src="https://cointimes.com.br/wp-content/uploads/2019/03/ltima-Blockbuster-do-planeta-est%C3%A1-no-Oregon.jpg" alt="">
</section>


<section class="categoria">

<nav class="row nav-categoria d-flex justify-content-center">
    <?php 
    foreach (getCategorias() as $categoria) { 
    echo '<div class="card custom-card col-lg-2" style="width: 18rem;">';
    echo  '<div class="card-body">';
    echo '<a href="categoria.php?categoria_id=' . $categoria["categoria_id"].'" 
    class="card-link"><h5 class="card-title">'.$categoria["nome"].'</h5></a>';
    echo '</div>';
    echo '</div>';
    }
    ?>
</nav>
</section>

<section class="maisbaratos container">

<h1 class=" h1home text-align-center"> Melhores Preços </h1>

<nav class="row d-flex justify-content-center">



<nav class="col-lg-12">
    <ul class="list-group">
    <?php
    foreach (getMelhoresPrecos() as $melhoresPrecos)
    {
      echo '<li class="list-group-item">' . $melhoresPrecos["titulo"] . '</li>';
    }
    ?>
    </ul>
</nav>

</nav>


</section>

<?php require_once("footer.php") ?>