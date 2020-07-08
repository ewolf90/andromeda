<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<h1 class="page-head">Andromeda Theme Styles</h1>

<?php
    if(isset($_POST['submit'])){
        // Define the CSS file locations
        $css_style = APPFOLDER . '/views/andromeda/global/css/style.css';
        $css_structure = APPFOLDER . '/views/andromeda/global/css/structure.css';
        $css_tabs = APPFOLDER . '/views/andromeda/global/css/tabs.css';
        $css_dark = APPFOLDER . '/views/andromeda/global/css/dark.css';
        
        // Delete the old style.css file
        unlink($css_style);
        
        // Create the new style.css file
        $the_file = fopen($css_style, 'w') or die('Cannot open file:  '.$css_style);
        
        // Write to the new style.css file
        $settings = $_POST['cssStyle'];
        fwrite($the_file, $settings);
        
        // Close the style.css file
        fclose($the_file);
        
        
        // Delete the old structure.css file
        unlink($css_structure);
        
        // Create the new structure.css file
        $the_file = fopen($css_structure, 'w') or die('Cannot open file:  '.$css_structure);
        
        // Write to the new structure.css file
        $settings = $_POST['cssStructure'];
        fwrite($the_file, $settings);
        
        // Close the structure.css file
        fclose($the_file);
        
        
        // Delete the old tabs.css file
        unlink($css_tabs);
        
        // Create the new tabs.css file
        $the_file = fopen($css_tabs, 'w') or die('Cannot open file:  '.$css_tabs);
        
        // Write to the new tabs.css file
        $settings = $_POST['cssTabs'];
        fwrite($the_file, $settings);
        
        // Close the tabs.css file
        fclose($the_file);
        
        
        // Delete the old dark.css file
        unlink($css_dark);
        
        // Create the new dark.css file
        $the_file = fopen($css_dark, 'w') or die('Cannot open file:  '.$css_dark);
        
        // Write to the new dark.css file
        $settings = $_POST['cssDark'];
        fwrite($the_file, $settings);
        
        // Close the dark.css file
        fclose($the_file);
        
        unset($_POST['submit']);
        
        echo '<div class="flash_message flash-success"><p>Andromeda theme settings saved.</p></div>';
    }
    
    $styles = array();
    
    $file = fopen(APPFOLDER . "/views/andromeda/global/css/style.css","rb");
    $pageText = fread($file,filesize(APPFOLDER . "/views/andromeda/global/css/style.css"));
    $styles['style.css'] = $pageText;
    fclose($file);
    
    $file = fopen(APPFOLDER . "/views/andromeda/global/css/structure.css","rb");
    $pageText = fread($file,filesize(APPFOLDER . "/views/andromeda/global/css/structure.css"));
    $styles['structure.css'] = $pageText;
    fclose($file);
    
    $file = fopen(APPFOLDER . "/views/andromeda/global/css/tabs.css","rb");
    $pageText = fread($file,filesize(APPFOLDER . "/views/andromeda/global/css/tabs.css"));
    $styles['tabs.css'] = $pageText;
    fclose($file);
    
    $file = fopen(APPFOLDER . "/views/andromeda/global/css/dark.css","rb");
    $pageText = fread($file,filesize(APPFOLDER . "/views/andromeda/global/css/dark.css"));
    $styles['dark.css'] = $pageText;
    fclose($file);
?>

<?php echo form_open('admin/styles');?>
	
	<h3 class="page-subhead">Stylesheets</h3>
	<p><b>WARNING:</b> Modifying or deleting any code below may break this theme! Please test your changes before implementing any code. You can find original copies of this theme's stylesheets on GitHub.</p>
	<br>
	<p>
	    <kbd><b>File:</b> style.css<br><b>Location:</b> <code>/application/views/andromeda/global/css/style.css</code></kbd>
	    <textarea class="code" name="cssStyle" rows="20"><?php echo $styles['style.css'];?></textarea>
	</p><br><br>
	
	<p>
	    <kbd><b>File:</b> structure.css<br><b>Location:</b> <code>/application/views/andromeda/global/css/structure.css</code></kbd>
	    <textarea class="code" name="cssStructure" rows="20"><?php echo $styles['structure.css'];?></textarea>
	</p><br><br>
	
	<p>
	    <kbd><b>File:</b> tabs.css<br><b>Location:</b> <code>/application/views/andromeda/global/css/tabs.css</code></kbd>
	    <textarea class="code" name="cssTabs" rows="20"><?php echo $styles['tabs.css'];?></textarea>
	</p><br><br>
	
	<p>
	    <kbd><b>File:</b> dark.css<br><b>Location:</b> <code>/application/views/andromeda/global/css/dark.css</code></kbd>
	    <textarea class="code" name="cssDark" rows="20"><?php echo $styles['dark.css'];?></textarea>
	</p><br><br>
	
	<button type="submit" name="submit" value="Submit" class="button-main">Save Settings</button>
<?php echo form_close();?>