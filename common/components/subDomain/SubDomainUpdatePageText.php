<?php

namespace common\components\subDomain;

use Yii;

class SubDomainUpdatePageText
{

    public function update($subDomainData)
    {
        //(new \common\components\dump\Dump())->printR($subDomainData);
        if ($subDomainData) {
            Yii::$app->params['text']['title'] = str_replace('{domain}', ' ' . $subDomainData['text1'], Yii::$app->params['text']['title']);
            Yii::$app->params['text']['h1'] = str_replace('{domain}', ' ' . $subDomainData['text1'], Yii::$app->params['text']['h1']);
            Yii::$app->params['text']['description'] = str_replace('{domain}', ' ' . $subDomainData['text1'], Yii::$app->params['text']['description']);
            Yii::$app->params['text']['text1'] = str_replace('{domain}', ' ' . $subDomainData['text1'], Yii::$app->params['text']['text1']);
        } else {

            Yii::$app->params['text']['title'] = str_replace('{domain}', ' в Уфе', Yii::$app->params['text']['title']);
            Yii::$app->params['text']['h1'] = str_replace('{domain}', ' в Уфе', Yii::$app->params['text']['h1']);
            Yii::$app->params['text']['description'] = str_replace('{domain}', ' в Уфе', Yii::$app->params['text']['description']);
            Yii::$app->params['text']['text1'] = str_replace('{domain}', ' в Уфе', Yii::$app->params['text']['text1']);


        }

    }

}

