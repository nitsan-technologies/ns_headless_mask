<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "ns_headless_mask".
 *
 * Auto generated 20-03-2025 14:02
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array (
  'title' => 'Ns Headless Mask',
  'description' => 'Support headless for the mask elements',
  'category' => 'fe',
  'version' => '1.0.0',
  'state' => 'stable',
  'uploadfolder' => false,
  'clearcacheonload' => false,
  'author' => 'T3: Nilesh Malankiya',
  'author_email' => 'info@nitsan.in',
  'author_company' => NULL,
  'constraints' => 
  array (
    'depends' => 
    array (
      'typo3' => '12.0.0-13.5.99',
      'frontend' => '12.0.0-13.5.99',
    ),
    'suggests' => 
    array (
      'headless' => '4.0.0-4.9.9',
      'mask' => '8.0.0-9.9.9',
    ),
    'conflicts' => 
    array (
    ),
  ),
);

