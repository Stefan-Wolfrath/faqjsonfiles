<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'Faqstefan.Faqjsonfiles',
            'Faqjsonfiles',
            [
                'FaqJson' => 'list, call'
            ],
            // non-cacheable actions
            [
                'FaqJson' => ''
            ]
        );

        // wizards
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
            'mod {
                wizards.newContentElement.wizardItems.plugins {
                    elements {
                        faqjsonfiles {
                            iconIdentifier = faqjsonfiles-plugin-faqjsonfiles
                            title = LLL:EXT:faqjsonfiles/Resources/Private/Language/locallang_db.xlf:tx_faqjsonfiles_faqjsonfiles.name
                            description = LLL:EXT:faqjsonfiles/Resources/Private/Language/locallang_db.xlf:tx_faqjsonfiles_faqjsonfiles.description
                            tt_content_defValues {
                                CType = list
                                list_type = faqjsonfiles_faqjsonfiles
                            }
                        }
                    }
                    show = *
                }
           }'
        );
		$iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
		
			$iconRegistry->registerIcon(
				'faqjsonfiles-plugin-faqjsonfiles',
				\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
				['source' => 'EXT:faqjsonfiles/Resources/Public/Icons/user_plugin_faqjsonfiles.svg']
			);
		
    }
);
