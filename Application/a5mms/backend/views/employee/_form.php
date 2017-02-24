<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Employee */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="employee-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'emp_lname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'emp_fname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'emp_mi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'emp_nickname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'emp_address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'emp_provadd')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'emp_bdate')->textInput() ?>

    <?= $form->field($model, 'emp_bplace')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'emp_contact')->textInput() ?>

    <?= $form->field($model, 'emp_email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'emp_civilstatus')->dropDownList([ 'single' => 'Single', 'married' => 'Married', 'widowed' => 'Widowed', '' => '', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'emp_img')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'emp_pice_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'emp_pice_relationship')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'emp_pice_address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'emp_pice_contact')->textInput() ?>

    <?= $form->field($model, 'emp_sss_no')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'emp_tin_no')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'emp_pagibig_no')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'emp_philhealth_no')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'emp_datehired')->textInput() ?>

    <?= $form->field($model, 'emp_status')->dropDownList([ 'active' => 'Active', 'renew' => 'Renew', 'endo' => 'Endo', 'terminated' => 'Terminated', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'emp_uname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'emp_pass')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'job_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
