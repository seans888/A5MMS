<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\EmployeeSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="employee-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'emp_id') ?>

    <?= $form->field($model, 'emp_lname') ?>

    <?= $form->field($model, 'emp_fname') ?>

    <?= $form->field($model, 'emp_mi') ?>

    <?= $form->field($model, 'emp_nickname') ?>

    <?php // echo $form->field($model, 'emp_address') ?>

    <?php // echo $form->field($model, 'emp_provadd') ?>

    <?php // echo $form->field($model, 'emp_bdate') ?>

    <?php // echo $form->field($model, 'emp_bplace') ?>

    <?php // echo $form->field($model, 'emp_contact') ?>

    <?php // echo $form->field($model, 'emp_email') ?>

    <?php // echo $form->field($model, 'emp_civilstatus') ?>

    <?php // echo $form->field($model, 'emp_img') ?>

    <?php // echo $form->field($model, 'emp_pice_name') ?>

    <?php // echo $form->field($model, 'emp_pice_relationship') ?>

    <?php // echo $form->field($model, 'emp_pice_address') ?>

    <?php // echo $form->field($model, 'emp_pice_contact') ?>

    <?php // echo $form->field($model, 'emp_sss_no') ?>

    <?php // echo $form->field($model, 'emp_tin_no') ?>

    <?php // echo $form->field($model, 'emp_pagibig_no') ?>

    <?php // echo $form->field($model, 'emp_philhealth_no') ?>

    <?php // echo $form->field($model, 'emp_datehired') ?>

    <?php // echo $form->field($model, 'emp_status') ?>

    <?php // echo $form->field($model, 'emp_uname') ?>

    <?php // echo $form->field($model, 'emp_pass') ?>

    <?php // echo $form->field($model, 'job_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
