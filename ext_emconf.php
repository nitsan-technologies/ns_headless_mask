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
  'title' => 'ns_headless_mask – Easily Render JSON from TYPO3 EXT:mask',
  'description' => 'The ns_headless_mask TYPO3 extension provides TypoScript setup to generate clean JSON output from EXT:mask for headless CMS integrations',
  'category' => 'fe',
  'version' => '13.0.1',
  'state' => 'stable',
  'uploadfolder' => false,
  'clearcacheonload' => false,
  'author' => 'Team T3Planet',
  'author_email' => 'info@t3planet.de',
  'author_company' => 'T3Planet',
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

