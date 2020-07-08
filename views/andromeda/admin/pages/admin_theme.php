<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<h1 class="page-head">Andromeda Theme Settings</h1>

<?php
    if(isset($_POST['submit'])){
        echo '<div class="flash_message flash-success"><p>Andromeda theme settings saved.</p></div>';
        // Define the config file location
        $config_file = APPFOLDER . '/views/andromeda/global/config.php';
        
        // Delete the old config file
        unlink($config_file);
        
        // Create the new config file
        $the_file = fopen($config_file, 'w') or die('Cannot open file:  '.$config_file);
        
        // Write to the new config file
        $settings = "<?php
    \$theme_settings = array(
        // Dark Mode
        'dark_mode' => ".$_POST['darkMode'].",
        'dark_mode_button' => ".$_POST['darkModeButton'].",
        
        // Game Rating
        'rating_show' => ".$_POST['ratingShow'].",
        'rating_language' => '".$_POST['ratingLanguage']."',
        'rating_sex' => '".$_POST['ratingSex']."',
        'rating_violence' => '".$_POST['ratingViolence']."',
        
        // Game License
        'license_show' => ".$_POST['licenceShow'].",
        'license_link' => '".$_POST['licenceLink']."',
        'license_image' => '".$_POST['licenceImage']."',
        'license_styles' => '".$_POST['licenceImageStyle']."'
    );
?>";
        fwrite($the_file, $settings);
        
        // Close the config file
        fclose($the_file);
        unset($_POST['submit']);
    }
    include APPFOLDER . '/views/andromeda/global/config.php';
?>

<?php echo form_open('admin/theme');?>
    <h3 class="page-subhead">Game Rating</h3>
    <p>This theme uses <a href="http://rpgrating.com/">RPG Rating</a> to display your game's rating. You can use this system to define acceptable content for your readers and writers. Each option uses a scale of 0-3.</p>
    <p>
        <kbd>Show Game Rating</kbd>
    	<input type="radio" id="ratingTrue" name="ratingShow" value="true" <?php if($theme_settings['rating_show']){echo "checked";}?>>
        <label for="ratingTrue">Yes</label><br>
        <input type="radio" id="ratingFalse" name="ratingShow" value="false" <?php if(!$theme_settings['rating_show']){echo "checked";}?>>
        <label for="ratingFalse">No</label>
    </p>
    <p>
	    <kbd>Language Rating</kbd>
	    <input type="number" value="<?php echo $theme_settings['rating_language'];?>" min="0" max="3" name="ratingLanguage">
	</p>
	
	<p>
	    <kbd>Sex Rating</kbd>
	    <input type="number" value="<?php echo $theme_settings['rating_sex'];?>" min="0" max="3" name="ratingSex">
	</p>
	
	<p>
	    <kbd>Violence Rating</kbd>
	    <input type="number" value="<?php echo $theme_settings['rating_violence'];?>" min="0" max="3" name="ratingViolence">
	</p><br>

	<h3 class="page-subhead">Game License</h3>
	<p>This theme uses the <a href="https://creativecommons.org/licenses/by-nc-sa/4.0/">Creative Commons Attribution-NonCommercial-ShareAlike 4.0 International</a> license by default. We suggest using a <a href="https://creativecommons.org/choose/">Creative Commons</a> license for your game, but you're welcome to use your preferred license.</p>
	<p>
        <kbd>Show Game License</kbd>
    	<input type="radio" id="licenseTrue" name="licenceShow" value="true" <?php if($theme_settings['license_show']){echo "checked";}?>>
        <label for="licenseTrue">Yes</label><br>
        <input type="radio" id="licenseFalse" name="licenceShow" value="false" <?php if(!$theme_settings['license_show']){echo "checked";}?>>
        <label for="licenseFalse">No</label>
    </p>
	<p>
	    <kbd>License Link</kbd>
	    <input type="text" value="<?php echo $theme_settings['license_link'];?>" name="licenceLink">
	</p>
	
	<p>
	    <kbd>Licence Image</kbd>
	    <input type="text" value="<?php echo $theme_settings['license_image'];?>" name="licenceImage">
	</p>

	<p>
		<kbd>License Image Styles</kbd>
		<textarea class="code" name="licenceImageStyle" rows="5"><?php echo $theme_settings['license_styles'];?></textarea>
	</p><br>
	
	<h3 class="page-subhead">Dark Mode</h3>
	<p>
	    <kbd>Default Color Scheme</kbd>
    	<input type="radio" id="darkModeFalse" name="darkMode" value="false" <?php if(!$theme_settings['dark_mode']){echo "checked";}?>>
        <label for="darkModeFalse">Light Mode</label><br>
        <input type="radio" id="darkModeTrue" name="darkMode" value="true" <?php if($theme_settings['dark_mode']){echo "checked";}?>>
        <label for="darkModeTrue">Dark Mode</label>
    </p>
    
    <p>
        <kbd>Show Dark/Light Mode Switch</kbd>
    	<input type="radio" id="darkModeButtonTrue" name="darkModeButton" value="true" <?php if($theme_settings['dark_mode_button']){echo "checked";}?>>
        <label for="darkModeButtonTrue">Yes</label><br>
        <input type="radio" id="darkModeButtonFalse" name="darkModeButton" value="false" <?php if(!$theme_settings['dark_mode_button']){echo "checked";}?>>
        <label for="darkModeButtonFalse">No</label>
    </p><br>
	
	<button type="submit" name="submit" value="Submit" class="button-main">Save Settings</button>
<?php echo form_close();?>