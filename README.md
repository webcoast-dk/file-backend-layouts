# File backend layouts

Provide backend layout definitions as files, e.g. to ship them with your site package or theme extension.

## Installation
Install the extension with composer
```bash
composer req webcoast/file-backend-layouts
```
or from [TER](https://extensions.typo3.org/extension/file_backend_layouts/).


## Usage

### Register backend layouts
You can use the API to register backend layouts from your site package or theme extension.

Use the `ext_tables.php` in your extension and include
```php
WEBcoast\FileBackendLayouts\Utility\ConfigurationUtility::registerBackendLayouts('your_site_package');
```
Place your ts config files for the backend layouts in `EXT:your_site_package/Configuration/BackendLayouts`.
The language file for translating the layouts in the selector in the page properties is
`EXT:your_site_package/Resources/Private/Language/locallang_backend.xlf`. The label prefix is `backendLayouts.`,
so if you have a layout file `homepage.tsconfig`, the label in the language file would be `backendLayouts.homepage`.

#### Change the paths
If you like to change the path to the backend layout files or the language file, provide them as second
third parameter.
```php
WEBcoast\FileBackendLayouts\Utility\ConfigurationUtility::registerBackendLayouts('your_site_package', 'Resources/Private/BackendLayouts', 'Resources/Private/Language/backendLayouts.xlf');
```
You can also set the first parameter to `null`, if you do not want to change the path to the ts config files.
```php
WEBcoast\FileBackendLayouts\Utility\ConfigurationUtility::registerBackendLayouts('your_site_package', null, 'Resources/Private/Language/backendLayouts.xlf');
```

### TypoScript
The extension provides a typo script template include with `lib.backendLayout = TEXT` which converts the
chosen backend layout from the page properties (including next level inheritance) to a layout value.

If your ts config file is named `homepage.tsconfig`, the result of `lib.backendLayout` would be `homepage`.
This could be used as template name in your page fluid template.
```typo3_typoscript
page {
    20 = FLUIDTEMPLATE
    20 {
        templateName < lib.backendLayout
        templateRootPaths {
            10 = EXT:your_site_package/Resources/Private/Template/Page
        }
    }
}

# or alternatively as variable `layout`
page {
    20 = FLUIDTEMPLATE
    20 {
        file = ...
        variables {
            layout < lib.backendLayout
        }
    }
}
```
