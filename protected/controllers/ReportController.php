<?php

class ReportController extends Controller
{
	
	function ReportController($id, $module = NULL) {
        parent::__construct($id, $module);
		
       if(Yii::app()->user->id == "")
		{
		
			$this->redirect(Yii::app()->homeUrl);
			
		}
        


        //$this->layout='main';
   }
		
	public function actionIndex()
	{
		$company_detail=Yii::app()->db->createCommand()
            ->select('*')
            ->from('company')
            ->queryAll();
			
		$vendor_detail=Yii::app()->db->createCommand()
            ->select('*')
            ->from('vendor')
            ->queryAll();
		
		$terminal_detail=Yii::app()->db->createCommand()
            ->select('*')
            ->from('terminal')
            ->queryAll();
		
		$terminal_status_detail=Yii::app()->db->createCommand()
            ->select('*')
            ->from('terminal_status')
            ->queryAll();
		
		$sim_detail=Yii::app()->db->createCommand()
            ->select('*')
            ->from('sim')
            ->queryAll();
		
		$department_detail = Yii::app()->db->createCommand()
			->select('DEPARTMENT_ID,DEPARTMENT_NAME')
			->from('department')
			->queryAll();
		
		
		$report_company_detail 			=	'';
		$report_vendor_detail 			=	'';
		$report_terminal_detail 		=	'';
		$report_sim_detail 				=	'';
		$report_terminal_status_detail 	=	'';
		$report_isamex_detail 			=	'';
		$report_department_detail 	 	=	'';
		$assigned 		 				=	'';
		$assigned 		 				=	array();
		$filename 		 				=	'';
		$dataProvider 					=	'';
		
		
		// $this->render('index');
		$this->render('index',array(
			'company_detail'=>$company_detail,
			'vendor_detail'=>$vendor_detail,
			'department_detail'=>$department_detail,
			'terminal_detail'=>$terminal_detail,
			'terminal_status_detail'=>$terminal_status_detail,
			'sim_detail'=>$sim_detail,
			'report_company_detail'=>$report_company_detail,
			'report_vendor_detail'=>$report_vendor_detail,
			'report_terminal_detail'=>$report_terminal_detail,
			'report_sim_detail'=>$report_sim_detail,
			'report_terminal_status_detail'=>$report_terminal_status_detail,
			'report_isamex_detail'=>$report_isamex_detail,
			'report_department_detail'=>$report_department_detail,
			'assigned'=>$assigned,
			'filename'=>$filename,
			'dataProvider'=>$dataProvider,
		));
			
	}
	
