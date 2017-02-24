<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Admin';
?>
<style>

    #adminTitle{
        font-family: 'book antiqua';
        font-size: 45px;
        text-align: center;
        margin-top:50px;        
    }

    .container img{
        width: 120px;
        height: 120px;
        margin-top: -60px;
        margin-bottom:-20px;
        background-color: #fff;
    }

     #form{
        background-color: #4183D7; 
        margin-top:10px;
        border-radius: 10px;
     }

     #login-button{
        padding:15px 20px;
        color: #fff;
        border-radius: 4px;
        border: none;
        border-right: 5px solid #27AE60;
        border-bottom: 5px solid #27AE60;
        background-color: #2ECC71;
     }

     #forpass{
        color: #fff;
     }
</style>

<div class="site-login>

    <div class="col-lg-4 col-lg-offset-4 col-xs-12 id="adminTitle">
        <p>ADMIN LOGIN</p><br/>
        
    </div>

        <div class="col-lg-4 col-lg-offset-4 col-xs-12" id="form">
            <img src="img/adminicon.png" class="img-circle"></img>
                <div class="form-group" style="margin-top:50px;">
                    <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>


                    <?= $form->field($model, 'username',['options' =>['class'=>'form-group field-loginform-username has-feedback required'],
                        'template' => '{input}<span class="glyphicon glyphicon-user form-control-feedback"></span> {error} {hint}']) 
                        -> textInput(['placeholder'=>'Username']) ?>

                    <?= $form->field($model, 'password',['options' =>  ['class'=>'form-group field-loginform-username has-feedback required'],
                        'template' => '{input}<span class="glyphicon glyphicon-lock form-control-feedback"></span> {error} {hint}']) 
                        -> passwordInput(['placeholder'=>'Password']) ?>
                </div>
                    
                    <div class="col-lg-3 col-lg-offset-4 col-sm-5 col-sm-offset-5 col-xs-3 col-xs-offset-3">   
                        <?= Html::submitButton('Log In', ['class' => 'btn btn-primary', 'id' => 'login-button']) ?>
                    </div>

                    <div class="col-lg-6 col-lg-offset-3 col-xs-12" style="text-align:center;">
                        <a href=# id="forpass">Forgot Password ?</a>
                    </div>

                    <?php ActiveForm::end(); ?> 
        </div>
</div>
