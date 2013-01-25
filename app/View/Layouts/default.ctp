<?php

$cakeDescription = __d('cake_dev', 'What');
?>
<!DOCTYPE html>
<html>
<head>
	<?=$this->Html->charset(); ?>
	<title><?=$title_for_layout; ?></title>
	<?php
		echo $this->Html->meta('icon');
        echo $this->Html->meta('description','My First Cake!');
        echo $this->Html->meta('keywords','cake');
        echo $this->Html->meta(array('author'=>'David'));
        echo $this->Html->meta(array('copyright'=>'__Protodx__'));
        echo $this->Html->meta(array('http-equiv'=>'X-UA-Compatible','content'=>'IE=edge,chrome=1'));
        echo $this->Html->meta(array('name'=>'viewport','content'=>'width=device-width, initial-scale=1.0'));

		//echo $this->fetch('script');
        echo $this->Html->script(array(
            'http://code.jquery.com/jquery-1.8.3.js',
            'http://code.jquery.com/ui/1.10.0/jquery-ui.js',
        ));
       echo $this->Html->css(array(
            'bootstrap',
            'bootstrap-responsive',
            'http://code.jquery.com/ui/1.10.0/themes/base/jquery-ui.css'
        )); 
	?>

    <!-- Le styles -->
    <style>
      body {
        padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
      }
    </style>

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
<script>
    $(function() {
        $('.navbar').delay(200).show("blind", { direction: "horizontal"}, 400);
    });
</script>
</head>
<body>
    <div class="navbar navbar-inverse navbar-fixed-top" style="display: none;">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <?php echo $this->Html->link('Protodx',
                array('controller'=>'pages','action' => 'display'),
                array('class' => 'brand')
            );?>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="active"><a href="#">Home</a></li>
              <li><a href="#about">About</a></li>
              <li><a href="#contact">Contact</a></li>
              <li><?php echo $this->Html->link('Blog',
                array('controller'=>'posts','action' => 'index')
            );?></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>
	<div class="container">
		<div id="header">
		</div>
		<div id="content">

			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
		<div id="footer">
		</div>
	</div>
    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <?php
        echo $this->Html->script(array(
            'bootstrap-transition',
            'bootstrap-alert',
            'bootstrap-modal',
            'bootstrap-dropdown',
            'bootstrap-scrollspy',
            'bootstrap-tab',
            'bootstrap-tooltip',
            'bootstrap-popover',
            'bootstrap-button',
            'bootstrap-collapse',
            'bootstrap-carousel',
            'bootstrap-typeahead'
            ));
    ?>
	<?php //echo $this->element('sql_dump'); ?>
</body>
</html>
