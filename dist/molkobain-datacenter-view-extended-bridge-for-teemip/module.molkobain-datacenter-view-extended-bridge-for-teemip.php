<?php
/**
 * Copyright (c) 2015 - 2020 Molkobain.
 *
 * This file is part of licensed extension.
 *
 * Use of this extension is bound by the license you purchased. A license grants you a non-exclusive and non-transferable right to use and incorporate the item in your personal or commercial projects. There are several licenses available (see https://www.molkobain.com/usage-licenses/ for more informations)
 */

/** @noinspection PhpUnhandledExceptionInspection */
SetupWebPage::AddModule(
	__FILE__, // Path to the current file, all other file names are relative to the directory containing this file
	'molkobain-datacenter-view-extended-bridge-for-teemip/1.5.1', array(
        // Identification
        'label' => 'Bridge - Datacenter view extended + IPAM for iTop = ❤',
        'category' => 'business',

        // Setup
        'dependencies' => array(
            'molkobain-datacenter-view-extended/1.5.0',
	        'teemip-datacenter-mgmt-adaptor/2.6.0',
        ),
        'mandatory' => false,
        'visible' => false,
		'auto_select' => 'SetupInfo::ModuleIsSelected("molkobain-datacenter-view-extended") && SetupInfo::ModuleIsSelected("teemip-datacenter-mgmt-adaptor")',

        // Components
        'datamodel' => array(
        ),
        'webservice' => array(
        ),
        'dictionary' => array(
        ),
        'data.struct' => array(
        ),
        'data.sample' => array(
        ),

        // Documentation
        'doc.manual_setup' => '',
        'doc.more_information' => '',

        // Default settings
        'settings' => array(
        ),
	)
);
