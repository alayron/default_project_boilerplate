<!DOCTYPE html>
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<?php
		require 'tpl/head.tpl.php';
		
		// turns of Notices in php error reporting
		error_reporting(E_ALL ^ E_NOTICE);
	?>
    <body>
		<?php
			
			// Includes template files based on the Url; &content=testcase
			switch( $_REQUEST['content'] ) {
				default:
					include 'content/home.tpl.php';
					break;
			}
			
		?>
    </body>
    <?php require 'tpl/foot.tpl.php'; ?>
</html>
