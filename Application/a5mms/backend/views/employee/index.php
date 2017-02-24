<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\EmployeeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Employees';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="employee-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Employee', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'emp_id',
            'emp_lname',
            'emp_fname',
            'emp_mi',
            'emp_nickname',
            // 'emp_address',
            // 'emp_provadd',
            // 'emp_bdate',
            // 'emp_bplace',
            // 'emp_contact',
            // 'emp_email:email',
            // 'emp_civilstatus',
            // 'emp_img',
            // 'emp_pice_name',
            // 'emp_pice_relationship',
            // 'emp_pice_address',
            // 'emp_pice_contact',
            // 'emp_sss_no',
            // 'emp_tin_no',
            // 'emp_pagibig_no',
            // 'emp_philhealth_no',
            // 'emp_datehired',
            // 'emp_status',
            // 'emp_uname',
            // 'emp_pass',
            // 'job_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
