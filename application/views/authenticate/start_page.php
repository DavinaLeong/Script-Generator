<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**********************************************************************************
	- File Info -
		File name		: start_page.php
		Author(s)		: DAVINA Leong Shi Yun
		Date Created	: 28th Sep 2016

	- Contact Info -
		Email	: leong.shi.yun@gmail.com
		Mobile	: (+65) 9369 3752 [Singapore]

***********************************************************************************/
?><!DOCTYPE html>
<html lang="en">
<head>
    <?php $this->load->view('_snippets/meta_admin'); ?>

    <?php $this->load->view('_snippets/head_resources'); ?>
</head>

<body>

<section id="container" >

    <?php $this->load->view('_snippets/navbar_admin'); ?>

    <!-- **********************************************************************************************************************************************************
    MAIN CONTENT
    *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper site-min-height">
            <ol class="breadcrumb">
                <li class="active">Home</li>
            </ol>

            <h1><i class="fa fa-dashboard fa-fw"></i> Welcome, <strong><?= $this->session->userdata('name'); ?></strong></h1>
            <p><em>Version: 1.02</em></p>
            <p class="cr-clock"></p>
            <div class="row mt">
                <div class="col-lg-12">
                    <?php $this->load->view('_snippets/message_box'); ?>

                    <div class="content-panel">
                        <h3 class="cr-content-panel-header"><i class="fa fa-angle-right fa-fw"></i> About this Repo</h3>
                        <p>Click on the links on the sidebar to the left to begin.</p>
                        <p><strong>Colour Repo</strong> serves as a database of commonly used colours like Web Safe colours,
                            'Paint' colours, etc.</p>

                        <div class="alert alert-info">
                            <h4 style="font-weight: bold;"><i class="fa fa-star fa-fw"></i> Feature Improvements!</h4>
                            <p>Converted Values section of New and Edit Web Colour to React JS components.</p>
                        </div>
                    </div>
                    <br/>

                    <div class="content-panel">
                        <h3 class="cr-content-panel-header"><i class="fa fa-angle-right fa-fw"></i> Status</h3>
                        <div class="alert alert-info">
                            <h4 style="font-weight: bold;"><i class="fa fa-thumbs-o-up fa-fw"></i> Final</h4>
                            <p>Core features finalized. Planned features to be implemented in the future.</p>
                        </div>
                    </div>
                    <br/>

                    <!-- Tasks Panel start -->
                    <div class="content-panel">
                        <h3 class="cr-content-panel-header"><i class="fa fa-angle-right fa-fw"></i> Tasks</h3>

                        <!-- Task Accordion start -->
                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                            <!-- Code Improvement -->
                            <div class="panel panel-success">
                                <div class="panel-heading" role="tab" id="heading_zero">
                                    <h4 class="panel-title">
                                        <a role="button" data-toggle="collapse" data-parent="#accordion"
                                           href="#collapse_zero" aria-expanded="true" aria-controls="collapse_zero">
                                            <i class="fa fa-check fa-fw"></i> 0. Code Improvement
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse_zero" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading_zero">
                                    <ul class="list-group">
                                        <li class="list-group-item-success">
                                            <i class="fa fa-check-circle fa-fw"></i> Refactor Resources Structure</li>
                                        <li class="list-group-item-success"><i class="fa fa-check-circle fa-fw"></i> Use Bower</li>
                                        <li class="list-group-item-success"><i class="fa fa-check-circle fa-fw"></i> Use Migrations</li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Site UI -->
                            <div class="panel panel-success">
                                <div class="panel-heading" role="tab" id="heading_one">
                                    <h4 class="panel-title">
                                        <a role="button" data-toggle="collapse" data-parent="#accordion"
                                         href="#collapse_one" aria-expanded="true" aria-controls="collapse_one">
                                            <i class="fa fa-check fa-fw"></i> 1. Site UI
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse_one" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading_one">
                                    <ul class="list-group">
                                        <li class="list-group-item-success"><i class="fa fa-check-circle fa-fw"></i> Import DashGum</li>
                                        <li class="list-group-item-success"><i class="fa fa-check-circle fa-fw"></i> Implement DataTables</li>
                                        <li class="list-group-item-success"><i class="fa fa-check-circle fa-fw"></i> Implement Javascript Clock</li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Login Page -->
                            <div class="panel panel-success">
                                <div class="panel-heading" role="tab" id="heading_two">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                                           href="#collapse_two" aria-expanded="false" aria-controls="collapse_two">
                                            <i class="fa fa-check fa-fw"></i> 2. Login Page
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse_two" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading_two">
                                    <ul class="list-group">
                                        <li class="list-group-item-success"><i class="fa fa-check-circle fa-fw"></i> Page UI</li>
                                        <li class="list-group-item-success"><i class="fa fa-check-circle fa-fw"></i> Login Functionality</li>
                                    </ul>
                                </div>
                            </div>
                            <!-- User Module -->
                            <div class="panel panel-success">
                                <div class="panel-heading" role="tab" id="heading_three">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                                           href="#collapse_three" aria-expanded="false" aria-controls="collapse_three">
                                            <i class="fa fa-check fa-fw"></i> 3. User Module
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse_three" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading_three">
                                    <ul class="list-group">
                                        <li class="list-group-item-success"><i class="fa fa-check-circle fa-fw"></i> Browse Users</li>
                                        <li class="list-group-item-success"><i class="fa fa-check-circle fa-fw"></i> New User</li>
                                        <li class="list-group-item-success"><i class="fa fa-check-circle fa-fw"></i> View User</li>
                                        <li class="list-group-item-success"><i class="fa fa-check-circle fa-fw"></i> Edit User</li>
                                        <li class="list-group-item-success"><i class="fa fa-check-circle fa-fw"></i> Reset Password</li>
                                        <li class="list-group-item-success"><i class="fa fa-check-circle fa-fw"></i> Access Colours</li>
                                        <li class="list-group-item-success">
                                            <i class="fa fa-check-circle fa-fw"></i> Show Profile Picture on View User</li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Personal Profile Module -->
                            <div class="panel panel-success">
                                <div class="panel-heading" role="tab" id="heading_four">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                                           href="#collapse_four" aria-expanded="false" aria-controls="collapse_four">
                                            <i class="fa fa-check fa-fw"></i> 4. Personal Profile Module
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse_four" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading_four">
                                    <ul class="list-group">
                                        <li class="list-group-item-success">
                                            <i class="fa fa-check-circle fa-fw"></i> View Personal Profile</li>
                                        <li class="list-group-item-success">
                                            <i class="fa fa-check-circle fa-fw"></i> Edit Personal Profile</li>
                                        <li class="list-group-item-success">
                                            <i class="fa fa-check-circle fa-fw"></i> Change Password</li>
                                        <li class="list-group-item-success">
                                            <i class="fa fa-check-circle fa-fw"></i> Profile Picture</li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Web Safe Colour Module -->
                            <div class="panel panel-success">
                                <div class="panel-heading" role="tab" id="heading_five">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                                           href="#collapse_five" aria-expanded="false" aria-controls="collapse_five">
                                            <i class="fa fa-check fa-fw"></i> 5. Web Safe Colour Module
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse_five" class="panel-collapse collapse"
                                     role="tabpanel" aria-labelledby="heading_five">
                                    <ul class="list-group">
                                        <li class="list-group-item-success">
                                            <i class="fa fa-check-circle fa-fw"></i> Browse Web Safe Colours</li>
                                        <li class="list-group-item-success">
                                            <i class="fa fa-check-circle fa-fw"></i> New Web Safe Colours</li>
                                        <li class="list-group-item-success">
                                            <i class="fa fa-check-circle fa-fw"></i> View Web Safe Colours</li>
                                        <li class="list-group-item-success">
                                            <i class="fa fa-check-circle fa-fw"></i> Edit Web Safe Colours</li>
                                        <li class="list-group-item-success">
                                            <i class="fa fa-check-circle fa-fw"></i> Delete Web Safe Colours</li>
                                        <li class="list-group-item-success">
                                            <i class="fa fa-check-circle fa-fw"></i> View CSS Script</li>
                                        <li class="list-group-item-success">
                                            <i class="fa fa-check-circle fa-fw"></i> Export to CSS</li>
                                        <li class="list-group-item-success">
                                            <i class="fa fa-check-circle fa-fw"></i> View Unity C# Script</li>
                                        <li class="list-group-item-success">
                                            <i class="fa fa-check-circle fa-fw"></i> Export to Unity C#</li>
                                        <li class="list-group-item-success">
                                            <i class="fa fa-check-circle fa-fw"></i> Code Highlighting</li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Standard Colour Module -->
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="heading_six">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                                           href="#collapse_six" aria-expanded="false" aria-controls="collapse_six">
                                            <i class="fa fa-times fa-fw"></i> 6. Standard Colour Module <span class="label label-default">Planned</span>
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse_six" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading_six">
                                    <ul class="list-group">
                                        <li class="list-group-item">
                                            Colour Modes:
                                            <ul>
                                                <li>RGB</li>
                                                <li>RGB Ratio</li>
                                                <li>HSB</li>
                                                <li>Hex</li>
                                            </ul>
                                        </li>
                                        <li class="list-group-item-danger">
                                            <i class="fa fa-times-circle fa-fw"></i> Browse Standard Colours</li>
                                        <li class="list-group-item-danger">
                                            <i class="fa fa-times-circle fa-fw"></i> New Standard Colours</li>
                                        <li class="list-group-item-danger">
                                            <i class="fa fa-times-circle fa-fw"></i> View Standard Colours</li>
                                        <li class="list-group-item-danger">
                                            <i class="fa fa-times-circle fa-fw"></i> Edit Standard Colours</li>
                                        <li class="list-group-item-danger">
                                            <i class="fa fa-times-circle fa-fw"></i> Delete Standard Colours</li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Sign Up Module -->
                            <div class="panel panel-success">
                                <div class="panel-heading" role="tab" id="heading_seven">
                                    <h4 class="panel-title">
                                        <a role="button" data-toggle="collapse" data-parent="#accordion"
                                           href="#collapse_seven" aria-expanded="true" aria-controls="collapse_seven">
                                            <i class="fa fa-check fa-fw"></i> 7. Sign-Up Module
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse_seven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading_seven">
                                    <ul class="list-group">
                                        <li class="list-group-item-success"><i class="fa fa-check-circle fa-fw"></i> Sign-Up Page</li>
                                        <li class="list-group-item-success"><i class="fa fa-check-circle fa-fw"></i> Success Page</li>
                                        <li class="list-group-item-success"><i class="fa fa-check-circle fa-fw"></i> Erro Page</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Task Panel end -->
                </div>
            </div>

        </section><! --/wrapper -->
    </section><!-- /MAIN CONTENT -->

    <!--main content end-->
    <?php $this->load->view('_snippets/footer_admin'); ?>
</section>

<?php $this->load->view('_snippets/body_resources'); ?>
</body>
</html>