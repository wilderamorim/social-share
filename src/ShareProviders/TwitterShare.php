<?php

namespace ElePHPant\SocialShare\ShareProviders;

use ElePHPant\SocialShare\Contracts\ShareableInterface;
use ElePHPant\SocialShare\Traits\ShareUrlBuilderTrait;

class TwitterShare implements ShareableInterface
{
    use ShareUrlBuilderTrait;

    public function generateUrl(?string $username = null): string
    {
        return $this->buildShareUrl('https://twitter.com/share', [
            'text' => $this->context->getText(),
            'url' => $this->context->getUrl(),
            'via' => $this->formatUsername($username),
        ]);
    }
}