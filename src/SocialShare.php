<?php


namespace ElePHPant\SocialShare;


/**
 * Class SocialShare
 * @package ElePHPant\SocialShare
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
     * @param string $url
     * @param string $text
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
        return 'https://www.facebook.com/sharer/sharer.php?u=' . self::$url;
    }

    /**
     * @param string|null $profile
     * @return string
     */
    public static function twitter(?string $profile = null): string
    {
        self::$href = 'http://twitter.com/share?';
        self::$href .= http_build_query([
            'text' => self::$text,
            'url' => self::$url,
            'via' => str_replace('@', null, $profile)
        ]);
        return self::$href;
    }

    /**
     * @param string|null $summary
     * @param string|null $source
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
     * @param string $image
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
        return 'https://wa.me/?text=' . urlencode(self::$text . ' - ' . self::$url);
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
     * @param string|null $recipientEmail
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