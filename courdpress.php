<?php
/**
 * Plugin Name: CourdPress
 * Plugin URI: https://github.com/coolcourd/courdpress
 * GitHub Plugin URI: https://github.com/coolcourd/courdpress
 * Description: How much can you CourdPress?
 * Version: 1.0.2
 * Author: Courd Headman
 * Author URI: https://courd.ga
 *
 * This program is free software; you can redistribute it and/or modify it under the terms of the GNU
 * General Public License version 2, as published by the Free Software Foundation.  You may NOT assume
 * that you can use any other version of the GPL.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without
 * even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 * @package CourdPress
 * @version 1.0.2
 * @author Courd Headman <courdheadman@gmail.com>
 * @copyright Copyright (c) 2018, Courd Headman
 */

add_action("admin_menu", "addMenu");
function addMenu()
{
  add_menu_page("CourdPress", "CourdPress", 4, "courdpress", "HomePress");
  add_submenu_page("courdpress", "Shortcodes", "Shortcodes", 4, "shortcodes", "ShortPress");
}


require 'shortcodes.php';
require 'homepress.php';
require 'shortpress.php';
