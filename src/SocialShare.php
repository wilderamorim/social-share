<?php


namespace ElePHPant\SocialShare;


/**
 * Class SocialShare
 *
 * Please report bugs on https://github.com/wilderamorim/social-share/issues
 *
 * @package ElePHPant\SocialShare
 * @author Wilder Amorim <agencia@uebi.com.br>
 * @copyright Copyright (c) 2020, Uebi. All rights reserved
 * @license MIT License
 */
class SocialShare
{
    /** @var string */
    protected $url;

    /** @var string */
    protected $text;

    /**
     * SocialShare constructor.
     * @param string $url   Address of the page to be shared
     * @param string $text  Page title or whatever title you want to assign to the content
     */
    public function __construct(string $url, string $text)
    {
        $this->url = $url;
        $this->text = $text;
    }

    /**
     * @return string
     */
    public function facebook(): string
    {
        $url = 'https://www.facebook.com/sharer/sharer.php?';
        $url .= http_build_query(['u' => $this->url]);
        return $url;
    }

    /**
     * @param string|null $username Your Twitter username, e.g., rasmus
     * @return string
     */
    public function twitter(?string $username = null): string
    {
        $url = 'http://twitter.com/share?';
        $url .= http_build_query([
            'text' => $this->text,
            'url' => $this->url,
            'via' => str_replace('@', null, $username)
        ]);
        return $url;
    }

    /**
     * @param string|null $summary  Description of page content
     * @param string|null $source   Name of the content source, such as the name of the website or blog where the content is
     * @return string
     */
    public function linkedin(?string $summary = null, ?string $source = null): string
    {
        $url = 'https://www.linkedin.com/shareArticle?mini=true&';
        $url .= http_build_query([
            'title' => $this->text,
            'summary' => $summary,
            'url' => $this->url,
            'source' => $source
        ]);
        return $url;
    }

    /**
     * @param string|null $image Path (URL) to the image.
     * @return string
     */
    public function pinterest(?string $image = null): string
    {
        $url = 'https://pinterest.com/pin/create/button/?';
        $url .= http_build_query([
            'url' => $this->url,
            'media' => $image,
            'description' => $this->text
        ]);
        return $url;
    }

    /**
     * @return string
     */
    public function whatsapp(): string
    {
        $url = 'https://wa.me/?';
        $url .= http_build_query(['text' => $this->text . ' - ' . $this->url]);
        return $url;
    }

    /**
     * @return string
     */
    public function telegram(): string
    {
        $url = 'https://telegram.me/share/url?';
        $url .= http_build_query([
            'url' => $this->url,
            'text' => $this->text
        ]);
        return $url;
    }

    /**
     * @return string
     */
    public function reddit(): string
    {
        $url = 'https://www.reddit.com/submit?';
        $url .= http_build_query([
            'title' => $this->text,
            'url' => $this->url
        ]);
        return $url;
    }

    /**
     * @param string|null $recipientEmail   Recipient's Email
     * @return string
     */
    public function email(?string $recipientEmail = null): string
    {
        $url = 'mailto:' . $recipientEmail;
        $url .= '?subject=' . $this->text;
        $url .= '&body=' . urlencode($this->url);
        return $url;
    }
}