<?php

namespace ElePHPant\SocialShare;

use ElePHPant\SocialShare\Context\SocialShareContext;
use ElePHPant\SocialShare\ShareProviders\{
    EmailShare,
    FacebookShare,
    LinkedInShare,
    PinterestShare,
    RedditShare,
    TelegramShare,
    TwitterShare,
    WhatsAppShare,
};

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
    /** @var SocialShareContext $context */
    protected static SocialShareContext $context;

    /**
     * @param string $url   Address of the page to be shared
     * @param string $text  Page title or whatever title you want to assign to the content
     */
    public function __construct(string $url, string $text)
    {
        self::$context = new SocialShareContext($url, $text);
    }

    /**
     * @return string
     */
    public static function facebook(): string
    {
        return (new FacebookShare(self::$context))->generateUrl();
    }

    /**
     * @param string|null $username Your TwitterShare username, e.g., rasmus
     * @return string
     */
    public static function twitter(?string $username = null): string
    {
        return (new TwitterShare(self::$context))->generateUrl($username);
    }

    /**
     * @param string|null $summary  Description of page content
     * @param string|null $source   Name of the content source, such as the name of the website or blog where the content is
     * @return string
     */
    public static function linkedin(?string $summary = null, ?string $source = null): string
    {
        return (new LinkedInShare(self::$context))->generateUrl($summary, $source);
    }

    /**
     * @param string|null $image Path (URL) to the image.
     * @return string
     */
    public static function pinterest(?string $image = null): string
    {
        return (new PinterestShare(self::$context))->generateUrl($image);
    }

    /**
     * @return string
     */
    public static function whatsapp(): string
    {
        return (new WhatsAppShare(self::$context))->generateUrl();
    }

    /**
     * @return string
     */
    public static function telegram(): string
    {
        return (new TelegramShare(self::$context))->generateUrl();
    }

    /**
     * @return string
     */
    public static function reddit(): string
    {
        return (new RedditShare(self::$context))->generateUrl();
    }

    /**
     * @param string|null $recipientEmail   Recipient's EmailShare
     * @return string
     */
    public static function email(?string $recipientEmail = null): string
    {
        return (new EmailShare(self::$context))->generateUrl($recipientEmail);
    }
}