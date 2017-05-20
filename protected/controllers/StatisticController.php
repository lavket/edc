<?php

class StatisticController extends Controller
{
	
	function StatisticController($id, $module = NULL) 
	{
        parent::__construct($id, $module);
		
       if(Yii::app()->user->id == "")
		{
		
			$this->redirect(Yii::app()->homeUrl);
			
		}

        //$this->layout='main';
	}
	
	public function actionIndex()
	{
		$this->layout='mainnew';
		
		/*THEME PARK START*/
		$tp_not_work_status_E1 = Yii::app()->db->createCommand()
            ->select('count(*) as tnum')
            ->from('edc_detail ed')
            ->join('terminal_status ts', 'ed.status=ts.status_name')
            ->join('company cd', 'ed.company=cd.company_name')
            ->join('vendor vd', 'ed.vendor=vd.vendor_name')
            ->join('terminal td', 'ed.terminal_type=td.terminal_name')
			->where('ts.STATUS_ID =:status_id and cd.COMPANY_ID=:company_id 
			and vd.VENDOR_ID=:vendor_id and td.TERMINAL_ID=:terminal_id',array(':status_id'=>2, 'company_id'=>1,'vendor_id'=>1, 'terminal_id'=>1 ))
            ->queryAll();
		
		$tp_not_work_status_E2 = Yii::app()->db->createCommand()
            ->select('count(*) as tnum')
            ->from('edc_detail ed')
            ->join('terminal_status ts', 'ed.status=ts.status_name')
            ->join('company cd', 'ed.company=cd.company_name')
            ->join('vendor vd', 'ed.vendor=vd.vendor_name')
            ->join('terminal td', 'ed.terminal_type=td.terminal_name')
			->where('ts.STATUS_ID =:status_id and cd.COMPANY_ID=:company_id 
			and vd.VENDOR_ID=:vendor_id and td.TERMINAL_ID=:terminal_id',array(':status_id'=>2, 'company_id'=>1,'vendor_id'=>2, 'terminal_id'=>1 ))
            ->queryAll();
			
		$tp_not_work_status_E3 = Yii::app()->db->createCommand()
            ->select('count(*) as tnum')
            ->from('edc_detail ed')
            ->join('terminal_status ts', 'ed.status=ts.status_name')
            ->join('company cd', 'ed.company=cd.company_name')
            ->join('vendor vd', 'ed.vendor=vd.vendor_name')
            ->join('terminal td', 'ed.terminal_type=td.terminal_name')
			->where('ts.STATUS_ID =:status_id and cd.COMPANY_ID=:company_id 
			and vd.VENDOR_ID=:vendor_id and td.TERMINAL_ID=:terminal_id',array(':status_id'=>2, 'company_id'=>1,'vendor_id'=>3, 'terminal_id'=>1 ))
            ->queryAll();
		
		$tp_not_work_status_G1 = Yii::app()->db->createCommand()
            ->select('count(*) as tnum')
            ->from('edc_detail ed')
            ->join('terminal_status ts', 'ed.status=ts.status_name')
            ->join('company cd', 'ed.company=cd.company_name')
            ->join('vendor vd', 'ed.vendor=vd.vendor_name')
            ->join('terminal td', 'ed.terminal_type=td.terminal_name')
			->where('ts.STATUS_ID =:status_id and cd.COMPANY_ID=:company_id 
			and vd.VENDOR_ID=:vendor_id and td.TERMINAL_ID=:terminal_id',array(':status_id'=>2, 'company_id'=>1,'vendor_id'=>1, 'terminal_id'=>2 ))
            ->queryAll();
		
		$tp_not_work_status_G2 = Yii::app()->db->createCommand()
            ->select('count(*) as tnum')
            ->from('edc_detail ed')
            ->join('terminal_status ts', 'ed.status=ts.status_name')
            ->join('company cd', 'ed.company=cd.company_name')
            ->join('vendor vd', 'ed.vendor=vd.vendor_name')
            ->join('terminal td', 'ed.terminal_type=td.terminal_name')
			->where('ts.STATUS_ID =:status_id and cd.COMPANY_ID=:company_id 
			and vd.VENDOR_ID=:vendor_id and td.TERMINAL_ID=:terminal_id',array(':status_id'=>2, 'company_id'=>1,'vendor_id'=>2, 'terminal_id'=>2 ))
            ->queryAll();
			
		$tp_not_work_status_G3 = Yii::app()->db->createCommand()
            ->select('count(*) as tnum')
            ->from('edc_detail ed')
            ->join('terminal_status ts', 'ed.status=ts.status_name')
            ->join('company cd', 'ed.company=cd.company_name')
            ->join('vendor vd', 'ed.vendor=vd.vendor_name')
            ->join('terminal td', 'ed.terminal_type=td.terminal_name')
			->where('ts.STATUS_ID =:status_id and cd.COMPANY_ID=:company_id 
			and vd.VENDOR_ID=:vendor_id and td.TERMINAL_ID=:terminal_id',array(':status_id'=>2, 'company_id'=>1,'vendor_id'=>3, 'terminal_id'=>2 ))
            ->queryAll();
			
			
		/*THEME PARK END*/	
		
		/*WATER PARK START*/
		
		$wp_not_work_status_E1 = Yii::app()->db->createCommand()
            ->select('count(*) as tnum')
            ->from('edc_detail ed')
            ->join('terminal_status ts', 'ed.status=ts.status_name')
            ->join('company cd', 'ed.company=cd.company_name')
            ->join('vendor vd', 'ed.vendor=vd.vendor_name')
            ->join('terminal td', 'ed.terminal_type=td.terminal_name')
			->where('ts.STATUS_ID =:status_id and cd.COMPANY_ID=:company_id 
			and vd.VENDOR_ID=:vendor_id and td.TERMINAL_ID=:terminal_id',array(':status_id'=>2, 'company_id'=>2,'vendor_id'=>1, 'terminal_id'=>1 ))
            ->queryAll();
		
		$wp_not_work_status_E2 = Yii::app()->db->createCommand()
            ->select('count(*) as tnum')
            ->from('edc_detail ed')
            ->join('terminal_status ts', 'ed.status=ts.status_name')
            ->join('company cd', 'ed.company=cd.company_name')
            ->join('vendor vd', 'ed.vendor=vd.vendor_name')
            ->join('terminal td', 'ed.terminal_type=td.terminal_name')
			->where('ts.STATUS_ID =:status_id and cd.COMPANY_ID=:company_id 
			and vd.VENDOR_ID=:vendor_id and td.TERMINAL_ID=:terminal_id',array(':status_id'=>2, 'company_id'=>2,'vendor_id'=>2, 'terminal_id'=>1 ))
            ->queryAll();
			
		$wp_not_work_status_E3 = Yii::app()->db->createCommand()
            ->select('count(*) as tnum')
            ->from('edc_detail ed')
            ->join('terminal_status ts', 'ed.status=ts.status_name')
            ->join('company cd', 'ed.company=cd.company_name')
            ->join('vendor vd', 'ed.vendor=vd.vendor_name')
            ->join('terminal td', 'ed.terminal_type=td.terminal_name')
			->where('ts.STATUS_ID =:status_id and cd.COMPANY_ID=:company_id 
			and vd.VENDOR_ID=:vendor_id and td.TERMINAL_ID=:terminal_id',array(':status_id'=>2, 'company_id'=>2,'vendor_id'=>3, 'terminal_id'=>1 ))
            ->queryAll();
		
		$wp_not_work_status_G1 = Yii::app()->db->createCommand()
            ->select('count(*) as tnum')
            ->from('edc_detail ed')
            ->join('terminal_status ts', 'ed.status=ts.status_name')
            ->join('company cd', 'ed.company=cd.company_name')
            ->join('vendor vd', 'ed.vendor=vd.vendor_name')
            ->join('terminal td', 'ed.terminal_type=td.terminal_name')
			->where('ts.STATUS_ID =:status_id and cd.COMPANY_ID=:company_id 
			and vd.VENDOR_ID=:vendor_id and td.TERMINAL_ID=:terminal_id',array(':status_id'=>2, 'company_id'=>2,'vendor_id'=>1, 'terminal_id'=>2 ))
            ->queryAll();
		
		$wp_not_work_status_G2 = Yii::app()->db->createCommand()
            ->select('count(*) as tnum')
            ->from('edc_detail ed')
            ->join('terminal_status ts', 'ed.status=ts.status_name')
            ->join('company cd', 'ed.company=cd.company_name')
            ->join('vendor vd', 'ed.vendor=vd.vendor_name')
            ->join('terminal td', 'ed.terminal_type=td.terminal_name')
			->where('ts.STATUS_ID =:status_id and cd.COMPANY_ID=:company_id 
			and vd.VENDOR_ID=:vendor_id and td.TERMINAL_ID=:terminal_id',array(':status_id'=>2, 'company_id'=>2,'vendor_id'=>2, 'terminal_id'=>2 ))
            ->queryAll();
			
		$wp_not_work_status_G3 = Yii::app()->db->createCommand()
            ->select('count(*) as tnum')
            ->from('edc_detail ed')
            ->join('terminal_status ts', 'ed.status=ts.status_name')
            ->join('company cd', 'ed.company=cd.company_name')
            ->join('vendor vd', 'ed.vendor=vd.vendor_name')
            ->join('terminal td', 'ed.terminal_type=td.terminal_name')
			->where('ts.STATUS_ID =:status_id and cd.COMPANY_ID=:company_id 
			and vd.VENDOR_ID=:vendor_id and td.TERMINAL_ID=:terminal_id',array(':status_id'=>2, 'company_id'=>2,'vendor_id'=>3, 'terminal_id'=>2 ))
            ->queryAll();
			
			
		/*WATER PARK END*/	
		
		/*SNOW PARK START*/
		
		$sp_not_work_status_E1 = Yii::app()->db->createCommand()
            ->select('count(*) as tnum')
            ->from('edc_detail ed')
            ->join('terminal_status ts', 'ed.status=ts.status_name')
            ->join('company cd', 'ed.company=cd.company_name')
            ->join('vendor vd', 'ed.vendor=vd.vendor_name')
            ->join('terminal td', 'ed.terminal_type=td.terminal_name')
			->where('ts.STATUS_ID =:status_id and cd.COMPANY_ID=:company_id 
			and vd.VENDOR_ID=:vendor_id and td.TERMINAL_ID=:terminal_id',array(':status_id'=>2, 'company_id'=>3,'vendor_id'=>1, 'terminal_id'=>1 ))
            ->queryAll();
		
		$sp_not_work_status_E2 = Yii::app()->db->createCommand()
            ->select('count(*) as tnum')
            ->from('edc_detail ed')
            ->join('terminal_status ts', 'ed.status=ts.status_name')
            ->join('company cd', 'ed.company=cd.company_name')
            ->join('vendor vd', 'ed.vendor=vd.vendor_name')
            ->join('terminal td', 'ed.terminal_type=td.terminal_name')
			->where('ts.STATUS_ID =:status_id and cd.COMPANY_ID=:company_id 
			and vd.VENDOR_ID=:vendor_id and td.TERMINAL_ID=:terminal_id',array(':status_id'=>2, 'company_id'=>3,'vendor_id'=>2, 'terminal_id'=>1 ))
            ->queryAll();
			
		$sp_not_work_status_E3 = Yii::app()->db->createCommand()
            ->select('count(*) as tnum')
            ->from('edc_detail ed')
            ->join('terminal_status ts', 'ed.status=ts.status_name')
            ->join('company cd', 'ed.company=cd.company_name')
            ->join('vendor vd', 'ed.vendor=vd.vendor_name')
            ->join('terminal td', 'ed.terminal_type=td.terminal_name')
			->where('ts.STATUS_ID =:status_id and cd.COMPANY_ID=:company_id 
			and vd.VENDOR_ID=:vendor_id and td.TERMINAL_ID=:terminal_id',array(':status_id'=>2, 'company_id'=>3,'vendor_id'=>3, 'terminal_id'=>1 ))
            ->queryAll();
		
		$sp_not_work_status_G1 = Yii::app()->db->createCommand()
            ->select('count(*) as tnum')
            ->from('edc_detail ed')
            ->join('terminal_status ts', 'ed.status=ts.status_name')
            ->join('company cd', 'ed.company=cd.company_name')
            ->join('vendor vd', 'ed.vendor=vd.vendor_name')
            ->join('terminal td', 'ed.terminal_type=td.terminal_name')
			->where('ts.STATUS_ID =:status_id and cd.COMPANY_ID=:company_id 
			and vd.VENDOR_ID=:vendor_id and td.TERMINAL_ID=:terminal_id',array(':status_id'=>2, 'company_id'=>3,'vendor_id'=>1, 'terminal_id'=>2 ))
            ->queryAll();
		
		$sp_not_work_status_G2 = Yii::app()->db->createCommand()
            ->select('count(*) as tnum')
            ->from('edc_detail ed')
            ->join('terminal_status ts', 'ed.status=ts.status_name')
            ->join('company cd', 'ed.company=cd.company_name')
            ->join('vendor vd', 'ed.vendor=vd.vendor_name')
            ->join('terminal td', 'ed.terminal_type=td.terminal_name')
			->where('ts.STATUS_ID =:status_id and cd.COMPANY_ID=:company_id 
			and vd.VENDOR_ID=:vendor_id and td.TERMINAL_ID=:terminal_id',array(':status_id'=>2, 'company_id'=>3,'vendor_id'=>2, 'terminal_id'=>2 ))
            ->queryAll();
			
		$sp_not_work_status_G3 = Yii::app()->db->createCommand()
            ->select('count(*) as tnum')
            ->from('edc_detail ed')
            ->join('terminal_status ts', 'ed.status=ts.status_name')
            ->join('company cd', 'ed.company=cd.company_name')
            ->join('vendor vd', 'ed.vendor=vd.vendor_name')
            ->join('terminal td', 'ed.terminal_type=td.terminal_name')
			->where('ts.STATUS_ID =:status_id and cd.COMPANY_ID=:company_id 
			and vd.VENDOR_ID=:vendor_id and td.TERMINAL_ID=:terminal_id',array(':status_id'=>2, 'company_id'=>3,'vendor_id'=>3, 'terminal_id'=>2 ))
            ->queryAll();
			
			
		/*SNOW PARK END*/	
		
		/*HOTEL START*/
		
		$hp_not_work_status_E1 = Yii::app()->db->createCommand()
            ->select('count(*) as tnum')
            ->from('edc_detail ed')
            ->join('terminal_status ts', 'ed.status=ts.status_name')
            ->join('company cd', 'ed.company=cd.company_name')
            ->join('vendor vd', 'ed.vendor=vd.vendor_name')
            ->join('terminal td', 'ed.terminal_type=td.terminal_name')
			->where('ts.STATUS_ID =:status_id and cd.COMPANY_ID=:company_id 
			and vd.VENDOR_ID=:vendor_id and td.TERMINAL_ID=:terminal_id',array(':status_id'=>2, 'company_id'=>4,'vendor_id'=>1, 'terminal_id'=>1 ))
            ->queryAll();
		
		$hp_not_work_status_E2 = Yii::app()->db->createCommand()
            ->select('count(*) as tnum')
            ->from('edc_detail ed')
            ->join('terminal_status ts', 'ed.status=ts.status_name')
            ->join('company cd', 'ed.company=cd.company_name')
            ->join('vendor vd', 'ed.vendor=vd.vendor_name')
            ->join('terminal td', 'ed.terminal_type=td.terminal_name')
			->where('ts.STATUS_ID =:status_id and cd.COMPANY_ID=:company_id 
			and vd.VENDOR_ID=:vendor_id and td.TERMINAL_ID=:terminal_id',array(':status_id'=>2, 'company_id'=>4,'vendor_id'=>2, 'terminal_id'=>1 ))
            ->queryAll();
			
		$hp_not_work_status_E3 = Yii::app()->db->createCommand()
            ->select('count(*) as tnum')
            ->from('edc_detail ed')
            ->join('terminal_status ts', 'ed.status=ts.status_name')
            ->join('company cd', 'ed.company=cd.company_name')
            ->join('vendor vd', 'ed.vendor=vd.vendor_name')
            ->join('terminal td', 'ed.terminal_type=td.terminal_name')
			->where('ts.STATUS_ID =:status_id and cd.COMPANY_ID=:company_id 
			and vd.VENDOR_ID=:vendor_id and td.TERMINAL_ID=:terminal_id',array(':status_id'=>2, 'company_id'=>4,'vendor_id'=>3, 'terminal_id'=>1 ))
            ->queryAll();
		
		$hp_not_work_status_G1 = Yii::app()->db->createCommand()
            ->select('count(*) as tnum')
            ->from('edc_detail ed')
            ->join('terminal_status ts', 'ed.status=ts.status_name')
            ->join('company cd', 'ed.company=cd.company_name')
            ->join('vendor vd', 'ed.vendor=vd.vendor_name')
            ->join('terminal td', 'ed.terminal_type=td.terminal_name')
			->where('ts.STATUS_ID =:status_id and cd.COMPANY_ID=:company_id 
			and vd.VENDOR_ID=:vendor_id and td.TERMINAL_ID=:terminal_id',array(':status_id'=>2, 'company_id'=>4,'vendor_id'=>1, 'terminal_id'=>2 ))
            ->queryAll();
		
		$hp_not_work_status_G2 = Yii::app()->db->createCommand()
            ->select('count(*) as tnum')
            ->from('edc_detail ed')
            ->join('terminal_status ts', 'ed.status=ts.status_name')
            ->join('company cd', 'ed.company=cd.company_name')
            ->join('vendor vd', 'ed.vendor=vd.vendor_name')
            ->join('terminal td', 'ed.terminal_type=td.terminal_name')
			->where('ts.STATUS_ID =:status_id and cd.COMPANY_ID=:company_id 
			and vd.VENDOR_ID=:vendor_id and td.TERMINAL_ID=:terminal_id',array(':status_id'=>2, 'company_id'=>4,'vendor_id'=>2, 'terminal_id'=>2 ))
            ->queryAll();
			
		$hp_not_work_status_G3 = Yii::app()->db->createCommand()
            ->select('count(*) as tnum')
            ->from('edc_detail ed')
            ->join('terminal_status ts', 'ed.status=ts.status_name')
            ->join('company cd', 'ed.company=cd.company_name')
            ->join('vendor vd', 'ed.vendor=vd.vendor_name')
            ->join('terminal td', 'ed.terminal_type=td.terminal_name')
			->where('ts.STATUS_ID =:status_id and cd.COMPANY_ID=:company_id 
			and vd.VENDOR_ID=:vendor_id and td.TERMINAL_ID=:terminal_id',array(':status_id'=>2, 'company_id'=>4,'vendor_id'=>3, 'terminal_id'=>2 ))
            ->queryAll();
					
		/*HOTEL END*/	
		
		/*BACK OFFICE START*/
		
		$bp_not_work_status_E1 = Yii::app()->db->createCommand()
            ->select('count(*) as tnum')
            ->from('edc_detail ed')
            ->join('terminal_status ts', 'ed.status=ts.status_name')
            ->join('company cd', 'ed.company=cd.company_name')
            ->join('vendor vd', 'ed.vendor=vd.vendor_name')
            ->join('terminal td', 'ed.terminal_type=td.terminal_name')
			->where('ts.STATUS_ID =:status_id and cd.COMPANY_ID=:company_id 
			and vd.VENDOR_ID=:vendor_id and td.TERMINAL_ID=:terminal_id',array(':status_id'=>2, 'company_id'=>5,'vendor_id'=>1, 'terminal_id'=>1 ))
            ->queryAll();
		
		$bp_not_work_status_E2 = Yii::app()->db->createCommand()
            ->select('count(*) as tnum')
            ->from('edc_detail ed')
            ->join('terminal_status ts', 'ed.status=ts.status_name')
            ->join('company cd', 'ed.company=cd.company_name')
            ->join('vendor vd', 'ed.vendor=vd.vendor_name')
            ->join('terminal td', 'ed.terminal_type=td.terminal_name')
			->where('ts.STATUS_ID =:status_id and cd.COMPANY_ID=:company_id 
			and vd.VENDOR_ID=:vendor_id and td.TERMINAL_ID=:terminal_id',array(':status_id'=>2, 'company_id'=>5,'vendor_id'=>2, 'terminal_id'=>1 ))
            ->queryAll();
			
		$bp_not_work_status_E3 = Yii::app()->db->createCommand()
            ->select('count(*) as tnum')
            ->from('edc_detail ed')
            ->join('terminal_status ts', 'ed.status=ts.status_name')
            ->join('company cd', 'ed.company=cd.company_name')
            ->join('vendor vd', 'ed.vendor=vd.vendor_name')
            ->join('terminal td', 'ed.terminal_type=td.terminal_name')
			->where('ts.STATUS_ID =:status_id and cd.COMPANY_ID=:company_id 
			and vd.VENDOR_ID=:vendor_id and td.TERMINAL_ID=:terminal_id',array(':status_id'=>2, 'company_id'=>5,'vendor_id'=>3, 'terminal_id'=>1 ))
            ->queryAll();
		
		$bp_not_work_status_G1 = Yii::app()->db->createCommand()
            ->select('count(*) as tnum')
            ->from('edc_detail ed')
            ->join('terminal_status ts', 'ed.status=ts.status_name')
            ->join('company cd', 'ed.company=cd.company_name')
            ->join('vendor vd', 'ed.vendor=vd.vendor_name')
            ->join('terminal td', 'ed.terminal_type=td.terminal_name')
			->where('ts.STATUS_ID =:status_id and cd.COMPANY_ID=:company_id 
			and vd.VENDOR_ID=:vendor_id and td.TERMINAL_ID=:terminal_id',array(':status_id'=>2, 'company_id'=>5,'vendor_id'=>1, 'terminal_id'=>2 ))
            ->queryAll();
		
		$bp_not_work_status_G2 = Yii::app()->db->createCommand()
            ->select('count(*) as tnum')
            ->from('edc_detail ed')
            ->join('terminal_status ts', 'ed.status=ts.status_name')
            ->join('company cd', 'ed.company=cd.company_name')
            ->join('vendor vd', 'ed.vendor=vd.vendor_name')
            ->join('terminal td', 'ed.terminal_type=td.terminal_name')
			->where('ts.STATUS_ID =:status_id and cd.COMPANY_ID=:company_id 
			and vd.VENDOR_ID=:vendor_id and td.TERMINAL_ID=:terminal_id',array(':status_id'=>2, 'company_id'=>5,'vendor_id'=>2, 'terminal_id'=>2 ))
            ->queryAll();
			
		$bp_not_work_status_G3 = Yii::app()->db->createCommand()
            ->select('count(*) as tnum')
            ->from('edc_detail ed')
            ->join('terminal_status ts', 'ed.status=ts.status_name')
            ->join('company cd', 'ed.company=cd.company_name')
            ->join('vendor vd', 'ed.vendor=vd.vendor_name')
            ->join('terminal td', 'ed.terminal_type=td.terminal_name')
			->where('ts.STATUS_ID =:status_id and cd.COMPANY_ID=:company_id 
			and vd.VENDOR_ID=:vendor_id and td.TERMINAL_ID=:terminal_id',array(':status_id'=>2, 'company_id'=>5,'vendor_id'=>3, 'terminal_id'=>2 ))
            ->queryAll();
					
		/*BACK OFFICE END*/	
		
		/*HEAD OFFICE START*/
		
		$hop_not_work_status_E1 = Yii::app()->db->createCommand()
            ->select('count(*) as tnum')
            ->from('edc_detail ed')
            ->join('terminal_status ts', 'ed.status=ts.status_name')
            ->join('company cd', 'ed.company=cd.company_name')
            ->join('vendor vd', 'ed.vendor=vd.vendor_name')
            ->join('terminal td', 'ed.terminal_type=td.terminal_name')
			->where('ts.STATUS_ID =:status_id and cd.COMPANY_ID=:company_id 
			and vd.VENDOR_ID=:vendor_id and td.TERMINAL_ID=:terminal_id',array(':status_id'=>2, 'company_id'=>6,'vendor_id'=>1, 'terminal_id'=>1 ))
            ->queryAll();
		
		$hop_not_work_status_E2 = Yii::app()->db->createCommand()
            ->select('count(*) as tnum')
            ->from('edc_detail ed')
            ->join('terminal_status ts', 'ed.status=ts.status_name')
            ->join('company cd', 'ed.company=cd.company_name')
            ->join('vendor vd', 'ed.vendor=vd.vendor_name')
            ->join('terminal td', 'ed.terminal_type=td.terminal_name')
			->where('ts.STATUS_ID =:status_id and cd.COMPANY_ID=:company_id 
			and vd.VENDOR_ID=:vendor_id and td.TERMINAL_ID=:terminal_id',array(':status_id'=>2, 'company_id'=>6,'vendor_id'=>2, 'terminal_id'=>1 ))
            ->queryAll();
			
		$hop_not_work_status_E3 = Yii::app()->db->createCommand()
            ->select('count(*) as tnum')
            ->from('edc_detail ed')
            ->join('terminal_status ts', 'ed.status=ts.status_name')
            ->join('company cd', 'ed.company=cd.company_name')
            ->join('vendor vd', 'ed.vendor=vd.vendor_name')
            ->join('terminal td', 'ed.terminal_type=td.terminal_name')
			->where('ts.STATUS_ID =:status_id and cd.COMPANY_ID=:company_id 
			and vd.VENDOR_ID=:vendor_id and td.TERMINAL_ID=:terminal_id',array(':status_id'=>2, 'company_id'=>6,'vendor_id'=>3, 'terminal_id'=>1 ))
            ->queryAll();
		
		$hop_not_work_status_G1 = Yii::app()->db->createCommand()
            ->select('count(*) as tnum')
            ->from('edc_detail ed')
            ->join('terminal_status ts', 'ed.status=ts.status_name')
            ->join('company cd', 'ed.company=cd.company_name')
            ->join('vendor vd', 'ed.vendor=vd.vendor_name')
            ->join('terminal td', 'ed.terminal_type=td.terminal_name')
			->where('ts.STATUS_ID =:status_id and cd.COMPANY_ID=:company_id 
			and vd.VENDOR_ID=:vendor_id and td.TERMINAL_ID=:terminal_id',array(':status_id'=>2, 'company_id'=>6,'vendor_id'=>1, 'terminal_id'=>2 ))
            ->queryAll();
		
		$hop_not_work_status_G2 = Yii::app()->db->createCommand()
            ->select('count(*) as tnum')
            ->from('edc_detail ed')
            ->join('terminal_status ts', 'ed.status=ts.status_name')
            ->join('company cd', 'ed.company=cd.company_name')
            ->join('vendor vd', 'ed.vendor=vd.vendor_name')
            ->join('terminal td', 'ed.terminal_type=td.terminal_name')
			->where('ts.STATUS_ID =:status_id and cd.COMPANY_ID=:company_id 
			and vd.VENDOR_ID=:vendor_id and td.TERMINAL_ID=:terminal_id',array(':status_id'=>2, 'company_id'=>6,'vendor_id'=>2, 'terminal_id'=>2 ))
            ->queryAll();
			
		$hop_not_work_status_G3 = Yii::app()->db->createCommand()
            ->select('count(*) as tnum')
            ->from('edc_detail ed')
            ->join('terminal_status ts', 'ed.status=ts.status_name')
            ->join('company cd', 'ed.company=cd.company_name')
            ->join('vendor vd', 'ed.vendor=vd.vendor_name')
            ->join('terminal td', 'ed.terminal_type=td.terminal_name')
			->where('ts.STATUS_ID =:status_id and cd.COMPANY_ID=:company_id 
			and vd.VENDOR_ID=:vendor_id and td.TERMINAL_ID=:terminal_id',array(':status_id'=>2, 'company_id'=>6,'vendor_id'=>3, 'terminal_id'=>2 ))
            ->queryAll();
					
		/*HEAD OFFICE END*/	
		
	
/*------------------------------------------------------------------------------------------------------------------------------*/	
		/*TICKETING*/
		$ticketing_E1 = Yii::app()->db->createCommand()
            ->select('count(*) as dnum')
            ->from('edc_detail ed')
            ->join('department dd', 'ed.department=dd.department_name')
            ->join('vendor vd', 'ed.vendor=vd.vendor_name')
            ->join('terminal td', 'ed.terminal_type=td.terminal_name')
			->where('dd.DEPARTMENT_ID =:department_id and vd.VENDOR_ID=:vendor_id 
				and td.TERMINAL_ID=:terminal_id',array(':department_id'=>1,'vendor_id'=>1, 'terminal_id'=>1 ))
            ->queryAll();
		
		$ticketing_E2 = Yii::app()->db->createCommand()
            ->select('count(*) as dnum')
            ->from('edc_detail ed')
            ->join('department dd', 'ed.department=dd.department_name')
            ->join('vendor vd', 'ed.vendor=vd.vendor_name')
            ->join('terminal td', 'ed.terminal_type=td.terminal_name')
			->where('dd.DEPARTMENT_ID =:department_id and vd.VENDOR_ID=:vendor_id 
				and td.TERMINAL_ID=:terminal_id',array(':department_id'=>1,'vendor_id'=>2, 'terminal_id'=>1 ))
            ->queryAll();
		
		$ticketing_E3 = Yii::app()->db->createCommand()
            ->select('count(*) as dnum')
            ->from('edc_detail ed')
            ->join('department dd', 'ed.department=dd.department_name')
            ->join('vendor vd', 'ed.vendor=vd.vendor_name')
            ->join('terminal td', 'ed.terminal_type=td.terminal_name')
			->where('dd.DEPARTMENT_ID =:department_id and vd.VENDOR_ID=:vendor_id 
				and td.TERMINAL_ID=:terminal_id',array(':department_id'=>1,'vendor_id'=>3, 'terminal_id'=>1 ))
            ->queryAll();
		
		$ticketing_G1 = Yii::app()->db->createCommand()
            ->select('count(*) as dnum')
            ->from('edc_detail ed')
            ->join('department dd', 'ed.department=dd.department_name')
            ->join('vendor vd', 'ed.vendor=vd.vendor_name')
            ->join('terminal td', 'ed.terminal_type=td.terminal_name')
			->where('dd.DEPARTMENT_ID =:department_id and vd.VENDOR_ID=:vendor_id 
				and td.TERMINAL_ID=:terminal_id',array(':department_id'=>1,'vendor_id'=>1, 'terminal_id'=>2))
            ->queryAll();
		
		$ticketing_G2 = Yii::app()->db->createCommand()
            ->select('count(*) as dnum')
            ->from('edc_detail ed')
            ->join('department dd', 'ed.department=dd.department_name')
            ->join('vendor vd', 'ed.vendor=vd.vendor_name')
            ->join('terminal td', 'ed.terminal_type=td.terminal_name')
			->where('dd.DEPARTMENT_ID =:department_id and vd.VENDOR_ID=:vendor_id 
				and td.TERMINAL_ID=:terminal_id',array(':department_id'=>1,'vendor_id'=>2, 'terminal_id'=>2))
            ->queryAll();
		
		$ticketing_G3 = Yii::app()->db->createCommand()
            ->select('count(*) as dnum')
            ->from('edc_detail ed')
            ->join('department dd', 'ed.department=dd.department_name')
            ->join('vendor vd', 'ed.vendor=vd.vendor_name')
            ->join('terminal td', 'ed.terminal_type=td.terminal_name')
			->where('dd.DEPARTMENT_ID =:department_id and vd.VENDOR_ID=:vendor_id 
				and td.TERMINAL_ID=:terminal_id',array(':department_id'=>1,'vendor_id'=>3, 'terminal_id'=>2))
            ->queryAll();
		
		/*FNB*/
		$fnb_E1 = Yii::app()->db->createCommand()
            ->select('count(*) as dnum')
            ->from('edc_detail ed')
            ->join('department dd', 'ed.department=dd.department_name')
            ->join('vendor vd', 'ed.vendor=vd.vendor_name')
            ->join('terminal td', 'ed.terminal_type=td.terminal_name')
			->where('dd.DEPARTMENT_ID =:department_id and vd.VENDOR_ID=:vendor_id 
				and td.TERMINAL_ID=:terminal_id',array(':department_id'=>2,'vendor_id'=>1, 'terminal_id'=>1 ))
            ->queryAll();
		
		$fnb_E2 = Yii::app()->db->createCommand()
            ->select('count(*) as dnum')
            ->from('edc_detail ed')
            ->join('department dd', 'ed.department=dd.department_name')
            ->join('vendor vd', 'ed.vendor=vd.vendor_name')
            ->join('terminal td', 'ed.terminal_type=td.terminal_name')
			->where('dd.DEPARTMENT_ID =:department_id and vd.VENDOR_ID=:vendor_id 
				and td.TERMINAL_ID=:terminal_id',array(':department_id'=>2,'vendor_id'=>2, 'terminal_id'=>1 ))
            ->queryAll();
		
		$fnb_E3 = Yii::app()->db->createCommand()
            ->select('count(*) as dnum')
            ->from('edc_detail ed')
            ->join('department dd', 'ed.department=dd.department_name')
            ->join('vendor vd', 'ed.vendor=vd.vendor_name')
            ->join('terminal td', 'ed.terminal_type=td.terminal_name')
			->where('dd.DEPARTMENT_ID =:department_id and vd.VENDOR_ID=:vendor_id 
				and td.TERMINAL_ID=:terminal_id',array(':department_id'=>2,'vendor_id'=>3, 'terminal_id'=>1 ))
            ->queryAll();
		
		$fnb_G1 = Yii::app()->db->createCommand()
            ->select('count(*) as dnum')
            ->from('edc_detail ed')
            ->join('department dd', 'ed.department=dd.department_name')
            ->join('vendor vd', 'ed.vendor=vd.vendor_name')
            ->join('terminal td', 'ed.terminal_type=td.terminal_name')
			->where('dd.DEPARTMENT_ID =:department_id and vd.VENDOR_ID=:vendor_id 
				and td.TERMINAL_ID=:terminal_id',array(':department_id'=>2,'vendor_id'=>1, 'terminal_id'=>2))
            ->queryAll();
		
		$fnb_G2 = Yii::app()->db->createCommand()
            ->select('count(*) as dnum')
            ->from('edc_detail ed')
            ->join('department dd', 'ed.department=dd.department_name')
            ->join('vendor vd', 'ed.vendor=vd.vendor_name')
            ->join('terminal td', 'ed.terminal_type=td.terminal_name')
			->where('dd.DEPARTMENT_ID =:department_id and vd.VENDOR_ID=:vendor_id 
				and td.TERMINAL_ID=:terminal_id',array(':department_id'=>2,'vendor_id'=>2, 'terminal_id'=>2))
            ->queryAll();
		
		$fnb_G3 = Yii::app()->db->createCommand()
            ->select('count(*) as dnum')
            ->from('edc_detail ed')
            ->join('department dd', 'ed.department=dd.department_name')
            ->join('vendor vd', 'ed.vendor=vd.vendor_name')
            ->join('terminal td', 'ed.terminal_type=td.terminal_name')
			->where('dd.DEPARTMENT_ID =:department_id and vd.VENDOR_ID=:vendor_id 
				and td.TERMINAL_ID=:terminal_id',array(':department_id'=>2,'vendor_id'=>3, 'terminal_id'=>2))
            ->queryAll();
		
		/*RETAIL*/
		$retail_E1 = Yii::app()->db->createCommand()
            ->select('count(*) as dnum')
            ->from('edc_detail ed')
            ->join('department dd', 'ed.department=dd.department_name')
            ->join('vendor vd', 'ed.vendor=vd.vendor_name')
            ->join('terminal td', 'ed.terminal_type=td.terminal_name')
			->where('dd.DEPARTMENT_ID =:department_id and vd.VENDOR_ID=:vendor_id 
				and td.TERMINAL_ID=:terminal_id',array(':department_id'=>3,'vendor_id'=>1, 'terminal_id'=>1 ))
            ->queryAll();
		
		$retail_E2 = Yii::app()->db->createCommand()
            ->select('count(*) as dnum')
            ->from('edc_detail ed')
            ->join('department dd', 'ed.department=dd.department_name')
            ->join('vendor vd', 'ed.vendor=vd.vendor_name')
            ->join('terminal td', 'ed.terminal_type=td.terminal_name')
			->where('dd.DEPARTMENT_ID =:department_id and vd.VENDOR_ID=:vendor_id 
				and td.TERMINAL_ID=:terminal_id',array(':department_id'=>3,'vendor_id'=>2, 'terminal_id'=>1 ))
            ->queryAll();
		
		$retail_E3 = Yii::app()->db->createCommand()
            ->select('count(*) as dnum')
            ->from('edc_detail ed')
            ->join('department dd', 'ed.department=dd.department_name')
            ->join('vendor vd', 'ed.vendor=vd.vendor_name')
            ->join('terminal td', 'ed.terminal_type=td.terminal_name')
			->where('dd.DEPARTMENT_ID =:department_id and vd.VENDOR_ID=:vendor_id 
				and td.TERMINAL_ID=:terminal_id',array(':department_id'=>3,'vendor_id'=>3, 'terminal_id'=>1 ))
            ->queryAll();
		
		$retail_G1 = Yii::app()->db->createCommand()
            ->select('count(*) as dnum')
            ->from('edc_detail ed')
            ->join('department dd', 'ed.department=dd.department_name')
            ->join('vendor vd', 'ed.vendor=vd.vendor_name')
            ->join('terminal td', 'ed.terminal_type=td.terminal_name')
			->where('dd.DEPARTMENT_ID =:department_id and vd.VENDOR_ID=:vendor_id 
				and td.TERMINAL_ID=:terminal_id',array(':department_id'=>3,'vendor_id'=>1, 'terminal_id'=>2))
            ->queryAll();
		
		$retail_G2 = Yii::app()->db->createCommand()
            ->select('count(*) as dnum')
            ->from('edc_detail ed')
            ->join('department dd', 'ed.department=dd.department_name')
            ->join('vendor vd', 'ed.vendor=vd.vendor_name')
            ->join('terminal td', 'ed.terminal_type=td.terminal_name')
			->where('dd.DEPARTMENT_ID =:department_id and vd.VENDOR_ID=:vendor_id 
				and td.TERMINAL_ID=:terminal_id',array(':department_id'=>3,'vendor_id'=>2, 'terminal_id'=>2))
            ->queryAll();
		
		$retail_G3 = Yii::app()->db->createCommand()
            ->select('count(*) as dnum')
            ->from('edc_detail ed')
            ->join('department dd', 'ed.department=dd.department_name')
            ->join('vendor vd', 'ed.vendor=vd.vendor_name')
            ->join('terminal td', 'ed.terminal_type=td.terminal_name')
			->where('dd.DEPARTMENT_ID =:department_id and vd.VENDOR_ID=:vendor_id 
				and td.TERMINAL_ID=:terminal_id',array(':department_id'=>3,'vendor_id'=>3, 'terminal_id'=>2))
            ->queryAll();
		
		/*IT*/
		$it_E1 = Yii::app()->db->createCommand()
            ->select('count(*) as dnum')
            ->from('edc_detail ed')
            ->join('department dd', 'ed.department=dd.department_name')
            ->join('vendor vd', 'ed.vendor=vd.vendor_name')
            ->join('terminal td', 'ed.terminal_type=td.terminal_name')
			->where('dd.DEPARTMENT_ID =:department_id and vd.VENDOR_ID=:vendor_id 
				and td.TERMINAL_ID=:terminal_id',array(':department_id'=>4,'vendor_id'=>1, 'terminal_id'=>1 ))
            ->queryAll();
		
		$it_E2 = Yii::app()->db->createCommand()
            ->select('count(*) as dnum')
            ->from('edc_detail ed')
            ->join('department dd', 'ed.department=dd.department_name')
            ->join('vendor vd', 'ed.vendor=vd.vendor_name')
            ->join('terminal td', 'ed.terminal_type=td.terminal_name')
			->where('dd.DEPARTMENT_ID =:department_id and vd.VENDOR_ID=:vendor_id 
				and td.TERMINAL_ID=:terminal_id',array(':department_id'=>4,'vendor_id'=>2, 'terminal_id'=>1 ))
            ->queryAll();
		
		$it_E3 = Yii::app()->db->createCommand()
            ->select('count(*) as dnum')
            ->from('edc_detail ed')
            ->join('department dd', 'ed.department=dd.department_name')
            ->join('vendor vd', 'ed.vendor=vd.vendor_name')
            ->join('terminal td', 'ed.terminal_type=td.terminal_name')
			->where('dd.DEPARTMENT_ID =:department_id and vd.VENDOR_ID=:vendor_id 
				and td.TERMINAL_ID=:terminal_id',array(':department_id'=>4,'vendor_id'=>3, 'terminal_id'=>1 ))
            ->queryAll();
		
		$it_G1 = Yii::app()->db->createCommand()
            ->select('count(*) as dnum')
            ->from('edc_detail ed')
            ->join('department dd', 'ed.department=dd.department_name')
            ->join('vendor vd', 'ed.vendor=vd.vendor_name')
            ->join('terminal td', 'ed.terminal_type=td.terminal_name')
			->where('dd.DEPARTMENT_ID =:department_id and vd.VENDOR_ID=:vendor_id 
				and td.TERMINAL_ID=:terminal_id',array(':department_id'=>4,'vendor_id'=>1, 'terminal_id'=>2))
            ->queryAll();
		
		$it_G2 = Yii::app()->db->createCommand()
            ->select('count(*) as dnum')
            ->from('edc_detail ed')
            ->join('department dd', 'ed.department=dd.department_name')
            ->join('vendor vd', 'ed.vendor=vd.vendor_name')
            ->join('terminal td', 'ed.terminal_type=td.terminal_name')
			->where('dd.DEPARTMENT_ID =:department_id and vd.VENDOR_ID=:vendor_id 
				and td.TERMINAL_ID=:terminal_id',array(':department_id'=>4,'vendor_id'=>2, 'terminal_id'=>2))
            ->queryAll();
		
		$it_G3 = Yii::app()->db->createCommand()
            ->select('count(*) as dnum')
            ->from('edc_detail ed')
            ->join('department dd', 'ed.department=dd.department_name')
            ->join('vendor vd', 'ed.vendor=vd.vendor_name')
            ->join('terminal td', 'ed.terminal_type=td.terminal_name')
			->where('dd.DEPARTMENT_ID =:department_id and vd.VENDOR_ID=:vendor_id 
				and td.TERMINAL_ID=:terminal_id',array(':department_id'=>4,'vendor_id'=>3, 'terminal_id'=>2))
            ->queryAll();
			
		/*ACCOUNTS*/
		$accounts_E1 = Yii::app()->db->createCommand()
            ->select('count(*) as dnum')
            ->from('edc_detail ed')
            ->join('department dd', 'ed.department=dd.department_name')
            ->join('vendor vd', 'ed.vendor=vd.vendor_name')
            ->join('terminal td', 'ed.terminal_type=td.terminal_name')
			->where('dd.DEPARTMENT_ID =:department_id and vd.VENDOR_ID=:vendor_id 
				and td.TERMINAL_ID=:terminal_id',array(':department_id'=>5,'vendor_id'=>1, 'terminal_id'=>1 ))
            ->queryAll();
		
		$accounts_E2 = Yii::app()->db->createCommand()
            ->select('count(*) as dnum')
            ->from('edc_detail ed')
            ->join('department dd', 'ed.department=dd.department_name')
            ->join('vendor vd', 'ed.vendor=vd.vendor_name')
            ->join('terminal td', 'ed.terminal_type=td.terminal_name')
			->where('dd.DEPARTMENT_ID =:department_id and vd.VENDOR_ID=:vendor_id 
				and td.TERMINAL_ID=:terminal_id',array(':department_id'=>5,'vendor_id'=>2, 'terminal_id'=>1 ))
            ->queryAll();
		
		$accounts_E3 = Yii::app()->db->createCommand()
            ->select('count(*) as dnum')
            ->from('edc_detail ed')
            ->join('department dd', 'ed.department=dd.department_name')
            ->join('vendor vd', 'ed.vendor=vd.vendor_name')
            ->join('terminal td', 'ed.terminal_type=td.terminal_name')
			->where('dd.DEPARTMENT_ID =:department_id and vd.VENDOR_ID=:vendor_id 
				and td.TERMINAL_ID=:terminal_id',array(':department_id'=>5,'vendor_id'=>3, 'terminal_id'=>1 ))
            ->queryAll();
		
		$accounts_G1 = Yii::app()->db->createCommand()
            ->select('count(*) as dnum')
            ->from('edc_detail ed')
            ->join('department dd', 'ed.department=dd.department_name')
            ->join('vendor vd', 'ed.vendor=vd.vendor_name')
            ->join('terminal td', 'ed.terminal_type=td.terminal_name')
			->where('dd.DEPARTMENT_ID =:department_id and vd.VENDOR_ID=:vendor_id 
				and td.TERMINAL_ID=:terminal_id',array(':department_id'=>5,'vendor_id'=>1, 'terminal_id'=>2))
            ->queryAll();
		
		$accounts_G2 = Yii::app()->db->createCommand()
            ->select('count(*) as dnum')
            ->from('edc_detail ed')
            ->join('department dd', 'ed.department=dd.department_name')
            ->join('vendor vd', 'ed.vendor=vd.vendor_name')
            ->join('terminal td', 'ed.terminal_type=td.terminal_name')
			->where('dd.DEPARTMENT_ID =:department_id and vd.VENDOR_ID=:vendor_id 
				and td.TERMINAL_ID=:terminal_id',array(':department_id'=>5,'vendor_id'=>2, 'terminal_id'=>2))
            ->queryAll();
		
		$accounts_G3 = Yii::app()->db->createCommand()
            ->select('count(*) as dnum')
            ->from('edc_detail ed')
            ->join('department dd', 'ed.department=dd.department_name')
            ->join('vendor vd', 'ed.vendor=vd.vendor_name')
            ->join('terminal td', 'ed.terminal_type=td.terminal_name')
			->where('dd.DEPARTMENT_ID =:department_id and vd.VENDOR_ID=:vendor_id 
				and td.TERMINAL_ID=:terminal_id',array(':department_id'=>5,'vendor_id'=>3, 'terminal_id'=>2))
            ->queryAll();
		
		/*MARKETING*/
		$marketing_E1 = Yii::app()->db->createCommand()
            ->select('count(*) as dnum')
            ->from('edc_detail ed')
            ->join('department dd', 'ed.department=dd.department_name')
            ->join('vendor vd', 'ed.vendor=vd.vendor_name')
            ->join('terminal td', 'ed.terminal_type=td.terminal_name')
			->where('dd.DEPARTMENT_ID =:department_id and vd.VENDOR_ID=:vendor_id 
				and td.TERMINAL_ID=:terminal_id',array(':department_id'=>6,'vendor_id'=>1, 'terminal_id'=>1 ))
            ->queryAll();
		
		$marketing_E2 = Yii::app()->db->createCommand()
            ->select('count(*) as dnum')
            ->from('edc_detail ed')
            ->join('department dd', 'ed.department=dd.department_name')
            ->join('vendor vd', 'ed.vendor=vd.vendor_name')
            ->join('terminal td', 'ed.terminal_type=td.terminal_name')
			->where('dd.DEPARTMENT_ID =:department_id and vd.VENDOR_ID=:vendor_id 
				and td.TERMINAL_ID=:terminal_id',array(':department_id'=>6,'vendor_id'=>2, 'terminal_id'=>1 ))
            ->queryAll();
		
		$marketing_E3 = Yii::app()->db->createCommand()
            ->select('count(*) as dnum')
            ->from('edc_detail ed')
            ->join('department dd', 'ed.department=dd.department_name')
            ->join('vendor vd', 'ed.vendor=vd.vendor_name')
            ->join('terminal td', 'ed.terminal_type=td.terminal_name')
			->where('dd.DEPARTMENT_ID =:department_id and vd.VENDOR_ID=:vendor_id 
				and td.TERMINAL_ID=:terminal_id',array(':department_id'=>6,'vendor_id'=>3, 'terminal_id'=>1 ))
            ->queryAll();
		
		$marketing_G1 = Yii::app()->db->createCommand()
            ->select('count(*) as dnum')
            ->from('edc_detail ed')
            ->join('department dd', 'ed.department=dd.department_name')
            ->join('vendor vd', 'ed.vendor=vd.vendor_name')
            ->join('terminal td', 'ed.terminal_type=td.terminal_name')
			->where('dd.DEPARTMENT_ID =:department_id and vd.VENDOR_ID=:vendor_id 
				and td.TERMINAL_ID=:terminal_id',array(':department_id'=>6,'vendor_id'=>1, 'terminal_id'=>2))
            ->queryAll();
		
		$marketing_G2 = Yii::app()->db->createCommand()
            ->select('count(*) as dnum')
            ->from('edc_detail ed')
            ->join('department dd', 'ed.department=dd.department_name')
            ->join('vendor vd', 'ed.vendor=vd.vendor_name')
            ->join('terminal td', 'ed.terminal_type=td.terminal_name')
			->where('dd.DEPARTMENT_ID =:department_id and vd.VENDOR_ID=:vendor_id 
				and td.TERMINAL_ID=:terminal_id',array(':department_id'=>6,'vendor_id'=>2, 'terminal_id'=>2))
            ->queryAll();
		
		$marketing_G3 = Yii::app()->db->createCommand()
            ->select('count(*) as dnum')
            ->from('edc_detail ed')
            ->join('department dd', 'ed.department=dd.department_name')
            ->join('vendor vd', 'ed.vendor=vd.vendor_name')
            ->join('terminal td', 'ed.terminal_type=td.terminal_name')
			->where('dd.DEPARTMENT_ID =:department_id and vd.VENDOR_ID=:vendor_id 
				and td.TERMINAL_ID=:terminal_id',array(':department_id'=>6,'vendor_id'=>3, 'terminal_id'=>2))
            ->queryAll();
		
			//print_r($ticketing_E1);exit;
		
		
		$this->render('index',array(
			'tp_not_work_status_E1'=>$tp_not_work_status_E1,
			'tp_not_work_status_E2'=>$tp_not_work_status_E2,
			'tp_not_work_status_E3'=>$tp_not_work_status_E3,
			'tp_not_work_status_G1'=>$tp_not_work_status_G1,
			'tp_not_work_status_G2'=>$tp_not_work_status_G2,
			'tp_not_work_status_G3'=>$tp_not_work_status_G3,
			
			'wp_not_work_status_E1'=>$wp_not_work_status_E1,
			'wp_not_work_status_E2'=>$wp_not_work_status_E2,
			'wp_not_work_status_E3'=>$wp_not_work_status_E3,
			'wp_not_work_status_G1'=>$wp_not_work_status_G1,
			'wp_not_work_status_G2'=>$wp_not_work_status_G2,
			'wp_not_work_status_G3'=>$wp_not_work_status_G3,
			
			'sp_not_work_status_E1'=>$sp_not_work_status_E1,
			'sp_not_work_status_E2'=>$sp_not_work_status_E2,
			'sp_not_work_status_E3'=>$sp_not_work_status_E3,
			'sp_not_work_status_G1'=>$sp_not_work_status_G1,
			'sp_not_work_status_G2'=>$sp_not_work_status_G2,
			'sp_not_work_status_G3'=>$sp_not_work_status_G3,
			
			'hp_not_work_status_E1'=>$hp_not_work_status_E1,
			'hp_not_work_status_E2'=>$hp_not_work_status_E2,
			'hp_not_work_status_E3'=>$hp_not_work_status_E3,
			'hp_not_work_status_G1'=>$hp_not_work_status_G1,
			'hp_not_work_status_G2'=>$hp_not_work_status_G2,
			'hp_not_work_status_G3'=>$hp_not_work_status_G3,
			
			'bp_not_work_status_E1'=>$bp_not_work_status_E1,
			'bp_not_work_status_E2'=>$bp_not_work_status_E2,
			'bp_not_work_status_E3'=>$bp_not_work_status_E3,
			'bp_not_work_status_G1'=>$bp_not_work_status_G1,
			'bp_not_work_status_G2'=>$bp_not_work_status_G2,
			'bp_not_work_status_G3'=>$bp_not_work_status_G3,
			
			'hop_not_work_status_E1'=>$hop_not_work_status_E1,
			'hop_not_work_status_E2'=>$hop_not_work_status_E2,
			'hop_not_work_status_E3'=>$hop_not_work_status_E3,
			'hop_not_work_status_G1'=>$hop_not_work_status_G1,
			'hop_not_work_status_G2'=>$hop_not_work_status_G2,
			'hop_not_work_status_G3'=>$hop_not_work_status_G3,
			/*-------------------------------------------------*/
			'ticketing_E1'=>$ticketing_E1,
			'ticketing_E2'=>$ticketing_E2,
			'ticketing_E3'=>$ticketing_E3,
			'ticketing_G1'=>$ticketing_G1,
			'ticketing_G2'=>$ticketing_G2,
			'ticketing_G3'=>$ticketing_G3,
			
			'fnb_E1'=>$fnb_E1,
			'fnb_E2'=>$fnb_E2,
			'fnb_E3'=>$fnb_E3,
			'fnb_G1'=>$fnb_G1,
			'fnb_G2'=>$fnb_G2,
			'fnb_G3'=>$fnb_G3,
			
			'retail_E1'=>$retail_E1,
			'retail_E2'=>$retail_E2,
			'retail_E3'=>$retail_E3,
			'retail_G1'=>$retail_G1,
			'retail_G2'=>$retail_G2,
			'retail_G3'=>$retail_G3,
			
			'it_E1'=>$it_E1,
			'it_E2'=>$it_E2,
			'it_E3'=>$it_E3,
			'it_G1'=>$it_G1,
			'it_G2'=>$it_G2,
			'it_G3'=>$it_G3,
			
			'accounts_E1'=>$accounts_E1,
			'accounts_E2'=>$accounts_E2,
			'accounts_E3'=>$accounts_E3,
			'accounts_G1'=>$accounts_G1,
			'accounts_G2'=>$accounts_G2,
			'accounts_G3'=>$accounts_G3,
			
			'marketing_E1'=>$marketing_E1,
			'marketing_E2'=>$marketing_E2,
			'marketing_E3'=>$marketing_E3,
			'marketing_G1'=>$marketing_G1,
			'marketing_G2'=>$marketing_G2,
			'marketing_G3'=>$marketing_G3,
			
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