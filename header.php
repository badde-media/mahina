<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<title><?php echo get_bloginfo( 'name' ); ?></title>
<link href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,900;1,900&display=swap" rel="stylesheet"> 
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo get_bloginfo( 'template_directory' );?>/blog.css" rel="stylesheet">
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries --> 
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
<?php wp_head();?>
</head>

<body>
	<?php if(is_front_page() == TRUE) { ?>
		<div id="frontpageHero">
		<div id="logo"><img class="img-responsive glow" src="<?php echo get_theme_root_uri()?>/mahina/assets/images/mahina_logo.svg" alt="Mahina Logo"/></div>
			
		<img src="<?php echo get_theme_root_uri()?>/mahina/assets/images/P_20200602_140129.jpg" width="100%" alt=""/> </div>
		<div id="headerBG">&nbsp;</div>
		<div class="blog-masthead">
			<div class="container">
				<nav class="blog-nav">
					<a class="blog-nav-item active" href="#">Home</a>
					<?php wp_list_pages( '&title_li=' ); ?>
				</nav>
			</div>
		</div>
	<?php } ?>
	<div class="wrapper">

	<div class="container">
	<div class="blog-header">
		<h1 class="blog-title"><a href="<?php echo get_bloginfo( 'wpurl' );?>"><?php echo get_bloginfo( 'name' ); ?></a></h1>
		<p class="lead blog-description"><?php echo get_bloginfo( 'description' ); ?></p>
	</div>
