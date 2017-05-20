<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/style.css" media="screen, projection" /> 
    <title><?php echo CHtml::encode($this->pageTitle); ?></title>
    <?php Yii::app()->clientScript->registerCoreScript('jquery'); ?>
  </head>
  <body>
    <div id="wrap">
      <div id="header">
        <?php $userId = Yii::app()->user->id; 
		
		// echo $userId;exit;
		
		/*$sql="SELECT type FROM user where username='$username'";
			$connection = Yii::app()->db;
			$command = $connection->createCommand($sql);
			$results = $command->queryAll();*/
		
		?>
        <h1 id="logo-text">EMS<span class="gray"> Siteadmin</span></h1>

      </div>
      <div id="content-wrap">
        <div id="main"> 
          <?php echo $content; ?>
        </div>


        <div id="sidebar">

          <ul class="sidemenu">
            <li><?php echo CHtml::link('Home', CController::createUrl('default/index'), array('class' => 'report')); ?>
              <ul>
                <?php
                if (!Yii::app()->user->isGuest) {
                  ?>
                  <li><?php echo CHtml::link('Change Password', CController::createUrl('user/changepassword'), array('class' => 'report')); ?></li>
                <?php } ?>
                <?php
                if (!Yii::app()->user->isGuest) {
                  ?>
                  <li><?php echo CHtml::link('Logout', CController::createUrl('default/logout'), array('class' => 'report')); ?></li>
                <?php } ?>
                <?php
                if (Yii::app()->user->isGuest) {
                  ?>
                  <li><a href="login" class="report_seo">Login</a></li>
                <?php } ?>


              </ul>
            </li>
						

            <li><h3><a>Users</a></h3>
              <ul>
                <li><?php echo CHtml::link('Create User', CController::createUrl('userDetail/create'), array('class' => 'report')); ?></li>
                <li><?php echo CHtml::link('User List', CController::createUrl('userDetail/index'), array('class' => 'report')); ?></li>

              </ul>
            </li>
		
			<li><h3><a>Manage Users</a></h3>
				<ul>
					<li><?php echo CHtml::link('Admin Users', CController::createUrl('userDetail/adminuser'), array('class' => 'report')); ?></li>
				</ul>
				<!--<li><?php //echo CHtml::link('Marketing Users', CController::createUrl('userDetail/marketinguser'), array('class' => 'report')); ?></li>
				<li><?php //echo CHtml::link('Accounts Users', CController::createUrl('userDetail/accountuser'), array('class' => 'report')); ?></li>
              </ul>-->
            </li>
				
            <li><h3><a>Reports</a></h3>
              <ul>
                <li><?php echo CHtml::link('Content 1', CController::createUrl('news/create'), array('class' => 'report')); ?></li>
                <li><?php echo CHtml::link('Content 2', CController::createUrl('news/newslist'), array('class' => 'report')); ?></li>
                <!--
                  <li><?php //echo CHtml::link('Add Press Kit', CController::createUrl('Presskit/create'), array('class'=>'report'));    ?></li>
                <li><?php //echo CHtml::link('List Press Kit', CController::createUrl('Presskit/presslist'), array('class'=>'report'));    ?></li>
                -->

              </ul>
            </li>

          </ul>


        </div>
      </div>
      <div id="footer"> <span id="footer-left"> &copy; <?php echo date('Y', time()); ?> <strong><?php echo CHtml::encode(Yii::app()->name); ?></strong> | Design by: <strong><a href="http://www.styleshout.com/">IT</a></strong> | Valid: <a href="http://validator.w3.org/check?uri=referer">XHTML</a> | <a href="http://jigsaw.w3.org/css-validator/check/referer">CSS</a> </span> <span id="footer-right"> <a href="http://localhost/opentickets/">Home</a> | <a href="https://mail.adlabsentertainment.com/" target="_blank">Web Mail</a> | <a href="http://www.adlabsimagica.com/" target="_blank">Imagica</a> </span> </div>
    </div>
  </body>
</html>
