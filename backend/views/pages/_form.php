<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Pages */
/* @var $form yii\widgets\ActiveForm */
/*
 *     <?= $form->field($model, 'parent_id')->widget(\kartik\select2\Select2::classname(), [
        'data' => \yii\helpers\ArrayHelper::map(\common\models\Pages::find()->all(),'id','name'),
        'value' =>'0',
        'language' => 'ru',
        'options' => ['placeholder' => 'Выберите'],
        'pluginOptions' => [
            'allowClear' => true,

        ],
    ]);?>

 *
 * */

?>

<div class="pages-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php

         if ($parentId) {

             echo $form->field($model, 'parent_id')->textInput(['maxlength' => true,'value'=>$parentId]);

         }else{

             echo $form->field($model, 'parent_id')->textInput(['maxlength' => true]);

         }
    ?>





    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'url')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'photo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'active')->dropDownList(\common\models\Pages::getStatusList()) ?>

    <?= $form->field($model, 'menu_active')->dropDownList(\common\models\Pages::getStatusList()) ?>

    <?= $form->field($model, 'main_page_active')->dropDownList(\common\models\Pages::getStatusList()) ?>

    <?= $form->field($model, 'sort')->textInput(['maxlength' => true]); ?>
    <?= $form->field($model, 'embed')->textInput(['maxlength' => true]); ?>

    <?= $form->field($model, 'products_brand')->dropDownList(\common\models\Pages::getProductsBrand()) ?>
    <?= $form->field($model, 'products_carrying')->dropDownList(\common\models\Pages::getProductsCarrying()) ?>
    <?= $form->field($model, 'products_motor')->dropDownList(\common\models\Pages::getProductsMotor()) ?>
    <?= $form->field($model, 'products_type')->dropDownList(\common\models\Pages::getProductsType()) ?>
    <?= $form->field($model, 'products_type_second')->dropDownList(\common\models\Pages::getProductsTypeSecond()) ?>
    <?php /*= $form->field($model, 'pages')->widget(\kartik\select2\Select2::classname(), [
        'data' => \yii\helpers\ArrayHelper::map(\common\models\PagesText::find()->all(),'id','name'),

        'language' => 'ru',
        'options' => ['placeholder' => 'Выберите Tag ...','multiple' => 'true'],
        'pluginOptions' => [
            'allowClear' => true,
            'tags' => true,
            'maximumInputLength' => 10
        ],
    ]); */?>



    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>
    <?php //$model->translateButtonsNew($model);?>
</div>
