<?php

/* @var $this yii\web\View
 */



?>

<div class="wrap wrap-main">

    <div class="container">
        <div class="row">
            <div class="div-h1-main">

                <h1 class="h1-main"><?= Yii::$app->params['text']['h1'] ?></h1>

            </div>
        </div>

        <div class="row">
            <br><br>
        </div>

        <div class="row">

            <div class="main-text-and-pic col-xs-12 col-sm-6">

                <img class="main-page-image" src="/files/electrik7.png" width="100">

            </div>

            <div class="main-text-and-pic col-xs-12 col-sm-6">
            <span class="main-text">
                качественный электромонтаж
            </span>
                <?= Yii::$app->params['modalMain'] ?>
                <span class="main-text">
               <i class="fa fa-phone icon-main" aria-hidden="true"></i><?= Yii::$app->params['phone'] ?>
            </span>

            </div>

        </div>
        <div class="row">
            <br><br>
        </div>
    </div>

</div>

<div class="wrap wrap-contacts">

    <div class="container">
        <div class="div-second-contacts col-xs-12 col-sm-6">

            <i class="fa fa-phone icon-main-second" aria-hidden="true"></i><br>

            <?= Yii::$app->params['phone'] ?>

        </div>

        <div class="div-second-contacts col-xs-12 col-sm-6">

            <i class="fa fa-envelope icon-main-second" aria-hidden="true"></i><br>

            <?= Yii::$app->params['email'] ?>

        </div>
    </div>

</div>


<?= $this->render('/partials/services/_services', [

    'categoriesData' => $categoriesData,
]); ?>


<div class="wrap wrap-small-info">

    <div class="container">
        <div class="div-small-info col-xs-6 col-sm-3">

            <i class="fa fa-calendar icon-main-second" aria-hidden="true"></i><br>
            Более 10 лет электромонтажа

        </div>
        <div class="div-small-info col-xs-6 col-sm-3">

            <i class="fa fa-bolt icon-main-second" aria-hidden="true"></i><br>
            Качественная работа


        </div>
        <div class="div-small-info col-xs-6 col-sm-3">

            <i class="fa fa-users icon-main-second" aria-hidden="true"></i><br>
            Сотни довольных клиентов

        </div>
        <div class="div-small-info col-xs-6 col-sm-3">

            <i class="fa fa-cart-plus icon-main-second" aria-hidden="true"></i><br>
            Демократичные цены

        </div>
    </div>

</div>


<?= $this->render('/partials/contacts/_contacts', [

]); ?>





