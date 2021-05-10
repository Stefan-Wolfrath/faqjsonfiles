<?php
namespace Faqstefan\Faqjsonfiles\Controller;


/***
 *
 * This file is part of the "FAQ from json Files" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2021 Stefan Wolfrath <stefan.wolfrath@bitsfabrik.com>, bitsfabrik
 *
 ***/
/**
 * FaqJsonController
 */
class FaqJsonController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * faqJsonRepository
     *
     * @var \Faqstefan\Faqjsonfiles\Domain\Repository\FaqJsonRepository
     */
    protected $faqJsonRepository = null;

    /**
     * @param \Faqstefan\Faqjsonfiles\Domain\Repository\FaqJsonRepository $faqJsonRepository
     */
    public function injectFaqJsonRepository(\Faqstefan\Faqjsonfiles\Domain\Repository\FaqJsonRepository $faqJsonRepository)
    {
        $this->faqJsonRepository = $faqJsonRepository;
    }

    /**
     * action list
     *
     * @return void
     */
    public function listAction()
    {
        $faqJsons = $this->faqJsonRepository->findAll();
        $this->view->assign('faqJsons', $faqJsons);

        $payment = json_decode(file_get_contents(\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath('faqjsonfiles','/Resources/Public/json/after_payment.json')),true);
        $this->view->assign('payment', $payment);

        $deadline = json_decode(file_get_contents(\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath('faqjsonfiles','/Resources/Public/json/deadlines.json')),true);
        $this->view->assign('deadline', $deadline);

        $fees = json_decode(file_get_contents(\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath('faqjsonfiles','/Resources/Public/json/fees.json')),true);
        $this->view->assign('fees', $fees);

        $pawn_ticket = json_decode(file_get_contents(\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath('faqjsonfiles','/Resources/Public/json/pawn_ticket.json')),true);
        $this->view->assign('pawn_ticket', $pawn_ticket);

        $process = json_decode(file_get_contents(\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath('faqjsonfiles','/Resources/Public/json/process.json')),true);
        $this->view->assign('process', $process);

        $technical_problems = json_decode(file_get_contents(\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath('faqjsonfiles','/Resources/Public/json/technical_problems.json')),true);
        $this->view->assign('technical_problems', $technical_problems);

    }

    /**
     * action call
     *
     * @return void
     */
    public function callAction(\Faqstefan\Faqjsonfiles\Domain\Model\FaqJson $faqJson)
    {
        $this->view->assign('faqJson', $faqJson);
    }
}
