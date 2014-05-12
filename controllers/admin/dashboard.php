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
 * Dashboard
 *
 * Display at-a-glance information or statistics for the CMS module
 *
 * @package         BackEndManager
 * @subpackage      Controllers
 */
class Dashboard extends Admin_Controller
{
	function __construct()
	{
		parent::__construct();

		// Load the required helpers, libraries & models
		$this->load->config('mod_cms');
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->model('cms_model');

		// Load the language file
		$this->lang->load('cms');

		// Set breadcrumbs
		$this->bep_site->set_crumb($this->lang->line('bem_cms'),'cms/admin/dashboard');

		// Check for access permission
		check('Content Management');

		log_message('debug','BackEndManager : Cms class loaded');
	}

	/**
	 * Displays the module's main (admin) dashboard
	 * 
	 * @access public
	 */
	function index()
	{
		// Check if module-related tables exist. If not, launch install wizard.
		if( ! $this->db->table_exists('bem_cms_articles') )
		{
			// Display Page
			$data['header'] = $this->lang->line('bem_cms');
			$data['page'] 	= $this->config->item('mod_install_template_admin') . "wizard";
			$data['module'] = 'cms';
			$this->load->view($this->_container,$data);
		}
		else
		{
			// Display Page
			$data['header'] = $this->lang->line('bem_cms');
			$data['page'] 	= $this->config->item('backendpro_template_admin') . "dashboard";
			$data['module'] = 'cms';
			$this->load->view($this->_container,$data);
		}
	}

	/**
	 * Execute install procedures
	 * 
	 * @access public
	 */
	function install_module()
	{
		// Execute the queries in the SQL file
		$sql_file_path	= $this->config->item('mod_cms_install_db_file');
		$this->_RunSQLFile($sql_file_path);
		redirect('cms/admin/dashboard');
	}

	/**
	 * Imports the SQL file to the app
	 *
	 * @access private
	 * @param string $file Path to the SQL file
	 */
	function _RunSQLFile($file = NULL)
	{
		if ($file == NULL)
		{
			return FALSE;
		}
		else
		{
			$fp = @fopen($file, 'r');
			$contents = fread($fp, filesize($file));
			fclose($fp);

			// Get rid of comment lines
			$contents = preg_replace('/--(.)*/', '', $contents);

			// Get rid of newlines
			$contents = preg_replace('/\n/', '', $contents);

			// Turn each statement into an array item
			$contents = explode(';', $contents);

			foreach($contents as $sql)
			{
				if ($sql == '')
				{
					continue;
				}

				if ($this->db->query($sql) === FALSE)
				{
					return FALSE;
				}
			}

			return TRUE;
		}
	}
}


/* End of file: dashboard.php */
/* Location: ./controllers/admin/dashboard.php */