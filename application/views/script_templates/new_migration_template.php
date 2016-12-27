<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**********************************************************************************
	- File Info -
		File name		: new_migration_template.php
		Author(s)		: DAVINA Leong Shi Yun
		Date Created	: 12 Dec 2016

	- Contact Info -
		Email	: leong.shi.yun@gmail.com
		Mobile	: (+65) 9369 3752 [Singapore]

***********************************************************************************/
/**
 * @var $descriptive_name
 * @var $version_number
 * @var $filename
 * @var $include_comment_header
 */
$newline = "\n";
$tab = "\t";
$emptyline = $tab . $newline;

echo "<?php defined('BASEPATH') OR exit('No direct script access allowed');" . $newline;
#region File Header
if($include_comment_header) {
	echo "/**********************************************************************************" . $newline;
	echo $tab . "- File Info -" . $newline;
	echo $tab . $tab . "File name" . $tab . $tab . ": " . $filename . ".php" . $newline;
	echo $tab . $tab . "Author(s)" . $tab . $tab . ": DAVINA Leong Shi Yun" . $newline;
	echo $tab . $tab . "Date Created" . $tab . ": " . $this->datetime_helper->today('d M Y') . $newline;
	echo $emptyline;
	echo $tab . "- Contact Info -" . $newline;
	echo $tab . $tab . "Email" . $tab . ": leong.shi.yun@gmail.com" . $newline;
	echo $tab . $tab . "Mobile" . $tab . ": (+65) 9369 3752 [Singapore]" . $newline;
	echo $emptyline;
	echo "***********************************************************************************/" . $newline;
}
#endregion

#region Migration Version
echo "/* Migration version: " . $newline;
echo " * " . $this->datetime_helper->now('d M Y, h:iA') . $newline;
echo " * " . $version_number . $newline;
echo " */" . $newline;
#endregion

#region Migration Class
echo "class Migration_" . $descriptive_name . " extends CI_Migration" . $newline;
echo "{" . $newline;
echo $tab . "// Public Functions ----------------------------------------------------------------" . $newline;
echo $tab . "public function up()" . $newline;
echo $tab . "{" . $newline;
echo $tab . $tab . "\$this->load->model('Script_runner_model');" . $newline;
echo $tab . $tab . "echo \$this->Script_runner_model->run_script(\$this->_up_script())['output_str'];" . $newline;
echo $tab . "}" . $newline;
echo $emptyline;
echo $tab . "public function down()" . $newline;
echo $tab . "{" . $newline;
echo $tab . $tab . "\$this->load->model('Script_runner_model');" . $newline;
echo $tab . $tab . "echo \$this->Script_runner_model->run_script(\$this->_down_script())['output_str'];" . $newline;
echo $tab . "}" . $newline;
echo $emptyline;
echo $tab . "// Private Functions ---------------------------------------------------------------" . $newline;
echo $tab . "private function _up_script()" . $newline;
echo $tab . "{" . $newline;
echo $tab . $tab . "\$sql = \"" . $newline;
echo $tab . $tab . $emptyline;
echo $tab . $tab . "\";" . $newline;
echo $tab . $tab . "return \$sql;" . $newline;
echo $tab . "}" . $newline;
echo $emptyline;
echo $tab . "private function _down_script()" . $newline;
echo $tab . "{" . $newline;
echo $tab . $tab . "\$sql = \"" . $newline;
echo $tab . $tab . $emptyline;
echo $tab . $tab . "\";" . $newline;
echo $tab . $tab . "return \$sql;" . $newline;
echo $tab . "}" . $newline;
echo $emptyline;
echo "} " . "// end " . $filename . " class";
#endregion