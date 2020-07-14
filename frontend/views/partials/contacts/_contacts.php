<?php

/* @var $this \yii\web\View */

?>

<div class="wrap wrap-main-contacts">
    <div class="container">


        <div class="container main-page-headers">
            <a name="contacts"></a>Контакты
        </div>
        <br><br>


        <div class="div-main-contacts col-xs-12 col-sm-12 col-md-12">
            <div class="contact-form">
                <span class="main-contacts-phone-header">Телефон:</span><br><br>
                <span class="main-contacts-phone"><?= Yii::$app->params['phone'] ?></span><br><br>

                <span class="main-contacts-phone-header">Или оставьте заявку на звонок:</span><br>

                <?= Yii::$app->params['modalContacts'] ?>

                <span>Перезвоним в течении 10 минут</span>
            </div>

        </div>

    </div>

</div>
