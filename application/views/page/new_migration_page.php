<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**********************************************************************************
	- File Info -
		File name		: new_migration_page.php
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
    <link href="<?=RESOURCES_FOLDER;?>script_generator/css/sg_styles_parsley.css" type="text/css" rel="stylesheet" />
</head>
<body>
<div id="wrapper">
    <?php $this->load->view('_snippets/navbar'); ?>
    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <ol class="breadcrumb">
                <li><a href="<?=site_url();?>">Home</a></li>
                <li><a href="<?=site_url('page');?>">Page</a></li>
                <li class="active">New Migration Script</li>
            </ol>

            <div class="row">
                <div class="col-lg-12">
                    <h2 class="page-header">New <span class="text-primary">Migration</span> Script</h2>
                    <p>Filetype: <span class="text-primary"><i class="cdc-php"></i></span></p>

                    <div class="row">
                        <div class="col-lg-10">

                            <?php $this->load->view('_snippets/validation_errors_box'); ?>
                            <?php $this->load->view('_snippets/message_box'); ?>

                            <form id="new_migration_form" class="form-horizontal" method="post" action="<?=site_url('export/new_migration');?>" data-parsley-validate>
                                <div class="form-group">
                                    <label class="col-md-2 control-label" for="script_name">Script Name <span class="text-danger">*</span></label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="text" id="script_name" name="script_name" value="<?=set_value('script_name');?>" required maxlength="512" pattern="<?=REGEX_PARSLEY_FILENAME;?>" data-parsley-error-message="<li>Must begin with a Capital Letter.</li><li>Replace spaces with underscores (_).</li>" />
                                        <p class="help-block">Must start with a capital letter. Only alphabets, numbers and underscores (_) allowed.</p>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-10 col-md-offset-2">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" id="include_comment_header" name="include_comment_header" value="1" checked <?=set_checkbox('include_comment_header', 1);?> /> Include comment header
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-10 col-md-offset-2">
                                        <p class="text-danger">* required fields</p>
                                        <button class="btn btn-primary" id="submit_btn" type="submit"><i class="fa fa-download fa-fw"></i> Export</button>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>

                </div>
            </div>
            <?php $this->load->view('_snippets/footer'); ?>
        </div>
    </div>
</div>
<?php $this->load->view('_snippets/body_resources'); ?>
<script src="<?=RESOURCES_FOLDER;?>vendor/parsleyjs/parsley.min.js"></script>
</body>
</html>