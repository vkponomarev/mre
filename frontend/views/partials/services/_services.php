<?php

/* @var $this \yii\web\View */



?>

<div class="wrap wrap-products">

    <div class="container main-page-headers">
        <a name="production"></a>Услуги электрика
    </div>
    <div class="container">

<?php foreach ($categoriesData as $category):?>

    <div class="div-main-products col-xs-12 col-sm-6 col-md-4">

        <a class="a-main-products" href="/services/<?= $category['url']  ?>/">
            <img class="main-page-image" src="/files/services/<?= $category['photo']  ?>" width="300">
            <br>
            <?= $category['plates_title']  ?>
        </a>

    </div>


<?php endforeach;?>



    </div>
    <br><br>
</div>
