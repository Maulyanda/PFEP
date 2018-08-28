<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "master_data".
 *
 * @property integer $no
 * @property string $car
 * @property string $code_ML_113
 * @property string $code_ML_210
 * @property string $part_used
 * @property string $part_status1
 * @property string $EWO
 * @property string $part_status2
 * @property string $part_name
 * @property string $cn_113
 * @property string $cn_210
 * @property string $usage
 * @property string $storage
 * @property string $dloc
 * @property string $les
 * @property string $check
 * @property string $sps_dloc
 * @property string $uloc
 * @property string $cal_min
 * @property string $cal_max
 * @property string $act_min
 * @property string $act_max
 * @property string $stack
 * @property string $direction
 * @property string $row
 * @property string $shop
 * @property string $pull_type
 * @property string $section
 * @property string $model
 * @property string $part_type
 * @property string $source
 * @property string $supplier_code
 * @property string $supplier_name
 * @property string $supplier_type
 * @property string $supplier_name_consignee
 * @property string $over_pkg_code
 * @property string $over_snp
 * @property string $over_l
 * @property string $over_w
 * @property string $over_h
 * @property string $ware_pkg_code
 * @property string $ware_snp
 * @property string $ware_l
 * @property string $ware_w
 * @property string $ware_h
 * @property string $on_pkg_code
 * @property string $on_snp
 * @property string $on_l
 * @property string $on_w
 * @property string $on_h
 * @property string $date
 * @property string $created_by
 * @property string $updated by
 */
class Data extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'master_data';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['car', 'code_ML_113', 'code_ML_210', 'part_used', 'part_status1', 'EWO', 'part_status2', 'part_name', 'cn_113', 'cn_210', 'usage', 'storage', 'dloc', 'les', 'check', 'sps_dloc', 'uloc', 'cal_min', 'cal_max', 'act_min', 'act_max', 'stack', 'direction', 'row', 'shop', 'pull_type', 'section', 'model', 'part_type', 'source', 'supplier_code', 'supplier_name', 'supplier_type', 'supplier_name_consignee', 'over_pkg_code', 'over_snp', 'over_l', 'over_w', 'over_h', 'ware_pkg_code', 'ware_snp', 'ware_l', 'ware_w', 'ware_h', 'on_pkg_code', 'on_snp', 'on_l', 'on_w', 'on_h'], 'required'],
            [['part_used', 'supplier_code'], 'integer'],
            [['date'], 'safe'],
            [['car', 'code_ML_113', 'code_ML_210', 'part_status1', 'EWO', 'part_status2', 'cn_113', 'cn_210', 'usage', 'dloc', 'uloc', 'cal_min', 'cal_max', 'act_min', 'act_max', 'direction', 'row', 'shop', 'pull_type', 'section', 'model', 'part_type', 'source', 'supplier_type', 'over_pkg_code', 'over_snp', 'over_l', 'over_w', 'over_h', 'ware_pkg_code', 'ware_snp', 'ware_l', 'ware_w', 'ware_h', 'on_pkg_code', 'on_snp', 'on_l', 'on_w', 'on_h'], 'string', 'max' => 45],
            [['part_name', 'storage', 'supplier_name', 'supplier_name_consignee'], 'string', 'max' => 100],
            [['les', 'check'], 'string', 'max' => 70],
            [['sps_dloc', 'stack'], 'string', 'max' => 20],
            [['created_by', 'updated_by'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'no' => 'No',
            'car' => 'Car',
            'code_ML_113' => 'Code  Ml 113',
            'code_ML_210' => 'Code  Ml 210',
            'part_used' => 'Part Used',
            'part_status1' => 'Part Status1',
            'EWO' => 'Ewo',
            'part_status2' => 'Part Status2',
            'part_name' => 'Part Name',
            'cn_113' => 'Cn 113',
            'cn_210' => 'Cn 210',
            'usage' => 'Usage',
            'storage' => 'Storage',
            'dloc' => 'Dloc',
            'les' => 'Les',
            'check' => 'Check',
            'sps_dloc' => 'Sps Dloc',
            'uloc' => 'Uloc',
            'cal_min' => 'Cal Min',
            'cal_max' => 'Cal Max',
            'act_min' => 'Act Min',
            'act_max' => 'Act Max',
            'stack' => 'Stack',
            'direction' => 'Direction',
            'row' => 'Row',
            'shop' => 'Shop',
            'pull_type' => 'Pull Type',
            'section' => 'Section',
            'model' => 'Model',
            'part_type' => 'Part Type',
            'source' => 'Source',
            'supplier_code' => 'Supplier Code',
            'supplier_name' => 'Supplier Name',
            'supplier_type' => 'Supplier Type',
            'supplier_name_consignee' => 'Supplier Name Consignee',
            'over_pkg_code' => 'Over Pkg Code',
            'over_snp' => 'Over Snp',
            'over_l' => 'Over L',
            'over_w' => 'Over W',
            'over_h' => 'Over H',
            'ware_pkg_code' => 'Ware Pkg Code',
            'ware_snp' => 'Ware Snp',
            'ware_l' => 'Ware L',
            'ware_w' => 'Ware W',
            'ware_h' => 'Ware H',
            'on_pkg_code' => 'On Pkg Code',
            'on_snp' => 'On Snp',
            'on_l' => 'On L',
            'on_w' => 'On W',
            'on_h' => 'On H',
            'date' => 'Date',
            'created_by' => 'Created By',
            'updated_by' => 'Updated By',
        ];
    }
}
