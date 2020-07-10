<?php 
/*
|---------------------------------------------------------------
| PAGE - LOGIN INDEX
|---------------------------------------------------------------
|
| Andromeda Theme by Emily Wolf
|
| File: application/views/andromeda/login/pages/login_index.php
| Version: 1.0
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

if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<?php echo text_output($header, 'h1', 'page-head');?>

<?php echo form_open('login/check_login');?>
	<br /><p>
		<kbd><?php echo $label['email'];?></kbd>
		<?php echo form_input($inputs['email']);?>
	</p>
	
	<p>
		<kbd><?php echo $label['password'];?></kbd>
		<?php echo str_replace('<input' , '<input id="password"' , form_password($inputs['password']));?>
	</p>
	
	<p>
		<label class="show-password" for="show-password"><strong>Show Password</strong></label>
		<input type="checkbox" onclick="showPassword()">
	</p>
	
	<p>
		<label class="remember" for="remember"><strong><?php echo $label['remember'];?></strong></label>
		<?php echo form_checkbox($inputs['remember_me']);?>
	</p>
	
	<br /><p><?php echo form_button($button_login);?></p>
<?php echo form_close();?>

<script>
function showPassword() {
  var x = document.getElementById("password");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
