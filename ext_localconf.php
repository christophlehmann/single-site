<?php

defined('TYPO3_MODE') or exit('Access denied.');

(static function () {
    $GLOBALS['TYPO3_CONF_VARS']['SYS']['Objects'][\TYPO3\CMS\Core\Site\SiteFinder::class] = [
        'className' => \Plan2net\SingleSite\Site\SiteFinder::class
    ];
})();
