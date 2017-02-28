<?php

/**
 * The file that defines the core plugin class
 *
 * A class definition that includes attributes and functions used across both the
 * public-facing side of the site and the admin area.
 *
 * @link       http://serafinocorriero.it
 * @since      1.0.0
 *
 * @package    Ch_Th_Gen
 * @subpackage Ch_Th_Gen/includes
 */

/**
 * The core functions class.
 *
 *
 * @since      1.0.0
 * @package    Ch_Th_Gen
 * @subpackage Ch_Th_Gen/includes
 * @author     Serafino Corriero <sercorrie@gmail.com>
 */
class Ch_Th_Gen_Functions {

	/**
	* Display current theme
	*
	* @since  1.0.0
	*/
	public function display_current_theme() {
		$running_theme = wp_get_theme();
		$add_child_string = "";
		if ($running_theme->parent() == true) {
<<<<<<< HEAD
			$add_child_string = " (" . $running_theme->parent() . " child theme)" ;
		}
		return esc_html( $running_theme->get( 'Name' ) ) . " - ver. " . esc_html( $running_theme->get( 'Version' ) ) . $add_child_string ;
=======
<<<<<<< HEAD
			$add_child_string = " (" . $running_theme->parent() . " child theme)" ;
		}
		return esc_html( $running_theme->get( 'Name' ) ) . " - ver. " . esc_html( $running_theme->get( 'Version' ) ) . $add_child_string ;
=======
			$add_child_string = " a " . $running_theme->parent() . " child-theme" ;
		}
		return esc_html( $running_theme->get( 'Name' ) ) . " (ver. " . esc_html( $running_theme->get( 'Version' ) ) .") $add_child_string" ;
