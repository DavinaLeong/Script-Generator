<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**********************************************************************************
	- File Info -
		File name		: new_migration_export.php
		Author(s)		: DAVINA Leong Shi Yun
		Date Created	: 11 Oct 2016

	- Contact Info -
		Email	: leong.shi.yun@gmail.com
		Mobile	: (+65) 9369 3752 [Singapore]

***********************************************************************************/
/**
 * @var $descriptive_name
 * @var $version_number
 * @var $filename
 */
header("Content-Type: application/php");
header("Content-Disposition: attachment; filename=" . $filename . ".php");
header("Pragma: no-cache");
header("Expires: 0");

$this->load->view('script_templates/new_migration_template');
