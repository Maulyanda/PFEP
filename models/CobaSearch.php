<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Coba;

/**
 * CobaSearch represents the model behind the search form about `app\models\Coba`.
 */
class CobaSearch extends Coba
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['no', 'part_used', 'supplier_code'], 'integer'],
            [['car', 'code_ML_113', 'code_ML_210', 'part_status1', 'EWO', 'part_status2', 'part_name', 'cn_113', 'cn_210', 'usage', 'storage', 'dloc', 'les', 'check', 'sps_dloc', 'uloc', 'cal_min', 'cal_max', 'act_min', 'act_max', 'stack', 'direction', 'row', 'shop', 'pull_type', 'section', 'model', 'part_type', 'source', 'supplier_name', 'supplier_type', 'supplier_name_consignee', 'over_pkg_code', 'over_snp', 'over_l', 'over_w', 'over_h', 'ware_pkg_code', 'ware_snp', 'ware_l', 'ware_w', 'ware_h', 'on_pkg_code', 'on_snp', 'on_l', 'on_w', 'on_h', 'date', 'created_by', 'updated_by'], 'safe'],
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
        $query = Coba::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'no' => $this->no,
            'part_used' => $this->part_used,
            'supplier_code' => $this->supplier_code,
            'date' => $this->date,
        ]);

        $query->andFilterWhere(['like', 'car', $this->car])
            ->andFilterWhere(['like', 'code_ML_113', $this->code_ML_113])
            ->andFilterWhere(['like', 'code_ML_210', $this->code_ML_210])
            ->andFilterWhere(['like', 'part_status1', $this->part_status1])
            ->andFilterWhere(['like', 'EWO', $this->EWO])
            ->andFilterWhere(['like', 'part_status2', $this->part_status2])
            ->andFilterWhere(['like', 'part_name', $this->part_name])
            ->andFilterWhere(['like', 'cn_113', $this->cn_113])
            ->andFilterWhere(['like', 'cn_210', $this->cn_210])
            ->andFilterWhere(['like', 'usage', $this->usage])
            ->andFilterWhere(['like', 'storage', $this->storage])
            ->andFilterWhere(['like', 'dloc', $this->dloc])
            ->andFilterWhere(['like', 'les', $this->les])
            ->andFilterWhere(['like', 'check', $this->check])
            ->andFilterWhere(['like', 'sps_dloc', $this->sps_dloc])
            ->andFilterWhere(['like', 'uloc', $this->uloc])
            ->andFilterWhere(['like', 'cal_min', $this->cal_min])
            ->andFilterWhere(['like', 'cal_max', $this->cal_max])
            ->andFilterWhere(['like', 'act_min', $this->act_min])
            ->andFilterWhere(['like', 'act_max', $this->act_max])
            ->andFilterWhere(['like', 'stack', $this->stack])
            ->andFilterWhere(['like', 'direction', $this->direction])
            ->andFilterWhere(['like', 'row', $this->row])
            ->andFilterWhere(['like', 'shop', $this->shop])
            ->andFilterWhere(['like', 'pull_type', $this->pull_type])
            ->andFilterWhere(['like', 'section', $this->section])
            ->andFilterWhere(['like', 'model', $this->model])
            ->andFilterWhere(['like', 'part_type', $this->part_type])
            ->andFilterWhere(['like', 'source', $this->source])
            ->andFilterWhere(['like', 'supplier_name', $this->supplier_name])
            ->andFilterWhere(['like', 'supplier_type', $this->supplier_type])
            ->andFilterWhere(['like', 'supplier_name_consignee', $this->supplier_name_consignee])
            ->andFilterWhere(['like', 'over_pkg_code', $this->over_pkg_code])
            ->andFilterWhere(['like', 'over_snp', $this->over_snp])
            ->andFilterWhere(['like', 'over_l', $this->over_l])
            ->andFilterWhere(['like', 'over_w', $this->over_w])
            ->andFilterWhere(['like', 'over_h', $this->over_h])
            ->andFilterWhere(['like', 'ware_pkg_code', $this->ware_pkg_code])
            ->andFilterWhere(['like', 'ware_snp', $this->ware_snp])
            ->andFilterWhere(['like', 'ware_l', $this->ware_l])
            ->andFilterWhere(['like', 'ware_w', $this->ware_w])
            ->andFilterWhere(['like', 'ware_h', $this->ware_h])
            ->andFilterWhere(['like', 'on_pkg_code', $this->on_pkg_code])
            ->andFilterWhere(['like', 'on_snp', $this->on_snp])
            ->andFilterWhere(['like', 'on_l', $this->on_l])
            ->andFilterWhere(['like', 'on_w', $this->on_w])
            ->andFilterWhere(['like', 'on_h', $this->on_h])
            ->andFilterWhere(['like', 'created_by', $this->created_by])
            ->andFilterWhere(['like', 'updated_by', $this->updated_by]);

        return $dataProvider;
    }
}