>>>>>>> 04e399c2bcd6db7fe597004f420b9535202b339a
>>>>>>> 5e247be19e9a3c5ea51d83d15bf2fb894ed9f9af
	}

	/**
	* Setup child theme  
	*
	* @param  array $cleaned_scan
	* @since  1.0.0
	*/
	public function child_themes_setup() {
		$parent_themes = self::get_parent_themes();
		$runningTheme = wp_get_theme();
		$current_user = wp_get_current_user();
<<<<<<< HEAD
		printf( esc_html__('%1$s Create a child theme from a parent-theme %2$s', 'ch-th-gen'), '<h3>', '</h3>');
		printf( esc_html__('Theme active: %1$s %2$s', 'ch-th-gen'), self::display_current_theme(), '</p><hr />');
		printf( esc_html__('%1$s Select a parent theme from drop-down menu, then fill out the form (Note: %2$s all fields are optional) %3$s', 'ch-th-gen'), '<p>', '<u>', '</u></p>');
=======
<<<<<<< HEAD
		printf( esc_html__('%1$s Create a child theme from a parent-theme %2$s', 'ch-th-gen'), '<h3>', '</h3>');
		printf( esc_html__('Theme active: %1$s %2$s', 'ch-th-gen'), self::display_current_theme(), '</p><hr />');
		printf( esc_html__('%1$s Select a parent theme from drop-down menu, then fill out the form (Note: %2$s all fields are optional) %3$s', 'ch-th-gen'), '<p>', '<u>', '</u></p>');
=======
		echo "<h3>" . __("Create a child-theme from a parent-theme", "ch-th-gen") . "</h3>";
		echo __("Theme active: <b>", "ch-th-gen") . self::display_current_theme()  . " </b></p>";
		echo "<hr />";
		echo "<p>"  . __("Select a parent theme from drop-down menu, then fill out the form (Note: <u>all fields are optional</u>)", "ch-th-gen") . "<br />" ;
>>>>>>> 04e399c2bcd6db7fe597004f420b9535202b339a
>>>>>>> 5e247be19e9a3c5ea51d83d15bf2fb894ed9f9af
		?>
		<form method="post" action="" >
			<input type="hidden" name="hidden_field" value="Y">
			<fieldset>
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 5e247be19e9a3c5ea51d83d15bf2fb894ed9f9af
				<table>
					<tr>
						<td class="FBLabel">Parent theme:</td>
						<td class="FBInput">
							<select name="parent">
								<?php
								// array_push( $parent_themes, "-- Select an item --" );
								foreach ($parent_themes as $key => $value) {
									// if it's the current theme, make it selected
									if ($runningTheme->get('Name') == $parent_themes[$key]->get('Name')) {
										?>
										<option value="<?php echo $parent_themes[$key]->get_stylesheet(); ?>" selected="selected">
											<?php printf( esc_html__('%1$s (Active)', 'ch-th-gen' ), $parent_themes[$key] ); ?>
										</option>
										<?php
									} 
									else {
										?>
										<option value="<?php echo $parent_themes[$key]->get_stylesheet() ?>"><?php echo $parent_themes[$key] ?></option>
										<?php
									}
								}
								?>
							</select>
						</td>
						<td class="FBDescr"><?php esc_html_e(" Select a theme from drop-down menu (mandatory)", "ch-th-gen"); ?></span></td>
					</tr>
					<tr>
						<td class="FBLabel"><?php esc_html_e('Heading:', 'ch-th-gen'); ?></td> 
						<td class="FBInput"><input type="text" id="title" name="title" value=""></td>
						<td class="FBDescr"><?php esc_html_e(' Write an easy title to remember (i.e. \'The Green Giants\')', 'ch-th-gen') ?></span></td>
					</tr>
					<tr>
						<td class="FBLabel"><?php esc_html_e('Description:', 'ch-th-gen'); ?></td>
						<td class="FBInput"><input type="text" name="description" value=""></td>
						<td class="FBDescr"><?php esc_html_e(" Write a sentence about your job (i.e. 'Few tweaks to my baseball website')", "ch-th-gen") ?></td>
					</tr>
					<tr>
						<td class="FBLabel"><?php esc_html_e('Child Theme URL:', 'ch-th-gen'); ?></td>
						<td class="FBInput"><input type="text" name="url" value=""></td>
						<td class="FBDescr"><?php esc_html_e(" Enter the URL where to find out more (i.e. link to your article or post)", "ch-th-gen") ?></td>
					</tr>
					<tr>
						<td class="FBLabel"><?php esc_html_e('Author:', 'ch-th-gen'); ?></td>
						<td class="FBInput"><input type="text" name="author" value="<?php echo $current_user->display_name; ?>"></td>
						<td class="FBDescr"><?php esc_html_e(" Enter your name/nickname", "ch-th-gen") ?></td>
					</tr>
					<tr>
						<td class="FBLabel"><?php esc_html_e('Author URL:', 'ch-th-gen'); ?></td>
						<td class="FBInput"><input type="text" name="author-url" value="<?php echo $current_user->user_url; ?>"></td>
						<td class="FBDescr"><?php esc_html_e(" Enter your blog/website Home Page", "ch-th-gen") ?></td>
					</tr>
					<tr>
						<td class="FBLabel"><?php esc_html_e('Version:', 'ch-th-gen'); ?></td>
						<td class="FBInput"><input type="text" name="version" value="1.0"></td>
						<td class="FBDescr"><?php esc_html_e(" Early version, usually 1.0", "ch-th-gen") ?></td>
					</tr>
					<tr>
						<td class="FBLabel"><?php esc_html_e('Include GPL License:', 'ch-th-gen'); ?></td>
						<td class="FBInput">
							<select name="include-gpl">
								<option value="Yes"><?php esc_html_e('Yes', 'ch-th-gen'); ?></option>
								<option value="No"><?php esc_html_e('No', 'ch-th-gen'); ?></option>
							</select>
						</td>
						<td class="FBDescr"><?php esc_html_e(" Include the General Public License. ", "ch-th-gen"); ?>
								<a href="https://en.wikipedia.org/wiki/GNU_General_Public_License" target= "_blank">
									<?php esc_html_e('Click here to learn more', 'ch-th-gen'); ?></a></td>
					</tr>
				</table>
				</fieldset>
				<input type="submit" name="Submit" class="button-primary" value="<?php esc_html_e('Create new child theme', 'ch-th-gen'); ?>" />
			</form>
			<?php
			return $new_child_theme;
		}

		public function remove_child_theme() {

			$child_themes = self::get_child_themes();
			if ( !empty( $child_themes ) ) {
				$parent_themes = self::get_parent_themes();
				echo "<h4 class='warning'>";
				esc_html_e('It\'s STRONGLY recommended to save your jobs before continue, all deleted files will be lost!', 'ch-th-gen');
				echo "<br /></h4>";
				echo "<h3>";
				esc_html_e('Remove a child theme, then will switch to its parent-theme', 'ch-th-gen');
				echo "</h3>";
				printf( esc_html__('%1$s Active theme: %2$s', 'ch-th-gen'), '<p><b>', self::display_current_theme() );
				echo '</b></p>';
				?>
				<form method='post' action=''>
					<?php
				// <input type="hidden" name="hidden_remove" value="Y">
				// building child theme list
					esc_html_e('Click on radio button to choice one child theme, then, click on Remove button to delete it ', 'ch-th-gen');

					foreach ($child_themes as $key => $content) {
						?>
						<p><input type="radio" name="folder_to_remove" value="<?php echo $child_themes[$key]->get_stylesheet(); ?>">
							<?php echo "<b>" . $content . "</b> (" . $child_themes[$key]->get_template() . " child theme)<br />"; ?>
						</input>
						<input type="hidden" name="parent_to_restore" value="<?php echo $child_themes[$key]->get_template(); ?>"></p>
						<?php
					}
					?>
					<div id="remove" class="button-primary">
						<?php esc_html_e('Remove', 'ch-th-gen'); ?>
					</div>
					<div id="confirm">
						<?php esc_html_e('Are you really sure? ', 'ch-th-gen'); ?>	
						<input type="submit" class="button-primary" name="btn-confirm-remove"  value="<?php esc_html_e(' Confirm ', 'ch-th-gen'); ?>" />
					</div>
				</form>
				<?php
			} else {
				echo '<p><em>';
				esc_html_e('No child theme detected', 'ch-th-gen');
				echo '</em></p>';
			}
		}
