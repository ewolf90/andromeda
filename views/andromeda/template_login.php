<?php
/*
|---------------------------------------------------------------
| TEMPLATE - LOGIN
|---------------------------------------------------------------
*/
$sec = 'global';
$css = 'main.css';
$path_raw = dirname(__FILE__);
$path = explode('/', $path_raw);
if (count($path) <= 1)
{
	$path = explode('\\', $path_raw);
}
$pcount = count($path);
$skin_loc = $pcount -1;
$current_skin = $path[$skin_loc];
$style_loc = APPFOLDER . '/views/' . $current_skin . '/' . $sec . '/css/' . $css;
include APPFOLDER . '/views/' . $current_skin . '/' . $sec . '/' . 'controller.php';
$link = array(
	'href'	=> 	$style_loc,
	'rel'	=> 	'stylesheet',
	'type'	=> 	'text/css',
	'media'		=> 'screen',
	'charset'	=> 'utf-8'
);
$darkMode =  $_COOKIE['darkMode'];
echo "<?xml version='1.0' encoding='UTF-8'?>\r\n";
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" <?php if($darkMode == "enabled"){echo'class="login night-mode"';}else{echo'class="login light-mode"';}?>>
	<head>
		<title><?php echo $title;?></title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="language" content="en" />
		<meta name="description" content="<?php echo $this->config->item('meta_desc');?>" />
		<meta name="keywords" content="<?php echo $this->config->item('meta_keywords');?>" />
		<meta name="author" content="<?php echo $this->config->item('meta_author');?>" />
		<meta name="viewport" content="initial-scale=1">
		<?php 
        if($darkMode == "enabled"){
            echo '<link href="/application/views/argonaut/global/css/dark.css" rel="stylesheet">';
        }?>
		<link href="https://fonts.googleapis.com/css?family=Roboto:600,600i,900" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Oswald:600&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<script src="https://kit.fontawesome.com/ab5aaa571c.js" crossorigin="anonymous"></script>
		<?php echo $_redirect;?>
		<?php echo link_tag($link); ?>
		<?php include_once($this->config->item('include_head_login')); ?>
		<?php echo $javascript;?>
	</head>
	<body class="login">
		<noscript>
			<span class="UITheme">
				<div class="system_warning ui-state-error"><?php echo lang_output('text_javascript_off', '');?></div>
			</span>
		</noscript>
		<div class="menu-overlay">
            <?php echo str_replace('<ul' , '<ul class="nav-main"' , $nav_main);?>
		</div>

		<div id="body">
		    <?php 
            $darkMode =  $_COOKIE['darkMode'];
            if($darkMode == "enabled"){?>
                <div class="mode-toggle toggle-light-mode show">
		            <i class="fas fa-moon"></i>
		        </div>
		        <div class="mode-toggle toggle-night-mode">
		            <i class="fas fa-moon"></i>
		        </div>
            <?php } else {?>
                <div class="mode-toggle toggle-night-mode show">
		            <i class="fas fa-moon"></i>
		        </div>
		        <div class="mode-toggle toggle-light-mode">
		            <i class="fas fa-moon"></i>
		        </div>
            <?php }?>
			<div class="header">
				<div class="overlay">
					<div class="header-container">
					    <div class="overlay">
    					    <div class="row">
    					        <div class="col s12 m6 l6">
    					            <div class="nav mobile-nav">
                						<div class="openNav">
                							<div class="icon"></div>
                						</div>
                					</div>
    					            <h1 class="title"><a href="<?php echo site_url('/');?>"><?php echo $this->options['sim_name'];?></a></h1>
    					        </div>
    					        <div class="col s12 m6 l6">
    					            <div class="header-nav">
    					                <ul>
                        			        <li><a href="<?php echo site_url('main/index');?>"><span>Main Site</span></a></li>
                        			        <li><a href="<?php echo site_url('login/index');?>"<?php if ($this->uri->rsegment(2) != 'reset_password') { echo ' class="active"'; }?>><span><?php echo ucwords(lang('actions_login') .' '. lang('time_now'));?></span></a></li>
                        			        <li><a href="<?php echo site_url('login/reset_password');?>"<?php if ($this->uri->rsegment(2) == 'reset_password') { echo ' class="active"'; }?>><span><?php echo ucwords(lang('actions_reset') .' '. lang('labels_password'));?></span></a></li>
                        			    </ul>
    					            </div>
    					        </div>
    					    </div>
    					</div>
    				</div>
				</div>
			</div>
            <div class="content">
    			<div class="container">
    			    <?php echo $flash_message;?>
    				<?php echo $content;?>
    				<?php echo $ajax;?>
    				<br>
    			</div>
    		</div>
		</div>
		<div class="footer">
		    <div class="container">
		        <div class="row">
                  <div class="col s12 m4 l4">
                      <div style="margin-top: 10px;">
                        &copy; <?php echo $this->options['sim_name'].' '.date("Y");?> &nbsp;|&nbsp; <a href="/index.php/main/credits">Credits</a>
                      </div>
                  </div>
                  <div class="col s12 m4 l4">
                      <div style="margin-top: 10px;" class="center">
                          <a href="http://anodyne-productions.com/nova">Nova</a> &nbsp;|&nbsp; <a href="">Andromeda</a> &nbsp;|&nbsp; <a href="mailto:emilywolf90@gmail.com">Emily Wolf</a>
                      </div>
                  </div>
                  <div class="col s12 m4 l4">
                      <div class="right">
                          <a href="http://rpgrating.com"><img src="https://rpgrating.com/ratings/<?php echo $rating;?>.png" /></a> &nbsp;
                          <?php echo $license;?>
                      </div>
                      <center><a href="http://rpgrating.com"><img src="https://rpgrating.com/ratings/<?php echo $rating;?>.png" /></a> &nbsp;
                          <?php echo $license;?></center>
                  </div>
                </div>
		    </div>
		</div>
	</div>

	<script type="text/javascript">
	$(".openNav").click(function() {
		$(".menu-overlay").toggleClass("open");
		$(this).toggleClass("open");
	});
    
    $(".toggle-night-mode").click(function() {
        document.cookie = "darkMode=enabled;path=/";
		$("html").toggleClass("light-mode");
		$("html").toggleClass("night-mode");
		$(".toggle-light-mode").toggleClass("show");
		$(this).toggleClass("show");
	});
	
	$(".toggle-light-mode").click(function() {
	    document.cookie = "darkMode=disabled;path=/";
	    $("html").toggleClass("night-mode");
		$("html").toggleClass("light-mode");
		$(".toggle-night-mode").toggleClass("show");
		$(this).toggleClass("show");
	});
	</script>
</div>
</body>
</html>
