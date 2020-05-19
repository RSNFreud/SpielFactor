<!doctype html>
<html lang="en">
	
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link href="<?php echo get_bloginfo('template_directory'); ?>/stylesheet.css" rel="stylesheet">
<title><?php echo get_bloginfo( 'name' ); ?></title>
<?php wp_head(); ?>
</head>
	
<body>
	<div class="header">
		 <div class="box">
			<div class="row">
			<div class="col-6"><a href="mailto:<?php echo get_option('email'); ?>?subject=Support from Spiel Factor""><?php echo get_option('email'); ?></a></div>
			 <div class="col-6" style="text-align: right">
				 <img src="<?php echo get_bloginfo('template_directory'); ?>/images/facebookicon.png" alt=""> 
				 <a href="https://www.facebook.com/<?php echo get_option('facebookfeed'); ?>">Follow us on Facebook!</a>
			 </div>
			 </div>
		 </div>
		 <nav class="navbar navbar-expand-lg navbar-dark">

		  <a class="navbar-brand" href="<?php echo get_bloginfo( 'wpurl' );?>"><strong><?php echo get_bloginfo( 'name' ); ?></strong></a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
			<div class="row" id="navrow">
				<div class="col-sm-10">
					<div class="navbar-nav">
					  <?php wp_list_pages( '&exclude=22 &title_li=' ); ?>
					</div>
				</div>
				<div class="col-sm-2" id="register">
					<a class="social pull-right" href="/<?php echo get_option('register'); ?>">Register</a>
				</div>
			  </div>
		  </div>
		</nav>
	</div>