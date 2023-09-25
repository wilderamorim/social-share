<?php

namespace ElePHPant\SocialShare\ShareProviders;

use ElePHPant\SocialShare\Contracts\ShareableInterface;
use ElePHPant\SocialShare\Traits\ShareUrlBuilderTrait;

class WhatsAppShare implements ShareableInterface
{
    use ShareUrlBuilderTrait;

    public function generateUrl(): string
    {
        return $this->buildShareUrl('https://wa.me/', [
            'text' => $this->context->getText() . ' - ' . $this->context->getUrl(),
        ]);
    }
}