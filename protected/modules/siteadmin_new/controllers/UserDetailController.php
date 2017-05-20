<?php

class UserDetailController extends Controller
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
				'actions'=>array('admin','delete','adminuser','marketinguser','accountuser'),
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
		$model=new UserDetail;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);
		
		$departments =  Yii::app()->db->createCommand()
							->select('*')
							->from('department')
							->queryAll();

		if(isset($_POST['UserDetail']))
		{
			$model->attributes		=	$_POST['UserDetail'];
			
			
			// $model->password		=	hash('sha256',$model->password);
			
			$model->rand			=	rand();
			$model->date_added		=	date("Y-m-d H:i:s");
			$model->date_modified	=	date("Y-m-d H:i:s");
			
			if($model->save())
			{
			
			$highest_id = $model->primaryKey;
			
			$model1=$this->loadModel($highest_id);
			
			// echo "<pre>";
			// // print_r($model1);exit;
			// echo 
			
			$model1->password		=	hash('sha256',$model1->password);
			$model1->save(false);
			
			// echo $highest_id;exit;
			
				
				$this->redirect(array('view','id'=>$model->id));
			}
		}

		$this->render('create',array(
			'model'=>$model,
			'departments'=>$departments
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

		$departments =  Yii::app()->db->createCommand()
							->select('*')
							->from('department')
							->queryAll();

							
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['UserDetail']))
		{
			$model->attributes=$_POST['UserDetail'];
			
			$model->password		=	hash('sha256',$model->password);
			
			
			$model->rand			=	rand();
			$model->date_modified	=	date("Y-m-d H:i:s");
			
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('update',array(
			'model'=>$model,
			'departments'=>$departments
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
		$dataProvider=new CActiveDataProvider('UserDetail');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new UserDetail('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['UserDetail']))
			$model->attributes=$_GET['UserDetail'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}
	
	
	
	public function actionAdminuser()
	{
		$model=new UserDetail('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['UserDetail']))
			$model->attributes=$_GET['UserDetail'];

		$this->render('adminuser',array(
			'model'=>$model,
		));
	}

	
	public function actionAccountuser()
	{
		$model=new UserDetail('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['UserDetail']))
			$model->attributes=$_GET['UserDetail'];

		$this->render('accountuser',array(
			'model'=>$model,
		));
	}
	public function actionMarketinguser()
	{
		$model=new UserDetail('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['UserDetail']))
			$model->attributes=$_GET['UserDetail'];

		$this->render('marketinguser',array(
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
		$model=UserDetail::model()->findByPk($id);
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
		if(isset($_POST['ajax']) && $_POST['ajax']==='user-detail-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
