<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * BackEndManager CMS Module
 *
 * @package         BackEndManager
 * @author          Reina Sison-Gagno
 * @copyright       Copyright (c) 2014
 * @license         http://www.gnu.org/licenses/lgpl.html
 * @link 			https://github.com/reine/bem-cms
 * @filesource
 */

// ---------------------------------------------------------------------------

/**
 * Module Configurations
 *
 * Contains config settings for the CMS module
 *
 * @package         BackEndManager
 * @subpackage      Configurations
 */

/*
 |--------------------------------------------------------------------------
 | File & Template Locations
 |--------------------------------------------------------------------------
 */
$install_files_folder = APPPATH . 'modules/cms/files';
define('INSTALLPATH', $install_files_folder.'/');

$config['mod_install_template_dir'] 	= '';
$config['mod_install_template_admin']	= $config['mod_install_template_dir'] . 'install/';

/*
 |--------------------------------------------------------------------------
 | Database Table Prefix & Database Schema
 |--------------------------------------------------------------------------
 */
$config['mod_table_prefix'] = 'bem_cms_';
$config['mod_cms_install_db_file']	= INSTALLPATH . 'database_schema.sql';


/* End of file mod_cms.php */
/* Location: ./config/mod_cms.php */