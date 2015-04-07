<ul class="sidebar-menu">
	<li class="header">MENU UTAMA</li>
	<!-- Optionally, you can add icons to the links -->

  <?php if (Yii::app()->user->isGuest): ?>
        <li><a href="<?php echo Yii::app()->createUrl('/') ?>"><i class="fa fa-home"></i> <span>Homepage</span></a></li>
        <li><a href="<?php echo Yii::app()->createUrl('/site/page?view=about') ?>"><i class="fa fa-info"></i> <span>About Us</span></a></li>
        <li><a href="<?php echo Yii::app()->createUrl('/site/contact') ?>"><i class="fa fa-envelope-o"></i> <span>Contact Us</span></a></li>
  <?php endif ?>
</ul><!-- /.sidebar-menu -->