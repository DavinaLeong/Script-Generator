<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**********************************************************************************
	- File Info -
		File name		: login_page.php
		Author(s)		: DAVINA Leong Shi Yun
		Date Created	: 11 Dec 2016

	- Contact Info -
		Email	: leong.shi.yun@gmail.com
		Mobile	: (+65) 9369 3752 [Singapore]

***********************************************************************************/
?><!DOCTYPE html>
<html lang="en">
<head>
    <?php $this->load->view('_snippets/meta'); ?>
    <?php $this->load->view('_snippets/head_resources'); ?>
</head>
<body>
<div id="wrapper">
    <?php $this->load->view('_snippets/navbar'); ?>
    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <ol class="breadcrumb">
                <li class="active">Home</li>
            </ol>

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Welcome to Script Generator</h1>
                    <p class="lead">You are logged in as <span class="text-primary"><?=$this->session->userdata('name');?></span>.</p>
                    <?php $this->load->view('_snippets/message_box'); ?>
                    <ul>
                        <li>Script Generator is a simple tool built to assist in exporting commonly used scripts.</li>
                        <li>There is no CRUD for this Admin Panel.</li>
                        <li>The main purpose of the login is to prevent access of this tool to strangers of this site.</li>
                    </ul>
                </div>
            </div>
            <?php $this->load->view('_snippets/footer'); ?>
        </div>
    </div>
</div>
<?php $this->load->view('_snippets/body_resources'); ?>
</body>
</html>