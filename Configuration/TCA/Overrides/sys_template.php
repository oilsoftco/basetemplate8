<?php
defined('TYPO3_MODE') or die();

call_user_func(function () {
    $extensionKey = 'basetemplate8';

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
        $extensionKey,
        'Configuration/TypoScript',
        'Website Templates'
    );
});