	public function actionReport_submit()
	{
		//print_r($_POST);exit;
		
		// if(isset($_POST['company_detail'] && $_POST['vendor_detail'] && $_POST['terminal_detail'] && 
		// $_POST['sim_detail'] && $_POST['terminal_status_detail']))!=''
		
		$company_detail=Yii::app()->db->createCommand()
            ->select('*')
            ->from('company')
            ->queryAll();
			
		$vendor_detail=Yii::app()->db->createCommand()
            ->select('*')
            ->from('vendor')
            ->queryAll();
		
		$terminal_detail=Yii::app()->db->createCommand()
            ->select('*')
            ->from('terminal')
            ->queryAll();
		
		$terminal_status_detail=Yii::app()->db->createCommand()
            ->select('*')
            ->from('terminal_status')
            ->queryAll();
		
		$sim_detail=Yii::app()->db->createCommand()
            ->select('*')
            ->from('sim')
            ->queryAll();
		
		$department_detail = Yii::app()->db->createCommand()
			->select('DEPARTMENT_ID,DEPARTMENT_NAME')
			->from('department')
			->queryAll();
		
		$report_company_detail 			=	'';
		$report_vendor_detail 			=	'';
		$report_terminal_detail 		=	'';
		$report_sim_detail 				=	'';
		$report_terminal_status_detail 	=	'';
		$report_isamex_detail		 	=	'';
		$report_department_detail		=	'';
		$assigned 		 				=	'';
		$assigned 		 				=	array();
		$filename						=	'';
		$dataProvider 					=	'';
		
		
		if(isset($_POST['company_detail']) && $_POST['company_detail']!='' 
			&& isset($_POST['vendor_detail']) && $_POST['vendor_detail']!='' 
			&& isset($_POST['terminal_detail']) && $_POST['terminal_detail']!='' 
			&& isset($_POST['sim_detail']) && $_POST['sim_detail']!='' 
			&& isset($_POST['terminal_status_detail']) && $_POST['terminal_status_detail']!=''
			&& isset($_POST['department_detail']) && $_POST['department_detail']!='')
		{
			//echo "hi";
			
					$report_company_detail 			=	$_POST['company_detail'];
					$report_vendor_detail 			=	$_POST['vendor_detail'];
					$report_terminal_detail 		=	$_POST['terminal_detail'];
					$report_sim_detail 				=	$_POST['sim_detail'];
					$report_terminal_status_detail 	=	$_POST['terminal_status_detail'];
					$report_isamex_detail		 	=	$_POST['amex_detail'];
					$report_department_detail		=	$_POST['department_detail'];
					
					
				if($report_company_detail == 'All')
					{
					
						$all_company_detail_id = Yii::app()->db->createCommand()
											->select('group_concat(company_id) as id')
											->from('company')
											->queryAll();
						
						// print_r($all_company_detail_id);exit;
						
							if(count($all_company_detail_id)>0 && isset($all_company_detail_id[0]['id']) && strlen($all_company_detail_id[0]['id'])>0)
							{
							
								$report_company_detail = $all_company_detail_id[0]['id'];
								
							}					
					
					}
				
				if($report_vendor_detail == 'All')
					{
					
						$all_vendor_detail_id=Yii::app()->db->createCommand()
										->select('group_concat(vendor_id) as id')
										->from('vendor')
										->queryAll();
						
						//print_r($all_vendor_detail_id);exit;
						
							if(count($all_vendor_detail_id)>0 && isset($all_vendor_detail_id[0]['id']) && strlen($all_vendor_detail_id[0]['id'])>0)
							{
							
								$report_vendor_detail = $all_vendor_detail_id[0]['id'];
								
							}					
					
					}
					
					if($report_department_detail == 'All')
					{
					
						$all_department_detail_id=Yii::app()->db->createCommand()
										->select('group_concat(DEPARTMENT_ID) as id')
										->from('department')
										->queryAll();
						
						//print_r($all_department_detail_id);exit;
						
							if(count($all_department_detail_id)>0 && isset($all_department_detail_id[0]['id']) && strlen($all_department_detail_id[0]['id'])>0)
							{
							
								$report_department_detail = $all_department_detail_id[0]['id'];
								
							}					
					
					}
			
			
				if($report_terminal_detail == 'All')
					{
					
						$all_terminal_detail_id=Yii::app()->db->createCommand()
										->select('group_concat(terminal_id) as id')
										->from('terminal')
										->queryAll();
						
						//print_r($all_terminal_detail_id);exit;
						
							if(count($all_terminal_detail_id)>0 && isset($all_terminal_detail_id[0]['id']) && strlen($all_terminal_detail_id[0]['id'])>0)
							{
							
								$report_terminal_detail = $all_terminal_detail_id[0]['id'];
								
							}					
					
					}
					
				if($report_sim_detail == 'All')
					{
					
						$all_sim_detail_id=Yii::app()->db->createCommand()
										->select('group_concat(sim_id) as id')
										->from('sim')
										->queryAll();
						
						//print_r($all_sim_detail_id);exit;
						
							if(count($all_sim_detail_id)>0 && isset($all_sim_detail_id[0]['id']) && strlen($all_sim_detail_id[0]['id'])>0)
							{
							
								$report_sim_detail = $all_sim_detail_id[0]['id'];
								
							}					
					
					}
					
				if($report_terminal_status_detail == 'All')
					{
					
						$all_terminal_status_detail_id=Yii::app()->db->createCommand()
										->select('group_concat(status_id) as id')
										->from('terminal_status')
										->queryAll();
						
						//print_r($all_terminal_status_detail_id);exit;
						
							if(count($all_terminal_status_detail_id)>0 && isset($all_terminal_status_detail_id[0]['id']) && strlen($all_terminal_status_detail_id[0]['id'])>0)
							{
							
								$report_terminal_status_detail = $all_terminal_status_detail_id[0]['id'];
								
							}					
					
					}
					
				if($report_isamex_detail == 'All')
					{
					
						//$all_isamex_detail_id= array(0,1);
						$all_isamex_detail_id=Yii::app()->db->createCommand()
										->select('group_concat(isamex) as id')
										->from('edc_detail')
										->queryAll();
						
						//print_r($all_isamex_detail_id);exit;
						
							if(count($all_isamex_detail_id)>0 && isset($all_isamex_detail_id[0]['id']) && strlen($all_isamex_detail_id[0]['id'])>0)
							{
							
								$report_isamex_detail = $all_isamex_detail_id[0]['id'];
								
							}					
					
					}
					
					Yii::app()->session['company_detail']			=	$report_company_detail;
					Yii::app()->session['vendor_detail']			=   $report_vendor_detail;
					Yii::app()->session['terminal_detail']			=   $report_terminal_detail;
					Yii::app()->session['sim_detail']				=   $report_sim_detail;
					Yii::app()->session['terminal_status_detail']	=   $report_terminal_status_detail;
					Yii::app()->session['amex_detail']				=   $report_isamex_detail;
					Yii::app()->session['department_detail']		=   $report_department_detail;
					
					$where_condition ='';
					
					$where_condition .= "cd.company_id in ($report_company_detail) 
							and vd.vendor_id in ($report_vendor_detail) and dd.department_id in ($report_department_detail) 
							and td.terminal_id in ($report_terminal_detail) and sd.sim_id in ($report_sim_detail) 
							and tsd.status_id in ($report_terminal_status_detail)
							and ed.isamex in ($report_isamex_detail)";
					
					
					// $count=Yii::app()->db->createCommand("SELECT count(*)
							// FROM edc_detail
							// WHERE $where_condition")->queryScalar();
							
					$count=Yii::app()->db->createCommand("SELECT count(*) 
														FROM edc_detail ed
														JOIN vendor vd ON ed.vendor=vd.vendor_name
														JOIN company cd ON ed.company=cd.company_name
														JOIN department dd ON ed.department=dd.department_name
														JOIN terminal td ON ed.terminal_type=td.terminal_name
														JOIN sim sd ON ed.sim_card=sd.sim_name
														JOIN terminal_status tsd ON ed.status=tsd.status_name
														WHERE $where_condition")->queryScalar();
							
					$sql="SELECT *
						  FROM edc_detail ed
						  JOIN vendor vd ON ed.vendor=vd.vendor_name
						  JOIN company cd ON ed.company=cd.company_name
						  JOIN department dd ON ed.department=dd.department_name
						  JOIN terminal td ON ed.terminal_type=td.terminal_name
						  JOIN sim sd ON ed.sim_card=sd.sim_name
						  JOIN terminal_status tsd ON ed.status=tsd.status_name
						  WHERE $where_condition";
						$connection=Yii::app()->db;
						$command=$connection->createCommand($sql);
						//$rowCount=$command->execute(); // execute the non-query SQL
						$assigned = $command->queryAll(); // execute a query SQL*/
						
					$dataProvider=new CSqlDataProvider($sql, array(
						'keyField' => 'ID',
						'totalItemCount'=>$count,
					   
						'pagination'=>array(
							'pageSize'=>20,
						),
					));	
					
					Yii::app()->session['count']			=   $count;
					Yii::app()->session['sql']				=   $sql;
					
					/*EXCEL EXPORT CSV*/
					
					if(!is_dir("reports"))
						{
						 mkdir("reports", 0777);
						}
						
						$filename = time();
						Yii::app()->session['filename']			=   $filename;
						
						$ourFileName = Yii::app()->basePath . '/../reports/'.$filename.".csv";
						//chmod($ourFileName , 0777);
						$ourFileHandle = fopen($ourFileName, 'a');
						fwrite($ourFileHandle,'');
						fclose($ourFileHandle);
					
							$output='';
							$output .="\n";
							//$output .= "From Date,To Date,Company Name,Pass Name,Serial Code,Assigned Date";
							$output .= "ICICI TID NO, HDFC TID NO, MID NO, SERIAL NO,LOCATION,DEPARTMENT,AMEX NO, SIM CARD, TERMINAL TYPE,VENDOR, COMPANY, STATUS, REMARKS, IS AMEX";
							$output .= "\n";
							
							
							for($r=0;$r<count($assigned);$r++) {
							
							$output .= $assigned[$r]['TID_NO'].','.$assigned[$r]['HDFC_TID_NO'].','.$assigned[$r]['MID_NO'].','.$assigned[$r]['SERIAL_NO'].','.$assigned[$r]['LOCATION'].','.
										$assigned[$r]['DEPARTMENT'].','.$assigned[$r]['AMEX_NO'].','.$assigned[$r]['SIM_CARD'].','.
										$assigned[$r]['TERMINAL_TYPE'].','.$assigned[$r]['VENDOR'].','.$assigned[$r]['COMPANY'].','.$assigned[$r]['STATUS'].','.$assigned[$r]['REMARKS'].',';
										//date('d-m-Y',strtotime($assigned[$r]['DATE_CREATED'])).','.
										//date('d-m-Y',strtotime($assigned[$r]['DATE_MODIFIED'])).',';
							$output .= ($assigned[$r]['ISAMEX'] !="0") ? 'AMEX' : 'NA';
							$output .= "\n";
							
							}
							$filename = Yii::app()->basePath . '/../reports/'.$filename. ".csv";
							
							
							if (is_writable($filename)) {
								if (!$handle = fopen($filename, 'a')) {
								
								}
								if (fwrite($handle, $output) === FALSE) {
								
								}
							
							fclose($handle);
							}
					
				Yii::app()->user->setFlash('success', "<h1>Report generated <strong>successfully</strong>. !</h1>");	
		}
		
		
	/*for pagination data*/
	else
	{
		if(isset(Yii::app()->session['company_detail']) && Yii::app()->session['company_detail']!='' 
			&& isset(Yii::app()->session['vendor_detail']) && Yii::app()->session['vendor_detail']!='' 
			&& isset(Yii::app()->session['terminal_detail']) && Yii::app()->session['terminal_detail']!='' 
			&& isset(Yii::app()->session['sim_detail']) && Yii::app()->session['sim_detail']!='' 
			&& isset(Yii::app()->session['terminal_status_detail']) && Yii::app()->session['terminal_status_detail']!=''
			&& isset(Yii::app()->session['amex_detail']) && Yii::app()->session['amex_detail']!=''
			&& isset(Yii::app()->session['department_detail']) && Yii::app()->session['department_detail']!='')
		{
			//echo "hi";
			
					$report_company_detail 			=	Yii::app()->session['company_detail'];
					$report_vendor_detail 			=	Yii::app()->session['vendor_detail'];
					$report_terminal_detail 		=	Yii::app()->session['terminal_detail'];
					$report_sim_detail 				=	Yii::app()->session['sim_detail'];
					$report_terminal_status_detail 	=	Yii::app()->session['terminal_status_detail'];
					$report_isamex_detail		 	=	Yii::app()->session['amex_detail'];
					$report_department_detail		=	Yii::app()->session['department_detail'];
					
					$count							=   Yii::app()->session['count'];
					$sql							=   Yii::app()->session['sql'];
					
					$where_condition ='';
					
					$where_condition .= "cd.company_id in ($report_company_detail) 
							and vd.vendor_id in ($report_vendor_detail) and dd.department_id in ($report_department_detail) 
							and td.terminal_id in ($report_terminal_detail) and sd.sim_id in ($report_sim_detail) 
							and tsd.status_id in ($report_terminal_status_detail)
							and ed.isamex in ($report_isamex_detail)";
					
					
					// $count=Yii::app()->db->createCommand("SELECT count(*)
							// FROM edc_detail
							// WHERE $where_condition")->queryScalar();
							
					$count=Yii::app()->db->createCommand("SELECT count(*) 
														FROM edc_detail ed
														JOIN vendor vd ON ed.vendor=vd.vendor_name
														JOIN company cd ON ed.company=cd.company_name
														JOIN department dd ON ed.department=dd.department_name
														JOIN terminal td ON ed.terminal_type=td.terminal_name
														JOIN sim sd ON ed.sim_card=sd.sim_name
														JOIN terminal_status tsd ON ed.status=tsd.status_name
														WHERE $where_condition")->queryScalar();
							
					$sql="SELECT *
						  FROM edc_detail ed
						  JOIN vendor vd ON ed.vendor=vd.vendor_name
						  JOIN company cd ON ed.company=cd.company_name
						  JOIN department dd ON ed.department=dd.department_name
						  JOIN terminal td ON ed.terminal_type=td.terminal_name
						  JOIN sim sd ON ed.sim_card=sd.sim_name
						  JOIN terminal_status tsd ON ed.status=tsd.status_name
						  WHERE $where_condition";
						$connection=Yii::app()->db;
						$command=$connection->createCommand($sql);
						//$rowCount=$command->execute(); // execute the non-query SQL
						$assigned = $command->queryAll(); // execute a query SQL*/
						
					$dataProvider=new CSqlDataProvider($sql, array(
						'keyField' => 'ID',
						'totalItemCount'=>$count,
					   
						'pagination'=>array(
							'pageSize'=>20,
						),
					));	
					
					
		}
		
		else
		{
			Yii::app()->user->setFlash('success', "<h1>Some fields are <strong>missing or incomplete</strong>. !</h1>");
			$this->redirect(Yii::app()->homeUrl.'/report/index');
		}
	}


		$this->render('index',array(
			'company_detail'=>$company_detail,
			'vendor_detail'=>$vendor_detail,
			'department_detail'=>$department_detail,
			'terminal_detail'=>$terminal_detail,
			'terminal_status_detail'=>$terminal_status_detail,
			'sim_detail'=>$sim_detail,
			'report_company_detail'=>$report_company_detail,
			'report_vendor_detail'=>$report_vendor_detail,
			'report_terminal_detail'=>$report_terminal_detail,
			'report_sim_detail'=>$report_sim_detail,
			'report_terminal_status_detail'=>$report_terminal_status_detail,
			'report_isamex_detail'=>$report_isamex_detail,
			'report_department_detail'=>$report_department_detail,
			'assigned'=>$assigned,
			'filename'=>$filename,
			'dataProvider'=>$dataProvider,
			

		));
			
	}

	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
}