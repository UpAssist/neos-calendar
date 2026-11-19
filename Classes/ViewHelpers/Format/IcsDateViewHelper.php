<?php
namespace UpAssist\Neos\Calendar\ViewHelpers\Format;

use Neos\FluidAdaptor\Core\ViewHelper\AbstractViewHelper;

/**
 * Formats a date as an iCalendar date-time (e.g. 20261119T143000)
 */
class IcsDateViewHelper extends AbstractViewHelper
{
    public function initializeArguments(): void
    {
        $this->registerArgument('dateTime', \DateTimeInterface::class, 'The date to format; defaults to the tag content');
    }

    public function render(): string
    {
        $dateTime = $this->arguments['dateTime'] ?? $this->renderChildren();
        if (!$dateTime instanceof \DateTimeInterface) {
            return '';
        }

        return $dateTime->format('Ymd\THi') . '00';
    }
}
