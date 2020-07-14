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

                <img class="main-page-image" src="/files/services/<?= $categoryData['photo'] ?>">

            </div>

            <div class="main-text-and-pic col-xs-12 col-sm-6">
            <span class="main-text">
                качественный электромонтаж
            </span>
                <?= Yii::$app->params['modalMain'] ?>
                <span class="main-text">
                <i class="fa fa-phone icon-main" aria-hidden="true"></i> <?= Yii::$app->params['phone'] ?>
            </span>

            </div>

        </div>

    </div>

</div>

<div class="wrap main-spacer">
</div>
<?= Yii::$app->params['text']['text1'] ?>






