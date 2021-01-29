<?php

namespace WEBcoast\FileBackendLayouts\Utility;


class ConfigurationUtility
{
    /**
     * @param string $extensionKey The extension key to look for backend layouts
     * @param string $path         Optional path to backend layouts; default: 'Configuration/BackendLayouts'
     * @param string $languageFile Optional path to language file; default: 'Resources/Private/Language/locallang_backend.xlf'
     */
    public static function registerBackendLayouts($extensionKey, $path = null, $languageFile = null)
    {
        $GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['file_backend_layouts']['BackendLayouts'][$extensionKey] = [$path, $languageFile];
    }
}
