<?php


require __DIR__ . '/assets/config.php';
require dirname(__DIR__, 1) . '/vendor/autoload.php';


use ElePHPant\SocialShare\SocialShare;


//url, text
$share = new SocialShare('https://github.com', 'Build software better, together');
//echo $share->facebook();
//echo $share->twitter();
//echo $share->linkedin();
//echo $share->pinterest('https://i.picsum.photos/id/2/1920/1080.jpg?hmac=cbLvoOja4QBkrKgBCQu3q8Q-DRT_LGYGES1NG_4QGCY');
//echo $share->whatsapp();
//echo $share->telegram();
//echo $share->reddit();
//echo $share->email('john-doe@domain.com');
?>
<ul>
    <li><a href="<?= $share->facebook(); ?>" target="_blank">Facebook</a></li>
    <li><a href="<?= $share->twitter(); ?>" target="_blank">Twitter</a></li>
    <li><a href="<?= $share->linkedin(); ?>" target="_blank">LinkedIn</a></li>
    <li><a href="<?= $share->pinterest('https://i.picsum.photos/id/2/1920/1080.jpg?hmac=cbLvoOja4QBkrKgBCQu3q8Q-DRT_LGYGES1NG_4QGCY'); ?>" target="_blank">Pinterest</a></li>
    <li><a href="<?= $share->whatsapp(); ?>" target="_blank">WhatsApp</a></li>
    <li><a href="<?= $share->telegram(); ?>" target="_blank">Telegram</a></li>
    <li><a href="<?= $share->reddit(); ?>" target="_blank">Reddit</a></li>
    <li><a href="<?= $share->email('john-doe@domain.com'); ?>" target="_blank">Email</a></li>
</ul>
