<<<<<<< HEAD
##### Child Theme Setup #####
Contributor: Serafino Corriero

Tags: child-theme

Requires at least: 4.5

Tested up to: 4.6.1

**Description**
If not exist, this plugin will create a plugin theme from parent theme

**Features**
Detects all themes installed, both child and parent theme

**Installation**
New plugin installation, please follow these steps

- Download the ch-th-gen.zip file into your favourite folder.
- From WordPress Admin, go to "Plugin" -> "Add new" -> "Load Plugin"from your favourite folder
- Click on "Activate Plugin"

**How to use**

- Log into WordPress Admin
- On the right side menu, click on Child-theme Gen
- On the page will be displayed all installed themes, in bold all **child themes** (if already installed)
- Insert parent-theme of which you want to create the theme "child", then click on "Save Changes"
- If all is ok, you will see the message "Child Theme xyz-child successfully created!"

**Notes**

To verify if is ok, go to "Appearance" -> "Themes", you will find the child-theme below with the father's theme image plus words "Child Image Theme"

The plugin has created three files: functions.php, screenshot.png, style.css

- Functions.php: contains code to append style.css AFTER the system load the parent's theme style.css.
- Screenshot.png: contains the image of the parent-theme with the words "Child Image Theme"
- Style.css contains headers so that WordPress Directory recognizes this theme as a child-theme.

# ch-th-gen
=======
# child-theme-generator
Create a WordPress child-theme from parent-theme
>>>>>>> a3d62e5547bb48a3fb5ea590a72b74e0870078a2
