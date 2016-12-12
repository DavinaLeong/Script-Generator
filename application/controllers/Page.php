<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**********************************************************************************
	- File Info -
		File name		: Page.php
		Author(s)		: DAVINA Leong Shi Yun
		Date Created	: 12 Dec 2016

	- Contact Info -
		Email	: leong.shi.yun@gmail.com
		Mobile	: (+65) 9369 3752 [Singapore]

***********************************************************************************/
class Page extends CI_Controller
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

	public function new_migration()
	{
		$this->User_log_model->validate_access();
		$this->load->view('page/new_migration_page');
	}

	public function new_unity_csharp()
	{
		$this->User_log_model->validate_access();
		$this->load->library('Datetime_helper');
		$this->load->view('page/new_unity_csharp_page');
	}
	
} // end Page controller class