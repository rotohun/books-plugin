<?php

/*
Plugin Name: Books
Description: Description
Plugin URI: http://ronaldhunter.co
Author: Ronald Hunter
Author URI: http://ronaldhunter.co
Version: 1.0
License: GPL2
Text Domain: Text Domain
Domain Path: Domain Path
*/

/*

    Copyright (C) 2015  Ronald Hunter  ronald@ronaldhunter.co

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

        
  if (! defined('ABSPATH')){
  	 exit;
  }    


 $dir = plugin_dir_path(__FILE__);

  require_once( $dir . 'wp-book-cpt.php');
  require_once ($dir . 'wp-book-fields.php');