<<<<<<< HEAD
=======
=======
				<ul>
					<li>
					<label class="FBLabel" for="parent">Parent theme: </label>
						<select name="parent">
							<?php
							// array_push( $parent_themes, "-- Select an item --" );
							foreach ($parent_themes as $key => $value) {
									// if it's the current theme, make it selected
								if ($runningTheme->get('Name') == $parent_themes[$key]->get('Name')) {
									?>
									<option class="FBInput" value="<?php echo $parent_themes[$key]->get_stylesheet(); ?>" selected="selected">
										<?php echo $parent_themes[$key] . __(" (Active)", "ch-th-gen"); ?>
									</option>
									<?php
								}
								else {
									?>
									<option class="FBInput" value="<?php echo $parent_themes[$key]->get_stylesheet() ?>"><?php echo $parent_themes[$key] ?></option>
									<?php
								}
							}
							?>
						</select>
						<span class="descr"><?php echo __(" Select a theme from drop-down menu (mandatory)", "ch-th-gen"); ?></span>
					</li>
					<li>
						<label class="FBLabel" for="title">Heading:</label> 
						<input type="text" id="title" name="title" value="" size="25">
						<span class="descr"><?php echo __(" Write an easy title to remember (i.e. 'The Green Giants')", "ch-th-gen") ?></span>
					</li>
					<li>
						<label class="FBLabel" for="description">Description: </label>
						<input type="text" name="description" value="" size="25">
						<span class="descr"><?php echo __(" Write a sentence about your job (i.e. 'Few tweaks to my baseball website')", "ch-th-gen") ?></span>
					</li>
					<li>
						<label class="FBLabel" for="url">Child Theme URL: </label>
						<input type="text" name="url" value=""  size="25">
						<span class="descr"><?php echo __(" Enter the URL where to find out more (i.e. link to your article or post)", "ch-th-gen") ?></span>
					</li>
					<li>
						<label class="FBLabel" for="author">Author: </label>
						<input type="text" name="author" value="<?php echo $current_user->display_name; ?>" size="25">
						<span class="descr"><?php echo __(" Enter your name/nickname", "ch-th-gen") ?></span>
					</li>
					<li>
						<label class="FBLabel" for="author-url">Author URL: </label>
						<input type="text" name="author-url" value="<?php echo $current_user->user_url; ?>" size="25">
						<span class="descr"><?php echo __(" Enter your blog/website Home Page", "ch-th-gen") ?></span>
					</li>
					<li>
						<label class="FBLabel" for="version">Version: </label>
						<input type="text" name="version" value="1.0" size="25">
						<span class="descr"><?php echo __(" Early version, usually 1.0", "ch-th-gen") ?></span>
					</li>
					<li>
					<label class="FBLabel" for="include-gpl">Include GPL License</label>
						<select name="include-gpl">
							<option class="FBInput" value="Yes">Yes</option>
							<option class="FBInput" value="No">No</option>
						</select>
						<span class="descr"><?php echo __(" Include the General Public License. ", "ch-th-gen") . '<a href="https://en.wikipedia.org/wiki/GNU_General_Public_License" target= "_blank">Learn more</a>'; ?></span>
					</li>
				</ul>
				<br />
				<input type="submit" name="Submit" class="button-primary" value="<?php echo __('Create it!', 'ch-th-gen'); ?>" />		
			</fieldset>
		</form>
		<?php
		return $new_child_theme;
	}

	public function remove_child_theme() {

		$child_themes = self::get_child_themes();
		if ( !empty( $child_themes ) ) {
			echo "<h4 class='warning'>" . __("It's STRONGLY recommended to backup your files before continue, all deleted files will be lost!", "ch-th-gen") . "<br /></h4>";
			$parent_themes = self::get_parent_themes();
			echo "<h3>" . __("Remove a child-theme and it will switch to its parent-theme", "ch-th-gen") . "</h3>";
			echo "<p>"  . __("Active theme: ", "ch-th-gen") . "<b>" . self::display_current_theme() . ".</b>";
			?>
			<form method='post' action=''>
				<?php
				// <input type="hidden" name="hidden_remove" value="Y">
				// building child-theme list
				echo  __("Click on radio button to choice one child-theme, then, click on 'Remove' button to delete it ", "ch-th-gen");

				foreach ($child_themes as $key => $content) {
					?>
					<p><input type="radio" name="folder_to_remove" value="<?php echo $child_themes[$key]->get_stylesheet(); ?>">
						<?php echo "<b>" . $content . "</b> (a " . $child_themes[$key]->get_template() . " child-theme)<br />"; ?>
					</input>
					<input type="hidden" name="parent_to_restore" value="<?php echo $child_themes[$key]->get_template(); ?>"></p>
					<?php
				}
				?>
				<div id="remove" class="button-primary">
					<?php echo __(' Remove ', 'ch-th-gen'); ?>
				</div>
				<div id="confirm">
					<?php echo __('Are you really sure? ', 'ch-th-gen'); ?>	
					<input type="submit" class="button-primary" name="btn-confirm-remove"  value="<?php echo __(' Confirm ', 'ch-th-gen'); ?>" />
				</div>
			</form>
			<?php
		} else {
			echo "<p><em>" . __("No child-theme detected", "ch-th-gen") . "</em></p>";
		}
	}
