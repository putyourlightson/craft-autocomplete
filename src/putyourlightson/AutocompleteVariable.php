<?php

namespace putyourlightson\autocomplete\putyourlightson;

use craft\web\twig\variables\CraftVariable;
use putyourlightson\blitz\variables\BlitzVariable;
use putyourlightson\campaign\variables\CampaignVariable;
use putyourlightson\sherlock\variables\SherlockVariable;
use putyourlightson\sprig\variables\SprigVariable;

/**
 * Adds variables to the global Craft Variable.
 *
 * @property BlitzVariable $blitz
 * @property CampaignVariable $campaign
 * @property SherlockVariable $sherlock
 * @property SprigVariable $sprig
 */
class AutocompleteVariable extends CraftVariable { }
