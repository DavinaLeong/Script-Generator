<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**********************************************************************************
	- File Info -
		File name		: new_unity_csharp_export.php
		Author(s)		: DAVINA Leong Shi Yun
		Date Created	: 12 Dec 2016

	- Contact Info -
		Email	: leong.shi.yun@gmail.com
		Mobile	: (+65) 9369 3752 [Singapore]

***********************************************************************************/
/**
 * @var $class_name
 */
header("Content-Type: application/php");
header("Content-Disposition: attachment; filename=" . $class_name . ".cs");
header("Pragma: no-cache");
header("Expires: 0");

$this->load->view('script_templates/new_unity_csharp_template');
