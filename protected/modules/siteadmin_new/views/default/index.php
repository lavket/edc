
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
 
<h1><Strong>Welcome to <?php echo CHtml::encode(Yii::app()->name); ?> Siteadmin</strong></h1>
<b>

<p><strong><br/>Hi Admin. </p><br/>

<p>Here you can :</p>

<ul style='color:grey'>
	<li>Create New Users.</li>
	<li>Manage Users.</li>
	<li>Update and Delete Records.</li>
	<li>Search Records.</li>
	<li>Generate Reports.</li>
</ul>
<br/>
<p>For any complaint, please dial 9800 (IT Help Desk) and register your complaint.</p>
<p>Feel free to write at ithelpdesk@adlabsentertainment.com,
should you have any questions.</p></strong>
