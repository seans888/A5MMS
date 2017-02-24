<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "job".
 *
 * @property integer $job_id
 * @property string $job_name
 * @property integer $client_id
 *
 * @property Employee $employee
 * @property Client $job
 */
class Job extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'job';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['job_name', 'client_id'], 'required'],
            [['client_id'], 'integer'],
            [['job_name'], 'string', 'max' => 200]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'job_id' => 'Job ID',
            'job_name' => 'Job Name',
            'client_id' => 'Client ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEmployee()
    {
        return $this->hasOne(Employee::className(), ['emp_id' => 'job_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getJob()
    {
        return $this->hasOne(Client::className(), ['client_id' => 'job_id']);
    }
}
