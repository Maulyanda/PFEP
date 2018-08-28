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
 * @property string $updated_by
 */
class MasterData extends \yii\db\ActiveRecord
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
            [['car', 'part_used', 'part_name'], 'required'],
            [['part_used', 'supplier_code'], 'integer'],
            [['date'], 'safe'],
            [['car', 'code_ML_113', 'code_ML_210', 'part_status1', 'EWO', 'part_status2', 'cn_113', 'cn_210', 'usage', 'dloc', 'uloc', 'cal_min', 'cal_max', 'act_min', 'act_max', 'direction', 'row', 'shop', 'pull_type', 'section', 'model', 'part_type', 'source', 'supplier_type', 'over_pkg_code', 'over_snp', 'over_l', 'over_w', 'over_h', 'ware_pkg_code', 'ware_snp', 'ware_l', 'ware_w', 'ware_h', 'on_pkg_code', 'on_snp', 'on_l', 'on_w', 'on_h'], 'string', 'max' => 45],
            [['part_name', 'storage','supplier_name', 'supplier_name_consignee'], 'string', 'max' => 100],
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
            'part_status1' => 'Part Status',
            'EWO' => 'Ewo',
            'part_status2' => 'Part Status',
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
            'over_pkg_code' => 'OVERSEAS PKG Code',
            'over_snp' => 'OVERSEAS PKG SNP',
            'over_l' => 'OVERSEAS PKG L',
            'over_w' => 'OVERSEAS PKG W',
            'over_h' => 'OVERSEAS PKG H',
            'ware_pkg_code' => 'WAREHOUSE PKG Code',
            'ware_snp' => 'WAREHOUSE PKG SNP',
            'ware_l' => 'WAREHOUSE PKG L',
            'ware_w' => 'WAREHOUSE PKG W',
            'ware_h' => 'WAREHOUSE PKG H',
            'on_pkg_code' => 'ONLINE PKG Code',
            'on_snp' => 'ONLINE PKG Snp',
            'on_l' => 'ONLINE PKG L',
            'on_w' => 'ONLINE PKG W',
            'on_h' => 'ONLINE PKG H',
            'date' => 'Date',
            'created_by' => 'Created By',
            'updated_by' => 'Updated By',
        ];
    }
}
