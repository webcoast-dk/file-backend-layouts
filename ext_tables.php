<?php

(function ($extKey) {
    // Register backend layout provider
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['BackendLayoutDataProvider'][$extKey] = WEBcoast\FileBackendLayouts\Backend\View\FileBackendLayoutProvider::class;
    $enableDefaultBackendLayout = TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(TYPO3\CMS\Core\Configuration\ExtensionConfiguration::class)->get(
        $extKey,
        'enableDefaultBackendLayout'
    );
    if ((bool) $enableDefaultBackendLayout === true) {
        // Register default backend layout
        WEBcoast\FileBackendLayouts\Utility\ConfigurationUtility::registerBackendLayouts($extKey);
    }
})(
    'file_backend_layouts'
);
