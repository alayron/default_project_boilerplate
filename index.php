<!DOCTYPE html>
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<?php require 'tpl/head.tpl.php'; ?>
    <body>
		<?php
			
			switch( $_REQUEST['content'] ) {
				default:
					include 'content/home.tpl.php';
					break;
			}
			
		?>
    </body>
    <?php require 'tpl/foot.tpl.php'; ?>
</html>
