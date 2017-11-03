<?php
/**
 * Quote JS.
 */
namespace HDNET\Calendarize\ViewHelpers;

use TYPO3\CMS\Core\Utility\GeneralUtility;

/**
 * Quote JS.
 */
class JsQuoteViewHelper extends AbstractViewHelper
{
    /**
     * Init arguments
     */
    public function initializeArguments()
    {
        parent::initializeArguments();
        $this->registerArgument('content', 'string', 'Override content', false);
    }

    /**
     * Render the Quote JS information.
     *
     * @return string
     */
    public function render()
    {
        $content = $this->arguments['content'] === null || trim((string)$this->arguments['content']) === '' ? $this->renderChildren() : $this->arguments['content'];

        return GeneralUtility::quoteJSvalue($content);
    }
}
