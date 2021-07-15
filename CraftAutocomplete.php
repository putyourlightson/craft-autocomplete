<?php
/**
 * CraftAutocomplete for Craft CMS 3.x
 * https://github.com/putyourlightson/craft-autocomplete
 *
 * Provides autocompletion for Craft and plugins in Twig templates.
 *
 * This is intended to be used with the Symfony Plugin for PhpStorm:
 * https://plugins.jetbrains.com/plugin/7219-symfony-plugin
 *
 * Adapted from `FauxTwigExtension.php` by nystudio107 as documented in the article:
 * https://nystudio107.com/blog/auto-complete-craft-cms-3-apis-in-twig-with-phpstorm
 *
 * Place the file somewhere in your project (for example in the `config` directory)
 * or include it via PhpStorm Settings -> Include Path.
 * You never call it, it's never included anywhere via PHP directly nor does it affect other
 * classes or Twig in any way. But PhpStorm will index it, and think all those variables
 * are in every single template and thus allows you to use Intellisense auto completion.
 */

/**
 * Class CraftAutocompleteVariable extends the actual Craft Variable, but with added properties
 * that reflect things that are added to the Craft Variable dynamically by
 * plugins or modules.
 *
 * @property \craft\web\twig\variables\Cp $cp
 * @property \craft\web\twig\variables\Io $io
 * @property \craft\web\twig\variables\Routes $routes
 * @property \craft\web\twig\variables\CategoryGroups $categoryGroups
 * @property \craft\web\twig\variables\Config $config
 * @property \craft\web\twig\variables\Deprecator $deprecator
 * @property \craft\web\twig\variables\ElementIndexes $elementIndexes
 * @property \craft\web\twig\variables\EntryRevisions $entryRevisions
 * @property \craft\web\twig\variables\Feeds $feeds
 * @property \craft\web\twig\variables\Fields $fields
 * @property \craft\web\twig\variables\Globals $globals
 * @property \craft\web\twig\variables\I18N $i18n
 * @property \craft\web\twig\variables\Request $request
 * @property \craft\web\twig\variables\Sections $sections
 * @property \craft\web\twig\variables\SystemSettings $systemSettings
 * @property \craft\web\twig\variables\UserSession $session
 *
 * @mixin \craft\commerce\web\twig\CraftVariableBehavior
 *
 * Third-party Plugins
 *
 * @property \nystudio107\twigpack\variables\ManifestVariable $twigpack
 * @property \putyourlightson\blitz\variables\BlitzVariable $blitz
 * @property \putyourlightson\campaign\variables\CampaignVariable $campaign
 * @property \putyourlightson\sherlock\variables\SherlockVariable $sherlock
 * @property \putyourlightson\sprig\variables\SprigVariable $sprig
 */
class CraftAutocompleteVariable extends \craft\web\twig\variables\CraftVariable
{
}

/**
 * Class CraftAutocompleteTwigExtension provides a Twig extension for PhpStorm to index
 * so that we get Intellisense auto-complete in our Twig templates.
 */
class CraftAutocompleteTwigExtension extends \Twig\Extension\AbstractExtension implements \Twig\Extension\GlobalsInterface
{
    public function getGlobals(): array
    {
        return [
            // Craft Variable
            'craft' => new CraftAutocompleteVariable(),
            // Craft Elements
            'asset' => new \craft\elements\Asset(),
            'category' => new \craft\elements\Category(),
            'entry' => new \craft\elements\Entry(),
            'tag' => new \craft\elements\Tag(),
            'section' => new \craft\models\Section(),
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
            'currentUser' => new \craft\elements\User(),
            'currentSite' => new \craft\models\Site(),
            'now' => new \DateTime(),
            // Commerce Elements
            'lineItem' => new \craft\commerce\models\LineItem(),
            'order' => new \craft\commerce\elements\Order(),
            'product' => new \craft\commerce\elements\Product(),
            'cart' => new \craft\commerce\elements\Order(),
            'lineItems' => new \craft\commerce\models\LineItem(),

            // Third-party Plugins
            // Campaign
            'campaign' => new \putyourlightson\campaign\elements\CampaignElement(),
            'contact' => new \putyourlightson\campaign\elements\ContactElement(),
            'mailingList' => new \putyourlightson\campaign\elements\MailingListElement(),
            'segment' => new \putyourlightson\campaign\elements\SegmentElement(),
            'sendout' => new \putyourlightson\campaign\elements\SendoutElement(),
            // Seomatic
            'seomatic' => new \nystudio107\seomatic\variables\SeomaticVariable(),
            // Sprig
            'sprig' => new \putyourlightson\sprig\variables\SprigVariable(),
            'pageInfo' => new \putyourlightson\sprig\variables\PaginateVariable(),
        ];
    }
}
