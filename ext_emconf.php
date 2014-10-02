<?php

/***************************************************************
 * Extension Manager/Repository config file for ext: "trb_ce_table"
 *
 * Auto generated by Extension Builder 2014-06-02
 *
 * Manual updates:
 * Only the data in the array - anything else is removed by next write.
 * "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array(
	'title' => 'TRB Content Element: Table',
	'description' => 'This extension adds Extbase/Fluid rendering for table-content element.',
	'category' => 'frontend',
	'author' => 'Boris Günther',
	'author_email' => 'info@boris-guenther.de',
	'state' => 'stable',
	'internal' => '',
	'uploadfolder' => '0',
	'createDirs' => '',
	'clearCacheOnLoad' => 1,
	'version' => '2.0.0',
	'constraints' => array(
		'depends' => array(
			'typo3' => '6.2',
			'css_styled_content' => '6.2',
			'trb_basics' => '2.0',
			'trb_basics_viewhelper' => '2.0',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
);