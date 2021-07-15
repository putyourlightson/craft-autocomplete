<?php

namespace putyourlightson\autocomplete\putyourlightson;

use putyourlightson\campaign\elements\CampaignElement;
use putyourlightson\campaign\elements\ContactElement;
use putyourlightson\campaign\elements\MailingListElement;
use putyourlightson\campaign\elements\SegmentElement;
use putyourlightson\campaign\elements\SendoutElement;
use putyourlightson\sprig\variables\PaginateVariable;
use putyourlightson\sprig\variables\SprigVariable;
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
            // Campaign
            'campaign' => new CampaignElement(),
            'contact' => new ContactElement(),
            'mailingList' => new MailingListElement(),
            'segment' => new SegmentElement(),
            'sendout' => new SendoutElement(),

            // Sprig
            'sprig' => new SprigVariable(),
            'pageInfo' => new PaginateVariable(),
        ];
    }
}
