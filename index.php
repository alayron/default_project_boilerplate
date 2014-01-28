<!DOCTYPE html>
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<?php
		// turns of Notices in php error reporting
		error_reporting(E_ALL ^ E_NOTICE);
		
		// Global.inc
		require('inc/global.inc.php');
		
		// Head
		require('tpl/head.tpl.php');
	?>
    <body class="fill--color-bg">
		<?php
			
			// includes the navigation
			include 'tpl/navigation.tpl.php';
			

			// Megainclude
			if ( $_REQUEST['content'] ) {
				$content = $_REQUEST['content'];
				if ( ! $navigation_path = check_include($content) ) {
					$content = '404.tpl.php';
					include 'content/404.tpl.php';
				} else {
					$content = FILE_PATH.'/'.implode('/', $navigation_path);
					if ( is_dir($content) ) {
						if ( file_exists($content.'/landing.tpl.php') ){
							include $content.'/landing.tpl.php';
						} else {
							include 'content/404.tpl.php';
						}
					} else if ( file_exists($content.'.tpl.php') ) {
						include $content.'.tpl.php';
					} else {
						include 'content/404.tpl.php';
					}
				}
			} else {
				include 'content/home.tpl.php';
			}
			
			// Includes the footer
			include 'tpl/footer.tpl.php';
			
		?>
    </body>
    <?php require('tpl/foot.tpl.php'); ?>
</html>
