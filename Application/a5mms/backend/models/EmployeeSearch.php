<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Employee;

/**
 * EmployeeSearch represents the model behind the search form about `backend\models\Employee`.
 */
class EmployeeSearch extends Employee
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['emp_id', 'emp_contact', 'emp_pice_contact', 'job_id'], 'integer'],
            [['emp_lname', 'emp_fname', 'emp_mi', 'emp_nickname', 'emp_address', 'emp_provadd', 'emp_bdate', 'emp_bplace', 'emp_email', 'emp_civilstatus', 'emp_img', 'emp_pice_name', 'emp_pice_relationship', 'emp_pice_address', 'emp_sss_no', 'emp_tin_no', 'emp_pagibig_no', 'emp_philhealth_no', 'emp_datehired', 'emp_status', 'emp_uname', 'emp_pass'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Employee::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'emp_id' => $this->emp_id,
            'emp_bdate' => $this->emp_bdate,
            'emp_contact' => $this->emp_contact,
            'emp_pice_contact' => $this->emp_pice_contact,
            'emp_datehired' => $this->emp_datehired,
            'job_id' => $this->job_id,
        ]);

        $query->andFilterWhere(['like', 'emp_lname', $this->emp_lname])
            ->andFilterWhere(['like', 'emp_fname', $this->emp_fname])
            ->andFilterWhere(['like', 'emp_mi', $this->emp_mi])
            ->andFilterWhere(['like', 'emp_nickname', $this->emp_nickname])
            ->andFilterWhere(['like', 'emp_address', $this->emp_address])
            ->andFilterWhere(['like', 'emp_provadd', $this->emp_provadd])
            ->andFilterWhere(['like', 'emp_bplace', $this->emp_bplace])
            ->andFilterWhere(['like', 'emp_email', $this->emp_email])
            ->andFilterWhere(['like', 'emp_civilstatus', $this->emp_civilstatus])
            ->andFilterWhere(['like', 'emp_img', $this->emp_img])
            ->andFilterWhere(['like', 'emp_pice_name', $this->emp_pice_name])
            ->andFilterWhere(['like', 'emp_pice_relationship', $this->emp_pice_relationship])
            ->andFilterWhere(['like', 'emp_pice_address', $this->emp_pice_address])
            ->andFilterWhere(['like', 'emp_sss_no', $this->emp_sss_no])
            ->andFilterWhere(['like', 'emp_tin_no', $this->emp_tin_no])
            ->andFilterWhere(['like', 'emp_pagibig_no', $this->emp_pagibig_no])
            ->andFilterWhere(['like', 'emp_philhealth_no', $this->emp_philhealth_no])
            ->andFilterWhere(['like', 'emp_status', $this->emp_status])
            ->andFilterWhere(['like', 'emp_uname', $this->emp_uname])
            ->andFilterWhere(['like', 'emp_pass', $this->emp_pass]);

        return $dataProvider;
    }
}
