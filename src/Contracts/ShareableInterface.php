<?php

namespace ElePHPant\SocialShare\Contracts;

interface ShareableInterface
{
    public function generateUrl(): string;
}