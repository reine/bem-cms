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
 * CMS Model
 *
 * Queries for all data related to the CMS module
 *
 * @package         BackEndManager
 * @subpackage      Models
 */
class Cms_model extends Base_model
{
	function __construct()
	{
		parent::__construct();

		$this->_prefix = $this->config->item('backendpro_table_prefix');
		$this->_TABLES = array(
			'Users' 		=> $this->_prefix . 'users',
            'UserProfiles' 	=> $this->_prefix . 'user_profiles'
        );

		log_message('debug','BackEndManager : Cms_model class loaded');
	}
}


/* End of file: cms_model.php */
/* Location: ./models/cms_model.php */