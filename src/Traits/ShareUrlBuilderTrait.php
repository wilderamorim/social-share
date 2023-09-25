<?php

namespace ElePHPant\SocialShare\Traits;

use ElePHPant\SocialShare\Context\SocialShareContext;

trait ShareUrlBuilderTrait
{
    public function __construct(private readonly SocialShareContext $context)
    {
        //
    }

    protected function buildShareUrl(string $baseUrl, array $queryParams): string
    {
        return $baseUrl . '?' . http_build_query($queryParams);
    }

    protected function formatUsername(?string $username): string
    {
        return str_replace('@', '', $username);
    }
}