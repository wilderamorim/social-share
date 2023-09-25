<?php

namespace ElePHPant\SocialShare\ShareProviders;

use ElePHPant\SocialShare\Contracts\ShareableInterface;
use ElePHPant\SocialShare\Traits\ShareUrlBuilderTrait;

class FacebookShare implements ShareableInterface
{
    use ShareUrlBuilderTrait;

    public function generateUrl(): string
    {
        return $this->buildShareUrl('https://www.facebook.com/sharer/sharer.php', [
            'u' => $this->context->getUrl(),
        ]);
    }
}