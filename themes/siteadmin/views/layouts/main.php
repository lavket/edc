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
        <?php $userId = Yii::app()->user->id; ?>
        <h1 id="logo-text">EMS<span class="gray"> Siteadmin</span></h1>
<?php /*
        <div id="header-tabs">
          <?php
          $this->widget('zii.widgets.CMenu', array(
              'items' => array(
                  array('label' => 'Dashboard', 'url' => array('default/index')),
                  array('label' => 'Artists', 'url' => array('tblaaartist/artistlist')),
                  array('label' => 'News', 'url' => array('news/newslist')),
                  array('label' => 'Miscellaneous', 'url' => array('feature/feature')),
                  array('label' => 'XML GENERATE', 'url' => array('Generatexmlfile/generate')),
                  array('label' => 'Banners', 'url' => array('banner/list')),
                  array('label' => 'Radio Player', 'url' => array('radio/create')),
                  array('label' => 'Itunes', 'url' => array('itunes/create')),
                  //array('label'=>'Reports', 'url'=>array('')),
                  array('label' => 'Home', 'url' => array('')),
                  array('label' => 'Paisa Vasool', 'url' => array('paisa_vasool/manage')),
                  array('label' => 'First1s', 'url' => array('firstone/first1')),
              ),
              'linkLabelWrapper' => 'span'
          ));
          ?>
        </div>
		
		*/ ?>
      </div>
      <div id="content-wrap">
        <div id="main"> 
          <?php echo $content; ?>
          <!-- MORE EXAMPLE BELOW
          <a name="TemplateInfo"></a>
            <h1>Template Info</h1>
            <p><strong>Techmania 1.1</strong> is a free, W3C-compliant, CSS-based website template by <strong>styleshout.com</strong>. This work is distributed under the <a rel="license" target="_blank" href="http://creativecommons.org/licenses/by/2.5/"> Creative Commons Attribution 2.5 License</a>, which means that you are free to use and modify it for any purpose. All I ask is that you include a link back to my website in your credits.</p>
            <p>For more free designs, you can visit my website to see my other works.</p>
            <p>Good luck and I hope you find my free templates useful!</p>
            <p class="comments align-right"> <a href="http://www.free-css.com/">Read more</a> : <a href="http://www.free-css.com/">Comments(7)</a> : Oct 08, 2006 </p>
            <a name="SampleTags"></a>
            <h1>Sample Tags</h1>
            <h3>Code</h3>
            <p><code> code-sample { <br />
              font-weight: bold;<br />
              font-style: italic;<br />
              } </code></p>
            <h3>Example Lists</h3>
            <ol>
              <li><span>example of ordered list</span></li>
              <li><span>uses span to color the numbers</span></li>
            </ol>
            <ul>
              <li><span>example of unordered list</span></li>
              <li><span>uses span to color the bullets</span></li>
            </ul>
            <h3>Blockquote</h3>
            <blockquote>
              <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat....</p>
            </blockquote>
            <h3>Image and text</h3>
            <p><a href="http://www.free-css.com/"><img src="images/firefox-gray.jpg" width="100" height="120" alt="firefox" class="float-left" /></a> Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec libero. Suspendisse bibendum. Cras id urna. Morbi tincidunt, orci ac convallis aliquam, lectus turpis varius lorem, eu posuere nunc justo tempus leo. Donec mattis, purus nec placerat bibendum, dui pede condimentum odio, ac blandit ante orci ut diam. Cras fringilla magna. Phasellus suscipit, leo a pharetra condimentum, lorem tellus eleifend magna, eget fringilla velit magna id neque. Curabitur vel urna. In tristique orci porttitor ipsum. Aliquam ornare diam iaculis nibh. Proin luctus, velit pulvinar ullamcorper nonummy, mauris enim eleifend urna, congue egestas elit lectus eu est. </p>
            <h3>Example Form</h3>
            <form action="http://www.free-css.com/">
              <p>
                <label>Name</label>
                <input name="dname" value="Your Name" type="text" size="30" />
                <label>Email</label>
                <input name="demail" value="Your Email" type="text" size="30" />
                <label>Your Comments</label>
                <textarea rows="5" cols="5"></textarea>
                <br />
                <input class="button" type="submit" />
              </p>
            </form>
            <br />
          -->
        </div>

        <div id="sidebar">


          <ul class="sidemenu">
            <li><?php echo CHtml::link('Dashboard', CController::createUrl('site/index'), array('class' => 'report')); ?>
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
                <li><?php echo CHtml::link('Create User', CController::createUrl('user/create'), array('class' => 'report')); ?></li>
                <li><?php echo CHtml::link('Manage User', CController::createUrl('user/admin'), array('class' => 'report')); ?></li>

              </ul>
            </li>
				

          </ul>


        </div>
      </div>
      <div id="footer"> <span id="footer-left"> &copy; <?php echo date('Y', time()); ?> <strong><?php echo CHtml::encode(Yii::app()->name); ?></strong> | Design by: <strong><a href="http://www.styleshout.com/">IT</a></strong> | Valid: <a href="http://validator.w3.org/check?uri=referer">XHTML</a> | <a href="http://jigsaw.w3.org/css-validator/check/referer">CSS</a> </span> <span id="footer-right"> <a href="http://localhost/guestservices/">Home</a> | <a href="https://mail.adlabsentertainment.com/" target="_blank">Web Mail</a> | <a href="http://www.adlabsimagica.com/" target="_blank">Imagica</a> </span> </div>
    </div>
  </body>
</html>
