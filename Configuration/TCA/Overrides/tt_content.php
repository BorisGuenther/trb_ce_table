<?php
if(!defined('TYPO3_MODE')) {
	die('Access denied.');
}


/*
 * SETUP TYPE
 */
$GLOBALS['TCA']['tt_content']['types']['table']['showitem']	= '
	--palette--;LLL:EXT:cms/locallang_ttc.xlf:palette.general;general,
	layout;LLL:EXT:cms/locallang_ttc.xlf:layout_formlabel,
	--palette--;LLL:EXT:cms/locallang_ttc.xlf:header_formlabel;header,

--div--;LLL:EXT:cms/locallang_ttc.xlf:CType.I.5,
	cols, bodytext;;9;nowrap:wizards[table], pi_flexform,

--div--;LLL:EXT:cms/locallang_ttc.xlf:tabs.access,
	--palette--;LLL:EXT:cms/locallang_ttc.xlf:palette.visibility;visibility,
	--palette--;LLL:EXT:cms/locallang_ttc.xlf:palette.access;access,

--div--;LLL:EXT:cms/locallang_ttc.xlf:tabs.extended,

--div--;LLL:EXT:lang/locallang_tca.xlf:sys_category.tabs.category,
	categories

';


