<?php
/**
 * @copyright Copyright (c) nystudio107, PutYourLightsOn
 */

namespace putyourlightson\autocomplete\craftcms;

use craft\commerce\elements\Order;
use craft\commerce\elements\Product;
use craft\commerce\models\LineItem;
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
            // Commerce
            'cart' => new Order(),
            'lineItem' => new LineItem(),
            'order' => new Order(),
            'product' => new Product(),
        ];
    }
}
