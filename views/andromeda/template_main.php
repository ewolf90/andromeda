<?php
/*
|---------------------------------------------------------------
| TEMPLATE - MAIN
|---------------------------------------------------------------
|
| Andromeda Theme by Emily Wolf
|
| File: application/views/andromeda/template_main.php
| Version: 1.0.1
| GitHub: github.com/ewolf90/andromeda
|
| Copyright (c) 2020, Emily Wolf All rights reserved.
| 
| Redistribution and use in source and binary forms, with or 
| without modification, are permitted provided that the following 
| conditions are met:
| 
|   1. Redistributions of source code must retain the above 
|      copyright notice, this list of conditions and the 
|      following disclaimer.
| 
|   2. Redistributions in binary form must reproduce the above 
|      copyright notice, this list of conditions and the 
|      following disclaimer in the documentation and/or other 
|      materials provided with the distribution.
| 
|   3. Neither the name of the copyright holder nor the names 
|      of its contributors may be used to endorse or promote 
|      products derived from this software without specific 
|      prior written permission.
| 
| THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND 
| CONTRIBUTORS "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, 
| INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF 
| MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE 
| DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT HOLDER OR 
| CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, 
| SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT 
| NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; 
| LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) 
| HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY,WHETHER IN 
| CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR 
| OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, 
| EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
| 
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
$darkMode =  $_COOKIE['darkMode'];
$style_loc = APPFOLDER . '/views/' . $current_skin . '/' . $sec . '/css/' . $css;
include APPFOLDER . '/views/' . $current_skin . '/' . $sec . '/' . 'config.php';
$link = array(
	'href'	=> 	$style_loc,
	'rel'	=> 	'stylesheet',
	'type'	=> 	'text/css',
	'media'		=> 'screen',
	'charset'	=> 'utf-8'
);
$this->load->helper('panel');
$panel = array(
	'inbox' => array(
	'src' => APPFOLDER .'/views/'. $current_skin .'/global/images/panel-mail.png'),
	'writing' => array(
	'src' => APPFOLDER .'/views/'. $current_skin .'/global/images/panel-writing.png'),
);
if(!isset($darkMode) && $theme_settings['dark_mode']){?>
    <script type="text/javascript">
	 document.cookie = "darkMode=enabled;path=/";
	</script>
<?php }elseif(!isset($darkMode) && !$theme_settings['dark_mode']){?>
    <script type="text/javascript">
    document.cookie = "darkMode=disabled;path=/";
    </script>
<?php } 
$darkMode =  $_COOKIE['darkMode'];
echo "<?xml version='1.0' encoding='UTF-8'?>\r\n";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php if($darkMode == "enabled"){echo'class="night-mode"';}else{echo'class="light-mode"';}?> xml:lang="en">
	<head>
		<title><?php echo $title;?></title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="language" content="en" />
		<meta name="description" content="<?php echo $this->config->item('meta_desc');?>" />
		<meta name="keywords" content="<?php echo $this->config->item('meta_keywords');?>" />
		<meta name="author" content="<?php echo $this->config->item('meta_author');?>" />
		<meta name="viewport" content="initial-scale=1">
		<?php echo $_redirect;?>
		<?php echo link_tag($link); ?>
		<?php 
        if($darkMode == "enabled"){
            echo '<link href="/application/views/andromeda/global/css/dark.css" rel="stylesheet">';
        }?>
		<?php include_once($this->config->item('include_head_main')); ?>
		<link href="https://fonts.googleapis.com/css?family=Roboto:600,600i,900" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Oswald:600&display=swap" rel="stylesheet">
		<script src="https://kit.fontawesome.com/ab5aaa571c.js" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animsition/4.0.2/css/animsition.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/animsition/4.0.2/js/animsition.min.js"></script>
		<?php echo $javascript;?>
	</head>
	<body class="animsition" data-animsition-in-class="fade-in-down-sm" data-animsition-in-duration="1000" data-animsition-out-class="fade-out-down-sm" data-animsition-out-duration="800">

		<noscript>
			<span class="UITheme">
				<div class="system_warning ui-state-error"><?php echo lang_output('text_javascript_off', '');?></div>
			</span>
		</noscript>
		
		<div class="menu-overlay">
            <?php echo str_replace('<ul' , '<ul class="nav-main"' , $nav_main);?>
            
            <?php if (Auth::is_logged_in()): ?>
            <center style=" position: absolute; width: 100%; margin-left: -50px; ">
                <div class="settings">
                	<a href="<?php echo site_url('characters/bio');?>"><i class="fas fa-address-card"></i></a>
                	<a href="<?php echo site_url('user/account');?>"><i class="fas fa-user-cog"></i></a>
                    <a href="<?php echo site_url('user/options');?>"><i class="fas fa-cog"></i></a>
                </div>
                <div class="alerts">
                	<?php echo panel_inbox(TRUE, TRUE, FALSE, '(x)', img($panel['inbox']));?>
                	<?php echo panel_writing(TRUE, TRUE, FALSE, '(x)', img($panel['writing']));?>
                </div>
            </center>
            <?php endif;?>
		</div>

		<div id="body">
		    <?php if($theme_settings['dark_mode_button']){
                if($darkMode == "enabled"){?>
                    <div class="mode-toggle toggle-light-mode show">
    		            <i class="fas fa-moon fa-fw"></i>
    		        </div>
    		        <div class="mode-toggle toggle-night-mode">
    		            <i class="fas fa-moon fa-fw"></i>
    		        </div>
                <?php } else {?>
                    <div class="mode-toggle toggle-night-mode show">
    		            <i class="fas fa-moon fa-fw"></i>
    		        </div>
    		        <div class="mode-toggle toggle-light-mode">
    		            <i class="fas fa-moon fa-fw"></i>
    		        </div>
                <?php }
            }?>
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
    					                <?php echo $nav_main;?>
    					            </div>
    					        </div>
    					    </div>
    					</div>
    				</div>
				</div>
			</div>
			<?php if (Auth::is_logged_in()): ?>
			<div class="control-bar">
			    <div class="container">
    			    <div class="row">
        			    <div class="col s12 m4 l4">
        			        <?php 
        			        if ($this->auth->is_logged_in()):
				                $session = $this->session->userdata('userid');
                				$query = "SELECT name, date_of_birth, location, main_char FROM nova_users WHERE userid = '$session'";
                				include APPFOLDER . '/config/database.php';
                				$conn = mysqli_connect($db['default']['hostname'], $db['default']['username'], $db['default']['password'], $db['default']['database']);
                				$fetch = mysqli_query($conn, $query);
                				$user = mysqli_fetch_row($fetch);
                				$name = $user[0];

				                echo '<b>Welcome to the '.$this->options['sim_name'].', '.$name.'!</b>';
				                mysqli_close($conn);
				            endif;
	                    	?>
        			    </div>
        			    <div class="col s12 m4 l4">
                            <div class="settings">
                            	<a href="<?php echo site_url('characters/bio');?>"><i class="fas fa-address-card"></i></a>
                            	<a href="<?php echo site_url('user/account');?>"><i class="fas fa-user-cog"></i></a>
                            	<a href="<?php echo site_url('user/options');?>"><i class="fas fa-cog"></i></a>
                            </div>
                        </div>
        			    <div class="col s12 m4 l4">
                            <div class="alerts">
                            	<?php echo panel_inbox(TRUE, TRUE, FALSE, '(x)', img($panel['inbox']));?>
                            	<?php echo panel_writing(TRUE, TRUE, FALSE, '(x)', img($panel['writing']));?>
                            </div>
                        </div>
                    </div>
                </div>
			</div>
			<?php endif;?>
            <div class="content">
    			<div class="container">
    			    <div class="row">
        			    <div class="col s12 m2 l2" style="float:right;">
        			        <div class="sub-nav">
        			            <?php echo str_replace('<ul' , '<ul class="nav nav-pills nav-justified"' , $nav_sub);?>
        			        </div>
        			    </div>
        			    <div class="col s12 m10 l10">
        			        <?php echo $flash_message;?>
            				<?php echo $content;?>
            				<?php echo $ajax;?>
        			    </div>
    			    </div>
    				<br>
    			</div>
    		</div>
		</div>
		<div class="footer">
		    <div class="container">
		        <div class="row">
                  <div class="col s12 m4 l4">
                      <div style="margin-top: 10px;">
                        &copy; <?php echo $this->options['sim_name'].' '.date("Y");?> &nbsp;|&nbsp; <a href="<?php echo site_url('main/credits');?>">Credits</a>
                      </div>
                  </div>
                  <div class="col s12 m4 l4">
                      <div style="margin-top: 10px;" class="center">
                          Powered by <a href="http://anodyne-productions.com/nova">Nova</a> &nbsp;|&nbsp; <a href="https://github.com/ewolf90/andromeda">Andromeda</a> designed by <a href="http://wolfsims.org">Emily</a>
                      </div>
                  </div>
                  <div class="col s12 m4 l4">
                      <div class="right">
                          <?php if($theme_settings['rating_show']){?>
                          <a href="http://rpgrating.com" class="rating-box">
                              <div class="rating-num rating-num-<?php echo $theme_settings['rating_language'];?>"><?php echo $theme_settings['rating_language'];?></div>
                              <div class="rating-num rating-num-<?php echo $theme_settings['rating_sex'];?>"><?php echo $theme_settings['rating_sex'];?></div>
                              <div class="rating-num rating-num-<?php echo $theme_settings['rating_violence'];?>"><?php echo $theme_settings['rating_violence'];?></div>
                          </a>&nbsp;
			  <?php } ?>
			  <?php if($theme_settings['license_show']){?>
                          <a href="<?php echo $theme_settings['license_link'];?>"><img style="<?php echo $theme_settings['license_styles'];?>" src="<?php echo $theme_settings['license_image'];?>"></a>
                          <?php }?>
                      </div>
                      <center>
                          <?php if($theme_settings['rating_show']){?>
                          <a href="http://rpgrating.com"><img src="https://rpgrating.com/ratings/<?php echo $theme_settings['rating_language'];echo $theme_settings['rating_sex'];echo $theme_settings['rating_violence'];?>.png" /></a> &nbsp;
                          <?php }?>
                          <?php if($theme_settings['license_show']){?>
                          <a href="<?php echo $theme_settings['license_link'];?>"><img style="<?php echo $theme_settings['license_styles'];?>" src="<?php echo $theme_settings['license_image'];?>"></a>
                          <?php }?>
                      </center>
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
    
        $(document).ready(function() {
          $(".animsition").animsition({
            inClass: 'fade-in-down-sm',
            outClass: 'fade-out-down-sm',
            inDuration: 1500,
            outDuration: 800,
            linkElement: '.animsition-link',
            // e.g. linkElement: 'a:not([target="_blank"]):not([href^="#"])'
            loading: true,
            loadingParentElement: 'body', //animsition wrapper element
            loadingClass: 'animsition-loading',
            loadingInner: '', // e.g '<img src="loading.svg" />'
            timeout: false,
            timeoutCountdown: 5000,
            onLoadEvent: true,
            browser: ['animation-duration', '-webkit-animation-duration'],
            // "browser" option allows you to disable the "animsition" in case the css property in the array is not supported by your browser.
            // The default setting is to disable the "animsition" in a browser that does not support "animation-duration".
            overlay: false,
            overlayClass: 'animsition-overlay-slide',
            overlayParentElement: 'body',
            transition: function(url) {
              window.location.href = url;
            }
          });
        });
      </script>

	</body>
</html>
