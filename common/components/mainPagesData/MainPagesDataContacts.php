<?php

namespace common\components\mainPagesData;



use Yii;
use yii\web\NotFoundHttpException;



class MainPagesDataContacts
{


    public function contacts($subDomainData)
    {

        if (!$subDomainData){

            Yii::$app->params['phone'] = '+79279370049';
            Yii::$app->params['email'] = 'mrelectrik.ru@gmail.com';

            Yii::$app->params['modalMain'] = '
            <br><br>
                <button type="button" class="btn btn-success main-btn" data-toggle="modal" data-target="#myModal">
                    Вызвать электрика<br>на дом
                </button>
                <button type="button" class="btn btn-success main-btn" data-toggle="modal" data-target="#myModal">
                    Получить<br>консультацию
                </button>
                <br><br>
            
            ';
            Yii::$app->params['modalContacts'] = '                <br><br>

                <button type="button" class="btn btn-success main-btn" data-toggle="modal" data-target="#myModal">Перезвонить</button>

                <br><br>';


        }

        if ($subDomainData){

            Yii::$app->params['phone'] = 'Здесь может быть ваш телефон';
            Yii::$app->params['email'] = 'mrelectrik.ru@gmail.com';

            Yii::$app->params['modalMain'] = '<br><br>По поводу аренды данного сайта писать на mrelectrik.ru@gmail.com<br><br>
            ';
            Yii::$app->params['modalContacts'] = '<br><br>По поводу аренды данного сайта писать на mrelectrik.ru@gmail.com<br><br>';

        }




    }




}

