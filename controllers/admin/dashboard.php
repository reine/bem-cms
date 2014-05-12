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
	 * @access public
	 */
	function index()
	{
		// Display Page
		$data['header'] = $this->lang->line('bem_cms');
		$data['page'] 	= $this->config->item('backendpro_template_admin') . "dashboard";
		$data['module'] = 'cms';
		$this->load->view($this->_container,$data);
	}
}


/* End of file: dashboard.php */
/* Location: ./controllers/admin/dashboard.php */