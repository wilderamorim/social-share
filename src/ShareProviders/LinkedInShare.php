<?php

namespace ElePHPant\SocialShare\ShareProviders;

use ElePHPant\SocialShare\Contracts\ShareableInterface;
use ElePHPant\SocialShare\Traits\ShareUrlBuilderTrait;

class LinkedInShare implements ShareableInterface
{
    use ShareUrlBuilderTrait;

    public function generateUrl(?string $summary = null, ?string $source = null): string
    {
        return $this->buildShareUrl('https://www.linkedin.com/shareArticle', [
            'mini' => 'true',
            'title' => $this->context->getText(),
            'summary' => $summary,
            'url' => $this->context->getUrl(),
            'source' => $source
        ]);
    }
}