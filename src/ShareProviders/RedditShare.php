<?php

namespace ElePHPant\SocialShare\ShareProviders;

use ElePHPant\SocialShare\Contracts\ShareableInterface;
use ElePHPant\SocialShare\Traits\ShareUrlBuilderTrait;

class RedditShare implements ShareableInterface
{
    use ShareUrlBuilderTrait;

    public function generateUrl(): string
    {
        return $this->buildShareUrl('https://www.reddit.com/submit', [
            'title' => $this->context->getText(),
            'url' => $this->context->getUrl(),
        ]);
    }
}