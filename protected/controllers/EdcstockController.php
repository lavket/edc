<?php

class EdcstockController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/main';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update','admin'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new EdcStock;
		
		$supplier = Yii::app()->db->createCommand()
			->select('VENDOR_ID,VENDOR_NAME')
			->from('vendor')
			->queryAll();

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['EdcStock']))
		{
			$model->attributes=$_POST['EdcStock'];
			$model->date_created =date("Y-m-d H:i:s");
			$model->date_modified =date("Y-m-d H:i:s");
			if($model->save())
			{
				Yii::app()->user->setFlash('success',"<h1>Edc Rolls Stock Added <strong>Successfully</strong></h1>");
				$this->redirect(array('admin'));
				//$this->redirect(array('view','id'=>$model->ID));
			}
		}

		$this->render('create',array(
			'model'=>$model,
			'supplier'=>$supplier,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);
		
		$supplier = Yii::app()->db->createCommand()
			->select('VENDOR_ID,VENDOR_NAME')
			->from('vendor')
			->queryAll();

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['EdcStock']))
		{
			$model->attributes=$_POST['EdcStock'];
			$model->date_created =date("Y-m-d H:i:s");
			$model->date_modified =date("Y-m-d H:i:s");
			
			if($model->save())
			{
				Yii::app()->user->setFlash('success',"<h1>Edc Rolls Stock Updated <strong>Successfully</strong></h1>");
				$this->redirect(array('admin'));
				//$this->redirect(array('view','id'=>$model->ID));
			}
		}

		$this->render('update',array(
			'model'=>$model,
			'supplier'=>$supplier,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('EdcStock');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new EdcStock('search');
		$model->unsetAttributes();  // clear any default values
		
		$supplier = Yii::app()->db->createCommand()
			->select('VENDOR_ID,VENDOR_NAME')
			->from('vendor')
			->queryAll();
		
		$tot = Yii::app()->db->createCommand()
					->select('sum(stock_qty) as mySum')
					->from('edc_stock')
					->queryRow();
					
		$totalstock = $tot['mySum'];
		//echo $tot['mySum'];exit;
		
		$Issue_Tot = Yii::app()->db->createCommand()
					->select('sum(issue_qty) as mySum')
					->from('edc_issue')
					->queryRow();
					
		$issuedstock = $Issue_Tot['mySum'];
		
		if(isset($_GET['EdcStock']))
			$model->attributes=$_GET['EdcStock'];

		$this->render('admin',array(
			'model'=>$model,
			'totalstock'=>$totalstock,
			'issuedstock'=>$issuedstock,
			'supplier'=>$supplier,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer the ID of the model to be loaded
	 */
	public function loadModel($id)
	{
		$model=EdcStock::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param CModel the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='edc-stock-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
