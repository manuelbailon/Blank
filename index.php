<?php defined( '_JEXEC' ) or die; 

include_once JPATH_THEMES.'/'.$this->template.'/logic.php';

?><!doctype html>

<html lang="<?php echo $this->language; ?>">

<head>
	<jdoc:include type="head" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
	<link rel="apple-touch-icon-precomposed" href="<?php echo $tpath; ?>/images/apple-touch-icon-57x57-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo $tpath; ?>/images/apple-touch-icon-72x72-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo $tpath; ?>/images/apple-touch-icon-114x114-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo $tpath; ?>/images/apple-touch-icon-144x144-precomposed.png">
</head>

<body class="<?php echo (($menu->getActive() == $menu->getDefault()) ? ('front') : ('site')).' '.$active->alias.' '.$pageclass; ?>">
	<!-- Header -->
	<div class="header">
		<a class="logo" href="index.php">
			<img src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template?>/images/logo.png" alt="logo" />
		</a>
		<nav class="main-menu"><jdoc:include type="modules" name="menu" style="xhtml" /></nav>
	</div>
	<!-- Termina Header -->
	<!-- Slider Principal -->
	<?php if ($this->countModules('showcase')) : ?>
		<div class="showcase triangule-bottom">
			<jdoc:include type="modules" name="showcase" style="xhtml" />
			<a class="angle-down" href="#"><i class="fa fa-angle-down" aria-hidden="true"></i></a>
		</div>
	<?php endif; ?>
	<!-- Termina Slider Principal -->
	<!-- Banner -->
	<?php if ($this->countModules('banner')) : ?>
		<div class="banner section">
			<div class="wrap">
				<jdoc:include type="modules" name="banner" style="xhtml" />
			</div>
		</div>
	<?php endif; ?>
	<!-- Termina Banner -->
	<!-- Parallax 1 -->
	<?php if ($this->countModules('parallax1')) : ?>
		<div class="parallax1 triangule-top triangule-bottom">
			<jdoc:include type="modules" name="parallax1" style="xhtml" />
		</div>
	<?php endif; ?>
	<!-- Termina Parallax 1 -->
	<!-- Banner 2 -->
	<?php if ($this->countModules('banner2')) : ?>
		<div class="banner2 section">
			<div class="wrap">
				<jdoc:include type="modules" name="banner2" style="xhtml" />
			</div>
		</div>
	<?php endif; ?>
	<!-- Termina Banner 2 -->
	<!-- Banner 3 -->
	<?php if ($this->countModules('banner3')) : ?>
		<div class="banner3 section triangule-top triangule-bottom">
			<div class="wrap">
				<jdoc:include type="modules" name="banner3" style="xhtml" />
			</div>
		</div>
	<?php endif; ?>
	<!-- Termina Banner 3 -->
	<!-- Footer -->
	<?php if ($this->countModules('footer')) : ?>
		<div class="footer section bg-negro">
			<div class="wrap">
				<jdoc:include type="modules" name="footer" style="xhtml" />
			</div>
		</div>
	<?php endif; ?>
	<!-- Termina Footer -->



	<jdoc:include type="modules" name="debug" />

</body>

</html>
