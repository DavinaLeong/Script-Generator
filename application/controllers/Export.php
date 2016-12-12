<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**********************************************************************************
	- File Info -
		File name		: Export.php
		Author(s)		: DAVINA Leong Shi Yun
		Date Created	: 12 Dec 2016

	- Contact Info -
		Email	: leong.shi.yun@gmail.com
		Mobile	: (+65) 9369 3752 [Singapore]

***********************************************************************************/
class Export extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}

	public function index()
	{
		redirect('authenticate/start');
	}

	private function _set_form_validation_rules()
	{
		$this->form_validation->set_rules('script_name', 'Script Name', 'trim|required|alpha_dash|max_length[512]');
		$this->form_validation->set_rules('include_comment_header', 'Include comment header', 'trim|in_list[0,1]|max_length[4]');
	}

	public function new_migration()
	{
		$this->User_log_model->validate_access();
		$this->_set_form_validation_rules();
		if($this->form_validation->run())
		{
			$data = array(
				'descriptive_name' => ucfirst($this->input->post('script_name')),
				'version_number' => $version_number = $this->datetime_helper->now(MIGRATION_DATE_FORMAT),
				'filename' => $version_number . "_" . strtolower($this->input->post('script_name')),
				'include_comment_header' => $this->input->post('include_comment_header') ? TRUE : FALSE
			);
			$this->load->view('export/new_migration_export', $data);
		}
		else
		{
			redirect('page/new_migration');
		}
	}
	
} // end Export controller class