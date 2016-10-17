<!DOCTYPE html>
<html>

<head>
<title><?php bloginfo('title')?></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8"/>
<?php wp_head(); ?>
</head>

<body>
<div class='container'>
<div class='jumbotron'>
	<h1 id='title'><a href=''><?php bloginfo('name')?></a></h1>
</div>
<div class='navbar navbar-defalt'> 
<div class="container-fluid">
	<?php wp_nav_menu(array('theme_location'=>'primary') );?>
</div>
</div>