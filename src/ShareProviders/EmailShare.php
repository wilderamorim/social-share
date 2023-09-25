<?php

namespace ElePHPant\SocialShare\ShareProviders;

use ElePHPant\SocialShare\Contracts\ShareableInterface;
use ElePHPant\SocialShare\Traits\ShareUrlBuilderTrait;

class EmailShare implements ShareableInterface
{
    use ShareUrlBuilderTrait;

    public function generateUrl(?string $recipientEmail = null): string
    {
        $body = urlencode($this->context->getUrl());
        return "mailto:{$recipientEmail}?subject={$this->context->getText()}&body={$body}";
    }
}