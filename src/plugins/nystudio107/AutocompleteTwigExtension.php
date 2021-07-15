<?php
/**
 * @copyright Copyright (c) nystudio107, PutYourLightsOn
 */

namespace putyourlightson\autocomplete\plugins\nystudio107;

use nystudio107\seomatic\variables\SeomaticVariable;
use Twig\Extension\AbstractExtension;
use Twig\Extension\GlobalsInterface;

/**
 * Adds globals to autocomplete in Twig templates.
 */
class AutocompleteTwigExtension extends AbstractExtension implements GlobalsInterface
{
    public function getGlobals(): array
    {
        return [
            // Seomatic
            'seomatic' => new SeomaticVariable(),
        ];
    }
}
