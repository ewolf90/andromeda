<?php
/*
|---------------------------------------------------------------
| CONFIGURATION FILE
|---------------------------------------------------------------
|
| Andromeda Theme by Emily Wolf
|
| File: application/views/andromeda/global/config.php
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

$theme_settings = array(
    // Dark Mode
    'dark_mode' => false,
    'dark_mode_button' => true,
    
    // Discord Widget
    'discord_show' => false,
    'discord_server_id' => 'SERVER_ID',
    'discord_theme' => 'dark',
    'discord_height' => '350px',
    'discord_width' => '90%',
    'discord_styles' => 'margin-bottom:35px;',
        
    // Game Rating
    'rating_show' => true,
    'rating_language' => '1',
    'rating_sex' => '1',
    'rating_violence' => '1',
        
    // Game License
    'license_show' => true,
    'license_link' => 'http://creativecommons.org/licenses/by-nc-sa/4.0',
    'license_image' => 'https://i.creativecommons.org/l/by-nc-sa/4.0/88x31.png',
    'license_styles' => 'border-width:0'
);
?>
