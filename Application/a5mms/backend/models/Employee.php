<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "employee".
 *
 * @property integer $emp_id
 * @property string $emp_lname
 * @property string $emp_fname
 * @property string $emp_mi
 * @property string $emp_nickname
 * @property string $emp_address
 * @property string $emp_provadd
 * @property string $emp_bdate
 * @property string $emp_bplace
 * @property integer $emp_contact
 * @property string $emp_email
 * @property string $emp_civilstatus
 * @property string $emp_img
 * @property string $emp_pice_name
 * @property string $emp_pice_relationship
 * @property string $emp_pice_address
 * @property integer $emp_pice_contact
 * @property string $emp_sss_no
 * @property string $emp_tin_no
 * @property string $emp_pagibig_no
 * @property string $emp_philhealth_no
 * @property string $emp_datehired
 * @property string $emp_status
 * @property string $emp_uname
 * @property string $emp_pass
 * @property integer $job_id
 *
 * @property Job $emp
 */
class Employee extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'employee';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['emp_lname', 'emp_fname', 'emp_mi', 'emp_nickname', 'emp_address', 'emp_provadd', 'emp_bdate', 'emp_bplace', 'emp_contact', 'emp_email', 'emp_civilstatus', 'emp_img', 'emp_pice_name', 'emp_pice_relationship', 'emp_pice_address', 'emp_pice_contact', 'emp_sss_no', 'emp_tin_no', 'emp_pagibig_no', 'emp_philhealth_no', 'emp_datehired', 'emp_status', 'emp_uname', 'emp_pass', 'job_id'], 'required'],
            [['emp_bdate', 'emp_datehired'], 'safe'],
            [['emp_contact', 'emp_pice_contact', 'job_id'], 'integer'],
            [['emp_civilstatus', 'emp_status'], 'string'],
            [['emp_lname', 'emp_fname', 'emp_email', 'emp_pice_relationship'], 'string', 'max' => 100],
            [['emp_mi', 'emp_uname'], 'string', 'max' => 10],
            [['emp_nickname'], 'string', 'max' => 50],
            [['emp_address', 'emp_provadd'], 'string', 'max' => 300],
            [['emp_bplace', 'emp_img', 'emp_pice_address'], 'string', 'max' => 250],
            [['emp_pice_name'], 'string', 'max' => 200],
            [['emp_sss_no', 'emp_tin_no', 'emp_pagibig_no', 'emp_philhealth_no'], 'string', 'max' => 150],
            [['emp_pass'], 'string', 'max' => 20]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'emp_id' => 'Emp ID',
            'emp_lname' => 'Emp Lname',
            'emp_fname' => 'Emp Fname',
            'emp_mi' => 'Emp Mi',
            'emp_nickname' => 'Emp Nickname',
            'emp_address' => 'Emp Address',
            'emp_provadd' => 'Emp Provadd',
            'emp_bdate' => 'Emp Bdate',
            'emp_bplace' => 'Emp Bplace',
            'emp_contact' => 'Emp Contact',
            'emp_email' => 'Emp Email',
            'emp_civilstatus' => 'Emp Civilstatus',
            'emp_img' => 'Emp Img',
            'emp_pice_name' => 'Emp Pice Name',
            'emp_pice_relationship' => 'Emp Pice Relationship',
            'emp_pice_address' => 'Emp Pice Address',
            'emp_pice_contact' => 'Emp Pice Contact',
            'emp_sss_no' => 'Emp Sss No',
            'emp_tin_no' => 'Emp Tin No',
            'emp_pagibig_no' => 'Emp Pagibig No',
            'emp_philhealth_no' => 'Emp Philhealth No',
            'emp_datehired' => 'Emp Datehired',
            'emp_status' => 'Emp Status',
            'emp_uname' => 'Emp Uname',
            'emp_pass' => 'Emp Pass',
            'job_id' => 'Job ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEmp()
    {
        return $this->hasOne(Job::className(), ['job_id' => 'emp_id']);
    }
}
