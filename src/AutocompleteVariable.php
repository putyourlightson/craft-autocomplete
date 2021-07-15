<?php
/**
 * @copyright Copyright (c) nystudio107, PutYourLightsOn
 */

namespace putyourlightson\autocomplete;

use craft\web\twig\variables\CraftVariable;
use putyourlightson\blitz\variables\BlitzVariable;

/**
 * Adds variables to the global Craft Variable.
 *
 * @mixin craftcms\AutocompleteVariable
 * @mixin nystudio107\AutocompleteVariable
 * @mixin putyourlightson\AutocompleteVariable
 */
class AutocompleteVariable extends CraftVariable { }
