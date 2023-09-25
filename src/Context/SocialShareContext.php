<?php

namespace ElePHPant\SocialShare\Context;

final readonly class SocialShareContext
{
    /**
     * @param string $url   Address of the page to be shared
     * @param string $text  Page title or whatever title you want to assign to the content
     */
    public function __construct(private string $url, private string $text)
    {
        //
    }

    public function getUrl(): string
    {
        return $this->url;
    }

    public function getText(): string
    {
        return $this->text;
    }
}