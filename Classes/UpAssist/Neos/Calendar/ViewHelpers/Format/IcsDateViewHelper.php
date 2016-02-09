<?php
namespace UpAssist\Neos\Calendar\ViewHelpers\Format;

use TYPO3\Flow\Annotations as Flow;
use TYPO3\Fluid\Core\ViewHelper\AbstractViewHelper;

/**
 * Class IcsDateViewHelper
 * @package UpAssist\Neos\Calendar\ViewHelpers
 */
class IcsDateViewHelper extends AbstractViewHelper
{
    /**
     * @param \DateTime|null $dateTime
     * @return mixed
     */
    public function render(\DateTime $dateTime = null) {
        if ($dateTime === null) {
            $dateTime = $this->renderChildren();
        }

        return $dateTime->format('Ymd') . 'T' . $dateTime->format('Hi') . '00';
    }
}