>>>>>>> 04e399c2bcd6db7fe597004f420b9535202b339a
>>>>>>> 5e247be19e9a3c5ea51d83d15bf2fb894ed9f9af

	/**
	 * Remove files and themes' folder
	 *
	 * @since  1.0.0
	 */
	public function delete_theme_folder( $folder_to_remove, $parent_to_restore ) {
		$response = array();
		$dir_to_remove = get_theme_root() . '/' . $folder_to_remove;
		$files_to_remove = glob( $dir_to_remove . '/*'); //get all file names
		if ( is_dir( $dir_to_remove ) ) {
			foreach( $files_to_remove as $content ) {
				if( is_file( $content) )
		    	unlink( $content ); //delete file
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 5e247be19e9a3c5ea51d83d15bf2fb894ed9f9af
		    $response[$content] = "<p><span class='dashicons dashicons-yes'></span>" . esc_html__("Deleting file ", "ch-th-gen") . "<b>$content</b> " . "</p>";
		}
		rmdir( $dir_to_remove);
		$response[$dir_to_remove] = "<p><span class='dashicons dashicons-yes'></span>". esc_html__("Deleting folder ", "ch-th-gen") . "<b>$dir_to_remove</b> " . "</p>";
		switch_theme( $parent_to_restore );
		$response[$parent_to_restore] = "<p><span class='dashicons dashicons-yes'></span>" . esc_html__("Switching to ", "ch-th-gen") .  "<b>$parent_to_restore</b> theme" . "</p>";
	} else {
		$response[$folder_to_remove] = "<p><span class='dashicons dashicons-dismiss'> </span>" . esc_html__("Error deleting ", "ch-th-gen") . "<b>" . $folder_to_remove . ", </b> " . esc_html__("theme folder not found!", "ch-th-gen") . "</p>";
<<<<<<< HEAD
=======
=======
		    $response[$content] = "<p><span class='dashicons dashicons-yes'></span>" . __("Deleting file ", "ch-th-gen") . "<b>$content</b> " . "</p>";
		}
		rmdir( $dir_to_remove);
		$response[$dir_to_remove] = "<p><span class='dashicons dashicons-yes'></span>". __("Deleting folder ", "ch-th-gen") . "<b>$dir_to_remove</b> " . "</p>";
		switch_theme( $parent_to_restore );
		$response[$parent_to_restore] = "<p><span class='dashicons dashicons-yes'></span>" . __("Switching to ", "ch-th-gen") .  "<b>$parent_to_restore</b> theme" . "</p>";
	} else {
		$response[$folder_to_remove] = "<p><span class='dashicons dashicons-dismiss'></span>" . __("Error deleting ", "ch-th-gen") . "<b>" . $folder_to_remove . " </b>, " . __(" theme folder not found!", "ch-th-gen") . "</p>";
>>>>>>> 04e399c2bcd6db7fe597004f420b9535202b339a
>>>>>>> 5e247be19e9a3c5ea51d83d15bf2fb894ed9f9af
		$response['alert'] = -1;
	}
	return $response;
}


	/**
	 * Return an array of child themes
	 *
	 * @param  none
	 * @since  1.0.0
	 * @return null
	 */
	public function get_child_themes() {
		// getting all installed themes
		$all_themes = wp_get_themes();
		$child_themes = array();

		// building and return only parent-themes array
		foreach ($all_themes as $theme){
			if ($theme->parent() == true) {
				$child_themes[] = $theme;
			}
		}
		return $child_themes;
	}

	/**
	 * Return an array of parent themes
	 *
	 * @param  none
	 * @since  1.0.0
	 * @return null
	 */
	public function get_parent_themes() {
		// getting all installed themes
		$all_themes = wp_get_themes();
		$parent_themes = array();
		// building and return only parent-themes array
		foreach ($all_themes as $theme) {
			if ($theme->parent() == false) {
				$parent_themes[] = $theme;
			}
		}
		return $parent_themes;
	}

	/**
	 * Building files for child theme
	 *
	 * @since  1.0.0
	 */
	public function files_generation($new_child_theme, $results) {

		$child_name_dir=get_theme_root() . '/' . $new_child_theme['text-domain'];

		if ( is_dir( $child_name_dir ) ) {
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 5e247be19e9a3c5ea51d83d15bf2fb894ed9f9af
			$results['folder'] = 
			"<p><span class='dashicons dashicons-dismiss'></span>"
			. esc_html__("Error: cannot create ", "ch-th-gen") 
			. "<b>" . $new_child_theme['text-domain'] . " </b>" . 
			"child theme, " 
			. esc_html__("existing folder.", "ch-th-gen") . "</p>" . 
<<<<<<< HEAD
=======
=======
			$results['folder'] = "<p><span class='dashicons dashicons-dismiss'></span>" . __("Error: Can't create <b>", "ch-th-gen") . $new_child_theme['text-domain'] . " </b>child-theme, " . __("existing folder.", "ch-th-gen") . "</p>" . 
>>>>>>> 04e399c2bcd6db7fe597004f420b9535202b339a
>>>>>>> 5e247be19e9a3c5ea51d83d15bf2fb894ed9f9af
			"<p>" . $child_name_dir . "</p>";
			$results['alert'] = -1;
			return $results;
		}
        // creating child folder
		if ( wp_mkdir_p( $child_name_dir ) ) {
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 5e247be19e9a3c5ea51d83d15bf2fb894ed9f9af
			$results['folder']= 
			'<p><span class="dashicons dashicons-yes"></span>' 
			. esc_html__('Writing ', 'ch-th-gen') 
			. ' <b>' . $new_child_theme['text-domain'] . '</b></p>';
		} else {
			$results['folder']= 
			'<p><span class="dashicons dashicons-dismiss"></span>' 
			. esc_html__('Error: cannot create ', 'ch-th-gen') 
			. '<b>' . $new_child_theme['text-domain'] .'</b> '
			. esc_html__('This folder is read-only: ', 'ch-th-gen')
			. $child_name_dir . '</p><br />';
<<<<<<< HEAD
=======
=======
			$results['folder']= "<p><span class='dashicons dashicons-yes'></span>" . __("Writing ", "ch-th-gen") . "<b>" . $new_child_theme['text-domain'] . '</b>' . __(" folder ", "ch-th-gen") . "</p>";
		} else {
			$results['folder']= "<p><span class='dashicons dashicons-dismiss'></span>" . __("Error: can't create <b>", "ch-th-gen") . $new_child_theme['text-domain'] .'</b> user '. $new_child_theme['author'] . __("does not have write access to this folder", "ch-th-gen") . "</p><br />" . 
			$child_name_dir . 
>>>>>>> 04e399c2bcd6db7fe597004f420b9535202b339a
>>>>>>> 5e247be19e9a3c5ea51d83d15bf2fb894ed9f9af
			$results['alert'] = -1;
			return $results;
		}

		$results = self::create_style_css( $new_child_theme, $results );
		$results = self::create_functions_php( $new_child_theme, $results );
		$results = self::create_screenshot_png( $new_child_theme, $results );

		return $results;

	}

	/**
	 * Create Style.css
	 *
	 * @since 		1.0.0
	 * @return 		mixed 			The settings field
	 */	
	public function create_style_css( $new_child_theme, $results ) {
		// style.css header content
		$txt = "";
		$txt .= "/*\n";
		$txt .= "Theme Name:   " . $new_child_theme['title'] . "\n";
		$txt .= "Description:  " . $new_child_theme['description'] . "\n";
		$txt .= "Author:       " . $new_child_theme['author'] . "\n";
		$txt .= "Author URL:   " . $new_child_theme['author-url'] . "\n";			
		$txt .= "Template:     " . $new_child_theme['parent'] . "\n";
		$txt .= "Version:      " . $new_child_theme['version'] . "\n";
			// insert GPL License Terms
		if ( $new_child_theme['include-gpl'] == 'Yes') {
			$txt .= "License:      GNU General Public License v2 or later\n";
			$txt .= "License URI:  http://www.gnu.org/licenses/gpl-2.0.html\n";
		}
		$txt .= "Text Domain:  " . $new_child_theme['text-domain'] . "\n";
		$txt .= "*/\n\n";
		$txt .= "/* ";
		$txt .=  esc_html__('Write here your own personal stylesheet', 'ch-th-gen');
		$txt .= " */\n";
		$style_css = get_theme_root() . '/' . $new_child_theme['text-domain'] ."/style.css";

		if (file_put_contents($style_css, $txt,  FILE_APPEND | LOCK_EX)) {
<<<<<<< HEAD
			chmod($style_css, 0777);
=======
			// chmod($style_css, 0777);
<<<<<<< HEAD
>>>>>>> 5e247be19e9a3c5ea51d83d15bf2fb894ed9f9af
			$results['style'] = 
			'<p><span class="dashicons dashicons-yes"></span>'
			. esc_html__('Writing', 'ch-th-gen') 
			. ' <b>style.css</b></p>';
			return $results;
		} else {
			$results['style'] = 
			'<p><span class="dashicons dashicons-dismiss"></span>'
			. esc_html__('Error: cannot write style.css, permission denied', 'ch-th-gen') . '</p>';
<<<<<<< HEAD
=======
=======
			$results['style'] = "<p><span class='dashicons dashicons-yes'></span>" . __("Writing <b>style.css</b> ", "ch-th-gen") . "</p>";
			return $results;
		} else {
			$results['style'] = "<p><span class='dashicons dashicons-dismiss'></span>" . __("Error: can't write style.css, permission denied", "ch-th-gen") . "</p>";
>>>>>>> 04e399c2bcd6db7fe597004f420b9535202b339a
>>>>>>> 5e247be19e9a3c5ea51d83d15bf2fb894ed9f9af
			$results['alert'] = -1;
			return $results;
		}
	}
	/**
	 * Create functions.php
	 *
	 * @since 		1.0.0
	 * @return 		mixed 			The settings field
	 */
	public function create_functions_php( $new_child_theme, $results ) {
		$fn_slug = str_replace( "-", "_", $new_child_theme['text-domain'] );
		// functions.php content
		$txt = "";
		$txt .= "<?php\n";
		$txt .= "/*";
		$txt .= esc_html__('This file is part of ', 'ch-th-gen' );
		$txt .= $new_child_theme['text-domain'] . ", " . $new_child_theme['parent'] . " child theme.\n\n";
		$txt .= esc_html__('All functions of this file will be loaded before of parent theme functions.', 'ch-th-gen') . "\n";
		$txt .= esc_html__('Learn more at ', 'ch-th-gen') . 'https://codex.wordpress.org/Child_Themes.' . "\n\n";
		$txt .= esc_html__('Note: this function loads the parent stylesheet before, then child theme stylesheet', 'ch-th-gen') . "\n";
		$txt .= esc_html__('(leave it in place unless you know what you are doing.)', 'ch-th-gen') . "\n*/\n\n";
		$txt .= "function " .  $fn_slug .  "_enqueue_child_styles() {\n";
		$txt .= '$parent_style' . " = 'parent-style'; \n";
		$txt .= "	wp_enqueue_style(" . '$parent_style' . ", get_template_directory_uri() . '/style.css' );\n";
		$txt .= "	wp_enqueue_style( \n";
		$txt .= "		'child-style', \n";
		$txt .= "		get_stylesheet_directory_uri() . '/style.css',\n"; 
		$txt .= "		array( " . '$parent_style' . " ),\n";
		$txt .= "		wp_get_theme()->get('Version') );\n";
		$txt .= "	}\n";
		$txt .= "add_action( 'wp_enqueue_scripts', '" . $fn_slug .  "_enqueue_child_styles' );\n\n";
		$txt .= "/*";
		$txt .= esc_html__('Write here your own functions', 'ch-th-gen') . " */\n";
		$functions_php = get_theme_root() . '/' . $new_child_theme['text-domain'] ."/functions.php";

		if (file_put_contents($functions_php, $txt, FILE_APPEND | LOCK_EX)) {
<<<<<<< HEAD
			chmod($functions_php, 0777);
=======
			// chmod($functions_php, 0777);
<<<<<<< HEAD
>>>>>>> 5e247be19e9a3c5ea51d83d15bf2fb894ed9f9af
			$results['functions'] = 
			"<p><span class='dashicons dashicons-yes'></span>" 
			. esc_html__("Writing ", "ch-th-gen")
			. "<b>functions.php</b></p>";
			return $results;
		} else {
			$results['functions'] = 
			"<p><span class='dashicons dashicons-dismiss'></span>"
			. esc_html__("Error: cannot write functions.php, permission denied", "ch-th-gen") . "</p>";
<<<<<<< HEAD
=======
=======
			$results['functions'] = "<p><span class='dashicons dashicons-yes'></span>" . __("Writing <b>functions.php</b> ", "ch-th-gen") . "</p>";
			return $results;
		} else {
			$results['functions'] = "<p><span class='dashicons dashicons-dismiss'></span>"  . __("Error: can't write functions.php, permission denied", "ch-th-gen") . "</p>";
>>>>>>> 04e399c2bcd6db7fe597004f420b9535202b339a
>>>>>>> 5e247be19e9a3c5ea51d83d15bf2fb894ed9f9af
			$results['alert'] = -1;
			return $results;
		}

	}
	/**
	 * Create screenshot.png
	 *
	 * @since 		1.0.0
	 * @return 		mixed 			The settings field
	 */
	public function create_screenshot_png( $new_child_theme, $results ) {

		// check parent-name's screenshot.png
<<<<<<< HEAD
		$parent_screenshot = WP_PLUGIN_DIR . '/child-theme-generator/admin/img/screenshot.png';
=======
<<<<<<< HEAD
		$parent_screenshot = WP_PLUGIN_DIR . '/ch-th-gen/admin/img/screenshot.png';
=======
		$parent_screenshot = get_theme_root() . '/' . $new_child_theme['parent'] . '/screenshot.png';
		if ( is_file( $parent_screenshot ) ) {
			$results['screenshot_parent'] = "<p><span class='dashicons dashicons-yes'></span>" . __("Found <em>screenshot.png</em> in " . $new_child_theme['parent'] . " directory, this file will be used.", "ch-th-gen") . "</p>";
		} else {
			$parent_screenshot = WP_PLUGIN_DIR . '/ch-th-gen/admin/img/screenshot.png';
			$results['screenshot_parent'] = "<p>" . __("Missing <em>screenshot.png</em> in " . $new_child_theme['parent'] ." directory, a plugin's image will be used." , "ch-th-gen") . "</p>";			
		}
>>>>>>> 04e399c2bcd6db7fe597004f420b9535202b339a
>>>>>>> 5e247be19e9a3c5ea51d83d15bf2fb894ed9f9af

		// child-name's screenshot.png path
		$child_screenshot_path = get_theme_root() . '/' . $new_child_theme['text-domain'] . '/screenshot.png';
		// Set Path to Font File
<<<<<<< HEAD
		$font_path = WP_PLUGIN_DIR . '/child-theme-generator/admin/fonts/OpenSans/OpenSans-Regular.ttf';
=======
		$font_path = WP_PLUGIN_DIR . '/ch-th-gen/admin/fonts/OpenSans/OpenSans-Regular.ttf';
>>>>>>> 5e247be19e9a3c5ea51d83d15bf2fb894ed9f9af

		// Create Image From Existing File
		$png_image = imagecreatefrompng($parent_screenshot);

		// Get image width / height
		$dims_img = getimagesize($parent_screenshot);

		// image center coordinates
		$l_center = intval($dims_img['0']) / 2;
		$h_center = intval($dims_img['1']) / 2;

		// image-text dimensions
		$l_text = intval($dims_img['0']);
		$h_text = intval($dims_img['0'])/4;

		// Set rectangle coordinates 
		$x_rect_upper_left  = 0;
		$y_rect_upper_left  = $h_center + intval($h_text)/2;
		$x_rect_lower_right = intval($dims_img['0']);
		$y_rect_lower_right = $h_center - intval($h_text)/2;

		// text coordinates
		$x_text_upper_left = $l_text*5/100 ;
		$y_text_upper_left = $h_center - $h_text*3/100;

		// shadow text coordinates
		$x_shadow_upper_left = $x_text_upper_left + 5;
		$y_shadow_upper_left = $y_text_upper_left + 5;

		// Set angle and font size
		$font_size = intval($h_center*10/100);
		$angle = 0;

		// SetUp a colour For The Text
		$white 		= imagecolorallocate( $png_image, 255, 255, 255 );
		$black 		= imagecolorallocate( $png_image,   0,   0,   0 );
		$grey 		= imagecolorallocate( $png_image, 128, 128, 128 );
		$light_blue = imagecolorallocate( $png_image, 132, 157, 230 );

		// Set Text to Be Printed On Image
		$line_1 = $new_child_theme['title'] . "\n";
		$line_2 = "(a " . $new_child_theme['parent'] . " child theme)\n";
		
		// Print Text On Image
		imagefilledrectangle( $png_image,  $x_rect_upper_left, $y_rect_upper_left, $x_rect_lower_right, $y_rect_lower_right, $light_blue );
		imagettftext( $png_image, $font_size, $angle, $x_text_upper_left,   $y_text_upper_left,   $grey,  $font_path, $line_1 );
		imagettftext( $png_image, $font_size, $angle, $x_shadow_upper_left, $y_shadow_upper_left, $white, $font_path, $line_1 );
		imagettftext( $png_image, intval( $font_size*( 1-50/100 ) ), $angle, $x_text_upper_left, $y_text_upper_left + 80, $grey,  $font_path, $line_2 );
		imagettftext( $png_image, intval( $font_size*( 1-50/100) ), $angle, $x_shadow_upper_left, $y_shadow_upper_left + 80, $white, $font_path, $line_2 );	

		// Send Image to Folder
		if ( imagepng( $png_image, $child_screenshot_path ) ) {

			imagedestroy( $png_image ); // Clear Memory

<<<<<<< HEAD
			chmod( $png_image, 0777 );
=======
			// chmod( $png_image, 0777 );
<<<<<<< HEAD
>>>>>>> 5e247be19e9a3c5ea51d83d15bf2fb894ed9f9af
			$results['screenshot'] = 
			"<p><span class='dashicons dashicons-yes'></span>" 
			. esc_html__('Writing ', 'ch-th-gen') 
			. "<b>screenshot.png</b><br /></p>";
			return $results; 	
		} else {

			$results['screenshot'] = 
			"<p><span class='dashicons dashicons-dismiss'></span>" 
			. esc_html__('Error: cannot write screenshot.png, permission denied', 'ch-th-gen') .'</p>';
<<<<<<< HEAD
=======
=======
			$results['screenshot'] = "<p><span class='dashicons dashicons-yes'></span>" . __("Writing <b>screenshot.png</b> ", "ch-th-gen") . "<br /></p>";
			return $results; 	
		} else {

			$results['screenshot'] = "<p><span class='dashicons dashicons-dismiss'></span>" . __("Error: can't write <em>screenshot.png</em>, permission denied", "ch-th-gen") ."</p>";
>>>>>>> 04e399c2bcd6db7fe597004f420b9535202b339a
>>>>>>> 5e247be19e9a3c5ea51d83d15bf2fb894ed9f9af
			$results['alert'] = -1;
			return $results;
		}
	}

}