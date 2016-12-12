<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**********************************************************************************
	- File Info -
		File name		: validation_errors_box.php
		Author(s)		: DAVINA Leong Shi Yun
		Date Created	: 11 Dec 2016

	- Contact Info -
		Email	: leong.shi.yun@gmail.com
		Mobile	: (+65) 9369 3752 [Singapore]

***********************************************************************************/
?>
<?php if(validation_errors()):?>
    <div id="validation_error_box" class="alert alert-info" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>
        </button>
        <?=validation_errors();?>
    </div>
<?php endif;?>