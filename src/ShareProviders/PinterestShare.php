<?php

namespace ElePHPant\SocialShare\ShareProviders;

use ElePHPant\SocialShare\Contracts\ShareableInterface;
use ElePHPant\SocialShare\Traits\ShareUrlBuilderTrait;

class PinterestShare implements ShareableInterface
{
    use ShareUrlBuilderTrait;

    public function generateUrl(?string $image = null): string
    {
        return $this->buildShareUrl('https://pinterest.com/pin/create/button/', [
            'url' => $this->context->getUrl(),
            'media' => $image,
            'description' => $this->context->getText(),
        ]);
    }
}