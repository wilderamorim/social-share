<?php

namespace ElePHPant\Tests\Unit;

use ElePHPant\SocialShare\SocialShare;
use PHPUnit\Framework\TestCase;

class SocialShareTest extends TestCase
{
    protected static SocialShare $socialShare;

    protected function setUp(): void
    {
        parent::setUp();

        self::$socialShare = new SocialShare(
            url: 'https://github.com',
            text: 'Build software better, together',
        );
    }

    public function test_share_on_facebook(): void
    {
        $expectation = 'https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fgithub.com';

        $this->assertEquals(
            $expectation,
            self::$socialShare::facebook(),
        );
    }

    public function test_share_on_twitter(): void
    {
        $expectation = 'https://twitter.com/share?text=Build+software+better%2C+together&url=https%3A%2F%2Fgithub.com&via=rasmus';

        $this->assertEquals(
            $expectation,
            self::$socialShare::twitter(
                username: '@rasmus',
            ),
        );
    }

    public function test_share_on_twitter_without_username(): void
    {
        $expectation = 'https://twitter.com/share?text=Build+software+better%2C+together&url=https%3A%2F%2Fgithub.com&via=';

        $this->assertEquals(
            $expectation,
            self::$socialShare::twitter(),
        );
    }

    public function test_share_on_linkedin(): void
    {
        $expectation = 'https://www.linkedin.com/shareArticle?mini=true&title=Build+software+better%2C+together&summary=GitHub+is+a+development+platform+inspired+by+the+way+you+work.&url=https%3A%2F%2Fgithub.com&source=GitHub';

        $this->assertEquals(
            $expectation,
            self::$socialShare::linkedin(
                summary: 'GitHub is a development platform inspired by the way you work.',
                source: 'GitHub',
            ),
        );
    }

    public function test_share_on_linkedin_without_summary_and_source(): void
    {
        $expectation = 'https://www.linkedin.com/shareArticle?mini=true&title=Build+software+better%2C+together&url=https%3A%2F%2Fgithub.com';

        $this->assertEquals(
            $expectation,
            self::$socialShare::linkedin(),
        );
    }

    public function test_share_on_pinterest(): void
    {
        $expectation = 'https://pinterest.com/pin/create/button/?url=https%3A%2F%2Fgithub.com&media=https%3A%2F%2Fplacehold.it%2F1920x1080&description=Build+software+better%2C+together';

        $this->assertEquals(
            $expectation,
            self::$socialShare::pinterest(
                image: 'https://placehold.it/1920x1080',
            ),
        );
    }

    public function test_share_on_pinterest_without_image(): void
    {
        $expectation = 'https://pinterest.com/pin/create/button/?url=https%3A%2F%2Fgithub.com&description=Build+software+better%2C+together';

        $this->assertEquals(
            $expectation,
            self::$socialShare::pinterest(),
        );
    }

    public function test_share_on_whatsapp(): void
    {
        $expectation = 'https://wa.me/?text=Build+software+better%2C+together+-+https%3A%2F%2Fgithub.com';

        $this->assertEquals(
            $expectation,
            self::$socialShare::whatsapp(),
        );
    }

    public function test_share_on_telegram(): void
    {
        $expectation = 'https://telegram.me/share/url?url=https%3A%2F%2Fgithub.com&text=Build+software+better%2C+together';

        $this->assertEquals(
            $expectation,
            self::$socialShare::telegram(),
        );
    }

    public function test_share_on_reddit(): void
    {
        $expectation = 'https://www.reddit.com/submit?title=Build+software+better%2C+together&url=https%3A%2F%2Fgithub.com';

        $this->assertEquals(
            $expectation,
            self::$socialShare::reddit(),
        );
    }

    public function test_share_on_email(): void
    {
        $expectation = 'mailto:?subject=Build software better, together&body=https%3A%2F%2Fgithub.com';

        $this->assertEquals(
            $expectation,
            self::$socialShare::email(),
        );
    }

    public function test_share_on_email_with_recipient_email(): void
    {
        $expectation = 'mailto:john.doe@domain.com?subject=Build software better, together&body=https%3A%2F%2Fgithub.com';

        $this->assertEquals(
            $expectation,
            self::$socialShare::email(
                recipientEmail: 'john.doe@domain.com',
            ),
        );
    }
}
