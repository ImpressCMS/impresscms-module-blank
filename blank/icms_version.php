<?php
/**
 * "Blank" module version infomation
 *
 * This file holds the configuration information of this module
 *
 * @copyright	Copyright Madfish (Simon Wilkinson) 2011
 * @license		http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU General Public License (GPL)
 * @since		1.0
 * @author		Madfish (Simon Wilkinson) <simon@isengard.biz>
 * @package		quotes
 * @version		$Id$
 */

defined("ICMS_ROOT_PATH") or die("ICMS root path not defined");

/**  General Information  */
$modversion = array(
	"name"						=> basename(dirname(__FILE__)),
	"version"					=> 1.0,
	"author"					=> "Madfish (Simon Wilkinson)",
	"credits"					=> "",
	"help"						=> "",
	"license"					=> "GNU General Public License (GPL) V2 or any later version",
	"official"					=> 0,
	"dirname"					=> basename(dirname(__FILE__)),
	"modname"					=> basename(dirname(__FILE__)),

/**  Images information  */
	"iconsmall"					=> "images/icon_small.png",
	"iconbig"					=> "images/icon_big.png",
	"image"						=> "images/icon_big.png", /* for backward compatibility */

/**  Development information */
	"status_version"			=> "1.0",
	"status"					=> "Final",
	"date"						=> "4/10/2011",
	"author_word"				=> "The Force will be with you. Always.",
	"warning"					=> _CO_ICMS_WARNING_BETA,

/** Contributors */
	"developer_website_url"		=> "https://www.isengard.biz",
	"developer_website_name"	=> "Isengard.biz",
	"developer_email"			=> "simon@isengard.biz",

/** Administrative information */
	"hasAdmin"					=> 0,

/** Search information */
	"hasSearch"					=> 0,

/** Menu information */
	"hasMain"					=> 1,

/** Comments information */
	"hasComments"				=> 0);

/** other possible types: testers, translators, documenters and other */
$modversion['people']['developers'][] = "Madfish (Simon Wilkinson)";