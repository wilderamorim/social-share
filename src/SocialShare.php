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
    protected static $url;

    /** @var string */
    protected static $text;

    /** @var */
    protected static $href;

    /**
     * SocialShare constructor.
     * @param string $url   Address of the page to be shared
     * @param string $text  Page title or whatever title you want to assign to the content
     */
    public function __construct(string $url, string $text)
    {
        self::$url = $url;
        self::$text = $text;
    }

    /**
     * @return string
     */
    public static function facebook(): string
    {
        self::$href = 'https://www.facebook.com/sharer/sharer.php?';
        self::$href .= http_build_query(['u' => self::$url]);
        return self::$href;
    }

    /**
     * @param string|null $username Your Twitter username, e.g., rasmus
     * @return string
     */
    public static function twitter(?string $username = null): string
    {
        self::$href = 'http://twitter.com/share?';
        self::$href .= http_build_query([
            'text' => self::$text,
            'url' => self::$url,
            'via' => str_replace('@', null, $username)
        ]);
        return self::$href;
    }

    /**
     * @param string|null $summary  Description of page content
     * @param string|null $source   Name of the content source, such as the name of the website or blog where the content is
     * @return string
     */
    public static function linkedin(?string $summary = null, ?string $source = null): string
    {
        self::$href = 'https://www.linkedin.com/shareArticle?mini=true&';
        self::$href .= http_build_query([
            'title' => self::$text,
            'summary' => $summary,
            'url' => self::$url,
            'source' => $source
        ]);
        return self::$href;
    }

    /**
     * @param string $image Path (URL) to the image.
     * @return string
     */
    public static function pinterest(string $image): string
    {
        self::$href = 'https://pinterest.com/pin/create/button/?';
        self::$href .= http_build_query([
            'url' => self::$url,
            'media' => $image,
            'description' => self::$text
        ]);
        return self::$href;
    }

    /**
     * @return string
     */
    public static function whatsapp(): string
    {
        self::$href = 'https://wa.me/?';
        self::$href .= http_build_query(['text' => self::$text . ' - ' . self::$url]);
        return self::$href;
    }

    /**
     * @return string
     */
    public static function telegram(): string
    {
        self::$href = 'https://telegram.me/share/url?';
        self::$href .= http_build_query([
            'url' => self::$url,
            'text' => self::$text
        ]);
        return self::$href;
    }

    /**
     * @return string
     */
    public static function reddit(): string
    {
        self::$href = 'https://www.reddit.com/submit?';
        self::$href .= http_build_query([
            'title' => self::$text,
            'url' => self::$url
        ]);
        return self::$href;
    }

    /**
     * @param string|null $recipientEmail   Recipient's Email
     * @return string
     */
    public static function email(?string $recipientEmail = null): string
    {
        self::$href = 'mailto:' . $recipientEmail;
        self::$href .= '?subject=' . self::$text;
        self::$href .= '&body=' . urlencode(self::$url);
        return self::$href;
    }
}