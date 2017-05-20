<?php

class InventorymasterController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

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
				'actions'=>array('create','update'),
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
	// print_r($_SESSION);
	// echo "<pre>";exit;
	// echo $_SESSION['_siteadmin__id'];
	// echo $_SESSION['_siteadmin__name'];exit;
		// Yii::app()->session['var'] = 'value';
		// echo Yii::app()->session['var']; // Prints "value"
		// exit;
		$model=new InventoryMaster;
		$date=time();
		$dateTimeValue = date('Y-m-d h:i:s');
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);
		// print_r($_POST);
		// echo "<pre>";exit;

		if(isset($_POST['InventoryMaster']))
		{
			$user_id=$_SESSION['_siteadmin__id'];
			$user_name=$_SESSION['_siteadmin__name'];
			$model->attributes=$_POST['InventoryMaster'];
			// $model->DATE_CREATED= $date;
			$model->DATE_CREATED= $dateTimeValue;
			//print_r($model->DATE_CREATED);exit;
			$model->USER_ID= $user_id;
			$model->USER_NAME= $user_name;
			// print date("D, F jS",$date) . "<br>";exit;
			// print_r($_POST);
			// echo "<pre>";exit;
			if($model->save())
			{
				Yii::app()->user->setFlash('success',"<b>Inventory Added Successfully</b>");
				// $this->redirect(array('view','id'=>$model->ID));
				$this->redirect(array('admin'));
			}
		}

		$this->render('create',array(
			'model'=>$model,
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
		$date=time();
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['InventoryMaster']))
		{
			$model->attributes=$_POST['InventoryMaster'];
			$model->DATE_MODIFIED= $date;
			if($model->save())
			{
				Yii::app()->user->setFlash('success',"<b>Inventory Updated Successfully</b>");
				// $this->redirect(array('view','id'=>$model->ID));
				$this->redirect(array('admin'));
			}
		}

		$this->render('update',array(
			'model'=>$model,
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
		$dataProvider=new CActiveDataProvider('InventoryMaster');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new InventoryMaster('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['InventoryMaster']))
			$model->attributes=$_GET['InventoryMaster'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer the ID of the model to be loaded
	 */
	public function loadModel($id)
	{
		$model=InventoryMaster::model()->findByPk($id);
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
		if(isset($_POST['ajax']) && $_POST['ajax']==='inventory-master-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
