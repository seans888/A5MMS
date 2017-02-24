<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Announcement */

$this->title = 'Update Announcement: ' . ' ' . $model->announ_id;
$this->params['breadcrumbs'][] = ['label' => 'Announcements', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->announ_id, 'url' => ['view', 'id' => $model->announ_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="announcement-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
