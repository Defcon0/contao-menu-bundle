<?php

$dca = &$GLOBALS['TL_DCA']['tl_module'];

/**
 * Palettes
 */
$dca['palettes'][\HeimrichHannot\MenuBundle\FrontendModule\MenuModule::TYPE]       = str_replace('showHidden', 'showHidden,huhMenu_maxTriggerLevel,huhMenu_openDelay,huhMenu_switchDelay,huhMenu_closeDelay', $dca['palettes']['navigation']);
$dca['palettes'][\HeimrichHannot\MenuBundle\FrontendModule\CustomMenuModule::TYPE] = str_replace('showHidden', 'showHidden,huhMenu_maxTriggerLevel,huhMenu_openDelay,huhMenu_switchDelay,huhMenu_closeDelay', $dca['palettes']['customnav']);

/**
 * Fields
 */
$fields = [
    'huhMenu_maxTriggerLevel' => [
        'label'     => &$GLOBALS['TL_LANG']['tl_module']['huhMenu_maxTriggerLevel'],
        'exclude'   => true,
        'inputType' => 'text',
        'eval'      => ['maxlength' => 5, 'rgxp' => 'natural', 'tl_class' => 'w50 clr'],
        'sql'       => "smallint(5) unsigned NOT NULL default '0'"
    ],
    'huhMenu_openDelay' => [
        'label'     => &$GLOBALS['TL_LANG']['tl_module']['huhMenu_openDelay'],
        'exclude'   => true,
        'inputType' => 'text',
        'eval'      => ['maxlength' => 5, 'rgxp' => 'natural', 'tl_class' => 'w50'],
        'sql'       => "smallint(5) unsigned NOT NULL default '300'"
    ],
    'huhMenu_switchDelay' => [
        'label'     => &$GLOBALS['TL_LANG']['tl_module']['huhMenu_switchDelay'],
        'exclude'   => true,
        'inputType' => 'text',
        'eval'      => ['maxlength' => 5, 'rgxp' => 'natural', 'tl_class' => 'w50'],
        'sql'       => "smallint(5) unsigned NOT NULL default '300'"
    ],
    'huhMenu_closeDelay' => [
        'label'     => &$GLOBALS['TL_LANG']['tl_module']['huhMenu_closeDelay'],
        'exclude'   => true,
        'inputType' => 'text',
        'eval'      => ['maxlength' => 5, 'rgxp' => 'natural', 'tl_class' => 'w50'],
        'sql'       => "smallint(5) unsigned NOT NULL default '1000'"
    ],
];

$dca['fields'] = array_merge(is_array($dca['fields']) ? $dca['fields'] : [], $fields);