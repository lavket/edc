
<?php Yii::app()->clientScript->registerScript(
       'myHideEffect',
       '$(".flash-success").animate({opacity: 1.0}, 7000).fadeOut("slow");',
       CClientScript::POS_READY
    );
 if(Yii::app()->user->hasFlash('success')):?>
    <div class="flash-success">
        <?php echo Yii::app()->user->getFlash('success'); ?>
    </div><?php
 endif; ?>


<?php
// print_r($company_detail);exit;
?>
<form action=<?php echo $this->createUrl('/report/report_submit'); ?> method="post">

<h3>
	<table border="5" width="100%" style="color:red">
			
			<h1><strong>EDC Terminal Report</strong></h1>
		
			<tr>
				<td><br /></td>
			</tr>
			
			<tr>
				<td><h4>Select Company</h4></td>
				<td>
					<select  name ="company_detail" id ="company_detail">
					<option value="All">All Company</option>
					
						<?php for($i=0;$i<count($company_detail);$i++) { ?>
								
								<option 
								
								<?php if( $company_detail[$i]['COMPANY_ID'] == $report_company_detail) { echo "selected=selected" ; } ?>
								
								value="<?php echo $company_detail[$i]['COMPANY_ID']; ?>">
								
									<?php echo $company_detail[$i]['COMPANY_NAME']; ?>
								
								</option>
								
						<?php } ?>
					</select>			
				</td>
			</tr>
			
			
			<tr>
				<td><h4>Select Vendor</h4></td>
				<td>
					<select  name ="vendor_detail" id ="vendor_detail">
					<option value="All">All Vendors</option>
					
						<?php for($i=0;$i<count($vendor_detail);$i++) { ?>
								
								<option 
								
								<?php if( $vendor_detail[$i]['VENDOR_ID'] == $report_vendor_detail) { echo "selected=selected" ; } ?>
								
								value="<?php echo $vendor_detail[$i]['VENDOR_ID']; ?>">
								
									<?php echo $vendor_detail[$i]['VENDOR_NAME']; ?>
								
								</option>
								
						<?php } ?>
					</select>			
				</td>
			</tr>
			
			<tr>
				<td><h4>Select Department</h4></td>
				<td>
					<select  name ="department_detail" id ="department_detail">
					<option value="All">All Departments</option>
					
						<?php for($i=0;$i<count($department_detail);$i++) { ?>
								
								<option 
								
								<?php if( $department_detail[$i]['DEPARTMENT_ID'] == $report_department_detail) { echo "selected=selected" ; } ?>
								
								value="<?php echo $department_detail[$i]['DEPARTMENT_ID']; ?>">
								
									<?php echo $department_detail[$i]['DEPARTMENT_NAME']; ?>
								
								</option>
								
						<?php } ?>
					</select>			
				</td>
			</tr>
			
			<tr>
				<td><h4>Select Terminal</h4></td>
				<td>
					<select  name ="terminal_detail" id ="terminal_detail">
					<option value="All">All Terminals</option>
					
						<?php for($i=0;$i<count($terminal_detail);$i++) { ?>
								
								<option 
								
								<?php if( $terminal_detail[$i]['TERMINAL_ID'] == $report_terminal_detail) { echo "selected=selected" ; } ?>
								
								value="<?php echo $terminal_detail[$i]['TERMINAL_ID']; ?>">
								
									<?php echo $terminal_detail[$i]['TERMINAL_NAME']; ?>
								
								</option>
								
						<?php } ?>
					</select>			
				</td>
			</tr>
			
			<tr>
				<td><h4>Select Sim</h4></td>
				<td>
					<select  name ="sim_detail" id ="sim_detail">
					<option value="All">All Sim Cards</option>
					
						<?php for($i=0;$i<count($sim_detail);$i++) { ?>
								
								<option 
								
								<?php if( $sim_detail[$i]['SIM_ID'] == $report_sim_detail) { echo "selected=selected" ; } ?>
								
								value="<?php echo $sim_detail[$i]['SIM_ID']; ?>">
								
									<?php echo $sim_detail[$i]['SIM_NAME']; ?>
								
								</option>
								
						<?php } ?>
					</select>			
				</td>
			</tr>
			
			<tr>
				<td><h4>Select Terminal Status</h4></td>
				<td>
					<select  name ="terminal_status_detail" id ="terminal_status_detail">
					<option value="All">All Status</option>
					
						<?php for($i=0;$i<count($terminal_status_detail);$i++) { ?>
								
								<option 
								
								<?php if( $terminal_status_detail[$i]['STATUS_ID'] == $report_terminal_status_detail) { echo "selected=selected" ; } ?>
								
								value="<?php echo $terminal_status_detail[$i]['STATUS_ID']; ?>">
								
									<?php echo $terminal_status_detail[$i]['STATUS_NAME']; ?>
								
								</option>
								
						<?php } ?>
					</select>			
				</td>
			</tr>
			
			<tr>
				<td><h4>Select Is Amex</h4></td>
				<td>
					<select  name ="amex_detail" id ="amex_detail">
					  <option value="All">All </option>
					  <option value="0">N/A</option>
					  <option value="1">AMEX</option>
					</select>		
				</td>
			</tr>
			
			<tr>
			
				<!--<td><input class="button-add" value = "" type="submit"> &nbsp; <input class="button-reset" value = "" type="reset"></td>-->
					<td><input type="submit" id="sumit" value ="Generate" class="button_1">  
					<input type="reset" value ="Reset" class="button_1"></td>
				<!--<td><input type="submit" name="submit" id="sumit" value="Submit"></td>-->
				<!--<td><input type="button" name="cancel" id="cancel" value="cancel"></td>-->
			
			</tr>

</table>

	</h3>
</form>

<?php 

$file = Yii::app()->session['filename'];

if($filename != '') { ?>
	
	<h1><b><a href="<?php echo Yii::app()->baseUrl.'/reports/' .$file.".csv";?>"> Download csv file </a></b></h1>

<?php } ?>

<?php 

if($dataProvider != '')
{

$this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'edc--detail-grid',
	'dataProvider'=>$dataProvider,
	
	//'filter'=>$model,
	'columns'=>array(
		array(
		'header'=>'No.',
		'value'=>'$this->grid->dataProvider->pagination->currentPage * $this->grid->dataProvider->pagination->pageSize + ($row+1)',
		),
		array(
		'header'=>'ICICI TID',
		'name'=>'TID_NO',
		),
		//'TID_NO',
		//'HDFC_TID_NO',
		array(
		'header'=>'HDFC TID',
		'name'=>'HDFC_TID_NO',
		),
		'MID_NO',
		'SERIAL_NO',
		'LOCATION',
		'DEPARTMENT',
		//'ISAMEX',
		'ISAMEX:boolean:IS AMEX',
		'AMEX_NO',
		'SIM_CARD',
		'TERMINAL_TYPE',
		'VENDOR',
		'COMPANY',
		'STATUS',
		'REMARKS'
		
		// array(
			// 'class'=>'CButtonColumn',
		// ),
		
	),
	));
}
?>