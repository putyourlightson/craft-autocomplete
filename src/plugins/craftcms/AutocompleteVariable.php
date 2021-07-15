<?php

namespace putyourlightson\autocomplete\plugins\craftcms;

use craft\commerce\web\twig\CraftVariableBehavior;
use craft\web\twig\variables\CraftVariable;

/**
 * Adds variables to the global Craft Variable.
 *
 * @mixin CraftVariableBehavior
 */
class AutocompleteVariable extends CraftVariable { }
