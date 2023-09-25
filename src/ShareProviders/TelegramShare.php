<?php

namespace ElePHPant\SocialShare\ShareProviders;

use ElePHPant\SocialShare\Contracts\ShareableInterface;
use ElePHPant\SocialShare\Traits\ShareUrlBuilderTrait;

class TelegramShare implements ShareableInterface
{
    use ShareUrlBuilderTrait;

    public function generateUrl(): string
    {
        return $this->buildShareUrl('https://telegram.me/share/url', [
            'url' => $this->context->getUrl(),
            'text' => $this->context->getText(),
        ]);
    }
}