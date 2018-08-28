<?php

namespace app\controllers;

use Yii;
use app\models\Data;
use app\models\DataSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * DataController implements the CRUD actions for Data model.
 */
class DataController extends Controller
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Lists all Data models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new DataSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Data model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    public function actionView2($id)
    {
        return $this->render('view2', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Data model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Data();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->no]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Data model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->no]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Data model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Data model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Data the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Data::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
    public function actionExport(){
      $model = Data::find()->All();
      $filename = 'Data-'.Date('YmdGis').'-MasterData.xls';

    header("Content-type: application/vnd-ms-excel");
    header("Content-Disposition: attachment; filename=".$filename);
      echo '<table border="1" width="100%">

    <thead>
    <tr>
        <th>No</th>
        <th>Car</th>
        <th>Code ML 113</th>
        <th>Code ML 210</th>
        <th>Part Used</th>
        <th>Part Status</th>
        <th>EWO</th>
        <th>Part Status</th>
        <th>Part Name</th>
        <th>Cn 113</th>
        <th>Cn 210</th>
        <th>Usage</th>
        <th>Storage</th>
        <th>Dloc</th>
        <th>Les</th>
        <th>Check</th>
        <th>Sps Dloc</th>
        <th>Uloc</th>
        <th>Cal Min</th>
        <th>Cal Max</th>
        <th>Act Min</th>
        <th>Act Max</th>
        <th>Stack</th>
        <th>Direction</th>
        <th>Row</th>
        <th>Shop</th>
        <th>Pull Type</th>
        <th>Section</th>
        <th>Model</th>
        <th>Part Type</th>
        <th>Source</th>
        <th>Supplier Code</th>
        <th>Supplier Name</th>
        <th>Supplier Type</th>
        <th>Supplier Name Consignee</th>
        <th>OVERSEAS Pkg Code</th>
        <th>OVERSEAS Snp</th>
        <th>OVERSEAS L</th>
        <th>OVERSEAS W</th>
        <th>OVERSEAS H</th>
        <th>WAREHOUSE Pkg Code</th>
        <th>WAREHOUSE Snp</th>
        <th>WAREHOUSE L</th>
        <th>WAREHOUSE W</th>
        <th>WAREHOUSE H</th>
        <th>ONLINE Pkg Code</th>
        <th>ONLINE Snp</th>
        <th>ONLINE L</th>
        <th>ONLINE W</th>
        <th>ONLINE H</th>
        <th>Date</th>
        <th>Created By</th>
        <th>Updated By</th>

    </tr>
    </thead>';
        foreach($model as $data){
            echo '
                <tr>
                    <td>'.$data['no'].'</td>
                    <td>'.$data['car'].'</td>
                    <td>'.$data['code_ML_113'].'</td>
                    <td>'.$data['code_ML_210'].'</td>
                    <td>'.$data['part_used'].'</td>
                    <td>'.$data['part_status1'].'</td>
                    <td>'.$data['EWO'].'</td>
                    <td>'.$data['part_status2'].'</td>
                    <td>'.$data['part_name'].'</td>
                    <td>'.$data['cn_113'].'</td>
                    <td>'.$data['cn_210'].'</td>
                    <td>'.$data['usage'].'</td>
                    <td>'.$data['storage'].'</td>
                    <td>'.$data['dloc'].'</td>
                    <td>'.$data['les'].'</td>
                    <td>'.$data['check'].'</td>
                    <td>'.$data['sps_dloc'].'</td>
                    <td>'.$data['uloc'].'</td>
                    <td>'.$data['cal_min'].'</td>
                    <td>'.$data['cal_max'].'</td>
                    <td>'.$data['act_min'].'</td>
                    <td>'.$data['act_max'].'</td>
                    <td>'.$data['stack'].'</td>
                    <td>'.$data['direction'].'</td>
                    <td>'.$data['row'].'</td>
                    <td>'.$data['shop'].'</td>
                    <td>'.$data['pull_type'].'</td>
                    <td>'.$data['section'].'</td>
                    <td>'.$data['model'].'</td>
                    <td>'.$data['part_type'].'</td>
                    <td>'.$data['source'].'</td>
                    <td>'.$data['supplier_code'].'</td>
                    <td>'.$data['supplier_name'].'</td>
                    <td>'.$data['supplier_type'].'</td>
                    <td>'.$data['supplier_name_consignee'].'</td>
                    <td>'.$data['over_pkg_code'].'</td>
                    <td>'.$data['over_snp'].'</td>
                    <td>'.$data['over_l'].'</td>
                    <td>'.$data['over_w'].'</td>
                    <td>'.$data['over_h'].'</td>
                    <td>'.$data['ware_pkg_code'].'</td>
                    <td>'.$data['ware_snp'].'</td>
                    <td>'.$data['ware_l'].'</td>
                    <td>'.$data['ware_w'].'</td>
                    <td>'.$data['ware_h'].'</td>
                    <td>'.$data['on_pkg_code'].'</td>
                    <td>'.$data['on_snp'].'</td>
                    <td>'.$data['on_l'].'</td>
                    <td>'.$data['on_w'].'</td>
                    <td>'.$data['on_h'].'</td>
                    <td>'.$data['date'].'</td>
                    <td>'.$data['created_by'].'</td>
                    <td>'.$data['updated_by'].'</td>

                </tr>
            ';
        }
    echo '</table>';

}
}
