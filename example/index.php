<?php


require dirname(__DIR__, 1) . '/vendor/autoload.php';


use ElePHPant\SocialShare\SocialShare;


// [required] $url, [required] $text
$share = new SocialShare('https://github.com', 'Build software better, together');

?>
<ul>
    <li><a href="<?= $share->facebook(); ?>" target="_blank">Facebook</a></li>

    <!-- [optional] $username -->
    <li><a href="<?= $share->twitter('@rasmus'); ?>" target="_blank">Twitter</a></li>

    <!-- [optional] $summary, [optional] $source -->
    <li><a href="<?= $share->linkedin('GitHub is a development platform inspired by the way you work.', 'GitHub'); ?>" target="_blank">LinkedIn</a></li>

    <!-- [optional] $image -->
    <li><a href="<?= $share->pinterest('https://placehold.it/1920x1080'); ?>" target="_blank">Pinterest</a></li>

    <li><a href="<?= $share->whatsapp(); ?>" target="_blank">WhatsApp</a></li>
    <li><a href="<?= $share->telegram(); ?>" target="_blank">Telegram</a></li>
    <li><a href="<?= $share->reddit(); ?>" target="_blank">Reddit</a></li>

    <!-- [optional] $recipientEmail -->
    <li><a href="<?= $share->email('john-doe@domain.com'); ?>" target="_blank">Email</a></li>
</ul>
