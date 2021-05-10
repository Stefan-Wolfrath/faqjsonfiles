<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'Faqstefan.Faqjsonfiles',
            'Faqjsonfiles',
            'faq from json files'
        );

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('faqjsonfiles', 'Configuration/TypoScript', 'FAQ from json Files');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_faqjsonfiles_domain_model_faqjson', 'EXT:faqjsonfiles/Resources/Private/Language/locallang_csh_tx_faqjsonfiles_domain_model_faqjson.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_faqjsonfiles_domain_model_faqjson');

    }
);
