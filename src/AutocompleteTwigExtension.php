<?php
/**
 * @copyright Copyright (c) nystudio107, PutYourLightsOn
 */

namespace putyourlightson\autocomplete;

use craft\elements\Asset;
use craft\elements\Category;
use craft\elements\Entry;
use craft\elements\Tag;
use craft\elements\User;
use craft\models\Section;
use craft\models\Site;
use DateTime;
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
            // Craft Variable
            'craft' => new AutocompleteVariable(),

            // Craft Elements
            'asset' => new Asset(),
            'category' => new Category(),
            'entry' => new Entry(),
            'tag' => new Tag(),
            'section' => new Section(),

            // Craft "Constants"
            'SORT_ASC' => 4,
            'SORT_DESC' => 3,
            'SORT_REGULAR' => 0,
            'SORT_NUMERIC' => 1,
            'SORT_STRING' => 2,
            'SORT_LOCALE_STRING' => 5,
            'SORT_NATURAL' => 6,
            'SORT_FLAG_CASE' => 8,
            'POS_HEAD' => 1,
            'POS_BEGIN' => 2,
            'POS_END' => 3,
            'POS_READY' => 4,
            'POS_LOAD' => 5,

            // Craft Globals
            'currentUser' => new User(),
            'currentSite' => new Site(),
            'now' => new DateTime(),
        ];
    }
}
