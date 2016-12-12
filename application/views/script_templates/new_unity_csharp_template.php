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
 * @var $class_name
 * @var $include_comment_header
 */
$newline = "\n";
$tab = "\t";
$emptyline = $tab . $newline;
#region File Header
if($include_comment_header) {
    echo "/**********************************************************************************" . $newline;
    echo $tab . "- File Info -" . $newline;
    echo $tab . $tab . "File name" . $tab . $tab . ": " . $class_name . ".php" . $newline;
    echo $tab . $tab . "Author(s)" . $tab . $tab . ": DAVINA Leong Shi Yun" . $newline;
    echo $tab . $tab . "Date Created" . $tab . ": " . $this->datetime_helper->today('d M Y') . $newline;
    echo $emptyline;
    echo $tab . "- Contact Info -" . $newline;
    echo $tab . $tab . "Email" . $tab . ": leong.shi.yun@gmail.com" . $newline;
    echo $tab . $tab . "Mobile" . $tab . ": (+65) 9369 3752 [Singapore]" . $newline;
    echo $emptyline;
    echo $tab . "All content © DAVINA Leong Shi Yun. All Rights Reserved." . $newline;
    echo $emptyline;
    echo "***********************************************************************************/" . $newline;
}
#endregion

#region Includes
echo "using UnityEngine;" . $newline;
echo "using System.Collections;" . $newline;
echo $emptyline;
#endregion

#region Class
echo "public class " . $class_name . " : MonoBehaviour" . $newline;
echo "{" . $newline;
echo $tab . "public const string CLASS_NAME = \"" . $class_name . "\";" . $newline;
echo $emptyline;
echo $tab . "void Start" . $newline;
echo $tab . "{" . $newline;
echo $tab . $emptyline;
echo $tab . "}" . $newline;
echo $emptyline;
echo $tab . "void Update" . $newline;
echo $tab . "{" . $newline;
echo $tab . $emptyline;
echo $tab . "}" . $newline;
echo $tab . $newline;
echo "} //end " . $class_name . " class";
#endregion