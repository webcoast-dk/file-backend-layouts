<?php

if (!defined('TYPO3_MODE')) {
    die('Access denied!');
}

// register backend layout provider
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['BackendLayoutDataProvider']['file_backend_layouts'] = WEBcoast\FileBackendLayouts\Backend\View\FileBackendLayoutProvider::class;
