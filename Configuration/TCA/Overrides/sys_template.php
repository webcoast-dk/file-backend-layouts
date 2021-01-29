<?php

// add default setup
use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

ExtensionManagementUtility::addStaticFile(
    'file_backend_layouts',
    'Configuration/TypoScript',
    'Backend layout (lib)'
);
