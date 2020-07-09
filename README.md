<div align="center"><span></span>

[![Version](https://img.shields.io/badge/Version-v1.0.0-brightgreen.svg "Version")](https://github.com/ewolf90/andromeda/releases/tag/v1.0.0) [![Nova](https://img.shields.io/badge/Nova-v2.6.1-orange.svg "Nova Version")](http://www.anodyne-productions.com/nova) [![PHP](https://img.shields.io/badge/PHP-v5.3.0-blue.svg "PHP Version")](https://www.php.net) 
[![License](https://img.shields.io/badge/license-BSD-red.svg)](https://opensource.org/licenses/MIT)

[Report a Bug](https://github.com/ewolf90/andromeda/issues) | [Contribute](https://github.com/ewolf90/andromeda/compare) </div>

## Overview
The <b>Andromeda Theme</b> is a modern, responsive theme for the <a href="http://www.anodyne-productions.com/nova">Nova 2</a> roleplay management platform. Andromeda offers extensive customization options unlike any other Nova theme. Users can select between light and dark modes of the theme without having to change their preferences, and administrators can edit CSS files directly from Nova's control panel. Andromeda was created by <a href="mailto:emily@wolfsims.org">Emily Wolf</a> and released under the <a href="https://github.com/ewolf90/andromeda/blob/master/LICENSE">BSD 3-Clause License</a>.

### Table of Contents
- [Getting Started](https://github.com/ewolf90/andromeda#getting-started)
  - [Installation](https://github.com/ewolf90/andromeda#installation)
  - [Improving and Redistributing](https://github.com/ewolf90/andromeda#improving-and-redistributing)
  - [Cookie Disclaimer](https://github.com/ewolf90/andromeda#cookie-disclaimer)
  - [Screenshots](https://github.com/ewolf90/andromeda#screenshots)
- [Configuration](https://github.com/ewolf90/andromeda#configuration)
  - [Dark Mode](https://github.com/ewolf90/andromeda#dark-mode)
  - [Game License](https://github.com/ewolf90/andromeda#game-license)
  - [Game Rating](https://github.com/ewolf90/andromeda#game-rating)
  - [Discord Widget](https://github.com/ewolf90/andromeda#discord-widget)
- [Customizing](https://github.com/ewolf90/andromeda#customizing)
  - [Header Image](https://github.com/ewolf90/andromeda#header-image)
  - [Stylesheets](https://github.com/ewolf90/andromeda#stylesheets)
  - [Font Awesome](https://github.com/ewolf90/andromeda#font-awesome)
  - [Rows & Columns](https://github.com/ewolf90/andromeda#rows--columns)
- [Support](https://github.com/ewolf90/andromeda#support)
- [Credits](https://github.com/ewolf90/andromeda#credits)
  - [License](https://github.com/ewolf90/andromeda#license)

## Getting Started
### Installation
1. Begin by downloading `andromeda.zip` of the latest release ([v1.0.0](https://github.com/ewolf90/andromeda/releases/tag/v1.0.0)). 
2. Upload the `/views/andromeda` folder into your website's `/application/views` folder. Ensure the theme's directory name is `andromeda`. Any other folder name will break the skin.
3. Upload the `/controllers/admin.php` file to `/application/controllers`. If you have a custom Admin controller, copy lines 16-40 into the `admin.php` file.
3. Login to your Nova website as a System Administrator. Navigate to `Control Panel > Site Management > Skin Catalogue` and click `Install` next to the `Andromeda` banner on the top of the page.

### Improving and Redistributing
- The Andromeda theme is **open source**, meaning anyone can use, edit, or redistribute the theme as long as the original [license and credits](https://github.com/ewolf90/andromeda/blob/master/LICENSE) remain intact.  
- **If you find a bug in the theme**, please submit a [bug report](https://github.com/ewolf90/andromeda/issues) through GitHub. 
- **If you find a solution to a bug**, please submit a [pull request](https://github.com/ewolf90/andromeda/compare) and contribute to the GitHub repository. :heart:
- **If you intend to redistribute Andromeda**, please upload a copy of your work to [Anodyne Xtras]() so the rest of the community can use it! This is not required in the license, but the community would greatly appreciate it! :blush:
- **If you copy elements of Andromeda for your theme/website** (including, but not limited to, dark mode, the stylesheet editor, or the configuration page) please include the original [license and credits](https://github.com/ewolf90/andromeda/blob/master/LICENSE).

### Cookie Disclaimer
This website uses a cookie to track each user's dark or light mode preference. This theme **does not** track user any other user data. 

### Screenshots

## Configuration
This theme offers several configuration options available in a built-in theme management panel. Once the theme is installed, any account with permission to access Nova's Skin Catalogue will have access to the following configuration options. The built-in panel is visible below the default admin sub-navigation menu (under `Theme Manager > Settings` or through `http://YOUR_WEBSITE.com/index.php/admin/theme`).

Alternatively, you can edit the configuration file located in `/andromeda/global/config.php` ([link](https://github.com/ewolf90/andromeda/blob/master/views/andromeda/global/config.php)).

### Dark Mode
The Andromeda theme uses **cookies** to track each user's preferred theme mode. The two options are "light" (default) and "dark" modes, which each user can change by clicking the icon on the bottom right corner of every page. The Theme Manager's Settings page allows administrators to set a default mode and control the visibility of the mode switcher.

> <img src="https://wolfsims.org/images/themes/andromeda/dark-mode.png">

### Game License
The Andromeda theme allows Game Managers to define a license for all of the content made available through the game's website. The recommended license is the [Creative Commons Attribution-NonCommercial-ShareAlike 4.0 International](http://creativecommons.org/licenses/by-nc-sa/4.0), which is pre-loaded into the theme. Game Managers are welcome to define a preferred license or no license at all.

> <img src="https://wolfsims.org/images/themes/andromeda/game-license.png">

### Game Rating
The Andromeda theme allows Game Managers to define a rating for the content on the game's website. The theme uses the [RPG Rating](https://rpgrating.com) system to define content through an image in the site's footer. The theme accepts input for language, sex, and violence on a scale of 0-3. Game Managers also have the ability to turn off this feature.

> <img src="https://wolfsims.org/images/themes/andromeda/game-rating.png">

### Discord Widget
The Andromeda theme has an option to add a Discord widget to the sidebar of the Admin Control Panel. Your Discord server must have the Server Widget enabled (`Server Settings > Widget > Enable Server Widget`). To enable this widget, copy your Server ID from Discord and place it in the appropriate location in the Theme Manager's Settings page. Game Managers can also edit other attributes of the widget, such as the default theme, height, width, and CSS styles.

> <img src="https://wolfsims.org/images/themes/andromeda/discord-widget.png">

## Customizing
### Header Image 
To add a custom header image, replace the `header.jpg` image located in `/andromeda/global/images`. 

### Stylesheets
The Andromeda theme supports editing CSS files directly from Nova's control panel. The editor gives Game Managers access to four main CSS files used by this theme. Modifying or deleting any code may break this theme! Please test your changes before implementing any code. 

You can find original copies of the Andromeda's stylesheets in the theme's the [GitHub repository](https://github.com/ewolf90/andromeda):

- [style.css](https://github.com/ewolf90/andromeda/blob/master/views/andromeda/global/css/style.css)
- [structure.css](https://github.com/ewolf90/andromeda/blob/master/views/andromeda/global/css/structure.css)
- [tabs.css](https://github.com/ewolf90/andromeda/blob/master/views/andromeda/global/css/tabs.css)
- [dark.css](https://github.com/ewolf90/andromeda/blob/master/views/andromeda/global/css/dark.css)

> <img src="https://wolfsims.org/images/themes/andromeda/style-editor.png">

### Font Awesome
This theme uses the free version of the [Font Awesome 5](https://fontawesome.com) icon set. Several buttons throughout the theme use Font Awesome, but Game Managers are welcome to use the resource for other links (ex: social media buttons). 

To use Font Awesome, please follow the following format:

```html
<i class="fab fa-discord"></i>
```

This will display Font Awesome's Discord icon. 

To learn more about Font Awesome, view their [icon gallery](https://fontawesome.com/icons) or read their [documentation](https://fontawesome.com/how-to-use/on-the-web/referencing-icons/basic-use). 

### Rows & Columns
This theme supports responsive rows and columns using a 12-column grid. You can use this grid through the following format:

```html
<div class="row">
  <div class="col"></div>
  <div class="col"></div>
</div>
```

**Example using custom sizes:**

```html
<div class="row">
  <div class="col s12 m6 l3"></div>
  <div class="col s12 m6 l9"></div>
</div>
```
This will create two columns that take up the full width of a small device and half width on a medium-sized device. On larger devices, the first column will take up 1/4 (3/12) of the screen while the second column will take up 3/4 (9/12) of the screen.

## Support
If you need any help installing, configuring, or customizing this theme, please join [Anodyne's Discord server](https://discordapp.com/invite/7xtrzB7) and use the room #help. Otherwise, send me direct message on Discord (@Emily#6153) or [email me](mailto:emily@wolfsims.org).

## Credits
The **Andromeda Theme** was created by [Emily Wolf](mailto:emily@wolfsims.org) for the [Nova 2](http://www.anodyne-productions.com/nova) roleplay management system. This theme uses [Animsition](https://git.blivesta.com/animsition/) created by [Blivesta](https://www.blivesta.com/) and [Font Awesome](https://fontawesome.com).

### License 
Usage of the Andromeda theme is defined by the BSD 3-Clause License:<br>

> Copyright (c) 2020, Emily Wolf
> All rights reserved.
>
> Redistribution and use in source and binary forms, with or without
modification, are permitted provided that the following conditions are met:
>
> 1. Redistributions of source code must retain the above copyright notice, this
   list of conditions and the following disclaimer.
>
> 2. Redistributions in binary form must reproduce the above copyright notice,
   this list of conditions and the following disclaimer in the documentation
   and/or other materials provided with the distribution.
>
> 3. Neither the name of the copyright holder nor the names of its
   contributors may be used to endorse or promote products derived from
   this software without specific prior written permission.
>
> THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS"
AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE
IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE
DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT HOLDER OR CONTRIBUTORS BE LIABLE
FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL
DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR
SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER
CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY,
OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE
OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
