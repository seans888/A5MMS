<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "announcement".
 *
 * @property integer $announ_id
 * @property string $announ_desc
 */
class Announcement extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'announcement';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['announ_desc'], 'required'],
            [['announ_desc'], 'string', 'max' => 300]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'announ_id' => 'Announ ID',
            'announ_desc' => 'Announ Desc',
        ];
    }
}
