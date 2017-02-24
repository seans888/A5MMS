<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Employee */

$this->title = $model->emp_id;
$this->params['breadcrumbs'][] = ['label' => 'Employees', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="employee-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->emp_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->emp_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'emp_id',
            'emp_lname',
            'emp_fname',
            'emp_mi',
            'emp_nickname',
            'emp_address',
            'emp_provadd',
            'emp_bdate',
            'emp_bplace',
            'emp_contact',
            'emp_email:email',
            'emp_civilstatus',
            'emp_img',
            'emp_pice_name',
            'emp_pice_relationship',
            'emp_pice_address',
            'emp_pice_contact',
            'emp_sss_no',
            'emp_tin_no',
            'emp_pagibig_no',
            'emp_philhealth_no',
            'emp_datehired',
            'emp_status',
            'emp_uname',
            'emp_pass',
            'job_id',
        ],
    ]) ?>

</div>
